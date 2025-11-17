@extends('layouts.app')

@section('title', 'Proses Sertifikasi Halal - BBSPJIKP')
@section('description', 'Tahapan dan prosedur sertifikasi halal di LPH BBSPJIKP')

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
                            <span class="text-gray-300">Proses Sertifikasi Halal</span>
                        </div>
                    </li>
                </ol>
            </nav>

            <!-- Header Text -->
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Proses Sertifikasi Halal</h1>
                <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                    Tahapan dan Prosedur Sertifikasi Halal
                </p>
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <div class="p-8">
                <!-- Diagram Alur -->
                <section class="mb-12">
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">Proses Sertifikasi Halal</h2>
                    <div class="space-y-6">
                    <!-- Alur Sertifikasi Halal -->
                    <section class="mb-12">
                    <h2 class="text-xl semi-bold mb-4">Alur Sertifikasi Halal</h2>

                    <!-- Gambar Proses -->
                    <div class="flex my-1">
                    <img src="{{ asset('images/proses-sertifikasi.png')}}"
                         alt="Gambar Proses Sertifikasi Halal"
                         class="w-full block">
                    </div>
                    </section>

                        <div class="bg-gray-50 p-6 rounded-lg mt-10">
    <h3 class="text-2xl font-bold text-gray-900 mb-3">
        Dokumen Persyaratan Sertifikasi Halal
    </h3>

    <ol class="list-decimal list-inside text-gray-700 space-y-1">
        <li>Surat Permohonan</li>
        <li>Formulir Pendaftaran</li>
        <li>Data Pelaku Usaha</li>
        <li>Nomor Induk Berusaha (NIB) (Bagi pelaku usaha dengan alamat kantor dalam negeri)</li>
        <li>Lisensi Importir (Bagi importir yang mendaftar)</li>
        <li>Dokumen Penyelia Halal (KTP, CV, SK Penyelia Halal, Sertifikat Pelatihan Penyelia Halal)</li>
        <li>Daftar Bahan (Bahan Baku, Bahan Tambahan, Bahan Penolong)</li>
        <li>Daftar Produk</li>
        <li>Matriks Bahan vs Produk</li>
        <li>Diagram Alir Proses Produksi</li>
        <li>Manual Sistem Jaminan Produk Halal (SJPH) beserta seluruh lampiran dan bukti implementasi</li>
        <li>Dokumen Pendukung Bahan (Sertifikat Halal, CoA, Pork free statement, diagram alir bahan, logo halal kemasan, dll)</li>
    </ol>
</div>

