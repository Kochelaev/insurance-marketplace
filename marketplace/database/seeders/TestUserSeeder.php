<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class TestUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()
        ->state([
            'lastname' => 'user',
            'firstname' => 'user',
            'middlename' => 'user',
            'email' => 'user@user.ru',
            'password' => Hash::make('user'),
            ])
        ->create();
    }
}
