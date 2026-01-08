<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Admin Dashboard - BALAI BESAR STANDARDISASI')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Alpine.js -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        [x-cloak] {
            display: none !important;
        }

        /* Hide scrollbar but keep scroll functionality */
        .scrollbar-hide {
            -ms-overflow-style: none;
            /* IE and Edge */
            scrollbar-width: none;
            /* Firefox */
        }

        .scrollbar-hide::-webkit-scrollbar {
            display: none;
            /* Chrome, Safari and Opera */
        }
    </style>
</head>

<body class="font-sans antialiased bg-gray-100" x-data="{ sidebarOpen: false }">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <div class="bg-gray-800 text-white w-64 fixed inset-y-0 left-0 z-50 transform transition-transform duration-300 ease-in-out lg:translate-x-0 lg:static lg:inset-0 flex flex-col"
            :class="{ '-translate-x-full': !sidebarOpen, 'translate-x-0': sidebarOpen }">
            <div class="flex items-center justify-center h-16 bg-gray-900 flex-shrink-0">
                <h1 class="text-xl font-bold">Admin Panel</h1>
            </div>

            <nav class="flex-1 overflow-y-auto mt-8 pb-8 scrollbar-hide" x-data="{ 
                openMenus: {
                    layanan: {{ (request()->routeIs('admin.page-content.*') && request()->route('type') == 'layanan') ? 'true' : 'false' }},
                    standarPelayanan: {{ (request()->routeIs('admin.page-content.*') && request()->route('type') == 'standar-pelayanan') ? 'true' : 'false' }},
                    mediaInformasi: {{ (request()->routeIs('admin.page-content.*') && request()->route('type') == 'media-informasi') || request()->routeIs('admin.news.*') ? 'true' : 'false' }},
                    tentangKami: {{ (request()->routeIs('admin.page-content.*') && request()->route('type') == 'tentang-kami') ? 'true' : 'false' }},
                    halalCenter: {{ (request()->routeIs('admin.page-content.*') && request()->route('type') == 'halal-center') ? 'true' : 'false' }}
                }
            }">
                <div class="px-4 space-y-2">
                    <a href="{{ route('admin.dashboard') }}"
                        class="flex items-center px-4 py-2 text-sm font-medium rounded-lg {{ request()->routeIs('admin.dashboard') ? 'bg-gray-700 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">
                        <i class="fas fa-tachometer-alt mr-3"></i>
                        Dashboard
                    </a>

                    @php
                        $adminRole = session('admin_role', 'superadmin');
                        $isMediaAdmin = $adminRole === 'media';
                    @endphp
                    @php
                        // Unread messages count for sidebar badge
                        try {
                            $unreadMessages = \App\Models\ContactMessage::where('is_read', false)->count();
                        } catch (\Throwable $e) {
                            $unreadMessages = 0;
                        }
                    @endphp

                    {{-- Pengaturan Menu --}}
                    <a href="{{ route('admin.menu-items.index') }}"
                        class="flex items-center px-4 py-2 text-sm font-medium rounded-lg {{ request()->routeIs('admin.menu-items.*') ? 'bg-gray-700 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">
                        <i class="fas fa-bars mr-3"></i>
                        Pengaturan Menu
                    </a>

                    @if(!$isMediaAdmin)
                        <!-- Layanan -->
                        <div>
                            <button @click="openMenus.layanan = !openMenus.layanan"
                                class="w-full flex items-center justify-between px-4 py-2 text-sm font-medium rounded-lg {{ (request()->routeIs('admin.page-content.*') && request()->route('type') == 'layanan') ? 'bg-gray-700 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">
                                <div class="flex items-center">
                                    <i class="fas fa-cogs mr-3"></i>
                                    <span>Layanan</span>
                                </div>
                                <i class="fas fa-chevron-down text-xs transition-transform"
                                    :class="{ 'rotate-180': openMenus.layanan }"></i>
                            </button>
                            <div x-show="openMenus.layanan" x-cloak class="ml-4 mt-1 space-y-1">
                                <a href="{{ route('admin.page-content.index', ['type' => 'layanan', 'category' => 'pengujian']) }}"
                                    class="flex items-center px-4 py-2 text-xs rounded-lg {{ request('category') == 'pengujian' ? 'bg-gray-600 text-white' : 'text-gray-400 hover:bg-gray-700 hover:text-white' }}">
                                    <i class="fas fa-flask mr-2"></i>
                                    Pengujian
                                </a>
                                <a href="{{ route('admin.page-content.index', ['type' => 'layanan', 'category' => 'kalibrasi']) }}"
                                    class="flex items-center px-4 py-2 text-xs rounded-lg {{ request('category') == 'kalibrasi' ? 'bg-gray-600 text-white' : 'text-gray-400 hover:bg-gray-700 hover:text-white' }}">
                                    <i class="fas fa-ruler-combined mr-2"></i>
                                    Kalibrasi
                                </a>
                                <a href="{{ route('admin.page-content.index', ['type' => 'layanan', 'category' => 'sertifikasi']) }}"
                                    class="flex items-center px-4 py-2 text-xs rounded-lg {{ request('category') == 'sertifikasi' ? 'bg-gray-600 text-white' : 'text-gray-400 hover:bg-gray-700 hover:text-white' }}">
                                    <i class="fas fa-certificate mr-2"></i>
                                    Sertifikasi
                                </a>
                                <a href="{{ route('admin.page-content.index', ['type' => 'layanan', 'category' => 'bimbingan-teknis-dan-konsultasi']) }}"
                                    class="flex items-center px-4 py-2 text-xs rounded-lg {{ request('category') == 'bimbingan-teknis-dan-konsultasi' ? 'bg-gray-600 text-white' : 'text-gray-400 hover:bg-gray-700 hover:text-white' }}">
                                    <i class="fas fa-chalkboard-teacher mr-2"></i>
                                    Bimbingan Teknis dan Konsultasi
                                </a>
                                <a href="{{ route('admin.page-content.index', ['type' => 'layanan', 'category' => 'inspeksi']) }}"
                                    class="flex items-center px-4 py-2 text-xs rounded-lg {{ request('category') == 'inspeksi' ? 'bg-gray-600 text-white' : 'text-gray-400 hover:bg-gray-700 hover:text-white' }}">
                                    <i class="fas fa-search mr-2"></i>
                                    Inspeksi
                                </a>
                                <a href="{{ route('admin.page-content.index', ['type' => 'layanan', 'category' => 'verifikasi-dan-validasi']) }}"
                                    class="flex items-center px-4 py-2 text-xs rounded-lg {{ request('category') == 'verifikasi-dan-validasi' ? 'bg-gray-600 text-white' : 'text-gray-400 hover:bg-gray-700 hover:text-white' }}">
                                    <i class="fas fa-check-double mr-2"></i>
                                    Verifikasi dan Validasi
                                </a>
                                <a href="{{ route('admin.page-content.index', ['type' => 'layanan', 'category' => 'uji-profisiensi']) }}"
                                    class="flex items-center px-4 py-2 text-xs rounded-lg {{ request('category') == 'uji-profisiensi' ? 'bg-gray-600 text-white' : 'text-gray-400 hover:bg-gray-700 hover:text-white' }}">
                                    <i class="fas fa-award mr-2"></i>
                                    Uji Profisiensi
                                </a>
                                <a href="{{ route('admin.page-content.index', ['type' => 'layanan', 'category' => 'pelatihan-teknis']) }}"
                                    class="flex items-center px-4 py-2 text-xs rounded-lg {{ request('category') == 'pelatihan-teknis' ? 'bg-gray-600 text-white' : 'text-gray-400 hover:bg-gray-700 hover:text-white' }}">
                                    <i class="fas fa-graduation-cap mr-2"></i>
                                    Pelatihan Teknis
                                </a>
                                <a href="{{ route('admin.page-content.index', ['type' => 'layanan', 'category' => 'produsen-bahan-acuan']) }}"
                                    class="flex items-center px-4 py-2 text-xs rounded-lg {{ request('category') == 'produsen-bahan-acuan' ? 'bg-gray-600 text-white' : 'text-gray-400 hover:bg-gray-700 hover:text-white' }}">
                                    <i class="fas fa-industry mr-2"></i>
                                    Produsen Bahan Acuan
                                </a>
                                <a href="{{ route('admin.page-content.index', ['type' => 'layanan', 'category' => 'edukasi']) }}"
                                    class="flex items-center px-4 py-2 text-xs rounded-lg {{ request('category') == 'edukasi' ? 'bg-gray-600 text-white' : 'text-gray-400 hover:bg-gray-700 hover:text-white' }}">
                                    <i class="fas fa-book-reader mr-2"></i>
                                    Edukasi
                                </a>
                                <a href="{{ route('admin.page-content.index', ['type' => 'layanan']) }}"
                                    class="flex items-center px-4 py-2 text-xs rounded-lg {{ (request()->routeIs('admin.page-content.*') && request()->route('type') == 'layanan' && !request('category')) ? 'bg-gray-600 text-white' : 'text-gray-400 hover:bg-gray-700 hover:text-white' }}">
                                    <i class="fas fa-list mr-2"></i>
                                    Semua Layanan
                                </a>
                            </div>
                        </div>

                        @if(!$isMediaAdmin)
                            <!-- Standar Pelayanan -->
                            <div>
                                <button @click="openMenus.standarPelayanan = !openMenus.standarPelayanan"
                                    class="w-full flex items-center justify-between px-4 py-2 text-sm font-medium rounded-lg {{ (request()->routeIs('admin.page-content.*') && request()->route('type') == 'standar-pelayanan') ? 'bg-gray-700 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">
                                    <div class="flex items-center">
                                        <i class="fas fa-clipboard-list mr-3"></i>
                                        <span>Standar Pelayanan</span>
                                    </div>
                                    <i class="fas fa-chevron-down text-xs transition-transform"
                                        :class="{ 'rotate-180': openMenus.standarPelayanan }"></i>
                                </button>
                                <div x-show="openMenus.standarPelayanan" x-cloak class="ml-4 mt-1 space-y-1">
                                    <a href="{{ route('admin.page-content.index', ['type' => 'standar-pelayanan', 'category' => 'standar-pelayanan']) }}"
                                        class="flex items-center px-4 py-2 text-xs rounded-lg {{ request('category') == 'standar-pelayanan' ? 'bg-gray-600 text-white' : 'text-gray-400 hover:bg-gray-700 hover:text-white' }}">
                                        <i class="fas fa-file-alt mr-2"></i>
                                        Standar Pelayanan
                                    </a>
                                    <a href="{{ route('admin.page-content.index', ['type' => 'standar-pelayanan', 'category' => 'maklumat-pelayanan']) }}"
                                        class="flex items-center px-4 py-2 text-xs rounded-lg {{ request('category') == 'maklumat-pelayanan' ? 'bg-gray-600 text-white' : 'text-gray-400 hover:bg-gray-700 hover:text-white' }}">
                                        <i class="fas fa-info-circle mr-2"></i>
                                        Maklumat Pelayanan
                                    </a>
                                    <a href="{{ route('admin.page-content.index', ['type' => 'standar-pelayanan', 'category' => 'tarif-layanan']) }}"
                                        class="flex items-center px-4 py-2 text-xs rounded-lg {{ request('category') == 'tarif-layanan' ? 'bg-gray-600 text-white' : 'text-gray-400 hover:bg-gray-700 hover:text-white' }}">
                                        <i class="fas fa-dollar-sign mr-2"></i>
                                        Tarif Layanan
                                    </a>
                                    <a href="{{ route('admin.page-content.index', ['type' => 'standar-pelayanan', 'category' => 'tarif-percepatan']) }}"
                                        class="flex items-center px-4 py-2 text-xs rounded-lg {{ request('category') == 'tarif-percepatan' ? 'bg-gray-600 text-white' : 'text-gray-400 hover:bg-gray-700 hover:text-white' }}">
                                        <i class="fas fa-tachometer-alt mr-2"></i>
                                        Tarif Percepatan
                                    </a>
                                    <a href="{{ route('admin.page-content.index', ['type' => 'standar-pelayanan', 'category' => 'spm']) }}"
                                        class="flex items-center px-4 py-2 text-xs rounded-lg {{ request('category') == 'spm' ? 'bg-gray-600 text-white' : 'text-gray-400 hover:bg-gray-700 hover:text-white' }}">
                                        <i class="fas fa-chart-line mr-2"></i>
                                        SPM
                                    </a>
                                    <a href="{{ route('admin.page-content.index', ['type' => 'standar-pelayanan', 'category' => 'survey-layanan-pelanggan']) }}"
                                        class="flex items-center px-4 py-2 text-xs rounded-lg {{ request('category') == 'survey-layanan-pelanggan' ? 'bg-gray-600 text-white' : 'text-gray-400 hover:bg-gray-700 hover:text-white' }}">
                                        <i class="fas fa-poll mr-2"></i>
                                        Survey Layanan Pelanggan
                                    </a>
                                    <a href="{{ route('admin.page-content.index', ['type' => 'standar-pelayanan']) }}"
                                        class="flex items-center px-4 py-2 text-xs rounded-lg {{ (request()->routeIs('admin.page-content.*') && request()->route('type') == 'standar-pelayanan' && !request('category')) ? 'bg-gray-600 text-white' : 'text-gray-400 hover:bg-gray-700 hover:text-white' }}">
                                        <i class="fas fa-list mr-2"></i>
                                        Semua
                                    </a>
                                </div>
                            </div>

                        @endif

                        <!-- Media dan Informasi -->
                        <div>
                            <button @click="openMenus.mediaInformasi = !openMenus.mediaInformasi"
                                class="w-full flex items-center justify-between px-4 py-2 text-sm font-medium rounded-lg {{ (request()->routeIs('admin.page-content.*') && request()->route('type') == 'media-informasi') || request()->routeIs('admin.news.*') ? 'bg-gray-700 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">
                                <div class="flex items-center">
                                    <i class="fas fa-newspaper mr-3"></i>
                                    <span>Media & Informasi</span>
                                </div>
                                <i class="fas fa-chevron-down text-xs transition-transform"
                                    :class="{ 'rotate-180': openMenus.mediaInformasi }"></i>
                            </button>
                            <div x-show="openMenus.mediaInformasi" x-cloak class="ml-4 mt-1 space-y-1">
                                <a href="{{ route('admin.news.index') }}"
                                    class="flex items-center px-4 py-2 text-xs rounded-lg {{ request()->routeIs('admin.news.*') ? 'bg-gray-600 text-white' : 'text-gray-400 hover:bg-gray-700 hover:text-white' }}">
                                    <i class="fas fa-newspaper mr-2"></i>
                                    Berita
                                </a>
                                <a href="{{ route('admin.page-content.index', ['type' => 'media-informasi', 'category' => 'publikasi']) }}"
                                    class="flex items-center px-4 py-2 text-xs rounded-lg {{ request('category') == 'publikasi' ? 'bg-gray-600 text-white' : 'text-gray-400 hover:bg-gray-700 hover:text-white' }}">
                                    <i class="fas fa-book mr-2"></i>
                                    Publikasi
                                </a>
                                <a href="{{ route('admin.page-content.index', ['type' => 'media-informasi', 'category' => 'pengumuman']) }}"
                                    class="flex items-center px-4 py-2 text-xs rounded-lg {{ request('category') == 'pengumuman' ? 'bg-gray-600 text-white' : 'text-gray-400 hover:bg-gray-700 hover:text-white' }}">
                                    <i class="fas fa-bullhorn mr-2"></i>
                                    Pengumuman
                                </a>
                                <a href="{{ route('admin.page-content.index', ['type' => 'media-informasi']) }}"
                                    class="flex items-center px-4 py-2 text-xs rounded-lg {{ (request()->routeIs('admin.page-content.*') && request()->route('type') == 'media-informasi' && !request('category')) ? 'bg-gray-600 text-white' : 'text-gray-400 hover:bg-gray-700 hover:text-white' }}">
                                    <i class="fas fa-list mr-2"></i>
                                    Semua
                                </a>
                            </div>
                        </div>

                        <!-- Kunjungan / Pesan (dipindah ke bawah Halal Center) -->
                    @endif

                    @if(!$isMediaAdmin)
                        <!-- Tentang Kami -->
                        <div>
                            <button @click="openMenus.tentangKami = !openMenus.tentangKami"
                                class="w-full flex items-center justify-between px-4 py-2 text-sm font-medium rounded-lg {{ (request()->routeIs('admin.page-content.*') && request()->route('type') == 'tentang-kami') ? 'bg-gray-700 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">
                                <div class="flex items-center">
                                    <i class="fas fa-info-circle mr-3"></i>
                                    <span>Tentang Kami</span>
                                </div>
                                <i class="fas fa-chevron-down text-xs transition-transform"
                                    :class="{ 'rotate-180': openMenus.tentangKami }"></i>
                            </button>
                            <div x-show="openMenus.tentangKami" x-cloak class="ml-4 mt-1 space-y-1">
                                <a href="{{ route('admin.page-content.index', ['type' => 'tentang-kami', 'category' => 'profil-singkat']) }}"
                                    class="flex items-center px-4 py-2 text-xs rounded-lg {{ request('category') == 'profil-singkat' ? 'bg-gray-600 text-white' : 'text-gray-400 hover:bg-gray-700 hover:text-white' }}">
                                    <i class="fas fa-building mr-2"></i>
                                    Profil Singkat
                                </a>
                                <a href="{{ route('admin.page-content.index', ['type' => 'tentang-kami', 'category' => 'tonggak-sejarah']) }}"
                                    class="flex items-center px-4 py-2 text-xs rounded-lg {{ request('category') == 'tonggak-sejarah' ? 'bg-gray-600 text-white' : 'text-gray-400 hover:bg-gray-700 hover:text-white' }}">
                                    <i class="fas fa-history mr-2"></i>
                                    Tonggak Sejarah
                                </a>
                                <a href="{{ route('admin.page-content.index', ['type' => 'tentang-kami', 'category' => 'profil-pejabat']) }}"
                                    class="flex items-center px-4 py-2 text-xs rounded-lg {{ request('category') == 'profil-pejabat' ? 'bg-gray-600 text-white' : 'text-gray-400 hover:bg-gray-700 hover:text-white' }}">
                                    <i class="fas fa-user-tie mr-2"></i>
                                    Profil Pejabat
                                </a>
                                <a href="{{ route('admin.page-content.index', ['type' => 'tentang-kami', 'category' => 'struktur-organisasi']) }}"
                                    class="flex items-center px-4 py-2 text-xs rounded-lg {{ request('category') == 'struktur-organisasi' ? 'bg-gray-600 text-white' : 'text-gray-400 hover:bg-gray-700 hover:text-white' }}">
                                    <i class="fas fa-sitemap mr-2"></i>
                                    Struktur Organisasi
                                </a>
                                <a href="{{ route('admin.page-content.index', ['type' => 'tentang-kami', 'category' => 'makna-logo']) }}"
                                    class="flex items-center px-4 py-2 text-xs rounded-lg {{ request('category') == 'makna-logo' ? 'bg-gray-600 text-white' : 'text-gray-400 hover:bg-gray-700 hover:text-white' }}">
                                    <i class="fas fa-palette mr-2"></i>
                                    Makna Logo
                                </a>
                                <a href="{{ route('admin.page-content.index', ['type' => 'tentang-kami']) }}"
                                    class="flex items-center px-4 py-2 text-xs rounded-lg {{ (request()->routeIs('admin.page-content.*') && request()->route('type') == 'tentang-kami' && !request('category')) ? 'bg-gray-600 text-white' : 'text-gray-400 hover:bg-gray-700 hover:text-white' }}">
                                    <i class="fas fa-list mr-2"></i>
                                    Semua
                                </a>
                            </div>
                        </div>
                    @endif

                    @if(!$isMediaAdmin)
                        <!-- Halal Center -->
                        <div>
                            <button @click="openMenus.halalCenter = !openMenus.halalCenter"
                                class="w-full flex items-center justify-between px-4 py-2 text-sm font-medium rounded-lg {{ (request()->routeIs('admin.page-content.*') && request()->route('type') == 'halal-center') ? 'bg-gray-700 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">
                                <div class="flex items-center">
                                    <i class="fas fa-mosque mr-3"></i>
                                    <span>Halal Center</span>
                                </div>
                                <i class="fas fa-chevron-down text-xs transition-transform"
                                    :class="{ 'rotate-180': openMenus.halalCenter }"></i>
                            </button>
                            <div x-show="openMenus.halalCenter" x-cloak class="ml-4 mt-1 space-y-1">
                                <a href="{{ route('admin.page-content.index', ['type' => 'halal-center', 'category' => 'faq']) }}"
                                    class="flex items-center px-4 py-2 text-xs rounded-lg {{ request('category') == 'faq' ? 'bg-gray-600 text-white' : 'text-gray-400 hover:bg-gray-700 hover:text-white' }}">
                                    <i class="fas fa-question-circle mr-2"></i>
                                    FAQ
                                </a>
                                <a href="{{ route('admin.page-content.index', ['type' => 'halal-center']) }}"
                                    class="flex items-center px-4 py-2 text-xs rounded-lg {{ (request()->routeIs('admin.page-content.*') && request()->route('type') == 'halal-center' && !request('category')) ? 'bg-gray-600 text-white' : 'text-gray-400 hover:bg-gray-700 hover:text-white' }}">
                                    <i class="fas fa-list mr-2"></i>
                                    Semua
                                </a>
                            </div>
                        </div>
                    @endif

                    <!-- Kunjungan / Pesan (di bawah Halal Center) -->
                    <a href="{{ route('admin.messages.index') }}"
                        class="flex items-center px-4 py-2 text-sm font-medium rounded-lg {{ request()->routeIs('admin.messages.*') ? 'bg-gray-700 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">
                        <i class="fas fa-envelope mr-3"></i>
                        <span>Kunjungan / Pesan</span>
                        @if($unreadMessages > 0)
                            <span
                                class="ml-auto inline-flex items-center px-2 py-0.5 rounded-full text-xs font-medium bg-red-600 text-white">{{ $unreadMessages }}</span>
                        @endif
                    </a>

                    @if(!$isMediaAdmin)
                        <a href="{{ route('admin.testimonials.index') }}"
                            class="flex items-center px-4 py-2 text-sm font-medium rounded-lg {{ request()->routeIs('admin.testimonials.*') ? 'bg-gray-700 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">
                            <i class="fas fa-quote-left mr-3"></i>
                            Testimoni
                        </a>

                        <a href="{{ route('admin.partners.index') }}"
                            class="flex items-center px-4 py-2 text-sm font-medium rounded-lg {{ request()->routeIs('admin.partners.*') ? 'bg-gray-700 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">
                            <i class="fas fa-handshake mr-3"></i>
                            Partner
                        </a>

                        <a href="{{ route('admin.service-ratings.index') }}"
                            class="flex items-center px-4 py-2 text-sm font-medium rounded-lg {{ request()->routeIs('admin.service-ratings.*') ? 'bg-gray-700 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">
                            <i class="fas fa-chart-bar mr-3"></i>
                            Rating Layanan
                        </a>

                        <a href="{{ route('admin.curve-ratings.index') }}"
                            class="flex items-center px-4 py-2 text-sm font-medium rounded-lg {{ request()->routeIs('admin.curve-ratings.*') ? 'bg-gray-700 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">
                            <i class="fas fa-chart-line mr-3"></i>
                            Curve Rating
                        </a>

                        <a href="{{ route('admin.ipk-ratings.index') }}"
                            class="flex items-center px-4 py-2 text-sm font-medium rounded-lg {{ request()->routeIs('admin.ipk-ratings.*') ? 'bg-gray-700 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">
                            <i class="fas fa-balance-scale mr-3"></i>
                            Skor IPK
                        </a>

                        <a href="{{ route('admin.surveys.index') }}"
                            class="flex items-center px-4 py-2 text-sm font-medium rounded-lg {{ request()->routeIs('admin.surveys.*') ? 'bg-gray-700 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">
                            <i class="fas fa-poll-h mr-3"></i>
                            Survey layanan Pelanggan
                        </a>
                    @endif

                    {{-- Slider Beranda --}}
                    <a href="{{ route('admin.sliders.index') }}"
                        class="flex items-center px-4 py-2 text-sm font-medium rounded-lg {{ request()->routeIs('admin.sliders.*') ? 'bg-gray-700 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">
                        <i class="fas fa-images mr-3"></i>
                        Slider Beranda
                    </a>
                    

                    {{-- Pengaturan Website (OLD - Deprecated) --}}
                    {{-- <a href="{{ route('admin.settings.index') }}"
                        class="flex items-center px-4 py-2 text-sm font-medium rounded-lg {{ request()->routeIs('admin.settings.*') ? 'bg-gray-700 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">
                        <i class="fas fa-cog mr-3"></i>
                        Pengaturan
                    </a> --}}
                </div>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col overflow-hidden lg:ml-0">
            <!-- Top Navigation -->
            <header class="bg-white shadow-sm border-b border-gray-200">
                <div class="flex items-center justify-between px-4 py-4">
                    <div class="flex items-center">
                        <button @click="sidebarOpen = !sidebarOpen" class="text-gray-500 hover:text-gray-600 lg:hidden">
                            <i class="fas fa-bars text-xl"></i>
                        </button>
                        <h2 class="ml-4 text-2xl font-semibold text-gray-900">@yield('page-title', 'Dashboard')</h2>
                    </div>

                    <div class="flex items-center space-x-4">
                        <a href="{{ route('home') }}" class="text-gray-500 hover:text-gray-700">
                            <i class="fas fa-external-link-alt"></i>
                            <span class="ml-1">Lihat Website</span>
                        </a>

                        <div class="relative" x-data="{ open: false }">
                            <button @click="open = !open"
                                class="flex items-center text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                <span class="sr-only">Open user menu</span>
                                <div class="h-8 w-8 rounded-full bg-gray-300 flex items-center justify-center">
                                    <i class="fas fa-user text-gray-600"></i>
                                </div>
                            </button>

                            <div x-show="open" x-cloak @click.away="open = false"
                                class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none">
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Profil</a>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit"
                                        class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                        Logout
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Page Content -->
            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-100">
                <div class="container mx-auto px-6 py-8">
                    @if(session('success'))
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if(session('error'))
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6">
                            {{ session('error') }}
                        </div>
                    @endif

                    @yield('content')
                </div>
            </main>
        </div>
    </div>

    <!-- Overlay for mobile -->
    <div x-show="sidebarOpen" x-cloak @click="sidebarOpen = false"
        class="fixed inset-0 z-40 bg-gray-600 bg-opacity-75 lg:hidden"></div>

    {{-- <!-- Accessibility Widget -->
    <script type="text/javascript" src="https://web.animemusic.us/widget_disabilitas.js"
        api-key-resvoice="bzbTAKXD"></script> --}}

    <!-- CKEditor 4 Full -->
    <script src="https://cdn.ckeditor.com/4.22.1/full/ckeditor.js"></script>

    {{-- <!-- WhatsApp Floating Button -->
    @include('components.whatsapp-button') --}}
</body>

</html>