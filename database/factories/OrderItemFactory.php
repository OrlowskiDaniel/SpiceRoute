<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\Dish;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderItemFactory extends Factory
{
    public function definition(): array
    {
        return [
            'order_id' => Order::factory(),
            'dish_id' => Dish::factory(),
            'quantity' => fake()->numberBetween(1, 5),
            'price' => fake()->randomFloat(2, 5, 50),
        ];
    }
}