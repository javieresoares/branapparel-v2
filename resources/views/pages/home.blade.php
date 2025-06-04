@extends('layouts.app')

@section('content')
    {{-- Hero Section Fullscreen --}}
    <section class="relative h-screen w-full">
        <!-- Background image + overlay -->
        <div class="absolute inset-0">
            <img src="{{ asset('assets/home1.jpg') }}" class="object-cover w-full h-full" alt="Background" />
        </div>

        <div class="relative z-10 flex flex-col items-center justify-center h-full px-4 text-center space-y-6">
            <div class="max-w-2xl text-white">
                <h2 class="text-3xl font-bold sm:text-4xl md:text-5xl">
                    Lorem ipsum dolor sit amet consectetur
                </h2>
                <p class="mt-4 text-lg md:text-xl">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur doloremque saepe
                    architecto maiores repudiandae amet perferendis repellendus, reprehenderit voluptas sequi.
                </p>
            </div>

            <!-- Tombol Belanja Sekarang -->
            <a href="https://wa.me/6281234567890?text=Halo,%20saya%20ingin%20berbelanja" target="_blank"
                class="inline-block bg-red-600 hover:bg-red-700 text-white font-semibold px-6 py-3 rounded-lg transition duration-300">
                Belanja Sekarang
            </a>
        </div>
    </section>

    {{-- Tentang Kami Section --}}
    <section id="tentangkami" class="pt-20 py-16 px-6 sm:px-12 lg:px-24 bg-white flex items-center">
        <div class="max-w-screen-xl mx-auto flex flex-col lg:flex-row items-center gap-12 h-full justify-center">

            {{-- Teks di kiri --}}
            <div class="w-full lg:w-1/2 text-center lg:text-left">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">
                    {{ $tentangKami->judul_tentangkami ?? 'Judul default' }}
                </h2>
                <p class="text-gray-700 mb-4 leading-relaxed text-justify">
                    {{ $tentangKami->deskripsi_tentangkami ?? 'Deskripsi default' }}
                </p>
                <p class="text-gray-700 leading-relaxed text-justify mb-6">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis sunt, quam enim, voluptate id amet
                    impedit libero esse cum explicabo asperiores necessitatibus? Similique explicabo rerum laboriosam
                    repellendus eum impedit et.
                </p>

                {{-- Tombol Company Profile --}}
                <div class="mt-6">
                    <a href="{{ url('/company-profile') }}"
                        class="inline-block bg-red-600 hover:bg-white hover:text-red-600 border border-red-600
                                                                                                                                        text-white font-semibold px-6 py-3 rounded-lg transition duration-300">
                        Lihat Company Profile
                    </a>
                </div>
            </div>

            {{-- Gambar di kanan --}}
            <div class="w-full lg:w-1/2 mt-8 lg:mt-0">
                <img src="{{ asset('storage/' . $tentangKami->gambar_tentangkami) }}" alt="Tentang Kami"
                    class="w-full h-full object-cover shadow-lg rounded-lg" />
            </div>
        </div>
    </section>

    {{-- Values Section --}}
    <section id="values" class="w-full bg-red-700 py-16 min-h-full">
        <div class="container mx-auto px-4 sm:px-6 lg:px-24">
            <!-- Judul -->
            <div class="flex items-center justify-center mb-18">
                <p class="text-xl font-bold text-white tracking-wide text-center sm:text-2xl md:text-3xl lg:text-4xl">
                    Mengapa Memilih Bran Apparel?
                </p>
            </div>

            <!-- Kartu Value -->
            <div
                class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-4 gap-6 justify-items-center">

                <!-- Item 1 -->
                @foreach ($mengapaMemilih as $item)
                    <div
                        class="bg-red-600 rounded-2xl text-center shadow-lg hover:shadow-xl transform hover:scale-105 hover:-translate-y-1 transition-all duration-300 ease-in-out flex flex-col justify-center items-center w-full max-w-[250px] aspect-[1] p-6">
                        <i class="{{ $item->ikon_mengapamemilih }} text-white text-4xl mb-4"></i>
                        <p class="text-lg font-semibold text-white">{{ $item->judul_mengapamemilih }}</p>
                        <p class="text-sm text-red-100 mt-2 leading-relaxed px-3">
                            {{ $item->teks_mengapamemilih }}
                        </p>
                    </div>
                @endforeach

                <!-- Item 2 -->
                <div
                    class="bg-red-600 rounded-2xl text-center shadow-lg hover:shadow-xl transform hover:scale-105 hover:-translate-y-1 transition-all duration-300 ease-in-out flex flex-col justify-center items-center w-full max-w-[250px] aspect-[1] p-6">
                    <i class="fas fa-hands-helping text-white text-4xl mb-4"></i>
                    <p class="text-lg font-semibold text-white">Kolaboratif</p>
                    <p class="text-sm text-red-100 mt-2 leading-relaxed px-3">
                        Kami bekerja sama untuk hasil terbaik.
                    </p>
                </div>

                <!-- Item 3 -->
                <div
                    class="bg-red-600 rounded-2xl text-center shadow-lg hover:shadow-xl transform hover:scale-105 hover:-translate-y-1 transition-all duration-300 ease-in-out flex flex-col justify-center items-center w-full max-w-[250px] aspect-[1] p-6">
                    <i class="fas fa-rocket text-white text-4xl mb-4"></i>
                    <p class="text-lg font-semibold text-white">Responsif</p>
                    <p class="text-sm text-red-100 mt-2 leading-relaxed px-3">
                        Tanggap dan cepat dalam setiap kebutuhan Anda.
                    </p>
                </div>

                <!-- Item 4 -->
                <div
                    class="bg-red-600 rounded-2xl text-center shadow-lg hover:shadow-xl transform hover:scale-105 hover:-translate-y-1 transition-all duration-300 ease-in-out flex flex-col justify-center items-center w-full max-w-[250px] aspect-[1] p-6">
                    <i class="fas fa-heart text-white text-4xl mb-4"></i>
                    <p class="text-lg font-semibold text-white">Dedikasi</p>
                    <p class="text-sm text-red-100 mt-2 leading-relaxed px-3">
                        Memberikan pelayanan sepenuh hati.
                    </p>
                </div>

                <!-- Item 5 -->
                <div
                    class="bg-red-600 rounded-2xl text-center shadow-lg hover:shadow-xl transform hover:scale-105 hover:-translate-y-1 transition-all duration-300 ease-in-out flex flex-col justify-center items-center w-full max-w-[250px] aspect-[1] p-6">
                    <i class="fas fa-shield-alt text-white text-4xl mb-4"></i>
                    <p class="text-lg font-semibold text-white">Aman</p>
                    <p class="text-sm text-red-100 mt-2 leading-relaxed px-3">
                        Data dan privasi Anda aman bersama kami.
                    </p>
                </div>

                <!-- Item 6 -->
                <div
                    class="bg-red-600 rounded-2xl text-center shadow-lg hover:shadow-xl transform hover:scale-105 hover:-translate-y-1 transition-all duration-300 ease-in-out flex flex-col justify-center items-center w-full max-w-[250px] aspect-[1] p-6">
                    <i class="fas fa-users text-white text-4xl mb-4"></i>
                    <p class="text-lg font-semibold text-white">Fokus Klien</p>
                    <p class="text-sm text-red-100 mt-2 leading-relaxed px-3">
                        Kepuasan klien menjadi prioritas utama.
                    </p>
                </div>

                <!-- Item 7 -->
                <div
                    class="bg-red-600 rounded-2xl text-center shadow-lg hover:shadow-xl transform hover:scale-105 hover:-translate-y-1 transition-all duration-300 ease-in-out flex flex-col justify-center items-center w-full max-w-[250px] aspect-[1] p-6">
                    <i class="fas fa-cogs text-white text-4xl mb-4"></i>
                    <p class="text-lg font-semibold text-white">Profesional</p>
                    <p class="text-sm text-red-100 mt-2 leading-relaxed px-3">
                        Mengutamakan kualitas dan efisiensi kerja.
                    </p>
                </div>

                <!-- Item 8 -->
                <div
                    class="bg-red-600 rounded-2xl text-center shadow-lg hover:shadow-xl transform hover:scale-105 hover:-translate-y-1 transition-all duration-300 ease-in-out flex flex-col justify-center items-center w-full max-w-[250px] aspect-[1] p-6">
                    <i class="fas fa-globe text-white text-4xl mb-4"></i>
                    <p class="text-lg font-semibold text-white">Berkelanjutan</p>
                    <p class="text-sm text-red-100 mt-2 leading-relaxed px-3">
                        Memberikan dampak jangka panjang untuk semua pihak.
                    </p>
                </div>

            </div>
        </div>
    </section>

    {{-- Produk Section --}}
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
                    <!-- Produk 1 -->
                    @foreach ($produk as $item)
                        <li>
                            <div class="group relative block overflow-hidden border border-gray-100 bg-white">
                                <div class="aspect-square w-full overflow-hidden">
                                    <img src="{{ asset('storage/' . $item->gambar_produk) }}" alt="Robot Toy"
                                        class="w-full h-full object-cover transition duration-500 group-hover:scale-105" />
                                </div>
                                <div class="p-6">
                                    <h3 class="mt-4 text-lg font-medium text-gray-900">{{ $item->nama_produk }}</h3>
                                    <p class="mt-1.5 text-sm text-gray-700">Start from Rp
                                        {{ number_format($item->harga_produk, 0, ',', '.') }}</p>
                                    <div class="mt-4">
                                        <<button
                                            class="block w-full rounded-sm bg-white p-3 text-red-600 text-md font-medium transition hover:bg-red-600 hover:text-white border border-red-600"
                                            data-gambar="{{ asset('storage/' . $item->gambar_produk) }}"
                                            data-harga="{{ number_format($item->harga_produk, 0, ',', '.') }}">
                                            Preview
                                            </button>
                                    </div>
                                </div>
                            </div>
                        </li>
                    @endforeach

                    <!-- Produk 2 -->
                    <li>
                        <div class="group relative block overflow-hidden border border-gray-100 bg-white">
                            <div class="aspect-square w-full overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1599481238640-4c1288750d7a?auto=format&fit=crop&w=2664&q=80"
                                    alt="Robot Toy"
                                    class="w-full h-full object-cover transition duration-500 group-hover:scale-105" />
                            </div>
                            <div class="p-6">
                                <h3 class="mt-4 text-lg font-medium text-gray-900">Robot Toy</h3>
                                <p class="mt-1.5 text-sm text-gray-700">$14.99</p>
                                <div class="mt-4">
                                    <button
                                        class="block w-full rounded-sm bg-white p-3 text-red-600 text-md font-medium transition hover:bg-red-600 hover:text-white border border-red-600"
                                        onclick="alert('Preview tidak tersedia di versi statis')">
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
                                <img src="https://images.unsplash.com/photo-1599481238640-4c1288750d7a?auto=format&fit=crop&w=2664&q=80"
                                    alt="Robot Toy"
                                    class="w-full h-full object-cover transition duration-500 group-hover:scale-105" />
                            </div>
                            <div class="p-6">
                                <h3 class="mt-4 text-lg font-medium text-gray-900">Robot Toy</h3>
                                <p class="mt-1.5 text-sm text-gray-700">$14.99</p>
                                <div class="mt-4">
                                    <button
                                        class="block w-full rounded-sm bg-white p-3 text-red-600 text-md font-medium transition hover:bg-red-600 hover:text-white border border-red-600"
                                        onclick="alert('Preview tidak tersedia di versi statis')">
                                        Preview
                                    </button>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!-- Produk 4 -->
                    <li>
                        <div class="group relative block overflow-hidden border border-gray-100 bg-white">
                            <div class="aspect-square w-full overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1599481238640-4c1288750d7a?auto=format&fit=crop&w=2664&q=80"
                                    alt="Robot Toy"
                                    class="w-full h-full object-cover transition duration-500 group-hover:scale-105" />
                            </div>
                            <div class="p-6">
                                <h3 class="mt-4 text-lg font-medium text-gray-900">Robot Toy</h3>
                                <p class="mt-1.5 text-sm text-gray-700">$14.99</p>
                                <div class="mt-4">
                                    <button
                                        class="block w-full rounded-sm bg-white p-3 text-red-600 text-md font-medium transition hover:bg-red-600 hover:text-white border border-red-600"
                                        onclick="alert('Preview tidak tersedia di versi statis')">
                                        Preview
                                    </button>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>

                <div class="flex flex-col items-center gap-3 mt-6">
                    <a href="/produk"
                        class="flex items-center justify-center text-white font-semibold bg-red-600 px-6 py-3 rounded-lg shadow-md hover:bg-white hover:text-red-600 border border-red-600 transition">
                        <span class="mr-2">Selengkapnya</span>
                    </a>
                </div>

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
            </div>
        </div>
    </section>

    {{-- Script Modal --}}
    <script>
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
                (currentImageIndex - 1 + produk[currentProductIndex].gambar.length) % produk[currentProductIndex].gambar
                .length;
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
                    @foreach ($portfolio as $item)
                        <div class="group relative block">
                            <div class="relative aspect-square">
                                <img src="{{ asset('storage/' . $item->gambar_portfolio) }}"
                                    alt="{{ $item->nama_portfolio }}"
                                    class="absolute inset-0 h-full w-full object-cover" />
                            </div>

                            <div class="absolute inset-0 flex flex-col items-start justify-end p-6">
                                <h3 class="text-xl font-medium text-white">
                                    {{ $item->nama_portfolio }}
                                </h3>

                                <p class="mt-1.5 text-xs text-pretty text-white">
                                    {{ $item->deskripsi_portfolio }}
                                </p>

                                <a href="{{ $item->drive_portfolio ?? '#' }} target="_blank" rel="noopener noreferrer"
                                    class="mt-3 inline-block bg-red-600 hover:bg-red-700 px-5 py-3 text-xs font-medium tracking-wide text-white uppercase rounded-lg">
                                    Lihat Detail
                                </a>
                            </div>
                        </div>
                    @endforeach


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

                            <a href="https://drive.google.com/your-file-link-here" target="_blank"
                                rel="noopener noreferrer"
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

                            <a href="https://drive.google.com/your-file-link-here" target="_blank"
                                rel="noopener noreferrer"
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

                            <a href="https://drive.google.com/your-file-link-here" target="_blank"
                                rel="noopener noreferrer"
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

                            <a href="https://drive.google.com/your-file-link-here" target="_blank"
                                rel="noopener noreferrer"
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

                            <a href="https://drive.google.com/your-file-link-here" target="_blank"
                                rel="noopener noreferrer"
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
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                            </path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- Galery Section --}}
    <section id="galeri" style="position: relative; background-color: #b91c1c; padding: 2rem 0;">
        <div style="max-width: 1536px; margin: 0 auto; padding: 0 1rem;">
            <!-- Swiper -->
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <!-- Slide 1 -->
                    @foreach ($galeri as $slide)
                        <div class="swiper-slide">
                            <div class="slide-content">
                                <div class="slide-image">
                                    <img src="{{ asset('storage/' . $slide->gambar_galeri) }}"
                                        alt="{{ $slide->judul_galeri }}" />
                                </div>
                                <div class="slide-text">
                                    <h2>{{ $slide->judul_galeri }}</h2>
                                    <p>{{ $slide->deskripsi_galeri }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach


                    <!-- Slide 2 -->
                    <div class="swiper-slide">
                        <div class="slide-content">
                            <div class="slide-image">
                                <img src="/assets/home2.jpg" alt="Gambar 2" />
                            </div>
                            <div class="slide-text">
                                <h2>Judul Slide Kedua</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, placeat!</p>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 3 -->
                    <div class="swiper-slide">
                        <div class="slide-content">
                            <div class="slide-image">
                                <img src="/assets/home3.jpg" alt="Gambar 3" />
                            </div>
                            <div class="slide-text">
                                <h2>Judul Slide Ketiga</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, sapiente!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Swiper CSS & JS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
        <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
        <script>
            var swiper = new Swiper(".mySwiper", {
                spaceBetween: 10,
                loop: true,
                speed: 2000,
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false,
                },
            });
        </script>

        <!-- Basic Styling -->
        <style>
            .slide-content {
                display: grid;
                grid-template-columns: 1fr 1fr;
                gap: 1rem;
                align-items: center;
                color: white;
            }

            .slide-image img {
                width: 100%;
                height: 100%;
                object-fit: cover;
                border-radius: 0.5rem;
                max-height: 500px;
            }

            .slide-text {
                padding: 2rem;
                text-align: left;
            }

            .slide-text h2 {
                font-size: 2rem;
                margin-bottom: 1rem;
            }

            .slide-text p {
                color: rgba(255, 255, 255, 0.9);
            }

            @media (max-width: 768px) {
                .slide-content {
                    grid-template-columns: 1fr;
                    text-align: center;
                }
            }
        </style>
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
                    <!-- Client Items -->
                    @foreach ($client as $clientslide)
                        <div class="swiper-slide">
                            <div class="client-box flex flex-col items-center justify-center text-center">
                                <img src="{{ asset('storage/' . $clientslide->gambar_client) }}"
                                    alt="{{ $clientslide->nama_client }}" class="h-20 w-auto object-contain mb-2">
                                <p class="text-sm font-semibold">{{ $clientslide->nama_client }}</p>
                            </div>
                        </div>
                    @endforeach
                    <div class="swiper-slide">
                        <div class="client-box">Client A</div>
                    </div>
                    <div class="swiper-slide">
                        <div class="client-box">Client B</div>
                    </div>
                    <div class="swiper-slide">
                        <div class="client-box">Client C</div>
                    </div>
                    <div class="swiper-slide">
                        <div class="client-box">Client D</div>
                    </div>
                    <div class="swiper-slide">
                        <div class="client-box">Client E</div>
                    </div>
                    <div class="swiper-slide">
                        <div class="client-box">Client F</div>
                    </div>
                    <!-- Tambah sesuai kebutuhan -->
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
                    0: {
                        slidesPerView: 2
                    },
                    640: {
                        slidesPerView: 3
                    },
                    768: {
                        slidesPerView: 4
                    },
                    1024: {
                        slidesPerView: 5
                    },
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
                background-color: #e5e7eb;
                color: #374151;
                font-weight: 600;
                border-radius: 0.5rem;
                box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
                transition: background-color 0.3s ease;
            }

            .client-box:hover {
                background-color: #d1d5db;
            }
        </style>
    </section>

    {{-- CTA Section --}}
    <section id="cta">
        <div class="container">
            <div class="cta-grid">
                <!-- Text + Button Section -->
                <div class="cta-left">
                    <div class="cta-content">
                        <h2>{{ $cta->judul_cta }}</h2>
                        <p>{{ $cta->deskripsi_cta }}</p>
                        <div class="cta-button">
                            <a href="https://wa.me/" class="cta-btn">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg"
                                    alt="WhatsApp Logo" class="cta-icon" />
                                <span>Pesan Sekarang</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Image Grid Section -->
                <div class="cta-right">
                    <img src="{{ asset('storage/' . $cta->gambar1_cta) }}" alt="Gambar 1" class="cta-image" />
                    <img src="{{ asset('storage/' . $cta->gambar2_cta) }}" alt="Gambar 2" class="cta-image" />
                </div>
            </div>
        </div>

        <style>
            .container {
                max-width: 1536px;
                margin: 0 auto;
                padding: 2rem 1rem;
            }

            .cta-grid {
                display: grid;
                grid-template-columns: 1fr;
                gap: 1rem;
            }

            @media (min-width: 768px) {
                .cta-grid {
                    grid-template-columns: 1fr 1fr;
                }
            }

            .cta-left {
                background-color: #b91c1c;
                padding: 2rem;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .cta-content {
                max-width: 36rem;
                text-align: center;
            }

            .cta-content h2 {
                color: #fff;
                font-size: 1.875rem;
                font-weight: bold;
            }

            @media (min-width: 768px) {
                .cta-content h2 {
                    font-size: 2rem;
                }
            }

            .cta-content p {
                margin-top: 1rem;
                color: rgba(255, 255, 255, 0.9);
                display: none;
            }

            @media (min-width: 640px) {
                .cta-content p {
                    display: block;
                }
            }

            .cta-button {
                margin-top: 3rem;
            }

            .cta-btn {
                display: inline-flex;
                align-items: center;
                justify-content: center;
                padding: 0.75rem 3rem;
                background-color: #fff;
                color: #b91c1c;
                font-weight: bold;
                border: 1px solid #fff;
                text-decoration: none;
                transition: 0.3s ease;
            }

            .cta-btn:hover {
                background-color: #b91c1c;
                color: #fff;
                border-color: #b91c1c;
            }

            .cta-icon {
                width: 1.75rem;
                height: 1.75rem;
                margin-right: 0.5rem;
            }

            .cta-right {
                display: grid;
                grid-template-columns: 1fr 1fr;
                gap: 1rem;
            }

            @media (min-width: 768px) {
                .cta-right {
                    grid-template-columns: 1fr;
                }

                @media (min-width: 1024px) {
                    .cta-right {
                        grid-template-columns: 1fr 1fr;
                    }
                }
            }

            .cta-image {
                width: 100%;
                height: 10rem;
                object-fit: cover;
            }

            @media (min-width: 640px) {
                .cta-image {
                    height: 14rem;
                }
            }

            @media (min-width: 768px) {
                .cta-image {
                    height: 100%;
                }
            }
        </style>
    </section>
@endsection
