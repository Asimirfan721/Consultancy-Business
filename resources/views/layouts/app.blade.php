<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dream Destination</title>
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
    <!-- Font Awesome for footer icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body class="bg-[#F3FFE3] text-black">

    <!-- HEADER/Navbar -->
    <nav class="custom-header-bg shadow-lg">
        <div class="container mx-auto px-4 h-24 flex justify-between items-center">
            <div class="select-none">
                <img src="{{ asset('images/Tech Consultancy.jpg') }}" alt="TechConsultancy Logo"
                     class="h-16 md:h-20 w-auto object-contain transition-all duration-300">
            </div>
            <ul class="flex space-x-4">
                <li>
                    <a href="{{ route('home') }}"
                       class="px-5 py-2 rounded-full bg-green-100 text-black font-semibold shadow transition-all duration-200 hover:bg-green-300">
                        Home
                    </a>
                </li>
                   <li>
                    <a href="{{ route('admissions.index') }}"
                       class="px-5 py-2 rounded-full bg-green-100 text-black font-bold shadow transition-all duration-200 hover:bg-green-300">
                       Major Scholarships
                    </a>
                </li>
                <li>
                    <a href="{{ route('scholarships') }}"
                       class="px-5 py-2 rounded-full bg-green-100 text-black font-bold shadow transition-all duration-200 hover:bg-green-300">
                       Open Scholarships
                    </a>
                </li>
                <li>
                    <a href="{{ route('services') }}"
                       class="px-5 py-2 rounded-full bg-green-100 text-black font-semibold shadow transition-all duration-200 hover:bg-green-300">
                        Countries
                    </a>
                </li>
             
            
                     <li><a href="{{ url('/blogs') }}" class="px-5 py-2 rounded-full bg-green-100 text-black font-semibold shadow transition-all duration-200 hover:bg-green-300">Blogs</a></li>
                
                <li>
                    <a href="{{ route('contact') }}"
                       class="px-5 py-2 rounded-full bg-green-100 text-black font-semibold shadow transition-all duration-200 hover:bg-green-300">
                        Contact Us
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- PAGE CONTENT -->
    <div class="container mx-auto p-4 text-black">
        @yield('content')
    </div>

    {{-- Footer Include --}}
    @include('layouts.footer')

</body>
</html>
