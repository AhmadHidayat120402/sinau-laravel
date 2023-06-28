<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // Product::insert([
        //     'name' => 'Hp 14',
        //     'price' => 10000,
        //     'image' => 'image.jpg',
        //     'description' => str::random(100),
        // ]);
        Product::factory(10)->create();
    }
}
