@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="p-10 rounded-2xl shadow-xl border border-green-200 bg-gradient-to-br from-green-50 to-white">
    <!-- Heading -->
    <h1 class="text-4xl md:text-5xl font-extrabold text-gray-800 leading-tight mb-6">
        Welcome to <span class="bg-gradient-to-r from-yellow-400 via-pink-400 to-purple-500 bg-clip-text text-transparent">TechConsultancy</span>
    </h1>

    <!-- Description -->
    <p class="text-gray-700 text-lg md:text-xl max-w-3xl mb-8">
        Your trusted partner in fulfilling study-abroad dreams. We assist you every step of the way — from selecting universities to building your visa file.
    </p>

    <!-- Social Media Icons -->
    <div class="flex flex-wrap gap-4 mb-8">
        <a href="https://facebook.com" target="_blank"
           class="flex items-center gap-2 bg-blue-100 text-blue-600 px-4 py-2 rounded-full hover:bg-blue-600 hover:text-white transition shadow-sm">
            <i class="fab fa-facebook-f"></i> Facebook
        </a>
        <a href="https://instagram.com" target="_blank"
           class="flex items-center gap-2 bg-pink-100 text-pink-600 px-4 py-2 rounded-full hover:bg-pink-600 hover:text-white transition shadow-sm">
            <i class="fab fa-instagram"></i> Instagram
        </a>
        <a href="https://linkedin.com" target="_blank"
           class="flex items-center gap-2 bg-purple-100 text-purple-700 px-4 py-2 rounded-full hover:bg-purple-700 hover:text-white transition shadow-sm">
            <i class="fab fa-linkedin-in"></i> LinkedIn
        </a>
    </div>

    <!-- Explore Button -->
    <a href="#countries"
       class="inline-block px-8 py-3 rounded-full bg-gradient-to-r from-pink-400 via-purple-500 to-blue-500 text-white font-semibold shadow-md hover:opacity-90 transition-all duration-200">
        Explore Countries
    </a>
</section>

<!-- Popular Countries Section -->
<section id="countries" class="mt-16">
    <h2 class="text-3xl md:text-4xl font-bold mb-10 text-center bg-gradient-to-r from-pink-500 via-purple-500 to-blue-500 bg-clip-text text-transparent">
        Popular Countries We Guide For
    </h2>

    <div class="grid gap-8 grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
        <!-- Country Card -->
        <div class="bg-white p-6 rounded-2xl shadow-md border-t-4 border-pink-500 hover:scale-105 transition">
            <h3 class="text-xl font-semibold text-pink-600 mb-2">Canada</h3>
            <p class="text-gray-600">Top universities, PR pathways, and quality education.</p>
        </div>

        <div class="bg-white p-6 rounded-2xl shadow-md border-t-4 border-purple-500 hover:scale-105 transition">
            <h3 class="text-xl font-semibold text-purple-600 mb-2">Germany</h3>
            <p class="text-gray-600">Zero tuition fee in public universities and great research opportunities.</p>
        </div>

        <div class="bg-white p-6 rounded-2xl shadow-md border-t-4 border-blue-500 hover:scale-105 transition">
            <h3 class="text-xl font-semibold text-blue-600 mb-2">Australia</h3>
            <p class="text-gray-600">Excellent lifestyle, top universities, and work opportunities.</p>
        </div>
    </div>
</section>
@endsection
