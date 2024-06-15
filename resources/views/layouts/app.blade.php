<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased">
    <x-navbar /> <!-- Include the navbar component -->

    <div class="pt-20">
        {{ $slot }} <!-- This is where the page content will be injected -->
    </div>

    <script>
        let nav = document.querySelector("nav");
        window.onscroll = function() {
            if (document.documentElement.scrollTop > 20) {
                nav.classList.add("sticky", "top-0", "bg-white", "shadow-lg");
            } else {
                nav.classList.remove("sticky", "top-0", "bg-white", "shadow-lg");
            }
        }
    </script>
</body>
</html>
