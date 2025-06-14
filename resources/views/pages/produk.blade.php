@extends('layouts.app') {{-- Pastikan layout utama berada di resources/views/layouts/app.blade.php --}}

@section('content')
    <div class="bg-white px-4 py-8 sm:px-6 sm:py-12 lg:px-24">
        <div class="max-w-screen-xl mx-auto">

            {{-- Judul halaman --}}
            <div class="text-center mb-8">
                <h2 class="text-3xl font-bold text-black">Belanja Produk</h2>
                <p class="text-gray-500 text-lg mt-2">
                    Diskusikan desain sesuai dengan keinginan Anda bersama kami.
                </p>
            </div>

            {{-- Section Apparel --}}
            <div class="py-8">
                <h2 class="text-3xl font-bold text-center text-gray-800 mb-10">Apparel</h2>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

                    {{-- Card Produk --}}
                    <div class="relative block rounded-tr-3xl border border-gray-100 shadow-sm">
                        <span
                            class="absolute -top-px -right-px rounded-tr-3xl rounded-bl-3xl bg-red-600 px-6 py-4 font-semibold tracking-widest text-white uppercase">
                            Start From 100k
                        </span>

                        <img src="https://images.unsplash.com/photo-1485955900006-10f4d324d411?q=80&w=2672&auto=format&fit=crop"
                            alt="Aloe Vera" class="h-80 w-full rounded-tr-3xl object-cover" />

                        <div class="p-4 text-center">
                            <h3 class="text-xl font-semibold text-gray-900">Aloe Vera</h3>
                            <p class="mt-2 text-gray-700 text-sm leading-relaxed">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Amet officia rem vel voluptatum in eum vitae.
                            </p>

                            <a href="https://wa.me/6281234567890" target="_blank"
                                class="mt-4 inline-block rounded-md border border-red-600 bg-white px-5 py-3 text-sm font-medium text-red-600 uppercase hover:bg-red-600 hover:text-white transition">
                                Pesan Sekarang
                            </a>
                        </div>
                    </div>

                    {{-- Card Produk --}}
                    <div class="relative block rounded-tr-3xl border border-gray-100 shadow-sm">
                        <span
                            class="absolute -top-px -right-px rounded-tr-3xl rounded-bl-3xl bg-red-600 px-6 py-4 font-semibold tracking-widest text-white uppercase">
                            Start From 100k
                        </span>

                        <img src="https://images.unsplash.com/photo-1485955900006-10f4d324d411?q=80&w=2672&auto=format&fit=crop"
                            alt="Aloe Vera" class="h-80 w-full rounded-tr-3xl object-cover" />

                        <div class="p-4 text-center">
                            <h3 class="text-xl font-semibold text-gray-900">Aloe Vera</h3>
                            <p class="mt-2 text-gray-700 text-sm leading-relaxed">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Amet officia rem vel voluptatum in eum vitae.
                            </p>

                            <a href="https://wa.me/6281234567890" target="_blank"
                                class="mt-4 inline-block rounded-md border border-red-600 bg-white px-5 py-3 text-sm font-medium text-red-600 uppercase hover:bg-red-600 hover:text-white transition">
                                Pesan Sekarang
                            </a>
                        </div>
                    </div>

                    {{-- Card Produk --}}
                    <div class="relative block rounded-tr-3xl border border-gray-100 shadow-sm">
                        <span
                            class="absolute -top-px -right-px rounded-tr-3xl rounded-bl-3xl bg-red-600 px-6 py-4 font-semibold tracking-widest text-white uppercase">
                            Start From 100k
                        </span>

                        <img src="https://images.unsplash.com/photo-1485955900006-10f4d324d411?q=80&w=2672&auto=format&fit=crop"
                            alt="Aloe Vera" class="h-80 w-full rounded-tr-3xl object-cover" />

                        <div class="p-4 text-center">
                            <h3 class="text-xl font-semibold text-gray-900">Aloe Vera</h3>
                            <p class="mt-2 text-gray-700 text-sm leading-relaxed">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Amet officia rem vel voluptatum in eum vitae.
                            </p>

                            <a href="https://wa.me/6281234567890" target="_blank"
                                class="mt-4 inline-block rounded-md border border-red-600 bg-white px-5 py-3 text-sm font-medium text-red-600 uppercase hover:bg-red-600 hover:text-white transition">
                                Pesan Sekarang
                            </a>
                        </div>
                    </div>

                    {{-- Card Produk --}}
                    <div class="relative block rounded-tr-3xl border border-gray-100 shadow-sm">
                        <span
                            class="absolute -top-px -right-px rounded-tr-3xl rounded-bl-3xl bg-red-600 px-6 py-4 font-semibold tracking-widest text-white uppercase">
                            Start From 100k
                        </span>

                        <img src="https://images.unsplash.com/photo-1485955900006-10f4d324d411?q=80&w=2672&auto=format&fit=crop"
                            alt="Aloe Vera" class="h-80 w-full rounded-tr-3xl object-cover" />

                        <div class="p-4 text-center">
                            <h3 class="text-xl font-semibold text-gray-900">Aloe Vera</h3>
                            <p class="mt-2 text-gray-700 text-sm leading-relaxed">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Amet officia rem vel voluptatum in eum vitae.
                            </p>

                            <a href="https://wa.me/6281234567890" target="_blank"
                                class="mt-4 inline-block rounded-md border border-red-600 bg-white px-5 py-3 text-sm font-medium text-red-600 uppercase hover:bg-red-600 hover:text-white transition">
                                Pesan Sekarang
                            </a>
                        </div>
                    </div>{{-- Card Produk --}}
                    <div class="relative block rounded-tr-3xl border border-gray-100 shadow-sm">
                        <span
                            class="absolute -top-px -right-px rounded-tr-3xl rounded-bl-3xl bg-red-600 px-6 py-4 font-semibold tracking-widest text-white uppercase">
                            Start From 100k
                        </span>

                        <img src="https://images.unsplash.com/photo-1485955900006-10f4d324d411?q=80&w=2672&auto=format&fit=crop"
                            alt="Aloe Vera" class="h-80 w-full rounded-tr-3xl object-cover" />

                        <div class="p-4 text-center">
                            <h3 class="text-xl font-semibold text-gray-900">Aloe Vera</h3>
                            <p class="mt-2 text-gray-700 text-sm leading-relaxed">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Amet officia rem vel voluptatum in eum vitae.
                            </p>

                            <a href="https://wa.me/6281234567890" target="_blank"
                                class="mt-4 inline-block rounded-md border border-red-600 bg-white px-5 py-3 text-sm font-medium text-red-600 uppercase hover:bg-red-600 hover:text-white transition">
                                Pesan Sekarang
                            </a>
                        </div>
                    </div>

                    {{-- Card Produk --}}
                    <div class="relative block rounded-tr-3xl border border-gray-100 shadow-sm">
                        <span
                            class="absolute -top-px -right-px rounded-tr-3xl rounded-bl-3xl bg-red-600 px-6 py-4 font-semibold tracking-widest text-white uppercase">
                            Start From 100k
                        </span>

                        <img src="https://images.unsplash.com/photo-1485955900006-10f4d324d411?q=80&w=2672&auto=format&fit=crop"
                            alt="Aloe Vera" class="h-80 w-full rounded-tr-3xl object-cover" />

                        <div class="p-4 text-center">
                            <h3 class="text-xl font-semibold text-gray-900">Aloe Vera</h3>
                            <p class="mt-2 text-gray-700 text-sm leading-relaxed">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Amet officia rem vel voluptatum in eum vitae.
                            </p>

                            <a href="https://wa.me/6281234567890" target="_blank"
                                class="mt-4 inline-block rounded-md border border-red-600 bg-white px-5 py-3 text-sm font-medium text-red-600 uppercase hover:bg-red-600 hover:text-white transition">
                                Pesan Sekarang
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Section Apparel --}}
            <div class="py-8">
                <h2 class="text-3xl font-bold text-center text-gray-800 mb-10">Merchandise</h2>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

                    {{-- Card Produk --}}
                    <div class="relative block rounded-tr-3xl border border-gray-100 shadow-sm">
                        <span
                            class="absolute -top-px -right-px rounded-tr-3xl rounded-bl-3xl bg-red-600 px-6 py-4 font-semibold tracking-widest text-white uppercase">
                            Start From 100k
                        </span>

                        <img src="https://images.unsplash.com/photo-1485955900006-10f4d324d411?q=80&w=2672&auto=format&fit=crop"
                            alt="Aloe Vera" class="h-80 w-full rounded-tr-3xl object-cover" />

                        <div class="p-4 text-center">
                            <h3 class="text-xl font-semibold text-gray-900">Aloe Vera</h3>
                            <p class="mt-2 text-gray-700 text-sm leading-relaxed">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Amet officia rem vel voluptatum in eum vitae.
                            </p>

                            <a href="https://wa.me/6281234567890" target="_blank"
                                class="mt-4 inline-block rounded-md border border-red-600 bg-white px-5 py-3 text-sm font-medium text-red-600 uppercase hover:bg-red-600 hover:text-white transition">
                                Pesan Sekarang
                            </a>
                        </div>
                    </div>

                    {{-- Card Produk --}}
                    <div class="relative block rounded-tr-3xl border border-gray-100 shadow-sm">
                        <span
                            class="absolute -top-px -right-px rounded-tr-3xl rounded-bl-3xl bg-red-600 px-6 py-4 font-semibold tracking-widest text-white uppercase">
                            Start From 100k
                        </span>

                        <img src="https://images.unsplash.com/photo-1485955900006-10f4d324d411?q=80&w=2672&auto=format&fit=crop"
                            alt="Aloe Vera" class="h-80 w-full rounded-tr-3xl object-cover" />

                        <div class="p-4 text-center">
                            <h3 class="text-xl font-semibold text-gray-900">Aloe Vera</h3>
                            <p class="mt-2 text-gray-700 text-sm leading-relaxed">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Amet officia rem vel voluptatum in eum vitae.
                            </p>

                            <a href="https://wa.me/6281234567890" target="_blank"
                                class="mt-4 inline-block rounded-md border border-red-600 bg-white px-5 py-3 text-sm font-medium text-red-600 uppercase hover:bg-red-600 hover:text-white transition">
                                Pesan Sekarang
                            </a>
                        </div>
                    </div>

                    {{-- Card Produk --}}
                    <div class="relative block rounded-tr-3xl border border-gray-100 shadow-sm">
                        <span
                            class="absolute -top-px -right-px rounded-tr-3xl rounded-bl-3xl bg-red-600 px-6 py-4 font-semibold tracking-widest text-white uppercase">
                            Start From 100k
                        </span>

                        <img src="https://images.unsplash.com/photo-1485955900006-10f4d324d411?q=80&w=2672&auto=format&fit=crop"
                            alt="Aloe Vera" class="h-80 w-full rounded-tr-3xl object-cover" />

                        <div class="p-4 text-center">
                            <h3 class="text-xl font-semibold text-gray-900">Aloe Vera</h3>
                            <p class="mt-2 text-gray-700 text-sm leading-relaxed">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Amet officia rem vel voluptatum in eum vitae.
                            </p>

                            <a href="https://wa.me/6281234567890" target="_blank"
                                class="mt-4 inline-block rounded-md border border-red-600 bg-white px-5 py-3 text-sm font-medium text-red-600 uppercase hover:bg-red-600 hover:text-white transition">
                                Pesan Sekarang
                            </a>
                        </div>
                    </div>
                </div>
            </div>
@endsection