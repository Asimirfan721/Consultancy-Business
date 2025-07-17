@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto px-6 py-10">

    <h1 class="text-3xl font-bold text-indigo-700 text-center mb-10">Open Scholarships</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        
        <!-- Scholarship Card Example -->
        <div class="bg-white rounded-xl shadow-md p-6 border hover:shadow-xl transition">
            <h2 class="text-xl font-semibold text-blue-700 mb-2">ANSO Scholarship - China</h2>
            <p class="text-gray-600 mb-2"><strong>Opening Date:</strong> 1st September</p>
            <p class="text-gray-600 mb-2"><strong>Deadline:</strong> 15th February 2026</p>
            <p class="text-gray-600 mb-4">One of the most prestigious scholarships in China offering monthly stipend, tuition, and more.</p>
            <a href="{{ route('Scholarship.anso') }}" class="text-blue-500 hover:underline font-medium">Read More →</a>
        </div>

        <!-- Add more cards below following same format -->

    </div>

</div>

  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        
        <!-- Scholarship Card Example -->
        <div class="bg-white rounded-xl shadow-md p-6 border hover:shadow-xl transition">
            <h2 class="text-xl font-semibold text-blue-700 mb-2">CSC Scholarship - China</h2>
            <p class="text-gray-600 mb-2"><strong>Opening Date:</strong> 1st September</p>
            <p class="text-gray-600 mb-2"><strong>Deadline:</strong> It varies but 15th February 2026 for most of the Universities</p>
            <p class="text-gray-600 mb-4">One of the most prestigious scholarships in China offering monthly stipend, tuition, and more.</p>
            <a href="{{ route('Scholarship.csc') }}" class="text-blue-500 hover:underline font-medium">Read More →</a>
        </div>
        <!-- Add more cards below following same format -->
    </div>
@endsection
