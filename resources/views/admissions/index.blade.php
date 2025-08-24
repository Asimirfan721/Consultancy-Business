@extends('layouts.app')

@section('content')
<section class="py-12 max-w-6xl mx-auto px-4 bg-gray-50 min-h-screen">
    <h2 class="text-3xl font-bold text-center mb-8">Open Admissions & Scholarships</h2>

    <div class="flex overflow-x-auto space-x-6 p-4 bg-white shadow rounded">
        @forelse($admissions as $admission)
            <div class="flex-shrink-0 w-64 bg-gray-100 rounded-lg shadow cursor-pointer"
                 onclick="openModal('{{ asset($admission->image) }}', '{{ $admission->id }}')">
                 
                <img src="{{ asset($admission->image) }}" class="w-full h-40 object-cover rounded-t-lg">

                <div class="p-3">
                    <p class="text-sm text-gray-600">{{ $admission->description }}</p>
                    <p class="text-xs text-red-500 mt-2">
                        Deadline: {{ \Carbon\Carbon::parse($admission->deadline)->format('d M, Y') }}
                    </p>
                </div>
            </div>
        @empty
            <p class="text-gray-500">No active admissions available.</p>
        @endforelse
    </div>
</section>

<!-- Modal -->
<div id="imageModal" class="hidden fixed inset-0 bg-black bg-opacity-70 flex items-center justify-center">
    <div class="bg-white p-6 rounded-lg shadow-lg relative max-w-3xl w-full">
        <button onclick="closeModal()" class="absolute top-2 right-2 text-gray-700 text-2xl">&times;</button>
        
        <img id="modalImage" src="" class="w-full h-auto rounded"
