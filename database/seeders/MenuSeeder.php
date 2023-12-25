<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $menuItems = [
            [
                'menu' => 'Waffle Coklat',
                'harga' => 15000,
            ],
            [
                'menu' => 'Roti Bakar',
                'harga' => 12000,
            ],
            [
                'menu' => 'Milky Matcha',
                'harga' => 15000,
            ],
            [
                'menu' => 'Americano',
                'harga' => 12000,
            ],
        ];

        // Insert data into the menu table
        DB::table('menu')->insert($menuItems);
    }
}
