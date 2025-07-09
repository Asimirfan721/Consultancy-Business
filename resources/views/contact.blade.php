@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto py-12 px-4">
    <h2 class="text-3xl font-bold mb-6 text-center text-blue-700">Contact Us</h2>

    <div class="flex flex-col md:flex-row items-center justify-center gap-6 mb-8">
        <a href="tel:03052135624" class="flex items-center gap-2 px-4 py-2 rounded-full bg-green-100 text-green-700 font-semibold hover:bg-green-200 transition">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H5a2 2 0 01-2-2V5zm0 12a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H5a2 2 0 01-2-2v-2zm12-12a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zm0 12a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" /></svg>
            Call: 0305 2135624
        </a>
        <a href="mailto:rajputasim735@gmail.com" class="flex items-center gap-2 px-4 py-2 rounded-full bg-blue-100 text-blue-700 font-semibold hover:bg-blue-200 transition">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12H8m8 0a4 4 0 11-8 0 4 4 0 018 0zm0 0v1a2 2 0 002 2h2a2 2 0 002-2v-1a2 2 0 00-2-2h-2a2 2 0 00-2 2z" /></svg>
            Email: rajputasim735@gmail.com
        </a>
        <a href="https://wa.me/923052135624" target="_blank" class="flex items-center gap-2 px-4 py-2 rounded-full bg-green-50 text-green-700 font-semibold hover:bg-green-200 transition">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16.72 11.06a6.5 6.5 0 10-11.44 6.11L3 21l3.92-1.28a6.5 6.5 0 009.8-8.66z" /></svg>
            WhatsApp: 0305 2135624
        </a>
    </div>

    @if(session('success'))
        <div class="bg-green-100 text-green-700 p-4 mb-6 rounded">{{ session('success') }}</div>
    @endif

    <form action="{{ route('contact.submit') }}" method="POST" class="space-y-4 bg-white p-6 rounded shadow-md">
        @csrf
        <input type="text" name="name" placeholder="Your Name" required class="w-full p-2 border rounded">
        <input type="text" name="city" placeholder="Your City" required class="w-full p-2 border rounded">
        <input type="text" name="phone" placeholder="Your Phone Number" required class="w-full p-2 border rounded">
        <input type="email" name="email" placeholder="Your Email" required class="w-full p-2 border rounded">
        <input type="text" name="destination" placeholder="Where do you want to apply?" required class="w-full p-2 border rounded">
        <input type="text" name="qualification" placeholder="Your Qualification" required class="w-full p-2 border rounded">
        <input type="text" name="degree_level" placeholder="Degree Level (e.g. Bachelor, Master, PhD)" required class="w-full p-2 border rounded">
        <input type="text" name="university" placeholder="Desired University" required class="w-full p-2 border rounded">
        <textarea name="programs" placeholder="Write at least 3 programs of your choice" rows="4" required class="w-full p-2 border rounded"></textarea>
        <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700">Submit</button>
    </form>
</div>
@endsection
