@extends('layouts.app')

@section('content')
    <section class="bg-white px-4 pt-24 pb-12">
        <div class="sm:px-6 md:px-12 lg:px-24">
            <div class="w-full max-w-7xl mx-auto">
                <div class="flex flex-col lg:flex-row gap-12 items-start justify-between">
                    {{-- Kiri - Info Kontak --}}
                    <div class="w-full lg:w-1/2 text-gray-800">
                        <h2 class="text-3xl font-bold mb-4">Kontak Kami</h2>
                        <p class="mb-6">
                            Jika Anda membutuhkan informasi lain mengenai produk kami,<br />
                            jangan ragu untuk kirimkan pesan kepada kami.
                        </p>

                        <div class="space-y-4 text-sm sm:text-base">
                            <div>
                                <p class="font-semibold mb-1">📧 Email:</p>
                                <p>
                                    <a href="mailto:info@branapparel.co.id" class="text-blue-600 hover:underline">
                                        info@branapparel.co.id
                                    </a>
                                </p>
                            </div>

                            <div>
                                <p class="font-semibold mb-1">📱 WhatsApp:</p>
                                <p>
                                    <a href="https://wa.me/6282120003035" target="_blank" rel="noopener noreferrer"
                                        class="text-green-600 hover:underline">
                                        0821-2000-3035
                                    </a>
                                </p>
                            </div>

                            <div>
                                <p class="font-semibold mb-1">⏰ Jam Operasional:</p>
                                <p class="whitespace-pre-line">
                                    Monday - Friday: 8.30 - 16.30 WIB
                                    Saturday: 8.30 - 14.30 WIB
                                    Sunday: Closed
                                </p>
                            </div>

                            <div>
                                <p class="font-semibold mb-1">📍 Petunjuk Lokasi:</p>
                                <p>
                                    <a href="https://www.google.com/maps/place/Knitto+Textile+Indonesia/" target="_blank"
                                        rel="noopener noreferrer" class="text-red-600 hover:underline">
                                        Lihat di Google Maps
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>

                    {{-- Kanan - Form --}}
                    <div class="w-full lg:w-1/2 bg-white p-6 rounded-lg shadow-md">
                        <h2 class="text-2xl font-semibold mb-4 text-gray-800">Kirim Pesan</h2>

                        @if(session('success'))
                            <p class="text-green-600 mb-4">{{ session('success') }}</p>
                        @endif

                        <form method="POST" action="{{ route('kontak.submit') }}" class="space-y-4" novalidate>
                            @csrf

                            <div>
                                <label for="nama" class="block text-sm font-medium text-gray-700 mb-1">Nama</label>
                                <input id="nama" type="text" name="nama" value="{{ old('nama') }}" required
                                    class="w-full p-3 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-red-500" />
                                @error('nama')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                                <input id="email" type="email" name="email" value="{{ old('email') }}" required
                                    class="w-full p-3 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-red-500" />
                                @error('email')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="pesan" class="block text-sm font-medium text-gray-700 mb-1">Pesan</label>
                                <textarea id="pesan" name="pesan" rows="4" required
                                    class="w-full p-3 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-red-500">{{ old('pesan') }}</textarea>
                                @error('pesan')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <button type="submit"
                                class="w-full bg-red-500 text-white py-3 px-4 rounded hover:bg-red-600 transition">
                                Kirim
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection