<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOrderRequest;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::with('user', 'items.dish')->latest()->get();

        // Count orders where status is pending
        $pendingCount = Order::where('status', 'pending')->count();

        // Count orders completed specifically today
        $completedTodayCount = Order::where('status', 'completed')
            ->whereDate('updated_at', now()->today())
            ->count();
        
        return view('admin.orders.index', compact('orders', 'pendingCount', 'completedTodayCount'));
    }

    public function show(Order $order)
    {
        return view('admin.orders.show', compact('order'));
    }

    public function updateStatus(Request $request, Order $order)
    {
        $order->update([
            'status' => $request->status
        ]);

        return back();
    }


    public function destroy(Order $order)
    {
        $order->delete();
        return redirect()->back();
    }

    public function store(StoreOrderRequest $request)
    {
        // cart
        $cart = session()->get('cart', []);

        if (empty($cart)) {
            return redirect('/cart')->with('error', 'Cart is empty!');
        }

        //total price
        $total = 0;
        foreach ($cart as $item) {
            $total += $item['price'] * $item['quantity'];
        }

        // create order
        $order = Order::create([
            'user_id' => 1, // later: auth()->id()
            'total_price' => $total,
            'status' => 'pending',
        ]);

        // create order items
        foreach ($cart as $dishId => $item) {
            OrderItem::create([
                'order_id' => $order->id,
                'dish_id' => $dishId,
                'quantity' => $item['quantity'],
                'price' => $item['price'],
            ]);
        }

        // clear cart
        session()->forget('cart');

        return redirect('/success')->with('success', 'Order placed!');
    }
}