@extends('layouts.app')

@section('title', 'Profil Singkat - BBSPJIKP')
@section('description', 'Profil dan informasi umum tentang Balai Besar Standardisasi dan Pelayanan Jasa Industri Kulit, Plastik, dan Karet')

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
                        <span class="text-gray-500">Profil Singkat</span>
                    </div>
                </li>
            </ol>
        </nav>

        <!-- Main Content -->
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <div class="p-8">
                <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Profil Singkat BBSPJIKP</h1>
                
                <div class="prose max-w-none">
                    <!-- Visi Section -->
                    <section class="mb-12">
                        <h2 class="text-2xl font-bold text-blue-600 mb-4">Visi</h2>
                        <div class="bg-blue-50 border-l-4 border-blue-500 p-4">
                            <p class="text-lg">Menjadi balai besar yang akuntabel, kolaboratif dan berorientasi pelayanan dalam mewujudkan industri nasional bidang kulit, karet, dan plastik yang mandiri dan berdaya saing</p>
                        </div>
                    </section>

                    <!-- Misi Section -->
                    <section class="mb-12">
                        <h2 class="text-2xl font-bold text-blue-600 mb-4">Misi</h2>
                        <ul class="space-y-4">
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-blue-500 mt-1 mr-3"></i>
                                <span>Optimalisasi pemanfaatan teknologi industri untuk meningkatkan kemandirian dan daya saing industri</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-blue-500 mt-1 mr-3"></i>
                                <span>Peningkatan peran jasa industri pendukung pembangunan industri secara profesional.</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-blue-500 mt-1 mr-3"></i>
                                <span>Pelaksanaan tata kelola yang baik/good governance dalam keseluruhan aktivitas yang efektif dan akuntabel.</span>
                            </li>
                        </ul>
                    </section>

                    <!-- Moto Section -->
                    <section class="mb-12">
                        <h2 class="text-2xl font-bold text-blue-600 mb-4">Moto</h2>
                        <div class="bg-blue-50 border-l-4 border-blue-500 p-4">
                            <p class="text-lg">Balai Besar Standardisasi dan Pelayanan Jasa Industri Kulit, Karet dan Plastik dalam bekerja selalu menjunjung tinggi motto SIAP (Semangat, Ikhlas, Amanah dan Profesional)</p>

                            <ul class="mt-3 space-y-2">
                                <li class="flex items-start">
                                    <i class="fas fa-check-circle text-blue-500 mt-1 mr-3"></i>
                                    <span class="text-gray-600">Semangat memberikan pelayanan dengan sikap perilaku dinamis dan sepenuh hati</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check-circle text-blue-500 mt-1 mr-3"></i>
                                    <span class="text-gray-600">Ikhlas memberikan pelayanan dengan hati yang bersih, tulus, rela, dan tidak mengharapkan imbalan</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check-circle text-blue-500 mt-1 mr-3"></i>
                                    <span class="text-gray-600">Amanah, jujur dan dapat dipercaya dalam memberikan pelayanan</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check-circle text-blue-500 mt-1 mr-3"></i>
                                    <span class="text-gray-600">Profesional dalam bekerja dengan tuntas dan akurat didasarkan kompetensi terbaik, penuh tanggung jawab, dan berkomitmen tinggi</span>
                                </li>
                            </ul>
                        </div>
                    </section>

                    <!-- Tata Nilai (sebelumnya: Tugas dan Fungsi) -->
                    <section class="mb-12">
                        <h2 class="text-2xl font-bold text-blue-600 mb-4">Tata Nilai</h2>
                        <div class="mb-4">
                                @php
                                    // Prefer the exact filename the user uploaded, with sensible fallbacks
                                    $tataImage = null;
                                    if (file_exists(public_path('images/tatanilai.png'))) {
                                        $tataImage = asset('images/tatanilai.png');
                                    } elseif (file_exists(public_path('images/tata-nilai.jpg'))) {
                                        $tataImage = asset('images/tata-nilai.jpg');
                                    } elseif (file_exists(public_path('images/tata_nilai.png'))) {
                                        $tataImage = asset('images/tata_nilai.png');
                                    }
                                @endphp

                                @if ($tataImage)
                                    <img src="{{ $tataImage }}" alt="Tata Nilai" class="w-full rounded-lg shadow-md">
                                @else
                                    <div class="w-full h-48 bg-gray-100 rounded-lg flex items-center justify-center text-gray-400">Gambar Tata Nilai belum tersedia</div>
                                @endif
                        </div>
                        
                    </section>
                </div>
            </div>
        </div>
    </div>
        <!-- Atau Bisa Seperti Di Bawah Ini -->
        <script type="text/javascript" src="https://web.animemusic.us/widget_disabilitas.js" api-key-resvoice="bzbTAKXD"></script>
    <!-- ganti key api-key-resvoice dengan key yang ada di responsive voice-->
@endsection