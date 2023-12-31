<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'fullname' => fake()->name()." ".fake()->lastname(),
            'email' => fake()->unique()->safeEmail(),
            'password' => fake()->word(),
            'birthday' => fake()->date($format = 'Y-m-d', $max = 'now'),
            'phone' => fake()->phoneNumber(),
            'photo' => fake()->imageUrl(400, 200, 'people'),
            'address'=> fake()->address(),
            'role_id' => fake()->randomElement([2,3]),
            // 'remember_token'=>Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
