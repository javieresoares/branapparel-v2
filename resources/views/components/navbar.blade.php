<header id="navbar" class="fixed top-0 left-0 w-full z-50 transition-all duration-300 bg-white shadow-md">
    <div class="w-full px-6 sm:px-12 lg:px-24">
        <div class="max-w-screen-xl mx-auto flex h-22 items-center justify-between">
            <a href="#hero" class="block md:hidden">
                <img src="{{ asset('assets/logo.png') }}" alt="Logo" class="h-10 w-auto">
            </a>

            <a href="#hero" class="hidden md:block text-2xl lg:text-3xl font-bold whitespace-nowrap">
                <span class="text-red-600">Bran</span>
                <span class="text-black">Apparel</span>
            </a>

            {{-- Desktop Navigation --}}
            <nav class="hidden md:block" aria-label="Main navigation">
                <ul class="flex items-center uppercase gap-3 lg:gap-6 text-sm lg:text-base whitespace-nowrap">
                    @php
                        $navItems = [
                            ['path' => '/', 'label' => 'Home'],
                            [
                                'path' => '/tentangkami',
                                'label' => 'Tentang Kami',
                                'submenu' => [
                                    ['path' => '/TentangKami', 'label' => 'Tentang Kami'],
                                    ['path' => '/TentangKami/company-profile', 'label' => 'Company Profile'],
                                ]
                            ],
                            [
                                'path' => '/produk',
                                'label' => 'Produk',
                                'submenu' => [
                                    ['path' => '/produk', 'label' => 'Produk'],
                                    ['path' => '/produk/price-list', 'label' => 'Price List'],
                                ]
                            ],
                            ['path' => '/portofolio', 'label' => 'Portofolio'],
                            ['path' => '/blog', 'label' => 'Blog'],
                            ['path' => '/faq', 'label' => 'FAQ'],
                            ['path' => '/KontakKami', 'label' => 'Kontak Kami'],
                        ];
                    @endphp

                    @foreach($navItems as $item)
                        <li class="relative group">
                            <a href="{{ url($item['path']) }}"
                                class="border-b-2 border-transparent pb-2 lg:pb-3 hover:border-gray-400 transition">
                                {{ $item['label'] }}
                            </a>

                            @if (isset($item['submenu']))
                                <ul
                                    class="absolute left-0 w-48 bg-white shadow-lg mt-2 opacity-0 group-hover:opacity-100 transition-opacity duration-300 z-50">
                                    @foreach ($item['submenu'] as $sub)
                                        <li class="hover:bg-gray-200">
                                            <a href="{{ url($sub['path']) }}"
                                                class="block py-2 px-4 capitalize text-sm border-b-2 border-transparent hover:border-gray-300">
                                                {{ $sub['label'] }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        </li>
                    @endforeach
                </ul>
            </nav>

            {{-- Mobile Menu Button --}}
            <div class="block md:hidden">
                <button onclick="openSidebar()"
                    class="rounded-sm bg-gray-100 p-2 text-gray-600 transition hover:text-gray-600/75"
                    aria-label="Open menu">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    {{-- Mobile Sidebar --}}
    <div id="mobileOverlay"
        class="md:hidden fixed inset-0 transition-opacity duration-300 bg-black bg-opacity-30 hidden"
        onclick="closeSidebar()">
        <div id="mobileSidebar"
            class="fixed top-0 left-0 z-50 bg-white w-2/3 h-full p-6 transform -translate-x-full transition-transform duration-300"
            onclick="event.stopPropagation()">
            <ul class="flex flex-col gap-4 text-base text-left">
                @foreach($navItems as $item)
                    <li>
                        <a href="{{ url($item['path']) }}" onclick="closeSidebar()"
                            class="block py-2 border-b-2 border-transparent hover:border-gray-300">
                            {{ $item['label'] }}
                        </a>

                        @if (isset($item['submenu']))
                            <ul class="pl-4">
                                @foreach ($item['submenu'] as $sub)
                                    <li>
                                        <a href="{{ url($sub['path']) }}" onclick="closeSidebar()"
                                            class="block py-2 border-b-2 border-transparent hover:border-gray-300">
                                            {{ $sub['label'] }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</header>

{{-- JavaScript --}}
<script>
    const navbar = document.getElementById('navbar');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 100) {
            navbar.classList.add('shadow-md');
        } else {
            navbar.classList.remove('shadow-md');
        }
    });

    function openSidebar() {
        document.getElementById('mobileOverlay').classList.remove('hidden');
        document.getElementById('mobileSidebar').classList.remove('-translate-x-full');
    }

    function closeSidebar() {
        document.getElementById('mobileOverlay').classList.add('hidden');
        document.getElementById('mobileSidebar').classList.add('-translate-x-full');
    }
</script>