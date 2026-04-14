<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Reservation;
use App\Models\Dish;
use App\Models\ContactMessage;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard', [
            'ordersCount' => Order::count(),
            'reservationsCount' => Reservation::count(),
            'messagesCount' => ContactMessage::count(),
            'revenue' => Order::sum('total_price'),
        ]);
    }
}