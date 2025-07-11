@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto px-4 py-12">
    <!-- Breadcrumb -->
    <div class="text-sm text-gray-500 mb-4">
        <a href="{{ route('home') }}" class="hover:underline text-blue-600">Home</a> / <span>Blogs</span>
    </div>

    <h1 class="text-4xl font-bold text-blue-800 mb-8">📝 Recent Blogs</h1>

    <!-- Blog Cards -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Blog 1 -->
        <div class="bg-white p-6 rounded-xl shadow-md border hover:shadow-xl transition">
            <h2 class="text-xl font-semibold text-blue-700 mb-3">Study Scholarships in Denmark</h2>
            <p class="text-gray-600 mb-4">Explore scholarship opportunities to study in Denmark...</p>
            <a href="#" class="text-blue-500 hover:underline font-medium">Read More →</a>
        </div>

        <!-- Blog 2 -->
        <div class="bg-white p-6 rounded-xl shadow-md border hover:shadow-xl transition">
            <h2 class="text-xl font-semibold text-blue-700 mb-3">Germany Student Visa From Pakistan</h2>
            <p class="text-gray-600 mb-4">A step-by-step visa process for Pakistani students applying to Germany.</p>
            <a href="#" class="text-blue-500 hover:underline font-medium">Read More →</a>
        </div>

        <!-- Blog 3 -->
        <div class="bg-white p-6 rounded-xl shadow-md border hover:shadow-xl transition">
            <h2 class="text-xl font-semibold text-blue-700 mb-3">Denmark Student Visa</h2>
            <p class="text-gray-600 mb-4">Know the latest student visa requirements and processing time for Denmark.</p>
            <a href="#" class="text-blue-500 hover:underline font-medium">Read More →</a>
        </div>

        <!-- Blog 4 -->
        <div class="bg-white p-6 rounded-xl shadow-md border hover:shadow-xl transition">
            <h2 class="text-xl font-semibold text-blue-700 mb-3">Denmark Study Visa from Pakistan: A Complete Guide</h2>
            <p class="text-gray-600 mb-4">All you need to know if you're a Pakistani student planning to study in Denmark.</p>
            <a href="#" class="text-blue-500 hover:underline font-medium">Read More →</a>
        </div>
    </div>
</div>
@endsection
<script src="//unpkg.com/alpinejs" defer></script>
