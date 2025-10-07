@extends('layouts.app')

@section('content')
<section class="py-12 w-full px-0 bg-gray-50 min-h-screen">
    <h2 class="text-4xl font-extrabold text-center mb-10 text-gray-800 tracking-tight">
        Open Admissions & Scholarships
    </h2>
    <h3 class="text-lg font-medium text-center mb-10 text-gray-600">
        Admissions with passed deadlines are automatically removed.
    </h3>

    <div class="bg-white shadow-xl rounded-2xl mx-4 lg:mx-12 xl:mx-32 p-6">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">
            @forelse($admissions as $admission)
                <div class="bg-gray-100 rounded-2xl shadow hover:shadow-2xl transition cursor-pointer flex flex-col relative group w-full">
                    <img src="{{ asset($admission->image) }}"
                         class="w-full h-64 object-cover rounded-t-2xl"
                         onclick="openModal({{ $loop->index }})">
                    <div class="flex-1 p-6 flex flex-col justify-between">
                        <p class="text-gray-800 mb-2 font-medium description-preview">
                            {{ $admission->description }}
                        </p>
                        <p class="text-base font-bold text-red-600 mb-3">
                            Deadline: <span class="font-semibold">{{ \Carbon\Carbon::parse($admission->deadline)->format('d M, Y') }}</span>
                        </p>
                        <div class="flex gap-2">
                            <button onclick="copyLink('{{ asset($admission->image) }}', this)" type="button"
                                class="bg-blue-600 hover:bg-blue-700 text-white px-3 py-1 rounded-lg text-sm font-semibold transition">
                                Copy
                            </button>
                            <button onclick="openModal({{ $loop->index }})" type="button"
                                class="bg-gray-300 hover:bg-gray-400 text-gray-800 px-3 py-1 rounded-lg text-sm font-semibold transition">
                                View
                            </button>
                        </div>
                        <span class="copy-feedback absolute right-4 bottom-4 text-xs text-green-600 font-semibold opacity-0 transition-opacity duration-300"></span>
                    </div>
                </div>
            @empty
                <p class="text-gray-500 col-span-3">No active admissions available.</p>
            @endforelse
        </div>
    </div>
</section>

<!-- Modal -->
<div id="imageModal" class="hidden fixed inset-0 bg-black bg-opacity-80 flex items-center justify-center z-50">
    <div class="bg-white p-6 rounded-lg shadow-lg relative max-w-5xl w-full flex flex-col items-center">
        <!-- Close Button -->
        <button onclick="closeModal()" class="absolute top-2 right-2 text-gray-700 text-3xl font-bold">&times;</button>

        <!-- Image Viewer -->
        <div class="relative w-full flex items-center justify-center overflow-hidden">
            <button onclick="prevImage()" class="absolute left-0 text-white text-4xl px-4 py-2 bg-black bg-opacity-40 hover:bg-opacity-70 rounded-full z-10">
                &#10094;
            </button>

            <img id="modalImage"
                 src=""
                 class="max-h-[80vh] max-w-[90%] object-contain rounded shadow-lg mx-auto cursor-zoom-in transition-transform duration-150"
                 onwheel="zoomImage(event)">

            <button onclick="nextImage()" class="absolute right-0 text-white text-4xl px-4 py-2 bg-black bg-opacity-40 hover:bg-opacity-70 rounded-full z-10">
                &#10095;
            </button>
        </div>

        <a id="downloadBtn" href="" download class="mt-3 px-6 py-2 bg-blue-600 text-white rounded-lg shadow hover:bg-blue-700">
            Download Image
        </a>
    </div>
</div>

<script>
let currentIndex = 0;
let images = @json($admissions->pluck('image'));
let zoomScale = 1;

// --- OPEN MODAL ---
function openModal(index) {
    currentIndex = index;
    document.getElementById('imageModal').classList.remove('hidden');
    updateImage();
}

// --- UPDATE IMAGE ---
function updateImage() {
    const modalImage = document.getElementById('modalImage');
    const downloadBtn = document.getElementById('downloadBtn');
    const imageUrl = "{{ asset('') }}" + images[currentIndex];
    modalImage.src = imageUrl;
    downloadBtn.href = imageUrl;
    zoomScale = 1;
    modalImage.style.transform = 'scale(1)';
}

// --- NEXT & PREV ---
function nextImage() {
    currentIndex = (currentIndex + 1) % images.length;
    updateImage();
}

function prevImage() {
    currentIndex = (currentIndex - 1 + images.length) % images.length;
    updateImage();
}

// --- CLOSE MODAL ---
function closeModal() {
    const modal = document.getElementById('imageModal');
    modal.classList.add('hidden');
    const image = document.getElementById('modalImage');
    zoomScale = 1;
    image.style.transform = 'scale(1)';
}

// --- ZOOM FEATURE ---
function zoomImage(event) {
    event.preventDefault();
    const image = document.getElementById('modalImage');

    if (event.deltaY < 0) zoomScale += 0.1;
    else zoomScale = Math.max(1, zoomScale - 0.1);

    image.style.transform = `scale(${zoomScale})`;
    image.style.cursor = zoomScale > 1 ? 'zoom-out' : 'zoom-in';
}

// --- COPY LINK ---
function copyLink(link, btn) {
    navigator.clipboard.writeText(link).then(() => {
        const feedback = btn.parentElement.parentElement.querySelector('.copy-feedback');
        feedback.textContent = "Copied!";
        feedback.style.opacity = 1;
        setTimeout(() => feedback.style.opacity = 0, 1200);
    });
}

// --- CLOSE MODAL ON OUTSIDE CLICK ---
window.onclick = function(event) {
    const modal = document.getElementById('imageModal');
    if (event.target === modal) closeModal();
}
</script>
@endsection
