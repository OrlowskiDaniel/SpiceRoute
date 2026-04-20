@extends('layouts.app')

@section('content')
<div class="max-w-5xl mx-auto py-12">
    <div class="bg-white rounded-3xl shadow-2xl overflow-hidden flex flex-col md:flex-row border border-brand-100">
        
        <div class="md:w-1/3 bg-brand p-10 text-white flex flex-col justify-center">
            <span class="text-brand-100 font-bold uppercase tracking-widest text-sm mb-4">Table Booking</span>
            <h1 class="text-4xl font-black mb-6 leading-tight">
                Reserve Your <span class="text-brand-900">Spice</span> Experience
            </h1>
            <p class="text-brand-100 mb-8 leading-relaxed">
                Join us for an evening of vibrant flavors and traditional Indian hospitality. 
            </p>
            
            <div class="space-y-4">
                <div class="flex items-center gap-3">
                    <div class="w-8 h-8 rounded-full bg-brand-700 flex items-center justify-center text-sm">📍</div>
                    <span class="text-sm font-medium">123 Masala Street, Flavor Town</span>
                </div>
                <div class="flex items-center gap-3">
                    <div class="w-8 h-8 rounded-full bg-brand-700 flex items-center justify-center text-sm">📞</div>
                    <span class="text-sm font-medium">(555) Spice-Route</span>
                </div>
            </div>
        </div>
        
        <div class="md:w-2/3 p-10 lg:p-16">
            @if(session('success'))
                <div class="mb-6 p-4 bg-green-100 text-green-800 rounded-xl">
                    {{ session('success') }}
                </div>
            @endif

            @if($errors->any())
                <div class="mb-6 p-4 bg-red-100 text-red-800 rounded-xl">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>- {{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="POST" action="/reservations" class="space-y-6">
                @csrf
                <input type="hidden" name="status" value="pending">

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="col-span-1">
                        <label class="form-label">Full Name</label>
                        <input type="text" name="name" class="input-field" placeholder="Priya Sharma" required>
                    </div>

                    <div class="col-span-1">
                        <label class="form-label">Email Address</label>
                        <input type="email" name="email" class="input-field" placeholder="priya@example.com" required>
                    </div>

                    <div class="col-span-1">
                        <label class="form-label">Date</label>
                        <input type="date" name="reservation_date" class="input-field" required>
                    </div>

                    <div class="col-span-1">
                        <label class="form-label">Time</label>
                        <input type="time" name="reservation_time" class="input-field" required>
                    </div>

                    <div class="col-span-2">
                        <label class="form-label">Number of Guests</label>
                        <div class="relative">
                            <input type="number" name="guests" min="1" max="20" class="input-field pl-12" placeholder="2" required>
                            <span class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-400">👥</span>
                        </div>
                    </div>
                </div>

                <div class="pt-4">
                    <button type="submit" class="btn-primary w-full py-4 text-lg shadow-xl shadow-brand/20">
                        Confirm Reservation
                    </button>
                    <p class="text-center text-xs text-gray-400 mt-4 italic">
                        By clicking confirm, you agree to our 15-minute grace period policy.
                    </p>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection