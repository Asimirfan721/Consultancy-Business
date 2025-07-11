@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto px-4 py-12">
    <!-- Breadcrumb -->
    <div class="text-sm text-gray-500 mb-4">
        <a href="{{ route('home') }}" class="hover:underline text-blue-600">Home</a> / <span>About Us</span>
    </div>

    <!-- Heading -->
    <h1 class="text-4xl font-bold text-blue-800 mb-6">About Us</h1>
    <p class="text-lg text-gray-700 mb-6 leading-relaxed">
        Empowering your academic journey with expert guidance.
    </p>

    <!-- Main Content -->
    <div class="bg-white p-8 rounded-xl shadow-lg space-y-6">
        <p class="text-gray-800 leading-relaxed">
            TIMES Consultant stands as a dynamic force in the overseas education and immigration consultancy business,
            proudly contributing its expertise since April 2004. Serving a vital link between prospective students and
            universities as our profound commitment, our mission is to facilitate a seamless selection process, guiding
            students to choose the best foreign education institute tailored to their academic requirements.
        </p>

        <p class="text-gray-800 leading-relaxed">
            Our vision at TIMES is to set new benchmarks in the education consultancy field, upholding performance
            excellence. Drawing from real-world experiences in problem-solving and equipped with practical insights into
            the ever-changing landscape of admissions, visa processes, and the dynamic education and career industry, we
            empower our clients to navigate and overcome the challenges inherent in pursuing education abroad.
        </p>

        <p class="text-gray-800 leading-relaxed">
            Considering the idea of moving abroad? There's no need to second-guess. Let us guide you in turning your
            aspirations into reality through our expert immigration services. Our singular goal is clear: to offer
            completely unbiased and impartial advice and provide you with the pinnacle of service excellence.
        </p>

        <p class="text-blue-700 font-semibold text-lg">
            Your journey begins with TIMES Consultant – where expertise meets dreams.
        </p>
    </div>

    <!-- Bonus Section -->
    <div class="mt-12 bg-gradient-to-r from-purple-100 to-blue-100 p-8 rounded-xl shadow-inner text-center">
        <h2 class="text-2xl font-bold text-purple-800 mb-4">🎓 Benefits to Join Our Expo</h2>
        <p class="text-gray-700">
            Discover university booths, apply directly, get document advice, win scholarships and connect with experienced consultants.
        </p>
    </div>
</div>
@endsection
