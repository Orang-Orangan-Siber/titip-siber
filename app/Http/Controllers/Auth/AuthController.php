<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class AuthController extends Controller
{
    public function loginView() {
        return Inertia::render('Auth/Login');
    }

    public function registerView() {
        return Inertia::render('Auth/Register');
    }

    public function login(Request $request) {
        $credentials = $request->validate([
            'nim' => 'required|max:255',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/');
        } else {
            return back()->withErrors(['LoginError' => "The provided credentials do not match our records."]);
        }
    }
}