<!-- Hak dan Kewajiban Klien LPH -->
<div class="bg-gray-50 p-6 rounded-lg mt-10">

    <h3 class="text-2xl font-bold text-gray-900 mb-6">
        Hak dan Kewajiban Klien LPH
    </h3>

    <!-- Bagian 1: Hak Klien Sertifikasi Halal -->
    <h4 class="text-xl font-semibold text-gray-800 mb-3">
        1. Hak Klien Sertifikasi Halal
    </h4>

    <ol class="list-decimal pl-5 list-inside text-gray-700 space-y-1 mb-3">
        <li>Mendapatkan uraian rinci yang mutakhir tentang proses pemeriksaan produk halal.</li>
        <li>Mendapatkan tambahan informasi lain yang diperlukan.</li>
        <li>Klien berhak mengajukan keluhan terhadap laporan hasil pemeriksaan.</li>
    </ol>

    <!-- Bagian 2: Kewajiban Klien Sertifikasi Halal -->
    <h4 class="text-xl font-semibold text-gray-800 mb-3">
        2. Kewajiban Klien Sertifikasi Halal
    </h4>

    <ol class="list-decimal list-outside pl-9 text-gray-700 leading-relaxed space-y-1 mb-3">
        <li>Memberikan informasi secara benar, jelas, dan jujur.</li>
        <li>Memisahkan lokasi, tempat dan alat penyembelihan, pengolahan, penyimpanan, pengemasan, pendistribusian, penjualan, dan penyajian antara Produk Halal dan tidak halal.</li>
        <li>Memiliki Penyelia Halal.</li>
        <li>Melaporkan perubahan komposisi bahan kepada BPJPH.</li>
        <li>Memenuhi seluruh persyaratan sertifikasi termasuk menerapkan perubahan yang telah dikomunikasikan oleh LS BBSPJIKKP.</li>
        <li>Memastikan bahwa produk yang diproduksi secara berkelanjutan tetap memenuhi persyaratan sertifikasi.</li>
        <li>Menyiapkan dokumen dan memberikan akses ke seluruh area, rekaman (termasuk audit internal), serta personel untuk keperluan evaluasi seperti audit dan pengujian, serta menyelesaikan keluhan.</li>
        <li>Membuat pernyataan bahwa sertifikasi sesuai dengan ruang lingkup yang telah diberikan.</li>
        <li>Tidak menggunakan sertifikasi secara keliru atau membuat pernyataan yang menyesatkan terkait sertifikasi produk.</li>
        <li>Jika dokumen sertifikasi diberikan kepada pihak lain, maka harus direproduksi secara lengkap atau sesuai ketentuan dalam skema sertifikasi.</li>
        <li>Mematuhi ketentuan penggunaan sertifikasi dalam media komunikasi seperti dokumen, brosur, atau iklan.</li>
        <li>Memenuhi persyaratan skema sertifikasi terkait penggunaan tanda kesesuaian dan informasi produk, termasuk pembubuhan logo halal sesuai peraturan.</li>
        <li>Mencatat seluruh pengaduan terkait pemenuhan persyaratan sertifikasi, melakukan tindakan korektif, dan mendokumentasikan tindak lanjutnya.</li>
        <li>Menggunakan sertifikasi hanya untuk menunjukkan bahwa produk telah memenuhi standar yang ditetapkan.</li>
        <li>Menjamin bahwa tidak ada sertifikat atau laporan yang disalahgunakan.</li>
        <li>Bersedia dilakukan audit sewaktu-waktu atau audit khusus jika terdapat keluhan serius dari masyarakat atau lembaga berwenang.</li>
    </ol>
</div>

