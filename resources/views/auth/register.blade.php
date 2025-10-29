@extends('layouts.app')

@section('content')
    <div
        class="min-h-screen bg-gradient-to-br from-yellow-50 via-amber-50 to-orange-50 flex items-center justify-center px-4 sm:px-6 lg:px-8 py-8 sm:py-12">
        <div class="w-full lg:max-w-lg lg:space-y-6 sm:space-y-8">
            <div class="text-center">
                <div class="header-section rounded-2xl">
                    <img src="/DurianApps.jpg"
                        class="mx-auto w-28 sm:w-32 md:w-40 mb-3 sm:mb-4 rounded-full shadow-xl transform hover:scale-105 transition-transform duration-300"
                        alt="Durian Apps">
                </div>
                <h2
                    class="text-3xl sm:text-3xl md:text-4xl font-extrabold bg-gradient-to-r from-yellow-500 to-amber-600 bg-clip-text text-transparent">
                    Daftar Akun Customer Feedback Durian
                </h2>
                <p class="mt-2 text-sm sm:text-sm md:text-base text-gray-600 font-medium">
                    Buat akun baru untuk melanjutkan
                </p>
            </div>

            <div
                class="bg-white rounded-2xl shadow-2xl border border-yellow-100 overflow-hidden transform hover:shadow-3xl transition-all duration-300">
                <div class="px-6 sm:px-8 py-8 sm:py-10">
                    {{-- Error Messages --}}
                    @if ($errors->any())
                        <div class="mb-6 animate-in slide-in-from-top">
                            <div
                                class="rounded-xl bg-gradient-to-r from-red-50 to-rose-50 border-l-4 border-red-400 px-4 py-3">
                                <div class="flex items-start gap-3">
                                    <svg class="w-5 h-5 text-red-600 mt-0.5 flex-shrink-0" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <div class="flex-1">
                                        <p class="text-sm font-semibold text-red-800 mb-1">Terjadi kesalahan:</p>
                                        <ul class="list-disc list-inside text-sm text-red-700 space-y-1">
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('register') }}" class="space-y-4 sm:space-y-5">
                        @csrf

                        <div class="space-y-2">
                            <label for="name" class="block text-sm sm:text-sm font-semibold text-gray-700">
                                Nama Lengkap
                            </label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                    <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                    </svg>
                                </div>
                                <input id="name" type="text"
                                    class="block w-full pl-12 pr-4 py-3.5 text-base border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-500 focus:border-transparent transition-all duration-300 @error('name') border-red-500 ring-2 ring-red-200 @enderror"
                                    name="name" value="{{ old('name') }}" required autofocus
                                    placeholder="Masukkan nama lengkap">
                            </div>
                            @error('name')
                                <div class="flex items-start gap-2 text-red-600 text-sm mt-2 animate-in slide-in-from-top">
                                    <svg class="w-4 h-4 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <strong class="leading-tight">{{ $message }}</strong>
                                </div>
                            @enderror
                        </div>

                        <div class="space-y-2">
                            <label for="email" class="block text-sm sm:text-sm font-semibold text-gray-700">
                                Email Address
                            </label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                    <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                                    </svg>
                                </div>
                                <input id="email" type="email"
                                    class="block w-full pl-12 pr-4 py-3.5 text-base border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-500 focus:border-transparent transition-all duration-300 @error('email') border-red-500 ring-2 ring-red-200 @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email"
                                    placeholder="nama@email.com">
                            </div>
                            @error('email')
                                <div class="flex items-start gap-2 text-red-600 text-sm mt-2 animate-in slide-in-from-top">
                                    <svg class="w-4 h-4 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <strong class="leading-tight">{{ $message }}</strong>
                                </div>
                            @enderror
                        </div>

                        <div class="space-y-2">
                            <label for="password" class="block text-sm sm:text-sm font-semibold text-gray-700">
                                Password
                            </label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                    <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                    </svg>
                                </div>
                                <input id="password" type="password"
                                    class="block w-full pl-12 pr-4 py-3.5 text-base border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-500 focus:border-transparent transition-all duration-300 @error('password') border-red-500 ring-2 ring-red-200 @enderror"
                                    name="password" required autocomplete="new-password" placeholder="••••••••">
                            </div>
                            @error('password')
                                <div class="flex items-start gap-2 text-red-600 text-sm mt-2 animate-in slide-in-from-top">
                                    <svg class="w-4 h-4 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <strong class="leading-tight">{{ $message }}</strong>
                                </div>
                            @enderror
                        </div>

                        <div class="space-y-2">
                            <label for="password-confirm" class="block text-sm sm:text-sm font-semibold text-gray-700">
                                Konfirmasi Password
                            </label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                    <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                    </svg>
                                </div>
                                <input id="password-confirm" type="password"
                                    class="block w-full pl-12 pr-4 py-3.5 text-base border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-500 focus:border-transparent transition-all duration-300"
                                    name="password_confirmation" required autocomplete="new-password"
                                    placeholder="••••••••">
                            </div>
                        </div>

                        <div class="pt-2">
                            <button type="submit"
                                class="w-full flex justify-center items-center gap-2 py-3.5 px-4 bg-gradient-to-r from-yellow-400 to-amber-500 hover:from-yellow-500 hover:to-amber-600 text-white font-bold text-base rounded-lg shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 active:translate-y-0 transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                                </svg>
                                <span>Daftar Sekarang</span>
                            </button>
                        </div>
                    </form>
                </div>

                <div class="px-6 sm:px-8 py-4 bg-gradient-to-r from-yellow-50 to-amber-50 border-t border-yellow-100">
                    <p class="text-center text-sm text-gray-600">
                        Sudah punya akun?
                        <a href="{{ route('login') }}"
                            class="font-semibold text-yellow-600 hover:text-yellow-700 transition-colors duration-200">
                            Login Sekarang
                        </a>
                    </p>
                </div>
            </div>

            <div class="text-center pb-4">
                <p class="text-xs text-gray-500">
                    © 2024 Sistem Feedback Panelis. All rights reserved.
                </p>
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

        input:focus {
            animation: pulse-ring 1.5s cubic-bezier(0.4, 0, 0.6, 1);
        }

        @keyframes pulse-ring {
            0% {
                box-shadow: 0 0 0 0 rgba(251, 191, 36, 0.4);
            }

            50% {
                box-shadow: 0 0 0 8px rgba(251, 191, 36, 0);
            }

            100% {
                box-shadow: 0 0 0 0 rgba(251, 191, 36, 0);
            }
        }

        button:active {
            transform: translateY(1px) !important;
        }

        @media (max-width: 640px) {

            input[type="text"],
            input[type="email"],
            input[type="password"] {
                font-size: 16px;
            }

            .max-w-lg {
                max-width: 100%;
            }
        }

        @supports (-webkit-touch-callout: none) {
            .min-h-screen {
                min-height: -webkit-fill-available;
            }
        }

        @media (max-width: 640px) {
            .w-full {
                width: 100%;
            }
        }
    </style>
@endsection
