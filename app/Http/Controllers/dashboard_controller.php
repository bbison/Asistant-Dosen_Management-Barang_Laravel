<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\pabrik;
use App\Models\produk;


class dashboard_controller extends Controller
{
    public function index()
    {
        return view('login');
    }
    public function login (Request $request)
    {
        if (Auth::attempt([
            'email'=> $request -> email,
            'password'=> $request -> password,
        ])) {
            $request->session()->regenerate();
 
            return 'berhasil';
        }
        return 'gagal';
    }
    public function admin()
    {
        return view ('layouts.index',[
            'pabrik'=>pabrik::all(),
            'produk'=>produk::all()
        ]);
    }
    public function pabrik()
    {
        return view ('pabrik',[
            'pabrik'=>pabrik::all()
        ]);

    }
    public function tambahpabrik(Request $request)
    {
        pabrik::create([
            'nama_pabrik'=>$request->nama_pabrik,
            'alamat'=>$request->alamat_pabrik,
            'contact'=>$request->contact_pabrik,
        ]);

        return back();
    }
   public function tambahproduk(Request $request)
   {
    produk::create([
        'pabrik_id'=>$request->pabrik_id,
        'nama_produk'=>$request->nama_produk,
        'stok'=>$request->jumlah_stok,
    ]);

    return back();
   } 

   public function hapusproduk(Request $request)
   {
    produk::find($request->idproduk)->delete();
    return back();
   }
   public function hapuspabrik(Request $request)
   {
    $cek = produk::where('pabrik_id',$request->idpabrik)->count();
    if($cek >0){
        return back()->with('pesan','parbik memiliki produk');
    }

    pabrik::find($request->idpabrik)->delete();
    return back();
   }
}
