@extends('layouts.app')

@section('content')
<div class="bg-white/90 p-8 rounded-2xl shadow-xl border border-pink-100">
    <!-- About Us Section -->
    <h1 class="text-4xl font-extrabold bg-gradient-to-r from-pink-400 via-purple-400 to-blue-400 bg-clip-text text-transparent drop-shadow mb-4">
        Welcome to <span class="bg-gradient-to-r from-yellow-200 via-pink-300 to-purple-300 bg-clip-text text-transparent">TechConsultancy</span>
    </h1>
    <p class="text-gray-700 mb-8 text-lg">
        We guide students to achieve their dreams of studying abroad. From selecting the right university to preparing your visa file, we assist at every step of the journey.
    </p>

    <!-- Social Icons -->
    <div class="flex space-x-6 mb-8">
        <a href="https://facebook.com" target="_blank" class="text-blue-600 hover:text-white hover:bg-blue-600 px-3 py-1 rounded-full transition font-semibold shadow">
            Facebook
        </a>
        <a href="https://instagram.com" target="_blank" class="text-pink-500 hover:text-white hover:bg-pink-500 px-3 py-1 rounded-full transition font-semibold shadow">
            Instagram
        </a>
        <a href="https://linkedin.com" target="_blank" class="text-purple-700 hover:text-white hover:bg-purple-700 px-3 py-1 rounded-full transition font-semibold shadow">
            LinkedIn
        </a>
    </div>

    <!-- Explore Button -->
    <a href="#countries"
       class="inline-block px-8 py-3 rounded-full bg-gradient-to-r from-pink-400 via-purple-400 to-blue-400 text-white font-bold shadow-lg hover:from-blue-400 hover:to-pink-400 transition-all duration-200">
        Explore
    </a>
</div>

<!-- Country Highlights Section -->
<div id="countries" class="mt-12">
    <h2 class="text-3xl font-extrabold mb-6 bg-gradient-to-r from-pink-400 via-purple-400 to-blue-400 bg-clip-text text-transparent drop-shadow">
        Popular Countries
    </h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        <div class="bg-white/90 p-6 rounded-xl shadow-lg border-t-4 border-pink-400 hover:scale-105 transition">
            <h3 class="text-xl font-bold text-pink-500 mb-2">Canada</h3>
            <p class="text-gray-600 text-base">Top universities, PR pathways, and quality education.</p>
        </div>
        <div class="bg-white/90 p-6 rounded-xl shadow-lg border-t-4 border-purple-400 hover:scale-105 transition">
            <h3 class="text-xl font-bold text-purple-500 mb-2">Germany</h3>
            <p class="text-gray-600 text-base">Zero tuition fee in public universities and great research opportunities.</p>
        </div>
        <div class="bg-white/90 p-6 rounded-xl shadow-lg border-t-4 border-blue-400 hover:scale-105 transition">
            <h3 class="text-xl font-bold text-blue-500 mb-2">Australia</h3>
            <p class="text-gray-600 text-base">Excellent lifestyle, universities, and part-time work options.</p>
        </div>
    </div>
</div>
@endsection
