@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto px-4 py-12">
    <h1 class="text-4xl font-bold text-blue-800 mb-8">Recent Blogs</h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        <!-- Blog Card -->
        <div class="bg-white p-6 rounded-xl shadow-md border hover:shadow-xl transition">
            <h2 class="text-xl font-semibold text-blue-700 mb-3">Study Scholarships in Denmark</h2>
            <p class="text-gray-600 mb-4">Explore scholarship opportunities to study in Denmark...</p>
            <a href="{{ route('blog.details', 'study-scholarships-in-denmark') }}"
               class="text-blue-500 hover:underline font-medium">
               Read More →
            </a>
        </div>

        <!-- More blogs can go here... -->
    </div>
</div>
@endsection
