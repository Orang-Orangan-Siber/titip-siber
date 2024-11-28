<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Users\HomeController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


// AUTHENTICATION 
Route::get('/auth/login', [AuthController::class, 'loginView']);
Route::get('/auth/register', [AuthController::class, 'registerView']);


Route::get('/', [HomeController::class, 'home']);
