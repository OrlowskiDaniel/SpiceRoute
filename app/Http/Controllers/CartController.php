<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dish;

class CartController extends Controller
{
    public function index()
    {
        $cart = session()->get('cart', []);

        return view('cart.index', compact('cart'));
    }

    public function add(Dish $dish)
    {
        $cart = session()->get('cart', []);

        dd($cart);

        if (empty($cart)) {
            return redirect('/cart')->with('error', 'Cart is empty!');
        }

        if (isset($cart[$dish->id])) {
            $cart[$dish->id]['quantity']++;
        } else {
            $cart[$dish->id] = [
                'name' => $dish->name,
                'price' => $dish->price,
                'image' => $dish->image,
                'quantity' => 1
            ];
        }

        session()->put('cart', $cart);

        return back()->with('success', 'Added to cart!');
    }

    public function remove(Dish $dish)
    {
        $cart = session()->get('cart', []);

        unset($cart[$dish->id]);

        session()->put('cart', $cart);

        return back();
    }
}