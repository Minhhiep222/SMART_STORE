<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class SellerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table("tbl_sellers")->insert([
            [
                "user_id" => 1,
                "name" => "Thành Đạt",
                "username" => "nnguyendat",
                "email" => "nnguyendat@gmail.com",
                "password" =>  Hash::make('123'),
                "phone" => "032481631",
                "sex" => "Nam",
                "img" => "havert.jpg",
                "address" => "Hoang Huu Nam / Thu Duc",
                "name_company" => "Điện máy xanh",
                "type_business" => "individual",
            ],
            [
                "user_id" => 2,
                "name" => "Minh Hiệp",
                "username" => "pphuthao",
                "email" => "pphuthao@gmail.com",
                "password" =>  Hash::make('123'),
                "phone" => "0423121",
                "sex" => "Nữ",
                "img" => "havert.jpg",
                "address" => "Bùi Viện / Quận 1",
                "name_company" => "Thế giới di động",
                "type_business" => "enterprise",
            ],
            
        ]);
    }
}