<!-- Informasi Proses Penanganan Keluhan -->
<div class="bg-gray-50 p-6 rounded-lg mt-10">

    <h3 class="text-2xl font-bold text-gray-900 mb-5">
        Informasi Proses Penanganan Keluhan
    </h3>

    <!-- Bagian 1: Keluhan terhadap Lembaga -->
    <h4 class="text-xl font-semibold text-gray-800 mb-3">
        1. Keluhan terhadap Lembaga
    </h4>

    <ol class="list-decimal list-outside pl-9 text-gray-700 leading-relaxed space-y-1 mb-3">
        <li>Klien tersertifikasi menyampaikan keluhan secara tertulis.</li>
        <li>Ketua Tim Pengembangan Bisnis menerima keluhan dari klien tersertifikasi. Keluhan administratif ditindaklanjuti oleh Ketua Tim Pengembangan Bisnis, sedangkan keluhan teknis diteruskan kepada Ketua Tim Sertifikasi.</li>
        <li>Ketua Tim Sertifikasi mengkaji jenis keluhan teknis, melakukan evaluasi terhadap kebenaran keluhan, dan menindaklanjutinya apabila terbukti benar. Tindakan korektif atau rapat dengan bagian terkait dilakukan apabila keluhan bersifat serius. Hasil tindak lanjut disampaikan kepada Ketua Tim Pengembangan Bisnis.</li>
        <li>Jika rapat yang dipimpin Ketua Tim Sertifikasi tidak dapat mengambil keputusan, Ketua Tim Sertifikasi melaporkan kepada Kepala BBSPJIKKP untuk memperoleh keputusan. Ketua Tim Pengembangan Bisnis mencatat keputusan tersebut.</li>
        <li>Ketua Tim Pengembangan Bisnis menyampaikan tindak lanjut penyelesaian keluhan kepada klien tersertifikasi.</li>
        <li>Klien tersertifikasi menerima tindak lanjut penyelesaian keluhan.</li>
    </ol>

    <!-- Bagian 2: Keluhan Pihak Lain -->
    <h4 class="text-xl font-semibold text-gray-800 mb-3">
        2. Keluhan Pihak Lain terhadap Klien Tersertifikasi
    </h4>

    <ol class="list-decimal list-outside pl-9 text-gray-700 leading-relaxed space-y-1 mb-3">
        <li>Ketua Tim Pengembangan Bisnis menerima keluhan secara tertulis dari pihak lain terkait klien tersertifikasi (F-KEL-1), kemudian mencatat dan mengoordinasikannya kepada Ketua Tim Sertifikasi.</li>
        <li>Ketua Tim Sertifikasi mengkaji jenis keluhan, melakukan verifikasi dan evaluasi, serta menginformasikan keluhan tersebut secara tertulis kepada klien tersertifikasi apabila terbukti benar.</li>
        <li>Klien tersertifikasi memberikan pernyataan dan melakukan investigasi atas keluhan tersebut. Pernyataan disampaikan secara tertulis kepada pihak lain yang mengadu dan LS BBSPJIKKP.</li>
        <li>Jika pihak lain tidak puas, Kepala BBSPJIKKP mengundang pihak-pihak terkait untuk menyelesaikan keluhan. Kepala Bagian Tata Usaha mencatat keputusan rapat tersebut.</li>
        <li>Kepala BBSPJIKKP meminta Ketua Tim Pengembangan Bisnis untuk menyampaikan keputusan kepada pihak lain dan klien tersertifikasi.</li>
        <li>Ketua Tim Pengembangan Bisnis menyampaikan keputusan tersebut kepada pihak lain dan klien tersertifikasi.</li>
    </ol>
</div>

<div class="bg-[#2F8CD1] text-white rounded-xl p-5 w-fit ml-10 shadow-md">
    <h3 class="text-lg font-bold mb-3">Daftar Audit Halal</h3>

    <ul class="space-y-1">
        <li class="flex items-center gap-2">
            <span class="w-2 h-2 bg-white rounded-full"></span>
            @php $audit202223 = public_path('files/Daftar-Audit-LPH-BBSPJIKKP-2022-2023-per20250801.pdf'); @endphp
                <a href="{{ asset('files/Daftar-Audit-LPH-BBSPJIKKP-2022-2023-per20250801.pdf') }}" class="hover:underline flex items-center gap-2" target="_blank" rel="noopener noreferrer">
                    <class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v12m0 0l-4-4m4 4l4-4"/></svg>
                    <span>Tahun 2022–2023</span>
                </a>
        </li>

        <li class="flex items-center gap-2">
            <span class="w-2 h-2 bg-white rounded-full"></span>
            @php $audit2024 = public_path('files/Daftar-Audit-LPH-BBSPJIKKP-2024-per20250801.pdf'); @endphp
                <a href="{{ asset('files/Daftar-Audit-LPH-BBSPJIKKP-2024-per20250801.pdf') }}" class="hover:underline flex items-center gap-2" target="_blank" rel="noopener noreferrer">
                    <class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v12m0 0l-4-4m4 4l4-4"/></svg>
                    <span>Tahun 2024</span>
                </a>
        </li>
    </ul>
</div>
                </section>
            </div>
        </div>
    </div>
    <!-- Atau Bisa Seperti Di Bawah Ini -->
    <script type="text/javascript" src="https://web.animemusic.us/widget_disabilitas.js" api-key-resvoice="bzbTAKXD"></script>
    <!-- ganti key api-key-resvoice dengan key yang ada di responsive voice-->
@endsection