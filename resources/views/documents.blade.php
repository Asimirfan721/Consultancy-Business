@extends('layouts.app')

@section('content')
<section class="py-12 max-w-7xl mx-auto px-4 bg-gray-50 min-h-screen">
    <h2 class="text-4xl font-extrabold text-center mb-10 text-gray-800">
        <!-- Optionally keep or remove heading -->
        Open Admissions and Scholarships for MS & PhDs
    </h2>

    <div class="overflow-x-auto whitespace-nowrap flex gap-6 p-4 bg-white rounded-lg shadow">
        @foreach ($scholarships as $scholarship)
            <div class="inline-block w-72 shrink-0 relative">
                <img src="{{ asset('storage/' . $scholarship->image_path) }}"
                     alt="Scholarship Image"
                     class="rounded-lg cursor-pointer object-cover h-48 w-full"
                     onclick="openModal('{{ asset('storage/' . $scholarship->image_path) }}', '{{ $scholarship->description }}')">
                
                <div class="mt-2 text-gray-700 text-sm">
                    <p><strong>Deadline:</strong> {{ \Carbon\Carbon::parse($scholarship->deadline)->format('d M, Y') }}</p>
                    <p>{{ $scholarship->description }}</p>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Modal -->
    <div id="imageModal" class="fixed inset-0 bg-black bg-opacity-70 flex items-center justify-center hidden z-50">
        <div class="bg-white rounded-lg p-4 relative max-w-3xl w-full">
            <button class="absolute top-2 right-2 text-gray-500 hover:text-red-600 text-xl" onclick="closeModal()">×</button>
            <img id="modalImage" src="" class="w-full max-h-[70vh] object-contain" alt="Full View">
            <p id="modalDesc" class="mt-4 text-gray-700"></p>
            <a id="downloadBtn" href="#" download class="mt-4 inline-block bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded shadow">
                Download Image
            </a>
        </div>
    </div>
</section>

<script>
    function openModal(imageUrl, description) {
        document.getElementById('modalImage').src = imageUrl;
        document.getElementById('modalDesc').innerText = description;
        document.getElementById('downloadBtn').href = imageUrl;
        document.getElementById('imageModal').classList.remove('hidden');
    }

    function closeModal() {
        document.getElementById('imageModal').classList.add('hidden');
    }
</script>
@endsection
