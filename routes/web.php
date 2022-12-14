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
    Route::get('/absensi-masuk',[AbsensiController::class,'index'])->name('absensi-masuk');
    Route::post('/simpan-absensi-masuk',[AbsensiController::class,'absen_masuk'])->name('simpan-absensi-masuk');
    Route::get('/absensi-pulang',[AbsensiController::class,'pulang'])->name('absensi-pulang');
    Route::post('/simpan-absensi-pulang',[AbsensiController::class,'absen_pulang'])->name('simpan-absensi-pulang');
});
