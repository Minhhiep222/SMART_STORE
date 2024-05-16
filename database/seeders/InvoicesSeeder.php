<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Import the DB facade
use Illuminate\Support\Facades\Hash;

class InvoicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table("tbl_invoices")->insert([
            [
                'user_Id' => 1,
                'Order_Describe' => 'Sản phẩm tốt đầu tiên',
                'TotalAmount' => 100.00,
                'PaymentMethod' => 'Credit Card',
                'PaymentStatus' => 'Completed',
            ],
            [
                'user_Id' => 2,
                'Order_Describe' => 'Sản phẩm tốt thứ hai',
                'TotalAmount' => 150.00,
                'PaymentMethod' => 'PayPal',
                'PaymentStatus' => 'Completed',
            ],
            
    ]);
    }
}
