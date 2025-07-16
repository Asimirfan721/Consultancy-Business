@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto px-6 py-10 text-gray-800 leading-relaxed">

    <h1 class="text-3xl font-bold text-indigo-700 mb-4">ANSO Scholarship – China</h1>

    <p class="mb-2"><strong>Opening Date:</strong> 1st September</p>
    <p class="mb-4"><strong>Deadline:</strong> 15th February 2026</p>

    <h2 class="text-xl font-semibold text-gray-700 mt-6 mb-2">About the Scholarship:</h2>
    <p class="mb-4">
        The ANSO (Alliance of International Science Organizations) Scholarship is one of the most prestigious fully funded scholarships in China.
        It is aimed at young talents from developing countries who wish to pursue Master’s or Doctoral studies at top Chinese institutions.
    </p>

    <h2 class="text-xl font-semibold text-gray-700 mt-6 mb-2">Benefits:</h2>
    <ul class="list-disc list-inside mb-4 space-y-1">
        <li>Monthly stipend: 3,000 RMB</li>
        <li>Full tuition fee waiver</li>
        <li>Accommodation support</li>
        <li>Medical insurance</li>
    </ul>

    <a href="{{ route('Scholarship.index') }}" class="inline-block mt-6 text-blue-500 hover:underline">← Back to Scholarships</a>

</div>
@endsection
