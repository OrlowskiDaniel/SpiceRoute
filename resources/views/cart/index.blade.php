@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto py-12">
    <h1 class="text-4xl font-black text-text mb-10">Your <span class="text-brand">Spice Tray</span></h1>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
        <div class="lg:col-span-2 space-y-6">
            @forelse($cart as $id => $item)
            <div class="flex items-center gap-6 bg-white p-6 rounded-3xl border border-brand-100">
                
                <img src="{{ $item['image'] }}" class="w-24 h-24 rounded-2xl object-cover">

                <div class="flex-grow">
                    <h3 class="text-xl font-bold">{{ $item['name'] }}</h3>

                    <div class="mt-4">
                        <span class="font-bold">Qty: {{ $item['quantity'] }}</span>
                    </div>

                    <form method="POST" action="/cart/remove/{{ $id }}">
                        @csrf
                        <button class="text-red-500 text-sm mt-2">Remove</button>
                    </form>
                </div>

                <div>
                    €{{ $item['price'] * $item['quantity'] }}
                </div>
            </div>
            @empty
            <p>Your cart is empty</p>
            @endforelse

            <a href="/menu" class="inline-block mt-4 font-bold text-brand hover:text-brand-dark transition-colors">
                &larr; Add more deliciousness
            </a>
        </div>

        @php
        $total = 0;
        foreach($cart as $item) {
            $total += $item['price'] * $item['quantity'];
        }
        @endphp
        <div class="lg:col-span-1">
            <div class="bg-text text-white p-8 rounded-3xl shadow-xl sticky top-24">
                <h2 class="text-2xl font-bold mb-6">Summary</h2>
                <div class="space-y-4 mb-8">
                    <div class="flex justify-between text-gray-400">
                        <span>Subtotal</span>
                        <span class="text-white">€{{ $total }}</span>
                    </div>
                    <div class="flex justify-between text-gray-400">
                        <span>Delivery Fee</span>
                        <span class="text-white text-sm font-bold uppercase text-green-400">Free</span>
                    </div>
                    <div class="border-t border-gray-700 pt-4 flex justify-between text-xl font-black">
                        <span>Total</span>
                        <span class="text-brand">€{{ $total }}</span>
                    </div>
                </div>

                <a href="/checkout" class="btn-primary w-full py-4 rounded-2xl text-lg shadow-lg shadow-brand/20">
                    Proceed to Checkout
                </a>
                
                <p class="text-center text-[10px] text-gray-500 mt-6 uppercase tracking-widest">
                    Secure checkout powered by SpicePay
                </p>
            </div>
        </div>
    </div>
</div>
@endsection