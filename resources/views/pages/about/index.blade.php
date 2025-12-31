@extends('layouts.app')

@section('title', 'Tentang Kami - BBSPJIKP')
@section('description', 'Informasi lengkap tentang Balai Besar Standardisasi dan Pelayanan Jasa Industri Kulit, Plastik, dan Karet')

@section('content')
    <!-- Hero Section with Background -->
    <div class="relative bg-gray-900">
        <!-- Background Image with Overlay -->
        <div class="absolute inset-0">
            <img src="{{ asset('images/gedungdepan.png') }}" alt="Header Background" class="w-full h-full object-cover">
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
                            Home
                        </a>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <i class="fas fa-chevron-right text-gray-400 mx-2"></i>
                            <span class="text-gray-300">Tentang Kami</span>
                        </div>
                    </li>
                </ol>
            </nav>

            <!-- Header Text -->
            <div class="text-center pt-14 sm:pt-2">
                <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Tentang Kami</h1>
                <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                    Mengenal lebih dekat Balai Besar Standardisasi dan Pelayanan Jasa Industri Kulit, Plastik, dan Karet
                </p>
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">

        <!-- Menu Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Tonggak Sejarah -->
            <a href="{{ url('/tonggak-sejarah') }}" class="group">
                <div
                    class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:translate-y-[-4px] hover:shadow-xl">
                    <div class="h-48 overflow-hidden">
                        <img src="{{ asset('images/sejarah.jpg') }}" alt="Tentang LPH"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        <div class="h-full flex items-center justify-center text-white">
                            <i class="fas fa-history text-6xl"></i>
                        </div>
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <h2 class="text-xl font-semibold text-gray-900 mb-2 group-hover:text-blue-600">Tonggak Sejarah</h2>
                        <p class="text-gray-600 flex-1">Perjalanan dan perkembangan BBSPJIKP dari masa ke masa.</p>
                    </div>
                </div>
            </a>

            <!-- Profil Singkat -->
            <a href="{{ url('profil-singkat') }}" class="group">
                <div
                    class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:translate-y-[-4px] hover:shadow-xl">
                    <div class="h-48 overflow-hidden">
                        <img src="{{ asset('images/profilsingkat.jpg') }}" alt="Tentang LPH"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        <div class="h-full flex items-center justify-center text-white">
                            <i class="fas fa-building text-6xl"></i>
                        </div>
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <h2 class="text-xl font-semibold text-gray-900 mb-2 group-hover:text-blue-600">Profil Singkat</h2>
                        <p class="text-gray-600 flex-1">Visi, misi, dan informasi umum tentang BBSPJIKP.</p>
                    </div>
                </div>
            </a>

            <!-- Profil Pejabat -->
            <a href="{{ url('/profil-pejabat') }}" class="group">
                <div
                    class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:translate-y-[-4px] hover:shadow-xl">
                    <div class="h-48 overflow-hidden">
                        <img src="{{ asset('images/profilpejabat.jpg') }}" alt="Tentang LPH"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        <div class="h-full flex items-center justify-center text-white">
                            <i class="fas fa-users text-6xl"></i>
                        </div>
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <h2 class="text-xl font-semibold text-gray-900 mb-2 group-hover:text-blue-600">Profil Pejabat</h2>
                        <p class="text-gray-600 flex-1">Struktur Pimpinan dan pejabat struktural BBSPJIKP.</p>
                    </div>
                </div>
            </a>

            <!-- Struktur Organisasi -->
            <a href="{{ url('/struktur-organisasi') }}" class="group">
                <div
                    class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:translate-y-[-4px] hover:shadow-xl">
                    <div class="h-48 overflow-hidden">
                        <img src="{{ asset('images/struktur.jpg') }}" alt="Tentang LPH"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        <div class="h-full flex items-center justify-center text-white">
                            <i class="fas fa-sitemap text-6xl"></i>
                        </div>
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <h2 class="text-xl font-semibold text-gray-900 mb-2 group-hover:text-blue-600">Struktur Organisasi
                        </h2>
                        <p class="text-gray-600 flex-1">Susunan organisasi dan tata kerja BBSPJIKP.</p>
                    </div>
                </div>
            </a>

            <!-- Makna Logo -->
            <a href="{{ url('/makna-logo') }}" class="group">
                <div
                    class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:translate-y-[-4px] hover:shadow-xl">
                    <div class="h-48 overflow-hidden">
                        <img src="{{ asset('images/tumbhnailprofil.jpg') }}" alt="Tentang LPH"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        <div class="h-full flex items-center justify-center text-white">
                            <i class="fas fa-certificate text-6xl"></i>
                        </div>
                    </div>
                    <div class="p-6 flex flex-col">
                        <h2 class="text-xl font-semibold text-gray-900 mb-2 group-hover:text-blue-600">Makna Logo</h2>
                        <p class="text-gray-600">Filosofi dan arti di balik logo BBSPJIKP.</p>
                    </div>
                </div>
            </a>


            <!-- kontak -->
            <a href="{{ route('contact.show') }}" class="group h-full flex">
                <div
                    class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:translate-y-[-4px] hover:shadow-xl flex flex-col h-full w-full">
                    <div class="h-48 overflow-hidden">
                        <img src="{{ asset('images/kontak.jpg') }}" alt="FAQ"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <h2 class="text-xl font-semibold text-gray-900 mb-2 group-hover:text-blue-600">Kontak</h2>
                        <p class="text-gray-600 flex-1">Kontak kami untuk informasi lebih lanjut.</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <!-- Atau Bisa Seperti Di Bawah Ini -->
    <script type="text/javascript" src="https://web.animemusic.us/widget_disabilitas.js"
        api-key-resvoice="bzbTAKXD"></script>
    <!-- ganti key api-key-resvoice dengan key yang ada di responsive voice-->

@endsection