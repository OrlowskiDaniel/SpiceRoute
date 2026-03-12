@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto py-12">
    <h1 class="text-4xl font-black text-text mb-10">Your <span class="text-brand">Spice Tray</span></h1>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
        <div class="lg:col-span-2 space-y-6">
            {{-- Loop Start: @foreach($cartItems as $item) --}}
            <div class="flex items-center gap-6 bg-white p-6 rounded-3xl border border-brand-100 shadow-sm hover:shadow-md transition-shadow">
                <img src="https://images.unsplash.com/photo-1588166524941-3bf61a9c41db?auto=format&fit=crop&w=200&q=80" 
                     alt="Butter Chicken" class="w-24 h-24 rounded-2xl object-cover">
                
                <div class="flex-grow">
                    <h3 class="text-xl font-bold text-text">Butter Chicken</h3>
                    <p class="text-gray-400 text-sm">Extra Spicy • No Cilantro</p>
                    <div class="flex items-center gap-4 mt-4">
                        <div class="flex items-center border border-brand-100 rounded-xl overflow-hidden">
                            <button class="px-3 py-1 bg-brand-light hover:bg-brand-100 text-brand-800 font-bold">-</button>
                            <span class="px-4 py-1 font-bold text-text">1</span>
                            <button class="px-3 py-1 bg-brand-light hover:bg-brand-100 text-brand-800 font-bold">+</button>
                        </div>
                        <button class="text-xs font-bold text-red-400 hover:text-red-600 uppercase tracking-widest">Remove</button>
                    </div>
                </div>

                <div class="text-right">
                    <p class="text-xl font-black text-text">€12.00</p>
                </div>
            </div>
            {{-- @endforeach --}}

            <a href="/menu" class="inline-block mt-4 font-bold text-brand hover:text-brand-dark transition-colors">
                &larr; Add more deliciousness
            </a>
        </div>

        <div class="lg:col-span-1">
            <div class="bg-text text-white p-8 rounded-3xl shadow-xl sticky top-24">
                <h2 class="text-2xl font-bold mb-6">Summary</h2>
                <div class="space-y-4 mb-8">
                    <div class="flex justify-between text-gray-400">
                        <span>Subtotal</span>
                        <span class="text-white">€12.00</span>
                    </div>
                    <div class="flex justify-between text-gray-400">
                        <span>Delivery Fee</span>
                        <span class="text-white text-sm font-bold uppercase text-green-400">Free</span>
                    </div>
                    <div class="border-t border-gray-700 pt-4 flex justify-between text-xl font-black">
                        <span>Total</span>
                        <span class="text-brand">€12.00</span>
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