@extends('layouts.app')

@section('title', 'Proses Sertifikasi Halal - BBSPJIKP')
@section('description', 'Tahapan dan prosedur sertifikasi halal di LPH BBSPJIKP')

@section('content')
    <!-- Hero Section with Background -->
    <div class="relative bg-gray-900">
        <!-- Background Image with Overlay -->
        <div class="absolute inset-0">
            <img src="{{ asset('images/halal-center-bg.jpg') }}" alt="Header Background" class="w-full h-full object-cover">
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
                            <span class="text-gray-300">Proses Sertifikasi Halal</span>
                        </div>
                    </li>
                </ol>
            </nav>

            <!-- Header Text -->
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Proses Sertifikasi Halal</h1>
                <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                    Tahapan dan Prosedur Sertifikasi Halal
                </p>
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <div class="p-8">
                <!-- Diagram Alur -->
                <section class="mb-12">
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">Alur Sertifikasi Halal</h2>
                    <div class="space-y-6">
                        <!-- Tahap 1 -->
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0">
                                <div class="w-10 h-10 rounded-full bg-blue-500 flex items-center justify-center text-white font-bold">
                                    1
                                </div>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold mb-2">Pendaftaran</h3>
                                <p class="text-gray-600">Pelaku usaha mendaftar sertifikasi halal melalui BPJPH</p>
                                <div class="mt-2 text-sm text-gray-500">
                                    <ul class="list-disc list-inside">
                                        <li>Mengisi formulir pendaftaran</li>
                                        <li>Melengkapi dokumen persyaratan</li>
                                        <li>Membayar biaya pendaftaran</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Tahap 2 -->
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0">
                                <div class="w-10 h-10 rounded-full bg-green-500 flex items-center justify-center text-white font-bold">
                                    2
                                </div>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold mb-2">Pemeriksaan Kelengkapan Dokumen</h3>
                                <p class="text-gray-600">LPH melakukan verifikasi dokumen yang diajukan</p>
                                <div class="mt-2 text-sm text-gray-500">
                                    <ul class="list-disc list-inside">
                                        <li>Verifikasi dokumen administratif</li>
                                        <li>Pemeriksaan kesesuaian informasi</li>
                                        <li>Evaluasi sistem jaminan halal</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Tahap 3 -->
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0">
                                <div class="w-10 h-10 rounded-full bg-purple-500 flex items-center justify-center text-white font-bold">
                                    3
                                </div>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold mb-2">Audit Lapangan</h3>
                                <p class="text-gray-600">Pemeriksaan langsung ke lokasi produksi</p>
                                <div class="mt-2 text-sm text-gray-500">
                                    <ul class="list-disc list-inside">
                                        <li>Verifikasi fasilitas produksi</li>
                                        <li>Pemeriksaan bahan dan proses</li>
                                        <li>Pengambilan sampel (jika diperlukan)</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Tahap 4 -->
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0">
                                <div class="w-10 h-10 rounded-full bg-red-500 flex items-center justify-center text-white font-bold">
                                    4
                                </div>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold mb-2">Pengujian Laboratorium</h3>
                                <p class="text-gray-600">Analisis laboratorium untuk memastikan kehalalan produk</p>
                                <div class="mt-2 text-sm text-gray-500">
                                    <ul class="list-disc list-inside">
                                        <li>Pengujian kandungan bahan</li>
                                        <li>Analisis kontaminasi</li>
                                        <li>Verifikasi hasil pengujian</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Tahap 5 -->
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0">
                                <div class="w-10 h-10 rounded-full bg-yellow-500 flex items-center justify-center text-white font-bold">
                                    5
                                </div>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold mb-2">Sidang Fatwa</h3>
                                <p class="text-gray-600">Penetapan kehalalan produk oleh MUI</p>
                                <div class="mt-2 text-sm text-gray-500">
                                    <ul class="list-disc list-inside">
                                        <li>Evaluasi hasil pemeriksaan</li>
                                        <li>Pembahasan status kehalalan</li>
                                        <li>Penetapan fatwa halal</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Tahap 6 -->
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0">
                                <div class="w-10 h-10 rounded-full bg-indigo-500 flex items-center justify-center text-white font-bold">
                                    6
                                </div>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold mb-2">Penerbitan Sertifikat</h3>
                                <p class="text-gray-600">Penerbitan sertifikat halal oleh BPJPH</p>
                                <div class="mt-2 text-sm text-gray-500">
                                    <ul class="list-disc list-inside">
                                        <li>Pembuatan sertifikat</li>
                                        <li>Pencatatan dan registrasi</li>
                                        <li>Penyerahan sertifikat</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Persyaratan -->
                <section class="mb-12">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6">Persyaratan Sertifikasi</h2>
                    <div class="grid md:grid-cols-2 gap-6">
                        <div class="bg-gray-50 p-6 rounded-lg">
                            <h3 class="text-xl font-semibold mb-4">Dokumen Administratif</h3>
                            <ul class="list-disc list-inside text-gray-600 space-y-2">
                                <li>Data pelaku usaha</li>
                                <li>Jenis produk</li>
                                <li>Daftar produk dan bahan</li>
                                <li>Proses pengolahan</li>
                            </ul>
                        </div>
                        <div class="bg-gray-50 p-6 rounded-lg">
                            <h3 class="text-xl font-semibold mb-4">Sistem Jaminan Halal</h3>
                            <ul class="list-disc list-inside text-gray-600 space-y-2">
                                <li>Manual SJH</li>
                                <li>Tim manajemen halal</li>
                                <li>Prosedur tertulis</li>
                                <li>Dokumentasi</li>
                            </ul>
                        </div>
                    </div>
                </section>

                <!-- Monitoring -->
                <section>
                    <h2 class="text-2xl font-bold text-gray-900 mb-6">Monitoring Pasca Sertifikasi</h2>
                    <div class="bg-blue-50 p-6 rounded-lg">
                        <div class="space-y-4">
                            <p class="text-gray-700">Setelah mendapatkan sertifikat halal, pelaku usaha wajib:</p>
                            <ul class="list-disc list-inside text-gray-600 space-y-2">
                                <li>Memelihara sistem jaminan halal</li>
                                <li>Menjaga konsistensi proses produksi halal</li>
                                <li>Melaporkan perubahan bahan dan proses</li>
                                <li>Memperbarui sertifikat sebelum masa berlaku habis</li>
                            </ul>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection