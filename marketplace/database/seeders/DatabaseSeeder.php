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
            AdminSeeder::class,
            TestCompanySeeder::class,
            CompanySeeder::class,
            ProductSeeder::class,
            TestProductsSeeder::class,
            TestUserSeeder::class,
            UserSeeder::class,
        ]);
    }
}
