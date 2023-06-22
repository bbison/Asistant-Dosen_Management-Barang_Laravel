<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboard_controller;


Route::get('/',[dashboard_controller::class,'index']);
Route::get('/',[dashboard_controller::class,'index']);
Route::post('/',[dashboard_controller::class,'login']);
Route::get('/admin',[dashboard_controller::class,'admin']);
Route::get('/pabrik',[dashboard_controller::class,'pabrik']);
Route::post('/pabrik',[dashboard_controller::class,'tambahpabrik']);
Route::post('/produk',[dashboard_controller::class,'tambahproduk']);
Route::post('/hapusproduk',[dashboard_controller::class,'hapusproduk']);
Route::post('/hapuspabrik',[dashboard_controller::class,'hapuspabrik']);
Route::post('/produk/{id}',[dashboard_controller::class,'updateproduk']);
Route::post('/pabrik/{id}',[dashboard_controller::class,'updatepabrik']);