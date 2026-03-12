@extends('layouts.app')

@section('content')
<div class="py-12 px-4">
    <div class="max-w-2xl mx-auto">
        <div class="text-center mb-10">
            <h1 class="text-4xl font-extrabold text-text tracking-tight sm:text-5xl">
                Get in <span class="text-brand">Touch</span>
            </h1>
            <p class="mt-4 text-lg text-gray-600">
                Have a question about our spices or catering? Drop us a line.
            </p>
        </div>

        <div class="bg-white shadow-xl shadow-brand-100/50 rounded-2xl p-8 border border-brand-100">
            <form method="POST" action="/contact" class="space-y-6">
                @csrf

                <div>
                    <label for="name" class="form-label">Full Name</label>
                    <input type="text" id="name" name="name" class="input-field" placeholder="Arjun Singh" required>
                </div>

                <div>
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" id="email" name="email" class="input-field" placeholder="arjun@example.com" required>
                </div>

                <div>
                    <label for="message" class="form-label">Your Message</label>
                    <textarea id="message" name="message" rows="4" class="input-field" placeholder="Tell us what's on your mind..." required></textarea>
                </div>

                <div class="pt-2">
                    <button type="submit" class="btn-primary w-full text-lg shadow-lg shadow-brand/30">
                        Send Message
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection