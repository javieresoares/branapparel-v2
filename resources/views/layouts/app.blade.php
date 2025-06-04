<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>{{ $title ?? 'Bran Apparel' }}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="flex flex-col min-h-screen bg-white text-gray-800">

    {{-- Navbar --}}
    @include('components.navbar')

    {{-- Content --}}
    <main class="pt-20">
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('components.footer')

</body>

</html>