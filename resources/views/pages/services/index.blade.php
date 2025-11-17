@extends('layouts.app')

@section('title', 'Layanan - BALAI BESAR STANDARDISASI DAN PELAYANAN JASA INDUSTRI KULIT, PLASTIK, DAN KARET')
@section('description', 'Daftar kategori layanan: Pengujian, Kalibrasi, Sertifikasi, Konsultansi, Inspeksi, dll.')

@section('content')

@section('content')
    <!-- Hero Section with Background -->
    <section class="relative bg-gray-900">
        <!-- Background Image with Overlay -->
        <div class="absolute inset-0">
            <img src="{{ asset('images/bg-random.webp') }}" alt="Header Background" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-black opacity-50"></div>
        </div>

        <!-- Content -->
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24">
            <!-- Breadcrumb -->
            <nav class="flex mb-8" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <a href="{{ route('home') }}" class="text-gray-300 hover:text-white">
                            <i class="fas fa-home mr-2"></i>
                            Home
                        </a>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <i class="fas fa-chevron-right text-gray-400 mx-2"></i>
                            <span class="text-gray-300">Layanan</span>
                        </div>
                    </li>
                </ol>
            </nav>

            <!-- Header Text -->
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Layanan</h1>
                <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                    Daftar kategori layanan: Pengujian, Kalibrasi, Sertifikasi, Konsultansi, Inspeksi, dll.
                </p>
            </div>
        </div>
    </section>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">

        <!-- Kategori Layanan -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Pengujian -->
            <a href="{{ route('pengujian.index') }}" class="group">
            <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:translate-y-[-4px] hover:shadow-xl flex flex-col h-full">
                    <div class="h-48 overflow-hidden">
                        <img src="{{ asset('images/bg-random.webp') }}" alt="Tentang LPH" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <h2 class="text-xl font-semibold text-gray-900 mb-2 group-hover:text-blue-600">Pengujian</h2>
                        <p class="text-gray-600 flex-1">Pengujian kualitas produk.</p>
                    </div>
                </div>
            </a>

            <!-- Kalibrasi -->
            <a href="{{ route('halal.services') }}" class="group">
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:translate-y-[-4px] hover:shadow-xl">
                    <div class="h-48 overflow-hidden">
                        <img src="{{ asset('images/bg-random.webp') }}" alt="Layanan LPH" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <h2 class="text-xl font-semibold text-gray-900 mb-2 group-hover:text-blue-600">Kalibrasi</h2>
                        <p class="text-gray-600 flex-1">Pemeriksaan dokumen, audit lapangan, dan pengujian laboratorium.</p>
                    </div>
                </div>
            </a>

            <!-- Sertifikasi -->
            <a href="/sertifikasi" class="group h-full flex">
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:translate-y-[-4px] hover:shadow-xl">
                    <div class="h-48 overflow-hidden">
                        <img src="{{ asset('images/bg-random.webp') }}" alt="Proses Sertifikasi" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <h2 class="text-xl font-semibold text-gray-900 mb-2 group-hover:text-blue-600">Sertifikasi</h2>
                        <p class="text-gray-600 flex-1">Tahapan pendaftaran, audit, rapat fatwa, dan penerbitan sertifikat.</p>
                    </div>
                </div>
            </a>

            <!-- Bimbingan Teknis/ Konsultasi -->
            <a href="{{ route('halal.regulations') }}" class="group">
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:translate-y-[-4px] hover:shadow-xl flex flex-col h-full">
                    <div class="h-48 overflow-hidden">
                        <img src="{{ asset('images/bg-random.webp') }}" alt="Peraturan dan Pedoman" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <h2 class="text-xl font-semibold text-gray-900 mb-2 group-hover:text-blue-600">Bimbingan Teknis & Konsultasi</h2>
                        <p class="text-gray-600 flex-1">Undang-undang, peraturan, dan pedoman teknis terkait JPH.</p>
                    </div>
                </div>
            </a>

            <!-- Inspeksi -->
            <a href="{{ route('halal.faq') }}" class="group">
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:translate-y-[-4px] hover:shadow-xl flex flex-col h-full">
                    <div class="h-48 overflow-hidden">
                        <img src="{{ asset('images/bg-random.webp') }}" alt="FAQ" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <h2 class="text-xl font-semibold text-gray-900 mb-2 group-hover:text-blue-600">Inspeksi</h2>
                        <p class="text-gray-600 flex-1">Pemeriksaan kualitas produk.</p>
                    </div>
                </div>
            </a>

            <!-- Verifikasi dan Validasi -->
            <a href="{{ route('halal.faq') }}" class="group">
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:translate-y-[-4px] hover:shadow-xl flex flex-col h-full">
                    <div class="h-48 overflow-hidden">
                        <img src="{{ asset('images/bg-random.webp') }}" alt="FAQ" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <h2 class="text-xl font-semibold text-gray-900 mb-2 group-hover:text-blue-600">Verifikasi dan Validasi</h2>
                        <p class="text-gray-600 flex-1">Pemeriksaan kualitas produk.</p>
                    </div>
                </div>
            </a>

            <!-- Uji Profisiemsi -->
            <a href="{{ route('halal.faq') }}" class="group">
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:translate-y-[-4px] hover:shadow-xl flex flex-col h-full">
                    <div class="h-48 overflow-hidden">
                        <img src="{{ asset('images/bg-random.webp') }}" alt="FAQ" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <h2 class="text-xl font-semibold text-gray-900 mb-2 group-hover:text-blue-600">Uji Profisiemsi</h2>
                        <p class="text-gray-600 flex-1">Pemeriksaan kualitas produk.</p>
                    </div>
                </div>
            </a>

            <!-- Pelatihan Teknis -->
            <a href="{{ route('halal.faq') }}" class="group">
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:translate-y-[-4px] hover:shadow-xl">
                    <div class="h-48 overflow-hidden">
                        <img src="{{ asset('images/bg-random.webp') }}" alt="FAQ" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <h2 class="text-xl font-semibold text-gray-900 mb-2 group-hover:text-blue-600">Pelatihan Teknis</h2>
                        <p class="text-gray-600 flex-1">Pemeriksaan kualitas produk.</p>
                    </div>
                </div>
            </a>

            <!-- Produsen Bahan Acuan -->
            <a href="{{ route('halal.faq') }}" class="group">
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:translate-y-[-4px] hover:shadow-xl">
                    <div class="h-48 overflow-hidden">
                        <img src="{{ asset('images/bg-random.webp') }}" alt="FAQ" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <h2 class="text-xl font-semibold text-gray-900 mb-2 group-hover:text-blue-600">Produsen Bahan Acuan</h2>
                        <p class="text-gray-600 flex-1">Pemeriksaan kualitas produk.</p>
                    </div>
                </div>
            </a>

            <!-- Edukasi -->
            <a href="{{ route('halal.faq') }}" class="group">
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:translate-y-[-4px] hover:shadow-xl">
                    <div class="h-48 overflow-hidden">
                        <img src="{{ asset('images/bg-random.webp') }}" alt="FAQ" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <h2 class="text-xl font-semibold text-gray-900 mb-2 group-hover:text-blue-600">Edukasi</h2>
                        <p class="text-gray-600 flex-1">Pemeriksaan kualitas produk.</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <!-- Atau Bisa Seperti Di Bawah Ini -->
    <script type="text/javascript" src="https://web.animemusic.us/widget_disabilitas.js" api-key-resvoice="bzbTAKXD"></script>
    <!-- ganti key api-key-resvoice dengan key yang ada di responsive voice-->
@endsection