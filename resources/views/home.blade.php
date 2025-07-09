@extends('layouts.app')
 

@section('content')
<!-- Hero Section -->
<section class="p-10 rounded-2xl shadow-xl border border-green-200 bg-[#F3FFE3]">
    <!-- Heading -->
    <h1 class="text-4xl md:text-5xl font-extrabold text-black leading-tight mb-6">
        Welcome to <span class="font-extrabold text-black">TechConsultancy</span>
    </h1>

    <!-- Description -->
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
    <a href="#countries"
       class="inline-block px-8 py-3 rounded-full bg-green-600 text-white font-semibold shadow-md hover:bg-green-700 transition-all duration-200">
        Explore Countries
    </a>
</section>

<!-- Popular Countries Section -->
<section id="countries" class="mt-16 bg-[#F3FFE3] py-12 rounded-2xl">
    <h2 class="text-3xl md:text-4xl font-bold mb-10 text-center text-black">
        Popular Countries We Guide For
    </h2>

    <div class="grid gap-8 grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
        <!-- Country Card -->
        <div class="bg-white p-6 rounded-2xl shadow-md border-t-4 border-green-400 hover:scale-105 transition">
            <h3 class="text-xl font-semibold text-black mb-2">France</h3>
            <p class="text-black">Top universities, PR pathways, and quality education.</p>
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
@include('layouts.footer')
@endsection
