<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function home() {
        return Inertia::render('Users/Home');
    }
    
    public function search(Request $request) {
        return Inertia::render('Users/Search');
    }
}
