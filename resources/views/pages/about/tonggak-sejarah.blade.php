@extends('layouts.app')

@section('title', 'Tonggak Sejarah - BBSPJIKP')
@section('description', 'Sejarah perjalanan dan perkembangan Balai Besar Standardisasi dan Pelayanan Jasa Industri Kulit, Plastik, dan Karet')

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
                        <span class="text-gray-500">Tonggak Sejarah</span>
                    </div>
                </li>
            </ol>
        </nav>

        <!-- Main Content -->
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <div class="p-8">
                <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Tonggak Sejarah BBSPJIKP</h1>
                
                <div class="prose max-w-none">
                    <div class="space-y-8">
                        <!-- 1927 - Founding (user-provided content) -->
                        <div class="flex gap-4">
                            <div class="flex-none">
                                <div class="w-20 h-20 bg-blue-100 rounded-full flex items-center justify-center">
                                    <span class="text-blue-600 font-bold">1927</span>
                                </div>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold mb-2">Awal Perintisan di Bogor</h3>
                                <p class="text-gray-600">Balai Besar Kulit, Karet, dan Plastik (BBKKP) memiliki sejarah panjang dalam perjalanannya hingga menjadi lembaga yang dikenal saat ini. Awal mula lembaga ini dirintis di Bogor pada tahun 1927 dengan nama Leerlooierij in Lederbewerking Stichting met Het Laboratorium Voor Lederbewerking en Schoenmakerij is een Van Drie Centrale Nijverheidsscholen voor Lichting: Departement van Economische Zaken yang dipimpin oleh Cavalini sebagai Direktur.</p>

                                <!-- Image and caption below the paragraph -->
                                <div class="mt-4">
                                    @if (file_exists(public_path('images/tonggak-1927.jpg')))
                                        <img src="{{ asset('images/tonggak-1927.jpg') }}" alt="Dokumentasi 1927" class="w-full rounded-lg shadow-md">
                                    @else
                                        <!-- Placeholder if image missing -->
                                        <div class="w-full h-48 bg-gray-100 rounded-lg flex items-center justify-center text-gray-400">Gambar tonggak sejarah (1927) belum tersedia</div>
                                    @endif
                                    <p class="text-sm text-gray-500 mt-2">Dokumentasi awal pendirian di Bogor (1927). Sumber: Arsip BBKKP.</p>
                                </div>
                            </div>
                        </div>

                        <!-- 1937 - Relocation to Yogyakarta (user-provided content) -->
                        <div class="flex gap-4">
                            <div class="flex-none">
                                <div class="w-20 h-20 bg-blue-100 rounded-full flex items-center justify-center">
                                    <span class="text-blue-600 font-bold">1937</span>
                                </div>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold mb-2">Pemindahan ke Yogyakarta</h3>
                                <p class="text-gray-600">Pada tahun 1937, Departement van Economische Zaken memutuskan untuk memindahkan instansi tersebut ke Yogyakarta, tepatnya di Tugu Kulon. Oey Ong Ham diangkat sebagai Wakil Direktur mendampingi Cavalini. Berita pemindahan Laboratorium Voor Leder ini dimuat di berbagai surat kabar seperti De Indische Courant (1 Mei 1937), Nederlandsch Indie (11 Desember 1937), dan Soerabaijasch Handelsblad (15 Desember 1937).</p>

                                <!-- Image and caption below the paragraph -->
                                <div class="mt-4">
                                    @if (file_exists(public_path('images/tonggak-1937.jpg')))
                                        <img src="{{ asset('images/tonggak-1937.jpg') }}" alt="Pemindahan 1937" class="w-full rounded-lg shadow-md">
                                    @else
                                        <!-- Placeholder if image missing -->
                                        <div class="w-full h-48 bg-gray-100 rounded-lg flex items-center justify-center text-gray-400">Gambar tonggak sejarah (1937) belum tersedia</div>
                                    @endif
                                    <p class="text-sm text-gray-500 mt-2">Dokumentasi pemindahan ke Yogyakarta (1937). Sumber: Arsip BBKKP.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Timeline items -->
                        <div class="flex gap-4">
                            <div class="flex-none">
                                <div class="w-20 h-20 bg-blue-100 rounded-full flex items-center justify-center">
                                    <span class="text-blue-600 font-bold">1945</span>
                                </div>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold mb-2">Perkembangan Awal pada Masa Pasca Kemerdekaan Indonesia</h3>
                                <p class="text-gray-600">Pada masa awal kemerdekaan tahun 1945, Laboratorium Voor Leder diambil alih oleh Pemerintah Indonesia di bawah Kementerian Perekonomian dan diubah namanya menjadi Balai Penyelidikan Kulit dengan Amir Husin Siregar sebagai Kepala Balai. Setelah berakhirnya kekuasaan Belanda dan penyerahan kedaulatan kepada Republik Indonesia tahun 1950, pembangunan nasional dimulai, terutama pada sektor industri dalam negeri.</p>

                                <p class="text-gray-600 mt-3">Sebagai negara agraris, Indonesia perlu membangun sektor industri untuk meningkatkan taraf hidup masyarakat. Pembangunan industri dinilai penting karena hanya negara yang telah memasuki struktur industrialistis yang dapat mempercepat peningkatan living standard masyarakatnya. Untuk itu, kegiatan penelitian industri (industrial research) digiatkan secara bertahap, dimulai dari yang sederhana hingga menuju mekanisasi dan penyempurnaan.</p>

                                <p class="text-gray-600 mt-3">Yogyakarta sebagai ibu kota revolusi tahun 1950 menjadi pusat berbagai kegiatan research industri, termasuk Balai Penyelidikan Kulit yang pada awalnya hanya memiliki satu ruangan kerja dan enam pegawai. Pasca perang kemerdekaan, kegiatan penelitian mengalami kendala besar karena minimnya peralatan laboratorium.</p>
                            </div>
                        </div>

                        <div class="flex gap-4">
                            <div class="flex-none">
                                <div class="w-20 h-20 bg-blue-100 rounded-full flex items-center justify-center">
                                    <span class="text-blue-600 font-bold">1951</span>
                                </div>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold mb-2">Awal Produktivitas dan Memulai Penelitian Kulit</h3>
                                <p class="text-gray-600">Baru pada tahun 1951, setelah adanya tambahan pegawai terampil dan fasilitas, kegiatan penelitian mulai aktif kembali meski dengan peralatan sederhana. Saat itu, Balai Penyelidikan Kulit berada di bawah Jawatan Perindustrian, Kementerian Perekonomian. Dengan peralatan seadanya, balai ini mampu memproduksi berbagai jenis kulit seperti box, ecrace, suede, dan chamois, serta melakukan penelitian pada proses penyamakan nabati, mineral, dan minyak tak jenuh.</p>
                            </div>
                        </div>

                        <div class="flex gap-4">
                            <div class="flex-none">
                                <div class="w-20 h-20 bg-blue-100 rounded-full flex items-center justify-center">
                                    <span class="text-blue-600 font-bold">1956</span>
                                </div>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold mb-2">Masa Reorganisasi</h3>
                                <p class="text-gray-600">Pada tahun 1956, balai ini berada di bawah Jawatan Balai-Balai Penyelidikan dan Pendidikan, Kementerian Perindustrian.</p>
                            </div>
                        </div>

                        <div class="flex gap-4">
                            <div class="flex-none">
                                <div class="w-20 h-20 bg-blue-100 rounded-full flex items-center justify-center">
                                    <span class="text-blue-600 font-bold">1957</span>
                                </div>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold mb-2">Peningkatan Fasilitas Penelitian</h3>
                                <p class="text-gray-600">Tahun 1957, aktivitas balai semakin meningkat dengan kedatangan berbagai mesin physical testing seperti:</p>

                                    <div class="my-2"></div>

                                    <ol class="list-decimal list-inside text-black font- ml-4 space-y-1">
                                    <li><span><em>Abrasion Strength Tester</em>:</span> untuk menguji ketahanan aus kulit sol (sol sepatu),</li>
                                    <li><span><em>Schopper Machine</em>:</span> untuk mengukur tensile strength kulit lapis atau atasan,</li>
                                    <li><span><em>Crockmeter</em>:</span> untuk menguji rubfastness dari pigment finish pada kulit,</li>
                                    <li><span><em>Bending Strength Tester</em>:</span> untuk mengetahui kekuatan lentur kulit box, chevreaux, dan suede bagi kebutuhan sepatu.</li>
                                </ol>

                                <p class="text-gray-600 mt-3">Selain itu, juga datang mesin besar untuk Pilot Plant seperti sok leather embossing machine, sammying machine, dan dua diesel generator.</p>

                                    <div class="mt-4">
                                        @if (file_exists(public_path('images/tonggak-1957.jpg')))
                                            <img src="{{ asset('images/tonggak-1957.jpg') }}" alt="Peningkatan Fasilitas 1957" class="w-full rounded-lg shadow-md">
                                        @else
                                            <div class="w-full h-48 bg-gray-100 rounded-lg flex items-center justify-center text-gray-400">Gambar tonggak sejarah (1957) belum tersedia</div>
                                        @endif
                                        <p class="text-sm text-gray-500 mt-2">Dokumentasi peningkatan fasilitas penelitian (1957). Sumber: Arsip BBKKP.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="flex gap-4">
                                <div class="flex-none">
                                    <div class="w-20 h-20 bg-blue-100 rounded-full flex items-center justify-center">
                                        <span class="text-blue-600 font-bold">1958</span>
                                    </div>
                                </div>
                                <div>
                                    <h3 class="text-xl font-semibold mb-2">Perintah Baru</h3>
                                    <p class="text-gray-600">Berdasarkan Undang-Undang RI Nomor 85 Tahun 1958 tentang Rencana Pembangunan Lima Tahun 1956–1960, Balai Penyelidikan Kulit memiliki tugas memajukan industri melalui pemberian nasihat teknis, peningkatan mekanisasi, dan peningkatan mutu teknologi melalui pemeriksaan bahan, penyelidikan, penyuluhan, serta pendidikan teknis.</p>

                                    <div class="mt-4">
                                        @if (file_exists(public_path('images/tonggak-1958.jpg')))
                                            <img src="{{ asset('images/tonggak-1958.jpg') }}" alt="Perintah Baru 1958" class="w-full rounded-lg shadow-md">
                                        @else
                                            <div class="w-full h-48 bg-gray-100 rounded-lg flex items-center justify-center text-gray-400">Gambar tonggak sejarah (1958) belum tersedia</div>
                                        @endif
                                        <p class="text-sm text-gray-500 mt-2">Dokumentasi perintah baru (1958). Sumber: Arsip BBKKP.</p>
                                    </div>
                                </div>
                            </div>

                                <div class="my-2"></div>


                        <div class="flex gap-4">
                            <div class="flex-none">
                                <div class="w-20 h-20 bg-blue-100 rounded-full flex items-center justify-center">
                                        <span class="text-blue-600 font-bold">1960</span>
                                </div>
                            </div>
                            <div>
                                    <h3 class="text-xl font-semibold mb-2">Transformasi Lembaga</h3>
                                <p class="text-gray-600">Pada tahun 1960, status Djawatan berubah menjadi Institut Teknologi dan Pendidikan di bawah Departemen Perindustrian Rakyat.</p>

                            </div>

                        </div>
                        
                        <!-- 1961 - Perubahan Status -->
                        <div class="flex gap-4">
                            <div class="flex-none">
                                <div class="w-20 h-20 bg-blue-100 rounded-full flex items-center justify-center">
                                    <span class="text-blue-600 font-bold">1961</span>
                                </div>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold mb-2">Perubahan Status</h3>
                                <p class="text-gray-600">Di tahun 1961, lembaga ini menjadi Perusahaan Negara Urusan Penelitian, Pembinaan, dan Pendidikan dengan nama PN.PR. Nupiksa Yasa, dan Balai Penyelidikan Kulit menjadi salah satu unitnya. Berdasarkan SK BPU PNPR No.142/Sek/BPU/61 tanggal 16 Juli 1961, nama lembaga resmi menjadi Balai Penelitian Kulit berstatus PN di bawah PN.PR. Nupiksa Yasa.</p>
                            </div>
                        </div>

                        <!-- 1980 - Perubahan Nama dan Status -->
                        <div class="flex gap-4">
                            <div class="flex-none">
                                <div class="w-20 h-20 bg-blue-100 rounded-full flex items-center justify-center">
                                    <span class="text-blue-600 font-bold">1980</span>
                                </div>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold mb-2">Perubahan Nama dan Status</h3>
                                <p class="text-gray-600">Pada tahun 1980, melalui SK Menteri Perindustrian No. 218/M/SK/6/1980 tanggal 5 Juni 1980, nama dan status lembaga berubah menjadi Balai Besar Penelitian dan Pengembangan Industri Barang Kulit, Karet, dan Plastik.</p>

                                <div class="mt-4">
                                    @if (file_exists(public_path('images/tonggak-1980.jpg')))
                                        <img src="{{ asset('images/tonggak-1980.jpg') }}" alt="Perubahan Nama dan Status 1980" class="w-full rounded-lg shadow-md">
                                    @else
                                        <div class="w-full h-48 bg-gray-100 rounded-lg flex items-center justify-center text-gray-400">Gambar tonggak sejarah (1980) belum tersedia</div>
                                    @endif
                                    <p class="text-sm text-gray-500 mt-2">Dokumentasi perubahan nama dan status (1980). Sumber: Arsip BBKKP.</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- 1995 - Penetapan Nama Resmi BBKKP -->
                        <div class="flex gap-4">
                            <div class="flex-none">
                                <div class="w-20 h-20 bg-blue-100 rounded-full flex items-center justify-center">
                                    <span class="text-blue-600 font-bold">1995</span>
                                </div>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold mb-2">Penetapan Nama Resmi BBKKP</h3>
                                <p class="text-gray-600">Pada 6 Desember 1995, Departemen Perindustrian digabung dengan Departemen Perdagangan menjadi Departemen Perindustrian dan Perdagangan (Depperindag). Struktur organisasi BBKKP tidak mengalami perubahan. Berdasarkan SK Menteri Perindustrian dan Perdagangan No.783/MPP/Kep/11/2002, nama lembaga resmi menjadi Balai Besar Kulit, Karet, dan Plastik (BBKKP).</p>
                            </div>
                        </div>

                        <!-- 2006 - Pemisahan Depperindag -->
                        <div class="flex gap-4">
                            <div class="flex-none">
                                <div class="w-20 h-20 bg-blue-100 rounded-full flex items-center justify-center">
                                    <span class="text-blue-600 font-bold">2006</span>
                                 </div>
                            </div>
                            <div>
                                    <h3 class="text-xl font-semibold mb-2">Pemisahan Depperindag</h3>
                                    <p class="text-gray-600">Tahun 2006, kedua departemen tersebut dipisah kembali, dan BBKKP berada di bawah Departemen Perindustrian sesuai SK Menperin No.45/M-IND/PER/6/2006.</p>

                                </div>
                            </div>
                        </div>
                        </div>

                        <!-- 2009 - Transformasi ke Kementerian Perindustrian -->
                        <div class="flex gap-4">
                            <div class="flex-none">
                                <div class="w-20 h-20 bg-blue-100 rounded-full flex items-center justify-center">
                                    <span class="text-blue-600 font-bold">2009</span>
                                </div>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold mb-2">Transformasi ke Kementerian Perindustrian</h3>
                                <p class="text-gray-600">Melalui Peraturan Presiden No.47 Tahun 2009, Departemen Perindustrian berganti nama menjadi Kementerian Perindustrian, namun struktur BBKKP tetap sama.</p>

                                <div class="mt-4">
                                    @if (file_exists(public_path('images/tonggak-2009.jpg')))
                                        <img src="{{ asset('images/tonggak-2009.jpg') }}" alt="Transformasi ke Kementerian Perindustrian 2009" class="w-full rounded-lg shadow-md">
                                    @else
                                        <div class="w-full h-48 bg-gray-100 rounded-lg flex items-center justify-center text-gray-400">Gambar tonggak sejarah (2009) belum tersedia</div>
                                    @endif
                                    <p class="text-sm text-gray-500 mt-2">Dokumentasi transformasi (2009). Sumber: Arsip BBKKP.</p>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
