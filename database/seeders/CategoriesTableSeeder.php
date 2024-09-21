<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['category_name' => 'Sofa'],
            ['category_name' => 'Bed'],
            ['category_name' => 'Wardrobe'],
            ['category_name' => 'Shoe cabinets'],
            ['category_name' => 'Kitchen cabinets'],
            ['category_name' => 'Mirror'],
        ];

        DB::table('categories')->insert($categories);
    }
}
