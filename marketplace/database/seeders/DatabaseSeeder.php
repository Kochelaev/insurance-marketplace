<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Type;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Category::fastMake('Авто');
        Category::fastMake('Недвижимость');
        Category::fastMake('Здоровье');

        Type::fastMake('ОСАГО', 1);
        Type::fastMake('КАСКО', 1);
        Type::fastMake('Квартира', 2);
        Type::fastMake('Ответственность', 2);
        Type::fastMake('Ипотека', 2);
        Type::fastMake('ОМС', 3);
        Type::fastMake('ДМС', 3);
        Type::fastMake('Несчастный случай', 3);

        \App\Models\User::factory(10)->create();

        \App\Models\Product::factory(10)->create();
    }
}
