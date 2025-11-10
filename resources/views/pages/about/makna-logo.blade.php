@extends('layouts.app')

@section('title', 'Makna Logo - BBSPJIKP')
@section('description', 'Makna dan filosofi logo Balai Besar Standardisasi dan Pelayanan Jasa Industri Kulit, Plastik, dan Karet')

@section('content')
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <!-- Breadcrumb -->
        <nav class="flex mb-8" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                <li class="inline-flex items-center">
                    <a href="{{ route('home') }}" class="text-gray-700 hover:text-blue-600">
                        <i class="fas fa-home mr-2"></i>
                        Beranda
                    </a>
                </li>
                <li>
                    <div class="flex items-center">
                        <i class="fas fa-chevron-right text-gray-400 mx-2"></i>
                        <a href="{{ route('about.index') }}" class="text-gray-700 hover:text-blue-600">Tentang Kami</a>
                    </div>
                </li>
                <li aria-current="page">
                    <div class="flex items-center">
                        <i class="fas fa-chevron-right text-gray-400 mx-2"></i>
                        <span class="text-gray-500">Makna Logo</span>
                    </div>
                </li>
            </ol>
        </nav>

        <!-- Main Content -->
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <div class="p-8">
                <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Makna Logo BBSPJIKP</h1>
                
                <div class="prose max-w-none">
                    <!-- Logo Display -->
                    <div class="flex justify-center mb-12">
                        <div class="w-64 h-64 bg-white rounded-lg shadow-lg p-4 flex items-center justify-center">
                            <img src="{{ asset('images/logobalai.png') }}" alt="Logo BBSPJIKP" class="max-w-full max-h-full">
                        </div>
                    </div>

                    <!-- Logo Elements -->
                    <div class="grid md:grid-cols-2 gap-8 mb-12">
                        <!-- Visual Elements -->
                        <section>
                            <h2 class="text-2xl font-bold text-blue-600 mb-4">Elemen Visual</h2>
                            <div class="space-y-4">
                                <div class="bg-gray-50 p-4 rounded-lg">
                                    <h3 class="font-semibold mb-2">Bentuk Dasar</h3>
                                    <p class="text-gray-600">Penjelasan tentang bentuk dasar logo dan maknanya dalam konteks industri dan standardisasi.</p>
                                </div>
                                <div class="bg-gray-50 p-4 rounded-lg">
                                    <h3 class="font-semibold mb-2">Warna</h3>
                                    <div class="space-y-2">
                                        <p class="text-gray-600">
                                            <span class="inline-block w-4 h-4 bg-blue-600 rounded-full mr-2"></span>
                                            Biru - Melambangkan kepercayaan dan profesionalisme
                                        </p>
                                        <p class="text-gray-600">
                                            <span class="inline-block w-4 h-4 bg-gray-800 rounded-full mr-2"></span>
                                            Hitam - Melambangkan keteguhan dan kekuatan
                                        </p>
                                    </div>
                                </div>
                                <div class="bg-gray-50 p-4 rounded-lg">
                                    <h3 class="font-semibold mb-2">Tipografi</h3>
                                    <p class="text-gray-600">Penjelasan tentang jenis huruf yang digunakan dan alasan pemilihannya.</p>
                                </div>
                            </div>
                        </section>

                        <!-- Symbolic Meaning -->
                        <section>
                            <h2 class="text-2xl font-bold text-blue-600 mb-4">Makna Simbolis</h2>
                            <div class="space-y-4">
                                <div class="bg-gray-50 p-4 rounded-lg">
                                    <h3 class="font-semibold mb-2">Lingkaran</h3>
                                    <p class="text-gray-600">Melambangkan kesatuan, keberlanjutan, dan komitmen untuk memberikan layanan yang menyeluruh.</p>
                                </div>
                                <div class="bg-gray-50 p-4 rounded-lg">
                                    <h3 class="font-semibold mb-2">Garis-garis</h3>
                                    <p class="text-gray-600">Menggambarkan dinamika, kemajuan, dan inovasi dalam industri.</p>
                                </div>
                                <div class="bg-gray-50 p-4 rounded-lg">
                                    <h3 class="font-semibold mb-2">Simbol Terpadu</h3>
                                    <p class="text-gray-600">Representasi dari integrasi antara standardisasi, pengujian, dan pelayanan industri.</p>
                                </div>
                            </div>
                        </section>
                    </div>

                    <!-- Philosophy -->
                    <section class="mb-12">
                        <h2 class="text-2xl font-bold text-blue-600 mb-4">Filosofi Logo</h2>
                        <div class="bg-blue-50 border-l-4 border-blue-500 p-6">
                            <p class="text-lg mb-4">
                                Logo BBSPJIKP mencerminkan visi dan misi lembaga dalam memberikan pelayanan standardisasi dan pengujian yang berkualitas untuk industri kulit, plastik, dan karet.
                            </p>
                            <p class="text-gray-600">
                                Desain logo menggabungkan elemen-elemen yang merepresentasikan:
                            </p>
                            <ul class="list-disc pl-6 mt-2 space-y-2 text-gray-600">
                                <li>Profesionalisme dalam pelayanan</li>
                                <li>Komitmen terhadap kualitas</li>
                                <li>Inovasi dan kemajuan teknologi</li>
                                <li>Keberlanjutan industri nasional</li>
                            </ul>
                        </div>
                    </section>

                    <!-- Usage Guidelines -->
                    <section>
                        <h2 class="text-2xl font-bold text-blue-600 mb-4">Pedoman Penggunaan</h2>
                        <div class="grid md:grid-cols-2 gap-6">
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <h3 class="font-semibold mb-2">Penggunaan yang Diperbolehkan</h3>
                                <ul class="list-disc pl-6 text-gray-600">
                                    <li>Dokumen resmi BBSPJIKP</li>
                                    <li>Materi komunikasi dan publikasi</li>
                                    <li>Media digital resmi</li>
                                </ul>
                            </div>
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <h3 class="font-semibold mb-2">Batasan Penggunaan</h3>
                                <ul class="list-disc pl-6 text-gray-600">
                                    <li>Tidak boleh dimodifikasi</li>
                                    <li>Harus menggunakan warna resmi</li>
                                    <li>Proporsi harus dijaga</li>
                                </ul>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
@endsection
