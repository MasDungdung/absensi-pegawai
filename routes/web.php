<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;



Route::get('/', function () {
    return view('welcome');
});


Route::get('/login',[LoginController::class,'halamanlogin'])->name('login');
Route::post('/ceklogin',[LoginController::class,'ceklogin'])->name('ceklogin');
Route::get('/registrasi',[LoginController::class,'registrasi'])->name('registrasi');
Route::post('/simpanregistrasi',[LoginController::class,'simpanregistrasi'])->name('simpanregistrasi');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');


Route::middleware(['auth', 'ceklevel:admin,karyawan'])->group(function () { 
    Route::get('/home',[HomeController::class,'index'])->name('home');
});