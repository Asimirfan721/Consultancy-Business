@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto px-6 py-10 text-gray-800 leading-relaxed">
    <h1 class="text-4xl font-bold text-indigo-700 mb-6 text-center">Chinese Government Scholarships (CSC)</h1>

    <p class="mb-4">Study in China on Chinese government scholarships (CGS). CSC Scholarships are awarded by the Chinese Scholarship Council to international students in Chinese universities affiliated with CSC. The application period typically runs from December to April each year. Different universities have different deadlines.</p>

    <p class="mb-4">There are 274+ Chinese universities offering CSC scholarships. Chinese language and MBBS programs are also covered. MOFCOM Scholarships are also available through China's Ministry of Commerce to develop global talent for developing countries.</p>

    <h2 class="text-2xl font-semibold text-gray-700 mt-6 mb-2">CSC Application Procedure</h2>
    <ul class="list-disc list-inside space-y-2 mb-6">
        <li>Find universities affiliated with CSC.</li>
        <li>Contact a professor and request an acceptance letter.</li>
        <li>Fill the online application at <a href="http://studyinchina.csc.edu.cn" class="text-blue-500 underline">CSC portal</a>.</li>
        <li>Prepare medical & educational documents.</li>
        <li>Send your documents via courier to university’s international office.</li>
    </ul>

    <h3 class="text-xl font-semibold mb-2">Categories:</h3>
    <ul class="list-disc list-inside space-y-1 mb-4">
        <li><strong>Category A:</strong> Through Chinese Embassy</li>
        <li><strong>Category B:</strong> Directly through University</li>
        <li><strong>Category C:</strong> Through other sources</li>
    </ul>

    <h3 class="text-xl font-semibold mt-6 mb-2">Benefits:</h3>
    <ul class="list-disc list-inside space-y-1 mb-6">
        <li><strong>Undergraduate:</strong> 2500 RMB/month + tuition + accommodation</li>
        <li><strong>Master:</strong> 3000 RMB/month + tuition + accommodation</li>
        <li><strong>PhD:</strong> 3500 RMB/month + tuition + accommodation</li>
    </ul>

    <h3 class="text-xl font-semibold mb-2">Important Notes:</h3>
    <ul class="list-disc list-inside space-y-1 mb-6">
        <li>You can apply to up to 3 universities (2 via A and 1 via B)</li>
        <li>IELTS/TOEFL not mandatory if your previous education was in English</li>
        <li>You can apply using a Hope Certificate (if final semester result is pending)</li>
        <li>Acceptance Letter is optional but helpful</li>
        <li>English Proficiency Certificate from previous university can be used</li>
    </ul>

    <h3 class="text-xl font-semibold mt-6 mb-2">Part-Time Work in China</h3>
    <p class="mb-4">International students are now allowed to work part-time after getting a No Objection Certificate (NOC) from their supervisor and approval from the university’s international student office.</p>

    <h3 class="text-xl font-semibold mt-6 mb-2">List of Universities (Sample)</h3>
    <ul class="list-disc list-inside mb-4">
        <li>Beijing Normal University</li>
        <li>Fudan University</li>
        <li>Tsinghua University</li>
        <li>Shanghai Jiao Tong University</li>
        <li>Zhejiang University</li>
        <!-- Add more or dynamically load from DB -->
    </ul>

    <p class="mt-6">Download full list of 279+ Chinese Universities from the <strong>Downloads</strong> section.</p>

    <a href="{{ asset('downloads/csc_universities_list.pdf') }}" 
   download 
   class="inline-block bg-indigo-600 text-white px-6 py-3 rounded-lg shadow hover:bg-indigo-700 transition">
   Download University List (PDF)
</a>

</div>
@endsection
