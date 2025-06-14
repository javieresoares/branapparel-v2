@extends('layouts.app')

@section('content')
    @php
        // Contoh data FAQ langsung di view (hardcoded)
        $faqData = [
            [
                'category' => 'Umum',
                'questions' => [
                    [
                        'question' => 'Apa itu FAQ?',
                        'answer' => 'FAQ adalah daftar pertanyaan yang sering diajukan oleh pengguna.'
                    ],
                    [
                        'question' => 'Bagaimana cara menggunakan website ini?',
                        'answer' => 'Kamu dapat menjelajahi menu di atas untuk melihat konten yang tersedia.'
                    ],
                ],
            ],
            [
                'category' => 'Teknis',
                'questions' => [
                    [
                        'question' => 'Bagaimana cara reset password?',
                        'answer' => 'Klik tombol lupa password dan ikuti instruksi yang diberikan.'
                    ],
                    [
                        'question' => 'Apakah website ini mendukung mobile?',
                        'answer' => 'Ya, website ini sudah responsif dan dapat digunakan di perangkat mobile.'
                    ],
                ],
            ],
        ];
    @endphp

    <div class="min-h-screen flex">
        {{-- Sidebar Kiri --}}
        <aside
            class="w-full md:w-2/5 bg-gray-100 p-4 sticky top-0 h-screen overflow-y-auto flex flex-col items-center justify-center flex-shrink-0">
            <div class="space-y-4 text-left px-6 sm:px-12 lg:px-24">
                <h2 class="text-4xl font-bold text-red-700 mb-10">
                    Pertanyaan yang <br /> Sering Diajukan
                </h2>
                <ul class="space-y-3 font-semibold text-lg">
                    @foreach ($faqData as $item)
                        <li class="hover:text-red-500 cursor-pointer">
                            {{ $item['category'] }}
                        </li>
                    @endforeach
                </ul>
                <div class="text-sm mt-6">
                    Butuh jawaban lebih lanjut? <br />
                    Silakan kirim pesan ke kami melalui
                    <a href="{{ route('kontak-kami') }}" class="text-red-900 underline">halaman kontak</a>.
                </div>
            </div>
        </aside>

        {{-- Konten FAQ Kanan --}}
        <main class="w-full md:w-3/5 p-8 overflow-y-auto">
            <div class="max-w-2xl mx-auto space-y-8">
                @foreach ($faqData as $item)
                    <div class="space-y-3">
                        <h2 class="text-xl font-semibold text-gray-800">{{ $item['category'] }}</h2>
                        @foreach ($item['questions'] as $qna)
                            <details class="group border-b border-gray-300 pb-2">
                                <summary
                                    class="flex items-center justify-between font-medium text-lg text-gray-900 cursor-pointer py-2 hover:text-red-500 transition-colors duration-200">
                                    {{ $qna['question'] }}
                                    <svg class="w-4 h-4 ml-2 transition-transform duration-300 group-open:-rotate-180"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                    </svg>
                                </summary>
                                <p class="text-lg text-gray-800 pl-1 pr-4 mt-1">
                                    {{ $qna['answer'] }}
                                </p>
                            </details>
                        @endforeach
                    </div>
                @endforeach
            </div>
        </main>
    </div>
@endsection