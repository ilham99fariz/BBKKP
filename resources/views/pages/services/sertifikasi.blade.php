@extends('layouts.app')

@section('title', 'Layanan Sertifikasi - BBSPJIKP')
@section('description', 'Layanan sertifikasi produk, sistem manajemen mutu, dan sertifikasi personil oleh BBSPJIKKP')

@section('content')
    <!-- Hero Section with Background -->
    <div class="relative bg-gray-900">
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
                            {{ __('common.home') }}
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <i class="fas fa-chevron-right text-gray-400 mx-2"></i>
                            <a href="{{ route('services.index') }}" class="text-gray-300 hover:text-white">
                                {{ __('common.services') }}
                            </a>
                        </div>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <i class="fas fa-chevron-right text-gray-400 mx-2"></i>
                            <span class="text-gray-300">{{ __('common.certification') }}</span>
                        </div>
                    </li>
                </ol>
            </nav>

            <!-- Header Text -->
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">{{ __('sertifikasi.hero_title') }}</h1>
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <!-- Navigation Tabs untuk Sertifikasi -->
        <div class="mb-8">
            <div class="border-b border-gray-200">
                <nav class="flex flex-wrap space-x-4 md:space-x-8" aria-label="Sertifikasi Tabs">
                    <button onclick="showSertifikasi('sppt-sni')" id="tab-sppt-sni"
                        class="sertifikasi-tab border-b-2 border-blue-600 py-4 px-1 text-sm font-medium text-blue-600">
                        {{ __('sertifikasi.product_certification') }}
                    </button>
                    <button onclick="showSertifikasi('smm')" id="tab-smm"
                        class="sertifikasi-tab border-b-2 border-transparent py-4 px-1 text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300">
                        {{ __('sertifikasi.smm') }}
                    </button>
                    <button onclick="showSertifikasi('smk3')" id="tab-smk3"
                        class="sertifikasi-tab border-b-2 border-transparent py-4 px-1 text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300">
                        {{ __('sertifikasi.smk3') }}
                    </button>
                    <button onclick="showSertifikasi('sml')" id="tab-sml"
                        class="sertifikasi-tab border-b-2 border-transparent py-4 px-1 text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300">
                        {{ __('sertifikasi.sml') }}
                    </button>
                    <button onclick="showSertifikasi('sih')" id="tab-sih"
                        class="sertifikasi-tab border-b-2 border-transparent py-4 px-1 text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300">
                        {{ __('sertifikasi.sih') }}
                    </button>
                    <button onclick="showSertifikasi('personil')" id="tab-personil"
                        class="sertifikasi-tab border-b-2 border-transparent py-4 px-1 text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300">
                        {{ __('sertifikasi.personnel_certification') }}
                    </button>
                </nav>
            </div>
        </div>

        <!-- Content: Sertifikasi Produk (SPPT SNI) - LSPr BBSPJIKKP JPA -->
        <div id="content-sppt-sni" class="sertifikasi-content">
            <section class="mb-8">
                <h2 class="text-3xl font-bold text-gray-900 mb-6">LSPr BBSPJIKKP JPA</h2>

                <div class="prose max-w-none text-gray-700 space-y-4 mb-8">
                    <p>
                        Lembaga Sertifikasi Produk BBSPJIKKP JPA (LSPr BBSPJIKKP JPA) adalah lembaga independen di
                        lingkungan Balai Besar Kulit, Karet dan Plastik (BBKKP), Badan Standardisasi dan Kebijakan Jasa
                        Industri (BSKJI), Kementerian Perindustrian, yang melayani dan menangani kegiatan Sertifikasi Produk
                        Penggunaan Tanda SNI atau Standar lain yang diacu/diakui.
                    </p>
                    <p>
                        LSPr BBSPJIKKP JPA telah diakreditasi oleh Komite Akreditasi Nasional (KAN), dengan No.
                        <strong>LSPr-009-IDN</strong> berlaku 5 Mei 2020 sampai dengan 22 April 2025. LSPr BBSPJIKKP JPA
                        dalam kegiatannya didukung oleh SDM yang kompeten di bidang Sistem Manajemen Mutu, Laboratorium,
                        Standar, Keteknikan, dan Keilmuan, dengan personel lembaga yang memenuhi persyaratan suatu lembaga
                        sertifikasi.
                    </p>
                </div>

                <div class="bg-gray-50 p-6 rounded-lg mb-8">
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">
                        {{ __('sertifikasi.product_certification_title') }}</h3>
                    <p class="text-gray-700">
                        Proses pemberian sertifikat produk kepada perusahaan yang telah menerapkan sistem mutu dan mampu
                        menghasilkan suatu produk dengan mutu yang konsisten sesuai standar yang diacu dan diakui.
                    </p>
                </div>

                <div class="bg-gray-50 p-6 rounded-lg mb-8">
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">{{ __('sertifikasi.certificate_title') }}</h3>
                    <p class="text-gray-700">
                        Dokumen yang diterbitkan oleh Lembaga Sertifikasi Produk menyatakan bahwa suatu perusahaan/produsen
                        telah berhak memakai tanda SNI atau standar lainnya yang diacu dan diakui pada produk tertentu yang
                        dihasilkan.
                    </p>
                </div>

                <h3 class="text-2xl font-semibold text-gray-800 mb-4">{{ __('sertifikasi.scope') }} LSPr BBSPJIKKP JPA:
                </h3>

                <div class="overflow-x-auto mb-8 shadow-lg rounded-lg border border-gray-200">
                    <table class="min-w-full divide-y divide-gray-200 border-collapse">
                        <thead class="bg-blue-600 text-white">
                            <tr class="hover:bg-gray-50 transition-colors">
                                <th
                                    class="px-3 py-3 text-left text-xs font-semibold uppercase tracking-wider border border-gray-300 whitespace-nowrap">
                                    NO</th>
                                <th
                                    class="px-3 py-3 text-left text-xs font-semibold uppercase tracking-wider border border-gray-300">
                                    KELOMPOK PRODUK</th>
                                <th
                                    class="px-3 py-3 text-left text-xs font-semibold uppercase tracking-wider border border-gray-300">
                                    SUB KELOMPOK PRODUK</th>
                                <th
                                    class="px-3 py-3 text-left text-xs font-semibold uppercase tracking-wider border border-gray-300 whitespace-nowrap">
                                    SNI</th>
                                <th
                                    class="px-3 py-3 text-left text-xs font-semibold uppercase tracking-wider border border-gray-300">
                                    NAMA PRODUK</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <!-- A. PERALATAN PERLINDUNGAN NON MEDIS -->
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="px-3 py-3 text-sm border border-gray-300 text-center font-medium align-top"
                                    rowspan="1">
                                    1</td>
                                <td class="px-3 py-3 text-sm border border-gray-300 font-medium align-top" rowspan="1">A.
                                    PERALATAN
                                    PERLINDUNGAN NON MEDIS</td>
                                <td class="px-3 py-3 text-sm border border-gray-300 align-top">Pelindung kaki</td>
                                <td class="px-3 py-3 text-sm border border-gray-300 align-top whitespace-nowrap">SNI
                                    8877:2023</td>
                                <td class="px-3 py-3 text-sm border border-gray-300 align-top">Alat pelindung diri - Sepatu
                                    Pengaman
                                </td>
                            </tr>
                            <!-- B. PERTANIAN DAN PERKEBUNAN -->
                            <tr class="bg-gray-50 hover:bg-gray-100 transition-colors">
                                <td class="px-3 py-3 text-sm border border-gray-300 text-center font-medium align-top"
                                    rowspan="1">
                                    2</td>
                                <td class="px-3 py-3 text-sm border border-gray-300 font-medium align-top" rowspan="1">B.
                                    PERTANIAN
                                    DAN PERKEBUNAN</td>
                                <td class="px-3 py-3 text-sm border border-gray-300 align-top">Hasil pertanian dan
                                    perkebunan</td>
                                <td class="px-3 py-3 text-sm border border-gray-300 align-top whitespace-nowrap">SNI
                                    2907:2008</td>
                                <td class="px-3 py-3 text-sm border border-gray-300 align-top">Biji kopi</td>
                            </tr>
                            <!-- C. PRODUK TANAMAN DAN TURUNANNYA -->
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="px-3 py-3 text-sm border border-gray-300 text-center font-medium align-top"
                                    rowspan="1">
                                    3</td>
                                <td class="px-3 py-3 text-sm border border-gray-300 font-medium align-top" rowspan="1">C.
                                    PRODUK
                                    TANAMAN DAN TURUNANNYA</td>
                                <td class="px-3 py-3 text-sm border border-gray-300 align-top">Gula, produk gula, pati</td>
                                <td class="px-3 py-3 text-sm border border-gray-300 align-top whitespace-nowrap">SNI
                                    3140.3:2010/amd1:2011</td>
                                <td class="px-3 py-3 text-sm border border-gray-300 align-top">Gula kristal - Bagian 3:
                                    Putih</td>
                            </tr>
                            <!-- D. PRODUK PANGAN DAN LAINNYA -->
                            <tr class="bg-gray-50 hover:bg-gray-100 transition-colors">
                                <td class="px-3 py-3 text-sm border border-gray-300 text-center font-medium align-top"
                                    rowspan="2">
                                    4</td>
                                <td class="px-3 py-3 text-sm border border-gray-300 font-medium align-top" rowspan="5">D.
                                    PRODUK
                                    PANGAN DAN LAINNYA</td>
                                <td class="px-3 py-3 text-sm border border-gray-300 align-top" rowspan="5">Minuman</td>
                                <td class="px-3 py-3 text-sm border border-gray-300 align-top whitespace-nowrap">SNI
                                    3553:2015</td>
                                <td class="px-3 py-3 text-sm border border-gray-300 align-top">Air minum dalam kemasan: Air
                                    mineral
                                </td>
                            </tr>
                            <tr class="bg-gray-50 hover:bg-gray-100 transition-colors">
                                <td class="px-3 py-3 text-sm border border-gray-300 align-top whitespace-nowrap">SNI
                                    3553:2023</td>
                                <td class="px-3 py-3 text-sm border border-gray-300 align-top">Air minum dalam kemasan: Air
                                    mineral
                                </td>
                            </tr>
                            <tr class="bg-gray-50 hover:bg-gray-100 transition-colors">
                                <td class="px-3 py-3 text-sm border border-gray-300 text-center font-medium align-top"
                                    rowspan="2">
                                    5</td>
                                <td class="px-3 py-3 text-sm border border-gray-300 align-top whitespace-nowrap">SNI
                                    6241:2015</td>
                                <td class="px-3 py-3 text-sm border border-gray-300 align-top">Air minum dalam kemasan: Air
                                    demineral
                                </td>
                            </tr>
                            <tr class="bg-gray-50 hover:bg-gray-100 transition-colors">
                                <td class="px-3 py-3 text-sm border border-gray-300 align-top whitespace-nowrap">SNI
                                    6241:2023</td>
                                <td class="px-3 py-3 text-sm border border-gray-300 align-top">Air minum dalam kemasan: Air
                                    demineral
                                </td>
                            </tr>
                            <tr class="bg-gray-50 hover:bg-gray-100 transition-colors">
                                <td class="px-3 py-3 text-sm border border-gray-300 text-center font-medium align-top">
                                    6</td>
                                <td class="px-3 py-3 text-sm border border-gray-300 align-top whitespace-nowrap">SNI
                                    6241:2015</td>
                                <td class="px-3 py-3 text-sm border border-gray-300 align-top">Air minum pH tinggi</td>
                            </tr>
                            <!-- E. BAHAN DAN PRODUK KIMIA -->
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="px-3 py-3 text-sm border border-gray-300 text-center font-medium"
                                    rowspan="6">7-12</td>
                                <td class="px-3 py-3 text-sm border border-gray-300 font-medium" rowspan="6">E. BAHAN
                                    DAN PRODUK KIMIA</td>
                                <td class="px-3 py-3 text-sm border border-gray-300" rowspan="6">Bijih plastik</td>
                                <td class="px-3 py-3 text-sm border border-gray-300 align-top whitespace-nowrap">SNI
                                    594:2022</td>
                                <td class="px-3 py-3 text-sm border border-gray-300 align-top">Polipropilena (PP)</td>
                            </tr>
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="px-3 py-3 text-sm border border-gray-300 align-top whitespace-nowrap">SNI
                                    8432:2022</td>
                                <td class="px-3 py-3 text-sm border border-gray-300 align-top">Polipropilena kopolimer
                                    impak untuk
                                    komponen otomotif</td>
                            </tr>
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="px-3 py-3 text-sm border border-gray-300 align-top whitespace-nowrap">SNI
                                    7808:2022</td>
                                <td class="px-3 py-3 text-sm border border-gray-300 align-top">Polietilena (PE)</td>
                            </tr>
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="px-3 py-3 text-sm border border-gray-300 align-top whitespace-nowrap">SNI
                                    8887:2022</td>
                                <td class="px-3 py-3 text-sm border border-gray-300 align-top">Polietilena massa jenis
                                    tinggi dengan
                                    klasifikasi PE 100 untuk aplikasi pipa penyaluran bahan bakar gas</td>
                            </tr>
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="px-3 py-3 text-sm border border-gray-300 align-top whitespace-nowrap">SNI
                                    7593:2010</td>
                                <td class="px-3 py-3 text-sm border border-gray-300 align-top">Polietilena massa jenis
                                    tinggi (high
                                    density polyethylene/HDPE) untuk bahan baku pipa air minum</td>
                            </tr>
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="px-3 py-3 text-sm border border-gray-300 align-top whitespace-nowrap">SNI
                                    59:2017</td>
                                <td class="px-3 py-3 text-sm border border-gray-300 align-top">Resin polivinil klorida
                                    (PVC)</td>
                            </tr>
                            <!-- F. PRODUK KARET DAN PLASTIK -->
                            <tr class="bg-gray-50 hover:bg-gray-100 transition-colors">
                                <td class="px-3 py-3 text-sm border border-gray-300 text-center font-medium"
                                    rowspan="2">13-14</td>
                                <td class="px-3 py-3 text-sm border border-gray-300 font-medium" rowspan="2">F. PRODUK
                                    KARET DAN PLASTIK</td>
                                <td class="px-3 py-3 text-sm border border-gray-300 align-top">Karet / SIR</td>
                                <td class="px-3 py-3 text-sm border border-gray-300 align-top whitespace-nowrap">SNI
                                    1903:2017</td>
                                <td class="px-3 py-3 text-sm border border-gray-300 align-top">Karet alam – Spesifikasi
                                    teknis
                                    Standard Indonesian Rubber (SIR)</td>
                            </tr>
                            <tr class="bg-gray-50 hover:bg-gray-100 transition-colors">
                                <td class="px-3 py-3 text-sm border border-gray-300 align-top">Karet / SIR</td>
                                <td class="px-3 py-3 text-sm border border-gray-300 align-top whitespace-nowrap">SNI
                                    06-0001-1987</td>
                                <td class="px-3 py-3 text-sm border border-gray-300 align-top">Karet konvensional</td>
                            </tr>
                            <!-- Produk berbahan dasar karet -->
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="px-3 py-3 text-sm border border-gray-300 text-center font-medium align-top"
                                    rowspan="2">15</td>
                                <td class="px-3 py-3 text-sm border border-gray-300 font-medium align-top" rowspan="12">
                                    F. PRODUK
                                    KARET DAN PLASTIK</td>
                                <td class="px-3 py-3 text-sm border border-gray-300 align-top" rowspan="12">Produk
                                    berbahan dasar
                                    karet</td>
                                <td class="px-3 py-3 text-sm border border-gray-300 align-top whitespace-nowrap">SNI
                                    0098:2012</td>
                                <td class="px-3 py-3 text-sm border border-gray-300 align-top">Ban mobil penumpang</td>
                            </tr>
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="px-3 py-3 text-sm border border-gray-300 align-top whitespace-nowrap">SNI
                                    0098:2019</td>
                                <td class="px-3 py-3 text-sm border border-gray-300 align-top">Ban mobil penumpang</td>
                            </tr>
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="px-3 py-3 text-sm border border-gray-300 text-center font-medium align-top"
                                    rowspan="2">16</td>
                                <td class="px-3 py-3 text-sm border border-gray-300 align-top whitespace-nowrap">SNI
                                    0099:2012</td>
                                <td class="px-3 py-3 text-sm border border-gray-300 align-top">Ban truk dan bus</td>
                            </tr>
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="px-3 py-3 text-sm border border-gray-300 align-top whitespace-nowrap">SNI
                                    0099:2019</td>
                                <td class="px-3 py-3 text-sm border border-gray-300 align-top">Ban truk dan bus</td>
                            </tr>
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="px-3 py-3 text-sm border border-gray-300 text-center font-medium align-top"
                                    rowspan="2">17</td>
                                <td class="px-3 py-3 text-sm border border-gray-300 align-top whitespace-nowrap">SNI
                                    0100:2012</td>
                                <td class="px-3 py-3 text-sm border border-gray-300 align-top">Ban truk ringan</td>
                            </tr>
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="px-3 py-3 text-sm border border-gray-300 align-top whitespace-nowrap">SNI
                                    0100:2019</td>
                                <td class="px-3 py-3 text-sm border border-gray-300 align-top">Ban truk ringan</td>
                            </tr>
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="px-3 py-3 text-sm border border-gray-300 text-center font-medium align-top"
                                    rowspan="2">18</td>
                                <td class="px-3 py-3 text-sm border border-gray-300 align-top whitespace-nowrap">SNI
                                    0101:2012</td>
                                <td class="px-3 py-3 text-sm border border-gray-300 align-top">Ban sepeda motor</td>
                            </tr>
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="px-3 py-3 text-sm border border-gray-300 align-top whitespace-nowrap">SNI
                                    0101:2019</td>
                                <td class="px-3 py-3 text-sm border border-gray-300 align-top">Ban sepeda motor</td>
                            </tr>
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="px-3 py-3 text-sm border border-gray-300 text-center font-medium align-top">
                                    19</td>
                                <td class="px-3 py-3 text-sm border border-gray-300 align-top whitespace-nowrap">SNI
                                    6700:2012</td>
                                <td class="px-3 py-3 text-sm border border-gray-300 align-top">Ban dalam kendaraan bermotor
                                </td>
                            </tr>
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="px-3 py-3 text-sm border border-gray-300 text-center font-medium align-top">
                                    20</td>
                                <td class="px-3 py-3 text-sm border border-gray-300 align-top whitespace-nowrap">SNI
                                    3768:2013</td>
                                <td class="px-3 py-3 text-sm border border-gray-300 align-top">Ban vulkanisir</td>
                            </tr>
                            <!-- Pipa/selang -->
                            <tr class="bg-gray-50 hover:bg-gray-100 transition-colors">
                                <td class="px-3 py-3 text-sm border border-gray-300 text-center font-medium"
                                    rowspan="2">21-22</td>
                                <td class="px-3 py-3 text-sm border border-gray-300 font-medium" rowspan="2">F. PRODUK
                                    KARET DAN PLASTIK</td>
                                <td class="px-3 py-3 text-sm border border-gray-300" rowspan="2">Pipa/selang</td>
                                <td class="px-3 py-3 text-sm border border-gray-300 align-top whitespace-nowrap">SNI
                                    8022:2022</td>
                                <td class="px-3 py-3 text-sm border border-gray-300 align-top">Selang Termoplastik
                                    elastometer untuk
                                    kompor gas LPG</td>
                            </tr>
                            <tr class="bg-gray-50 hover:bg-gray-100 transition-colors">
                                <td class="px-3 py-3 text-sm border border-gray-300 align-top whitespace-nowrap">SNI
                                    7213:2014</td>
                                <td class="px-3 py-3 text-sm border border-gray-300 align-top">Selang karet untuk kompor
                                    gas LPG</td>
                            </tr>
                            <!-- Tangki air -->
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="px-3 py-3 text-sm border border-gray-300 text-center font-medium"
                                    rowspan="2">23</td>
                                <td class="px-3 py-3 text-sm border border-gray-300 font-medium" rowspan="2">F. PRODUK
                                    KARET DAN PLASTIK</td>
                                <td class="px-3 py-3 text-sm border border-gray-300" rowspan="2">Tangki air</td>
                                <td class="px-3 py-3 text-sm border border-gray-300 align-top whitespace-nowrap">SNI
                                    7276:2014</td>
                                <td class="px-3 py-3 text-sm border border-gray-300 align-top">Tangki air silinder vertikal
                                    –
                                    Polietilena (PE)</td>
                            </tr>
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="px-3 py-3 text-sm border border-gray-300 align-top whitespace-nowrap">SNI
                                    7276:2020</td>
                                <td class="px-3 py-3 text-sm border border-gray-300 align-top">Tangki air silinder vertikal
                                    –
                                    Polietilena (PE)</td>
                            </tr>
                            <!-- Produk karet dan plastik lainnya -->
                            <tr class="bg-gray-50 hover:bg-gray-100 transition-colors">
                                <td class="px-3 py-3 text-sm border border-gray-300 text-center font-medium align-top"
                                    rowspan="2">24</td>
                                <td class="px-3 py-3 text-sm border border-gray-300 font-medium align-top" rowspan="11">
                                    F. PRODUK
                                    KARET DAN PLASTIK</td>
                                <td class="px-3 py-3 text-sm border border-gray-300 align-top" rowspan="11">Produk karet
                                    dan
                                    plastik lainnya</td>
                                <td class="px-3 py-3 text-sm border border-gray-300 align-top whitespace-nowrap">SNI
                                    0778:2017</td>
                                <td class="px-3 py-3 text-sm border border-gray-300 align-top">Rol karet pengupas gabah
                                </td>
                            </tr>
                            <tr class="bg-gray-50 hover:bg-gray-100 transition-colors">
                                <td class="px-3 py-3 text-sm border border-gray-300 align-top whitespace-nowrap">SNI
                                    1843:2008/amd1:2011</td>
                                <td class="px-3 py-3 text-sm border border-gray-300 align-top">Rol karet pengupas gabah
                                </td>
                            </tr>
                            <tr class="bg-gray-50 hover:bg-gray-100 transition-colors">
                                <td class="px-3 py-3 text-sm border border-gray-300 text-center font-medium align-top">
                                    25</td>
                                <td class="px-3 py-3 text-sm border border-gray-300 align-top whitespace-nowrap">SNI
                                    7655:2010</td>
                                <td class="px-3 py-3 text-sm border border-gray-300 align-top">Karet perapat (rubber seal)
                                    pada katup
                                    tabung LPG</td>
                            </tr>
                            <tr class="bg-gray-50 hover:bg-gray-100 transition-colors">
                                <td class="px-3 py-3 text-sm border border-gray-300 text-center font-medium align-top">
                                    26</td>
                                <td class="px-3 py-3 text-sm border border-gray-300 align-top whitespace-nowrap">SNI
                                    0778:2017</td>
                                <td class="px-3 py-3 text-sm border border-gray-300 align-top">Sol karet cetak</td>
                            </tr>
                            <tr class="bg-gray-50 hover:bg-gray-100 transition-colors">
                                <td class="px-3 py-3 text-sm border border-gray-300 text-center font-medium align-top">
                                    27</td>
                                <td class="px-3 py-3 text-sm border border-gray-300 align-top whitespace-nowrap">SNI
                                    12-1000-1989</td>
                                <td class="px-3 py-3 text-sm border border-gray-300 align-top">Karpet karet</td>
                            </tr>
                            <tr class="bg-gray-50 hover:bg-gray-100 transition-colors">
                                <td class="px-3 py-3 text-sm border border-gray-300 text-center font-medium align-top">
                                    28</td>
                                <td class="px-3 py-3 text-sm border border-gray-300 align-top whitespace-nowrap">SNI
                                    06-3568-2006</td>
                                <td class="px-3 py-3 text-sm border border-gray-300 align-top">Vulkanisat karet bantalan
                                    dermaga</td>
                            </tr>
                            <tr class="bg-gray-50 hover:bg-gray-100 transition-colors">
                                <td class="px-3 py-3 text-sm border border-gray-300 text-center font-medium align-top">
                                    29</td>
                                <td class="px-3 py-3 text-sm border border-gray-300 align-top whitespace-nowrap">SNI
                                    3967:2013</td>
                                <td class="px-3 py-3 text-sm border border-gray-300 align-top">Bantalan karet (elastomer)
                                    untuk
                                    perletakan jembatan</td>
                            </tr>
                            <tr class="bg-gray-50 hover:bg-gray-100 transition-colors">
                                <td class="px-3 py-3 text-sm border border-gray-300 text-center font-medium align-top">
                                    30</td>
                                <td class="px-3 py-3 text-sm border border-gray-300 align-top whitespace-nowrap">SNI
                                    7582:2010</td>
                                <td class="px-3 py-3 text-sm border border-gray-300 align-top">Terpal plastik untuk biji-
                                    bijian
                                    produk pertanian</td>
                            </tr>
                            <tr class="bg-gray-50 hover:bg-gray-100 transition-colors">
                                <td class="px-3 py-3 text-sm border border-gray-300 text-center font-medium align-top">
                                    31</td>
                                <td class="px-3 py-3 text-sm border border-gray-300 align-top whitespace-nowrap">SNI
                                    19-0057-1998</td>
                                <td class="px-3 py-3 text-sm border border-gray-300 align-top">Karung tenun plastik
                                    poliolefin</td>
                            </tr>
                            <tr class="bg-gray-50 hover:bg-gray-100 transition-colors">
                                <td class="px-3 py-3 text-sm border border-gray-300 text-center font-medium align-top">
                                    32</td>
                                <td class="px-3 py-3 text-sm border border-gray-300 align-top whitespace-nowrap">SNI
                                    19-4957-1998</td>
                                <td class="px-3 py-3 text-sm border border-gray-300 align-top">Karung tenun poliolefin
                                    ukuran jumbo
                                    (karung kontainer)</td>
                            </tr>
                            <tr class="bg-gray-50 hover:bg-gray-100 transition-colors">
                                <td class="px-3 py-3 text-sm border border-gray-300 text-center font-medium align-top">
                                    33</td>
                                <td class="px-3 py-3 text-sm border border-gray-300 align-top whitespace-nowrap">SNI ISO
                                    23560:2011</td>
                                <td class="px-3 py-3 text-sm border border-gray-300 align-top">Karung tenun polipropilena
                                    (PP) untuk
                                    kemasan bahan pangan curah</td>
                            </tr>
                            <tr class="bg-gray-50 hover:bg-gray-100 transition-colors">
                                <td class="px-3 py-3 text-sm border border-gray-300 text-center font-medium align-top">
                                    34</td>
                                <td class="px-3 py-3 text-sm border border-gray-300 align-top whitespace-nowrap">SNI
                                    9243:2023</td>
                                <td class="px-3 py-3 text-sm border border-gray-300 align-top">Karung tenun plastik
                                    polipropilena
                                    (PP) block bottom single ply untuk kemasan semen</td>
                            </tr>
                            <!-- G. PERALATAN RUMAH TANGGA, OLAHRAGA, DAN HIBURAN -->
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="px-3 py-3 text-sm border border-gray-300 text-center font-medium align-top">
                                    35</td>
                                <td class="px-3 py-3 text-sm border border-gray-300 font-medium align-top" rowspan="10">
                                    G.
                                    PERALATAN RUMAH TANGGA, OLAHRAGA, DAN HIBURAN</td>
                                <td class="px-3 py-3 text-sm border border-gray-300 align-top" rowspan="10">Peralatan
                                    rumah
                                    tangga, olahraga, dan hiburan lainnya</td>
                                <td class="px-3 py-3 text-sm border border-gray-300 align-top whitespace-nowrap">SNI
                                    12-1848-2006</td>
                                <td class="px-3 py-3 text-sm border border-gray-300 align-top">Sepatu bot PVC</td>
                            </tr>
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="px-3 py-3 text-sm border border-gray-300 text-center font-medium align-top">
                                    36</td>
                                <td class="px-3 py-3 text-sm border border-gray-300 align-top whitespace-nowrap">SNI
                                    12-1548-1989</td>
                                <td class="px-3 py-3 text-sm border border-gray-300 align-top">Sepatu bot PVC cetak tahan
                                    minyak dan
                                    lemak</td>
                            </tr>
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="px-3 py-3 text-sm border border-gray-300 text-center font-medium align-top">
                                    37</td>
                                <td class="px-3 py-3 text-sm border border-gray-300 align-top whitespace-nowrap">SNI
                                    1547-2017</td>
                                <td class="px-3 py-3 text-sm border border-gray-300 align-top">Sepatu bot PVC tahan kimia
                                </td>
                            </tr>
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="px-3 py-3 text-sm border border-gray-300 text-center font-medium align-top">
                                    38</td>
                                <td class="px-3 py-3 text-sm border border-gray-300 align-top whitespace-nowrap">SNI
                                    2942.1:2009</td>
                                <td class="px-3 py-3 text-sm border border-gray-300 align-top">Sepatu - Kulit sistem lem -
                                    Bagian 1:
                                    Wanita</td>
                            </tr>
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="px-3 py-3 text-sm border border-gray-300 text-center font-medium align-top">
                                    39</td>
                                <td class="px-3 py-3 text-sm border border-gray-300 align-top whitespace-nowrap">SNI
                                    2942.2:2009</td>
                                <td class="px-3 py-3 text-sm border border-gray-300 align-top">Sepatu - Kulit sistem lem -
                                    Bagian 2:
                                    Pria</td>
                            </tr>
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="px-3 py-3 text-sm border border-gray-300 text-center font-medium align-top">
                                    40</td>
                                <td class="px-3 py-3 text-sm border border-gray-300 align-top whitespace-nowrap">SNI 12 -
                                    7074 – 2005</td>
                                <td class="px-3 py-3 text-sm border border-gray-300 align-top">Sandal plastik PVC</td>
                            </tr>
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="px-3 py-3 text-sm border border-gray-300 text-center font-medium align-top">
                                    41</td>
                                <td class="px-3 py-3 text-sm border border-gray-300 align-top whitespace-nowrap">SNI 12 -
                                    7075 – 2005</td>
                                <td class="px-3 py-3 text-sm border border-gray-300 align-top">Sepatu olah raga dengan sol
                                    cetak
                                    sistem lem</td>
                            </tr>
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="px-3 py-3 text-sm border border-gray-300 text-center font-medium align-top">
                                    42</td>
                                <td class="px-3 py-3 text-sm border border-gray-300 align-top whitespace-nowrap">SNI 12 -
                                    0171 – 2005</td>
                                <td class="px-3 py-3 text-sm border border-gray-300 align-top">Sepatu kanvas untuk olahraga
                                    dengan
                                    sol karet cetak sistem vulkanisasi</td>
                            </tr>
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="px-3 py-3 text-sm border border-gray-300 text-center font-medium align-top">
                                    43</td>
                                <td class="px-3 py-3 text-sm border border-gray-300 align-top whitespace-nowrap">SNI 12 –
                                    0172 – 2005</td>
                                <td class="px-3 py-3 text-sm border border-gray-300 align-top">Sepatu kanvas untuk umum
                                </td>
                            </tr>
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="px-3 py-3 text-sm border border-gray-300 text-center font-medium align-top">
                                    44</td>
                                <td class="px-3 py-3 text-sm border border-gray-300 align-top whitespace-nowrap">SNI ISO
                                    4643:2012</td>
                                <td class="px-3 py-3 text-sm border border-gray-300 align-top">Alas kaki plastik sistem
                                    cetak -
                                    Sepatu bot poli(vinil klorida) dengan lapis atau tanpa lapis untuk keperluan industri
                                    secara umum - Spesifikasi</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Dokumen dan Link -->
                <div class="space-y-4 mb-8">
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Dokumen dan Formulir</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <a href="#" class="block p-4 border rounded-lg hover:bg-gray-50 transition">
                            <i class="fas fa-file-pdf text-red-600 mr-2"></i>
                            <span
                                class="text-blue-600 hover:text-blue-800 font-semibold">{{ __('sertifikasi.download_form') }}
                                {{ __('sertifikasi.product_certification') }}</span>
                        </a>
                        <a href="#" class="block p-4 border rounded-lg hover:bg-gray-50 transition">
                            <i class="fas fa-file-pdf text-red-600 mr-2"></i>
                            <span
                                class="text-blue-600 hover:text-blue-800 font-semibold">{{ __('sertifikasi.download_additional_form') }}</span>
                        </a>
                        <a href="#" class="block p-4 border rounded-lg hover:bg-gray-50 transition">
                            <i class="fas fa-file-pdf text-red-600 mr-2"></i>
                            <span
                                class="text-blue-600 hover:text-blue-800 font-semibold">{{ __('sertifikasi.client_rights_obligations') }}
                                LSPr</span>
                        </a>
                        <a href="#" class="block p-4 border rounded-lg hover:bg-gray-50 transition">
                            <i class="fas fa-file-pdf text-red-600 mr-2"></i>
                            <span
                                class="text-blue-600 hover:text-blue-800 font-semibold">{{ __('sertifikasi.logo_usage') }}</span>
                        </a>
                        <a href="#" class="block p-4 border rounded-lg hover:bg-gray-50 transition">
                            <i class="fas fa-file-pdf text-red-600 mr-2"></i>
                            <span
                                class="text-blue-600 hover:text-blue-800 font-semibold">{{ __('sertifikasi.audit_procedure') }}</span>
                        </a>
                        <a href="#" class="block p-4 border rounded-lg hover:bg-gray-50 transition">
                            <i class="fas fa-file-pdf text-red-600 mr-2"></i>
                            <span
                                class="text-blue-600 hover:text-blue-800 font-semibold">{{ __('sertifikasi.certification_procedure') }}</span>
                        </a>
                        <a href="#" class="block p-4 border rounded-lg hover:bg-gray-50 transition">
                            <i class="fas fa-file-pdf text-red-600 mr-2"></i>
                            <span class="text-blue-600 hover:text-blue-800 font-semibold">{{ __('sertifikasi.scope') }}
                                {{ __('That has been accredited by KAN') }}</span>
                        </a>
                    </div>
                </div>

                <!-- Data Klien -->
                <div class="bg-white border rounded-lg p-6 shadow-sm mb-8">
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">{{ __('sertifikasi.client_data') }} LSPr
                        BBSPJIKKP JPA</h3>
                    <p class="text-gray-700 mb-4">
                        {{ __('sertifikasi.client_data_desc') }}
                    </p>
                </div>

                <!-- Skema Sertifikasi Produk -->
                <div class="bg-white border rounded-lg p-6 shadow-sm mb-8">
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">{{ __('sertifikasi.certification_scheme') }}</h3>
                    <p class="text-gray-700">
                        {{ __('sertifikasi.certification_scheme_desc') }}
                    </p>
                </div>
            </section>
        </div>

        <!-- Content: SMM -->
        <div id="content-smm" class="sertifikasi-content hidden">
            <section class="mb-8">
                <h2 class="text-3xl font-bold text-gray-900 mb-6">LSSM BBSPJIKKP YOQA</h2>

                <div class="prose max-w-none text-gray-700 space-y-4 mb-8">
                    <p>
                        Lembaga Sertifikasi Sistem Mutu BBSPJIKKP YOQA (LSSM BBSPJIKKP YOQA) telah mendapatkan akreditasi
                        oleh Komite Akreditasi Nasional (KAN) sejak <strong>12 Januari 1996</strong>.
                    </p>
                </div>

                <h3 class="text-2xl font-semibold text-gray-800 mb-4">{{ __('sertifikasi.scope_qms') }}</h3>

                <div class="bg-gray-50 p-6 rounded-lg mb-8">
                    <ul class="list-disc pl-6 space-y-2 text-gray-700">
                        <li>Industri kulit dan produk kulit</li>
                        <li>Produk karet dan plastik</li>
                        <li>Makanan, minuman dan tembakau</li>
                        <li>Kimia, produk kimia dan serat</li>
                        <li>Tekstil dan produk tekstil</li>
                    </ul>
                </div>

                <div class="prose max-w-none text-gray-700 space-y-4 mb-8">
                    <p>
                        LSSM BBSPJIKKP YOQA memberikan layanan terbaik Sertifikasi Sistem Manajemen Mutu <strong>SNI ISO
                            9001:2015</strong>. Dengan dukungan Sumber Daya Manusia yang berpengalaman dan berdedikasi akan
                        menjadikan perusahaan anda ke arah pencapaian konsistensi sistem mutu dan kepercayaan konsumen.
                        Kepercayaan merupakan akar loyalitas, dan keloyalan konsumen merupakan aset perusahaan anda yang tak
                        tertandingi.
                    </p>
                </div>

                <!-- Dokumen dan Link -->
                <div class="space-y-4 mb-8">
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Dokumen dan Formulir</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <a href="#" class="block p-4 border rounded-lg hover:bg-gray-50 transition">
                            <i class="fas fa-file-pdf text-red-600 mr-2"></i>
                            <span
                                class="text-blue-600 hover:text-blue-800 font-semibold">{{ __('sertifikasi.download_form') }}
                                {{ __('sertifikasi.smm') }}</span>
                        </a>
                        <a href="#" class="block p-4 border rounded-lg hover:bg-gray-50 transition">
                            <i class="fas fa-file-pdf text-red-600 mr-2"></i>
                            <span
                                class="text-blue-600 hover:text-blue-800 font-semibold">{{ __('sertifikasi.client_rights_obligations') }}
                                LSSM</span>
                        </a>
                        <a href="#" class="block p-4 border rounded-lg hover:bg-gray-50 transition">
                            <i class="fas fa-file-pdf text-red-600 mr-2"></i>
                            <span
                                class="text-blue-600 hover:text-blue-800 font-semibold">{{ __('sertifikasi.logo_usage') }}
                                {{ __('sertifikasi.smm') }}</span>
                        </a>
                        <a href="#" class="block p-4 border rounded-lg hover:bg-gray-50 transition">
                            <i class="fas fa-file-pdf text-red-600 mr-2"></i>
                            <span
                                class="text-blue-600 hover:text-blue-800 font-semibold">{{ __('sertifikasi.audit_procedure') }}</span>
                        </a>
                        <a href="#" class="block p-4 border rounded-lg hover:bg-gray-50 transition">
                            <i class="fas fa-file-pdf text-red-600 mr-2"></i>
                            <span
                                class="text-blue-600 hover:text-blue-800 font-semibold">{{ __('sertifikasi.certification_procedure') }}</span>
                        </a>
                    </div>
                </div>

                <!-- Data Klien -->
                <div class="bg-white border rounded-lg p-6 shadow-sm mb-8">
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">{{ __('sertifikasi.client_data') }} LSSM
                        BBSPJIKKP YOQA</h3>
                    <p class="text-gray-700">
                        {{ __('sertifikasi.client_data_desc') }}
                    </p>
                </div>
            </section>
        </div>

        <!-- Content: SMK3 -->
        <div id="content-smk3" class="sertifikasi-content hidden">
            <section class="mb-8">
                <h2 class="text-3xl font-bold text-gray-900 mb-6">LSSMK3 BBSPJIKKP</h2>

                <div class="prose max-w-none text-gray-700 space-y-4 mb-8">
                    <p>
                        Lembaga Sertifikasi Sistem Manajemen Kesehatan dan Keselamatan Kerja BBSPJIKKP (LSSMK3 BBSPJIKKP)
                        telah mendapatkan akreditasi oleh Komite Akreditasi Nasional (KAN) sejak <strong>25 Agustus
                            2021</strong> dengan nomor akreditasi <strong>LSSMK3-009-IDN</strong>.
                    </p>
                </div>

                <h3 class="text-2xl font-semibold text-gray-800 mb-4">{{ __('sertifikasi.scope_ohs') }}</h3>

                <div class="bg-gray-50 p-6 rounded-lg mb-8">
                    <ul class="list-disc pl-6 space-y-2 text-gray-700">
                        <li>Karet</li>
                        <li>Produk Plastik</li>
                    </ul>
                </div>

                <!-- Dokumen dan Link -->
                <div class="space-y-4 mb-8">
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Dokumen dan Formulir</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <a href="#" class="block p-4 border rounded-lg hover:bg-gray-50 transition">
                            <i class="fas fa-file-pdf text-red-600 mr-2"></i>
                            <span
                                class="text-blue-600 hover:text-blue-800 font-semibold">{{ __('sertifikasi.download_form') }}
                                {{ __('sertifikasi.smk3') }}</span>
                        </a>
                        <a href="#" class="block p-4 border rounded-lg hover:bg-gray-50 transition">
                            <i class="fas fa-file-pdf text-red-600 mr-2"></i>
                            <span
                                class="text-blue-600 hover:text-blue-800 font-semibold">{{ __('sertifikasi.client_rights_obligations') }}
                                LSSMK3</span>
                        </a>
                        <a href="#" class="block p-4 border rounded-lg hover:bg-gray-50 transition">
                            <i class="fas fa-file-pdf text-red-600 mr-2"></i>
                            <span
                                class="text-blue-600 hover:text-blue-800 font-semibold">{{ __('sertifikasi.logo_usage') }}
                                {{ __('sertifikasi.smk3') }}</span>
                        </a>
                        <a href="#" class="block p-4 border rounded-lg hover:bg-gray-50 transition">
                            <i class="fas fa-file-pdf text-red-600 mr-2"></i>
                            <span
                                class="text-blue-600 hover:text-blue-800 font-semibold">{{ __('sertifikasi.audit_procedure') }}</span>
                        </a>
                        <a href="#" class="block p-4 border rounded-lg hover:bg-gray-50 transition">
                            <i class="fas fa-file-pdf text-red-600 mr-2"></i>
                            <span
                                class="text-blue-600 hover:text-blue-800 font-semibold">{{ __('sertifikasi.certification_procedure') }}</span>
                        </a>
                    </div>
                </div>

                <!-- Data Klien -->
                <div class="bg-white border rounded-lg p-6 shadow-sm mb-8">
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">{{ __('sertifikasi.client_data') }} LSSMK3
                        BBSPJIKKP YOK3</h3>
                    <p class="text-gray-700">
                        {{ __('sertifikasi.client_data_desc') }}
                    </p>
                </div>
            </section>
        </div>

        <!-- Content: SML -->
        <div id="content-sml" class="sertifikasi-content hidden">
            <section class="mb-8">
                <h2 class="text-3xl font-bold text-gray-900 mb-6">LSSML BBSPJIKKP JECA</h2>

                <div class="prose max-w-none text-gray-700 space-y-4 mb-8">
                    <p>
                        Lembaga Sertifikasi Sistem Manajemen Lingkungan BBSPJIKKP JECA (LSSML BBSPJIKKP JECA) melaksanakan
                        kegiatan sertifikasi <strong>ISO 14001:2015</strong> dan telah terakreditasi oleh KAN.
                    </p>
                </div>

                <h3 class="text-2xl font-semibold text-gray-800 mb-4">{{ __('sertifikasi.scope_ems') }}</h3>

                <div class="bg-gray-50 p-6 rounded-lg mb-8">
                    <ul class="list-disc pl-6 space-y-2 text-gray-700">
                        <li>Industri kulit dan produk kulit</li>
                        <li>Produk karet dan plastik</li>
                        <li>Makanan, minuman dan tembakau</li>
                        <li>Kimia, produk kimia dan serat</li>
                    </ul>
                </div>

                <div class="prose max-w-none text-gray-700 space-y-4 mb-8">
                    <p>
                        LSSML BBSPJIKKP JECA memberikan layanan terbaik kepada pelanggan dalam hal Sertifikasi Manajemen
                        Lingkungan yang konsisten terhadap standar sistem manajemen lingkungan <strong>SNI ISO
                            14001:2015</strong>. Sumber Daya Manusia LSSML BBSPJIKKP JECA memiliki pengetahuan dan kompeten
                        dibidang sistem manajemen lingkungan, standar, keteknikan serta ilmu lingkungan.
                    </p>
                </div>

                <!-- Dokumen dan Link -->
                <div class="space-y-4 mb-8">
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Dokumen dan Formulir</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <a href="#" class="block p-4 border rounded-lg hover:bg-gray-50 transition">
                            <i class="fas fa-file-pdf text-red-600 mr-2"></i>
                            <span
                                class="text-blue-600 hover:text-blue-800 font-semibold">{{ __('sertifikasi.download_form') }}
                                {{ __('sertifikasi.sml') }}</span>
                        </a>
                        <a href="#" class="block p-4 border rounded-lg hover:bg-gray-50 transition">
                            <i class="fas fa-file-pdf text-red-600 mr-2"></i>
                            <span
                                class="text-blue-600 hover:text-blue-800 font-semibold">{{ __('sertifikasi.client_rights_obligations') }}
                                LSSML</span>
                        </a>
                        <a href="#" class="block p-4 border rounded-lg hover:bg-gray-50 transition">
                            <i class="fas fa-file-pdf text-red-600 mr-2"></i>
                            <span
                                class="text-blue-600 hover:text-blue-800 font-semibold">{{ __('sertifikasi.logo_usage') }}
                                {{ __('sertifikasi.sml') }}</span>
                        </a>
                        <a href="#" class="block p-4 border rounded-lg hover:bg-gray-50 transition">
                            <i class="fas fa-file-pdf text-red-600 mr-2"></i>
                            <span
                                class="text-blue-600 hover:text-blue-800 font-semibold">{{ __('sertifikasi.audit_procedure') }}</span>
                        </a>
                        <a href="#" class="block p-4 border rounded-lg hover:bg-gray-50 transition">
                            <i class="fas fa-file-pdf text-red-600 mr-2"></i>
                            <span
                                class="text-blue-600 hover:text-blue-800 font-semibold">{{ __('sertifikasi.certification_procedure') }}</span>
                        </a>
                    </div>
                </div>

                <!-- Data Klien -->
                <div class="bg-white border rounded-lg p-6 shadow-sm mb-8">
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">{{ __('sertifikasi.client_data') }} LSSML
                        BBSPJIKKP JECA</h3>
                    <p class="text-gray-700">
                        {{ __('sertifikasi.client_data_desc') }}
                    </p>
                </div>

                <!-- Kalender SML -->
                <div class="bg-white border rounded-lg p-6 shadow-sm mb-8">
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Kalender SML</h3>

                </div>
            </section>
        </div>

        <!-- Content: SIH -->
        <div id="content-sih" class="sertifikasi-content hidden">
            <section class="mb-8">
                <h2 class="text-3xl font-bold text-gray-900 mb-6">LSIH BBSPJIKKP</h2>

                <div class="prose max-w-none text-gray-700 space-y-4 mb-8">
                    <p>
                        Lembaga Sertifikasi Industri Hijau BBSPJIKKP (LSIH BBSPJIKKP) ditunjuk Kementerian Perindustrian
                        Republik Indonesia berdasarkan <strong>Kepmenperin RI Nomor 3398 Tahun 2023</strong> tentang
                        Penunjukan Lembaga Sertifikasi Industri Hijau.
                    </p>
                    <p>
                        Industri Hijau adalah salah satu upaya optimalisasi penggunaan sumber daya oleh perusahaan industri
                        agar proses produksi dapat berjalan secara efektif dan efisien. Dengan menerapkan prinsip industri
                        hijau perusahaan industri akan mampu meningkatkan daya saing dan berkontribusi pada pembangunan
                        berkelanjutan.
                    </p>
                    <p>
                        Dalam menyelenggarakan kegiatan Sertifikasi Industri Hijau dan menerbitkan Sertifikat Industri
                        Hijau, LSIH BBSPJIKKP mengacu pada Standar Industri Hijau (SIH).
                    </p>
                </div>

                <h3 class="text-2xl font-semibold text-gray-800 mb-4">{{ __('sertifikasi.scope_green') }}</h3>

                <div class="overflow-x-auto mb-8 shadow-lg rounded-lg border border-gray-200">
                    <table class="min-w-full divide-y divide-gray-200 border-collapse">
                        <thead class="bg-blue-600 text-white">
                            <tr>
                                <th
                                    class="px-3 py-3 text-left text-xs font-semibold uppercase tracking-wider border border-gray-300 whitespace-nowrap">
                                    NO</th>
                                <th
                                    class="px-3 py-3 text-left text-xs font-semibold uppercase tracking-wider border border-gray-300 whitespace-nowrap">
                                    STANDAR</th>
                                <th
                                    class="px-3 py-3 text-left text-xs font-semibold uppercase tracking-wider border border-gray-300">
                                    NAMA STANDAR</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="px-3 py-3 text-sm border border-gray-300 text-center font-medium align-top">1
                                </td>
                                <td class="px-3 py-3 text-sm border border-gray-300 align-top whitespace-nowrap">SIH
                                    22123.1:2021</td>
                                <td class="px-3 py-3 text-sm border border-gray-300 align-top">Standar Industri Hijau untuk
                                    Industri
                                    Karet Remah (Crumb Rubber)</td>
                            </tr>
                            <tr class="bg-gray-50 hover:bg-gray-100 transition-colors">
                                <td class="px-3 py-3 text-sm border border-gray-300 text-center font-medium align-top">2
                                </td>
                                <td class="px-3 py-3 text-sm border border-gray-300 align-top whitespace-nowrap">SIH
                                    22121.1:2021</td>
                                <td class="px-3 py-3 text-sm border border-gray-300 align-top">Standar Industri Hijau untuk
                                    Industri
                                    Pengasapan Karet dalam bentuk Ribbed Smoked Sheet</td>
                            </tr>
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="px-3 py-3 text-sm border border-gray-300 text-center font-medium align-top">3
                                </td>
                                <td class="px-3 py-3 text-sm border border-gray-300 align-top whitespace-nowrap">SIH
                                    20115.1:2021</td>
                                <td class="px-3 py-3 text-sm border border-gray-300 align-top">Standar Industri Hijau untuk
                                    Industri
                                    Oleokimia Dasar bersumber Minyak Nabati</td>
                            </tr>
                            <tr class="bg-gray-50 hover:bg-gray-100 transition-colors">
                                <td class="px-3 py-3 text-sm border border-gray-300 text-center font-medium align-top">4
                                </td>
                                <td class="px-3 py-3 text-sm border border-gray-300 align-top whitespace-nowrap">SIH
                                    22220.1:2020</td>
                                <td class="px-3 py-3 text-sm border border-gray-300 align-top">Standar Industri Hijau untuk
                                    Tas atau
                                    Kantong Belanja Plastik dan Bioplastik</td>
                            </tr>
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="px-3 py-3 text-sm border border-gray-300 text-center font-medium align-top">5
                                </td>
                                <td class="px-3 py-3 text-sm border border-gray-300 align-top whitespace-nowrap">SIH
                                    11050.1:2020</td>
                                <td class="px-3 py-3 text-sm border border-gray-300 align-top">Standar Industri Hijau untuk
                                    Industri
                                    Air Mineral</td>
                            </tr>
                            <tr class="bg-gray-50 hover:bg-gray-100 transition-colors">
                                <td class="px-3 py-3 text-sm border border-gray-300 text-center font-medium align-top">6
                                </td>
                                <td class="px-3 py-3 text-sm border border-gray-300 align-top whitespace-nowrap">SIH
                                    15112.1:2019</td>
                                <td class="px-3 py-3 text-sm border border-gray-300 align-top">Standar Industri Hijau untuk
                                    Industri
                                    Penyamakan Kulit dari Sapi, Kerbau, Domba, dan Kambing</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="bg-blue-50 border-l-4 border-blue-500 p-6 mb-8">
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">Tata Cara Sertifikasi Industri Hijau</h3>
                    <p class="text-gray-700 mb-4">
                        Berdasarkan <strong>Permenperin Nomor 39 Tahun 2018</strong>
                    </p>
                </div>

                <h3 class="text-2xl font-semibold text-gray-800 mb-4">Persyaratan yang harus dipenuhi:</h3>

                <!-- Persyaratan Teknis -->
                <div class="mb-6">
                    <h4 class="text-xl font-semibold text-gray-800 mb-3">Persyaratan Teknis, meliputi:</h4>
                    <div class="bg-gray-50 p-6 rounded-lg">
                        <ul class="list-disc pl-6 space-y-2 text-gray-700">
                            <li>Bahan baku</li>
                            <li>Bahan penolong</li>
                            <li>Bahan kimia kulit; (untuk SIH 15112.1:2019)</li>
                            <li>Energi</li>
                            <li>Air</li>
                            <li>Proses produksi</li>
                            <li>Produk</li>
                            <li>Produk kulit jadi; (untuk SIH 15112.1:2019)</li>
                            <li>Kemasan; (untuk SIH 22220.1:2020 dan SIH 11050.1:2020)</li>
                            <li>Limbah; dan</li>
                            <li>Emisi gas rumah kaca</li>
                        </ul>
                    </div>
                </div>

                <!-- Persyaratan Manajemen -->
                <div class="mb-6">
                    <h4 class="text-xl font-semibold text-gray-800 mb-3">Persyaratan Manajemen, meliputi:</h4>
                    <div class="bg-gray-50 p-6 rounded-lg">
                        <ul class="list-disc pl-6 space-y-2 text-gray-700">
                            <li>Kebijakan dan organisasi</li>
                            <li>Perencanaan strategis</li>
                            <li>Pelaksanaan dan pemantauan</li>
                            <li>Tinjauan manajemen</li>
                            <li>Tanggung jawab sosial perusahaan; dan</li>
                            <li>Ketenagakerjaan</li>
                        </ul>
                    </div>
                </div>

                <!-- Persyaratan Dokumen -->
                <div class="mb-8">
                    <h4 class="text-xl font-semibold text-gray-800 mb-3">Persyaratan dokumen untuk sertifikasi Industri
                        Hijau, meliputi:</h4>
                    <div class="bg-gray-50 p-6 rounded-lg">
                        <ul class="list-disc pl-6 space-y-2 text-gray-700">
                            <li>Salinan Izin Usaha Industri atau Tanda Daftar Perusahaan</li>
                            <li>Salinan NPWP</li>
                            <li>Salinan Izin Dokumen Lingkungan Hidup atau Surat Pernyataan Pengelolaan Lingkungan</li>
                            <li>Daftar Isian Profil Perusahaan</li>
                            <li>Deskripsi dan diagram alir proses produksi</li>
                            <li>Neraca massa</li>
                            <li>Neraca energi</li>
                            <li>Dokumen sarana pengelolaan limbah dan hasil pengujiannya</li>
                            <li>Salinan dokumen SOP</li>
                            <li>Salinan kebijakan dan struktur organisasi Industri Hijau</li>
                            <li>Salinan perencanaan strategis, pelaksanaan dan pemantauan penerapan Industri Hijau; dan</li>
                            <li>Salinan laporan kegiatan tanggung jawab sosial perusahaan</li>
                        </ul>
                    </div>
                </div>

                <!-- Dokumen dan Link -->
                <div class="space-y-4 mb-8">
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Dokumen dan Formulir</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <a href="#" class="block p-4 border rounded-lg hover:bg-gray-50 transition">
                            <i class="fas fa-file-pdf text-red-600 mr-2"></i>
                            <span
                                class="text-blue-600 hover:text-blue-800 font-semibold">{{ __('sertifikasi.download_form') }}
                                {{ __('sertifikasi.sih') }}</span>
                        </a>
                        <a href="#" class="block p-4 border rounded-lg hover:bg-gray-50 transition">
                            <i class="fas fa-file-pdf text-red-600 mr-2"></i>
                            <span
                                class="text-blue-600 hover:text-blue-800 font-semibold">{{ __('sertifikasi.client_rights_obligations') }}
                                LSIH</span>
                        </a>
                        <a href="#" class="block p-4 border rounded-lg hover:bg-gray-50 transition">
                            <i class="fas fa-file-pdf text-red-600 mr-2"></i>
                            <span
                                class="text-blue-600 hover:text-blue-800 font-semibold">{{ __('sertifikasi.logo_usage') }}
                                {{ __('sertifikasi.sih') }}</span>
                        </a>
                        <a href="#" class="block p-4 border rounded-lg hover:bg-gray-50 transition">
                            <i class="fas fa-file-pdf text-red-600 mr-2"></i>
                            <span
                                class="text-blue-600 hover:text-blue-800 font-semibold">{{ __('sertifikasi.audit_procedure') }}</span>
                        </a>
                        <a href="#" class="block p-4 border rounded-lg hover:bg-gray-50 transition">
                            <i class="fas fa-file-pdf text-red-600 mr-2"></i>
                            <span
                                class="text-blue-600 hover:text-blue-800 font-semibold">{{ __('sertifikasi.certification_procedure') }}</span>
                        </a>
                    </div>
                </div>

                <!-- Data Klien -->
                <div class="bg-white border rounded-lg p-6 shadow-sm mb-8">
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">{{ __('sertifikasi.client_data') }} LSIH
                        BBSPJIKKP</h3>
                    <p class="text-gray-700">
                        {{ __('sertifikasi.client_data_desc') }}
                    </p>
                </div>
            </section>
        </div>

        <!-- Content: Sertifikasi Personil (akan diisi nanti) -->
        <div id="content-personil" class="sertifikasi-content hidden">
            <section class="mb-8">
                <h2 class="text-3xl font-bold text-gray-900 mb-6">Sertifikasi Personil</h2>
                <p class="text-gray-700">Konten Sertifikasi Personil akan ditambahkan di sini.</p>
            </section>
        </div>
    </div>

    @push('scripts')
        <script>
            function showSertifikasi(sertifikasiName) {
                // Hide all sertifikasi contents
                const allContents = document.querySelectorAll('.sertifikasi-content');
                allContents.forEach(content => {
                    content.classList.add('hidden');
                });

                // Remove active state from all tabs
                const allTabs = document.querySelectorAll('.sertifikasi-tab');
                allTabs.forEach(tab => {
                    tab.classList.remove('border-blue-600', 'text-blue-600');
                    tab.classList.add('border-transparent', 'text-gray-500');
                });

                // Show selected sertifikasi content
                const selectedContent = document.getElementById('content-' + sertifikasiName);
                if (selectedContent) {
                    selectedContent.classList.remove('hidden');
                }

                // Add active state to selected tab
                const selectedTab = document.getElementById('tab-' + sertifikasiName);
                if (selectedTab) {
                    selectedTab.classList.remove('border-transparent', 'text-gray-500');
                    selectedTab.classList.add('border-blue-600', 'text-blue-600');
                }
            }

            // Initialize: show SPPT SNI by default or based on hash
            document.addEventListener('DOMContentLoaded', function() {
                // Check if there's a hash in the URL
                const hash = window.location.hash.substring(1); // Remove the # symbol

                // Map hash to sertifikasi name
                const hashMap = {
                    'smm': 'smm',
                    'smk3': 'smk3',
                    'sml': 'sml',
                    'sih': 'sih',
                    'personil': 'personil',
                    'sppt-sni': 'sppt-sni'
                };

                // If hash exists and is valid, show that tab, otherwise show default
                if (hash && hashMap[hash]) {
                    showSertifikasi(hashMap[hash]);
                } else {
                    showSertifikasi('sppt-sni');
                }
            });

            // Handle hash changes (when user clicks on hash links)
            window.addEventListener('hashchange', function() {
                const hash = window.location.hash.substring(1);
                const hashMap = {
                    'smm': 'smm',
                    'smk3': 'smk3',
                    'sml': 'sml',
                    'sih': 'sih',
                    'personil': 'personil',
                    'sppt-sni': 'sppt-sni'
                };

                if (hash && hashMap[hash]) {
                    showSertifikasi(hashMap[hash]);
                }
            });
        </script>
    @endpush
@endsection
