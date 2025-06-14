<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $title ?? 'Bran Apparel' }}</title>

    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

    {{-- Vite Assets (CSS & JS) --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="flex flex-col min-h-screen bg-white text-gray-800">

    {{-- Navbar --}}
    @include('components.navbar')

    {{-- Main Content --}}
    <main class="pt-20 flex-grow">
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('components.footer')

    {{-- WhatsApp Floating Button --}}
    <a href="https://wa.me/6281234567890?text=Halo,%20saya%20ingin%20bertanya"
        class="fixed bottom-6 right-6 z-50 bg-green-500 hover:bg-green-600 text-white p-4 rounded-full shadow-lg transition-all duration-300"
        target="_blank" rel="noopener noreferrer" aria-label="Chat via WhatsApp">
        <i class="fab fa-whatsapp fa-lg"></i>
    </a>

</body>

</html>