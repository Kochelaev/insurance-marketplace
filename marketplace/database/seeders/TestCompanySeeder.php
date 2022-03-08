<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class TestCompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()
        ->itCompany()
        ->state([
            'lastname' => 'Company',
            'firstname' => 'Company',
            'middlename' => 'Company',
            'email' => 'comp@comp.ru',
            'password' => Hash::make('comp'),
            ])
        ->create();
    }
}
