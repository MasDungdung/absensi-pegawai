<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AbsensiController;



Route::get('/', function () {
    return view('welcome');
});


Route::get('/login',[LoginController::class,'halamanlogin'])->name('login');
Route::post('/ceklogin',[LoginController::class,'ceklogin'])->name('ceklogin');
Route::get('/registrasi',[LoginController::class,'registrasi'])->name('registrasi');
Route::post('/simpanregistrasi',[LoginController::class,'simpanregistrasi'])->name('simpanregistrasi');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');

Route::group(['middleware'=>['auth','ceklevel:admin,karyawan']],function(){
    Route::get('/home',[HomeController::class,'index'])->name('home');
});

Route::middleware(['auth'])->group(function () {
    Route::post('/simpan-absensi-masuk',[AbsensiController::class,'store'])->name('simpan-absensi-masuk');
    Route::get('/absensi-masuk',[AbsensiController::class,'index'])->name('absensi-masuk');
});

// Route::group(['middleware'=>['auth','ceklevel:karyawan']],function(){ 
//     Route::get('/absensi-masuk',[AbsensiController::class,'index'])->name('absensi-masuk'); 
// });
