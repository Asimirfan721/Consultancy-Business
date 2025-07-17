@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-10">
    <h1 class="text-3xl font-bold text-center mb-10">🌍 Global Scholarship Opportunities</h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        {{-- China --}}
        <div class="bg-white hover:shadow-xl transition rounded-2xl p-6 border border-gray-200">
            <h2 class="text-xl font-semibold mb-4 flex items-center">🇨🇳 China Scholarships</h2>
            <ul class="list-disc ml-5 text-gray-700 space-y-1 text-sm">
               <li> <a href="{{ route('blog.study-in-china') }}" class="text-blue-600 hover:underline mb-2">Chinese Government Scholarship (CSC)</a>
               </li>
                <li>Schwarzman Scholars Program (Tsinghua University – Master’s)</li>
                <li>Silk Road Scholarship (For Belt & Road countries)</li>
                <li>Shanghai Government Scholarship</li>
                <li>Anso Scholarship (USTC, UCAS – Master’s & PhD)</li>
                <li>Confucius Institute Scholarship (Language & Culture)</li>
                <li>University-Specific Scholarships (Tsinghua, Peking, etc.)</li>
            </ul>
        </div>

        {{-- Italy --}}
        <div class="bg-white hover:shadow-xl transition rounded-2xl p-6 border border-gray-200">
            <h2 class="text-xl font-semibold mb-4 flex items-center">🇮🇹 Italy Scholarships</h2>
            <ul class="list-disc ml-5 text-gray-700 space-y-1 text-sm">
                <li>MAECI Scholarship (Foreign Affairs)</li>
                <li>Italian Regional Scholarships (LazioDisco, EDISU, etc.)</li>
                <li>University Merit-Based Scholarships</li>
                <li>Invest Your Talent in Italy Scholarship</li>
            </ul>
        </div>

        {{-- Thailand --}}
        <div class="bg-white hover:shadow-xl transition rounded-2xl p-6 border border-gray-200">
            <h2 class="text-xl font-semibold mb-4 flex items-center">🇹🇭 Thailand Scholarships</h2>
            <ul class="list-disc ml-5 text-gray-700 space-y-1 text-sm">
                <li>Thailand Government Scholarships (TIPP, DPU)</li>
                <li>Chulalongkorn University Scholarships</li>
                <li>Asian Institute of Technology (AIT)</li>
                <li>SIIT Scholarship</li>
                <li>Royal Thai Government Scholarships</li>
            </ul>
        </div>

        {{-- South Korea --}}
        <div class="bg-white hover:shadow-xl transition rounded-2xl p-6 border border-gray-200">
            <h2 class="text-xl font-semibold mb-4 flex items-center">🇰🇷 South Korea Scholarships</h2>
            <ul class="list-disc ml-5 text-gray-700 space-y-1 text-sm">
                <li>GKS (Global Korea Scholarship)</li>
                <li>University Scholarships (KAIST, POSTECH, SNU)</li>
                <li>POSCO Asia Fellowship</li>
                <li>KFAS Scholarships</li>
            </ul>
        </div>

        {{-- Europe-Wide --}}
        <div class="bg-white hover:shadow-xl transition rounded-2xl p-6 border border-gray-200">
            <h2 class="text-xl font-semibold mb-4 flex items-center">🇪🇺 Europe-Wide Scholarships</h2>
            <ul class="list-disc ml-5 text-gray-700 space-y-1 text-sm">
                <li>Erasmus Mundus Joint Master’s Degree</li>
                <li>Marie Skłodowska-Curie Actions</li>
                <li>DAAD-Erasmus Exchange Programs</li>
            </ul>
        </div>

        {{-- Germany --}}
        <div class="bg-white hover:shadow-xl transition rounded-2xl p-6 border border-gray-200">
            <h2 class="text-xl font-semibold mb-4 flex items-center">🇩🇪 Germany Scholarships</h2>
            <ul class="list-disc ml-5 text-gray-700 space-y-1 text-sm">
                <li>DAAD Scholarship</li>
                <li>Deutschlandstipendium</li>
                <li>Heinrich Böll Foundation</li>
                <li>Konrad-Adenauer-Stiftung</li>
                <li>Friedrich Ebert Stiftung</li>
                <li>University-specific waivers</li>
            </ul>
        </div>

        {{-- Canada --}}
        <div class="bg-white hover:shadow-xl transition rounded-2xl p-6 border border-gray-200">
            <h2 class="text-xl font-semibold mb-4 flex items-center">🇨🇦 Canada Scholarships</h2>
            <ul class="list-disc ml-5 text-gray-700 space-y-1 text-sm">
                <li>Vanier Canada Graduate Scholarships</li>
                <li>Banting Postdoctoral Fellowships</li>
                <li>Lester B. Pearson Scholarship</li>
                <li>Ontario Graduate Scholarship (OGS)</li>
                <li>University Scholarships (UAlberta, UBC, McGill)</li>
                <li>Mitacs Globalink Internship</li>
            </ul>
        </div>

        {{-- United States --}}
        <div class="bg-white hover:shadow-xl transition rounded-2xl p-6 border border-gray-200">
            <h2 class="text-xl font-semibold mb-4 flex items-center">🇺🇸 United States Scholarships</h2>
            <ul class="list-disc ml-5 text-gray-700 space-y-1 text-sm">
                <li>Fulbright Foreign Student Program</li>
                <li>Hubert H. Humphrey Fellowship</li>
                <li>Stanford Knight-Hennessy Scholars</li>
                <li>Gates Scholarship (Undergrad)</li>
                <li>AAUW International Fellowships</li>
                <li>University Scholarships (Harvard, MIT, Yale)</li>
            </ul>
        </div>

        {{-- United Kingdom --}}
        <div class="bg-white hover:shadow-xl transition rounded-2xl p-6 border border-gray-200">
            <h2 class="text-xl font-semibold mb-4 flex items-center">🇬🇧 United Kingdom Scholarships</h2>
            <ul class="list-disc ml-5 text-gray-700 space-y-1 text-sm">
                <li>Chevening Scholarship</li>
                <li>Commonwealth Scholarship</li>
                <li>Rhodes Scholarship</li>
                <li>Gates Cambridge Scholarship</li>
                <li>Clarendon Fund (Oxford)</li>
                <li>Marshall Scholarship</li>
                <li>University-specific awards (UCL, LSE)</li>
            </ul>
        </div>
    </div>
</div>
@endsection
