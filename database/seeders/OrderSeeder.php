<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $orders = [
            [
                'menu_id' => 1,
                'qty' => 2,
                'total_price' => 30000,
                'room' => 'Fur Room',
                'date' => '2023-12-25',
                'customer_name' => 'Brahman',
                'status' => 'incomplete',
            ],
            [
                'menu_id' => 2,
                'qty' => 1,
                'total_price' => 50000,
                'room' => 'Fur Room',
                'date' => '2023-12-25',
                'customer_name' => 'Rafid',
                'status' => 'incomplete',
            ],
        ];

        // Insert data into the orders table
        DB::table('orders')->insert($orders);
    }
}
