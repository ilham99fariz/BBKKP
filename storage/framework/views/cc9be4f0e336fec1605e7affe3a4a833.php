<!-- Navigation -->
<nav class="bg-white/95 backdrop-blur-sm shadow-lg sticky top-0 z-50" x-data="navbarData()" x-init="init()">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <!-- Logo -->
            <div class="flex items-center flex-shrink-0">
                <a href="<?php echo e(route('home')); ?>" class="flex-shrink-0 flex items-center">
                    <img class="h-12 w-auto" src="<?php echo e(asset('images/logobalai.png')); ?>" alt="Logo BBSPJIKKP">
                </a>
            </div>

            <!-- Desktop Navigation -->
            <div class="hidden md:flex items-center space-x-1">
                <a href="<?php echo e(route('home')); ?>"
                    class="text-gray-700 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium transition-colors duration-200 <?php echo e(request()->routeIs('home') ? 'text-blue-600 font-semibold' : ''); ?>">
                    Beranda
                </a>

                <!-- Layanan Dropdown -->
                <div class="relative" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                    <a href="<?php echo e(route('services.index')); ?>"
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
                        <a href="<?php echo e(route('pengujian.index')); ?>"
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
                    <a href="<?php echo e(route('standards.index')); ?>"
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
                        <a href="<?php echo e(route('contact.show')); ?>"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600">Kontak</a>
                    </div>
                </div>

                <!-- Media dan Informasi Dropdown -->
                <div class="relative" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                    <a href="<?php echo e(route('media.index')); ?>"
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
                        <a href="<?php echo e(route('news.index')); ?>"
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
                    <a href="<?php echo e(route('about.index')); ?>"
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
                        <a href="<?php echo e(route('dynamic.page', ['slug' => 'tonggak-sejarah'])); ?>"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600">Tonggak
                            Sejarah</a>
                        <a href="<?php echo e(route('dynamic.page', ['slug' => 'profil-singkat'])); ?>"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600">Profil
                            Singkat BBSPJIKKP (Visi, Misi, Tata Nilai, Moto, Tupoksi)</a>
                        <a href="<?php echo e(route('dynamic.page', ['slug' => 'profil-pejabat'])); ?>"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600">Profil
                            Pejabat</a>
                        <a href="<?php echo e(route('dynamic.page', ['slug' => 'struktur-organisasi'])); ?>"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600">Struktur
                            Organisasi</a>
                        <a href="<?php echo e(route('dynamic.page', ['slug' => 'makna-logo'])); ?>"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600">Makna
                            Logo</a>
                    </div>
                </div>

                <!-- Halal Center Dropdown -->
                <!-- <div class="relative" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                    <a href="<?php echo e(route('about.index')); ?>"
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
            </div>



            <!-- Mobile menu button -->
            <div class="md:hidden flex items-center">
                <button @click="toggleMobile()" 
                        :aria-expanded="mobileOpen" 
                        aria-controls="mobileMenu"
                        class="inline-flex items-center justify-center rounded-md p-2 text-gray-700 hover:text-blue-600 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-500 transition-all duration-200"
                        aria-label="Toggle navigation menu">
                    <svg class="h-6 w-6 transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path x-show="!mobileOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path x-show="mobileOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile overlay -->
    <div x-show="mobileOpen" 
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         x-cloak 
         @click="closeMobile()" 
         class="fixed inset-0 bg-black/50 md:hidden z-40"></div>

    <!-- Mobile Navigation -->
    <div x-show="mobileOpen"
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0 transform -translate-x-full"
         x-transition:enter-end="opacity-100 transform translate-x-0"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100 transform translate-x-0"
         x-transition:leave-end="opacity-0 transform -translate-x-full"
         x-cloak 
         id="mobileMenu"
         class="md:hidden fixed top-16 left-0 right-0 bg-white border-t border-gray-200 max-h-[calc(100vh-4rem)] overflow-y-auto z-50 shadow-2xl"
         @keydown.escape="closeMobile()"
         x-trap="mobileOpen"
         x-init="$nextTick(() => { if (mobileOpen) $refs.mobileMenu.focus() })"
         x-ref="mobileMenu"
         tabindex="-1">
        <div class="px-4 py-4 space-y-2">
            <!-- Beranda -->
            <a href="<?php echo e(route('home')); ?>"
               class="block px-3 py-3 text-gray-700 hover:text-blue-600 hover:bg-blue-50 rounded-lg text-base font-medium transition-all duration-200 <?php echo e(request()->routeIs('home') ? 'text-blue-600 font-semibold bg-blue-50' : ''); ?>">
                <div class="flex items-center">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                    </svg>
                    Beranda
                </div>
            </a>


            <!-- Mobile Layanan Dropdown -->
            <div class="relative">
                <button @click="toggleDropdown('layananOpen')"
                        class="w-full text-left text-gray-700 hover:text-blue-600 px-3 py-3 rounded-lg text-base font-medium flex items-center justify-between transition-all duration-200 hover:bg-blue-50"
                        :class="{ 'bg-blue-50 text-blue-600': layananOpen }">
                    <div class="flex items-center">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                        </svg>
                        <span>Layanan</span>
                    </div>
                    <svg class="h-5 w-5 transition-transform duration-200" :class="{ 'rotate-180': layananOpen }" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                              d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                              clip-rule="evenodd" />
                    </svg>
                </button>
                <div x-show="layananOpen" 
                     x-transition:enter="transition ease-out duration-200"
                     x-transition:enter-start="opacity-0 transform -translate-y-2"
                     x-transition:enter-end="opacity-100 transform translate-y-0"
                     x-transition:leave="transition ease-in duration-100"
                     x-transition:leave-start="opacity-100 transform translate-y-0"
                     x-transition:leave-end="opacity-0 transform -translate-y-2"
                     x-cloak 
                     class="pl-4 mt-2 space-y-1 border-l-2 border-blue-100 ml-4">
                    
                    <a href="<?php echo e(route('services.index')); ?>"
                       class="block px-3 py-2 text-sm text-blue-600 hover:bg-blue-50 hover:text-blue-700 rounded-md font-semibold flex items-center">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                        Semua Layanan
                    </a>
                    
                    <a href="<?php echo e(route('pengujian.index')); ?>"
                       class="block px-3 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-md">Pengujian</a>
                    
                    <a href="/kalibrasi"
                       class="block px-3 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-md">Kalibrasi</a>

                    <!-- Sertifikasi Submenu -->
                    <div>
                        <button @click="sertifikasiOpen = !sertifikasiOpen"
                                class="w-full text-left px-3 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-md flex items-center justify-between transition-colors duration-200">
                            <span>Sertifikasi</span>
                            <svg class="h-3 w-3 transition-transform duration-200" :class="{ 'rotate-90': sertifikasiOpen }" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                      d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                      clip-rule="evenodd" />
                            </svg>
                        </button>
                        <div x-show="sertifikasiOpen" 
                             x-transition:enter="transition ease-out duration-150"
                             x-transition:enter-start="opacity-0 transform -translate-y-1"
                             x-transition:enter-end="opacity-100 transform translate-y-0"
                             x-transition:leave="transition ease-in duration-100"
                             x-transition:leave-start="opacity-100 transform translate-y-0"
                             x-transition:leave-end="opacity-0 transform -translate-y-1"
                             x-cloak 
                             class="pl-4 mt-1 space-y-1">
                            <a href="/sertifikasi-produk-sppt-sni"
                               class="block px-3 py-2 text-xs text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-md">Sertifikasi Produk (SPPT SNI)</a>
                            <a href="/smm"
                               class="block px-3 py-2 text-xs text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-md">SMM</a>
                            <a href="/smk3"
                               class="block px-3 py-2 text-xs text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-md">SMK3</a>
                            <a href="/sml"
                               class="block px-3 py-2 text-xs text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-md">SML</a>
                            <a href="/sih"
                               class="block px-3 py-2 text-xs text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-md">SIH</a>
                            <a href="/sertifikasi-personil"
                               class="block px-3 py-2 text-xs text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-md">Sertifikasi Personil</a>
                        </div>
                    </div>

                    <!-- Rest of the menu items with similar structure -->
                    <a href="/inspeksi"
                       class="block px-3 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-md">Inspeksi</a>

                    <a href="/pelatihan-teknis"
                       class="block px-3 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-md">Pelatihan Teknis</a>
                    
                    <a href="/produsen-bahan-acuan"
                       class="block px-3 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-md">Produsen Bahan Acuan</a>

                    <!-- Edukasi Submenu -->
                    <div>
                        <button @click="edukasiOpen = !edukasiOpen"
                                class="w-full text-left px-3 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-md flex items-center justify-between transition-colors duration-200">
                            <span>Edukasi</span>
                            <svg class="h-3 w-3 transition-transform duration-200" :class="{ 'rotate-90': edukasiOpen }" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                      d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                      clip-rule="evenodd" />
                            </svg>
                        </button>
                        <div x-show="edukasiOpen" 
                             x-transition x-cloak 
                             class="pl-4 mt-1 space-y-1">
                            <a href="/magang-pkl"
                               class="block px-3 py-2 text-xs text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-md">Magang / PKL</a>
                            <a href="/kunjungan"
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
                    <a href="<?php echo e(route('standards.index')); ?>"
                        class="block px-3 py-2 text-sm text-blue-600 hover:bg-blue-50 hover:text-blue-700 rounded-md font-semibold">Semua Standar Pelayanan</a>
                    <a href="/pelayanan"
                        class="block px-3 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-md">Pelayanan</a>
                        Pelayanan</a>
                    <a href="/maklumat-pelayanan"
                        class="block px-3 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-md">Maklumat
                        Pelayanan</a>
                    <a href="/tarif-layanan"
                        class="block px-3 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-md">Tarif
                        Layanan</a>
                    <a href="/tarif-percepatan"
                        class="block px-3 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-md">Tarif
                        Percepatan</a>
                    <a href="/standar-pelayanan-minimum"
                        class="block px-3 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-md">Standar
                        Pelayanan Minimum (SPM)</a>
                    <a href="/survey-layanan-pelanggan"
                        class="block px-3 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-md">Survey
                        Layanan Pelanggan</a>
                    <a href="/indeks-kepuasan-masyarakat"
                        class="block px-3 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-md">Indeks
                        Kepuasan Masyarakat</a>
                    <a href="<?php echo e(route('contact.show')); ?>"
                        class="block px-3 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-md"
                        onclick="event.preventDefault(); document.getElementById('contact')?.scrollIntoView({behavior:'smooth'}) || window.location.href='<?php echo e(route('contact.show')); ?>'">Kontak</a>
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
                    <a href="<?php echo e(route('media.index')); ?>"
                        class="block px-3 py-2 text-sm text-blue-600 hover:bg-blue-50 hover:text-blue-700 rounded-md font-semibold">Semua Media & Informasi</a>
                    <a href="/keterbukaan-informasi-publik"
                        class="block px-3 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-md">Keterbukaan
                        Informasi Publik</a>
                    <a href="<?php echo e(route('news.index')); ?>"
                        class="block px-3 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-md">BBSPJIKKP
                        News</a>
                    <a href="/publikasi"
                        class="block px-3 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-md">Publikasi</a>
                    <a href="/pengumuman"
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
                    <a href="<?php echo e(route('about.index')); ?>"
                        class="block px-3 py-2 text-sm text-blue-600 hover:bg-blue-50 hover:text-blue-700 rounded-md font-semibold">Profil & Tentang Kami</a>
                    <a href="/tonggak-sejarah"
                        class="block px-3 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-md">Tonggak
                        Sejarah</a>
                    <a href="/profil-singkat"
                        class="block px-3 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-md">Profil
                        Singkat BBSPJIKKP</a>
                    <a href="/profil-pejabat"
                        class="block px-3 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-md">Profil
                        Pejabat</a>
                    <a href="/struktur-organisasi"
                        class="block px-3 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-md">Struktur
                        Organisasi</a>
                    <a href="/makna-logo"
                        class="block px-3 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-md">Makna
                        Logo</a>
                </div>
            </div>

            <a href="/halal-center"
                class="text-gray-700 hover:text-blue-600 block px-3 py-2 rounded-md text-base font-medium">
                Halal Center
            </a>

            <a href="https://jis.id/" target="_blank" rel="noopener noreferrer"
                class="text-gray-700 hover:text-blue-600 block px-3 py-2 rounded-md text-base font-medium">
                Daftar Layanan
            </a>



            <?php if(auth()->guard()->check()): ?>
                <a href="<?php echo e(route('admin.dashboard')); ?>"
                    class="bg-green-600 text-white block px-3 py-2 rounded-md text-base font-medium hover:bg-green-700 transition-colors duration-200">
                    Dashboard
                </a>
            <?php endif; ?>
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
            tentangOpen: false,
            
            // Fungsi untuk toggle mobile menu
            toggleMobile() {
                this.mobileOpen = !this.mobileOpen;
                // Prevent body scroll saat mobile menu terbuka
                document.body.style.overflow = this.mobileOpen ? 'hidden' : '';
            },
            
            // Fungsi untuk menutup semua dropdown
            closeAllDropdowns() {
                this.layananOpen = false;
                this.sertifikasiOpen = false;
                this.bimbinganOpen = false;
                this.verifikasiOpen = false;
                this.ujiOpen = false;
                this.edukasiOpen = false;
                this.standarOpen = false;
                this.mediaOpen = false;
                this.tentangOpen = false;
            },
            
            // Fungsi untuk toggle dropdown dengan animasi
            toggleDropdown(dropdown) {
                // Tutup dropdown lain yang terbuka
                this.closeAllDropdowns();
                // Toggle dropdown yang diklik
                this[dropdown] = !this[dropdown];
            },
            
            // Fungsi untuk menutup mobile menu
            closeMobile() {
                this.mobileOpen = false;
                this.closeAllDropdowns();
                document.body.style.overflow = '';
            },
            
            // Fungsi untuk handle klik di luar menu
            handleClickOutside(event) {
                const navbar = this.$el;
                if (!navbar.contains(event.target)) {
                    this.closeMobile();
                }
            },
            
            // Init function
            init() {
                // Watch mobileOpen untuk setup event listener
                this.$watch('mobileOpen', (value) => {
                    if (value) {
                        document.addEventListener('click', this.handleClickOutside.bind(this));
                    } else {
                        document.removeEventListener('click', this.handleClickOutside.bind(this));
                    }
                });
                
                // Handle window resize
                window.addEventListener('resize', () => {
                    if (window.innerWidth >= 768) {
                        this.closeMobile();
                    }
                });
            }
        }
    }
</script><?php /**PATH C:\alamak\resources\views/partials/navbar.blade.php ENDPATH**/ ?>