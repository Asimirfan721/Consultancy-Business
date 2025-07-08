@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto py-12 px-4">
    <h2 class="text-3xl font-bold mb-6 text-center text-blue-700">Contact Us</h2>

    @if(session('success'))
        <div class="bg-green-100 text-green-700 p-4 mb-6 rounded">{{ session('success') }}</div>
    @endif

    <form action="{{ route('contact.submit') }}" method="POST" class="space-y-4 bg-white p-6 rounded shadow-md">
        @csrf
        <input type="text" name="name" placeholder="Your Name" required class="w-full p-2 border rounded">
        <input type="text" name="city" placeholder="Your City" required class="w-full p-2 border rounded">
        <input type="text" name="phone" placeholder="Your Phone Number" required class="w-full p-2 border rounded">
        <input type="email" name="email" placeholder="Your Email" required class="w-full p-2 border rounded">
        <input type="text" name="destination" placeholder="Where do you want to apply?" required class="w-full p-2 border rounded">
        <input type="text" name="qualification" placeholder="Your Qualification" required class="w-full p-2 border rounded">
        <input type="text" name="degree_level" placeholder="Degree Level (e.g. Bachelor, Master, PhD)" required class="w-full p-2 border rounded">
        <input type="text" name="university" placeholder="Desired University" required class="w-full p-2 border rounded">
        <textarea name="programs" placeholder="Write at least 3 programs of your choice" rows="4" required class="w-full p-2 border rounded"></textarea>
        <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700">Submit</button>
    </form>
</div>
@endsection
