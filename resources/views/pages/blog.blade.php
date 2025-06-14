@extends('layouts.app')

@section('content')<section class="pt-16">
        <div class="w-full px-6 sm:px-12 lg:px-24">
            <div class="min-h-screen max-w-screen-xl mx-auto flex item-center">
                <div>

                    {{-- Artikel Utama --}}
                    <div class="relative mb-16 overflow-hidden shadow-lg">
                        <img alt="Creating calming spaces through design" src="/assets/home1.jpg"
                            class="absolute inset-0 h-full w-full object-cover" />
                        <div class="relative bg-gradient-to-t from-black/70 to-black/30 pt-56 sm:pt-72 lg:pt-[400px]">
                            <div class="p-6 sm:p-8">
                                <time datetime="2024-06-21" class="block text-sm text-white/80">
                                    21 Jun 2024
                                </time>
                                <h2 class="mt-2 text-3xl font-bold text-white">
                                    Creating calming spaces through design
                                </h2>
                                <p class="mt-4 max-w-2xl text-base text-white/95">
                                    Veniam, at suscipit! Magnam dignissimos porro rerum ab natus tempore beatae cum
                                    provident,
                                    optio hic nulla esse quasi ea rem tempora ut officiis facilis.
                                </p>
                                <a href="#"
                                    class="mt-4 inline-block text-sm font-medium text-blue-300 underline hover:text-blue-400">
                                    Selengkapnya &rarr;
                                </a>
                            </div>
                        </div>
                    </div>

                    {{-- Artikel Terkini --}}
                    <div>
                        <h2 class="mb-6 text-2xl font-semibold text-gray-800 dark:text-white">Artikel Terkini</h2>
                        <div class="grid gap-8 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3">

                            {{-- Artikel 1 --}}
                            <article
                                class="overflow-hidden border border-gray-100 bg-white shadow-xs dark:border-gray-800 dark:bg-gray-900 dark:shadow-gray-700/25">
                                <img src="/assets/home2.jpg" alt="How to position your furniture for positivity"
                                    class="h-56 w-full object-cover" />
                                <div class="p-4 sm:p-6">
                                    <a href="#">
                                        <h3 class="text-lg font-medium text-gray-900 dark:text-white">
                                            How to position your furniture for positivity
                                        </h3>
                                    </a>
                                    <p class="mt-2 line-clamp-3 text-sm/relaxed text-gray-500 dark:text-gray-400">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae dolores,
                                        possimus pariatur animi temporibus nesciunt praesentium dolore sed nulla...
                                    </p>
                                    <a href="#"
                                        class="group mt-4 inline-flex items-center gap-1 text-sm font-medium text-blue-600">
                                        Find out more
                                        <span aria-hidden="true"
                                            class="block transition-all group-hover:ms-0.5 rtl:rotate-180">
                                            &rarr;
                                        </span>
                                    </a>
                                </div>
                            </article>

                            {{-- Artikel 2 --}}
                            <article
                                class="overflow-hidden border border-gray-100 bg-white shadow-xs dark:border-gray-800 dark:bg-gray-900 dark:shadow-gray-700/25">
                                <img src="/assets/home3.jpg" alt="Maximize small spaces with smart storage"
                                    class="h-56 w-full object-cover" />
                                <div class="p-4 sm:p-6">
                                    <a href="#">
                                        <h3 class="text-lg font-medium text-gray-900 dark:text-white">
                                            Maximize small spaces with smart storage
                                        </h3>
                                    </a>
                                    <p class="mt-2 line-clamp-3 text-sm/relaxed text-gray-500 dark:text-gray-400">
                                        Fugiat enim accusantium quaerat aliquid ipsa, nobis saepe, maiores repellat expedita
                                        libero nemo optio, placeat sunt iure...
                                    </p>
                                    <a href="#"
                                        class="group mt-4 inline-flex items-center gap-1 text-sm font-medium text-blue-600">
                                        Find out more
                                        <span aria-hidden="true"
                                            class="block transition-all group-hover:ms-0.5 rtl:rotate-180">
                                            &rarr;
                                        </span>
                                    </a>
                                </div>
                            </article>

                            {{-- Artikel 3 --}}
                            <article
                                class="overflow-hidden border border-gray-100 bg-white shadow-xs dark:border-gray-800 dark:bg-gray-900 dark:shadow-gray-700/25">
                                <img src="/assets/home1.jpg" alt="Creating a minimalist home office"
                                    class="h-56 w-full object-cover" />
                                <div class="p-4 sm:p-6">
                                    <a href="#">
                                        <h3 class="text-lg font-medium text-gray-900 dark:text-white">
                                            Creating a minimalist home office
                                        </h3>
                                    </a>
                                    <p class="mt-2 line-clamp-3 text-sm/relaxed text-gray-500 dark:text-gray-400">
                                        Create a balanced and inspiring workspace by adopting minimalistic design
                                        principles. This helps you focus on productivity...
                                    </p>
                                    <a href="#"
                                        class="group mt-4 inline-flex items-center gap-1 text-sm font-medium text-blue-600">
                                        Find out more
                                        <span aria-hidden="true"
                                            class="block transition-all group-hover:ms-0.5 rtl:rotate-180">
                                            &rarr;
                                        </span>
                                    </a>
                                </div>
                            </article>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection