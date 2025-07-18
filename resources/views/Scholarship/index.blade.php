@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-6 py-12">

    <h1 class="text-4xl font-bold text-center text-indigo-700 mb-10">Open Scholarships</h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
        
        <!-- ANSO Scholarship Card -->
        <div class="bg-white rounded-2xl shadow-md border p-6 hover:shadow-lg transition duration-300">
            <h2 class="text-2xl font-semibold text-blue-700 mb-2">ANSO Scholarship - China</h2>
            <p class="text-gray-700"><strong>Opening Date:</strong> 1st September</p>
            <p class="text-gray-700"><strong>Deadline:</strong> 15th February 2026</p>
            <p class="text-gray-600 mt-2 mb-4">
                Prestigious scholarship in China with 3000 RMB monthly stipend, accommodation, tuition, and medical insurance.
            </p>
            <a href="{{ route('Scholarship.anso') }}" class="text-indigo-600 hover:underline font-medium">Read More →</a>
        </div>

        <!-- CSC Scholarship Card -->
        <div class="bg-white rounded-2xl shadow-md border p-6 hover:shadow-lg transition duration-300">
            <h2 class="text-2xl font-semibold text-blue-700 mb-2">CSC Scholarship - China</h2>
            <p class="text-gray-700"><strong>Opening Date:</strong> 1st September</p>
            <p class="text-gray-700"><strong>Deadline:</strong> 15th February 2026 (may vary by university)</p>
            <p class="text-gray-600 mt-2 mb-4">
                Renowned Chinese government scholarship with stipend, tuition waiver, accommodation, and health insurance.
            </p>
            <a href="{{ route('Scholarship.csc') }}" class="text-indigo-600 hover:underline font-medium">Read More →</a>
        </div>

        <!-- Add more scholarship cards below using same pattern -->

    </div>
</div>
@endsection
