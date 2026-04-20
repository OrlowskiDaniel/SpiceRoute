<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class DishFactory extends Factory
{
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'name' => fake()->word(),
            'description' => fake()->paragraph(),
            'price' => fake()->randomFloat(2, 5, 50),
            'category' => fake()->randomElement(['curry', 'tandoor', 'starter', 'side', 'drink']),
            'image' => null,
        ];
    }
}