@extends('layouts.app')

@section('content')
<div class="max-w-lg mx-auto bg-white p-6 shadow rounded">
    <h2 class="text-2xl font-bold mb-4">Upload Admission/Scholarship</h2>

    <form method="POST" action="{{ route('admissions.store') }}" enctype="multipart/form-data">
        @csrf

        <div class="mb-4">
            <label class="block font-medium">Image</label>
            <input type="file" name="image" class="mt-2 w-full border p-2 rounded" required>
        </div>

        <div class="mb-4">
            <label class="block font-medium">Description</label>
            <textarea name="description" class="mt-2 w-full border p-2 rounded"></textarea>
        </div>

        <div class="mb-4">
            <label class="block font-medium">Deadline</label>
            <input type="date" name="deadline" class="mt-2 w-full border p-2 rounded" required>
        </div>

        <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded">Upload</button>
    </form>
</div>
@endsection
