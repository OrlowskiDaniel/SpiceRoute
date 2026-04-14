<?php

namespace App\Http\Controllers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use App\Models\Dish;
use App\Http\Requests\StoreDishRequest;

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
    public function create()
    {
        return view('admin.dishes.create');
    }

    public function store(StoreDishRequest $request) 
    {
        $data = $request->validated();

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('dishes', 'public');
            $data['image'] = '/storage/' . $path;
        }

        // Assign the authenticated user ID
        $data['user_id'] = auth()->id();

        Dish::create($data);

        return redirect('/admin/dishes')->with('success', 'Dish created!');
    }

    public function indexAdmin()
    {
        $dishes = Dish::latest()->get();
        return view('admin.dishes.index', compact('dishes'));
    }

    public function destroy(Dish $dish)
    {
        $dish->delete();
        return back()->with('success', 'Dish deleted');
    }

        
}
