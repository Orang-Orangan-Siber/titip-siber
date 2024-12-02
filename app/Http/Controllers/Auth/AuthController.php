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
            'nomorInduk' => 'required|max:255',
            'password' => 'required',
        ]);

        $remember = $request->remember_me;

        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();

            return redirect()->intended('/');
        } else {
            return back()->withErrors(['LoginError' => "Anda bukan warga siber"]);
        }
    }

    public function logout(Request $request) {
        $request->session()->regenerateToken();
        $request->session()->invalidate();

        Auth::logout();

        return redirect('/auth/login');

    }
}
