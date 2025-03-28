<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\MerchantController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\Users\HomeController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


Route::middleware(['auth'])->group(function () {
    
    Route::get('/', [HomeController::class, 'home']);
    Route::get('/auth/logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('/merchant/{slug}', [MerchantController::class, 'merchant'])->name('merchant');
    Route::get('/my-merchant', [MerchantController::class, 'getMyMerchant'])->name('my-merchant');
    Route::get('/my-merchant/register', [MerchantController::class, 'registerView'])->name('my-merchant.register');
    Route::post('/my-merchant/register', [MerchantController::class, 'registerPost'])->name('my-merchant.register.post');

    Route::post('/checkout' ,[TransactionController::class, 'checkout'])->name('checkout');
    Route::get('/checkout/{status}', [TransactionController::class, 'checkoutStatus'])->name('checkout-status');

    Route::post('/payment', [PaymentController::class, 'create'])->name('payment-create');
    Route::get('/payment/{id}', [PaymentController::class, 'create'])->name('payment');

    Route::get('/search', [HomeController::class, 'search']);

    
});

// Route::fallback(function () { return redirect()->intended()->with('error', 'Invalid request method. Please use POST.'); });

Route::middleware(['guest'])->group(function () {
    
    // AUTHENTICATION 
    Route::get('/auth/login', [AuthController::class, 'loginView'])->name('login');
    Route::post('/auth/login', [AuthController::class, 'login']);
    Route::get('/auth/register', [AuthController::class, 'registerView']);

});


