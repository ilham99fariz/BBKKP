@extends('layouts.app')

@section('title', 'Layanan LPH - BBSPJIKP')
@section('description', 'Layanan pemeriksaan dan audit kehalalan produk oleh LPH BBSPJIKP')

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
                            <span class="text-gray-300">{{ __('halal.layanan_breadcrumb') }}</span>
                        </div>
                    </li>
                </ol>
            </nav>

            <!-- Header Text -->
            <div class="text-center pt-14 sm:pt-2">
                <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">{{ __('halal.layanan_lph_title') }}</h1>
                <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                    {{ __('halal.layanan_lph_subtitle') }}
                </p>
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
        <div class="bg-white shadow-lg rounded-lg overflow-hidden p-8">
            <h1 class="text-xl md:text-4xl font-bold text-gray-900 mb-8">{{ __('halal.layanan_lph_title') }}</h1>

            <!-- RUANG LINGKUP PEMERIKSAAN -->
            <section class="mb-12">
                <h2 class="text-xl semi-bold mb-4">{{ __('halal.layanan_scope_title') }}</h2>
                <p class="text-gray-700 leading-relaxed text-justify">
                    {{ __('halal.layanan_scope_desc') }}
                </p>
            </section>

            <!-- PENGUJIAN PRODUK HALAL -->
            <section class="mb-12">
                <h2 class="text-xl semi-bold mb-4">{{ __('halal.layanan_testing_title') }}</h2>
                <p class="text-gray-700 leading-relaxed text-justify">
                    {{ __('halal.layanan_testing_desc') }}
                </p>

                <ul class="list-disc list-inside mt-3 text-gray-700 space-y-2">
                    <li>{{ __('halal.layanan_testing_item1') }}</li>
                    <li>{{ __('halal.layanan_testing_item2') }}</li>
                    <li>{{ __('halal.layanan_testing_item3') }}</li>
                </ul>
            </section>
        </div>
    </div>
    <!-- Atau Bisa Seperti Di Bawah Ini -->
    <script type="text/javascript" src="https://web.animemusic.us/widget_disabilitas.js"
        api-key-resvoice="bzbTAKXD"></script>
    <!-- ganti key api-key-resvoice dengan key yang ada di responsive voice-->
@endsection