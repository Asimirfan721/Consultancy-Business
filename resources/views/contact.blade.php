@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-[#F3FFE3] py-12 px-4">
    <div class="max-w-3xl mx-auto">
        <h2 class="text-3xl font-bold mb-6 text-center text-black">Contact Us</h2>

        <div class="flex flex-col md:flex-row items-center justify-center gap-6 mb-8">
            <a href="tel:03052135624" class="flex items-center gap-2 px-4 py-2 rounded-full bg-green-100 text-black font-semibold hover:bg-green-200 transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H5a2 2 0 01-2-2V5zm0 12a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H5a2 2 0 01-2-2v-2zm12-12a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zm0 12a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" /></svg>
                Call: 0305 2135624
            </a>
            <a href="mailto:rajputasim735@gmail.com" class="flex items-center gap-2 px-4 py-2 rounded-full bg-green-100 text-black font-semibold hover:bg-green-200 transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12H8m8 0a4 4 0 11-8 0 4 4 0 018 0zm0 0v1a2 2 0 002 2h2a2 2 0 002-2v-1a2 2 0 00-2-2h-2a2 2 0 00-2 2z" /></svg>
                Email: rajputasim735@gmail.com
            </a>
            <a href="https://wa.me/923052135624" target="_blank" class="flex items-center gap-2 px-4 py-2 rounded-full bg-green-100 text-black font-semibold hover:bg-green-200 transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16.72 11.06a6.5 6.5 0 10-11.44 6.11L3 21l3.92-1.28a6.5 6.5 0 009.8-8.66z" /></svg>
                WhatsApp: 0305 2135624
            </a>
        </div>

        @if(session('success'))
            <div class="bg-green-100 text-green-700 p-4 mb-6 rounded">{{ session('success') }}</div>
        @endif

        <form action="{{ route('contact.submit') }}" method="POST"
              class="max-w-2xl mx-auto space-y-5 bg-white p-8 rounded-2xl shadow-xl border border-green-200 mt-10">
            @csrf
            <h2 class="text-2xl font-bold text-black mb-6 text-center">📬 Contact Us</h2>

            <!-- Name -->
            <div>
                <label class="block mb-1 text-black font-medium">Your Name</label>
                <input type="text" name="name" required
                       class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-green-400 transition text-black bg-[#F3FFE3]">
            </div>

            <!-- City -->
            <div>
                <label class="block mb-1 text-black font-medium">Your City</label>
                <input type="text" name="city" required
                       class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-green-400 transition text-black bg-[#F3FFE3]">
            </div>

            <!-- Phone -->
            <div>
                <label class="block mb-1 text-black font-medium">Phone Number</label>
                <input type="text" name="phone" required
                       class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-green-400 transition text-black bg-[#F3FFE3]">
            </div>

            <!-- Email -->
            <div>
                <label class="block mb-1 text-black font-medium">Email Address</label>
                <input type="email" name="email" required
                       class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-green-400 transition text-black bg-[#F3FFE3]">
            </div>

            <!-- Destination -->
            <div>
                <label class="block mb-1 text-black font-medium">Where do you want to apply?</label>
                <input type="text" name="destination" required
                       class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-green-400 transition text-black bg-[#F3FFE3]">
            </div>

            <!-- Qualification -->
            <div>
                <label class="block mb-1 text-black font-medium">Your Qualification</label>
                <input type="text" name="qualification" required
                       class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-green-400 transition text-black bg-[#F3FFE3]">
            </div>

            <!-- Degree Level -->
            <div>
                <label class="block mb-1 text-black font-medium">Degree Level (e.g. Bachelor, Master, PhD)</label>
                <input type="text" name="degree_level" required
                       class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-green-400 transition text-black bg-[#F3FFE3]">
            </div>

            <!-- University -->
            <div>
                <label class="block mb-1 text-black font-medium">Desired University</label>
                <input type="text" name="university" required
                       class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-green-400 transition text-black bg-[#F3FFE3]">
            </div>

            <!-- Programs -->
            <div>
                <label class="block mb-1 text-black font-medium">Write at least 3 programs of your choice</label>
                <textarea name="programs" rows="4" required
                          class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-green-400 transition resize-none text-black bg-[#F3FFE3]"></textarea>
            </div>

            <!-- Submit Button -->
            <div class="text-center">
                <button type="submit"
                        class="bg-green-600 text-white px-8 py-3 rounded-full shadow-lg hover:bg-green-700 transition-all duration-300 font-semibold tracking-wide">
                    Submit Now
                </button>
            </div>
        </form>

        <!-- User Reviews Section -->
        <div class="mt-12">
            <h3 class="text-2xl font-bold mb-6 text-center text-black">What Our Clients Say</h3>
            <div class="flex flex-col md:flex-row gap-8 justify-center items-stretch">
                <!-- Review 1 -->
                <div class="flex-1 bg-white rounded-2xl shadow-lg p-6 transition-transform duration-300 hover:scale-105 hover:shadow-2xl border-t-4 border-green-200">
                    <div class="flex items-center gap-3 mb-2">
                        <span class="text-lg font-semibold text-black">Ayesha Khan</span>
                        <span class="text-sm text-gray-400">★ ★ ★ ★ ★</span>
                    </div>
                    <p class="text-black italic">
                        "Their service is awesome! The team is truly expert in the field and guided me at every step. Highly recommended for anyone dreaming to study abroad."
                    </p>
                </div>
                <!-- Review 2 -->
                <div class="flex-1 bg-white rounded-2xl shadow-lg p-6 transition-transform duration-300 hover:scale-105 hover:shadow-2xl border-t-4 border-green-400">
                    <div class="flex items-center gap-3 mb-2">
                        <span class="text-lg font-semibold text-black">Ali Raza</span>
                        <span class="text-sm text-gray-400">★ ★ ★ ★ ★</span>
                    </div>
                    <p class="text-black italic">
                        "I am so happy with TechConsultancy! They are very good at what they do and made my application process smooth and stress-free. Thank you for your dedication!"
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
