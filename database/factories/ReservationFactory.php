<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ReservationFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->safeEmail(),
            'reservation_date' => fake()->date(),
            'reservation_time' => fake()->time(),
            'guests' => fake()->numberBetween(1, 10),
            'status' => fake()->randomElement(['pending', 'confirmed']),
        ];
    }
}