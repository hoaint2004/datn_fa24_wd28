<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Category::insert([
            [
                'name' => 'Sneaker',
                'image' => 'sneaker.jpg',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Mohican',
                'image' => 'mohican.jpg', 
                'status' => 1, 
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
