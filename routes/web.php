<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboard_controller;


Route::get('/',[dashboard_controller::class,'index'])->name('login');
Route::post('/',[dashboard_controller::class,'login']);
Route::get('/admin',[dashboard_controller::class,'admin'])->middleware('auth');
Route::get('/pabrik',[dashboard_controller::class,'pabrik'])->middleware('auth');
Route::post('/pabrik',[dashboard_controller::class,'tambahpabrik'])->middleware('auth');
Route::post('/produk',[dashboard_controller::class,'tambahproduk'])->middleware('auth');
Route::post('/hapusproduk',[dashboard_controller::class,'hapusproduk'])->middleware('auth');
Route::post('/hapuspabrik',[dashboard_controller::class,'hapuspabrik'])->middleware('auth');
Route::post('/produk/{id}',[dashboard_controller::class,'updateproduk'])->middleware('auth');
Route::post('/pabrik/{id}',[dashboard_controller::class,'updatepabrik']) ->middleware('auth');