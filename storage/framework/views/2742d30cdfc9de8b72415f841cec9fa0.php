

<?php $__env->startSection('title', 'Layanan - BALAI BESAR STANDARDISASI DAN PELAYANAN JASA INDUSTRI KULIT, PLASTIK, DAN KARET'); ?>
<?php $__env->startSection('description', 'Daftar kategori layanan: Pengujian, Kalibrasi, Sertifikasi, Konsultansi, Inspeksi, dll.'); ?>

<?php $__env->startSection('content'); ?>
    <!-- Hero Section with Background -->
    <section class="relative bg-gray-900">
        <!-- Background Image with Overlay -->
        <div class="absolute inset-0">
            <img src="<?php echo e(asset('images/bg-random.webp')); ?>" alt="Header Background" class="w-full h-full object-cover">
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
                            Home
                        </a>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <i class="fas fa-chevron-right text-gray-400 mx-2"></i>
                            <span class="text-gray-300">Layanan</span>
                        </div>
                    </li>
                </ol>
            </nav>

            <!-- Header Text -->
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold text-white mb-4"><?php echo e(__('common.services')); ?></h1>
                <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                    <?php echo e(__('List of service categories: Testing, Calibration, Certification, Consultation, Inspection, etc.')); ?>

                </p>
            </div>
        </div>
    </section>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">

        <!-- Kategori Layanan -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Pengujian -->
            <a href="<?php echo e(route('pengujian.index')); ?>" class="group">
                <div
                    class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:translate-y-[-4px] hover:shadow-xl flex flex-col h-full">
                    <div class="h-48 overflow-hidden">
                        <img src="<?php echo e(asset('images/bg-random.webp')); ?>" alt="Tentang LPH"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <h2 class="text-xl font-semibold text-gray-900 mb-2 group-hover:text-blue-600">
                            <?php echo e(__('common.testing')); ?></h2>
                        <p class="text-gray-600 flex-1"><?php echo e(__('Product quality testing.')); ?></p>
                    </div>
                </div>
            </a>

            <!-- Kalibrasi -->
            <a href="<?php echo e(route('kalibrasi.index')); ?>" class="group">
                <div
                    class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:translate-y-[-4px] hover:shadow-xl">
                    <div class="h-48 overflow-hidden">
                        <img src="<?php echo e(asset('images/bg-random.webp')); ?>" alt="Layanan LPH"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <h2 class="text-xl font-semibold text-gray-900 mb-2 group-hover:text-blue-600">
                            <?php echo e(__('common.calibration')); ?></h2>
                        <p class="text-gray-600 flex-1"><?php echo e(__('Document review, field audit, and laboratory testing.')); ?>

                        </p>
                    </div>
                </div>
            </a>

            <!-- Sertifikasi -->
            <a href="<?php echo e(route('services.sertifikasi')); ?>" class="group h-full flex">
                <div
                    class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:translate-y-[-4px] hover:shadow-xl">
                    <div class="h-48 overflow-hidden">
                        <img src="<?php echo e(asset('images/bg-random.webp')); ?>" alt="Proses Sertifikasi"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <h2 class="text-xl font-semibold text-gray-900 mb-2 group-hover:text-blue-600">
                            <?php echo e(__('common.certification')); ?></h2>
                        <p class="text-gray-600 flex-1">
                            <?php echo e(__('Registration stages, audit, fatwa meeting, and certificate issuance.')); ?>

                        </p>
                    </div>
                </div>
            </a>

            <!-- Bimbingan Teknis/ Konsultasi -->
            <a href="<?php echo e(route('halal.regulations')); ?>" class="group">
                <div
                    class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:translate-y-[-4px] hover:shadow-xl flex flex-col h-full">
                    <div class="h-48 overflow-hidden">
                        <img src="<?php echo e(asset('images/bg-random.webp')); ?>" alt="Peraturan dan Pedoman"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <h2 class="text-xl font-semibold text-gray-900 mb-2 group-hover:text-blue-600">Bimbingan Teknis &
                            Konsultasi</h2>
                        <p class="text-gray-600 flex-1">Undang-undang, peraturan, dan pedoman teknis terkait JPH.</p>
                    </div>
                </div>
            </a>

            <!-- Inspeksi -->
            <a href="<?php echo e(route('halal.faq')); ?>" class="group">
                <div
                    class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:translate-y-[-4px] hover:shadow-xl flex flex-col h-full">
                    <div class="h-48 overflow-hidden">
                        <img src="<?php echo e(asset('images/bg-random.webp')); ?>" alt="FAQ"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <h2 class="text-xl font-semibold text-gray-900 mb-2 group-hover:text-blue-600">Inspeksi</h2>
                        <p class="text-gray-600 flex-1">Pemeriksaan kualitas produk.</p>
                    </div>
                </div>
            </a>

            <!-- Verifikasi dan Validasi -->
            <a href="<?php echo e(route('halal.faq')); ?>" class="group">
                <div
                    class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:translate-y-[-4px] hover:shadow-xl flex flex-col h-full">
                    <div class="h-48 overflow-hidden">
                        <img src="<?php echo e(asset('images/bg-random.webp')); ?>" alt="FAQ"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <h2 class="text-xl font-semibold text-gray-900 mb-2 group-hover:text-blue-600">Verifikasi dan
                            Validasi</h2>
                        <p class="text-gray-600 flex-1">Pemeriksaan kualitas produk.</p>
                    </div>
                </div>
            </a>

            <!-- Uji Profisiemsi -->
            <a href="<?php echo e(route('halal.faq')); ?>" class="group">
                <div
                    class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:translate-y-[-4px] hover:shadow-xl flex flex-col h-full">
                    <div class="h-48 overflow-hidden">
                        <img src="<?php echo e(asset('images/bg-random.webp')); ?>" alt="FAQ"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <h2 class="text-xl font-semibold text-gray-900 mb-2 group-hover:text-blue-600">Uji Profisiemsi</h2>
                        <p class="text-gray-600 flex-1">Pemeriksaan kualitas produk.</p>
                    </div>
                </div>
            </a>

            <!-- Pelatihan Teknis -->
            <a href="<?php echo e(route('halal.faq')); ?>" class="group">
                <div
                    class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:translate-y-[-4px] hover:shadow-xl">
                    <div class="h-48 overflow-hidden">
                        <img src="<?php echo e(asset('images/bg-random.webp')); ?>" alt="FAQ"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <h2 class="text-xl font-semibold text-gray-900 mb-2 group-hover:text-blue-600">Pelatihan Teknis
                        </h2>
                        <p class="text-gray-600 flex-1">Pemeriksaan kualitas produk.</p>
                    </div>
                </div>
            </a>

            <!-- Produsen Bahan Acuan -->
            <a href="<?php echo e(route('halal.faq')); ?>" class="group">
                <div
                    class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:translate-y-[-4px] hover:shadow-xl">
                    <div class="h-48 overflow-hidden">
                        <img src="<?php echo e(asset('images/bg-random.webp')); ?>" alt="FAQ"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <h2 class="text-xl font-semibold text-gray-900 mb-2 group-hover:text-blue-600">Produsen Bahan Acuan
                        </h2>
                        <p class="text-gray-600 flex-1">Pemeriksaan kualitas produk.</p>
                    </div>
                </div>
            </a>

            <!-- Edukasi -->
            <a href="<?php echo e(route('halal.faq')); ?>" class="group">
                <div
                    class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:translate-y-[-4px] hover:shadow-xl">
                    <div class="h-48 overflow-hidden">
                        <img src="<?php echo e(asset('images/bg-random.webp')); ?>" alt="FAQ"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <h2 class="text-xl font-semibold text-gray-900 mb-2 group-hover:text-blue-600">Edukasi</h2>
                        <p class="text-gray-600 flex-1">Pemeriksaan kualitas produk.</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <!-- Atau Bisa Seperti Di Bawah Ini -->
    <script type="text/javascript" src="https://web.animemusic.us/widget_disabilitas.js" api-key-resvoice="bzbTAKXD">
    </script>
    <!-- ganti key api-key-resvoice dengan key yang ada di responsive voice-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\BBKKP\resources\views/pages/services/index.blade.php ENDPATH**/ ?>