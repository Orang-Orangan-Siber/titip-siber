<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\MerchantController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\Users\HomeController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


// AUTHENTICATION 
Route::get('/auth/login', [AuthController::class, 'loginView'])->name('login');
Route::post('/auth/login', [AuthController::class, 'login']);
Route::get('/auth/register', [AuthController::class, 'registerView']);
Route::get('/auth/logout', [AuthController::class, 'logout'])->name('logout');


Route::get('/', [HomeController::class, 'home']);
Route::get('/merchant/{slug}', [MerchantController::class, 'merchant']);

Route::get('/checkout' ,[TransactionController::class, 'checkout'])->name('checkout');
Route::get('/search', [HomeController::class, 'search']);
