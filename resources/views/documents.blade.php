@extends('layouts.app')

@section('content')
<section class="py-12 max-w-5xl mx-auto px-4 bg-gray-50 min-h-screen">
    <h2 class="text-4xl font-extrabold text-center mb-10 text-gray-800">
        Mandatory Documents
    </h2>

    <!-- Admission Documents -->
    <div class="bg-white rounded-2xl shadow-md border-l-4 border-blue-600 p-6 mb-10">
        <h3 class="text-2xl font-bold text-gray-800 mb-4">📘 For Admission</h3>
        <p class="text-gray-700 mb-4">
            While admission requirements can vary by university and country, the following documents are typically required:
        </p>
        <ul class="list-disc pl-6 space-y-2 text-gray-700">
            <li>Passport (valid)</li>
            <li>Degree Certificate(s)</li>
            <li>Academic Transcript(s)</li>
            <li>Letter of Motivation / Statement of Purpose</li>
            <li>Two Letters of Recommendation</li>
            <li>Updated CV / Resume</li>
            <li>Proof of English Proficiency (IELTS, TOEFL, Duolingo, etc. if required)</li>
        </ul>
    </div>

    <!-- Visa Documents -->
    <div class="bg-white rounded-2xl shadow-md border-l-4 border-blue-400 p-6">
        <h3 class="text-2xl font-bold text-gray-800 mb-4">🛂 For Visa</h3>
        <p class="text-gray-700 mb-4">
            Visa requirements depend on the country and embassy. Usually, the embassy provides an official checklist, but commonly required documents include:
        </p>
        <ul class="list-disc pl-6 space-y-2 text-gray-700">
            <li>University Acceptance Letter</li>
            <li>Completed Visa Application Form</li>
            <li>Copy of National Identity Card (NIC)</li>
            <li>All Educational Documents</li>
            <li>Documents Apostilled (if required)</li>
            <li>Attestation from Ministry of Foreign Affairs (MOFA)</li>
            <li>Bank Statement / Financial Proof</li>
            <li>Passport-size Photographs (as per embassy format)</li>
            <li>Proof of accommodation & travel (may vary)</li>
        </ul>
    </div>
</section>
@endsection
