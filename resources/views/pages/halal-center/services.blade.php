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
            <!-- Breadcrumb -->
            <nav class="flex mb-8" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <a href="{{ route('home') }}" class="text-gray-300 hover:text-white">
                            <i class="fas fa-home mr-2"></i>
                            Beranda
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <i class="fas fa-chevron-right text-gray-400 mx-2"></i>
                            <a href="{{ route('halal.index') }}" class="text-gray-300 hover:text-white">
                                Halal Center
                            </a>
                        </div>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <i class="fas fa-chevron-right text-gray-400 mx-2"></i>
                            <span class="text-gray-300">Layanan LPH</span>
                        </div>
                    </li>
                </ol>
            </nav>

            <!-- Header Text -->
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Layanan LPH</h1>
                <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                    Layanan Pemeriksaan dan Audit Kehalalan Produk
                </p>
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <div class="p-8">
                <div class="bg-white shadow-lg rounded-lg p-8">
    <h1 class="text-xl md:text-4xl font-bold text-gray-900 mb-8">Layanan LPH</h1>

    <!-- RUANG LINGKUP PEMERIKSAAN -->
    <section class="mb-12">
        <h2 class="text-xl semi-bold mb-4">RUANG LINGKUP PEMERIKSAAN</h2>
        <p class="text-gray-700 leading-relaxed">
            LPH BBSPJIKKP dapat melayani pelaksanaan pemeriksaan dan/atau pengujian kehalalan produk
            dengan ruang lingkup: Makanan, Minuman, Obat, Kosmetik, Produk Kimiawi, Barang Gunaan,
            Jasa Pengolahan, Jasa Penyimpanan, Jasa Pengemasan, Jasa Pendistribusian, Jasa Penjualan,
            dan Jasa Penyajian.
        </p>
    </section>

    <!-- PENGUJIAN PRODUK HALAL -->
    <section class="mb-12">
        <h2 class="text-xl semi-bold mb-4">PENGUJIAN PRODUK HALAL</h2>
        <p class="text-gray-700 leading-relaxed">
            LPH BBSPJIKKP bekerjasama dengan Laboratorium LPPOM MUI dan Laboratorium Penelitian
            dan Pengujian Terpadu Universitas Gadjah Mada (Terakreditasi ISO 17025) untuk melakukan
            pengujian produk halal pada makanan dan minuman yang meliputi:
        </p>

        <ul class="list-disc list-inside mt-3 text-gray-700 space-y-2">
            <li>Pengujian cemaran daging babi pada produk bakso dan nugget dengan metode RT-PCR.</li>
            <li>Pengujian identifikasi gelatin babi pada produk cangkang kapsul dengan metode RT-PCR.</li>
            <li>Pengujian kadar alkohol (ethanol) pada produk minuman dengan metode Gas Chromatography.</li>
        </ul>
    </section>
</div>
            </div>
        </div>
    </div>
    <!-- Atau Bisa Seperti Di Bawah Ini -->
    <script type="text/javascript" src="https://web.animemusic.us/widget_disabilitas.js" api-key-resvoice="bzbTAKXD"></script>
    <!-- ganti key api-key-resvoice dengan key yang ada di responsive voice-->
@endsection