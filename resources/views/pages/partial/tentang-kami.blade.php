{{-- Tentang Kami --}}
<section class="pt-20 pb-16 px-6 sm:px-12 lg:px-24 bg-white">
    <div class="max-w-screen-xl mx-auto flex flex-col lg:flex-row items-center gap-12">
        {{-- Kiri: Teks --}}
        <div class="w-full lg:w-1/2 text-center lg:text-left">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Tentang Kami</h2>
            <p class="text-gray-700 mb-4 leading-relaxed text-justify">
                Bran Apparel merupakan perusahaan konveksi ternama di Indonesia yang melayani pembuatan produk Apparel
                custom seperti kaos, Jersey, kemeja, polo serta produk Apparel dan Merchandise lainnya yang menggunakan
                bahan terbaik sehingga menghasilkan produk yang berkualitas. Dengan harga yang irit, kami melayani
                pembuatan produk yang memiliki kualitas Wahid. Pelayanan optimal dan kualitas produk terbaik menjadi
                komitmen utama kami dalam mewujudkan #PastiPAS #PastiPUAS #SemuaBergaransi.
            </p>

            <a href="{{ route('tentang-kami') }}"
                class="inline-block bg-red-600 hover:bg-white hover:text-red-600 border border-red-600 text-white font-semibold px-6 py-3 rounded-lg transition duration-300">
                Lihat Company Profile
            </a>
        </div>

        {{-- Kanan: Gambar --}}
        <div class="w-full lg:w-1/2 mt-8 lg:mt-0">
            <img src="{{ asset('assets/home1.jpg') }}" alt="Tentang Kami"
                class="w-full h-auto object-cover shadow-lg rounded-lg" />
        </div>
    </div>
</section>

{{-- Sejarah Kami --}}
<section class="pt-20 pb-16 px-6 sm:px-12 lg:px-24 bg-red-600 text-white">
    <h2 class="text-3xl font-bold text-center mb-12">Sejarah Kami</h2>
    <p class="leading-relaxed text-justify mb-6 max-w-4xl mx-auto text-gray-100">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa quisquam fugit, est ducimus facilis animi odio
        laborum odit vel commodi, nobis quod similique consectetur officia quos officiis, tempore rem! Sit perferendis
        asperiores mollitia, doloribus modi tempore at et aliquam iusto deleniti porro maxime esse, doloremque cumque
        voluptatum?
    </p>

    <div class="relative mt-12">
        <div class="absolute top-4 left-0 w-full h-0.5 bg-red-300 z-0"></div>

        <ol class="relative flex flex-col md:flex-row justify-between gap-12 z-10">
            @php
                $sejarah = [
                    ['tanggal' => '2022', 'judul' => 'Kickoff', 'isi' => 'Kickoff project dimulai dengan semangat tinggi dan perencanaan yang matang.'],
                    ['tanggal' => '2023', 'judul' => 'First Milestone', 'isi' => 'Pencapaian milestone pertama menandai kemajuan besar dalam pengembangan.'],
                    ['tanggal' => '2024', 'judul' => 'Launch', 'isi' => 'Resmi diluncurkan dan mulai melayani pelanggan di seluruh Indonesia.']
                ];
            @endphp

            @foreach ($sejarah as $item)
                <li class="relative text-center flex-1">
                    <span class="absolute top-[13px] left-1/2 -translate-x-1/2 w-3 h-3 bg-white rounded-full z-10"></span>
                    <div class="mt-8 max-w-xs mx-auto">
                        <time class="text-xs font-medium text-white/80">{{ $item['tanggal'] }}</time>
                        <h3 class="text-lg font-bold text-white mt-1">{{ $item['judul'] }}</h3>
                        <p class="text-sm text-white/80 mt-0.5">{{ $item['isi'] }}</p>
                    </div>
                </li>
            @endforeach
        </ol>
    </div>
</section>