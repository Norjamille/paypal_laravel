<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
            Product::create([
                'name'=>'Jordan 1 low',
                'price'=>120,
            ]);

            Product::create([
                'name'=>'Air Jordan 1 Retro High',
                'price'=>180,
            ]);

            Product::create([
                'name'=>'Air Jordan 1 Mid',
                'price'=>125
            ]);

            Product::create([
                'name'=>'Air Jordan 1 Mid SE',
                'price'=>135,
            ]);

    }
}
