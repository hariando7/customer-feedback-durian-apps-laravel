@extends('layouts.app')

@section('content')
    <div class="min-h-screen bg-gradient-to-br from-yellow-50 to-amber-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6 sm:py-12">
            {{-- Header Section --}}
            <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 sm:gap-0 mb-8">
                <a href="{{ route('feedback.create') }}"
                    class="inline-flex items-center gap-2 bg-gradient-to-r from-yellow-400 to-yellow-500 hover:from-yellow-500 hover:to-yellow-600 text-white font-semibold px-4 sm:px-5 py-2 sm:py-3 rounded-lg shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-0.5 text-sm sm:text-base">
                    <span class="text-lg">+</span>
                    <span>Input Feedback</span>
                </a>
                <h1
                    class="text-2xl sm:text-4xl font-bold bg-gradient-to-r from-yellow-500 to-amber-600 bg-clip-text text-transparent order-first sm:order-none w-full sm:w-auto text-center sm:text-left">
                    Daftar Feedback Panelis
                </h1>
                <div class="hidden lg:block w-32"></div>
            </div>

            {{-- Cards Section --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6 mb-8">
                {{-- Total Feedback --}}
                <div
                    class="bg-white rounded-2xl p-6 sm:p-7 shadow-lg hover:shadow-xl transition-all duration-300 border-l-4 border-yellow-500">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-600 text-xs sm:text-sm font-medium uppercase tracking-wide">Total Feedback
                            </p>
                            <p class="text-2xl sm:text-3xl font-bold text-yellow-600 mt-3">{{ $feedbacks->count() }}</p>
                        </div>
                        <div class="bg-yellow-100 rounded-full p-3 sm:p-4">
                            <svg class="w-6 h-6 sm:w-8 sm:h-8 text-yellow-600" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                    </div>
                </div>

                {{-- Score --}}
                <div
                    class="bg-white rounded-2xl p-6 sm:p-7 shadow-lg hover:shadow-xl transition-all duration-300 border-l-4 border-amber-500">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-600 text-xs sm:text-sm font-medium uppercase tracking-wide">Rata-rata Skor
                            </p>
                            <p
                                class="text-2xl sm:text-3xl font-bold bg-gradient-to-r from-yellow-500 to-amber-600 bg-clip-text text-transparent mt-3">
                                {{ number_format($feedbacks->avg('total_score'), 1) }}
                            </p>
                        </div>
                        <div class="bg-amber-100 rounded-full p-3 sm:p-4">
                            <svg class="w-6 h-6 sm:w-8 sm:h-8 text-amber-600" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                        </div>
                    </div>
                </div>

                {{-- Highest Score --}}
                <div
                    class="bg-white rounded-2xl p-6 sm:p-7 shadow-lg hover:shadow-xl transition-all duration-300 border-l-4 border-orange-500 sm:col-span-2 lg:col-span-1">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-600 text-xs sm:text-sm font-medium uppercase tracking-wide">Skor Tertinggi
                            </p>
                            <p class="text-2xl sm:text-3xl font-bold text-orange-600 mt-3">
                                {{ $feedbacks->max('total_score') ?? '-' }}</p>
                        </div>
                        <div class="bg-orange-100 rounded-full p-3 sm:p-4">
                            <svg class="w-6 h-6 sm:w-8 sm:h-8 text-orange-600" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Success Alert --}}
            @if (session('success'))
                <div class="mb-6 animate-in slide-in-from-top duration-500">
                    <div
                        class="rounded-2xl bg-gradient-to-r from-emerald-50 to-teal-50 text-emerald-800 px-4 sm:px-6 py-3 sm:py-4 border-l-4 border-emerald-400 shadow-lg">
                        <div class="flex items-center gap-3">
                            <svg class="w-5 h-5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="font-semibold text-sm sm:text-base">{{ session('success') }}</span>
                        </div>
                    </div>
                </div>
            @endif

            {{-- Table Section --}}
            <div class="rounded-2xl overflow-hidden border border-yellow-200 shadow-2xl bg-white">
                <div class="overflow-x-auto">
                    <table class="w-full divide-y divide-gray-200">
                        <thead class="bg-gradient-to-r from-yellow-500 to-amber-500">
                            <tr>
                                <th
                                    class="px-3 sm:px-6 py-3 sm:py-4 text-left text-xs font-bold text-white uppercase tracking-wider">
                                    #</th>
                                <th
                                    class="px-3 sm:px-6 py-3 sm:py-4 text-left text-xs font-bold text-white uppercase tracking-wider">
                                    Panelis</th>
                                <th
                                    class="px-3 sm:px-6 py-3 sm:py-4 text-left text-xs font-bold text-white uppercase tracking-wider hidden sm:table-cell">
                                    QR Code</th>
                                <th
                                    class="px-3 sm:px-6 py-3 sm:py-4 text-left text-xs font-bold text-white uppercase tracking-wider">
                                    Skor</th>
                                <th
                                    class="px-3 sm:px-6 py-3 sm:py-4 text-left text-xs font-bold text-white uppercase tracking-wider hidden md:table-cell">
                                    Tanggal</th>
                                <th
                                    class="px-3 sm:px-6 py-3 sm:py-4 text-left text-xs font-bold text-white uppercase tracking-wider hidden md:table-cell">
                                    Update</th>
                                <th
                                    class="px-3 sm:px-6 py-3 sm:py-4 text-center text-xs font-bold text-white uppercase tracking-wider">
                                    Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100">
                            @forelse ($feedbacks as $i => $item)
                                <tr
                                    class="group hover:bg-gradient-to-r hover:from-yellow-50 hover:to-amber-50 transition-all duration-300 hover:shadow-sm">
                                    <td class="px-3 sm:px-6 py-3 sm:py-4 text-xs sm:text-sm font-semibold text-gray-500">
                                        {{ $i + 1 }}</td>
                                    <td
                                        class="px-3 sm:px-6 py-3 sm:py-4 text-xs sm:text-sm font-semibold text-gray-900 group-hover:text-yellow-700 transition-colors">
                                        {{ $item->panelist_name ?? '-' }}
                                    </td>
                                    <td
                                        class="px-3 sm:px-6 py-3 sm:py-4 text-xs font-mono font-bold text-yellow-600 tracking-wider hidden sm:table-cell">
                                        {{ $item->qr_code }}
                                    </td>
                                    <td class="px-3 sm:px-6 py-3 sm:py-4">
                                        <span
                                            class="inline-flex items-center gap-1 px-2 sm:px-3 py-1 bg-gradient-to-r from-yellow-500 to-amber-500 bg-clip-text text-transparent font-bold text-sm sm:text-base">
                                            <svg class="w-3 h-3 sm:w-4 sm:h-4 text-yellow-500 flex-shrink-0"
                                                fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                            {{ $item->total_score }}
                                        </span>
                                    </td>
                                    <td
                                        class="px-3 sm:px-6 py-3 sm:py-4 text-xs sm:text-sm text-gray-600 hidden md:table-cell">
                                        {{ $item->created_at->format('d M Y H:i') }}
                                    </td>
                                    <td
                                        class="px-3 sm:px-6 py-3 sm:py-4 text-xs sm:text-sm text-gray-600 hidden md:table-cell">
                                        {{ $item->updated_at->format('d M Y H:i') }}
                                    </td>
                                    <td class="px-3 sm:px-6 py-3 sm:py-4 text-center">
                                        <a href="{{ route('feedback.show', $item->id) }}"
                                            class="inline-flex items-center gap-1 sm:gap-2 px-2 sm:px-4 py-1.5 sm:py-2 bg-gradient-to-r from-yellow-500 to-amber-500 hover:from-yellow-600 hover:to-amber-600 text-white text-xs sm:text-sm font-semibold rounded-lg shadow-md hover:shadow-lg transition-all duration-300 hover:-translate-y-0.5">
                                            <svg class="w-3 h-3 sm:w-4 sm:h-4" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                            </svg>
                                            <span class="hidden sm:inline">Detail</span>
                                            <span class="sm:hidden">Lihat</span>
                                        </a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="px-4 sm:px-6 py-12 sm:py-16 text-center">
                                        <div class="flex flex-col items-center justify-center gap-3 sm:gap-4">
                                            <svg class="w-12 h-12 sm:w-16 sm:h-16 text-gray-300" fill="none"
                                                stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                                    d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                                            </svg>
                                            <p class="text-gray-500 font-semibold text-base sm:text-lg">Tidak ada data
                                                feedback panelis.</p>
                                            <p class="text-gray-400 text-xs sm:text-sm">Mulai dengan membuat feedback baru
                                            </p>
                                        </div>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <style>
        @keyframes slide-in-from-top {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-in {
            animation: slide-in-from-top 0.5s cubic-bezier(0.34, 1.56, 0.64, 1);
        }

        .bg-clip-text {
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        /* Mobile layout */
        @media (max-width: 640px) {
            table {
                font-size: 0.875rem;
            }

            th,
            td {
                padding: 0.75rem 0.5rem;
            }
        }
    </style>
@endsection
