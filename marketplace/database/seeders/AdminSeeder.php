<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()
        ->itAdmin()
        ->state([
            'lastname' => 'admin',
            'firstname' => 'admin',
            'middlename' => 'admin',
            'email' => 'root@root.ru',
            'password' => Hash::make('root'),
            ])
        ->create();
    }
}
