<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class TransactionController extends Controller
{
    public function checkout(Request $request) {
        return Inertia::render('Users/Checkout');
    }

    public function checkoutStatus(Request $request, $status) {
        return Inertia::render('Users/CheckoutStatus');
    }
}
