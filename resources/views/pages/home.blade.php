@extends('layouts.app')

@section('content')
    {{-- Hero Section Carousel --}}
    <section class="relative h-screen w-full overflow-hidden">
        <!-- Swiper Container -->
        <div class="swiper heroSwiper h-full">
            <div class="swiper-wrapper">
                @php
                    $slides = [
                        ['img' => 'assets/home1.jpg', 'title' => 'Jelajahi Dunia Fashion Kami', 'desc' => 'Temukan gaya yang mencerminkan kepribadianmu.'],
                        ['img' => 'assets/home2.jpg', 'title' => 'Tampil Percaya Diri', 'desc' => 'Dengan produk berkualitas dan desain eksklusif.'],
                        ['img' => 'assets/home3.jpg', 'title' => 'Nyaman dan Stylish', 'desc' => 'Kami hadirkan kenyamanan dalam setiap produk.'],
                        ['img' => 'assets/home1.jpg', 'title' => 'Gaya Hidup Aktif', 'desc' => 'Fashion yang mendukung aktivitas sehari-harimu.'],
                        ['img' => 'assets/home2.jpg', 'title' => 'Bergaya Tanpa Batas', 'desc' => 'Pilihan fashion yang beragam untuk semua.'],
                    ];
                @endphp

                @foreach ($slides as $slide)
                    <div class="swiper-slide relative h-screen w-full">
                        <!-- Background image -->
                        <div class="absolute inset-0">
                            <img src="{{ asset($slide['img']) }}" class="w-full h-full object-cover" alt="Hero Background" />
                            <div class="absolute inset-0 bg-black/40"></div>
                        </div>

                        <!-- Text content -->
                        <div
                            class="absolute inset-0 z-10 flex flex-col items-center justify-center text-center px-4 space-y-6 text-white">
                            <!-- Title & Description (with fade effect) -->
                            <div class="hero-text transition-opacity duration-1000 opacity-0">
                                <h2 class="text-3xl font-bold sm:text-4xl md:text-5xl">{{ $slide['title'] }}</h2>
                                <p class="mt-4 text-lg md:text-xl">{{ $slide['desc'] }}</p>
                            </div>

                            <!-- Button (selalu terlihat) -->
                            <a href="https://wa.me/6281234567890?text=Halo,%20saya%20ingin%20berbelanja" target="_blank"
                                class="inline-block bg-red-600 hover:bg-red-700 text-white font-semibold px-6 py-3 rounded-lg transition duration-300">
                                Belanja Sekarang
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Navigation Arrows -->
            <div class="swiper-button-next !text-white"></div>
            <div class="swiper-button-prev !text-white"></div>
        </div>

        <!-- CDN -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
        <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

        <!-- Swiper Init & Text Fade Script -->
        <script>
            const swiper = new Swiper(".heroSwiper", {
                loop: true,
                effect: "slide",
                speed: 1000,
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false,
                },
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
                on: {
                    slideChangeTransitionStart: function () {
                        document.querySelectorAll('.hero-text').forEach(el => {
                            el.classList.remove('opacity-100');
                            el.classList.add('opacity-0');
                        });
                    },
                    slideChangeTransitionEnd: function () {
                        const activeSlide = document.querySelector('.swiper-slide-active .hero-text');
                        if (activeSlide) {
                            activeSlide.classList.remove('opacity-0');
                            activeSlide.classList.add('opacity-100');
                        }
                    },
                }
            });

            // Trigger pertama kali
            window.addEventListener('load', () => {
                const first = document.querySelector('.swiper-slide-active .hero-text');
                if (first) first.classList.add('opacity-100');
            });
        </script>
    </section>

    {{-- Tentang Kami --}}
    @include('pages.partial.tentang-kami')

    {{-- Vision, Mission, Motto & Tagline Section --}}
    <section class="bg-white text-gray-900 py-20">
        <div class="max-w-6xl mx-auto px-6 text-center mb-16">
            <h2 class="text-4xl font-bold">Our Vision</h2>
            <p class="text-lg leading-relaxed mt-4 max-w-3xl mx-auto">
                Menjadi brand apparel terdepan yang merepresentasikan gaya hidup aktif, modern, dan bertanggung jawab secara
                sosial.
            </p>
        </div>

        <div class="max-w-6xl mx-auto px-6 text-center mt-20">
            <h2 class="text-4xl font-bold mb-14">Our Mission</h2>
            <div class="flex flex-col md:flex-row text-center divide-y md:divide-y-0 md:divide-x divide-gray-300">
                <!-- Misi 1 -->
                <div class="flex-1 px-6 pb-10 md:pb-0">
                    <div class="text-4xl font-bold text-red-600 mb-4">01</div>
                    <p class="text-base leading-relaxed">Menciptakan produk berkualitas tinggi dengan desain inovatif.</p>
                </div>
                <!-- Misi 2 -->
                <div class="flex-1 px-6 py-10 md:py-0">
                    <div class="text-4xl font-bold text-red-600 mb-4">02</div>
                    <p class="text-base leading-relaxed">Memprioritaskan keberlanjutan dalam setiap tahap produksi.</p>
                </div>
                <!-- Misi 3 -->
                <div class="flex-1 px-6 pt-10 md:pt-0">
                    <div class="text-4xl font-bold text-red-600 mb-4">03</div>
                    <p class="text-base leading-relaxed">Memberikan nilai tambah dan kepuasan maksimal kepada pelanggan.</p>
                </div>
            </div>
        </div>

        <!-- Motto -->
        <div class="max-w-4xl mx-auto text-center mt-20">
            <p class="text-lg italic leading-relaxed text-gray-700">
                "Berkarya dengan Hati, Berkembang dengan Inovasi"
            </p>
        </div>

        <!-- Tagline -->
        <div class="max-w-3xl mx-auto text-center mt-12">
            <p class="text-2xl font-bold text-red-600">
                #PastiPAS #PastiPUAS #SemuaBergaransi
            </p>
        </div>
    </section>

    {{-- Values Section --}}
    <section id="values" class="w-full bg-red-700 py-16 ">
        <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-24">
            <!-- Judul -->
            <div class="flex items-center justify-center mb-12">
                <p class="text-2xl sm:text-3xl md:text-4xl font-bold text-white text-center leading-snug">
                    Mengapa Memilih Bran Apparel?
                </p>
            </div>

            <!-- Kartu Value -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-8 justify-items-center">
                @php
                    $values = [
                        ['icon' => 'fa-lightbulb', 'title' => 'Inovatif', 'desc' => 'Kami selalu menghadirkan solusi kreatif dan berbeda.'],
                        ['icon' => 'fa-hands-helping', 'title' => 'Kolaboratif', 'desc' => 'Kami bekerja sama untuk hasil terbaik.'],
                        ['icon' => 'fa-rocket', 'title' => 'Responsif', 'desc' => 'Tanggap dan cepat dalam setiap kebutuhan Anda.'],
                        ['icon' => 'fa-heart', 'title' => 'Dedikasi', 'desc' => 'Memberikan pelayanan sepenuh hati.'],
                        ['icon' => 'fa-shield-alt', 'title' => 'Aman', 'desc' => 'Data dan privasi Anda aman bersama kami.'],
                        ['icon' => 'fa-users', 'title' => 'Fokus Klien', 'desc' => 'Kepuasan klien menjadi prioritas utama.'],
                        ['icon' => 'fa-cogs', 'title' => 'Profesional', 'desc' => 'Mengutamakan kualitas dan efisiensi kerja.'],
                        ['icon' => 'fa-globe', 'title' => 'Berkelanjutan', 'desc' => 'Memberikan dampak jangka panjang untuk semua pihak.'],
                    ];
                @endphp

                @foreach($values as $val)
                    <div
                        class="bg-red-600 rounded-2xl text-center shadow-md hover:shadow-xl transition-transform transform hover:scale-105 hover:-translate-y-1 p-6 w-full max-w-[250px] flex flex-col items-center aspect-[1]">
                        <i class="fas {{ $val['icon'] }} text-white text-4xl mb-4"></i>
                        <h3 class="text-lg font-semibold text-white">{{ $val['title'] }}</h3>
                        <p class="text-sm text-red-100 mt-2 leading-relaxed px-2">
                            {{ $val['desc'] }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


        <!-- Produk Section -->
        <section id="produkhome">
            <div class="px-4 py-8 sm:px-6 sm:py-12 lg:px-8">
                <div class="max-w-screen-xl mx-auto">
                    <header class="text-center">
                        <h2 class="text-3xl font-bold text-gray-900">Koleksi Produk</h2>
                        <p class="mx-auto mt-4 max-w-xl text-gray-500">
                            Temukan berbagai pilihan produk menarik untuk kebutuhan Anda.
                        </p>
                    </header>

                    <ul class="mt-8 grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
                        <!-- Produk Loop -->
                        <script>
                            const produkList = [
                                {
                                    nama: 'Robot Toy',
                                    harga: '$14.99',
                                    gambar: [
                                        'https://images.unsplash.com/photo-1599481238640-4c1288750d7a',
                                        'https://images.unsplash.com/photo-1600607689460-0165fbdc540c',
                                        'https://images.unsplash.com/photo-1618071148390-7a8bb22fbe9d',
                                        'https://images.unsplash.com/photo-1619980297172-57f5acb2e0a9'
                                    ]
                                },
                                {
                                    nama: 'Action Figure',
                                    harga: '$24.99',
                                    gambar: [
                                        'https://images.unsplash.com/photo-1578898887884-5dc2c21b4c50',
                                        'https://images.unsplash.com/photo-1606813909949-0fdf93fdb5b1',
                                        'https://images.unsplash.com/photo-1621421272115-6234cc057c47',
                                        'https://images.unsplash.com/photo-1621421139633-7a9ed8f38a09'
                                    ]
                                },
                                {
                                    nama: 'Wooden Puzzle',
                                    harga: '$9.99',
                                    gambar: [
                                        'https://images.unsplash.com/photo-1581091870622-50d6b9ad46e5',
                                        'https://images.unsplash.com/photo-1585421514284-efb74c2b7c28',
                                        'https://images.unsplash.com/photo-1579208575657-c595a05383b7',
                                        'https://images.unsplash.com/photo-1598454449402-f9ce7cf49ac3'
                                    ]
                                },
                                {
                                    nama: 'Plush Teddy',
                                    harga: '$19.99',
                                    gambar: [
                                        'https://images.unsplash.com/photo-1606813879274-154bf0c98bfb',
                                        'https://images.unsplash.com/photo-1513258496099-48168024aec0',
                                        'https://images.unsplash.com/photo-1592194996308-7b43878e84a6',
                                        'https://images.unsplash.com/photo-1549921296-3a532e3f70f8'
                                    ]
                                }
                            ];
                        </script>

                        <!-- Manual Hardcode Loop -->
                        <!-- Produk 0 -->
                        <li>
                            <div class="group relative block overflow-hidden border border-gray-100 bg-white">
                                <div class="aspect-square w-full overflow-hidden">
                                    <img src="https://images.unsplash.com/photo-1599481238640-4c1288750d7a" alt="Robot Toy"
                                        class="w-full h-full object-cover transition duration-500 group-hover:scale-105" />
                                </div>
                                <div class="p-6">
                                    <h3 class="mt-4 text-lg font-medium text-gray-900">Robot Toy</h3>
                                    <p class="mt-1.5 text-sm text-gray-700">$14.99</p>
                                    <div class="mt-4">
                                        <button onclick="openModal(0)"
                                            class="block w-full rounded-sm bg-white p-3 text-red-600 text-md font-medium transition hover:bg-red-600 hover:text-white border border-red-600">
                                            Preview
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <!-- Produk 1 -->
                        <li>
                            <div class="group relative block overflow-hidden border border-gray-100 bg-white">
                                <div class="aspect-square w-full overflow-hidden">
                                    <img src="https://images.unsplash.com/photo-1578898887884-5dc2c21b4c50" alt="Action Figure"
                                        class="w-full h-full object-cover transition duration-500 group-hover:scale-105" />
                                </div>
                                <div class="p-6">
                                    <h3 class="mt-4 text-lg font-medium text-gray-900">Action Figure</h3>
                                    <p class="mt-1.5 text-sm text-gray-700">$24.99</p>
                                    <div class="mt-4">
                                        <button onclick="openModal(1)"
                                            class="block w-full rounded-sm bg-white p-3 text-red-600 text-md font-medium transition hover:bg-red-600 hover:text-white border border-red-600">
                                            Preview
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <!-- Produk 2 -->
                        <li>
                            <div class="group relative block overflow-hidden border border-gray-100 bg-white">
                                <div class="aspect-square w-full overflow-hidden">
                                    <img src="https://images.unsplash.com/photo-1581091870622-50d6b9ad46e5" alt="Wooden Puzzle"
                                        class="w-full h-full object-cover transition duration-500 group-hover:scale-105" />
                                </div>
                                <div class="p-6">
                                    <h3 class="mt-4 text-lg font-medium text-gray-900">Wooden Puzzle</h3>
                                    <p class="mt-1.5 text-sm text-gray-700">$9.99</p>
                                    <div class="mt-4">
                                        <button onclick="openModal(2)"
                                            class="block w-full rounded-sm bg-white p-3 text-red-600 text-md font-medium transition hover:bg-red-600 hover:text-white border border-red-600">
                                            Preview
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <!-- Produk 3 -->
                        <li>
                            <div class="group relative block overflow-hidden border border-gray-100 bg-white">
                                <div class="aspect-square w-full overflow-hidden">
                                    <img src="https://images.unsplash.com/photo-1606813879274-154bf0c98bfb" alt="Plush Teddy"
                                        class="w-full h-full object-cover transition duration-500 group-hover:scale-105" />
                                </div>
                                <div class="p-6">
                                    <h3 class="mt-4 text-lg font-medium text-gray-900">Plush Teddy</h3>
                                    <p class="mt-1.5 text-sm text-gray-700">$19.99</p>
                                    <div class="mt-4">
                                        <button onclick="openModal(3)"
                                            class="block w-full rounded-sm bg-white p-3 text-red-600 text-md font-medium transition hover:bg-red-600 hover:text-white border border-red-600">
                                            Preview
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>

                    <!-- Modal Preview -->
                    <div id="modal" class="hidden fixed inset-0 z-50 flex items-center justify-center backdrop-blur-sm">
                        <div class="bg-white p-6 rounded-lg max-w-md w-full relative shadow-lg">
                            <button class="absolute top-2 right-2 text-gray-600 hover:text-red-600"
                                onclick="closeModal()">✕</button>
                            <h2 id="modal-title" class="text-xl font-bold mb-2">Produk</h2>

                            <div class="relative w-full aspect-square mb-3 rounded overflow-hidden">
                                <img id="modal-image" src="" alt="Preview"
                                    class="w-full h-full object-cover transition-all duration-300" />
                                <button onclick="prevImage()"
                                    class="absolute top-1/2 left-2 transform -translate-y-1/2 text-white text-3xl bg-black bg-opacity-50 hover:bg-opacity-75 rounded-full p-2">
                                    &lt;
                                </button>
                                <button onclick="nextImage()"
                                    class="absolute top-1/2 right-2 transform -translate-y-1/2 text-white text-3xl bg-black bg-opacity-50 hover:bg-opacity-75 rounded-full p-2">
                                    &gt;
                                </button>
                            </div>

                            <p id="modal-price" class="text-gray-700 font-semibold">$0.00</p>
                            <p class="text-sm text-gray-600 mt-2">Detail produk yang menarik dan berkualitas.</p>

                            <div class="mt-4">
                                <a href="https://drive.google.com" target="_blank"
                                    class="w-full text-center px-4 py-2 bg-red-600 text-white font-normal rounded-lg hover:bg-red-700 transition block">
                                    Lihat Lebih Banyak
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col items-center gap-3 mt-6">
                        <a href="/produk"
                            class="flex items-center justify-center text-white font-semibold bg-red-600 px-6 py-3 rounded-lg shadow-md hover:bg-white hover:text-red-600 border border-red-600 transition">
                            <span class="mr-2">Selengkapnya</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Script -->
        <script>
            const produk = [
                {
                    nama: 'Robot Toy',
                    harga: '$14.99',
                    gambar: [
                        'https://images.unsplash.com/photo-1599481238640-4c1288750d7a',
                        'https://images.unsplash.com/photo-1600607689460-0165fbdc540c',
                        'https://images.unsplash.com/photo-1618071148390-7a8bb22fbe9d',
                        'https://images.unsplash.com/photo-1619980297172-57f5acb2e0a9'
                    ]
                },
                {
                    nama: 'Action Figure',
                    harga: '$24.99',
                    gambar: [
                        'https://images.unsplash.com/photo-1599481238640-4c1288750d7a',
                        'https://images.unsplash.com/photo-1600607689460-0165fbdc540c',
                        'https://images.unsplash.com/photo-1618071148390-7a8bb22fbe9d',
                        'https://images.unsplash.com/photo-1619980297172-57f5acb2e0a9'
                    ]
                },
                {
                    nama: 'Wooden Puzzle',
                    harga: '$9.99',
                    gambar: [
                        'https://images.unsplash.com/photo-1599481238640-4c1288750d7a',
                        'https://images.unsplash.com/photo-1600607689460-0165fbdc540c',
                        'https://images.unsplash.com/photo-1618071148390-7a8bb22fbe9d',
                        'https://images.unsplash.com/photo-1619980297172-57f5acb2e0a9'
                    ]
                },
                {
                    nama: 'Plush Teddy',
                    harga: '$19.99',
                    gambar: [
                        'https://images.unsplash.com/photo-1599481238640-4c1288750d7a',
                        'https://images.unsplash.com/photo-1600607689460-0165fbdc540c',
                        'https://images.unsplash.com/photo-1618071148390-7a8bb22fbe9d',
                        'https://images.unsplash.com/photo-1619980297172-57f5acb2e0a9'
                    ]
                }
            ];

            let currentImageIndex = 0;
            let currentProductIndex = 0;

            function openModal(index) {
                currentProductIndex = index;
                currentImageIndex = 0;

                const modal = document.getElementById('modal');
                const modalImage = document.getElementById('modal-image');
                const modalTitle = document.getElementById('modal-title');
                const modalPrice = document.getElementById('modal-price');

                modalImage.src = produk[index].gambar[0];
                modalTitle.innerText = produk[index].nama;
                modalPrice.innerText = produk[index].harga;

                modal.classList.remove('hidden');
            }

            function closeModal() {
                document.getElementById('modal').classList.add('hidden');
            }

            function nextImage() {
                currentImageIndex = (currentImageIndex + 1) % produk[currentProductIndex].gambar.length;
                document.getElementById('modal-image').src = produk[currentProductIndex].gambar[currentImageIndex];
            }

            function prevImage() {
                currentImageIndex =
                    (currentImageIndex - 1 + produk[currentProductIndex].gambar.length) % produk[currentProductIndex].gambar.length;
                document.getElementById('modal-image').src = produk[currentProductIndex].gambar[currentImageIndex];
            }
        </script>

        {{-- Portofolio Section --}}
        <section id="portofolio">
            <div class="px-4 py-8 sm:px-6 sm:py-12 lg:px-8">
                <div class="mb-8 text-center">
                    <h2 class="text-3xl font-bold text-black">
                        Hasil Terbaik Kami
                    </h2>
                </div>

                <div class="mx-auto max-w-screen-xl">
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <!-- Portofolio 1 -->
                        <div class="group relative block">
                            <div class="relative aspect-square">
                                <img src="https://images.unsplash.com/photo-1593795899768-947c4929449d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2672&q=80"
                                    alt="" class="absolute inset-0 h-full w-full object-cover" />
                            </div>

                            <div class="absolute inset-0 flex flex-col items-start justify-end p-6">
                                <h3 class="text-xl font-medium text-white">
                                    Skinny Jeans Blue
                                </h3>

                                <p class="mt-1.5 text-xs text-pretty text-white">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos sequi dicta impedit
                                    aperiam ipsum!
                                </p>

                                <a href="https://drive.google.com/your-file-link-here" target="_blank" rel="noopener noreferrer"
                                    class="mt-3 inline-block bg-red-600 hover:bg-red-700 px-5 py-3 text-xs font-medium tracking-wide text-white uppercase rounded-lg">
                                    Lihat Detail
                                </a>
                            </div>
                        </div>

                        <!-- Portofolio 2 -->
                        <div class="group relative block">
                            <div class="relative aspect-square">
                                <img src="https://images.unsplash.com/photo-1593795899768-947c4929449d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2672&q=80"
                                    alt="" class="absolute inset-0 h-full w-full object-cover" />
                            </div>

                            <div class="absolute inset-0 flex flex-col items-start justify-end p-6">
                                <h3 class="text-xl font-medium text-white">
                                    Skinny Jeans Blue
                                </h3>

                                <p class="mt-1.5 text-xs text-pretty text-white">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos sequi dicta impedit
                                    aperiam ipsum!
                                </p>

                                <a href="https://drive.google.com/your-file-link-here" target="_blank" rel="noopener noreferrer"
                                    class="mt-3 inline-block bg-red-600 hover:bg-red-700 px-5 py-3 text-xs font-medium tracking-wide text-white uppercase rounded-lg">
                                    Lihat Detail
                                </a>
                            </div>
                        </div>

                        <!-- Portofolio 3 -->
                        <div class="group relative block">
                            <div class="relative aspect-square">
                                <img src="https://images.unsplash.com/photo-1593795899768-947c4929449d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2672&q=80"
                                    alt="" class="absolute inset-0 h-full w-full object-cover" />
                            </div>

                            <div class="absolute inset-0 flex flex-col items-start justify-end p-6">
                                <h3 class="text-xl font-medium text-white">
                                    Skinny Jeans Blue
                                </h3>

                                <p class="mt-1.5 text-xs text-pretty text-white">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos sequi dicta impedit
                                    aperiam ipsum!
                                </p>

                                <a href="https://drive.google.com/your-file-link-here" target="_blank" rel="noopener noreferrer"
                                    class="mt-3 inline-block bg-red-600 hover:bg-red-700 px-5 py-3 text-xs font-medium tracking-wide text-white uppercase rounded-lg">
                                    Lihat Detail
                                </a>
                            </div>
                        </div>

                        <!-- Portofolio 4 -->
                        <div class="group relative block">
                            <div class="relative aspect-square">
                                <img src="https://images.unsplash.com/photo-1593795899768-947c4929449d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2672&q=80"
                                    alt="" class="absolute inset-0 h-full w-full object-cover" />
                            </div>

                            <div class="absolute inset-0 flex flex-col items-start justify-end p-6">
                                <h3 class="text-xl font-medium text-white">
                                    Skinny Jeans Blue
                                </h3>

                                <p class="mt-1.5 text-xs text-pretty text-white">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos sequi dicta impedit
                                    aperiam ipsum!
                                </p>

                                <a href="https://drive.google.com/your-file-link-here" target="_blank" rel="noopener noreferrer"
                                    class="mt-3 inline-block bg-red-600 hover:bg-red-700 px-5 py-3 text-xs font-medium tracking-wide text-white uppercase rounded-lg">
                                    Lihat Detail
                                </a>
                            </div>
                        </div>

                        <!-- Portofolio 5 -->
                        <div class="group relative block">
                            <div class="relative aspect-square">
                                <img src="https://images.unsplash.com/photo-1593795899768-947c4929449d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2672&q=80"
                                    alt="" class="absolute inset-0 h-full w-full object-cover" />
                            </div>

                            <div class="absolute inset-0 flex flex-col items-start justify-end p-6">
                                <h3 class="text-xl font-medium text-white">
                                    Skinny Jeans Blue
                                </h3>

                                <p class="mt-1.5 text-xs text-pretty text-white">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos sequi dicta impedit
                                    aperiam ipsum!
                                </p>

                                <a href="https://drive.google.com/your-file-link-here" target="_blank" rel="noopener noreferrer"
                                    class="mt-3 inline-block bg-red-600 hover:bg-red-700 px-5 py-3 text-xs font-medium tracking-wide text-white uppercase rounded-lg">
                                    Lihat Detail
                                </a>
                            </div>
                        </div>

                        <!-- Portofolio 6 -->
                        <div class="group relative block">
                            <div class="relative aspect-square">
                                <img src="https://images.unsplash.com/photo-1593795899768-947c4929449d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2672&q=80"
                                    alt="" class="absolute inset-0 h-full w-full object-cover" />
                            </div>

                            <div class="absolute inset-0 flex flex-col items-start justify-end p-6">
                                <h3 class="text-xl font-medium text-white">
                                    Skinny Jeans Blue
                                </h3>

                                <p class="mt-1.5 text-xs text-pretty text-white">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos sequi dicta impedit
                                    aperiam ipsum!
                                </p>

                                <a href="https://drive.google.com/your-file-link-here" target="_blank" rel="noopener noreferrer"
                                    class="mt-3 inline-block bg-red-600 hover:bg-red-700 px-5 py-3 text-xs font-medium tracking-wide text-white uppercase rounded-lg">
                                    Lihat Detail
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Button Selengkapnya -->
                    <div class="flex justify-center mt-6">
                        <a href="/produk"
                            class="w-50 flex items-center justify-center text-white font-semibold bg-red-600 p-3 rounded-lg shadow-md hover:bg-white hover:text-red-600 border border-red-600 transition">
                            <span class="mr-2">Selengkapnya</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        {{-- Client Section --}}
        <section id="client"
            style="width: 100%; background-color: white; padding: 4rem 1rem; display: flex; flex-direction: column; align-items: center; justify-content: center;">

            <!-- Header -->
            <h1 style="font-size: 1.875rem; font-weight: bold; color: #1f2937; margin-bottom: 2.5rem; text-align: center;">
                Our Client
            </h1>

            <!-- Swiper Slider -->
            <div style="width: 100%; max-width: 72rem;">
                <div class="swiper myClientSwiper">
                    <div class="swiper-wrapper">
                        <!-- Client Items (Gambar Logo) -->
                        <div class="swiper-slide">
                            <div class="client-box">
                                <img src="/images/client1.png" class="h-full object-contain">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="client-box">
                                <img src="/images/client2.png" class="h-full object-contain">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="client-box">
                                <img src="/images/client3.png" class="h-full object-contain">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="client-box">
                                <img src="/images/client4.png" class="h-full object-contain">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="client-box">
                                <img src="/images/client5.png" class="h-full object-contain">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="client-box">
                                <img src="/images/client6.png" class="h-full object-contain">
                            </div>
                        </div>
                        <!-- Tambah gambar sesuai kebutuhan -->
                    </div>
                </div>
            </div>

            <!-- Swiper JS -->
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
            <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

            <!-- Swiper Init Script -->
            <script>
                new Swiper(".myClientSwiper", {
                    spaceBetween: 30,
                    loop: true,
                    speed: 1000,
                    autoplay: {
                        delay: 2500,
                        disableOnInteraction: false,
                    },
                    breakpoints: {
                        0: { slidesPerView: 2 },
                        640: { slidesPerView: 3 },
                        768: { slidesPerView: 4 },
                        1024: { slidesPerView: 5 },
                    },
                });
            </script>

            <!-- Basic Styling -->
            <style>
                .client-box {
                    height: 5rem;
                    width: 7rem;
                    margin: auto;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    background-color: #f9fafb;
                    border-radius: 0.5rem;
                    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
                    padding: 0.5rem;
                }

                .client-box img {
                    max-height: 100%;
                    max-width: 100%;
                }
            </style>
        </section>


        {{-- Testimoni --}}
        <section class="bg-white py-20 px-6 sm:px-12 lg:px-24" id="testimonial">
            <div class="max-w-screen-xl mx-auto text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-900">Apa Kata Mereka?</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-10 max-w-screen-xl mx-auto">
                <!-- Testimoni 1 -->
                <div class="bg-white p-6 rounded-2xl shadow-md border border-gray-200">
                    <div class="flex flex-col items-center text-center">
                        <img src="https://i.pravatar.cc/100?img=1" alt="User" class="w-16 h-16 rounded-full mb-3">
                        <h3 class="font-bold text-lg">Nobie Bottlesmoker & Angkuy Bottlesmoker</h3>
                        <div class="flex text-yellow-400 my-2">
                            @for ($i = 0; $i < 5; $i++)
                                <i class="fa-solid fa-star"></i>
                            @endfor
                        </div>
                        <p class="text-gray-700 text-sm mb-4">“Bottlesmoker merasa terbantu dengan layanan chatting 24jam yang
                            memudahkan untuk berkonsultasi dan layanan pemesanannya sangat memudahkan orang yang awam akan
                            website.”</p>
                        <span class="text-sm text-gray-500">Personil Grup, Band Bottlesmoker</span>
                    </div>
                </div>

                <!-- Testimoni 2 -->
                <div class="bg-white p-6 rounded-2xl shadow-md border border-gray-200">
                    <div class="flex flex-col items-center text-center">
                        <img src="https://i.pravatar.cc/100?img=8" alt="User" class="w-16 h-16 rounded-full mb-3">
                        <h3 class="font-bold text-lg">Adrianto</h3>
                        <div class="flex text-yellow-400 my-2">
                            @for ($i = 0; $i < 5; $i++)
                                <i class="fa-solid fa-star"></i>
                            @endfor
                        </div>
                        <p class="text-gray-700 text-sm mb-4">“Kami menggunakan server di GFN karena respon cepat dari tim
                            teknis yang selalu stand by 24 jam untuk menangani trouble website client.”</p>
                        <span class="text-sm text-gray-500">President Director, SIMAMAUNG</span>
                    </div>
                </div>

                <!-- Testimoni 3 -->
                <div class="bg-white p-6 rounded-2xl shadow-md border border-gray-200">
                    <div class="flex flex-col items-center text-center">
                        <img src="https://i.pravatar.cc/100?img=12" alt="User" class="w-16 h-16 rounded-full mb-3">
                        <h3 class="font-bold text-lg">Marcel</h3>
                        <div class="flex text-yellow-400 my-2">
                            @for ($i = 0; $i < 5; $i++)
                                <i class="fa-solid fa-star"></i>
                            @endfor
                        </div>
                        <p class="text-gray-700 text-sm mb-4">“Website nya sudah mempunyai server sendiri yang disimpan di data
                            center GFN. Server Go Girl Magazine sangat aman.”</p>
                        <span class="text-sm text-gray-500">Staff IT, Majalah Gogirl</span>
                    </div>
                </div>
            </div>
        </section>

@endsection