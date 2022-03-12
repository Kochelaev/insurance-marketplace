<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TestProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Product::factory(20)
        ->state(['owner_id' => '2',])
        ->create();
    }
}
