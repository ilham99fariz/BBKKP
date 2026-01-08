@extends('layouts.app')

@section('title', 'Standar Pelayanan - BBSPJIKKP')
@section('description', 'Daftar standar pelayanan dan informasi terkait BBSPJIKKP')

@section('content')
    <!-- Hero Section with Background -->
    <div class="relative bg-gray-900">
        <!-- Background Image with Overlay -->
        <div class="absolute inset-0">
            <img src="{{ asset('images/standarpelayanan.png') }}" alt="Header Background" class="w-full h-full object-cover">
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
                            <span class="text-gray-300">Standar Pelayanan</span>
                        </div>
                    </li>
                </ol>
            </nav>

            <!-- Header Text -->
            <div class="text-center pt-14 sm:pt-2">
                <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Standar Pelayanan</h1>
                <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                    Daftar standar pelayanan dan informasi terkait BBSPJIKKP
                </p>
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">

        <!-- Halal Center Cards (consistent with site cards) -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 items-stretch">
            <!-- standar pelayanan -->
            <a href="{{ url('/standar-pelayanan') }}" class="group h-full flex">
                <div
                    class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:translate-y-[-4px] hover:shadow-xl flex flex-col h-full w-full">
                    <div class="h-48 overflow-hidden">
                        <img src="{{ asset('images/standarpelayanan.png') }}" alt="Standar Pelayanan"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <h2 class="text-xl font-semibold text-gray-900 mb-2 group-hover:text-blue-600">Standar Pelayanan
                        </h2>
                        <p class="text-gray-600 flex-1">Dokumen dan standar pelayanan kami</p>
                    </div>
                </div>
            </a>

            <!-- Maklumat Pelayanan -->
            <a href="{{ url('/maklumat-pelayanan') }}" class="group h-full flex">
                <div
                    class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:translate-y-[-4px] hover:shadow-xl flex flex-col h-full w-full">
                    <div class="h-48 overflow-hidden">
                        <img src="{{ asset('images/maklumat.png') }}" alt="Maklumat Pelayanan"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <h2 class="text-xl font-semibold text-gray-900 mb-2 group-hover:text-blue-600">Maklumat Pelayanan
                        </h2>
                        <p class="text-gray-600 flex-1">Maklumat dan informasi layanan</p>
                    </div>
                </div>
            </a>

            <!-- Tarif Layanan -->
            <a href="{{ url('/tarif-layanan') }}" class="group h-full flex">
                <div
                    class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:translate-y-[-4px] hover:shadow-xl flex flex-col h-full w-full">
                    <div class="h-48 overflow-hidden">
                        <img src="{{ asset('images/tarifpelayanan.jpg') }}" alt="Tarif Layanan"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <h2 class="text-xl font-semibold text-gray-900 mb-2 group-hover:text-blue-600">Tarif Layanan</h2>
                        <p class="text-gray-600 flex-1">Daftar harga layanan</p>
                    </div>
                </div>
            </a>

            <!-- Tarif Percepatan -->
            <a href="{{ url('/tarif-percepatan') }}" class="group h-full flex">
                <div
                    class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:translate-y-[-4px] hover:shadow-xl flex flex-col h-full w-full">
                    <div class="h-48 overflow-hidden">
                        <img src="{{ asset('images/tarifpercepatan.jpg') }}" alt="Peraturan dan Pedoman"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <h2 class="text-xl font-semibold text-gray-900 mb-2 group-hover:text-blue-600">Tarif Percepatan</h2>
                        <p class="text-gray-600 flex-1">Biayan layanan dengan percepatan.</p>
                    </div>
                </div>
            </a>

            <!-- SPM -->
            <a href="{{ url('/standar-pelayanan-minimum') }}" class="group h-full flex">
                <div
                    class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:translate-y-[-4px] hover:shadow-xl flex flex-col h-full w-full">
                    <div class="h-48 overflow-hidden">
                        <img src="{{ asset('images/spm.png') }}" alt="Standar Pelayanan Minimum"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <h2 class="text-xl font-semibold text-gray-900 mb-2 group-hover:text-blue-600">Standar Pelayanan
                            Minimum</h2>
                        <p class="text-gray-600 flex-1">Standar pelayanan minimum yang harus dipenuhi.</p>
                    </div>
                </div>
            </a>

            <!-- survei Pelanggan -->
            <a href="{{ url('/survey') }}" class="group h-full flex">
                <div
                    class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:translate-y-[-4px] hover:shadow-xl flex flex-col h-full w-full">
                    <div class="h-48 overflow-hidden">
                        <img src="{{ asset('images/surveypelanggan.jpg') }}" alt="Survey Pelanggan"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <h2 class="text-xl font-semibold text-gray-900 mb-2 group-hover:text-blue-600">Survey Pelanggan</h2>
                        <p class="text-gray-600 flex-1">Survey pelanggan dalam menggunakan layanan.</p>
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