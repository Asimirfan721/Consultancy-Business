<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Consultancy</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.4.1/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

    <!-- HEADER/Navbar -->
    <nav class="bg-white shadow-md">
        <div class="container mx-auto px-4 py-3 flex justify-between items-center">
            <div class="text-xl font-bold text-blue-700">YourConsultancy</div>
            <ul class="flex space-x-6 text-sm font-medium">
                <li><a href="{{ route('home') }}" class="hover:text-blue-600">Home</a></li>
                <li><a href="{{ route('scholarships') }}" class="text-lg font-semibold text-red-600 hover:underline">Scholarships</a></li>
                <li><a href="{{ route('services') }}" class="hover:text-blue-600">Service Plans</a></li>
                <li><a href="{{ route('documents') }}" class="hover:text-blue-600">Mandatory Documents</a></li>
                <li><a href="{{ route('contact') }}" class="hover:text-blue-600">Contact Us</a></li>
                <li><a href="{{ route('reviews') }}" class="hover:text-blue-600">Reviews</a></li>
            </ul>
        </div>
    </nav>

    <!-- PAGE CONTENT -->
    <div class="container mx-auto p-4">
        @yield('content')
    </div>

</body>
</html>
