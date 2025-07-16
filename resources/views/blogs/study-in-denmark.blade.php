@extends('layouts.app')

@section('content')
<div class="max-w-5xl mx-auto px-4 py-12">
    <div class="text-sm text-gray-500 mb-4">
        <a href="{{ route('home') }}" class="text-blue-600 hover:underline">Home</a> / <span>Blog Details</span>
    </div>

    <h1 class="text-4xl font-bold text-blue-800 mb-6">Study Scholarships in Denmark</h1>

    <p class="text-gray-700 mb-4 text-lg font-medium">
        Your Complete Guide to Fully Funded Scholarships in Denmark for Undergraduate, Master’s, and PhD Students from Pakistan and Around the World!
    </p>

    <div class="space-y-5 text-gray-800 leading-relaxed">
        <p>Looking to study in Denmark with a scholarship? Whether you’re an undergraduate, master’s, or PhD student...</p>
        <p>Denmark is known for its world-class education system...</p>

        <h2 class="text-2xl font-semibold text-blue-600">Types of Scholarships in Denmark</h2>
        <ul class="list-disc ml-6">
            <li>Fully Funded s</li>
            <li>Undergraduate, Master, and PhD Scholarships</li>
            <li>Government & University Specific Scholarships</li>
        </ul>

        <h2 class="text-2xl font-semibold text-blue-600 mt-6">Top Scholarships for Pakistani Students</h2>
        <table class="w-full text-sm border mt-4">
            <thead>
                <tr class="bg-blue-100">
                    <th class="p-2 border">Scholarship/University</th>
                    <th class="p-2 border">Benefits</th>
                    <th class="p-2 border">Programs</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="p-2 border">Danish Govt</td>
                    <td class="p-2 border">Full Tuition + Stipend</td>
                    <td class="p-2 border">Masters</td>
                </tr>
                <!-- Add more rows as needed -->
            </tbody>
        </table>

        <h2 class="text-2xl font-semibold text-blue-600 mt-6">How to Apply</h2>
        <ol class="list-decimal ml-6">
            <li>Research Available Scholarships</li>
            <li>Check Eligibility</li>
            <li>Prepare Documents</li>
            <li>Apply via University/Scholarship Portal</li>
        </ol>

        <h2 class="text-xl font-bold text-green-700 mt-6">Book your free consultation today and take the first step toward your dream!</h2>
    </div>
</div>
@endsection
