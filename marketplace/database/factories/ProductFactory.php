<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->catchPhrase(),
            'content' => $this->faker->text(),
            'owner_id' => random_int(1, 10),
            'type_id' => random_int(1, 8),
            'description' => $this->faker->text(),
            'coefficients' => $this->faker->slug(),
        ];
    }
}
