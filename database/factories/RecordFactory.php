<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Record;>
 */
class RecordFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'price'=>fake()->numberBetween($min = 1000, $max = 200000),
            'quantity'=>fake()->numberBetween($min = 1, $max = 10),
            'sale_id'=>fake()->numberBetween($min = 1, $max = 20),
            'product_id'=>fake()->numberBetween($min = 1, $max = 50),
        ];
    }
}
