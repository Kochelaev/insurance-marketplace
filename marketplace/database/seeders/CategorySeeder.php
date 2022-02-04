<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Sequence;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::factory()
            ->count(3)
            ->state(new Sequence(
                ['category' => 'Авто'],
                ['category' => 'Недвижимость'],
                ['category' => 'Здоровье'],
            ))
             ->create();
    }
}
