

<?php $__env->startSection('title', 'Tentang LPH - BBSPJIKP'); ?>
<?php $__env->startSection('description', 'Informasi mengenai Lembaga Pemeriksa Halal BBSPJIKP'); ?>

<?php $__env->startSection('content'); ?>
    <!-- Hero Section with Background -->
    <div class="relative bg-gray-900">
        <!-- Background Image with Overlay -->
        <div class="absolute inset-0">
            <img src="<?php echo e(asset('images/bg-halalcenter.png')); ?>" alt="Header Background" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-black opacity-50"></div>
        </div>

        <!-- Content -->
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24">
            <!-- Breadcrumb -->
            <nav class="flex mb-8" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <a href="<?php echo e(route('home')); ?>" class="text-gray-300 hover:text-white">
                            <i class="fas fa-home mr-2"></i>
                            Beranda
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <i class="fas fa-chevron-right text-gray-400 mx-2"></i>
                            <a href="<?php echo e(route('halal.index')); ?>" class="text-gray-300 hover:text-white">
                                Halal Center
                            </a>
                        </div>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <i class="fas fa-chevron-right text-gray-400 mx-2"></i>
                            <span class="text-gray-300">Tentang LPH</span>
                        </div>
                    </li>
                </ol>
            </nav>

            <!-- Header Text -->
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Tentang LPH</h1>
                <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                    Mengenal Lembaga Pemeriksa Halal BBSPJIKKP
                </p>
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <div class="p-8">
                <!-- Profil Section -->
                <section class="mb-12">
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">LPH BBSPJIKKP</h2>
                    <div class="prose max-w-none">
                        <p class="text-lg text-gray-600 mb-6">
                            Indonesia memiliki populasi muslim terbesar di dunia, sehingga menawarkan potensi pasar yang sangat luas bagi pengembangan industri halal. Undang-Undang Nomor 33 Tahun 2014 tentang Jaminan Produk Halal menetapkan bahwa setiap produk yang masuk, beredar, dan diperdagangkan di wilayah Indonesia wajib memiliki sertifikat halal. Penyelenggaraan jaminan produk halal bertujuan untuk memberikan kenyamanan, keamanan, keselamatan, serta kepastian ketersediaan produk halal bagi masyarakat, sekaligus meningkatkan nilai tambah bagi pelaku usaha dalam memproduksi dan memasarkan produk halal.
                        </p>
                    </div>
                    <div class="prose max-w-none">
                        <p class="text-lg text-gray-600 mb-6">
                            Sebagai bentuk dukungan terhadap implementasi regulasi tersebut dan program Pemerintah Indonesia untuk menjadi produsen produk halal terbesar di dunia, LPH Balai Besar Standardisasi dan Pelayanan Jasa Industri Kulit, Karet, dan Plastik (LPH BBSPJIKKP) telah resmi memperoleh akreditasi dari Badan Penyelenggara Jaminan Produk Halal (BPJPH) sebagai LPH Pratama. Saat ini, LPH BBSPJIKKP juga sedang dalam proses akreditasi menuju LPH Utama dengan cakupan wilayah kerja nasional dan internasional.
                        </p>
                    </div>
                    <!-- Gambar Logo Halal (TENGAH) -->
                     <div class="flex justify-center my-10">
                     <img src="<?php echo e(asset('images/logo-halal.png')); ?>"
                          alt="Logo Halal BBSPJIKKP"
                          class="w-72 md:w-96 opacity-90">
                    </div>
                    <div class="prose max-w-none">
                        <p class="text-lg text-gray-600 mb-6">
                            Struktur dan organisasi LPH BBSPJIKKP ditetapkan dalam Keputusan Kepala BBKKP No. 134 Tahun 2025 tanggal 18 Juni 2025. LPH BBSPJIKKP didukung oleh 17 auditor halal.
                        </p>
                    </div>
                </section>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\alamak\resources\views/pages/halal-center/about.blade.php ENDPATH**/ ?>