<?php

namespace App\Http\Controllers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use App\Models\Dish;

class DishController extends Controller
{
    //
    public function home() 
    {
       $dishes = Dish::orderBy('price', 'asc')->limit(3)->get();

       return view('home', compact('dishes'));
    }
    public function index()
    {
        // ASC means "Ascending" (Lowest to Highest)
        $dishes = Dish::orderBy('price', 'asc')->get();

        return view('menu.index', compact('dishes'));
    }
}
