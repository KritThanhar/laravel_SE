<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'มัจฉะลาเต้เย็น',
                'product_type_id' => 2,
                'image_url' => 'https://apimain.kleensstation.com/images/1695609968.jpg',
                'cost' => 60.00,
                'price' => 70.00,
                'qty' => 200
            ],
            [
                'name' => 'เครื่องดื่มช็อกโกแลต ไมโล Active-Go 900 กรัม',
                'product_type_id' => 2,
                'image_url' => 'https://officework.co.th/upload/product/1002-0050-01.JPG',
                'cost' => 40.00,
                'price' => 50.00,
                'qty' => 150
            ],
            ];
            DB::table('products')->insert($data);
            }
}
