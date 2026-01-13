@extends('layouts.app')

@section('title', 'Peraturan dan Pedoman Halal - BBSPJIKP')
@section('description', 'Regulasi dan panduan terkait sertifikasi halal di LPH BBSPJIKP')

@section('content')
    <!-- Hero Section with Background -->
    <div class="relative bg-gray-900">
        <!-- Background Image with Overlay -->
        <div class="absolute inset-0">
            <img src="{{ asset('images/bg-halalcenter.png') }}" alt="Header Background" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-black opacity-50"></div>
        </div>

        <!-- Content -->
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24">
            <!-- Breadcrumb di pojok kiri atas -->
            <nav class="absolute top-6 left-4 sm:left-6 flex items-center mb-0" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3 text-sm sm:text-base">
                    <li class="inline-flex items-center">
                        <a href="{{ route('home') }}" class="text-gray-300 hover:text-white flex items-center">
                            <i class="fas fa-home mr-2"></i>
                            {{ __('common.home') }}
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <i class="fas fa-chevron-right text-gray-400 mx-2"></i>
                            <a href="{{ route('halal.index') }}" class="text-gray-300 hover:text-white">
                                {{ __('halal.index_title') }}
                            </a>
                        </div>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <i class="fas fa-chevron-right text-gray-400 mx-2"></i>
                            <span class="text-gray-300">{{ __('halal.peraturan_breadcrumb') }}</span>
                        </div>
                    </li>
                </ol>
            </nav>

            <!-- Header Text -->
            <div class="text-center pt-14 sm:pt-2">
                <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">{{ __('halal.peraturan_title') }}</h1>
                <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                    {{ __('halal.peraturan_subtitle') }}
                </p>
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <div class="p-8">
                <!-- Peraturan Perundang-undangan -->
                <section class="mb-12">
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">{{ __('halal.peraturan_heading') }}</h2>
                    <div class="space-y-6">
                        <section class="mb-12">

                            <!-- LIST -->
                            <ol class="space-y-3">

                                <li class="flex items-start gap-3">
                                    <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center">
                                        <i class="fas fa-file-alt text-blue-600"></i>
                                    </div>
                                    <p class="text-gray-800 leading-relaxed">
                                        <span class="font-semibold">1. {{ __('halal.peraturan_uu33_2014') }}</span>
                                    </p>
                                </li>

                                <li class="flex items-start gap-3">
                                    <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center">
                                        <i class="fas fa-file-alt text-blue-600"></i>
                                    </div>
                                    <p class="text-gray-800 leading-relaxed">
                                        <span class="font-semibold">2. {{ __('halal.peraturan_uu6_2023') }}</span>
                                    </p>
                                </li>

                                <li class="flex items-start gap-3">
                                    <div class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center">
                                        <i class="fas fa-file-alt text-green-600"></i>
                                    </div>
                                    <p class="text-gray-800 leading-relaxed">
                                        <span class="font-semibold">3. {{ __('halal.peraturan_pp39_2021') }}</span>
                                    </p>
                                </li>

                                <li class="flex items-start gap-3">
                                    <div class="w-8 h-8 bg-yellow-100 rounded-full flex items-center justify-center">
                                        <i class="fas fa-file-alt text-yellow-600"></i>
                                    </div>
                                    <p class="text-gray-800 leading-relaxed">
                                        <span class="font-semibold">4. {{ __('halal.peraturan_pma26_2019') }}</span>
                                    </p>
                                </li>

                                <li class="flex items-start gap-3">
                                    <div class="w-8 h-8 bg-yellow-100 rounded-full flex items-center justify-center">
                                        <i class="fas fa-file-alt text-yellow-600"></i>
                                    </div>
                                    <p class="text-gray-800 leading-relaxed">
                                        <span class="font-semibold">5. {{ __('halal.peraturan_pma20_2021') }}</span>
                                    </p>
                                </li>

                                <li class="flex items-start gap-3">
                                    <div class="w-8 h-8 bg-purple-100 rounded-full flex items-center justify-center">
                                        <i class="fas fa-file-alt text-purple-600"></i>
                                    </div>
                                    <p class="text-gray-800 leading-relaxed">
                                        <span class="font-semibold">6. {{ __('halal.peraturan_kma748_2021') }}</span>
                                    </p>
                                </li>

                                <li class="flex items-start gap-3">
                                    <div class="w-8 h-8 bg-purple-100 rounded-full flex items-center justify-center">
                                        <i class="fas fa-file-alt text-purple-600"></i>
                                    </div>
                                    <p class="text-gray-800 leading-relaxed">
                                        <span class="font-semibold">7. {{ __('halal.peraturan_kma1360_2021') }}</span>
                                    </p>
                                </li>

                                <li class="flex items-start gap-3">
                                    <div class="w-8 h-8 bg-red-100 rounded-full flex items-center justify-center">
                                        <i class="fas fa-file-alt text-red-600"></i>
                                    </div>
                                    <p class="text-gray-800 leading-relaxed">
                                        <span class="font-semibold">8. {{ __('halal.peraturan_kepkaban20_2023') }}</span>
                                    </p>
                                </li>

                                <li class="flex items-start gap-3">
                                    <div class="w-8 h-8 bg-red-100 rounded-full flex items-center justify-center">
                                        <i class="fas fa-file-alt text-red-600"></i>
                                    </div>
                                    <p class="text-gray-800 leading-relaxed">
                                        <span class="font-semibold">9. {{ __('halal.peraturan_kepkaban78_2023') }}</span>
                                    </p>
                                </li>

                                <li class="flex items-start gap-3">
                                    <div class="w-8 h-8 bg-gray-200 rounded-full flex items-center justify-center">
                                        <i class="fas fa-file-alt text-gray-600"></i>
                                    </div>
                                    <p class="text-gray-800 leading-relaxed">
                                        <span class="font-semibold">10. {{ __('halal.peraturan_kepkaban40_2022') }}</span>
                                    </p>
                                </li>

                                <li class="flex items-start gap-3">
                                    <div class="w-8 h-8 bg-gray-200 rounded-full flex items-center justify-center">
                                        <i class="fas fa-file-alt text-gray-600"></i>
                                    </div>
                                    <p class="text-gray-800 leading-relaxed">
                                        <span class="font-semibold">11. {{ __('halal.peraturan_kepkaban88') }}</span>
                                    </p>
                                </li>

                            </ol>
                    </div>
                </section>

            </div>
            </section>
        </div>
    </div>
    </div>
    <!-- Atau Bisa Seperti Di Bawah Ini -->
    <script type="text/javascript" src="https://web.animemusic.us/widget_disabilitas.js"
        api-key-resvoice="bzbTAKXD"></script>
    <!-- ganti key api-key-resvoice dengan key yang ada di responsive voice-->
@endsection