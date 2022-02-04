<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Sequence;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Type::factory()
            ->count(8)
            ->state(new Sequence(
                ['type' => 'ОСАГО'],
                ['type' => 'КАСКО'],
                ['type' => 'Квартира'],
                ['type' => 'Ответственность'],
                ['type' => 'Ипотека'],
                ['type' => 'ОМС'],
                ['type' => 'ДМС'],
                ['type' => 'Несчастный случай'],
            ))
            ->state(new Sequence(
                ['category_id' => '1'],
                ['category_id' => '1'],
                ['category_id' => '2'],
                ['category_id' => '2'],
                ['category_id' => '2'],
                ['category_id' => '3'],
                ['category_id' => '3'],
                ['category_id' => '3'],
            ))
            ->create();
    }
}
