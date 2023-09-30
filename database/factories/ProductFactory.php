<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product;>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            // 'name'=> fake()->company(),
            // 'description'=>fake()->realText($maxNbChars = 200, 1),
            // 'brand'=> fake()->company(),
            // 'price'=>fake()->numberBetween($min = 1000, $max = 200000),
            // 'image'=>fake()->imageUrl(400, 200, 'Product'),
            // 'stock'=>fake()->numberBetween($min = 0, $max = 100),
            // 'slide'=>"No",
            // 'category_id'=>fake()->numberBetween($min = 1, $max = 10),
            // 'user_id'=>fake()->numberBetween($min = 2, $max = 22),

        ];
    }
}

