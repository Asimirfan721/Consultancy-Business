@extends('layouts.app')

@section('content')
<section class="py-12 max-w-6xl mx-auto px-4 bg-gray-50 min-h-screen">
    <h2 class="text-3xl font-bold text-center mb-8">Open Admissions & Scholarships</h2>

    <div class="flex overflow-x-auto space-x-6 p-4 bg-white shadow rounded">
        @forelse($admissions as $admission)
            <div class="flex-shrink-0 w-64 bg-gray-100 rounded-lg shadow cursor-pointer"
                 onclick="openModal({{ $loop->index }})">
                 
                <img src="{{ asset($admission->image) }}" class="w-full h-40 object-cover rounded-t-lg">

                <div class="p-3">
                    <p class="text-sm text-gray-600">{{ $admission->description }}</p>
                    <p class="text-xs text-red-500 mt-2">
                        Deadline: {{ \Carbon\Carbon::parse($admission->deadline)->format('d M, Y') }}
                    </p>
                </div>
            </div>
        @empty
            <p class="text-gray-500">No active admissions available.</p>
        @endforelse
    </div>
</section>

<!-- Modal -->
<div id="imageModal" class="hidden fixed inset-0 bg-black bg-opacity-80 flex items-center justify-center z-50">
    <div class="bg-white p-6 rounded-lg shadow-lg relative max-w-5xl w-full flex flex-col items-center">
        <!-- Close Button -->
        <button onclick="closeModal()" class="absolute top-2 right-2 text-gray-700 text-3xl font-bold">&times;</button>
        
        <!-- Image Viewer -->
        <div class="relative w-full flex items-center justify-center">
            <!-- Prev Button -->
            <button onclick="prevImage()" class="absolute left-0 text-white text-4xl px-4 py-2 bg-black bg-opacity-40 hover:bg-opacity-70 rounded-full">
                &#10094;
            </button>

            <img id="modalImage" src="" class="max-h-[80vh] max-w-[90%] object-contain rounded shadow-lg mx-auto">

            <!-- Next Button -->
            <button onclick="nextImage()" class="absolute right-0 text-white text-4xl px-4 py-2 bg-black bg-opacity-40 hover:bg-opacity-70 rounded-full">
                &#10095;
            </button>
        </div>

        <!-- Download Button -->
        <a id="downloadBtn" href="" download class="mt-4 px-6 py-2 bg-blue-600 text-white rounded-lg shadow hover:bg-blue-700">
            Download Image
        </a>
    </div>
</div>

<script>
    let currentIndex = 0;
    let images = @json($admissions->pluck('image'));

    function openModal(index) {
        currentIndex = index;
        document.getElementById('imageModal').classList.remove('hidden');
        updateImage();
    }

    function closeModal() {
        document.getElementById('imageModal').classList.add('hidden');
    }

    function updateImage() {
        const modalImage = document.getElementById('modalImage');
        const downloadBtn = document.getElementById('downloadBtn');
        const imageUrl = "{{ asset('') }}" + images[currentIndex];
        modalImage.src = imageUrl;
        downloadBtn.href = imageUrl;
    }

    function nextImage() {
        if (currentIndex < images.length - 1) {
            currentIndex++;
        } else {
            currentIndex = 0; // loop back to first
        }
        updateImage();
    }

    function prevImage() {
        if (currentIndex > 0) {
            currentIndex--;
        } else {
            currentIndex = images.length - 1; // loop to last
        }
        updateImage();
    }

    // Close modal on outside click
    window.onclick = function(event) {
        const modal = document.getElementById('imageModal');
        if (event.target === modal) {
            closeModal();
        }
    }
</script>
@endsection
