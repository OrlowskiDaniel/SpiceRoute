<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Http\Requests\StoreReservationRequest;

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
        $reservations = \App\Models\Reservation::latest()->get();
        return view('admin.reservations.index', compact('reservations'));
    }

    public function destroy(Reservation $reservation)
    {
        $reservation->delete();
        return back();
    }
}