<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Users\HomeController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


// AUTHENTICATION 
Route::get('/auth/login', [AuthController::class, 'loginView'])->name('login');
Route::post('/auth/login', [AuthController::class, 'login']);
Route::get('/auth/register', [AuthController::class, 'registerView']);


Route::get('/', [HomeController::class, 'home']);
