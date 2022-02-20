<?php

namespace Database\Seeders;

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
        $this->call([
            CategorySeeder::class,
            TypeSeeder::class,
            CitySeeder::class,
            CompanySeeder::class,
            ProductSeeder::class,
            UserSeeder::class,
        ]);
    }
}
