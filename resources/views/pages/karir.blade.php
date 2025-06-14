@extends('layouts.app')

@section('content')
  <section class="overflow-hidden bg-cover bg-top bg-no-repeat"
    style="background-image: url('{{ asset('assets/home2.jpg') }}')">

    <div class="bg-black/50 p-8 md:p-12 lg:px-16 lg:py-24">
    <div class="text-center ltr:sm:text-left rtl:sm:text-right">
      <h2 class="text-2xl font-bold text-white sm:text-3xl md:text-5xl">Bergabung dengan Kami</h2>

      <p class="hidden text-white/90 md:mt-6 md:block md:text-lg md:leading-relaxed">
      Bergabunglah dengan Bran Apparel dan jadi bagian dari perjalanan yang inspiratif!
      </p>
    </div>
    </div>
  </section>

  {{-- Section Statistik Brand Apparel --}}
  <section class="bg-white py-20 px-6 sm:px-12 lg:px-24">
    <div class="max-w-screen-xl mx-auto text-center mb-12">
    <h2 class="text-3xl font-bold text-gray-900 mb-4">Statistik dan Jangkauan Kami</h2>
    <p class="text-gray-600 leading-relaxed max-w-3xl mx-auto">
      Komitmen kami terhadap kualitas dan pelayanan terbaik telah membawa pertumbuhan yang signifikan.
      Berikut adalah sekilas pencapaian yang mencerminkan dedikasi kami dalam membangun kepercayaan pelanggan
      dan memperluas jaringan.
    </p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
    {{-- Card 1 --}}
    <div class="bg-white shadow-lg rounded-xl p-8 text-center">
      <h3 class="text-4xl font-bold text-gray-900 mb-4">100+ Pelanggan</h3>
      <p class="text-gray-600 leading-relaxed">
      Telah dipercaya oleh ratusan pelanggan dari berbagai daerah sejak berdiri.
      </p>
    </div>

    {{-- Card 2 --}}
    <div class="bg-white shadow-lg rounded-xl p-8 text-center">
      <h3 class="text-4xl font-bold text-gray-900 mb-4">20+ Karyawan</h3>
      <p class="text-gray-600 leading-relaxed">
      Tim profesional yang berdedikasi dalam memberikan layanan dan produk terbaik.
      </p>
    </div>

    {{-- Card 3 --}}
    <div class="bg-white shadow-lg rounded-xl p-8 text-center">
      <h3 class="text-4xl font-bold text-gray-900 mb-4">5 Toko</h3>
      <p class="text-gray-600 leading-relaxed">
      Hadir secara langsung di berbagai kota besar untuk menjangkau lebih banyak pelanggan.
      </p>
    </div>
    </div>
  </section>
  <section class="bg-gray-50 py-20 px-6 sm:px-12 lg:px-24">
    <div class="max-w-screen-xl mx-auto text-center">
    <h2 class="text-3xl font-bold text-gray-900 mb-12">
      Corporate Culture di Bran Apparel
    </h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-10">

      <!-- Item 1 -->
      <div class="flex flex-col items-center text-center">
      <div class="text-red-600 text-4xl mb-4">
        <i class="fa-solid fa-people-group"></i>
      </div>
      <h3 class="text-lg font-semibold text-gray-900">Kolaborasi & Inovasi</h3>
      <p class="text-sm text-gray-600 mt-2">Kerja tim dan eksplorasi ide jadi kunci pertumbuhan.</p>
      </div>

      <!-- Item 2 -->
      <div class="flex flex-col items-center text-center">
      <div class="text-red-600 text-4xl mb-4">
        <i class="fa-solid fa-scale-balanced"></i>
      </div>
      <h3 class="text-lg font-semibold text-gray-900">Integritas & Profesionalisme</h3>
      <p class="text-sm text-gray-600 mt-2">Menjaga transparansi dan etika kerja yang tinggi.</p>
      </div>

      <!-- Item 3 -->
      <div class="flex flex-col items-center text-center">
      <div class="text-red-600 text-4xl mb-4">
        <i class="fa-solid fa-handshake-angle"></i>
      </div>
      <h3 class="text-lg font-semibold text-gray-900">Kepercayaan & Hormat</h3>
      <p class="text-sm text-gray-600 mt-2">Saling menghargai dan menjunjung kepercayaan.</p>
      </div>

      <!-- Item 4 -->
      <div class="flex flex-col items-center text-center">
      <div class="text-red-600 text-4xl mb-4">
        <i class="fa-solid fa-chart-line"></i>
      </div>
      <h3 class="text-lg font-semibold text-gray-900">Pertumbuhan & Belajar</h3>
      <p class="text-sm text-gray-600 mt-2">Ruang berkembang melalui pelatihan dan mentoring.</p>
      </div>

    </div>
    </div>
  </section>

  {{-- Section Keuntungan dan Benefit --}}
  <section class="w-full">
    <div class="bg-red-600 w-full py-20 px-6 sm:px-12 lg:px-24">
    <div class="max-w-screen-xl mx-auto text-center text-white">
      <h2 class="text-3xl font-bold mb-16">Keuntungan dan Benefit Kerja di Bran Apparel</h2>

      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10 text-center">

      {{-- Benefit 1 --}}
      <div class="flex flex-col items-center">
        <div
        class="w-14 h-14 flex items-center justify-center bg-white text-red-600 rounded-full shadow-lg text-2xl mb-4">
        <i class="fas fa-users"></i>
        </div>
        <h3 class="text-lg font-semibold">Tim Kolaboratif</h3>
        <p class="mt-2 text-sm opacity-90 leading-relaxed">
        Budaya kerja tim yang saling mendukung dan terbuka untuk ide-ide baru.
        </p>
      </div>

      {{-- Benefit 2 --}}
      <div class="flex flex-col items-center">
        <div
        class="w-14 h-14 flex items-center justify-center bg-white text-red-600 rounded-full shadow-lg text-2xl mb-4">
        <i class="fas fa-graduation-cap"></i>
        </div>
        <h3 class="text-lg font-semibold">Pelatihan Berkala</h3>
        <p class="mt-2 text-sm opacity-90 leading-relaxed">
        Akses ke pelatihan keterampilan dan pengembangan profesional secara berkelanjutan.
        </p>
      </div>

      {{-- Benefit 3 --}}
      <div class="flex flex-col items-center">
        <div
        class="w-14 h-14 flex items-center justify-center bg-white text-red-600 rounded-full shadow-lg text-2xl mb-4">
        <i class="fas fa-clock"></i>
        </div>
        <h3 class="text-lg font-semibold">Jam Kerja Fleksibel</h3>
        <p class="mt-2 text-sm opacity-90 leading-relaxed">
        Kebijakan kerja yang fleksibel untuk mendukung keseimbangan hidup dan pekerjaan.
        </p>
      </div>

      {{-- Benefit 4 --}}
      <div class="flex flex-col items-center">
        <div
        class="w-14 h-14 flex items-center justify-center bg-white text-red-600 rounded-full shadow-lg text-2xl mb-4">
        <i class="fas fa-gift"></i>
        </div>
        <h3 class="text-lg font-semibold">Bonus & Insentif</h3>
        <p class="mt-2 text-sm opacity-90 leading-relaxed">
        Apresiasi kinerja berupa bonus dan penghargaan berdasarkan kontribusi.
        </p>
      </div>

      </div>
    </div>
    </div>
  </section>


  <section class="bg-white py-16 px-6 sm:px-12 lg:px-24">
    <div class="max-w-screen-xl mx-auto">
    <h2 class="text-3xl font-bold text-gray-900 mb-2">List Rekrutmen</h2>
    <div class="w-24 h-1 bg-red-600 mb-8"></div>

    {{-- Kartu Lowongan --}}
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
      {{-- Card 1 --}}
      <div class="bg-white rounded-xl shadow-lg p-6">
      <h3 class="text-xl font-semibold text-gray-900">Staff Produksi</h3>
      <p class="text-sm text-gray-700 mt-2">
        Bertanggung jawab terhadap proses produksi harian, memastikan kualitas dan efisiensi berjalan optimal.
      </p>
      <p class="mt-4 text-sm text-gray-500">Penempatan: Pabrik Ungaran</p>
      <button class="mt-4 text-red-600 font-medium hover:underline">Lihat Detail</button>
      </div>

      {{-- Card 2 --}}
      <div class="bg-white rounded-xl shadow-lg p-6">
      <h3 class="text-xl font-semibold text-gray-900">Admin HRD</h3>
      <p class="text-sm text-gray-700 mt-2">
        Mengelola data karyawan, absensi, dan membantu proses administrasi serta kegiatan rekrutmen internal.
      </p>
      <p class="mt-4 text-sm text-gray-500">Penempatan: Kantor Pusat Semarang</p>
      <button class="mt-4 text-red-600 font-medium hover:underline">Lihat Detail</button>
      </div>

      {{-- Card 3 --}}
      <div class="bg-white rounded-xl shadow-lg p-6">
      <h3 class="text-xl font-semibold text-gray-900">Quality Control</h3>
      <p class="text-sm text-gray-700 mt-2">
        Memastikan produk sesuai dengan standar mutu yang ditetapkan sebelum distribusi ke pasar.
      </p>
      <p class="mt-4 text-sm text-gray-500">Penempatan: Gudang & Produksi</p>
      <button class="mt-4 text-red-600 font-medium hover:underline">Lihat Detail</button>
      </div>
    </div>

    {{-- Peringatan Penipuan --}}
    <div class="bg-gray-100 text-red-600 rounded-xl shadow-lg p-8 sm:p-10">
      <h2 class="text-3xl font-bold mb-2">Waspada Penipuan</h2>
      <p class="leading-relaxed text-gray-900 text-justify">
      Pastikan seluruh informasi terkait proses rekrutmen yang berasal dari surat elektronik dikirimkan oleh alamat
      email resmi KNITTO dengan email berakhiran <strong>@branapparel.co.id</strong>.
      Dalam hal Anda membutuhkan informasi lebih lanjut, atau ingin menginformasikan penyalahgunaan nama BRAN APPAREL,
      mohon
      dapat menghubungi 0821-2334-5678
      </p>
    </div>
    </div>
  </section>

  <section id="kehidupan" class="bg-white py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
    <h2 class="text-3xl font-bold text-gray-800 mb-6">Kehidupan di Bran Apparel</h2>
    <p class="text-gray-600 max-w-4xl mx-auto mb-12 leading-relaxed">
      Suasana kerja yang inspiratif, kolaboratif, dan mendorong setiap individu untuk berkembang dan mengekspresikan
      diri sepenuhnya.
    </p>

    <div class="relative">
      {{-- Tombol kiri --}}
      <button onclick="scrollSlider(-1)"
      class="absolute -left-6 top-1/2 transform -translate-y-1/2 z-10 border-2 border-red-700 text-red-700 w-10 h-10 rounded-full flex items-center justify-center hover:bg-red-100 transition">
      &lt;
      </button>

      {{-- Slider --}}
      <div id="slider" class="flex overflow-hidden scroll-smooth no-scrollbar space-x-6 justify-center">
      @php
      $images = ['home1.jpg', 'home2.jpg', 'home3.jpg', 'home1.jpg', 'home2.jpg', 'home3.jpg'];
    @endphp

      @foreach ($images as $img)
      <div class="min-w-[50%] flex-shrink-0">
      <img src="{{ asset('assets/' . $img) }}" alt="Kehidupan di Bran Apparel"
      class="w-full h-[400px] object-cover rounded-lg shadow-md" />
      </div>
    @endforeach
      </div>

      {{-- Tombol kanan --}}
      <button onclick="scrollSlider(1)"
      class="absolute -right-6 top-1/2 transform -translate-y-1/2 z-10 border-2 border-red-700 text-red-700 w-10 h-10 rounded-full flex items-center justify-center hover:bg-red-100 transition">
      &gt;
      </button>
    </div>
    </div>
  </section>
  <style>
    .no-scrollbar::-webkit-scrollbar {
    display: none;
    }

    .no-scrollbar {
    -ms-overflow-style: none;
    scrollbar-width: none;
    }
  </style>
  <script>
    const slider = document.getElementById('slider');
    const totalItems = {{ count($images) }};
    const itemsPerPage = 2;
    const itemWidth = slider.clientWidth / itemsPerPage;

    let currentPage = 0;

    function scrollSlider(direction) {
    currentPage += direction;

    const maxPage = Math.ceil(totalItems / itemsPerPage) - 1;

    if (currentPage > maxPage) {
      currentPage = 0; // Loop ke awal
    } else if (currentPage < 0) {
      currentPage = maxPage; // (opsional) Loop ke akhir kalau klik kiri
    }

    const scrollX = currentPage * slider.clientWidth;
    slider.scrollTo({ left: scrollX, behavior: 'smooth' });
    }
  </script>

@endsection