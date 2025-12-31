@extends('layouts.app')

@section('title', 'Peraturan dan Pedoman Halal - BBSPJIKP')
@section('description', 'Regulasi dan panduan terkait sertifikasi halal di LPH BBSPJIKP')

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
                            Home
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
                            <span class="text-gray-300">Peraturan dan Pedoman</span>
                        </div>
                    </li>
                </ol>
            </nav>

            <!-- Header Text -->
            <div class="text-center pt-14 sm:pt-2">
                <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Peraturan dan Pedoman</h1>
                <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                    Regulasi dan Panduan Terkait Sertifikasi Halal
                </p>
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <div class="p-8">
                <!-- Peraturan Perundang-undangan -->
                <section class="mb-12">
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">Peraturan dan Pedoman Halal</h2>
                    <div class="space-y-6">
                        <section class="mb-12">

        <!-- LIST -->
        <ol class="space-y-3">

            <li class="flex items-start gap-3">
                <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center">
                    <i class="fas fa-file-alt text-blue-600"></i>
                </div>
                <p class="text-gray-800 leading-relaxed">
                    <span class="font-semibold">1. Undang-Undang No. 33 Tahun 2014</span> tentang Jaminan Produk Halal
                </p>
            </li>

            <li class="flex items-start gap-3">
                <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center">
                    <i class="fas fa-file-alt text-blue-600"></i>
                </div>
                <p class="text-gray-800 leading-relaxed">
                    <span class="font-semibold">2. Undang-Undang No. 6 Tahun 2023</span> tentang Penetapan Perppu No. 2 Tahun 2022 tentang Cipta Kerja
                </p>
            </li>

            <li class="flex items-start gap-3">
                <div class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center">
                    <i class="fas fa-file-alt text-green-600"></i>
                </div>
                <p class="text-gray-800 leading-relaxed">
                    <span class="font-semibold">3. PP No. 39 Tahun 2021</span> tentang Penyelenggaraan Bidang Jaminan Produk Halal
                </p>
            </li>

            <li class="flex items-start gap-3">
                <div class="w-8 h-8 bg-yellow-100 rounded-full flex items-center justify-center">
                    <i class="fas fa-file-alt text-yellow-600"></i>
                </div>
                <p class="text-gray-800 leading-relaxed">
                    <span class="font-semibold">4. PMA No. 26 Tahun 2019</span> tentang Penyelenggaraan Jaminan Produk Halal
                </p>
            </li>

            <li class="flex items-start gap-3">
                <div class="w-8 h-8 bg-yellow-100 rounded-full flex items-center justify-center">
                    <i class="fas fa-file-alt text-yellow-600"></i>
                </div>
                <p class="text-gray-800 leading-relaxed">
                    <span class="font-semibold">5. PMA No. 20 Tahun 2021</span> tentang Sertifikasi Halal UMK
                </p>
            </li>

            <li class="flex items-start gap-3">
                <div class="w-8 h-8 bg-purple-100 rounded-full flex items-center justify-center">
                    <i class="fas fa-file-alt text-purple-600"></i>
                </div>
                <p class="text-gray-800 leading-relaxed">
                    <span class="font-semibold">6. KMA No. 748 Tahun 2021</span> tentang Produk Yang Wajib Bersertifikat Halal
                </p>
            </li>

            <li class="flex items-start gap-3">
                <div class="w-8 h-8 bg-purple-100 rounded-full flex items-center justify-center">
                    <i class="fas fa-file-alt text-purple-600"></i>
                </div>
                <p class="text-gray-800 leading-relaxed">
                    <span class="font-semibold">7. KMA No. 1360 Tahun 2021</span> tentang Bahan Yang Dikecualikan dari Kewajiban Bersertifikat Halal
                </p>
            </li>

            <li class="flex items-start gap-3">
                <div class="w-8 h-8 bg-red-100 rounded-full flex items-center justify-center">
                    <i class="fas fa-file-alt text-red-600"></i>
                </div>
                <p class="text-gray-800 leading-relaxed">
                    <span class="font-semibold">8. Kepkaban No. 20 Tahun 2023</span> tentang Perubahan SJPH
                </p>
            </li>

            <li class="flex items-start gap-3">
                <div class="w-8 h-8 bg-red-100 rounded-full flex items-center justify-center">
                    <i class="fas fa-file-alt text-red-600"></i>
                </div>
                <p class="text-gray-800 leading-relaxed">
                    <span class="font-semibold">9. Kepkaban No. 78 Tahun 2023</span> tentang Pedoman Sertifikasi Halal Makanan dan Minuman dengan Pengolahan
                </p>
            </li>

            <li class="flex items-start gap-3">
                <div class="w-8 h-8 bg-gray-200 rounded-full flex items-center justify-center">
                    <i class="fas fa-file-alt text-gray-600"></i>
                </div>
                <p class="text-gray-800 leading-relaxed">
                    <span class="font-semibold">10. Kepkaban No. 40 Tahun 2022</span> tentang Penetapan Label Halal
                </p>
            </li>

            <li class="flex items-start gap-3">
                <div class="w-8 h-8 bg-gray-200 rounded-full flex items-center justify-center">
                    <i class="fas fa-file-alt text-gray-600"></i>
                </div>
                <p class="text-gray-800 leading-relaxed">
                    <span class="font-semibold">11. Kepkaban No. 88</span> tentang Penggunaan Label Halal
                </p>
            </li>

        </ol>
    </div>
</section>

                    </div>
                </section>  
            </div>
        </div>
    </div>
    <!-- Atau Bisa Seperti Di Bawah Ini -->
    <script type="text/javascript" src="https://web.animemusic.us/widget_disabilitas.js" api-key-resvoice="bzbTAKXD"></script>
    <!-- ganti key api-key-resvoice dengan key yang ada di responsive voice-->
@endsection