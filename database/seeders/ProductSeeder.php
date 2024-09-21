<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 10; $i++) {
            DB::table('products')->insert([
                'product_name' => 'Product ' . $i,
                'category' => 'Category ' . rand(1, 5),
                'brand' => 'Brand ' . rand(1, 5),
                'price' => rand(100, 1000), // Giá trị ngẫu nhiên giữa 100 và 1000
                'description' => 'Description for Product ' . $i,
                'image_url' => 'https://via.placeholder.com/150',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
