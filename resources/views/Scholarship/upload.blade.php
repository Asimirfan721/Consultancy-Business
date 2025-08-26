@extends('layouts.app')

@section('content')
<section class="max-w-3xl mx-auto p-8 bg-white shadow rounded mt-10">
    <h2 class="text-2xl font-bold mb-6">Upload Scholarship Image</h2>

    @if(session('success'))
        <div class="bg-green-100 text-green-700 p-4 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('scholarships.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-4">
            <label for="image" class="block font-semibold mb-1">Scholarship Image</label>
            <input type="file" name="image" id="image" required class="w-full border border-gray-300 p-2 rounded">
            @error('image') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
        </div>

        <div class="mb-4">
            <label for="description" class="block font-semibold mb-1">Description</label>
            <input type="text" name="description" id="description" required class="w-full border border-gray-300 p-2 rounded">
            @error('description') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
        </div>

        <div class="mb-4">
            <label for="deadline" class="block font-semibold mb-1">Deadline</label>
            <input type="date" name="deadline" id="deadline" required class="w-full border border-gray-300 p-2 rounded">
            @error('deadline') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
        </div>

        <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-700 transition">Upload</button>
    </form>
    <a href="{{ route('scholarships.upload') }}" class="text-blue-600 hover:underline">Upload New Scholarship</a>

</section>
@endsection
