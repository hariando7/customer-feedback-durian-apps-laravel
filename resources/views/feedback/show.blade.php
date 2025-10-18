@extends('layouts.app')

@section('content')
    <div class="min-h-screen bg-gradient-to-br from-yellow-50 to-amber-50">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-6 sm:py-12">
            {{-- Back Button --}}
            <a href="{{ route('feedback.index') }}"
                class="inline-flex items-center gap-2 mb-6 sm:mb-8 px-4 sm:px-5 py-2 sm:py-3 bg-gradient-to-r from-yellow-400 to-yellow-500 hover:from-yellow-500 hover:to-yellow-600 text-white font-semibold rounded-lg shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-0.5 text-sm sm:text-base">
                <span class="text-lg">←</span>
                <span>Kembali</span>
            </a>

            {{-- Page Title --}}
            <h1
                class="text-3xl sm:text-4xl lg:text-5xl font-bold bg-gradient-to-r from-yellow-500 to-amber-600 bg-clip-text text-transparent mb-6 sm:mb-8">
                Detail Feedback
            </h1>

            {{-- Main Info Card --}}
            <div class="rounded-2xl sm:rounded-3xl overflow-hidden border border-yellow-200 shadow-2xl mb-8 sm:mb-12">
                {{-- Header with Panelist Name --}}
                <div class="bg-gradient-to-r from-yellow-500 via-yellow-400 to-amber-500 px-6 sm:px-8 py-6 sm:py-8">
                    <div class="flex flex-col sm:flex-row items-start sm:items-center gap-3 sm:gap-4">
                        <div class="bg-white/20 backdrop-blur-sm rounded-full p-2 sm:p-3">
                            <svg class="w-6 h-6 sm:w-8 sm:h-8 text-white" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-white/80 text-xs sm:text-sm font-semibold uppercase tracking-wide">Panelis</p>
                            <h2 class="text-xl sm:text-2xl lg:text-3xl font-bold text-white break-words">
                                {{ $feedback->panelist_name ?? 'Unknown' }}</h2>
                        </div>
                    </div>
                </div>

                {{-- Info Grid --}}
                <div class="bg-white p-6 sm:p-8 lg:p-10">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-8">
                        {{-- QR Code --}}
                        <div
                            class="bg-gradient-to-br from-yellow-50 to-amber-50 rounded-lg sm:rounded-xl p-4 sm:p-6 border border-yellow-100">
                            <div class="flex items-center gap-2 sm:gap-3 mb-2 sm:mb-3">
                                <div class="bg-yellow-200 rounded-lg p-1.5 sm:p-2">
                                    <svg class="w-4 h-4 sm:w-5 sm:h-5 text-yellow-700" fill="currentColor"
                                        viewBox="0 0 24 24">
                                        <path d="M3 3h8v8H3V3zm10 0h8v8h-8V3zM3 13h8v8H3v-8zm10 0h8v8h-8v-8z" />
                                    </svg>
                                </div>
                                <label class="text-xs font-bold text-gray-600 uppercase tracking-wider">QR Code</label>
                            </div>
                            <code
                                class="font-mono text-base sm:text-lg font-bold text-yellow-700 tracking-widest block break-all">{{ $feedback->qr_code }}</code>
                        </div>

                        {{-- Total Score --}}
                        <div
                            class="bg-gradient-to-br from-yellow-50 to-amber-50 rounded-lg sm:rounded-xl p-4 sm:p-6 border border-yellow-100">
                            <div class="flex items-center gap-2 sm:gap-3 mb-2 sm:mb-3">
                                <div class="bg-yellow-200 rounded-lg p-1.5 sm:p-2">
                                    <svg class="w-4 h-4 sm:w-5 sm:h-5 text-yellow-700" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                </div>
                                <label class="text-xs font-bold text-gray-600 uppercase tracking-wider">Total Skor</label>
                            </div>
                            <span
                                class="text-2xl sm:text-3xl lg:text-4xl font-bold bg-gradient-to-r from-yellow-500 to-amber-600 bg-clip-text text-transparent">{{ $feedback->total_score }}</span>
                        </div>

                        {{-- Date Input --}}
                        <div
                            class="bg-gradient-to-br from-blue-50 to-cyan-50 rounded-lg sm:rounded-xl p-4 sm:p-6 border border-blue-100">
                            <div class="flex items-center gap-2 sm:gap-3 mb-2 sm:mb-3">
                                <div class="bg-blue-200 rounded-lg p-1.5 sm:p-2">
                                    <svg class="w-4 h-4 sm:w-5 sm:h-5 text-blue-700" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                </div>
                                <label class="text-xs font-bold text-gray-600 uppercase tracking-wider">Tanggal</label>
                            </div>
                            <p class="font-semibold text-gray-800 text-sm sm:text-base">
                                {{ $feedback->created_at->format('d M Y') }}</p>
                            <p class="text-xs sm:text-sm text-gray-600">{{ $feedback->created_at->format('H:i') }} WIB</p>
                        </div>

                        {{-- Catatan --}}
                        <div
                            class="bg-gradient-to-br from-purple-50 to-pink-50 rounded-lg sm:rounded-xl p-4 sm:p-6 border border-purple-100">
                            <div class="flex items-center gap-2 sm:gap-3 mb-2 sm:mb-3">
                                <div class="bg-purple-200 rounded-lg p-1.5 sm:p-2">
                                    <svg class="w-4 h-4 sm:w-5 sm:h-5 text-purple-700" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                    </svg>
                                </div>
                                <label class="text-xs font-bold text-gray-600 uppercase tracking-wider">Catatan</label>
                            </div>
                            <p class="text-gray-700 text-sm sm:text-base leading-relaxed">
                                {{ $feedback->note ?? 'Tidak ada catatan' }}</p>
                        </div>
                    </div>

                    {{-- Scoring Details Section --}}
                    @php
                        $scores = [
                            'color' => 'Warna',
                            'aroma' => 'Aroma',
                            'texture_creamy' => 'Tekstur Creamy',
                            'texture_smooth' => 'Tekstur Smooth',
                            'sweet' => 'Manis',
                            'bitter' => 'Pahit',
                            'alcohol' => 'Alkohol',
                        ];
                    @endphp

                    <div class="mt-6 sm:mt-10 pt-6 sm:pt-10 border-t-2 border-gray-100">
                        <h3 class="text-lg sm:text-2xl font-bold text-gray-900 mb-4 sm:mb-6">Detail Penilaian</h3>
                        <div class="grid grid-cols-2 lg:grid-cols-4 gap-3 sm:gap-4">
                            @foreach ($scores as $key => $label)
                                <div
                                    class="bg-gradient-to-br from-yellow-50 to-amber-50 rounded-lg p-3 sm:p-4 border border-yellow-100 text-center">
                                    <p class="text-xs font-semibold text-gray-600 uppercase mb-2">{{ $label }}</p>
                                    <p class="text-2xl sm:text-3xl font-bold text-yellow-600">{{ $feedback->$key ?? '-' }}
                                    </p>
                                    <div class="mt-2 h-1 bg-gray-200 rounded-full overflow-hidden">
                                        <div class="h-full bg-gradient-to-r from-yellow-400 to-amber-500 rounded-full"
                                            style="width: {{ ($feedback->$key ?? 0) * 14.28 }}%"></div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            {{-- Photos Section --}}
            <div>
                <div class="flex items-center gap-3 sm:gap-4 mb-6 sm:mb-8">
                    <div class="bg-gradient-to-r from-yellow-500 to-amber-500 rounded-full p-2 sm:p-3">
                        <svg class="w-5 h-5 sm:w-7 sm:h-7 text-white" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl sm:text-3xl font-bold text-gray-900">Foto Hasil Feedback</h3>
                </div>

                @if ($feedback->photos && $feedback->photos->count() > 0)
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6 lg:gap-8">
                        @foreach ($feedback->photos as $photo)
                            <div
                                class="group relative rounded-xl sm:rounded-2xl overflow-hidden border-2 border-yellow-200 shadow-xl hover:shadow-2xl transition-all duration-300">
                                <div class="relative h-48 sm:h-64 lg:h-72 overflow-hidden bg-gray-200">
                                    <img src="{{ asset($photo->photo_path) }}" alt="Foto Feedback"
                                        class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                                </div>
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end justify-center pb-4 sm:pb-6">
                                    <a href="{{ asset($photo->photo_path) }}" target="_blank" rel="noopener noreferrer"
                                        class="inline-flex items-center gap-2 px-4 sm:px-6 py-2 sm:py-3 bg-white rounded-full font-semibold text-yellow-600 hover:bg-yellow-50 transition-all duration-300 shadow-lg hover:shadow-xl text-sm sm:text-base">
                                        <svg class="w-4 h-4 sm:w-5 sm:h-5" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                        </svg>
                                        <span>Lihat</span>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <div
                        class="rounded-xl sm:rounded-2xl border-3 border-dashed border-gray-300 bg-gradient-to-br from-gray-50 to-gray-100 p-8 sm:p-12 lg:p-16 text-center">
                        <div class="flex justify-center mb-3 sm:mb-4">
                            <div class="bg-gray-200 rounded-full p-3 sm:p-4">
                                <svg class="w-10 h-10 sm:w-12 sm:h-12 text-gray-400" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                            </div>
                        </div>
                        <p class="text-gray-600 font-semibold text-base sm:text-lg">Tidak ada foto untuk feedback ini.</p>
                        <p class="text-gray-500 text-xs sm:text-sm mt-2">Foto feedback akan ditampilkan di sini</p>
                    </div>
                @endif
            </div>
        </div>
    </div>

    <style>
        .bg-clip-text {
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        /* Mobile optimizations */
        @media (max-width: 640px) {
            body {
                font-size: 0.9375rem;
            }
        }

        @media (max-width: 768px) {

            h1,
            h2,
            h3 {
                word-break: break-word;
            }
        }
    </style>
@endsection
