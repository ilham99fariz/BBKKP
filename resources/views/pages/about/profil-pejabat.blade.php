@extends('layouts.app')

@section('title', 'Profil Pejabat - BBSPJIKP')
@section('description', 'Profil pejabat dan struktur kepemimpinan Balai Besar Standardisasi dan Pelayanan Jasa Industri Kulit, Plastik, dan Karet')

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
                        <span class="text-gray-500">Profil Pejabat</span>
                    </div>
                </li>
            </ol>
        </nav>

        <!-- Main Content -->
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <div class="p-8">
                <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Profil Pejabat BBSPJIKP</h1>
                
                <div class="space-y-12">
                    <!-- Kepala Balai -->
                    <section>
                    <div class="flex flex-col md:flex-row items-center md:items-start gap-8">
            
                    <!-- Foto Profil -->
                    <div class="md:w-1/3 flex justify-center">
                        <div class="relative group">
                            <!-- Efek gradient di sekitar foto -->
                            <div class="absolute -inset-1 bg-gradient-to-r from-gray-400 via-gray-500 to-gray-600 rounded-2xl blur opacity-25 group-hover:opacity-60 transition duration-500"></div>

                    <!-- Gambar profil -->
                    <div class="relative rounded-2xl overflow-hidden shadow-lg shadow-gray-300 hover:shadow-gray-400 transition duration-500">
                        <img src="{{ asset('images/Cahyadi.jpeg') }}" 
                             alt="Kepala Balai" 
                             class="w-64 h-80 md:w-72 md:h-96 object-cover rounded-2xl transform group-hover:scale-105 transition duration-500 ease-out">
                                </div>
                            </div>
                        </div>
                            <div class="md:w-2/3">
                                <h3 class="text-xl font-semibold mb-2">Dr. Cahyadi, S.Si.T ., M.A.B.</h3>
                                <span><em>Kepala Balai Besar Standardisasi dan Pelayanan Jasa Industri Kulit, Karet, dan Plastik</em></span>

                                <hr class="border-gray-300">
                                </ul>
                                
                                <div class="prose max-w-none text-justify leading-relaxed">
                                    <p class="text-gray-600 mt-3">Bapak Cahyadi resmi menjabat sebagai Kepala Balai Besar Standardisasi dan Pelayanan Jasa Industri Kulit, Karet, dan Plastik (BBSPJIKKP) sejak 17 Oktober 2025, menggantikan Bapak Hagung Eko Pawoko. Beliau lahir di Cirebon pada tahun 1979.</p>
                                    </ul>
                                    <p class="text-gray-600 mt-3">Sebelum menjabat posisi saat ini, beliau memiliki pengalaman panjang di berbagai lembaga di bawah Kementerian Perindustrian, antara lain:</p>
                                    <ul class="list-disc pl-5">
                                        <li class="text-gray-600">Kepala Balai Besar Standardisasi dan Pelayanan Jasa Industri Tekstil (2022–2025)</li>
                                        <li class="text-gray-600">Kepala Balai Riset dan Standardisasi Industri Samarinda (2019–2021)</li>
                                        <li class="text-gray-600">Kepala Bagian Tata Usaha Balai Besar Tekstil (2014–2019)</li>
                                        <li class="text-gray-600">Kepala Subbagian Keuangan (2010–2014)</li>
                                        <li class="text-gray-600">Kepala Subbagian Program dan Pelaporan (2008–2010)</li>

                                    </ul>
                                    <p class="text-gray-600 mt-3">Dalam bidang akademik, beliau meraih:</p>
                                    <ul class="list-disc pl-5">
                                        <li class="text-gray-600">Sarjana Teknik Tekstil dari STT Tekstil pada tahun 2002</li>
                                        <li class="text-gray-600">Magister Ekonomi Publik dari STIA Lembaga Administrasi Negara Bandung pada tahun 2015</li>
                                        <li class="text-gray-600">Doktor Ilmu Ekonomi dari Universitas Padjadjaran pada tahun 2025</li>

                                    </ul>
                                    <p class="text-gray-600 mt-3">Bapak Cahyadi telah meraih berbagai penghargaan atas dedikasi dan kinerjanya, antara lain:</p>
                                    <ul class="list-disc pl-5">
                                        <li class="text-gray-600">Satyalancana Karya Satya 10 Tahun dari Kementerian Sekretariat Negara Republik Indonesia pada tahun 2017</li>
                                        <li class="text-gray-600">Lulusan Terbaik pada Diklat Manajemen PPNS tahun 2020</li>
                                        <li class="text-gray-600">Prestasi Istimewa Peringkat I pada Diklat PIM II (Pelatihan Kepemimpinan Nasional Tingkat II) tahun 2020</li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>
                <ul>
                    </ul>
                    <!-- Kepala Bagian Tata Usaha -->
                    <div class="space-y-12">
                    <section>
                        <div class="flex flex-col md:flex-row-reverse items-center md:items-start gap-8">
            
                    <!-- Foto Profil (kanan) -->
                        <div class="md:w-1/3 flex justify-center md:justify-end">
                            <div class="relative group">
                    <!-- Efek gradient di sekitar foto -->
                    <div class="absolute -inset-1 bg-gradient-to-r from-gray-400 via-gray-500 to-gray-600 rounded-2xl blur opacity-25 group-hover:opacity-60 transition duration-500"></div>

                    <!-- Gambar profil -->
                    <div class="relative rounded-2xl overflow-hidden shadow-lg shadow-gray-300 hover:shadow-gray-400 transition duration-500">
                        <img src="{{ asset('images/FebriGuswandi.jpeg') }}" 
                             alt="Kepala Balai" 
                             class="w-64 h-80 md:w-72 md:h-96 object-cover rounded-2xl transform group-hover:scale-105 transition duration-500 ease-out">
                    </div>
                </div>
            </div>

            <!-- Teks di Kiri -->
             <div class="md:w-2/3 text-black-700">
                <h3 class="text-xl font-semibold mb-2">Febri Guswandi, S.E., M.Si.</h3>
                <span class="block italic text-black-600 mb-3">
                    Kepala Bagian Tata Usaha
                </span>

                <hr class="border-gray-300 mb-4">

                <div class="prose max-w-none">
    <div class="flex-1 text-gray-700 text-justify leading-relaxed"> 
        <p class="text-gray-600 mb-4">
            Bapak Febri Guswandi lahir di Tanjung Ampalu pada tahun 1981. Beliau menjabat sebagai Kepala Bagian Tata Usaha sejak Maret 2025. Sebelumnya beliau menjabat sebagai Kepala Subbag Tata Usaha di BSPJI Palembang (2019–2025), Kepala Seksi Teknologi Industri di BSPJI Palembang (2018–2019), dan Kepala Subbag Tata Usaha di BPPSI Pekanbaru yang kini bernama BSPJI Pekanbaru (2017–2018).
        </p>

        <p class="text-gray-600 mb-4">
            Beliau meraih gelar Sarjana Ekonomi di Universitas Andalas pada tahun 2002 dan menyelesaikan pendidikan Magister Sains di Universitas Indonesia pada tahun 2006.
        </p>
    </div>
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