<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Sequence;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        City::factory()
        ->count(5)
        ->state(new Sequence(
            ['city' => 'Москва'],
            ['city' => 'Санкт-Петербург'],
            ['city' => 'Казань'],
            ['city' => 'Ульяновск'],
            ['city' => 'Самара'],
        ))
        ->create();
    }
}
