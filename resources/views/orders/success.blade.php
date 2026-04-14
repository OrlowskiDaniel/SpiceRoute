@extends('layouts.app')

@section('content')
<div class="min-h-[60vh] flex items-center justify-center">
    <div class="max-w-md w-full text-center p-8 bg-white rounded-[3rem] shadow-2xl border border-brand-100">
        
        <div class="mb-8 flex justify-center">
            <div class="rounded-full bg-green-100 p-6 animate-pulse">
                <svg class="w-16 h-16 text-green-600 animate-bounce-short" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
                </svg>
            </div>
        </div>

        <h1 class="text-4xl font-black text-text mb-2">Order Confirmed!</h1>
        <p class="text-brand font-bold mb-6 tracking-widest uppercase text-sm">
            Order placed successfully
        </p>
        
        <div class="bg-brand-light rounded-2xl p-6 mb-8 text-left">
            <p class="text-gray-600 text-sm leading-relaxed text-center">
                We've received your order and the kitchen is already heating up the tandoor. Your food will be ready in approximately <span class="text-text font-black">25-35 minutes</span>.
            </p>
        </div>

        <div class="space-y-3">
            <a href="/" class="btn-primary w-full py-4 rounded-2xl block text-center font-bold shadow-lg shadow-brand/20">
                Track My Order
            </a>
            <a href="/menu" class="text-gray-400 hover:text-text font-bold text-sm block transition-colors">
                Order Something Else?
            </a>
        </div>
        
        <div class="mt-8 flex justify-center gap-2">
            <div class="w-2 h-2 rounded-full bg-brand-200"></div>
            <div class="w-2 h-2 rounded-full bg-brand-400"></div>
            <div class="w-2 h-2 rounded-full bg-brand-200"></div>
        </div>
    </div>
</div>

<style>
    @keyframes bounce-short {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-10px); }
    }
    .animate-bounce-short {
        animation: bounce-short 1s ease-in-out infinite;
    }
    .animate-bounce-slow {
        animation: bounce-short 3s ease-in-out infinite;
    }
</style>
@endsection