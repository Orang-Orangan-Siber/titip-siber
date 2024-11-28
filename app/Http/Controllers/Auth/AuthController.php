<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AuthController extends Controller
{
    public function loginView() {
        return Inertia::render('Auth/Login');
    }

    public function registerView() {
        return Inertia::render('Auth/Register');
    }
}
