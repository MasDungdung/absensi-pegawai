<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
}
