<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Http\Requests\StoreReservationRequest;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function create()
    {
        return view('orders.reservations.create');
    }

    public function store(StoreReservationRequest $request)
    {
        Reservation::create($request->validated());
        return redirect()->back()->with('success', 'Reservation created!');
    }

    public function index()
    {
        $reservations = Reservation::latest()->get();
        return view('admin.reservations.index', compact('reservations'));
    }

    public function destroy(Reservation $reservation)
    {
        $reservation->delete();
        return back();
    }

    // admin booking
    public function adminCreate()
    {
        return view('admin.reservations.create');
    }

    public function adminStore(StoreReservationRequest $request)
    {
        Reservation::create($request->validated());
        return redirect('/admin/reservations')->with('success', 'Booking added!');
    }
}