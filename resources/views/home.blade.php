@extends('layouts.app')

@section('content')
<style>
    .hero-bg {
        background: linear-gradient(rgba(20,40,60,0.7), rgba(20,40,60,0.7)), url('{{ asset('images/book.jpeg') }}') center center / cover no-repeat;
        min-height: 60vh;
        width: 100vw;
        position: relative;
        left: 50%;
        right: 50%;
        margin-left: -50vw;
        margin-right: -50vw;
    }
    .social-icon {
        transition: transform 0.2s, box-shadow 0.2s;
    }
    .social-icon:hover {
        transform: scale(1.2);
        box-shadow: 0 4px 16px rgba(34,197,94,0.2);
    }
    .explore-box {
        background: linear-gradient(135deg, #F3FFE3 80%, #d1fae5 100%);
        box-shadow: 0 8px 32px rgba(34,197,94,0.15);
        transition: box-shadow 0.2s;
    }
    .explore-box:hover {
        box-shadow: 0 12px 40px rgba(34,197,94,0.25);
    }
</style>

<!-- Hero Section -->
<section class="hero-bg flex items-center justify-center py-20 shadow-xl mb-16" style="overflow:hidden;">
    <div class="text-center w-full max-w-2xl mx-auto">
        <h1 class="text-5xl md:text-6xl font-extrabold text-white mb-4 drop-shadow-lg">
            Welcome to <span class="text-green-400">TechConsultancy</span>
        </h1>
        <p class="text-xl md:text-2xl text-gray-200 mb-8 font-medium drop-shadow">
            Your trusted partner in fulfilling study-abroad dreams.<br>
            We assist you every step of the way — from selecting universities to building your visa file.
        </p>
        <div class="flex justify-center gap-6 mb-10">
            <a href="https://facebook.com" target="_blank" class="social-icon text-white text-3xl hover:text-green-400">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="https://instagram.com" target="_blank" class="social-icon text-white text-3xl hover:text-pink-400">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="https://linkedin.com" target="_blank" class="social-icon text-white text-3xl hover:text-blue-400">
                <i class="fab fa-linkedin-in"></i>
            </a>
        </div>
        <!-- Explore+ Info Box -->
        <div class="explore-box rounded-2xl p-8 mx-auto max-w-md shadow-lg mb-2">
            <h2 class="text-2xl font-bold text-green-700 mb-2">Find Courses</h2>
            <p class="text-gray-700 mb-6">
                Unsure about the best universities and courses for you? Use our AI-powered University Course Finder to find exactly what you need, saving you months of research.
            </p>
            <a href="https://timescoursefinder.com/" target="_blank"
               class="inline-block px-8 py-3 rounded-full bg-green-600 text-white font-semibold shadow-md hover:bg-green-700 transition-all duration-200 text-lg">
                Explore+
            </a>
        </div>
    </div>
</section>

<!-- Countries Section -->
<section id="countries" class="mt-8 bg-[#F3FFE3] py-14 rounded-2xl shadow-lg">
    <h2 class="text-4xl font-bold mb-10 text-center text-green-700 drop-shadow">Popular Countries We Guide For</h2>
    <div class="grid gap-10 grid-cols-1 md:grid-cols-2 lg:grid-cols-3 px-4">
        <!-- Denmark Card -->
        <div class="bg-white p-8 rounded-2xl shadow-md border-t-4 border-green-400 hover:scale-105 hover:shadow-xl transition">
            <h3 class="text-2xl font-semibold text-green-700 mb-3">Denmark</h3>
            <p class="text-gray-700 mb-4">Top universities, PR pathways, and quality education.</p>
            <a href="{{ route('blog.details', 'study-scholarships-in-denmark') }}"
               class="text-blue-600 hover:underline font-medium transition">Read More →</a>
        </div>
        <!-- Italy Card -->
        <div class="bg-white p-8 rounded-2xl shadow-md border-t-4 border-green-400 hover:scale-105 hover:shadow-xl transition">
            <h3 class="text-2xl font-semibold text-green-700 mb-3">Italy</h3>
            <p class="text-gray-700 mb-4">
                Zero tuition fee in public universities, great research opportunities, and regional scholarships covering tuition, accommodation, and meals.
            </p>
            <a href="#" class="text-blue-600 hover:underline font-medium transition">Read More →</a>
        </div>
        <!-- Germany Card -->
        <div class="bg-white p-8 rounded-2xl shadow-md border-t-4 border-green-400 hover:scale-105 hover:shadow-xl transition">
            <h3 class="text-2xl font-semibold text-green-700 mb-3">Germany</h3>
            <p class="text-gray-700 mb-4">Excellent lifestyle, top universities, and work opportunities.</p>
            <a href="#" class="text-blue-600 hover:underline font-medium transition">Read More →</a>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="max-w-4xl mx-auto mt-16 bg-[#F3FFE3] py-12 rounded-2xl shadow-lg">
    <h2 class="text-3xl font-bold mb-8 text-center text-green-700 drop-shadow">Frequently Asked Questions</h2>
    <div x-data="{ open: 1 }" class="space-y-4">
        <!-- FAQ 1 -->
        <div class="bg-white rounded-lg shadow border border-green-200 hover:shadow-lg transition">
            <button @click="open === 1 ? open = null : open = 1"
                class="w-full flex justify-between items-center px-6 py-4 text-left focus:outline-none">
                <span class="text-lg font-semibold text-black">1. What services does TechConsultancy offer?</span>
                <span>
                    <svg x-show="open !== 1" class="w-6 h-6 text-green-700" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2"/><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v8m-4-4h8" /></svg>
                </span>
            </button>
            <div x-show="open === 1" class="px-6 pb-4 text-gray-700">
                TechConsultancy provides a range of services including university and program selection, application assistance, visa and immigration support, scholarship guidance, career counseling, and 24/7 support. We also offer post-arrival assistance to help students settle into their new environment.
            </div>
        </div>
        <!-- FAQ 2 -->
        <div class="bg-white rounded-lg shadow border border-green-200 hover:shadow-lg transition">
            <button @click="open === 2 ? open = null : open = 2"
                class="w-full flex justify-between items-center px-6 py-4 text-left focus:outline-none">
                <span class="text-lg font-semibold text-black">2. How does the AI-powered Course Finder work?</span>
                <span>
                    <svg x-show="open !== 2" class="w-6 h-6 text-green-700" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2"/><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v8m-4-4h8" /></svg>
                </span>
            </button>
            <div x-show="open === 2" class="px-6 pb-4 text-gray-700">
                Our AI-powered Course Finder analyzes your preferences and academic background to recommend the best universities and courses tailored for you, saving you months of manual research.
            </div>
        </div>
        <!-- Add more FAQs as needed -->
    </div>
</section>

<!-- Font Awesome CDN for icons (add in your layout if not already included) -->
<script src="https://kit.fontawesome.com/2c36e9b7b9.js" crossorigin="anonymous"></script>
@endsection

