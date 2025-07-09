<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Consultancy</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .custom-header-bg {
            background: #fff; /* Pure white */
        }
        .custom-btn {
            background: linear-gradient(90deg, #fbc2eb 0%, #a6c1ee 100%);
            color: #3b0692;
        }
        .custom-btn:hover {
            background: linear-gradient(90deg, #a6c1ee 0%, #fbc2eb 100%);
            color: #fff;
        }
        .brand-gradient {
            background: linear-gradient(90deg, #6366f1 0%, #a21caf 50%, #f472b6 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
    </style>
</head>
<body class="bg-gray-100">

    <!-- HEADER/Navbar -->
   <nav class="custom-header-bg shadow-lg">
    <div class="container mx-auto px-4 h-24 flex justify-between items-center">
        <div class="select-none">
            <img src="{{ asset('images/Tech Consultancy.jpg') }}" alt="TechConsultancy Logo"
                 class="h-16 md:h-20 w-auto object-contain transition-all duration-300">  </div>
            <ul class="flex space-x-4">
                <li>
                    <a href="{{ route('home') }}"
                       class="px-5 py-2 rounded-full custom-btn font-semibold shadow transition-all duration-200">
                        Home
                    </a>
                </li>
                <li>
                    <a href="{{ route('scholarships') }}"
                       class="px-5 py-2 rounded-full custom-btn font-bold shadow transition-all duration-200">
                        Scholarships
                    </a>
                </li>
                <li>
                    <a href="{{ route('services') }}"
                       class="px-5 py-2 rounded-full custom-btn font-semibold shadow transition-all duration-200">
                        Service Plans
                    </a>
                </li>
                <li>
                    <a href="{{ route('documents') }}"
                       class="px-5 py-2 rounded-full custom-btn font-semibold shadow transition-all duration-200">
                        Mandatory Documents
                    </a>
                </li>
                <li>
                    <a href="{{ route('contact') }}"
                       class="px-5 py-2 rounded-full custom-btn font-semibold shadow transition-all duration-200">
                        Contact Us & Reviews
                    </a>
                </li>
                {{-- <li>
                    <a href="{{ route('reviews') }}"
                       class="px-5 py-2 rounded-full custom-btn font-semibold shadow transition-all duration-200">
                        Reviews
                    </a>
                </li> --}}
            </ul>
        </div>
    </nav>

    <!-- PAGE CONTENT -->
    <div class="container mx-auto p-4">
        @yield('content')
    </div>

</body>
</html>
