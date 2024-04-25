<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // $this->call(
        //     Invoices_detailSeeder::class
        // );

        // $this->call(
        //     InvoicesSeeder::class
        // );

        // $this->call(
        //     ProductSeeder::class
        // );

        Order::factory()->count(10)->create();

        OrderDetail::factory()->count(10)->create();
    }
}
