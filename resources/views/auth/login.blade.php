@extends('layouts.app')

@section('content')
<div class="min-h-[70vh] flex flex-col justify-center py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full mx-auto">
        
        <div class="text-center mb-10">
            <div class="inline-flex items-center justify-center w-20 h-20 bg-text text-brand rounded-2xl shadow-2xl mb-6 border-4 border-brand-100">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                </svg>
            </div>
            <h2 class="text-3xl font-black text-text tracking-tight">Staff Portal</h2>
            <p class="mt-2 text-sm text-gray-500 font-medium">
                SpiceRoute Management & Kitchen Access
            </p>
        </div>

        <div class="bg-white rounded-3xl shadow-2xl shadow-text/5 overflow-hidden border border-gray-100">
            <div class="bg-brand-light px-6 py-3 border-b border-brand-100">
                <p class="text-[11px] font-bold text-brand-800 uppercase tracking-widest text-center">
                    Authorized Personnel Only
                </p>
            </div>

            <div class="p-8 sm:p-10">
                <form action="POST" class="space-y-6">
                    @csrf

                    <div>
                        <label for="email" class="form-label">Work Email</label>
                        <div class="relative">
                            <input id="email" type="email" name="email" class="input-field pl-11" placeholder="manager@spiceroute.com" required autofocus>
                            <span class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                                </svg>
                            </span>
                        </div>
                    </div>

                    <div>
                        <div class="flex items-center justify-between mb-1">
                            <label for="password" class="form-label mb-0">Password</label>
                            <a href="#" class="text-xs font-bold text-brand hover:text-brand-dark transition-colors">Forgot?</a>
                        </div>
                        <div class="relative">
                            <input id="password" type="password" name="password" class="input-field pl-11" placeholder="••••••••" required>
                            <span class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                </svg>
                            </span>
                        </div>
                    </div>

                    <div class="flex items-center">
                        <input id="remember_me" type="checkbox" name="remember" class="w-4 h-4 text-brand border-gray-300 rounded focus:ring-brand">
                        <label for="remember_me" class="ml-2 block text-sm text-gray-600 font-medium cursor-pointer">
                            Keep me logged in for this shift
                        </label>
                    </div>

                    <div>
                        <button type="submit" class="btn-primary w-full py-4 bg-text hover:bg-black text-white rounded-2xl flex items-center justify-center gap-3 transition-all active:scale-[0.98]">
                            <span class="font-bold">Enter Dashboard</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                            </svg>
                        </button>
                    </div>
                </form>
                
            </div>
        </div>

        <p class="mt-8 text-center text-sm text-gray-500 font-medium">
            Not staff? <a href="/" class="text-text hover:text-brand underline decoration-brand/30 underline-offset-4 transition-all">Back to SpiceRoute Public Site</a>
        </p>
    </div>
</div>
@endsection