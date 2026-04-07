<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DishSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // // 1. Create a "Chef" user first if one doesn't exist
        // $user = \App\Models\User::firstOrCreate(
        //     ['email' => 'chef@spiceroute.com'], // Look for this email
        //     [
        //         'name' => 'Head Chef',
        //         'password' => bcrypt('password'),
        //         'role' => 'chef' // Using that role column we discussed!
        //     ]
        // );

        // // 2. Now use that user's actual ID for the dishes
        // \App\Models\Dish::create([
        //     'user_id' => $user->id,
        //     'name' => 'Garlic Naan',
        //     'description' => 'Freshly baked in the tandoor with garlic butter.',
        //     'price' => 3.50,
        //     'image' => 'https://images.unsplash.com/photo-1601050638917-3d84318395b3?w=800'
        // ]);

        // \App\Models\Dish::create([
        //     'user_id' => $user->id,
        //     'name' => 'Butter Chicken',
        //     'description' => 'A mild, creamy tomato-based curry with tender chicken.',
        //     'price' => 12.00,
        //     'image' => 'https://images.unsplash.com/photo-1588166524941-3bf61a9c41db?w=800'
        // ]);

        

    }
}
