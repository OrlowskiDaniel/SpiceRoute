<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Dish;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Reservation;
use App\Models\ContactMessage;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Users
        $users = User::factory(5)->create();

        // Dishes
        $dishes = Dish::factory(10)->create();

        // Orders
        $orders = Order::factory(5)->create();

        // Order Items
        foreach ($orders as $order) {
            OrderItem::factory(3)->create([
                'order_id' => $order->id,
                'dish_id' => $dishes->random()->id,
            ]);
        }

        // Reservations
        Reservation::factory(5)->create();

        // Contact Messages
        ContactMessage::factory(5)->create();
    }
}