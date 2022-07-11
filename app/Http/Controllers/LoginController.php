<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function view(){
        return view('login');
    }
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($credentials)){
            $request->session()->regenerate();

            return redirect()->intended('/home');
        }

        return back()->with('loginError', 'Login Failed');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
