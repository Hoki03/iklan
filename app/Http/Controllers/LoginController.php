<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('login.login');
    }

    public function login_proses(Request $request)
    {
        $request->validate([
            'email'     => 'required',
            'password'  => 'required',
        ]);

        $data_user = [
            'email'     => $request->email,
            'password'  => $request->password,
        ];

        if (Auth::attempt($data_user) && Auth::user()->level == "admin") {
            return redirect()->route('admin.beranda');
        } else if (Auth::attempt($data_user) && Auth::user()->level == "operator") {
            return redirect()->route('operator.beranda');
        } else {
            return redirect()->route('login')->with('failed', 'Email atau Password Salah');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('login')->with('succes', 'Kamu telah logout');
    }
}
