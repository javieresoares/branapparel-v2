@extends('layouts.app')

@section('content')
    <section id="portofolio">
        <div class="px-4 py-8 sm:px-6 sm:py-12 lg:px-8">
            <div class="mb-8 text-center">
                <h2 class="text-3xl font-bold text-black">
                    Hasil Terbaik Kami
                </h2>
            </div>

            <div class="mx-auto max-w-screen-xl">
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-6">

                    {{-- Portofolio Item 1 --}}
                    <div class="group relative block">
                        <div class="relative aspect-square">
                            <img src="https://images.unsplash.com/photo-1593795899768-947c4929449d?ixlib=rb-4.0.3&auto=format&fit=crop&w=2672&q=80"
                                alt="" class="absolute inset-0 h-full w-full object-cover" />
                        </div>

                        <div class="absolute inset-0 flex flex-col items-start justify-end p-6">
                            <h3 class="text-xl font-medium text-white">Skinny Jeans Blue</h3>
                            <p class="mt-1.5 text-xs text-pretty text-white">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos sequi dicta
                                impedit aperiam ipsum!
                            </p>
                            <a href="https://drive.google.com/your-file-link-here" target="_blank" rel="noopener noreferrer"
                                class="mt-3 inline-block bg-red-600 hover:bg-red-700 px-5 py-3 text-xs font-medium tracking-wide text-white uppercase rounded-lg">
                                Lihat Detail
                            </a>
                        </div>
                    </div>

                    {{-- Portofolio Item 2 --}}
                    <div class="group relative block">
                        <div class="relative aspect-square">
                            <img src="https://images.unsplash.com/photo-1593795899768-947c4929449d?ixlib=rb-4.0.3&auto=format&fit=crop&w=2672&q=80"
                                alt="" class="absolute inset-0 h-full w-full object-cover" />
                        </div>

                        <div class="absolute inset-0 flex flex-col items-start justify-end p-6">
                            <h3 class="text-xl font-medium text-white">Skinny Jeans Blue</h3>
                            <p class="mt-1.5 text-xs text-pretty text-white">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos sequi dicta
                                impedit aperiam ipsum!
                            </p>
                            <a href="https://drive.google.com/your-file-link-here" target="_blank" rel="noopener noreferrer"
                                class="mt-3 inline-block bg-red-600 hover:bg-red-700 px-5 py-3 text-xs font-medium tracking-wide text-white uppercase rounded-lg">
                                Lihat Detail
                            </a>
                        </div>
                    </div>

                    {{-- Portofolio Item 3 --}}
                    <div class="group relative block">
                        <div class="relative aspect-square">
                            <img src="https://images.unsplash.com/photo-1593795899768-947c4929449d?ixlib=rb-4.0.3&auto=format&fit=crop&w=2672&q=80"
                                alt="" class="absolute inset-0 h-full w-full object-cover" />
                        </div>

                        <div class="absolute inset-0 flex flex-col items-start justify-end p-6">
                            <h3 class="text-xl font-medium text-white">Skinny Jeans Blue</h3>
                            <p class="mt-1.5 text-xs text-pretty text-white">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos sequi dicta
                                impedit aperiam ipsum!
                            </p>
                            <a href="https://drive.google.com/your-file-link-here" target="_blank" rel="noopener noreferrer"
                                class="mt-3 inline-block bg-red-600 hover:bg-red-700 px-5 py-3 text-xs font-medium tracking-wide text-white uppercase rounded-lg">
                                Lihat Detail
                            </a>
                        </div>
                    </div>

                    {{-- Portofolio Item 4 --}}
                    <div class="group relative block">
                        <div class="relative aspect-square">
                            <img src="https://images.unsplash.com/photo-1593795899768-947c4929449d?ixlib=rb-4.0.3&auto=format&fit=crop&w=2672&q=80"
                                alt="" class="absolute inset-0 h-full w-full object-cover" />
                        </div>

                        <div class="absolute inset-0 flex flex-col items-start justify-end p-6">
                            <h3 class="text-xl font-medium text-white">Skinny Jeans Blue</h3>
                            <p class="mt-1.5 text-xs text-pretty text-white">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos sequi dicta
                                impedit aperiam ipsum!
                            </p>
                            <a href="https://drive.google.com/your-file-link-here" target="_blank" rel="noopener noreferrer"
                                class="mt-3 inline-block bg-red-600 hover:bg-red-700 px-5 py-3 text-xs font-medium tracking-wide text-white uppercase rounded-lg">
                                Lihat Detail
                            </a>
                        </div>
                    </div>

                    {{-- Portofolio Item 5 --}}
                    <div class="group relative block">
                        <div class="relative aspect-square">
                            <img src="https://images.unsplash.com/photo-1593795899768-947c4929449d?ixlib=rb-4.0.3&auto=format&fit=crop&w=2672&q=80"
                                alt="" class="absolute inset-0 h-full w-full object-cover" />
                        </div>

                        <div class="absolute inset-0 flex flex-col items-start justify-end p-6">
                            <h3 class="text-xl font-medium text-white">Skinny Jeans Blue</h3>
                            <p class="mt-1.5 text-xs text-pretty text-white">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos sequi dicta
                                impedit aperiam ipsum!
                            </p>
                            <a href="https://drive.google.com/your-file-link-here" target="_blank" rel="noopener noreferrer"
                                class="mt-3 inline-block bg-red-600 hover:bg-red-700 px-5 py-3 text-xs font-medium tracking-wide text-white uppercase rounded-lg">
                                Lihat Detail
                            </a>
                        </div>
                    </div>

                    {{-- Portofolio Item 6 --}}
                    <div class="group relative block">
                        <div class="relative aspect-square">
                            <img src="https://images.unsplash.com/photo-1593795899768-947c4929449d?ixlib=rb-4.0.3&auto=format&fit=crop&w=2672&q=80"
                                alt="" class="absolute inset-0 h-full w-full object-cover" />
                        </div>

                        <div class="absolute inset-0 flex flex-col items-start justify-end p-6">
                            <h3 class="text-xl font-medium text-white">Skinny Jeans Blue</h3>
                            <p class="mt-1.5 text-xs text-pretty text-white">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos sequi dicta
                                impedit aperiam ipsum!
                            </p>
                            <a href="https://drive.google.com/your-file-link-here" target="_blank" rel="noopener noreferrer"
                                class="mt-3 inline-block bg-red-600 hover:bg-red-700 px-5 py-3 text-xs font-medium tracking-wide text-white uppercase rounded-lg">
                                Lihat Detail
                            </a>
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection