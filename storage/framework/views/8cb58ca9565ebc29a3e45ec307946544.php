

<?php $__env->startSection('title', 'Sertifikasi - BBSPJIKP'); ?>
<?php $__env->startSection('description', 'Informasi mengenai Lembaga Sertifikasi Produk BBSPJIKKP JPA'); ?>

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
                            <a href="<?php echo e(route('services.index')); ?>" class="text-gray-300 hover:text-white">
                                Layanan
                            </a>
                        </div>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <i class="fas fa-chevron-right text-gray-400 mx-2"></i>
                            <span class="text-gray-300">Sertifikasi</span>
                        </div>
                    </li>
                </ol>
            </nav>

            <!-- Header Text -->
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Sertifikasi</h1>
                <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                    Lembaga Sertifikasi Produk BBSPJIKKP JPA (LSPro BBSPJIKKP JPA) memberikan layanan sertifikasi produk kulit, karet dan plastik dengan tujuan memberikan kepastian mutu produk dengan mengacu pada Standar Nasional Indonesia (SNI).
                </p>
            </div>

            
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <div class="p-8">
                <!-- Profil Section -->
                <section class="mb-12">
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">Profil LPH BBSPJIKP</h2>
                    <div class="prose max-w-none">
                        <p class="text-lg text-gray-600 mb-6">
                            Lembaga Pemeriksa Halal (LPH) BBSPJIKP merupakan lembaga yang memiliki kewenangan untuk melakukan pemeriksaan dan/atau pengujian kehalalan produk yang terakreditasi oleh BPJPH yang bekerja sama dengan MUI.
                        </p>
                    </div>
                </section>

                <!-- Visi Misi Section -->
                <section class="mb-12">
                    <div class="grid md:grid-cols-2 gap-8">
                        <div class="bg-green-50 p-6 rounded-lg">
                            <h3 class="text-2xl font-bold text-green-800 mb-4">Visi</h3>
                            <p class="text-gray-700">
                                Menjadi lembaga pemeriksa halal terpercaya yang mendukung pengembangan industri halal nasional.
                            </p>
                        </div>
                        <div class="bg-blue-50 p-6 rounded-lg">
                            <h3 class="text-2xl font-bold text-blue-800 mb-4">Misi</h3>
                            <ul class="list-disc list-inside text-gray-700 space-y-2">
                                <li>Melaksanakan pemeriksaan dan pengujian kehalalan produk</li>
                                <li>Mendukung pengembangan industri halal nasional</li>
                                <li>Memberikan layanan prima kepada pelaku usaha</li>
                            </ul>
                        </div>
                    </div>
                </section>

                <!-- Tugas dan Fungsi -->
                <section class="mb-12">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6">Tugas dan Fungsi</h2>
                    <div class="grid md:grid-cols-2 gap-8">
                        <div class="bg-gray-50 p-6 rounded-lg">
                            <h3 class="text-xl font-semibold mb-4">Tugas Pokok</h3>
                            <ul class="list-disc list-inside text-gray-600 space-y-2">
                                <li>Pemeriksaan dan pengujian kehalalan produk</li>
                                <li>Verifikasi proses produksi halal</li>
                                <li>Pengawasan berkelanjutan</li>
                            </ul>
                        </div>
                        <div class="bg-gray-50 p-6 rounded-lg">
                            <h3 class="text-xl font-semibold mb-4">Fungsi</h3>
                            <ul class="list-disc list-inside text-gray-600 space-y-2">
                                <li>Pelaksanaan pemeriksaan kehalalan produk</li>
                                <li>Pengujian kehalalan produk</li>
                                <li>Penyusunan, pengelolaan, dan evaluasi sistem jaminan halal</li>
                            </ul>
                        </div>
                    </div>
                </section>

                <!-- Tim Ahli -->
                <section>
                    <h2 class="text-2xl font-bold text-gray-900 mb-6">Tim Ahli</h2>
                    <div class="grid md:grid-cols-3 gap-6">
                        <div class="bg-white border rounded-lg p-6">
                            <h3 class="text-xl font-semibold mb-3">Auditor Halal</h3>
                            <p class="text-gray-600">Tim yang tersertifikasi untuk melakukan audit kehalalan produk</p>
                        </div>
                        <div class="bg-white border rounded-lg p-6">
                            <h3 class="text-xl font-semibold mb-3">Penyelia Halal</h3>
                            <p class="text-gray-600">Tim yang mengawasi proses produksi halal</p>
                        </div>
                        <div class="bg-white border rounded-lg p-6">
                            <h3 class="text-xl font-semibold mb-3">Tim Teknis</h3>
                            <p class="text-gray-600">Tim yang melakukan pengujian laboratorium</p>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\alamak\resources\views/pages/services/sertifikasi.blade.php ENDPATH**/ ?>