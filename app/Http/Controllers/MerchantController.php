<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Merchant;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MerchantController extends Controller
{
    public function merchant($slug)
    {
        $merchant = Merchant::where('slug', $slug)->with('user')->first();

        if ($merchant == null) {
            abort(404);
        }

        return Inertia::render('Users/Merchant/Merchant', ['merchant' => $merchant, 'items' => $merchant->items]);
    }

    public function getMyMerchant()
    {
        $merchant = Merchant::where('user_id', Auth::user()->id)->first();
        return Inertia::render('Users/Merchant/MyMerchant', ['merchant' => $merchant]);
    }

    public function registerView()
    {

        $isAvailable = Merchant::where('user_id', Auth::user()->id)->count();

        if ($isAvailable) {
            abort(404);
        }

        return Inertia::render('Users/Merchant/Register');
    }

    public function registerPost(Request $request)
    {

        $merchant = new Merchant();
        $merchant->user_id = Auth::user()->id;
        $merchant->name = $request->name;
        $merchant->slug = Str::slug(strtolower($request->name));
        $merchant->location = $request->location;
        $merchant->status = 1;
        $merchant->save();

        return redirect('/my-merchant');
    }

    public function newItem(Request $request) {}

    public function checkout(Request $request, $slug)
    {
        $merchant = Merchant::where('slug', $slug)->with('user')->first();

        
    }
}
