<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Consultancy</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.4.1/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

    <!-- HEADER/Navbar -->
    <nav class="bg-gradient-to-r from-pink-400 via-purple-400 to-blue-400 shadow-lg">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <div class="text-3xl font-extrabold bg-gradient-to-r from-white via-yellow-200 to-pink-300 bg-clip-text text-transparent drop-shadow-lg tracking-wide select-none">
                Tech<span class="text-white drop-shadow-md">Consultancy</span>
            </div>
            <ul class="flex space-x-4">
                <li>
                    <a href="{{ route('home') }}"
                       class="px-4 py-2 rounded-full bg-white/80 text-pink-600 font-semibold shadow hover:bg-pink-500 hover:text-white transition-all duration-200">
                        Home
                    </a>
                </li>
                <li>
                    <a href="{{ route('scholarships') }}"
                       class="px-4 py-2 rounded-full bg-white/80 text-purple-600 font-bold shadow hover:bg-purple-500 hover:text-white transition-all duration-200">
                        Scholarships
                    </a>
                </li>
                <li>
                    <a href="{{ route('services') }}"
                       class="px-4 py-2 rounded-full bg-white/80 text-blue-600 font-semibold shadow hover:bg-blue-500 hover:text-white transition-all duration-200">
                        Service Plans
                    </a>
                </li>
                <li>
                    <a href="{{ route('documents') }}"
                       class="px-4 py-2 rounded-full bg-white/80 text-pink-600 font-semibold shadow hover:bg-pink-500 hover:text-white transition-all duration-200">
                        Mandatory Documents
                    </a>
                </li>
                <li>
                    <a href="{{ route('contact') }}"
                       class="px-4 py-2 rounded-full bg-white/80 text-purple-600 font-semibold shadow hover:bg-purple-500 hover:text-white transition-all duration-200">
                        Contact Us
                    </a>
                </li>
                <li>
                    <a href="{{ route('reviews') }}"
                       class="px-4 py-2 rounded-full bg-white/80 text-blue-600 font-semibold shadow hover:bg-blue-500 hover:text-white transition-all duration-200">
                        Reviews
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- PAGE CONTENT -->
    <div class="container mx-auto p-4">
        @yield('content')
    </div>

</body>
</html>
