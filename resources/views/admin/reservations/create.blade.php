@extends('layouts.admin')

@section('content')
<div class="max-w-2xl">
    <div class="mb-8">
        <a href="/admin/reservations" class="text-sm font-bold text-brand hover:underline">&larr; Back to Bookings</a>
        <h1 class="text-4xl font-black text-text mt-2">Manual <span class="text-brand">Booking</span></h1>
    </div>

    <form action="/admin/reservations" method="POST" class="space-y-6">
        @csrf

        <div class="bg-white p-8 rounded-[2rem] shadow-sm border border-brand-100 space-y-6">

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="form-label">Guest Name</label>
                    <input type="text" name="name" value="{{ old('name') }}" class="input-field" placeholder="Jane Doe" required>
                </div>
                <div>
                    <label class="form-label">Email</label>
                    <input type="email" name="email" value="{{ old('email') }}" class="input-field" placeholder="jane@example.com" required>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="form-label">Phone <span class="text-gray-400 font-normal">(optional)</span></label>
                    <input type="text" name="phone" value="{{ old('phone') }}" class="input-field" placeholder="+31 6 12345678">
                </div>
                <div>
                    <label class="form-label">Party Size</label>
                    <input type="number" name="guests" value="{{ old('guests', 2) }}" min="1" max="20" class="input-field" required>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="form-label">Date</label>
                    <input type="date" name="reservation_date" value="{{ old('reservation_date') }}" class="input-field" required>
                </div>
                <div>
                    <label class="form-label">Time</label>
                    <select name="reservation_time" class="input-field">
                        @foreach(['11:00', '11:30', '12:00', '12:30', '13:00', '13:30', '14:00', '18:00', '18:30', '19:00', '19:30', '20:00', '20:30', '21:00'] as $time)
                            <option value="{{ $time }}" {{ old('reservation_time') === $time ? 'selected' : '' }}>{{ $time }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div>
                <label class="form-label">Status</label>
                <select name="status" class="input-field">
                    <option value="confirmed">Confirmed</option>
                    <option value="pending">Pending</option>
                    <option value="cancelled">Cancelled</option>
                </select>
            </div>

        </div>

        <button type="submit" class="btn-primary w-full py-4 text-lg shadow-xl shadow-brand/20">
            Confirm Booking
        </button>
    </form>
</div>
@endsection