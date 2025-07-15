@extends('layouts.app')

@section('content')
<style>
    .contact-hero-bg {
        background: linear-gradient(rgba(20,40,60,0.6), rgba(20,40,60,0.6)), url('{{ asset('images/about-us.jpg') }}') center center / cover no-repeat;
        min-height: 50vh;
        width: 100vw;
        position: relative;
        left: 50%;
        right: 50%;
        margin-left: -50vw;
        margin-right: -50vw;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
    }
    .contact-btn {
        transition: box-shadow 0.2s, transform 0.2s;
    }
    .contact-btn:hover {
        box-shadow: 0 8px 24px rgba(34,197,94,0.18);
        transform: scale(1.07);
        background: #bbf7d0;
    }
    .review-card:hover {
        box-shadow: 0 12px 40px rgba(34,197,94,0.18);
        transform: scale(1.05);
        border-top-color: #22c55e;
    }
</style>

<!-- Contact Hero Section -->
<section class="contact-hero-bg mb-12">
    <div class="text-center w-full max-w-2xl mx-auto px-4">
        <h2 class="text-4xl md:text-5xl font-extrabold text-white mb-4 drop-shadow-lg">Contact Us</h2>
        <p class="text-lg md:text-xl text-gray-200 mb-8 font-medium drop-shadow">
            Reach out to TechConsultancy for expert guidance and support on your study abroad journey.
        </p>
        <div class="flex flex-wrap gap-4 justify-center mb-2">
            <a href="tel:03052135624"
               class="contact-btn inline-flex items-center gap-2 px-5 py-2 rounded-full bg-green-100 text-black font-semibold shadow hover:bg-green-200 transition w-auto">
                <i class="fas fa-phone text-green-600"></i>
                0305 2135624
            </a>
            <a href="mailto:rajputasim735@gmail.com"
               class="contact-btn inline-flex items-center gap-2 px-5 py-2 rounded-full bg-green-100 text-black font-semibold shadow hover:bg-green-200 transition w-auto">
                <i class="fas fa-envelope text-green-600"></i>
                rajputasim735@gmail.com
            </a>
            <a href="https://wa.me/923052135624" target="_blank"
               class="contact-btn inline-flex items-center gap-2 px-5 py-2 rounded-full bg-green-100 text-black font-semibold shadow hover:bg-green-200 transition w-auto">
                <i class="fab fa-whatsapp text-green-600"></i>
                WhatsApp
            </a>
        </div>
    </div>
</section>

<div class="min-h-screen bg-[#F3FFE3] py-16 px-4">
    <div class="max-w-3xl mx-auto">
        @if(session('success'))
            <div class="bg-green-100 text-green-700 p-4 mb-6 rounded shadow">{{ session('success') }}</div>
        @endif

        <form action="{{ route('contact.submit') }}" method="POST"
              class="max-w-2xl mx-auto space-y-5 bg-white p-8 rounded-2xl shadow-xl border border-green-200 mt-10">
            @csrf
            <h2 class="text-2xl font-bold text-black mb-6 text-center">📬 Contact Us</h2>

            <!-- Name -->
            <div>
                <label class="block mb-1 text-black font-medium">Your Name</label>
                <input type="text" name="name" required
                       class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-green-400 transition text-black bg-[#F3FFE3] hover:ring-green-600">
            </div>

            <!-- City -->
            <div>
                <label class="block mb-1 text-black font-medium">Your City</label>
                <input type="text" name="city" required
                       class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-green-400 transition text-black bg-[#F3FFE3] hover:ring-green-600">
            </div>

            <!-- Phone -->
            <div>
                <label class="block mb-1 text-black font-medium">Phone Number</label>
                <input type="text" name="phone" required
                       class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-green-400 transition text-black bg-[#F3FFE3] hover:ring-green-600">
            </div>

            <!-- Email -->
            <div>
                <label class="block mb-1 text-black font-medium">Email Address</label>
                <input type="email" name="email" required
                       class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-green-400 transition text-black bg-[#F3FFE3] hover:ring-green-600">
            </div>

            <!-- Destination -->
            <div>
                <label class="block mb-1 text-black font-medium">Where do you want to apply?</label>
                <input type="text" name="destination" required
                       class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-green-400 transition text-black bg-[#F3FFE3] hover:ring-green-600">
            </div>

            <!-- Qualification -->
            <div>
                <label class="block mb-1 text-black font-medium">Your Qualification</label>
                <input type="text" name="qualification" required
                       class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-green-400 transition text-black bg-[#F3FFE3] hover:ring-green-600">
            </div>

            <!-- Degree Level -->
            <div>
                <label class="block mb-1 text-black font-medium">Degree Level (e.g. Bachelor, Master, PhD)</label>
                <input type="text" name="degree_level" required
                       class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-green-400 transition text-black bg-[#F3FFE3] hover:ring-green-600">
            </div>

            <!-- University -->
            <div>
                <label class="block mb-1 text-black font-medium">Desired University</label>
                <input type="text" name="university" required
                       class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-green-400 transition text-black bg-[#F3FFE3] hover:ring-green-600">
            </div>

            <!-- Programs -->
            <div>
                <label class="block mb-1 text-black font-medium">Write at least 3 programs of your choice</label>
                <textarea name="programs" rows="4" required
                          class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-green-400 transition resize-none text-black bg-[#F3FFE3] hover:ring-green-600"></textarea>
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
                <div class="review-card flex-1 bg-white rounded-2xl shadow-lg p-6 transition-transform duration-300 border-t-4 border-green-200">
                    <div class="flex items-center gap-3 mb-2">
                        <span class="text-lg font-semibold text-black">Ayesha Khan</span>
                        <span class="text-sm text-gray-400">★ ★ ★ ★ ★</span>
                    </div>
                    <p class="text-black italic">
                        "Their service is awesome! The team is truly expert in the field and guided me at every step. Highly recommended for anyone dreaming to study abroad."
                    </p>
                </div>
                <!-- Review 2 -->
                <div class="review-card flex-1 bg-white rounded-2xl shadow-lg p-6 transition-transform duration-300 border-t-4 border-green-400">
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

<!-- Font Awesome CDN for icons (add in your layout if not already included) -->
<script src="https://kit.fontawesome.com/2c36e9b7b9.js" crossorigin="anonymous"></script>
@endsection
