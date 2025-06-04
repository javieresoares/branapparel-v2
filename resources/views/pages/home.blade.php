@extends('layouts.app')

@section('content')
    <section>
        <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-4 md:grid-cols-2 md:items-center md:gap-8">
                <div>
                    <div class="max-w-lg md:max-w-none">
                        <h2 class="text-2xl font-semibold text-gray-900 sm:text-3xl">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        </h2>

                        <p class="mt-4 text-gray-700">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur doloremque saepe
                            architecto maiores repudiandae amet perferendis repellendus, reprehenderit voluptas
                            sequi.
                        </p>
                    </div>
                </div>

                <div>
                    <img src="https://images.unsplash.com/photo-1731690415686-e68f78e2b5bd?q=80&w=2670&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        class="rounded" alt="" />
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8">
            <header class="text-center">
                <h2 class="text-xl font-bold text-gray-900 sm:text-3xl">Product Collection</h2>

                <p class="mx-auto mt-4 max-w-md text-gray-500">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque praesentium cumque iure
                    dicta incidunt est ipsam, officia dolor fugit natus?
                </p>
            </header>

            <ul class="mt-8 grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
                <li>
                    @foreach ($produks as $produk)
                        <a href="#" class="group block overflow-hidden">
                            <img src="{{ asset('storage/' . $produk->gambar_produk) }}" alt="{{ $produk->nama_produk }}"
                                class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[450px]" />

                            <div class="relative bg-white pt-3">
                                <h3 class="text-xs text-gray-700 group-hover:underline group-hover:underline-offset-4">
                                    {{ $produk->nama_produk }}
                                </h3>

                                <p class="mt-2">
                                    <span class="sr-only"> Regular Price </span>
                                    <span class="tracking-wider text-gray-900">
                                        Rp{{ number_format($produk->harga_produk, 0, ',', '.') }}
                                    </span>
                                </p>
                            </div>
                        </a>
                    @endforeach
                </li>

                <li>
                    <a href="#" class="group block overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1523381210434-271e8be1f52b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
                            alt=""
                            class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[450px]" />

                        <div class="relative bg-white pt-3">
                            <h3 class="text-xs text-gray-700 group-hover:underline group-hover:underline-offset-4">
                                Basic Tee
                            </h3>

                            <p class="mt-2">
                                <span class="sr-only"> Regular Price </span>

                                <span class="tracking-wider text-gray-900"> £24.00 GBP </span>
                            </p>
                        </div>
                    </a>
                </li>

                <li>
                    <a href="#" class="group block overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1523381210434-271e8be1f52b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
                            alt=""
                            class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[450px]" />

                        <div class="relative bg-white pt-3">
                            <h3 class="text-xs text-gray-700 group-hover:underline group-hover:underline-offset-4">
                                Basic Tee
                            </h3>

                            <p class="mt-2">
                                <span class="sr-only"> Regular Price </span>

                                <span class="tracking-wider text-gray-900"> £24.00 GBP </span>
                            </p>
                        </div>
                    </a>
                </li>

                <li>
                    <a href="#" class="group block overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1523381210434-271e8be1f52b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
                            alt=""
                            class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[450px]" />

                        <div class="relative bg-white pt-3">
                            <h3 class="text-xs text-gray-700 group-hover:underline group-hover:underline-offset-4">
                                Basic Tee
                            </h3>

                            <p class="mt-2">
                                <span class="sr-only"> Regular Price </span>

                                <span class="tracking-wider text-gray-900"> £24.00 GBP </span>
                            </p>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </section>
@endsection
