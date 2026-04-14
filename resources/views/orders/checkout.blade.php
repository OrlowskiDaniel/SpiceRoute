@php
$cart = session('cart', []);
$total = 0;

foreach($cart as $item) {
    $total += $item['price'] * $item['quantity'];
}
@endphp

@extends('layouts.app')

@section('content')
<div class="max-w-5xl mx-auto py-12">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
        
        <div>
            <h2 class="text-3xl font-black text-text mb-8">Delivery <span class="text-brand">Details</span></h2>
            
            <form action="{{ url('/orders') }}" method="POST" class="space-y-8">
                @csrf
                
                <div class="space-y-4">
                    <h3 class="text-sm font-bold text-gray-400 uppercase tracking-widest">1. Contact Information</h3>
                    <input type="email" name="email" class="input-field" placeholder="Email Address" required>
                    <input type="tel" name="phone" class="input-field" placeholder="Phone Number" required>
                </div>

                <div class="space-y-4">
                    <h3 class="text-sm font-bold text-gray-400 uppercase tracking-widest">2. Delivery Address</h3>
                    <input type="text" name="address" class="input-field" placeholder="Street Address" required>
                    <div class="grid grid-cols-2 gap-4">
                        <input type="text" name="city" class="input-field" placeholder="City" required>
                        <input type="text" name="postcode" class="input-field" placeholder="Postcode" required>
                    </div>
                </div>

                <div class="space-y-4">
                    <h3 class="text-sm font-bold text-gray-400 uppercase tracking-widest">3. Payment Method</h3>
                    <div class="grid grid-cols-2 gap-4">
                        <label class="relative border-2 border-brand bg-brand-light p-4 rounded-2xl cursor-pointer">
                            <input type="radio" name="payment" value="card" class="sr-only" checked>
                            <span class="block font-bold text-brand-900">Credit Card</span>
                            <span class="text-[10px] text-brand-700">Visa, MC, Amex</span>
                        </label>
                        <label class="relative border-2 border-gray-100 p-4 rounded-2xl cursor-pointer hover:border-brand-200 transition-colors">
                            <input type="radio" name="payment" value="cash" class="sr-only">
                            <span class="block font-bold text-text">Cash on Delivery</span>
                            <span class="text-[10px] text-gray-400">Pay at your door</span>
                        </label>
                    </div>
                </div>

                <button type="submit" class="btn-primary w-full py-5 text-xl shadow-2xl">
                    Place Your Order
                </button>
            </form>
        </div>

        <div class="hidden lg:block">
            <div class="bg-white p-10 rounded-3xl border border-brand-100 shadow-sm sticky top-24">
                <h3 class="text-xl font-bold mb-6">Order Summary</h3>
                <div class="space-y-4 border-b border-gray-50 pb-6">
                    @foreach($cart as $item)
                        <div class="flex justify-between items-center">
                            <div class="flex items-center gap-3">
                                <span class="bg-brand-light text-brand font-bold px-2 py-1 rounded-lg text-xs">
                                    {{ $item['quantity'] }}x
                                </span>
                                <span class="font-medium text-text">{{ $item['name'] }}</span>
                            </div>
                            <span class="font-bold text-text">
                                €{{ $item['price'] * $item['quantity'] }}
                            </span>
                        </div>
                    @endforeach
                </div>
                
                <div class="pt-6 space-y-3">
                    <div class="flex justify-between text-gray-500 text-sm">
                        <span>Subtotal</span>
                        <span>€{{ $total }}</span>
                    </div>
                    <div class="flex justify-between text-lg font-black text-text pt-2">
                        <span>Total to pay</span>
                        <span class="text-brand">€{{ $total }}</span>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection