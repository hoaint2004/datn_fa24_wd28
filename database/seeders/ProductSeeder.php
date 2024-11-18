<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Product::insert([
            [
                'name' => 'Nike Air Force 1',
                'image' => 'air-force-1.png',
                'price' => 2000000, 
                'price_old' => 2500000, 
                'code' => 'NAF001', 
                'description' => 'Dolatrum.',
                'category_id' => 1, 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Adidas Ultraboost 21',
                'image' => 'ultraboost-21.png',
                'price' => 3000000,
                'price_old' => 3500000,
                'code' => 'ADB002',
                'description' => 'Vô địch.',
                'category_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
