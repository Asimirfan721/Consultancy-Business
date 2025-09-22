@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto px-4 py-12">
    <!-- Breadcrumb -->
    <div class="text-sm text-gray-500 mb-4">
        <a href="{{ route('home') }}" class="hover:underline text-blue-600">Home</a> / <span>About Us</span>
    </div>

    <!-- Heading -->
    <h1 class="text-4xl font-bold text-blue-800 mb-6">About Us</h1>
    <p class="text-lg text-gray-700 mb-6 leading-relaxed">
        Welcome to Knowledge Hub.
    </p>

    <!-- Main Content -->
    <div class="bg-white p-8 rounded-xl shadow-lg space-y-6">
        <p class="text-gray-800 leading-relaxed">
            Since April 2024, we’ve been sharing valuable insights, real-world experiences, and practical knowledge about overseas education, immigration, and career opportunities. Instead of selling consultancy services, our goal is to create a free learning space where students, professionals, and knowledge seekers can find clear, unbiased, and practical information.  </p>
        <p class="text-gray-800 leading-relaxed">
           Our mission is simple: <br>
           ✔ Help you understand the process of choosing the right foreign education institute.<br>
✔ Provide guidance about admissions, visa procedures, and career opportunities abroad.<br>
✔ Share real experiences and problem-solving strategies from the ever-changing global education and career industry.<br>   </p>

        <p class="text-gray-800 leading-relaxed">
           We are not a consultancy – we are a knowledge platform. Everything here is free, unbiased, and meant to empower you to make informed decisions about your future.

        <p class="text-blue-700 font-semibold text-lg">
            </p>
    </div>

    <!-- Bonus Section -->
    <div class="mt-12 bg-gradient-to-r from-purple-100 to-blue-100 p-8 rounded-xl shadow-inner text-center">
        <h2 class="text-2xl font-bold text-purple-800 mb-4">🎓 Benefits to Join Our Expo</h2>
        <p class="text-gray-700">
            Discover university booths, apply directly, get document advice, win scholarships and connect with experienced consultants.
        </p>
    </div>
</div>
@endsection
<script src="//unpkg.com/alpinejs" defer></script>