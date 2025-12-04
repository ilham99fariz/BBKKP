<!-- Tambahkan ini di bagian <head> layout Anda -->
<style>
    [x-cloak] {
        display: none !important;
    }
</style>

<!-- Navigation -->
<nav class="bg-white shadow-lg sticky top-0 z-50" x-data="navbarData()">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <!-- Logo -->
            <div class="flex items-center">
                <a href="{{ route('home') }}" class="flex-shrink-0 flex items-center">
                    <img class="h-8 w-auto sm:h-10" src="{{ asset('images/logobalai.png') }}" alt="Logo">
                    <!-- <span class="ml-2 text-xl font-bold text-gray-900">BALAI BESAR</span> -->
                </a>
            </div>

            <!-- Desktop Navigation -->
            <div class="hidden lg:flex items-center space-x-1">
                <a href="{{ route('home') }}"
                    class="text-gray-700 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium transition-colors duration-200 {{ request()->routeIs('home') ? 'text-blue-600 font-semibold' : '' }}">
                    Beranda
                </a>

                <!-- Layanan Dropdown -->
                <div class="relative" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                    <a href="{{ route('services.index') }}"
                        class="text-gray-700 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium transition-colors duration-200 flex items-center">
                        Layanan
                        <svg class="ml-1 h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                    <!-- Invisible bridge to prevent cursor gap -->
                    <div class="absolute top-full left-0 right-0 h-4" @mouseenter="open = true"
                        @mouseleave="open = false"></div>
                    <div x-show="open" x-cloak
                        class="absolute top-full left-0 pt-4 w-64 bg-white shadow-xl rounded-lg py-2 z-50"
                        @mouseenter="open = true" @mouseleave="open = false">
                        <a href="{{ route('pengujian.index') }}"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600">Pengujian</a>
                        <a href="{{ route('kalibrasi.index') }}"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600">Kalibrasi</a>

                        <!-- Sertifikasi -->
                        <div class="relative" x-data="{ open: false }" @mouseenter="open = true"
                            @mouseleave="open = false">
                            <a href="{{ route('services.sertifikasi') }}"
                                class="px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 flex items-center justify-between">
                                <span>Sertifikasi</span>
                                <svg class="h-3 w-3 transition-transform duration-200" :class="open ? 'rotate-90' : ''"
                                    fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                            <!-- Invisible bridge for submenu -->
                            <div class="absolute left-full top-0 w-4 h-full" @mouseenter="open = true"
                                @mouseleave="open = false"></div>
                            <div x-show="open" x-cloak x-transition
                                class="absolute left-full top-0 ml-1 w-64 bg-white shadow-xl rounded-lg py-2 z-50"
                                @mouseenter="open = true" @mouseleave="open = false">
                                <a href="{{ route('services.sertifikasi') }}"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600">Sertifikasi
                                    Produk (SPPT SNI)</a>
                                <a href="{{ route('services.sertifikasi') }}#smm"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600">SMM</a>
                                <a href="{{ route('services.sertifikasi') }}#smk3"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600">SMK3</a>
                                <a href="{{ route('services.sertifikasi') }}#sml"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600">SML</a>
                                <a href="{{ route('services.sertifikasi') }}#sih"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600">SIH</a>
                                <a href="{{ route('services.sertifikasi') }}#personil"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600">Sertifikasi
                                    Personil</a>
                            </div>
                        </div>

                        <!-- Bimbingan Teknis / Konsultansi -->
                        <div class="relative" x-data="{ open: false }">
                            <button @click="open = !open" @mouseenter="open = true" @mouseleave="open = false"
                                class="w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 flex items-center justify-between">
                                Bimbingan Teknis / Konsultansi
                                <svg class="h-3 w-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>
                            <!-- Invisible bridge for submenu -->
                            <div class="absolute left-full top-0 w-4 h-full" @mouseenter="open = true"
                                @mouseleave="open = false"></div>
                            <div x-show="open" x-cloak
                                class="absolute left-full top-0 ml-1 pl-4 w-64 bg-white shadow-xl rounded-lg py-2 z-50"
                                @mouseenter="open = true" @mouseleave="open = false">
                                <a href="/audit-teknologi"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600">Audit
                                    Teknologi</a>
                                <a href="/indi-4-0"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600">INDI
                                    4.0</a>
                                <a href="/tkdn"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600">TKDN</a>
                                <a href="/sistem-manajemen-sni-iso"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600">Sistem
                                    Manajemen (SNI/ISO)</a>
                                <a href="/penyusunan-dokumen"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600">Penyusunan
                                    Dokumen</a>
                            </div>
                        </div>

                        <a href="/inspeksi"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600">Inspeksi</a>

                        <!-- Verifikasi dan Validasi -->
                        <div class="relative" x-data="{ open: false }">
                            <button @click="open = !open" @mouseenter="open = true" @mouseleave="open = false"
                                class="w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 flex items-center justify-between">
                                Verifikasi dan Validasi
                                <svg class="h-3 w-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>
                            <!-- Invisible bridge for submenu -->
                            <div class="absolute left-full top-0 w-4 h-full" @mouseenter="open = true"
                                @mouseleave="open = false"></div>
                            <div x-show="open" x-cloak
                                class="absolute left-full top-0 ml-1 pl-4 w-64 bg-white shadow-xl rounded-lg py-2 z-50"
                                @mouseenter="open = true" @mouseleave="open = false">
                                <a href="/grk"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600">GRK</a>
                                <a href="/tkdn-validasi"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600">TKDN</a>
                            </div>
                        </div>

                        <!-- Uji Profisiensi -->
                        <div class="relative" x-data="{ open: false }">
                            <button @click="open = !open" @mouseenter="open = true" @mouseleave="open = false"
                                class="w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 flex items-center justify-between">
                                Uji Profisiensi
                                <svg class="h-3 w-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>
                            <!-- Invisible bridge for submenu -->
                            <div class="absolute left-full top-0 w-4 h-full" @mouseenter="open = true"
                                @mouseleave="open = false"></div>
                            <div x-show="open" x-cloak
                                class="absolute left-full top-0 ml-1 pl-4 w-64 bg-white shadow-xl rounded-lg py-2 z-50"
                                @mouseenter="open = true" @mouseleave="open = false">
                                <a href="/uji-profsiensi-kalibrasi"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600">Kalibrasi</a>
                                <a href="/uji-profsiensi-pengujian"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600">Pengujian</a>
                            </div>
                        </div>

                        <a href="/pelatihan-teknis"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600">Pelatihan
                            Teknis</a>
                        <a href="/produsen-bahan-acuan"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600">Produsen
                            Bahan Acuan</a>

                        <!-- Edukasi -->
                        <div class="relative" x-data="{ open: false }">
                            <button @click="open = !open" @mouseenter="open = true" @mouseleave="open = false"
                                class="w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 flex items-center justify-between">
                                Edukasi
                                <svg class="h-3 w-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>
                            <!-- Invisible bridge for submenu -->
                            <div class="absolute left-full top-0 w-4 h-full" @mouseenter="open = true"
                                @mouseleave="open = false"></div>
                            <div x-show="open" x-cloak
                                class="absolute left-full top-0 ml-1 pl-4 w-64 bg-white shadow-xl rounded-lg py-2 z-50"
                                @mouseenter="open = true" @mouseleave="open = false">
                                <a href="/magang-pkl"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600">Magang
                                    / PKL</a>
                                <a href="/kunjungan"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600">Kunjungan</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Standar Pelayanan Dropdown -->
                <div class="relative" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                    <a href="{{ route('standards.index') }}"
                        class="text-gray-700 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium transition-colors duration-200 flex items-center">
                        Standar Pelayanan
                        <svg class="ml-1 h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                    <!-- Invisible bridge to prevent cursor gap -->
                    <div class="absolute top-full left-0 right-0 h-4" @mouseenter="open = true"
                        @mouseleave="open = false"></div>
                    <div x-show="open" x-cloak
                        class="absolute top-full left-0 pt-4 w-64 bg-white shadow-xl rounded-lg py-2 z-50"
                        @mouseenter="open = true" @mouseleave="open = false">
                        <a href="/standar-pelayanan"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600">Standar
                            Pelayanan</a>
                        <a href="/maklumat-pelayanan"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600">Maklumat
                            Pelayanan</a>
                        <a href="/tarif-layanan"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600">Tarif
                            Layanan</a>
                        <a href="/tarif-percepatan"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600">Tarif
                            Percepatan</a>
                        <a href="/spm"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600">Standar
                            Pelayanan Minimum (SPM)</a>
                        <a href="/survey-layanan-pelanggan"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600">Survey
                            Layanan Pelanggan</a>
                    </div>
                </div>

                <!-- Media dan Informasi Dropdown -->
                <div class="relative" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                    <a href="{{ route('media.index') }}"
                        class="text-gray-700 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium transition-colors duration-200 flex items-center">
                        Media dan Informasi
                        <svg class="ml-1 h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                    <!-- Invisible bridge to prevent cursor gap -->
                    <div class="absolute top-full left-0 right-0 h-4" @mouseenter="open = true"
                        @mouseleave="open = false"></div>
                    <div x-show="open" x-cloak
                        class="absolute top-full left-0 pt-4 w-64 bg-white shadow-xl rounded-lg py-2 z-50"
                        @mouseenter="open = true" @mouseleave="open = false">
                        <a href="/keterbukaan-informasi-publik"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600">Keterbukaan
                            Informasi Publik</a>
                        <a href="{{ route('news.index') }}"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600">BBSPJIKKP
                            News</a>
                        <a href="/publikasi"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600">Publikasi</a>
                        <a href="/pengumuman"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600">Pengumuman</a>
                    </div>
                </div>

                <!-- Tentang Kami Dropdown -->
                <div class="relative" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                    <a href="{{ route('about.index') }}"
                        class="text-gray-700 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium transition-colors duration-200 flex items-center">
                        Tentang Kami
                        <svg class="ml-1 h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                    <!-- Invisible bridge to prevent cursor gap -->
                    <div class="absolute top-full left-0 right-0 h-4" @mouseenter="open = true"
                        @mouseleave="open = false"></div>
                    <div x-show="open" x-cloak
                        class="absolute top-full left-0 pt-4 w-64 bg-white shadow-xl rounded-lg py-2 z-50"
                        @mouseenter="open = true" @mouseleave="open = false">
                        <a href="/tonggak-sejarah"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600">Tonggak
                            Sejarah</a>
                        <a href="/profil-singkat"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600">Profil
                            Singkat BBSPJIKKP (Visi, Misi, Tata Nilai, Moto, Tupoksi)</a>
                        <a href="/profil-pejabat"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600">Profil
                            Pejabat</a>
                        <a href="/struktur-organisasi"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600">Struktur
                            Organisasi</a>
                        <a href="/makna-logo"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600">Makna
                            Logo</a>
                        <a href="{{ route('contact.show') }}"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600">Kontak</a>
                    </div>
                </div>

                <a href="/halal-center"
                    class="text-gray-700 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium transition-colors duration-200">
                    Halal Center
                </a>

                <a href="https://jis.id/" target="_blank" rel="noopener noreferrer"
                    class="text-gray-700 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium transition-colors duration-200">
                    Daftar Layanan
                </a>

                <!-- Language Switcher -->
                <div class="relative ml-2" x-data="{ open: false }" @mouseenter="open = true"
                    @mouseleave="open = false">
                    <button type="button"
                        class="text-gray-700 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium transition-colors duration-200 flex items-center">
                        <svg class="h-4 w-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129" />
                        </svg>
                        {{ strtoupper(app()->getLocale()) }}
                        <svg class="ml-1 h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                    <div x-show="open" x-cloak x-transition
                        class="absolute right-0 mt-2 w-40 bg-white shadow-xl rounded-lg py-2 z-50"
                        @mouseenter="open = true" @mouseleave="open = false">
                        <a href="{{ route('language.switch', 'id') }}"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 {{ app()->getLocale() == 'id' ? 'bg-blue-50 text-blue-600' : '' }}">
                            🇮🇩 Bahasa Indonesia
                        </a>
                        <a href="{{ route('language.switch', 'en') }}"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 {{ app()->getLocale() == 'en' ? 'bg-blue-50 text-blue-600' : '' }}">
                            🇬🇧 English
                        </a>
                    </div>
                </div>
            </div>

            <!-- Mobile menu button -->
            <div class="flex items-center lg:hidden">
                <button @click="mobileOpen = !mobileOpen" type="button"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-700 hover:text-blue-600 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-500"
                    aria-controls="mobile-menu" :aria-expanded="mobileOpen.toString()">
                    <span class="sr-only">Buka menu</span>
                    <!-- Icon Hamburger -->
                    <svg x-show="!mobileOpen" class="block h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <!-- Icon Close -->
                    <svg x-show="mobileOpen" x-cloak class="block h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile overlay -->
    <div x-show="mobileOpen" x-cloak @click="mobileOpen = false"
        class="fixed inset-0 bg-black bg-opacity-50 z-40 lg:hidden" x-transition:enter="ease-out duration-300"
        x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
        x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0">
    </div>

    <!-- Mobile Navigation Drawer (Right Side) -->
    <div x-show="mobileOpen" x-cloak id="mobile-menu"
        class="fixed inset-y-0 right-0 z-50 w-80 bg-white shadow-2xl lg:hidden overflow-y-auto"
        x-transition:enter="transform transition ease-in-out duration-300" x-transition:enter-start="translate-x-full"
        x-transition:enter-end="translate-x-0" x-transition:leave="transform transition ease-in-out duration-300"
        x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full">

        <!-- Drawer header -->
        <div class="flex items-center justify-between px-4 py-4 border-b border-gray-200 bg-blue-50">
            <span class="text-lg font-semibold text-gray-900">Menu Navigasi</span>
            <button @click="mobileOpen = false" type="button"
                class="p-2 rounded-md text-gray-700 hover:text-blue-600 hover:bg-white focus:outline-none focus:ring-2 focus:ring-blue-500">
                <span class="sr-only">Tutup menu</span>
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <!-- Mobile Menu Items -->
        <div class="px-4 py-4 space-y-1">
            <a href="{{ route('home') }}"
                class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-blue-50 hover:text-blue-600 {{ request()->routeIs('home') ? 'bg-blue-100 text-blue-600' : '' }}">
                Beranda
            </a>

            <!-- Mobile Layanan Dropdown -->
            <div class="space-y-1">
                <button @click="layananOpen = !layananOpen" type="button"
                    class="w-full flex items-center justify-between px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-blue-50 hover:text-blue-600">
                    <span>Layanan</span>
                    <svg class="h-5 w-5 transition-transform duration-200" :class="layananOpen ? 'rotate-180' : ''"
                        fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
                <div x-show="layananOpen" x-cloak class="pl-4 mt-1 space-y-1">
                    <a href="{{ route('services.index') }}"
                        class="block px-3 py-2 text-sm font-semibold text-blue-600 hover:bg-blue-50 hover:text-blue-700 rounded-md">
                        Semua Layanan
                    </a>
                    <a href="{{ route('pengujian.index') }}"
                        class="block px-3 py-2 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-600 rounded-md">
                        Pengujian
                    </a>
                    <a href="{{ route('kalibrasi.index') }}"
                        class="block px-3 py-2 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-600 rounded-md">
                        Kalibrasi
                    </a>

                    <!-- Sub-menu Sertifikasi -->
                    <div>
                        <div class="flex items-center justify-between">
                            <a href="{{ route('services.sertifikasi') }}"
                                class="flex-1 px-3 py-2 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-600 rounded-md">
                                Sertifikasi
                            </a>
                            <button @click="sertifikasiOpen = !sertifikasiOpen" type="button"
                                class="px-2 py-2 text-gray-600 hover:bg-blue-50 hover:text-blue-600 rounded-md">
                                <svg class="h-4 w-4 transition-transform duration-200"
                                    :class="sertifikasiOpen ? 'rotate-180' : ''" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>
                        <div x-show="sertifikasiOpen" x-cloak class="pl-6 mt-1 space-y-1">
                            <a href="{{ route('services.sertifikasi') }}"
                                class="block px-3 py-2 text-xs text-gray-600 hover:bg-blue-50 hover:text-blue-600 rounded-md">
                                Sertifikasi Produk (SPPT SNI)
                            </a>
                            <a href="{{ route('services.sertifikasi') }}#smm"
                                class="block px-3 py-2 text-xs text-gray-600 hover:bg-blue-50 hover:text-blue-600 rounded-md">
                                SMM
                            </a>
                            <a href="{{ route('services.sertifikasi') }}#smk3"
                                class="block px-3 py-2 text-xs text-gray-600 hover:bg-blue-50 hover:text-blue-600 rounded-md">
                                SMK3
                            </a>
                            <a href="{{ route('services.sertifikasi') }}#sml"
                                class="block px-3 py-2 text-xs text-gray-600 hover:bg-blue-50 hover:text-blue-600 rounded-md">
                                SML
                            </a>
                            <a href="{{ route('services.sertifikasi') }}#sih"
                                class="block px-3 py-2 text-xs text-gray-600 hover:bg-blue-50 hover:text-blue-600 rounded-md">
                                SIH
                            </a>
                            <a href="{{ route('services.sertifikasi') }}#personil"
                                class="block px-3 py-2 text-xs text-gray-600 hover:bg-blue-50 hover:text-blue-600 rounded-md">
                                Sertifikasi Personil
                            </a>
                        </div>
                    </div>

                    <!-- Sub-menu Bimbingan Teknis / Konsultansi -->
                    <div>
                        <button @click="bimbinganOpen = !bimbinganOpen" type="button"
                            class="w-full flex items-center justify-between px-3 py-2 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-600 rounded-md">
                            <span>Bimbingan Teknis / Konsultansi</span>
                            <svg class="h-4 w-4 transition-transform duration-200"
                                :class="bimbinganOpen ? 'rotate-180' : ''" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                        <div x-show="bimbinganOpen" x-cloak class="pl-6 mt-1 space-y-1">
                            <a href="/audit-teknologi"
                                class="block px-3 py-2 text-xs text-gray-600 hover:bg-blue-50 hover:text-blue-600 rounded-md">
                                Audit Teknologi
                            </a>
                            <a href="/indi-4-0"
                                class="block px-3 py-2 text-xs text-gray-600 hover:bg-blue-50 hover:text-blue-600 rounded-md">
                                INDI 4.0
                            </a>
                            <a href="/tkdn"
                                class="block px-3 py-2 text-xs text-gray-600 hover:bg-blue-50 hover:text-blue-600 rounded-md">
                                TKDN
                            </a>
                            <a href="/sistem-manajemen-sni-iso"
                                class="block px-3 py-2 text-xs text-gray-600 hover:bg-blue-50 hover:text-blue-600 rounded-md">
                                Sistem Manajemen (SNI/ISO)
                            </a>
                            <a href="/penyusunan-dokumen"
                                class="block px-3 py-2 text-xs text-gray-600 hover:bg-blue-50 hover:text-blue-600 rounded-md">
                                Penyusunan Dokumen
                            </a>
                        </div>
                    </div>

                    <a href="/inspeksi"
                        class="block px-3 py-2 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-600 rounded-md">
                        Inspeksi
                    </a>

                    <!-- Sub-menu Verifikasi dan Validasi -->
                    <div>
                        <button @click="verifikasiOpen = !verifikasiOpen" type="button"
                            class="w-full flex items-center justify-between px-3 py-2 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-600 rounded-md">
                            <span>Verifikasi dan Validasi</span>
                            <svg class="h-4 w-4 transition-transform duration-200"
                                :class="verifikasiOpen ? 'rotate-180' : ''" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                        <div x-show="verifikasiOpen" x-cloak class="pl-6 mt-1 space-y-1">
                            <a href="/grk"
                                class="block px-3 py-2 text-xs text-gray-600 hover:bg-blue-50 hover:text-blue-600 rounded-md">
                                GRK
                            </a>
                            <a href="/tkdn-validasi"
                                class="block px-3 py-2 text-xs text-gray-600 hover:bg-blue-50 hover:text-blue-600 rounded-md">
                                TKDN
                            </a>
                        </div>
                    </div>

                    <!-- Sub-menu Uji Profisiensi -->
                    <div>
                        <button @click="ujiOpen = !ujiOpen" type="button"
                            class="w-full flex items-center justify-between px-3 py-2 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-600 rounded-md">
                            <span>Uji Profisiensi</span>
                            <svg class="h-4 w-4 transition-transform duration-200" :class="ujiOpen ? 'rotate-180' : ''"
                                fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                        <div x-show="ujiOpen" x-cloak class="pl-6 mt-1 space-y-1">
                            <a href="/uji-profsiensi-kalibrasi"
                                class="block px-3 py-2 text-xs text-gray-600 hover:bg-blue-50 hover:text-blue-600 rounded-md">
                                Kalibrasi
                            </a>
                            <a href="/uji-profsiensi-pengujian"
                                class="block px-3 py-2 text-xs text-gray-600 hover:bg-blue-50 hover:text-blue-600 rounded-md">
                                Pengujian
                            </a>
                        </div>
                    </div>

                    <a href="/pelatihan-teknis"
                        class="block px-3 py-2 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-600 rounded-md">
                        Pelatihan Teknis
                    </a>
                    <a href="/produsen-bahan-acuan"
                        class="block px-3 py-2 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-600 rounded-md">
                        Produsen Bahan Acuan
                    </a>

                    <!-- Sub-menu Edukasi -->
                    <div>
                        <button @click="edukasiOpen = !edukasiOpen" type="button"
                            class="w-full flex items-center justify-between px-3 py-2 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-600 rounded-md">
                            <span>Edukasi</span>
                            <svg class="h-4 w-4 transition-transform duration-200"
                                :class="edukasiOpen ? 'rotate-180' : ''" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                        <div x-show="edukasiOpen" x-cloak class="pl-6 mt-1 space-y-1">
                            <a href="/magang-pkl"
                                class="block px-3 py-2 text-xs text-gray-600 hover:bg-blue-50 hover:text-blue-600 rounded-md">
                                Magang / PKL
                            </a>
                            <a href="/kunjungan"
                                class="block px-3 py-2 text-xs text-gray-600 hover:bg-blue-50 hover:text-blue-600 rounded-md">
                                Kunjungan
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mobile Standar Pelayanan Dropdown -->
            <div class="space-y-1">
                <button @click="standarOpen = !standarOpen" type="button"
                    class="w-full flex items-center justify-between px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-blue-50 hover:text-blue-600">
                    <span>Standar Pelayanan</span>
                    <svg class="h-5 w-5 transition-transform duration-200" :class="standarOpen ? 'rotate-180' : ''"
                        fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
                <div x-show="standarOpen" x-cloak class="pl-4 mt-1 space-y-1">
                    <a href="{{ route('standards.index') }}"
                        class="block px-3 py-2 text-sm font-semibold text-blue-600 hover:bg-blue-50 hover:text-blue-700 rounded-md">
                        Semua Standar Pelayanan
                    </a>
                    <a href="/standar-pelayanan"
                        class="block px-3 py-2 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-600 rounded-md">
                        Standar Pelayanan
                    </a>
                    <a href="/maklumat-pelayanan"
                        class="block px-3 py-2 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-600 rounded-md">
                        Maklumat Pelayanan
                    </a>
                    <a href="/tarif-layanan"
                        class="block px-3 py-2 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-600 rounded-md">
                        Tarif Layanan
                    </a>
                    <a href="/tarif-percepatan"
                        class="block px-3 py-2 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-600 rounded-md">
                        Tarif Percepatan
                    </a>
                    <a href="/spm"
                        class="block px-3 py-2 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-600 rounded-md">
                        Standar Pelayanan Minimum (SPM)
                    </a>
                    <a href="/survey-layanan-pelanggan"
                        class="block px-3 py-2 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-600 rounded-md">
                        Survey Layanan Pelanggan
                    </a>
                    <a href="/ikm"
                        class="block px-3 py-2 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-600 rounded-md">
                        Indeks Kepuasan Masyarakat
                    </a>
                </div>
            </div>

            <!-- Mobile Media dan Informasi Dropdown -->
            <div class="space-y-1">
                <button @click="mediaOpen = !mediaOpen" type="button"
                    class="w-full flex items-center justify-between px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-blue-50 hover:text-blue-600">
                    <span>Media dan Informasi</span>
                    <svg class="h-5 w-5 transition-transform duration-200" :class="mediaOpen ? 'rotate-180' : ''"
                        fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
                <div x-show="mediaOpen" x-cloak class="pl-4 mt-1 space-y-1">
                    <a href="{{ route('media.index') }}"
                        class="block px-3 py-2 text-sm font-semibold text-blue-600 hover:bg-blue-50 hover:text-blue-700 rounded-md">
                        Semua Media & Informasi
                    </a>
                    <a href="/keterbukaan-informasi-publik"
                        class="block px-3 py-2 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-600 rounded-md">
                        Keterbukaan Informasi Publik
                    </a>
                    <a href="{{ route('news.index') }}"
                        class="block px-3 py-2 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-600 rounded-md">
                        BBSPJIKKP News
                    </a>
                    <a href="/publikasi"
                        class="block px-3 py-2 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-600 rounded-md">
                        Publikasi
                    </a>
                    <a href="/pengumuman"
                        class="block px-3 py-2 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-600 rounded-md">
                        Pengumuman
                    </a>
                </div>
            </div>

            <!-- Mobile Tentang Kami Dropdown -->
            <div class="space-y-1">
                <button @click="tentangOpen = !tentangOpen" type="button"
                    class="w-full flex items-center justify-between px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-blue-50 hover:text-blue-600">
                    <span>Tentang Kami</span>
                    <svg class="h-5 w-5 transition-transform duration-200" :class="tentangOpen ? 'rotate-180' : ''"
                        fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
                <div x-show="tentangOpen" x-cloak class="pl-4 mt-1 space-y-1">
                    <a href="{{ route('about.index') }}"
                        class="block px-3 py-2 text-sm font-semibold text-blue-600 hover:bg-blue-50 hover:text-blue-700 rounded-md">
                        Profil & Tentang Kami
                    </a>
                    <a href="/tonggak-sejarah"
                        class="block px-3 py-2 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-600 rounded-md">
                        Tonggak Sejarah
                    </a>
                    <a href="/profil-singkat"
                        class="block px-3 py-2 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-600 rounded-md">
                        Profil Singkat BBSPJIKKP
                    </a>
                    <a href="/profil-pejabat"
                        class="block px-3 py-2 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-600 rounded-md">
                        Profil Pejabat
                    </a>
                    <a href="/struktur-organisasi"
                        class="block px-3 py-2 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-600 rounded-md">
                        Struktur Organisasi
                    </a>
                    <a href="/makna-logo"
                        class="block px-3 py-2 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-600 rounded-md">
                        Makna Logo
                    </a>
                    <a href="{{ route('contact.show') }}"
                        class="block px-3 py-2 text-sm text-gray-600 hover:bg-blue-50 hover:text-blue-600 rounded-md">
                        Kontak
                    </a>
                </div>
            </div>

            <a href="/halal-center"
                class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-blue-50 hover:text-blue-600">
                Halal Center
            </a>

            <a href="https://jis.id/" target="_blank" rel="noopener noreferrer"
                class="block px-3 py-2 rounded-md text-base font-medium text-white bg-blue-600 hover:bg-blue-700 text-center mt-4">
                Daftar Layanan
            </a>

            <!-- Language Switcher Mobile -->
            <div class="mt-4 border-t border-gray-200 pt-4">
                <div class="px-3 mb-2 text-xs font-semibold text-gray-500 uppercase tracking-wider">
                    {{ __('common.language') }}
                </div>
                <a href="{{ route('language.switch', 'id') }}"
                    class="block px-3 py-2 rounded-md text-base font-medium {{ app()->getLocale() == 'id' ? 'bg-blue-50 text-blue-600' : 'text-gray-700 hover:bg-blue-50 hover:text-blue-600' }}">
                    🇮🇩 Bahasa Indonesia
                </a>
                <a href="{{ route('language.switch', 'en') }}"
                    class="block px-3 py-2 rounded-md text-base font-medium {{ app()->getLocale() == 'en' ? 'bg-blue-50 text-blue-600' : 'text-gray-700 hover:bg-blue-50 hover:text-blue-600' }}">
                    🇬🇧 English
                </a>
            </div>

            <!-- Mobile Admin Login (Uncomment if needed) -->
            <!-- @guest
                                                                <a href="{{ route('login') }}"
                                                                    class="block px-3 py-2 rounded-md text-base font-medium text-white bg-green-600 hover:bg-green-700 text-center mt-2">
                                                                    Login Admin
                                                                </a>
            @endguest -->

            <!-- @auth
                                                                <a href="{{ route('admin.dashboard') }}"
                                                                    class="block px-3 py-2 rounded-md text-base font-medium text-white bg-green-600 hover:bg-green-700 text-center mt-2">
                                                                    Dashboard
                                                                </a>
            @endauth -->
        </div>
    </div>
</nav>

<!-- Alpine.js Script - Tambahkan ini sebelum </body> di layout utama Anda -->
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

<script>
    function navbarData() {
        return {
            mobileOpen: false,
            layananOpen: false,
            sertifikasiOpen: false,
            bimbinganOpen: false,
            verifikasiOpen: false,
            ujiOpen: false,
            edukasiOpen: false,
            standarOpen: false,
            mediaOpen: false,
            tentangOpen: false
        }
    }
</script>