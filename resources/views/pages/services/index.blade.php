@extends('layouts.app')

@section('title', 'Layanan - BALAI BESAR STANDARDISASI DAN PELAYANAN JASA INDUSTRI KULIT, PLASTIK, DAN KARET')
@section('description', 'Daftar kategori layanan: Pengujian, Kalibrasi, Sertifikasi, Konsultansi, Inspeksi, dll.')

@section('content')
    <!-- Hero/Header -->
    <section class="relative">
        <div class="h-64 md:h-80 lg:h-96 w-full bg-cover bg-center"
            style="background-image:url('https://images.unsplash.com/photo-1529336953121-4a1121188589?q=80&w=1600&fit=crop');">
            <div class="h-full w-full bg-black/40 flex items-end">
                <div class="max-w-7xl mx-auto w-full px-4 sm:px-6 lg:px-8 py-8">
                    <nav class="text-white/80 text-sm mb-2">
                        <a href="{{ route('home') }}" class="hover:text-white">Home</a>
                        <span class="mx-2">/</span>
                        <span>Layanan</span>
                    </nav>
                    <h1 class="text-3xl md:text-4xl font-bold text-white">Layanan</h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Kategori Layanan -->
    <section class="py-12 md:py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4 md:gap-6">
                <a href="{{ route('pengujian.index') }}"
                    class="bg-white border rounded-xl p-4 text-center hover:shadow-md transition-shadow">
                    <div class="font-semibold">Pengujian</div>
                </a>
                <a href="/kalibrasi" class="bg-white border rounded-xl p-4 text-center hover:shadow-md transition-shadow">
                    <div class="font-semibold">Kalibrasi</div>
                </a>
                <a href="/sertifikasi-produk-sppt-sni"
                    class="bg-white border rounded-xl p-4 text-center hover:shadow-md transition-shadow">
                    <div class="font-semibold">Sertifikasi</div>
                </a>
                <a href="/audit-teknologi"
                    class="bg-white border rounded-xl p-4 text-center hover:shadow-md transition-shadow">
                    <div class="font-semibold">Bimbingan Teknis / Konsultansi</div>
                </a>
                <a href="/inspeksi" class="bg-white border rounded-xl p-4 text-center hover:shadow-md transition-shadow">
                    <div class="font-semibold">Inspeksi</div>
                </a>
                <a href="/tkdn-validasi"
                    class="bg-white border rounded-xl p-4 text-center hover:shadow-md transition-shadow">
                    <div class="font-semibold">Verifikasi dan Validasi</div>
                </a>
                <a href="/uji-profsiensi-kalibrasi"
                    class="bg-white border rounded-xl p-4 text-center hover:shadow-md transition-shadow">
                    <div class="font-semibold">Uji Profisiensi</div>
                </a>
                <a href="/pelatihan-teknis"
                    class="bg-white border rounded-xl p-4 text-center hover:shadow-md transition-shadow">
                    <div class="font-semibold">Pelatihan Teknis</div>
                </a>
                <a href="/produsen-bahan-acuan"
                    class="bg-white border rounded-xl p-4 text-center hover:shadow-md transition-shadow">
                    <div class="font-semibold">Produsen Bahan Acuan (PBA)</div>
                </a>
                <a href="/magang-pkl" class="bg-white border rounded-xl p-4 text-center hover:shadow-md transition-shadow">
                    <div class="font-semibold">Edukasi</div>
                </a>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-blue-600 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Butuh Konsultasi?</h2>
            <p class="text-xl mb-8 text-blue-100">
                Tim ahli kami siap membantu Anda memilih layanan yang tepat
            </p>
            <a href="{{ route('contact.show') }}"
                class="bg-white text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition-colors duration-200">
                Hubungi Kami
            </a>
        </div>
    </section>
@endsection
