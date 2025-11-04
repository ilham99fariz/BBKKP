<!-- Navigation -->
<nav class="bg-white shadow-lg sticky top-0 z-50" x-data="navbarData()">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <!-- Logo -->
            <div class="flex items-center">
                <a href="{{ route('home') }}" class="flex-shrink-0 flex items-center">
                    <img class="h-12 w-25" src="{{ asset('images/logobalai.png') }}" alt="Logo">
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
                        <a href="/kalibrasi"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600">Kalibrasi</a>

                        <!-- Sertifikasi -->
                        <div class="relative" x-data="{ open: false }">
                            <button @click="open = !open" @mouseenter="open = true" @mouseleave="open = false"
                                class="w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 flex items-center justify-between">
                                Sertifikasi
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
                                <a href="/sertifikasi-produk-sppt-sni"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600">Sertifikasi
                                    Produk (SPPT SNI)</a>
                                <a href="/smm"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600">SMM</a>
                                <a href="/smk3"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600">SMK3</a>
                                <a href="/sml"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600">SML</a>
                                <a href="/sih"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600">SIH</a>
                                <a href="/sertifikasi-personil"
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
                        <a href="/ikm"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600">Indeks
                            Kepuasan Masyarakat</a>
                        <a href="{{ route('contact.show') }}"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600">Kontak</a>
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
                    </div>
                </div>

                <!-- Halal Center Dropdown -->
                <!-- <div class="relative" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                    <a href="{{ route('about.index') }}"
                        class="text-gray-700 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium transition-colors duration-200 flex items-center">
                        Halal Center
                        <svg class="ml-1 h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </a> -->
                    <!-- Invisible bridge to prevent cursor gap -->
                    <!-- <div class="absolute top-full left-0 right-0 h-4" @mouseenter="open = true"
                        @mouseleave="open = false"></div>
                    <div x-show="open" x-cloak
                        class="absolute top-full left-0 pt-4 w-64 bg-white shadow-xl rounded-lg py-2 z-50"
                        @mouseenter="open = true" @mouseleave="open = false">
                        <a href="/tonggak-sejarah"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600">Tentang
                            LPH</a>
                        <a href="/profil-singkat"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600">Layanan
                            LPH</a>
                        <a href="/profil-pejabat"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600">Proses
                            Sertifikasi Halal</a>
                        <a href="/struktur-organisasi"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600">Peraturan
                            dan Pedoman Halal</a>
                        <a href="/makna-logo"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600">Pertanyaan
                            Paling Sering Terkait Halal</a>
                    </div>
                </div> -->
                <a href="/halal-center"
                    class="text-gray-700 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium transition-colors duration-200">
                    Halal Center
                </a>

                <a href="https://jis.id/" target="_blank" rel="noopener noreferrer"
                    class="text-gray-700 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium transition-colors duration-200">
                    Daftar Layanan
                </a>
                <!-- Admin Login
                @guest
                    <a href="{{ route('login') }}"
                        class="bg-blue-600 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-blue-700 transition-colors duration-200">
                        Login Admin
                    </a>
                @endguest

                @auth
                    <a href="{{ route('admin.dashboard') }}"
                        class="bg-green-600 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-green-700 transition-colors duration-200">
                        Dashboard
                    </a>
                @endauth
            </div> -->

            <!-- Mobile menu button -->
            <div class="lg:hidden flex items-center">
                <button @click="mobileOpen = !mobileOpen"
                    class="text-gray-700 hover:text-blue-600 focus:outline-none focus:text-blue-600">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path x-show="!mobileOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path x-show="mobileOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Navigation -->
    <div x-show="mobileOpen" x-cloak
        class="lg:hidden bg-white border-t border-gray-200 max-h-[calc(100vh-4rem)] overflow-y-auto">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
            <a href="{{ route('home') }}"
                class="text-gray-700 hover:text-blue-600 block px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs('home') ? 'text-blue-600 font-semibold bg-blue-50' : '' }}">
                Beranda
            </a>

            <!-- Mobile Layanan Dropdown -->
            <div>
                <button @click="layananOpen = !layananOpen"
                    class="w-full text-left text-gray-700 hover:text-blue-600 px-3 py-2 rounded-md text-base font-medium flex items-center justify-between">
                    Layanan
                    <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
                <div x-show="layananOpen" x-cloak class="pl-4 mt-1 space-y-1">
                    <a href="{{ route('services.index') }}"
                        class="block px-3 py-2 text-sm text-blue-600 hover:bg-blue-50 hover:text-blue-700 rounded-md font-semibold">Semua Layanan</a>
                    <a href="#"
                        class="block px-3 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-md">Pengujian</a>
                    <a href="#"
                        class="block px-3 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-md">Kalibrasi</a>

                    <div>
                        <button @click="sertifikasiOpen = !sertifikasiOpen"
                            class="w-full text-left px-3 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-md flex items-center justify-between">
                            Sertifikasi
                            <svg class="h-3 w-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                        <div x-show="sertifikasiOpen" x-cloak class="pl-4 mt-1 space-y-1">
                            <a href="#"
                                class="block px-3 py-2 text-xs text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-md">Sertifikasi
                                Produk (SPPT SNI)</a>
                            <a href="#"
                                class="block px-3 py-2 text-xs text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-md">SMM</a>
                            <a href="#"
                                class="block px-3 py-2 text-xs text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-md">SMK3</a>
                            <a href="#"
                                class="block px-3 py-2 text-xs text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-md">SML</a>
                            <a href="#"
                                class="block px-3 py-2 text-xs text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-md">SIH</a>
                            <a href="#"
                                class="block px-3 py-2 text-xs text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-md">Sertifikasi
                                Personil</a>
                        </div>
                    </div>

                    <div>
                        <button @click="bimbinganOpen = !bimbinganOpen"
                            class="w-full text-left px-3 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-md flex items-center justify-between">
                            Bimbingan Teknis / Konsultansi
                            <svg class="h-3 w-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                        <div x-show="bimbinganOpen" x-cloak class="pl-4 mt-1 space-y-1">
                            <a href="#"
                                class="block px-3 py-2 text-xs text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-md">Audit
                                Teknologi</a>
                            <a href="#"
                                class="block px-3 py-2 text-xs text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-md">INDI
                                4.0</a>
                            <a href="#"
                                class="block px-3 py-2 text-xs text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-md">TKDN</a>
                            <a href="#"
                                class="block px-3 py-2 text-xs text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-md">Sistem
                                Manajemen (SNI/ISO)</a>
                            <a href="#"
                                class="block px-3 py-2 text-xs text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-md">Penyusunan
                                Dokumen</a>
                        </div>
                    </div>

                    <a href="#"
                        class="block px-3 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-md">Inspeksi</a>

                    <div>
                        <button @click="verifikasiOpen = !verifikasiOpen"
                            class="w-full text-left px-3 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-md flex items-center justify-between">
                            Verifikasi dan Validasi
                            <svg class="h-3 w-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                        <div x-show="verifikasiOpen" x-cloak class="pl-4 mt-1 space-y-1">
                            <a href="#"
                                class="block px-3 py-2 text-xs text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-md">GRK</a>
                            <a href="#"
                                class="block px-3 py-2 text-xs text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-md">TKDN</a>
                        </div>
                    </div>

                    <div>
                        <button @click="ujiOpen = !ujiOpen"
                            class="w-full text-left px-3 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-md flex items-center justify-between">
                            Uji Profisiensi
                            <svg class="h-3 w-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                        <div x-show="ujiOpen" x-cloak class="pl-4 mt-1 space-y-1">
                            <a href="#"
                                class="block px-3 py-2 text-xs text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-md">Kalibrasi</a>
                            <a href="#"
                                class="block px-3 py-2 text-xs text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-md">Pengujian</a>
                        </div>
                    </div>

                    <a href="#"
                        class="block px-3 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-md">Pelatihan
                        Teknis</a>
                    <a href="#"
                        class="block px-3 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-md">Produsen
                        Bahan Acuan</a>

                    <div>
                        <button @click="edukasiOpen = !edukasiOpen"
                            class="w-full text-left px-3 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-md flex items-center justify-between">
                            Edukasi
                            <svg class="h-3 w-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                        <div x-show="edukasiOpen" x-cloak class="pl-4 mt-1 space-y-1">
                            <a href="#"
                                class="block px-3 py-2 text-xs text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-md">Magang
                                / PKL</a>
                            <a href="#"
                                class="block px-3 py-2 text-xs text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-md">Kunjungan</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mobile Standar Pelayanan Dropdown -->
            <div>
                <button @click="standarOpen = !standarOpen"
                    class="w-full text-left text-gray-700 hover:text-blue-600 px-3 py-2 rounded-md text-base font-medium flex items-center justify-between">
                    Standar Pelayanan
                    <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
                <div x-show="standarOpen" x-cloak class="pl-4 mt-1 space-y-1">
                    <a href="{{ route('standards.index') }}"
                        class="block px-3 py-2 text-sm text-blue-600 hover:bg-blue-50 hover:text-blue-700 rounded-md font-semibold">Semua Standar Pelayanan</a>
                    <a href="#"
                        class="block px-3 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-md">Standar
                        Pelayanan</a>
                    <a href="#"
                        class="block px-3 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-md">Maklumat
                        Pelayanan</a>
                    <a href="#"
                        class="block px-3 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-md">Tarif
                        Layanan</a>
                    <a href="#"
                        class="block px-3 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-md">Tarif
                        Percepatan</a>
                    <a href="#"
                        class="block px-3 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-md">Standar
                        Pelayanan Minimum (SPM)</a>
                    <a href="#"
                        class="block px-3 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-md">Survey
                        Layanan Pelanggan</a>
                    <a href="#"
                        class="block px-3 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-md">Indeks
                        Kepuasan Masyarakat</a>
                    <a href="{{ route('contact.show') }}"
                        class="block px-3 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-md">Kontak</a>
                </div>
            </div>

            <!-- Mobile Media dan Informasi Dropdown -->
            <div>
                <button @click="mediaOpen = !mediaOpen"
                    class="w-full text-left text-gray-700 hover:text-blue-600 px-3 py-2 rounded-md text-base font-medium flex items-center justify-between">
                    Media dan Informasi
                    <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
                <div x-show="mediaOpen" x-cloak class="pl-4 mt-1 space-y-1">
                    <a href="{{ route('media.index') }}"
                        class="block px-3 py-2 text-sm text-blue-600 hover:bg-blue-50 hover:text-blue-700 rounded-md font-semibold">Semua Media & Informasi</a>
                    <a href="#"
                        class="block px-3 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-md">Keterbukaan
                        Informasi Publik</a>
                    <a href="{{ route('news.index') }}"
                        class="block px-3 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-md">BBSPJIKKP
                        News</a>
                    <a href="#"
                        class="block px-3 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-md">Publikasi</a>
                    <a href="#"
                        class="block px-3 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-md">Pengumuman</a>
                </div>
            </div>

            <!-- Mobile Tentang Kami Dropdown -->
            <div>
                <button @click="tentangOpen = !tentangOpen"
                    class="w-full text-left text-gray-700 hover:text-blue-600 px-3 py-2 rounded-md text-base font-medium flex items-center justify-between">
                    Tentang Kami
                    <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
                <div x-show="tentangOpen" x-cloak class="pl-4 mt-1 space-y-1">
                    <a href="{{ route('about.index') }}"
                        class="block px-3 py-2 text-sm text-blue-600 hover:bg-blue-50 hover:text-blue-700 rounded-md font-semibold">Profil & Tentang Kami</a>
                    <a href="#"
                        class="block px-3 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-md">Tonggak
                        Sejarah</a>
                    <a href="#"
                        class="block px-3 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-md">Profil
                        Singkat BBSPJIKKP</a>
                    <a href="#"
                        class="block px-3 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-md">Profil
                        Pejabat</a>
                    <a href="#"
                        class="block px-3 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-md">Struktur
                        Organisasi</a>
                    <a href="#"
                        class="block px-3 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-md">Makna
                        Logo</a>
                </div>
            </div>

            <a href="#"
                class="text-gray-700 hover:text-blue-600 block px-3 py-2 rounded-md text-base font-medium">
                Halal Center
            </a>

            <a href="https://jis.id/" target="_blank" rel="noopener noreferrer"
                class="text-gray-700 hover:text-blue-600 block px-3 py-2 rounded-md text-base font-medium">
                Daftar Layanan
            </a>

            <!-- Mobile Admin Login -->
            @guest
                <a href="{{ route('login') }}"
                    class="bg-blue-600 text-white block px-3 py-2 rounded-md text-base font-medium hover:bg-blue-700 transition-colors duration-200">
                    Login Admin
                </a>
            @endguest

            @auth
                <a href="{{ route('admin.dashboard') }}"
                    class="bg-green-600 text-white block px-3 py-2 rounded-md text-base font-medium hover:bg-green-700 transition-colors duration-200">
                    Dashboard
                </a>
            @endauth
        </div>
    </div>
</nav>

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