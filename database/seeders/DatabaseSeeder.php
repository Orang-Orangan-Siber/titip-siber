<?php

namespace Database\Seeders;

use App\Models\Merchant;
use App\Models\MerchantItem;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'name' => 'Muhammad Fathi Farhat',
            'nomorInduk' => '13240008',
            'password' => 'jarwo',
        ]);

        Merchant::create([
            'user_id' => 1,
            'name' => 'Toko A',
            'slug' => 'toko-a',
            'location' => 'Lt. 6',
            'status' => 1,
            'operational' => "23:00"
        ]);

        MerchantItem::create([
            'merchant_id' => 1,
            'name' => "d'BestO - Ayam Dada",
            'description' => 'Ayam enak mantap',
            'seller' => "d'BestO",
            'address' => 'https://maps.app.goo.gl/6BPLZFZqFC2bftfg6',
            'price' => 20000,
            'image' => 'https://dbesto.co.id/uploads/menu/LUBIS-1.jpg'
        ]);

        MerchantItem::create([
            'merchant_id' => 1,
            'name' => "d'BestO - Ayam Paha",
            'description' => 'Ayam enak mantap',
            'seller' => "d'BestO",
            'address' => 'https://maps.app.goo.gl/6BPLZFZqFC2bftfg6',
            'price' => 15000,
            'image' => 'https://dbesto.co.id/uploads/menu/RANI-2.jpg'
        ]);

    }

}
