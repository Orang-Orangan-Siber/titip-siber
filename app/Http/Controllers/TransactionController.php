<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class TransactionController extends Controller
{
    public function checkout(Request $request) {
        if (empty($request->cart)) {
            return redirect('/');
        }

        return Inertia::render('Users/Checkout', ['items' => $request->items, 'merchant' => $request->merchant]);
    }

    public function checkoutStatus(Request $request, $status) {
        return Inertia::render('Users/CheckoutStatus');
    }
}
