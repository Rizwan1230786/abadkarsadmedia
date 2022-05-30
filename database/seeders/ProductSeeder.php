<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'name' => 'Refresh Listing',
                'price' => 200
            ],
            [
                'name' => 'Premium Listing',
                'price' => 2000
            ],
            [
                'name' => 'Hot Listing',
                'price' => 3000
            ],
            [
                'name' => 'Super Hot Listing',
                'price' => 12000
            ]
        ];

        foreach ($products as $key => $value) {
            Product::create($value);
        }
    }
}
