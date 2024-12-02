<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Merchant extends Model
{
    public function items() {
        return $this->hasMany(MerchantItem::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
