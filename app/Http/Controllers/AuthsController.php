<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use Illuminate\Http\Request;

class AuthsController extends Controller
{
    public function login()
    {
        return view('auths.login');
    }

    public function postlogin(Request $request)
    {
        // $user = User::where('email', $request->email)->first();
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect('/transaction')->with('sukses', 'Welcome back ' . auth()->user()->name);
        }
        return redirect('/login')->with('error', 'Login gagal Email / Password salah');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login')->with('sukses', 'Anda berhasil logout');
    }
}
