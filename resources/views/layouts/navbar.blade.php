<!-- resources/views/components/navbar.blade.php -->
<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Meta tags, CSS links, etc. -->
    <title>Your App Title</title>
        <title>Laravel</title>
    @vite(['resources/css/app.css', 'resources/js/app.js']) <!-- Include the compiled Tailwind CSS -->
</head>
<body>
    <div>
        <nav class="bg-white shadow-md fixed w-full z-10">
            <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
                <div class="relative flex items-center justify-between h-16">
                    <div class="flex items-center px-2 lg:px-0">
                        <div class="flex-shrink-0">
                            <a href="#" class="text-2xl font-bold text-gray-900">CodingLab.</a>
                        </div>
                    </div>
                    <div class="hidden lg:block lg:ml-6">
                        <div class="flex space-x-4">
                            <a href="/" class="text-gray-900 hover:bg-gray-100 px-3 py-2 rounded-md text-sm font-medium">Home</a>
                            <a href="/about" class="text-gray-900 hover:bg-gray-100 px-3 py-2 rounded-md text-sm font-medium">About</a>
                            <a href="/skills" class="text-gray-900 hover:bg-gray-100 px-3 py-2 rounded-md text-sm font-medium">Skills</a>

                        </div>
                    </div>
                    <div class="hidden lg:block lg:ml-6">
                        <div class="flex space-x-4">
                            @auth
                                <a href="{{ url('/profile') }}" class="text-gray-900 hover:bg-gray-100 px-3 py-2 rounded-md text-sm font-medium">Profile</a>
                            @else
                                <a href="{{ route('login') }}" class="text-gray-900 hover:bg-gray-100 px-3 py-2 rounded-md text-sm font-medium">Login</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="text-gray-900 hover:bg-gray-100 px-3 py-2 rounded-md text-sm font-medium">Register</a>
                                @endif
                            @endauth
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
   <div >
   </div class="bg-gray-400 ">
        @yield('content')
    <!-- Additional scripts if needed -->
</body>
</html>

