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
<section class="p-10 rounded-2xl shadow-xl border border-green-200 bg-[#F3FFE3]">
    <div class="flex flex-col md:flex-row items-center md:items-start gap-8">
        <!-- Left: Image -->
        <a href="{{ url('/') }}" class="md:w-1/3 w-full flex justify-start">
            <img src="{{ asset('images/hero-home.png') }}" alt="Home"
                 class="w-60 md:w-100 my-4 rounded-xl shadow-lg hover:scale-105 transition" />
        </a>
        <!-- Right: Text -->
        <div class="md:w-2/3 w-full">
            <h1 class="text-4xl md:text-5xl font-extrabold text-black leading-tight mb-6">
                Welcome to <span class="font-extrabold text-black">TechConsultancy</span>
            </h1>
            <p class="text-black text-lg md:text-xl max-w-3xl mb-8">
                Your trusted partner in fulfilling study-abroad dreams. We assist you every step of the way — from selecting universities to building your visa file.
            </p>
            <!-- Social Media Icons -->
            <div class="flex flex-wrap gap-4 mb-8">
                <a href="https://facebook.com" target="_blank"
                   class="flex items-center gap-2 bg-white text-black px-4 py-2 rounded-full hover:bg-green-200 transition shadow-sm border border-green-200">
                    <i class="fab fa-facebook-f"></i> Facebook
                </a>
                <a href="https://instagram.com" target="_blank"
                   class="flex items-center gap-2 bg-white text-black px-4 py-2 rounded-full hover:bg-green-200 transition shadow-sm border border-green-200">
                    <i class="fab fa-instagram"></i> Instagram
                </a>
                <a href="https://linkedin.com" target="_blank"
                   class="flex items-center gap-2 bg-white text-black px-4 py-2 rounded-full hover:bg-green-200 transition shadow-sm border border-green-200">
                    <i class="fab fa-linkedin-in"></i> LinkedIn
                </a>
            </div>
            <!-- Explore+ Button with Find Courses Hover Box -->
            <div class="relative inline-block">
                <a href="http://127.0.0.1:8000/blogs"
                   class="inline-block px-8 py-3 rounded-full bg-green-600 text-white font-semibold shadow-md hover:bg-green-700 transition-all duration-200"
                   title="Admission Updates: Stay informed with instant updates on your applications. Effortlessly monitor your application progress and receive timely updates and offers"
                   id="explore-plus-btn">
                    Explore+
                </a>
                <!-- Hover Box -->
                <div class="absolute left-1/2 transform -translate-x-1/2 mt-2 w-80 bg-white border border-green-300 rounded-xl shadow-lg p-4 text-black text-sm z-10 opacity-0 pointer-events-none transition-opacity duration-200"
                     style="top:100%;"
                     id="find-courses-box">
                    <h3 class="font-bold text-lg mb-2 text-green-700">Find Courses</h3>
                    <p>
                        Unsure about the best universities and courses for you? Use our AI-powered University Course Finder to find exactly what you need, saving you months of research.
                    </p>
                </div>
            </div>
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
            <a href="blogs/study-in-italy" class="text-blue-600 hover:underline font-medium transition">Read More →</a>
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

