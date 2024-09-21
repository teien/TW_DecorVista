<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Seed data cho bảng products
        $products = [
            [
                'product_name' => 'Sofa 2 chỗ Hà Nội',
                'category' => 'Sofa',
                'brand' => 'SofaMart',
                'price' => 4000000,
                'description' => 'A stylish modern sofa perfect for your living room.',
                'image_url' => './img/1.jpg',
            ],
            [
                'product_name' => 'Sofa 2 chỗ Mây mới',
                'category' => 'Sofa',
                'brand' => 'SofaMart',
                'price' => 6000000,
                'description' => 'A stylish modern sofa perfect for your living room.',
                'image_url' => './img/2.jpg',
            ],
            [
                'product_name' => 'Sofa 2 chỗ Ogami vải vact10499',
                'category' => 'Sofa',
                'brand' => 'SofaMart',
                'price' => 2400000,
                'description' => 'A stylish modern sofa perfect for your living room.',
                'image_url' => './img/3.jpg',
            ],
            [
                'product_name' => 'Sofa giường đơn Bolero VACT 3444',
                'category' => 'Sofa',
                'brand' => 'SofaMarket',
                'price' => 1200000,
                'description' => 'A stylish modern sofa perfect for your living room.',
                'image_url' => './img/4.jpg',
            ],
            [
                'product_name' => 'Sofa Miami M2-2 chỗ vải VACT5597',
                'category' => 'Sofa',
                'brand' => 'SofaMart',
                'price' => 1700000,
                'description' => 'A stylish modern sofa perfect for your living room.',
                'image_url' => './img/5.jpg',
            ],
            [
                'product_name' => 'Giường Leman 1m8 vải VACT10370',
                'category' => 'Bed',
                'brand' => 'DreamBeds',
                'price' => 23000000,
                'description' => 'A comfortable and elegant bed for the best night’s sleep.',
                'image_url' => './img/6.jpg',
            ],
            [
                'product_name' => 'Giường Coastal xanh 1m6',
                'category' => 'Bed',
                'brand' => 'DreamBeds',
                'price' => 20000000,
                'description' => 'A comfortable and elegant bed for the best night’s sleep.',
                'image_url' => './img/7.jpg',
            ],
            [
                'product_name' => 'Giường Leman 1m8 vải VACT7464',
                'category' => 'Bed',
                'brand' => 'DreamBeds',
                'price' => 18000000,
                'description' => 'A comfortable and elegant bed for the best night’s sleep.',
                'image_url' => './img/8.jpg',
            ],
            [
                'product_name' => 'Giường Ona Him 1m8 da xanh S4',
                'category' => 'Bed',
                'brand' => 'DreamBeds',
                'price' => 45000000,
                'description' => 'A comfortable and elegant bed for the best night’s sleep.',
                'image_url' => './img/9.jpg',
            ],
            [
                'product_name' => 'Giường Hộc Kéo Iris 1M6 Vải Belfast 41',
                'category' => 'Bed',
                'brand' => 'DreamBeds',
                'price' => 21000000,
                'description' => 'A comfortable and elegant bed for the best night’s sleep.',
                'image_url' => './img/10.jpg',
            ],
            [
                'product_name' => 'Tủ áo Acrylic',
                'category' => 'Wardrobe',
                'brand' => 'WardrobeCraft',
                'price' => 25000000,
                'description' => 'A beautiful wardrobe',
                'image_url' => './img/11.jpg',
            ],
            [
                'product_name' => 'Tủ áo Wabrobe 02',
                'category' => 'Wardrobe',
                'brand' => 'WardrobeCraft',
                'price' => 20000000,
                'description' => 'A beautiful wardrobe',
                'image_url' => './img/12.jpg',
            ],
            [
                'product_name' => 'Tủ áo hiện đại',
                'category' => 'Wardrobe',
                'brand' => 'WardrobeCraft',
                'price' => 23000000,
                'description' => 'A beautiful wardrobe',
                'image_url' => './img/13.jpg',
            ],
            [
                'product_name' => 'Tủ áo Maxine',
                'category' => 'Wardrobe',
                'brand' => 'WardrobeCraft',
                'price' => 21000000,
                'description' => 'A beautiful wardrobe',
                'image_url' => './img/14.jpg',
            ],
            [
                'product_name' => 'Kệ giày Caruso 5 Doors',
                'category' => 'Shoe cabinets',
                'brand' => 'Shoe cabinets market',
                'price' => 21000000,
                'description' => 'A beautiful shoe cabinets',
                'image_url' => './img/15.jpg',
            ],
            [
                'product_name' => 'Tủ giày Caruso 2 ngăn nâu75X77 86217K',
                'category' => 'Shoe cabinets',
                'brand' => 'Shoe cabinets market',
                'price' => 11000000,
                'description' => 'A beautiful shoe cabinets',
                'image_url' => './img/16.jpg',
            ],
            [
                'product_name' => 'Tủ giày Caruso 5 ngăn trắng H170x50x14 9288K',
                'category' => 'Shoe cabinets',
                'brand' => 'Shoe cabinets market',
                'price' => 1200000,
                'description' => 'A beautiful shoe cabinets',
                'image_url' => './img/17.jpg',
            ],
            [
                'product_name' => 'Tủ giày Caruso 5 ngăn xám H170x50x14 82568K',
                'category' => 'Shoe cabinets',
                'brand' => 'Shoe cabinets market',
                'price' => 8000000,
                'description' => 'A beautiful shoe cabinets',
                'image_url' => './img/18.jpg',
            ],
            [
                'product_name' => 'Tủ giày 4 ngăn Luxury 84995Ks',
                'category' => 'Shoe cabinets',
                'brand' => 'Shoe cabinets market',
                'price' => 26000000,
                'description' => 'A beautiful shoe cabinets',
                'image_url' => './img/19.jpg',
            ],
            [
                'product_name' => 'Tủ bếp Daily',
                'category' => 'Kitchen cabinets',
                'brand' => 'Kitchen cabinets market',
                'price' => 22000000,
                'description' => 'A beautiful kitchen cabinets',
                'image_url' => './img/20.jpg',
            ],
            [
                'product_name' => 'Tủ bếp Fancy',
                'category' => 'Kitchen cabinets',
                'brand' => 'Kitchen cabinets market',
                'price' => 21000000,
                'description' => 'A beautiful kitchen cabinets',
                'image_url' => './img/21.jpg',
            ],
            [
                'product_name' => 'Tủ bếp Olive',
                'category' => 'Kitchen cabinets',
                'brand' => 'Kitchen cabinets market',
                'price' => 25000000,
                'description' => 'A beautiful kitchen cabinets',
                'image_url' => './img/22.jpg',
            ],
            [
                'product_name' => 'Gương Besty',
                'category' => 'Mirror',
                'brand' => 'Mirror market',
                'price' => 11000000,
                'description' => 'A beautiful mirror',
                'image_url' => './img/23.jpg',
            ],
            [
                'product_name' => 'Gương Bords',
                'category' => 'Mirror',
                'brand' => 'Mirror market',
                'price' => 10000000,
                'description' => 'A beautiful mirror',
                'image_url' => './img/24.jpg',
            ],
            [
                'product_name' => 'Gương Curvy',
                'category' => 'Mirror',
                'brand' => 'Mirror market',
                'price' => 4300000,
                'description' => 'A beautiful mirror',
                'image_url' => './img/25.jpg',
            ],
        ];

        DB::table('products')->insert($products);
    }
}
