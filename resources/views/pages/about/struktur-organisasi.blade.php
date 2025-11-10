@extends('layouts.app')

@section('title', 'Struktur Organisasi - BBSPJIKP')
@section('description', 'Struktur organisasi dan tata kerja Balai Besar Standardisasi dan Pelayanan Jasa Industri Kulit, Plastik, dan Karet')

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
                        <span class="text-gray-500">Struktur Organisasi</span>
                    </div>
                </li>
            </ol>
        </nav>

        <!-- Main Content -->
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <div class="p-8">
                <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Struktur Organisasi BBSPJIKP</h1>
                
                <div class="prose max-w-none">
                    <!-- Diagram Struktur Organisasi -->
                    <div class="mb-12 overflow-x-auto">
                        <div class="min-w-[800px]">
                            <!-- Struktur bisa ditambahkan sebagai gambar atau dibuat dengan HTML+CSS -->
                            <img src="{{ asset('images/struktur-organisasi.png') }}" alt="Struktur Organisasi BBSPJIKP" class="w-full">
                        </div>
                    </div>

                    <!-- Penjelasan Struktur -->
                    <div class="space-y-8">
                        <!-- Kepala Balai -->
                        <section>
                            <h2 class="text-2xl font-bold text-blue-600 mb-4">Kepala Balai</h2>
                            <p class="text-gray-600 mb-4">
                                Memimpin dan mengoordinasikan pelaksanaan tugas dan fungsi BBSPJIKP sesuai dengan peraturan perundang-undangan yang berlaku.
                            </p>
                        </section>

                        <!-- Bagian Tata Usaha -->
                        <section>
                            <h2 class="text-2xl font-bold text-blue-600 mb-4">Bagian Tata Usaha</h2>
                            <p class="text-gray-600 mb-4">
                                Melaksanakan urusan kepegawaian, keuangan, rumah tangga, perlengkapan, program, evaluasi, dan pelaporan.
                            </p>
                            <div class="pl-6 space-y-2">
                                <h3 class="font-semibold">Sub Bagian:</h3>
                                <ul class="list-disc pl-6 text-gray-600">
                                    <li>Program dan Pelaporan</li>
                                    <li>Keuangan</li>
                                    <li>Kepegawaian dan Umum</li>
                                </ul>
                            </div>
                        </section>

                        <!-- Bidang Standardisasi dan Sertifikasi -->
                        <section>
                            <h2 class="text-2xl font-bold text-blue-600 mb-4">Bidang Standardisasi dan Sertifikasi</h2>
                            <p class="text-gray-600 mb-4">
                                Melaksanakan penyusunan program, evaluasi, dan pelaporan di bidang standardisasi dan sertifikasi.
                            </p>
                            <div class="pl-6 space-y-2">
                                <h3 class="font-semibold">Seksi:</h3>
                                <ul class="list-disc pl-6 text-gray-600">
                                    <li>Standardisasi</li>
                                    <li>Sertifikasi</li>
                                </ul>
                            </div>
                        </section>

                        <!-- Bidang Pengujian -->
                        <section>
                            <h2 class="text-2xl font-bold text-blue-600 mb-4">Bidang Pengujian</h2>
                            <p class="text-gray-600 mb-4">
                                Melaksanakan pengujian dan kalibrasi sesuai dengan lingkup akreditasi dan ketentuan yang berlaku.
                            </p>
                            <div class="pl-6 space-y-2">
                                <h3 class="font-semibold">Seksi:</h3>
                                <ul class="list-disc pl-6 text-gray-600">
                                    <li>Pengujian Kimia dan Fisika</li>
                                    <li>Kalibrasi</li>
                                </ul>
                            </div>
                        </section>

                        <!-- Bidang Pengembangan Jasa Teknis -->
                        <section>
                            <h2 class="text-2xl font-bold text-blue-600 mb-4">Bidang Pengembangan Jasa Teknis</h2>
                            <p class="text-gray-600 mb-4">
                                Melaksanakan pengembangan kompetensi, alih teknologi, konsultansi, dan kerja sama teknis.
                            </p>
                            <div class="pl-6 space-y-2">
                                <h3 class="font-semibold">Seksi:</h3>
                                <ul class="list-disc pl-6 text-gray-600">
                                    <li>Pengembangan Kompetensi</li>
                                    <li>Kerja Sama dan Konsultansi</li>
                                </ul>
                            </div>
                        </section>

                        <!-- Kelompok Jabatan Fungsional -->
                        <section>
                            <h2 class="text-2xl font-bold text-blue-600 mb-4">Kelompok Jabatan Fungsional</h2>
                            <p class="text-gray-600">
                                Melaksanakan kegiatan sesuai dengan jabatan fungsional masing-masing berdasarkan ketentuan peraturan perundang-undangan.
                            </p>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
