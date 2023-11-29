<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'Product A',
                'quantity' => 10,
                'price' => 250,
            ],
            [
                'name' => 'Product B',
                'quantity' => 20,
                'price' => 350,
            ],
            [
                'name' => 'Product C',
                'quantity' => 30,
                'price' => 450,
            ],
            [
                'name' => 'Product D',
                'quantity' => 40,
                'price' => 500,
            ],
            [
                'name' => 'Product E',
                'quantity' => 50,
                'price' => 600,
            ],
            [
                'name' => 'Product F',
                'quantity' => 60,
                'price' => 700,
            ],
            [
                'name' => 'Product G',
                'quantity' => 70,
                'price' => 7580,
            ],
            [
                'name' => 'Product H',
                'quantity' => 80,
                'price' => 1580,
            ],
            [
                'name' => 'Product I',
                'quantity' => 99,
                'price' => 225,
            ],
        ]);
    }
}
