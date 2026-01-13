@extends('layouts.app')

@section('title', 'Tentang LPH - BBSPJIKP')
@section('description', 'Informasi mengenai Lembaga Pemeriksa Halal BBSPJIKP')

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
                                {{ __('halal.breadcrumb_halal_center') }}
                            </a>
                        </div>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <i class="fas fa-chevron-right text-gray-400 mx-2"></i>
                            <span class="text-gray-300">{{ __('halal.breadcrumb_about_lph') }}</span>
                        </div>
                    </li>
                </ol>
            </nav>

            <!-- Header Text -->
            <div class="text-center pt-14 sm:pt-2">
                <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">{{ __('halal.hero_title') }}</h1>
                <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                    {{ __('halal.hero_subtitle') }}
                </p>
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-6 py-6">
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <div class="p-8">
                <!-- Profil Section -->
                <section class="mb-12">
                    <h2 class="text-3xl font-bold text-gray-900 mb-4">{{ __('halal.heading_lph') }}</h2>
                    <div class="prose max-w-none">
                        <p class="text-lg text-gray-600 mb-6 text-justify">
                            {{ __('halal.paragraph_1') }}
                        </p>
                    </div>
                    <div class="prose max-w-none">
                        <p class="text-lg text-gray-600 mb-6 text-justify">
                            {{ __('halal.paragraph_2') }}
                        </p>
                    </div>
                    <!-- Gambar Logo Halal (TENGAH) -->
                    <div class="flex justify-center my-10">
                        <img src="{{ asset('images/logo-halal.png') }}" alt="Logo Halal BBSPJIKKP"
                            class="w-72 md:w-96 opacity-90">
                    </div>
                    <div class="prose max-w-none">
                        <p class="text-lg text-gray-600 mb-6 text-justify">
                            {{ __('halal.paragraph_3') }}
                        </p>
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