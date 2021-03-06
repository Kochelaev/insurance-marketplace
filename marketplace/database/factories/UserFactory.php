<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [           
            'lastname' => $this->faker->lastName(),
            'firstname' => $this->faker->firstName(),
            'middlename' => $this->faker->middleName(),            
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 
            'remember_token' => Str::random(10),
            'city_id' => random_int(1, 5),
            'adress' => $this->faker->streetAddress(),
            'INN' => random_int(10000000000, 99999999999),
            'birthdate' => $this->faker->dateTimeBetween('-90 years', '-18 years'),
            'phone' => $this->faker->phoneNumber(),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }

    public function itCompany()
    {
        return $this->state(function () {
            return [
                'company' => $this->faker->company(),
                'role' => 'C',
            ];
        });
    }

    public function itAdmin()
    {
        return $this->state(function () {
            return [                
                'role' => 'A',
            ];
        });
    }    
}
