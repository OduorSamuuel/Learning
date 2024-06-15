<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">
    <nav class="sticky top-0 bg-white shadow-md z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex justify-between items-center">
            <div class="flex items-center space-x-4">
                <a href="/" class="text-lg font-bold text-black">Home</a>
                <a href="/about" class="text-lg text-black hover:text-gray-700">About</a>
                <a href="/services" class="text-lg text-black hover:text-gray-700">Services</a>
                <a href="/contact" class="text-lg text-black hover:text-gray-700">Contact</a>
            </div>
            @if (Route::has('login'))
                <div class="flex items-center space-x-4">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-lg text-black hover:text-gray-700">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-lg text-black hover:text-gray-700">Log in</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="text-lg text-black hover:text-gray-700">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </nav>
    <div class="container mx-auto py-10">
        <!-- Your content goes here -->
    </div>
</body>
</html>
