<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("tbl_products")->insert([
            [
                'product_name' => 'Laptop Dell XPS 13',
                'category_id' => 1, // Giả sử category_id của laptop là 1
                'description' => 'Laptop Dell XPS 13, màn hình 13.3 inch, CPU Intel Core i7, RAM 16GB, SSD 512GB.',
                'price' => 1599.99,
                'quantity' => 20,
                'img' => 'laptop_dell_xps_13.jpg',
            ],
            [
                'product_name' => 'Smartphone iPhone 12',
                'category_id' => 2, // Giả sử category_id của smartphone là 2
                'description' => 'Smartphone iPhone 12, màn hình Super Retina XDR 6.1 inch, chip A14 Bionic, RAM 4GB, bộ nhớ trong 128GB.',
                'price' => 799.99,
                'quantity' => 30,
                'img' => 'iphone_12.jpg',
            ]
    ]);
    }
}
