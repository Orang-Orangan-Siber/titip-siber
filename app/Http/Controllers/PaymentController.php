<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Symfony\Contracts\Translation\Test\TranslatorTest;

class PaymentController extends Controller
{
    public function create(Request $request)
    {
        // dd($request->items);

        Transaction::create([
            'user_id' => Auth::user()->id,
            'merchant_id' => $request->merchant,
            'total' => $request->total,
            'note' => $request->note
        ]);


        foreach ($request->items as $item) {
            TransactionDetail::create([
                'transaction_id' => Transaction::where('user_id', Auth::user()->id)->latest()->first()->id,
                'item_id' => $item['id'],
                'quantity' => $item['quantity'],
                'harga' => $item['price']
            ]);
        }
        // dd($request->all());
        \Midtrans\Config::$serverKey = config('midtrans.serverKey');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $params = array(
            'transaction_details' => array(
                'order_id' => rand(),
                'gross_amount' => $request->total,
            )
        );

        $snapToken = \Midtrans\Snap::getSnapToken($params);

        $payment = Payment::create([
            'transaction_id' => Transaction::where('user_id', Auth::user()->id)->latest()->first()->id,
            'snap_token' => $snapToken,
            'total' => $request->total,
        ]);


        return redirect()->route('payment', $payment->id);

        // return Redirect::route();
    }

    public function show(Payment $payment)
    {
        return Inertia::render('Users/Payment', ['payment' => $payment]);
    }
}
