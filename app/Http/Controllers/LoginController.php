<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)){
            return redirect('/admin/');
        }

        return redirect()->back();
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect('/login');
    }
}
