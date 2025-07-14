@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-4 py-16">
    <div class="flex flex-col items-center mb-12">
        <h1 class="text-5xl font-extrabold text-blue-900 mb-2">Explore Our Latest Blogs</h1>
        <p class="text-lg text-gray-500">Insights, scholarships, and study opportunities for international students</p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Blog Card 1 -->
        <div class="bg-white rounded-2xl shadow-lg border border-gray-100 hover:shadow-2xl transition duration-300 flex flex-col">
            <div class="p-6 flex-1 flex flex-col">
                <h2 class="text-2xl font-bold text-blue-700 mb-2">Study Scholarships in Denmark</h2>
                <p class="text-gray-600 mb-6 flex-1">Explore scholarship opportunities to study in Denmark...</p>
            </div>
            <div class="px-6 pb-6">
                <a href="{{ route('blog.details', 'study-scholarships-in-denmark') }}"
                   class="inline-block bg-blue-600 text-white px-4 py-2 rounded-lg font-semibold hover:bg-blue-700 transition">
                   Read More →
                </a>
            </div>
        </div>

        <!-- Blog Card 2 -->
        <div class="bg-white rounded-2xl shadow-lg border border-gray-100 hover:shadow-2xl transition duration-300 flex flex-col">
            <div class="p-6 flex-1 flex flex-col">
                <h2 class="text-2xl font-bold text-blue-700 mb-2">Study in Italy</h2>
                <p class="text-gray-600 mb-6 flex-1">Explore scholarship, visa, and study opportunities in Italy for international students...</p>
            </div>
            <div class="px-6 pb-6">
                <a href="{{ route('blogs.italy') }}"
                   class="inline-block bg-blue-600 text-white px-4 py-2 rounded-lg font-semibold hover:bg-blue-700 transition">
                   Study →
                </a>
            </div>
        </div>

        <!-- Add more blog cards here as needed -->
    </div>
</div>
@endsection
