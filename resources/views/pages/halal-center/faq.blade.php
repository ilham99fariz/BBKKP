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
                            <span class="text-gray-300">FAQ</span>
                        </div>
                    </li>
                </ol>
            </nav>

            <!-- Header Text -->
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">FAQ</h1>
                <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                    Pertanyaan yang Sering Diajukan
                </p>
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <div class="p-8">
                <!-- Search Bar -->
                <div class="mb-8">
                    <div class="max-w-xl mx-auto">
                        <div class="relative">
                            <input type="text" id="faq-search" 
                                class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                placeholder="Cari pertanyaan...">
                            <div class="absolute right-3 top-3 text-gray-400">
                                <i class="fas fa-search"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- FAQ Categories -->
                <div class="space-y-8">
                    <!-- Umum -->
                    <section>
                        <h2 class="text-2xl font-bold text-gray-900 mb-6">Pertanyaan Umum</h2>
                        <div class="space-y-4">
                            <div class="border rounded-lg">
                                <button class="w-full text-left px-6 py-4 focus:outline-none">
                                    <div class="flex justify-between items-center">
                                        <h3 class="text-lg font-semibold">Apa itu sertifikasi halal?</h3>
                                        <i class="fas fa-chevron-down"></i>
                                    </div>
                                </button>
                                <div class="px-6 pb-4">
                                    <p class="text-gray-600">
                                        Sertifikasi halal adalah proses untuk memperoleh sertifikat halal melalui serangkaian pemeriksaan dan pengujian yang dilakukan oleh lembaga yang berwenang untuk memastikan bahwa bahan, proses produksi, dan sistem jaminan halal memenuhi standar yang ditetapkan.
                                    </p>
                                </div>
                            </div>

                            <div class="border rounded-lg">
                                <button class="w-full text-left px-6 py-4 focus:outline-none">
                                    <div class="flex justify-between items-center">
                                        <h3 class="text-lg font-semibold">Siapa yang wajib memiliki sertifikat halal?</h3>
                                        <i class="fas fa-chevron-down"></i>
                                    </div>
                                </button>
                                <div class="px-6 pb-4">
                                    <p class="text-gray-600">
                                        Berdasarkan UU JPH, produk yang masuk, beredar, dan diperdagangkan di Indonesia wajib bersertifikat halal, kecuali produk yang berasal dari bahan yang diharamkan.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Prosedur -->
                    <section>
                        <h2 class="text-2xl font-bold text-gray-900 mb-6">Prosedur Sertifikasi</h2>
                        <div class="space-y-4">
                            <div class="border rounded-lg">
                                <button class="w-full text-left px-6 py-4 focus:outline-none">
                                    <div class="flex justify-between items-center">
                                        <h3 class="text-lg font-semibold">Bagaimana cara mendaftar sertifikasi halal?</h3>
                                        <i class="fas fa-chevron-down"></i>
                                    </div>
                                </button>
                                <div class="px-6 pb-4">
                                    <p class="text-gray-600">
                                        Pendaftaran sertifikasi halal dilakukan melalui BPJPH dengan mengisi formulir dan melengkapi dokumen yang dipersyaratkan. Selanjutnya, BPJPH akan menunjuk LPH untuk melakukan pemeriksaan dan/atau pengujian kehalalan produk.
                                    </p>
                                </div>
                            </div>

                            <div class="border rounded-lg">
                                <button class="w-full text-left px-6 py-4 focus:outline-none">
                                    <div class="flex justify-between items-center">
                                        <h3 class="text-lg font-semibold">Berapa lama proses sertifikasi halal?</h3>
                                        <i class="fas fa-chevron-down"></i>
                                    </div>
                                </button>
                                <div class="px-6 pb-4">
                                    <p class="text-gray-600">
                                        Proses sertifikasi halal memakan waktu sekitar 3-4 bulan sejak dokumen dinyatakan lengkap dan pembayaran biaya sertifikasi dilakukan.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Teknis -->
                    <section>
                        <h2 class="text-2xl font-bold text-gray-900 mb-6">Pertanyaan Teknis</h2>
                        <div class="space-y-4">
                            <div class="border rounded-lg">
                                <button class="w-full text-left px-6 py-4 focus:outline-none">
                                    <div class="flex justify-between items-center">
                                        <h3 class="text-lg font-semibold">Apa saja yang diperiksa saat audit?</h3>
                                        <i class="fas fa-chevron-down"></i>
                                    </div>
                                </button>
                                <div class="px-6 pb-4">
                                    <p class="text-gray-600">
                                        Audit meliputi pemeriksaan dokumen, fasilitas produksi, bahan baku dan tambahan, proses produksi, sistem jaminan halal, serta pengambilan sampel jika diperlukan.
                                    </p>
                                </div>
                            </div>

                            <div class="border rounded-lg">
                                <button class="w-full text-left px-6 py-4 focus:outline-none">
                                    <div class="flex justify-between items-center">
                                        <h3 class="text-lg font-semibold">Berapa lama masa berlaku sertifikat halal?</h3>
                                        <i class="fas fa-chevron-down"></i>
                                    </div>
                                </button>
                                <div class="px-6 pb-4">
                                    <p class="text-gray-600">
                                        Sertifikat halal berlaku selama 4 tahun sejak diterbitkan dan wajib diperpanjang sebelum masa berlakunya habis.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

                <!-- Contact Section -->
                <section class="mt-12">
                    <div class="bg-blue-50 p-6 rounded-lg">
                        <h2 class="text-xl font-semibold text-gray-900 mb-4">Masih ada pertanyaan?</h2>
                        <p class="text-gray-600 mb-4">
                            Jika Anda tidak menemukan jawaban yang Anda cari, silakan hubungi kami melalui:
                        </p>
                        <div class="flex flex-wrap gap-4">
                            <a href="#" class="inline-flex items-center px-4 py-2 border border-blue-500 text-blue-500 rounded-lg hover:bg-blue-500 hover:text-white transition-colors">
                                <i class="fas fa-envelope mr-2"></i>
                                Email
                            </a>
                            <a href="#" class="inline-flex items-center px-4 py-2 border border-green-500 text-green-500 rounded-lg hover:bg-green-500 hover:text-white transition-colors">
                                <i class="fab fa-whatsapp mr-2"></i>
                                WhatsApp
                            </a>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

    @push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const faqSearch = document.getElementById('faq-search');
            const questions = document.querySelectorAll('.border.rounded-lg');

            faqSearch.addEventListener('input', function(e) {
                const searchTerm = e.target.value.toLowerCase();

                questions.forEach(question => {
                    const title = question.querySelector('h3').textContent.toLowerCase();
                    const content = question.querySelector('.px-6.pb-4 p').textContent.toLowerCase();

                    if (title.includes(searchTerm) || content.includes(searchTerm)) {
                        question.style.display = 'block';
                    } else {
                        question.style.display = 'none';
                    }
                });
            });

            // Toggle FAQ answers
            const faqButtons = document.querySelectorAll('.border.rounded-lg button');
            faqButtons.forEach(button => {
                button.addEventListener('click', () => {
                    const answer = button.nextElementSibling;
                    const icon = button.querySelector('.fas');
                    
                    answer.classList.toggle('hidden');
                    icon.classList.toggle('fa-chevron-down');
                    icon.classList.toggle('fa-chevron-up');
                });
            });
        });
    </script>
    @endpush
@endsection