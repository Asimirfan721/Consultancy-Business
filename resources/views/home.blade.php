@extends('layouts.app')

@section('content')
<div class="bg-white p-6 rounded shadow-md">
    <!-- About Us Section -->
    <h1 class="text-3xl font-bold text-blue-700 mb-4">Welcome to YourConsultancy</h1>
    <p class="text-gray-700 mb-6">
        We guide students to achieve their dreams of studying abroad. From selecting the right university to preparing your visa file, we assist at every step of the journey.
    </p>

    <!-- Social Icons -->
    <div class="flex space-x-4 mb-6">
        <a href="https://facebook.com" target="_blank" class="text-blue-600 hover:underline">Facebook</a>
        <a href="https://instagram.com" target="_blank" class="text-pink-500 hover:underline">Instagram</a>
        <a href="https://linkedin.com" target="_blank" class="text-blue-800 hover:underline">LinkedIn</a>
    </div>

    <!-- Explore Button -->
    <a href="#countries" class="inline-block bg-blue-600 text-white px-5 py-2 rounded-lg font-semibold hover:bg-blue-700 transition">
        Explore
    </a>
</div>

<!-- Country Highlights Section -->
<div id="countries" class="mt-10">
    <h2 class="text-2xl font-bold mb-4 text-gray-800">Popular Countries</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
        <div class="bg-white p-4 rounded shadow hover:shadow-lg">
            <h3 class="text-xl font-semibold text-red-600">Canada</h3>
            <p class="text-gray-600 text-sm">Top universities, PR pathways, and quality education.</p>
        </div>
        <div class="bg-white p-4 rounded shadow hover:shadow-lg">
            <h3 class="text-xl font-semibold text-blue-600">Germany</h3>
            <p class="text-gray-600 text-sm">Zero tuition fee in public universities and great research opportunities.</p>
        </div>
        <div class="bg-white p-4 rounded shadow hover:shadow-lg">
            <h3 class="text-xl font-semibold text-green-600">Australia</h3>
            <p class="text-gray-600 text-sm">Excellent lifestyle, universities, and part-time work options.</p>
        </div>
    </div>
</div>
@endsection
