<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Product::create([
           'name' => 'Macbook Air 2020 Intel',
           'description' => 'Macbook air intel serisi',
           'stock' => 20,
           'price' => 8000.00
        ]);
        Product::create([
            'name' => 'Macbook Air 2017 Intel',
            'description' => 'Macbook air intel serisi',
            'stock' => 20,
            'price' => 8000.00
         ]);
         Product::create([
            'name' => 'Macbook Pro 2017 Intel',
            'description' => 'Macbook air intel serisi',
            'stock' => 20,
            'price' => 8000.00
         ]);
    }
}
