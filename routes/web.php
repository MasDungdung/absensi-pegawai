<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;



Route::get('/', function () {
    return view('welcome');
});


Route::get('/login',[LoginController::class,'halamanlogin'])->name('login');
Route::post('/ceklogin',[LoginController::class,'ceklogin'])->name('ceklogin');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');


Route::middleware(['auth', 'second'])->group(function () {
    Route::get('/home',[HomeController::class,'index'])->name('home');
});