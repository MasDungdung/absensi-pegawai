<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\User;
use Auth;

class LoginController extends Controller
{
    public function halamanlogin()
    {
        return view('login.login-user');
    }

    public function ceklogin(Request $request)
    {
        if (Auth::attempt($request->only('email','password'))) {
            return view('home');       
        }
        return redirect('login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }

    public function registrasi()
    {
        return view('login.register-user');
    }

    public function simpanregistrasi(Request $request)
    {
        // dd($request->all());
        User::create([
            'name'              => $request->name,
            'level'             => 'karyawan',
            'email'             => $request->email,
            'password'          => bcrypt($request->password),
            'remember_token'    => Str::random(60),
        ]);

        return redirect('login');
        // /return view('login.login-user');
    }
}
