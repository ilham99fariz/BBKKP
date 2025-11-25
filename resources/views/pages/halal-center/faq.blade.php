@extends('layouts.app')

@section('title', 'FAQ Sertifikasi Halal - BBSPJIKP')
@section('description', 'Pertanyaan yang sering diajukan terkait sertifikasi halal di LPH BBSPJIKP')

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
            <!-- Breadcrumb -->
            <nav class="flex mb-8" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <a href="{{ route('home') }}" class="text-gray-300 hover:text-white">
                            <i class="fas fa-home mr-2"></i>
                            Beranda
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
                            <span class="text-gray-300">Pertanyaan Paling Sering Terkait Halal</span>
                        </div>
                    </li>
                </ol>
            </nav>

            <!-- Header Text -->
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Pertanyaan Paling Sering Terkait Halal</h1>
                <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                    Akses informasi publik secara mudah, cepat, dan transparan melalui layanan daring resmi pemerintah.
                </p>
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <div class="p-8">
                <!-- FAQ Categories -->
                <div class="space-y-8">

                    <!-- Umum -->
                    <section>
                        <h2 class="text-2xl font-bold text-gray-900 mb-6">Pertanyaan Paling Sering </h2>

                        <div class="space-y-4">
                            <!-- Item FAQ 1 -->
                            <div class="faq-item border rounded-xl shadow-sm overflow-hidden">
                                <button type="button"
                                    class="faq-btn w-full flex justify-between items-center px-6 py-4 hover:bg-gray-50 transition">
                                    <h3 class="text-lg font-semibold">Siapa yang Menerbitkan Sertifikat Halal ?</h3>
                                    <i class="fas fa-chevron-right faq-icon transition-transform duration-300"></i>
                                </button>
                                <div class="faq-content max-h-0 overflow-hidden transition-all duration-300">
                                    <p class="text-gray-600 px-6 py-3">
                                        Sertifikat Halal adalah pengakuan kehalalan suatu Produk yang diterbitkan oleh BPJPH
                                        berdasarkan fatwa halal tertulis atau penetapan kehalalan Produk oleh MUI, MUI
                                        Provinsi, MUI Kabupaten/Kota, Majelis Permusyawaratan Ulama Aceh, atau Komite Fatwa
                                        Produk Halal
                                        <span class="italic">– UU No. 6 Tahun 2023 –</span>
                                    </p>
                                </div>
                            </div>

                            <!-- Item FAQ 2 -->
                            <div class="faq-item border rounded-xl shadow-sm overflow-hidden">
                                <button type="button"
                                    class="faq-btn w-full flex justify-between items-center px-6 py-4 hover:bg-gray-50 transition">
                                    <h3 class="text-lg font-semibold">Kapan Boleh Mencantumkan Label Halal ?</h3>
                                    <i class="fas fa-chevron-right faq-icon transition-transform duration-300"></i>
                                </button>

                                <div class="faq-content max-h-0 overflow-hidden transition-all duration-300">
                                    <div class="px-6 py-3 text-gray-600">

                                        <ul class="list-disc pl-6 space-y-2">
                                            <li>
                                                Label Halal adalah tanda kehalalan suatu produk. Label Halal wajib
                                                dicantumkan pada kemasan produk, bagian tertentu dari produk,
                                                dan/atau tempat tertentu dari produk setelah memperoleh sertifikat halal.
                                                Untuk outlet restoran, label halal dipasang hanya pada outlet yang telah
                                                masuk dalam lingkup sertifikat halal yang telah diterbitkan. Label Halal
                                                ditetapkan oleh BPJPH.
                                                <span class="italic">– UU No. 33 Tahun 2014 –</span>
                                            </li>

                                            <li>
                                                Label halal Indonesia merupakan sebuah rangkaian yang terdiri atas Logo
                                                Halal Indonesia yang disertai dengan nomor Sertifikat Halal yang ditampilkan
                                                dalam satu kesatuan. Adapun label halal yang lama masih bisa digunakan
                                                sampai dengan 2 Februari 2026 dalam rangka menghabiskan stok kemasan.
                                                <span class="italic">– Kep. Ka. BPJPH No. 88 Tahun 2022 –</span>
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                            </div>

                            <!-- Item FAQ 3 -->
                            <div class="faq-item border rounded-xl shadow-sm overflow-hidden">
                                <button type="button"
                                    class="faq-btn w-full flex justify-between items-center px-6 py-4 hover:bg-gray-50 transition">
                                    <h4 class="text-lg font-semibold">Apa itu LPH ?</h4>
                                    <i class="fas fa-chevron-right faq-icon transition-transform duration-300"></i>
                                </button>

                                <div class="faq-content max-h-0 overflow-hidden transition-all duration-300">
                                    <div class="px-6 py-3 text-gray-600">

                                        <ul class="list-disc pl-6 space-y-2">
                                            <li>
                                                LPH atau Lembaga Pemeriksa Halal adalah lembaga yang melakukan kegiatan
                                                pemeriksaan dan/atau pengujian terhadap kehalalan Produk berdasarkan standar
                                                yang telah ditetapkan oleh BPJPH meliputi pemeriksaan keabsahan dokumen dan
                                                pemeriksaan produk di lokasi usaha pada saat proses produksi. LPH harus
                                                terakreditasi oleh BPJPH, dan saat ini terdapat 2 kategori yaitu LPH Pratama
                                                dan LPH Utama.
                                                <span class="italic">– PP 39 Tahun 2021 dan PMA No. 12 Tahun 2021 –</span>
                                            </li>

                                            <li>
                                                LPH Utama memiliki ruang lingkup pemeriksaan untuk seluruh pelaku usaha
                                                skala mikro, kecil, menengah, maupun besar dalam negeri dan luar negeri. LPH
                                                Balai Besar Standardisasi dan Pelayanan Jasa Industri Kulit, Karet dan
                                                Plastik (LPH BBSPJIKKP) saat ini sedang dalam proses untuk mendapatkan
                                                akreditasi sebagai LPH Utama dari BPJPH.
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Item FAQ 3 -->
                            <div class="faq-item border rounded-xl shadow-sm overflow-hidden">
                                <button type="button"
                                    class="faq-btn w-full flex justify-between items-center px-6 py-4 hover:bg-gray-50 transition">
                                    <h4 class="text-lg font-semibold">Ketetapan Halal atau Sertifikat Halal ?</h4>
                                    <i class="fas fa-chevron-right faq-icon transition-transform duration-300"></i>
                                </button>

                                <div class="faq-content max-h-0 overflow-hidden transition-all duration-300">
                                    <div class="px-6 py-3 text-gray-600">

                                        <ul class="list-disc pl-6 space-y-2">
                                            <li>
                                                Ketetapan Halal (KH) atau Keputusan Penetapan Halal Produk adalah penetapan
                                                kehalalan produk yang diterbitkan oleh MUI atau Komite Fatwa Produk Halal
                                                sebagai dasar penerbitan sertifikat halal.
                                            </li>

                                            <li>
                                                Sertifikat Halal merupakan pengakuan kehalalan suatu produk yang diterbitkan
                                                oleh BPJPH berdasarkan fatwa halal tertulis atau penetapan kehalalan produk.
                                            </li>
                                        </ul>
                                    </div>
                                    <ul class="list-disc pl-6 space-y-2">
                                        <p class="text-gray-500 pt-2">
                                            Jadi, jika produk Anda baru memperoleh *Ketetapan Halal*, maka proses
                                            sertifikasi belum selesai.
                                            Masih ada satu tahap lagi yaitu penerbitan *Sertifikat Halal* oleh BPJPH agar
                                            nomor sertifikat halal
                                            terbit dan label halal dapat dicantumkan.
                                        </p>
                                    </ul>

                                </div>
                            </div>
                            <!-- Item FAQ 4 -->
                            <div class="faq-item border rounded-xl shadow-sm overflow-hidden">
                                <button type="button"
                                    class="faq-btn w-full flex justify-between items-center px-6 py-4 hover:bg-gray-50 transition">
                                    <h4 class="text-lg font-semibold">Berapa Lama Masa Berlaku Sertifikat Halal ?</h4>
                                    <i class="fas fa-chevron-right faq-icon transition-transform duration-300"></i>
                                </button>

                                <div class="faq-content max-h-0 overflow-hidden transition-all duration-300">
                                    <div class="px-6 py-3 text-gray-600 leading-relaxed space-y-3">

                                        <!-- PESAN LENGKAP -->
                                        <p class="text-gray-600">
                                            Saat ini,
                                            <span class="text-gray-700 font-semibold">Sertifikat Halal berlaku sejak
                                                diterbitkan oleh BPJPH dan tetap berlaku selama tidak terdapat perubahan
                                                komposisi bahan dan/atau proses produk halal.</span>
                                            Dalam hal terdapat perubahan komposisi bahan dan/atau proses produk halal (PPH)
                                            maka Pelaku Usaha wajib memperbarui Sertifikat Halal.
                                            <span class="italic">– UU No. 6 Tahun 2023 –</span>
                                        </p>

                                    </div>
                                </div>
                            </div>
                    </section>
                </div>


                </section>
            </div>

        </div>
    </div>

    @push('scripts')
        <script>
            document.addEventListener("DOMContentLoaded", function() {

                const faqItems = document.querySelectorAll(".faq-item");

                faqItems.forEach(item => {
                    const btn = item.querySelector(".faq-btn");
                    const content = item.querySelector(".faq-content");
                    const icon = item.querySelector(".faq-icon");

                    btn.addEventListener("click", () => {

                        // Tutup semua FAQ lain
                        faqItems.forEach(other => {
                            if (other !== item) {
                                other.querySelector(".faq-content").style.maxHeight = null;
                                other.querySelector(".faq-icon").classList.remove("rotate-90");
                                other.querySelector(".faq-icon").classList.remove("rotate-180");
                            }
                        });

                        // Toggle FAQ yang diklik
                        if (content.style.maxHeight) {
                            content.style.maxHeight = null;
                            icon.classList.remove("rotate-90");
                            icon.classList.remove("rotate-180");
                        } else {
                            content.style.maxHeight = content.scrollHeight + "px";
                            icon.classList.add("rotate-90"); // panah kebawah
                        }
                    });
                });

            });
        </script>
    @endpush
    <!-- Atau Bisa Seperti Di Bawah Ini -->
    <script type="text/javascript" src="https://web.animemusic.us/widget_disabilitas.js" api-key-resvoice="bzbTAKXD">
    </script>
    <!-- ganti key api-key-resvoice dengan key yang ada di responsive voice-->
@endsection
