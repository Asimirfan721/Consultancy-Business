@extends('layouts.app') <!-- Assuming app.blade.php is your main layout -->

@section('content')
<div class="max-w-6xl mx-auto px-4 py-10 text-gray-800">

    <h1 class="text-4xl font-bold mb-6 text-center text-indigo-700">Study in Italy</h1>

    <p class="mb-6">
        With its historical sites and picturesque scenery, Italy draws an increasing number of visitors annually. For international students seeking top-quality higher education and an affordable and comfortable lifestyle, Italy proves a perfect destination. 
    </p>

    <h2 class="text-2xl font-semibold mt-10 mb-4">📌 Why Study in Italy?</h2>
    <p class="mb-4">
        Italy is home to the oldest institutions in the West and has a solid higher education system. With rich culture, cuisine, and Mediterranean lifestyle, it’s a top destination for students.
    </p>

    <h2 class="text-2xl font-semibold mt-10 mb-4">📝 Admission Requirements in Italy</h2>
    <ul class="list-disc list-inside mb-4 space-y-1">
        <li>Identity document</li>
        <li>Personal Statement</li>
        <li>Letter of recommendation</li>
        <li>University application form</li>
        <li>Academic transcript of previous studies</li>
        <li>English or Italian language proficiency (as per program)</li>
    </ul>

    <h2 class="text-2xl font-semibold mt-10 mb-4">💰 Cost of Studying in Italy</h2>
    <p class="mb-4">
        Italy is one of Europe’s most affordable study destinations. Tuition at public universities costs around 1,000 EUR/year. The University of Rome Tor Vergata offers tuition based on family income.
    </p>

    <h2 class="text-2xl font-semibold mt-10 mb-4">🎓 Scholarships for International Students</h2>
    <p class="mb-4">
        The Italian Government offers annual scholarships to foreign nationals. Our team helps you explore and apply for scholarships using our extensive database.
    </p>

    <h2 class="text-2xl font-semibold mt-10 mb-4">📋 Student Visa Requirements</h2>
    <ul class="list-disc list-inside mb-4 space-y-1">
        <li>Valid passport</li>
        <li>Visa application form</li>
        <li>Criminal record clearance</li>
        <li>Proof of accommodation</li>
        <li>Visa application fee receipt</li>
        <li>Medical insurance</li>
        <li>Flight itinerary</li>
        <li>Proof of funds</li>
        <li>University acceptance letter</li>
        <li>Language proficiency scores (English/Italian)</li>
    </ul>

    <h2 class="text-2xl font-semibold mt-10 mb-4">💼 Post-Study Work Opportunities</h2>
    <p class="mb-4">
        Non-EU students can extend their visa to look for jobs in Italy or Schengen area. Italy offers a robust job market, especially for graduates with degrees from Italian institutions.
    </p>

    <h2 class="text-2xl font-semibold mt-10 mb-4">📞 Book a Meeting with an Expert</h2>
    <p class="mb-4">
        Ready to study in Italy? Book a one-on-one free consultation with our experts. We offer support for 60+ countries. Let’s help you turn your dream into reality!
    </p>

    <div class="text-center mt-8">
        <a href="{{ route('contact') }}" class="inline-block px-6 py-3 bg-indigo-600 text-white font-semibold rounded-full shadow hover:bg-indigo-700 transition">
            Book Now
        </a>
    </div>

</div>
@endsection
