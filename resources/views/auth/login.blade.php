@extends('layouts.app')

@section('content')
    <div
        class="min-h-screen bg-gradient-to-br from-yellow-50 via-amber-50 to-orange-50 flex items-center justify-center px-4 sm:px-6 lg:px-8 py-8 sm:py-12">
        <div class="w-full lg:max-w-lg lg:space-y-6 sm:space-y-8">
            {{-- Header Section --}}
            <div class="text-center">
                <div class="header-section rounded-2xl">
                    <img src="/DurianApps.jpg"
                        class="mx-auto w-28 sm:w-32 md:w-40 mb-3 sm:mb-4 rounded-full shadow-xl transform hover:scale-105 transition-transform duration-300"
                        alt="Durian Apps">
                </div>
                <h2
                    class="text-3xl sm:text-3xl md:text-4xl font-extrabold bg-gradient-to-r from-yellow-500 to-amber-600 bg-clip-text text-transparent">
                    Selamat Datang di Customer Feedback Durian
                </h2>
                <p class="mt-2 text-sm sm:text-sm md:text-base text-gray-600 font-medium">
                    Silakan login untuk melanjutkan
                </p>
            </div>

            {{-- Login Card --}}
            <div
                class="bg-white rounded-2xl shadow-2xl border border-yellow-100 overflow-hidden transform hover:shadow-3xl transition-all duration-300">
                <div class="px-6 sm:px-8 py-8 sm:py-10">
                    <form method="POST" action="{{ route('login') }}" class="space-y-5 sm:space-y-6">
                        @csrf

                        {{-- Email Field --}}
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
                                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
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

                        {{-- Password Field --}}
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
                                    name="password" required autocomplete="current-password" placeholder="••••••••">
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

                        {{-- Remember Me & Forgot Password --}}
                        {{-- <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-3 sm:gap-0">
                            <div class="flex items-center">
                                <input id="remember" name="remember" type="checkbox"
                                    class="h-4 w-4 text-yellow-500 focus:ring-yellow-500 border-gray-300 rounded cursor-pointer transition-all duration-200"
                                    {{ old('remember') ? 'checked' : '' }}>
                                <label for="remember"
                                    class="ml-2 block text-sm text-gray-700 font-medium cursor-pointer select-none">
                                    Ingat Saya
                                </label>
                            </div>

                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}"
                                    class="text-sm font-semibold text-yellow-600 hover:text-yellow-700 transition-colors duration-200">
                                    Lupa Password?
                                </a>
                            @endif
                        </div> --}}

                        {{-- Login Button --}}
                        <div class="pt-2">
                            <button type="submit"
                                class="w-full flex justify-center items-center gap-2 py-3.5 px-4 bg-gradient-to-r from-yellow-400 to-amber-500 hover:from-yellow-500 hover:to-amber-600 text-white font-bold text-base rounded-lg shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 active:translate-y-0 transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
                                </svg>
                                <span>Masuk</span>
                            </button>
                        </div>
                    </form>
                </div>

                {{-- Footer Section --}}
                <div class="px-6 sm:px-8 py-4 bg-gradient-to-r from-yellow-50 to-amber-50 border-t border-yellow-100">
                    <p class="text-center text-sm text-gray-600">
                        Belum punya akun?
                        <a href="{{ route('register') }}"
                            class="font-semibold text-yellow-600 hover:text-yellow-700 transition-colors duration-200">
                            Daftar Sekarang
                        </a>
                    </p>
                </div>
            </div>

            {{-- Additional Info --}}
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

        /* Smooth focus effect */
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

        /* Button press effect */
        button:active {
            transform: translateY(1px) !important;
        }

        /* Mobile optimization - larger size */
        @media (max-width: 640px) {

            /* Prevent zoom on input focus for iOS but keep readable size */
            input[type="email"],
            input[type="password"] {
                font-size: 16px;
            }

            /* Make container wider on mobile */
            .max-w-lg {
                max-width: 100%;
            }
        }

        /* Fix for iOS Safari bottom spacing */
        @supports (-webkit-touch-callout: none) {
            .min-h-screen {
                min-height: -webkit-fill-available;
            }
        }

        /* Ensure full width usage on mobile */
        @media (max-width: 640px) {
            .w-full {
                width: 100%;
            }
        }
    </style>
@endsection
