@extends('layouts.app')
 

@section('content')
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
            <!-- Explore Button -->
            <a href="http://127.0.0.1:8000/blogs"
               class="inline-block px-8 py-3 rounded-full bg-green-600 text-white font-semibold shadow-md hover:bg-green-700 transition-all duration-200"
               title="Admission Updates: Stay informed with instant updates on your applications. Effortlessly monitor your application progress and receive timely updates and offers">
                Explore+
            </a>
            <a href="https://timescoursefinder.com/" target="_blank"
               class="inline-block px-8 py-3 rounded-full bg-blue-600 text-white font-semibold shadow-md ml-4 hover:bg-blue-700 transition-all duration-200"
               title="Find Courses: Unsure about the best universities and courses for you? Use our AI-powered University Course Finder to find exactly what you need, saving you months of research">
                Find Courses
            </a>
        </div>
    </div>
</section>

<!-- Popular Countries Section -->
<section id="countries" class="mt-16 bg-[#F3FFE3] py-12 rounded-2xl">
    <h2 class="text-3xl md:text-4xl font-bold mb-10 text-center text-black">
        Popular Countries We Guide For
    </h2>

    <div class="grid gap-8 grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
        <!-- Country Card -->
        <div class="bg-white p-6 rounded-2xl shadow-md border-t-4 border-green-400 hover:scale-105 transition">
            <h3 class="text-xl font-semibold text-black mb-2">Denmark</h3>
            <p class="text-black">Top universities, PR pathways, and quality education.</p>
             <a href="{{ route('blog.details', 'study-scholarships-in-denmark') }}"
               class="text-blue-500 hover:underline font-medium">
               Read More →
            </a>
        </div>
        <div class="bg-white p-6 rounded-2xl shadow-md border-t-4 border-green-400 hover:scale-105 transition">
            <h3 class="text-xl font-semibold text-black mb-2 text-center">Italy</h3>
            <p class="text-black text-center">You have to pay Zero tuition fee in public universities and great research opportunities. In addition, you will be rewarded regional scholarship that will cover you tution fees, accomodation and canteen expense as well</p>
        </div>
        <div class="bg-white p-6 rounded-2xl shadow-md border-t-4 border-green-400 hover:scale-105 transition">
            <h3 class="text-xl font-semibold text-black mb-2">Germany</h3>
            <p class="text-black">Excellent lifestyle, top universities, and work opportunities.</p>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="max-w-4xl mx-auto mt-16 bg-[#F3FFE3] py-12 rounded-2xl">
    <h2 class="text-3xl font-bold mb-8 text-center text-black">Frequently asked questions</h2>
    <div x-data="{ open: 1 }" class="space-y-4">

        <!-- FAQ 1 -->
        <div class="bg-white rounded-lg shadow border border-green-200">
            <button @click="open === 1 ? open = null : open = 1"
                class="w-full flex justify-between items-center px-6 py-4 text-left focus:outline-none">
                <span class="text-lg font-semibold text-black">1. What services does TechConsultancy offer?</span>
                <span>
                    <svg x-show="open !== 1" class="w-6 h-6 text-green-700" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2"/><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v8m-4-4h8" /></svg>
                    <svg x-show="open === 1" class="w-6 h-6 text-green-700" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2"/><path stroke-linecap="round" stroke-linejoin="round" d="M8 12h8" /></svg>
                </span>
            </button>
            <div x-show="open === 1" class="px-6 pb-4 text-black">
                TechConsultancy provides a range of services including university and program selection, application assistance, visa and immigration support, scholarship guidance, career counseling, and 24/7 support. We also offer post-arrival assistance to help students settle into their new environment.
            </div>
        </div>

        <!-- FAQ 2 -->
        <div class="bg-white rounded-lg shadow border border-green-200">
            <button @click="open === 2 ? open = null : open = 2"
                class="w-full flex justify-between items-center px-6 py-4 text-left focus:outline-none">
                <span class="text-lg font-semibold text-black">2. How long has TechConsultancy been in the education consultancy industry?</span>
                <span>
                    <svg x-show="open !== 2" class="w-6 h-6 text-green-700" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2"/><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v8m-4-4h8" /></svg>
                    <svg x-show="open === 2" class="w-6 h-6 text-green-700" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2"/><path stroke-linecap="round" stroke-linejoin="round" d="M8 12h8" /></svg>
                </span>
            </button>
            <div x-show="open === 2" class="px-6 pb-4 text-black">
                TechConsultancy has been dedicated to assisting students since April 2004, with nearly two decades of experience in the field.
            </div>
        </div>

        <!-- FAQ 3 -->
        <div class="bg-white rounded-lg shadow border border-green-200">
            <button @click="open === 3 ? open = null : open = 3"
                class="w-full flex justify-between items-center px-6 py-4 text-left focus:outline-none">
                <span class="text-lg font-semibold text-black">3. Why should I choose TechConsultancy for my study abroad journey?</span>
                <span>
                    <svg x-show="open !== 3" class="w-6 h-6 text-green-700" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2"/><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v8m-4-4h8" /></svg>
                    <svg x-show="open === 3" class="w-6 h-6 text-green-700" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2"/><path stroke-linecap="round" stroke-linejoin="round" d="M8 12h8" /></svg>
                </span>
            </button>
            <div x-show="open === 3" class="px-6 pb-4 text-black">
                Choosing TechConsultancy means partnering with a team that offers expert guidance, 24/7 availability, a global network of top universities, and accreditations from reputable organizations.
            </div>
        </div>

        <!-- FAQ 4 -->
        <div class="bg-white rounded-lg shadow border border-green-200">
            <button @click="open === 4 ? open = null : open = 4"
                class="w-full flex justify-between items-center px-6 py-4 text-left focus:outline-none">
                <span class="text-lg font-semibold text-black">4. How does TechConsultancy help with university and program selection?</span>
                <span>
                    <svg x-show="open !== 4" class="w-6 h-6 text-green-700" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2"/><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v8m-4-4h8" /></svg>
                    <svg x-show="open === 4" class="w-6 h-6 text-green-700" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2"/><path stroke-linecap="round" stroke-linejoin="round" d="M8 12h8" /></svg>
                </span>
            </button>
            <div x-show="open === 4" class="px-6 pb-4 text-black">
                TechConsultancy provides personalized guidance to help you choose the right university and program based on your academic interests, career goals, and preferences.
            </div>
        </div>

        <!-- FAQ 5 -->
        <div class="bg-white rounded-lg shadow border border-green-200">
            <button @click="open === 5 ? open = null : open = 5"
                class="w-full flex justify-between items-center px-6 py-4 text-left focus:outline-none">
                <span class="text-lg font-semibold text-black">5. What kind of support does TechConsultancy offer for the application process?</span>
                <span>
                    <svg x-show="open !== 5" class="w-6 h-6 text-green-700" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2"/><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v8m-4-4h8" /></svg>
                    <svg x-show="open === 5" class="w-6 h-6 text-green-700" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2"/><path stroke-linecap="round" stroke-linejoin="round" d="M8 12h8" /></svg>
                </span>
            </button>
            <div x-show="open === 5" class="px-6 pb-4 text-black">
                TechConsultancy offers expert support with the application process, including advice on writing personal statements, securing references, and completing application forms.
            </div>
        </div>
    </div>
</section>

<!-- Alpine.js for accordion functionality -->
<script src="//unpkg.com/alpinejs" defer></script>
{{-- @include('layouts.footer') --}}
@endsection

<style>
    .faq-section {
        background: #F3FFE3;
        padding: 2rem 1rem;
        border-radius: 1.5rem;
        max-width: 700px;
        margin: 3rem auto;
    }
    .faq-title {
        font-size: 2rem;
        font-weight: bold;
        color: #111;
        text-align: center;
        margin-bottom: 2rem;
    }
    .faq-item {
        border-bottom: 1px solid #b5e0b7;
        padding: 1rem 0;
    }
    .faq-question {
        background: none;
        border: none;
        width: 100%;
        text-align: left;
        font-size: 1.1rem;
        font-weight: 600;
        color: #111;
        padding: 0;
        cursor: pointer;
        outline: none;
        display: flex;
        justify-content: space-between;
        align-items: center;
        transition: color 0.2s;
    }
    .faq-question:hover {
        color: #15803d;
    }
    .faq-answer {
        color: #222;
        font-size: 1rem;
        margin-top: 0.5rem;
        display: none;
        transition: all 0.2s;
    }
    .faq-item.active .faq-answer {
        display: block;
    }
</style>
