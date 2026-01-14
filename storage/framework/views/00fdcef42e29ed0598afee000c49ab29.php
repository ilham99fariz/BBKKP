

<?php $__env->startSection('title', 'Layanan - BALAI BESAR STANDARDISASI DAN PELAYANAN JASA INDUSTRI KULIT, PLASTIK, DAN KARET'); ?>
<?php $__env->startSection('description', 'Daftar kategori layanan: Pengujian, Kalibrasi, Sertifikasi, Konsultansi, Inspeksi, dll.'); ?>

<?php $__env->startSection('content'); ?>
    <!-- Hero Section with Background -->
    <section class="relative bg-gray-900">
        <!-- Background Image with Overlay -->
        <div class="absolute inset-0">
            <img src="<?php echo e(asset('images/Pengujian2.png')); ?>" alt="Header Background" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-black opacity-50"></div>
        </div>

        <!-- Content -->
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24">
            <!-- Breadcrumb di pojok kiri atas -->
            <nav class="absolute top-6 left-4 sm:left-6 flex items-center mb-0" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3 text-sm sm:text-base">
                    <li class="inline-flex items-center">
                        <a href="<?php echo e(route('home')); ?>" class="text-gray-300 hover:text-white flex items-center">
                            <i class="fas fa-home mr-2"></i>
                            <?php echo e(__('common.home')); ?>

                        </a>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <i class="fas fa-chevron-right text-gray-400 mx-2"></i>
                            <span class="text-gray-300"><?php echo e(__('common.services')); ?></span>
                        </div>
                    </li>
                </ol>
            </nav>

            <!-- Header Text -->
            <div class="text-center pt-14 sm:pt-2">
                <h1 class="text-4xl md:text-5xl font-bold text-white mb-4"><?php echo e(__('common.services')); ?></h1>
                <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                    <?php echo e(__('common.services_page_subtitle')); ?>

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
                        <img src="<?php echo e(asset('images/Pengujian2.png')); ?>" alt="Pengujian"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <h2 class="text-xl font-semibold text-gray-900 mb-2 group-hover:text-blue-600">
                            <?php echo e(__('common.testing')); ?>

                        </h2>
                        <p class="text-gray-600 flex-1"><?php echo e(__('common.services_card_testing_desc')); ?></p>
                    </div>
                </div>
            </a>

            <!-- Kalibrasi -->
            <a href="<?php echo e(url('/kalibrasi')); ?>" class="group">
                <div
                    class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:translate-y-[-4px] hover:shadow-xl">
                    <div class="h-48 overflow-hidden">
                        <img src="<?php echo e(asset('images/kalibrasiB.jpg')); ?>" alt="Layanan LPH"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <h2 class="text-xl font-semibold text-gray-900 mb-2 group-hover:text-blue-600">
                            <?php echo e(__('common.calibration')); ?>

                        </h2>
                        <p class="text-gray-600 flex-1"><?php echo e(__('common.services_card_calibration_desc')); ?>

                        </p>
                    </div>
                </div>
            </a>

            <!-- Sertifikasi -->
            <a href="<?php echo e(url('/sertifikasi')); ?>" class="group h-full flex">
                <div
                    class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:translate-y-[-4px] hover:shadow-xl">
                    <div class="h-48 overflow-hidden">
                        <img src="<?php echo e(asset('images/Sertifikasi1.png')); ?>" alt="Proses Sertifikasi"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <h2 class="text-xl font-semibold text-gray-900 mb-2 group-hover:text-blue-600">
                            <?php echo e(__('common.certification')); ?>

                        </h2>
                        <p class="text-gray-600 flex-1">
                            <?php echo e(__('common.services_card_certification_desc')); ?>

                        </p>
                    </div>
                </div>
            </a>

            <!-- Bimbingan Teknis/ Konsultasi -->
            <a href="<?php echo e(url('/bimbingan-teknis-konsultasi')); ?>" class="group">
                <div
                    class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:translate-y-[-4px] hover:shadow-xl flex flex-col h-full">
                    <div class="h-48 overflow-hidden">
                        <img src="<?php echo e(asset('images/konsultasi.png')); ?>" alt="Peraturan dan Pedoman"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <h2 class="text-xl font-semibold text-gray-900 mb-2 group-hover:text-blue-600"><?php echo e(__('common.services_card_guidance_title')); ?></h2>
                        <p class="text-gray-600 flex-1"><?php echo e(__('common.services_card_guidance_desc')); ?></p>
                    </div>
                </div>
            </a>

            <!-- Inspeksi -->
            <a href="<?php echo e(url('/inspeksi')); ?>" class="group">
                <div
                    class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:translate-y-[-4px] hover:shadow-xl flex flex-col h-full">
                    <div class="h-48 overflow-hidden">
                        <img src="<?php echo e(asset('images/Pengujian1.jpg')); ?>" alt="Inspeksi"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <h2 class="text-xl font-semibold text-gray-900 mb-2 group-hover:text-blue-600"><?php echo e(__('common.services_card_inspection_title')); ?></h2>
                        <p class="text-gray-600 flex-1"><?php echo e(__('common.services_card_inspection_desc')); ?></p>
                    </div>
                </div>
            </a>

            <!-- Verifikasi dan Validasi -->
            <a href="<?php echo e(url('/verifikasi-validasi')); ?>" class="group">
                <div
                    class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:translate-y-[-4px] hover:shadow-xl flex flex-col h-full">
                    <div class="h-48 overflow-hidden">
                        <img src="<?php echo e(asset('images/valiverif.jpg')); ?>" alt="Verifikasi dan Validasi"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <h2 class="text-xl font-semibold text-gray-900 mb-2 group-hover:text-blue-600"><?php echo e(__('common.services_card_verification_title')); ?></h2>
                        <p class="text-gray-600 flex-1"><?php echo e(__('common.services_card_verification_desc')); ?></p>
                    </div>
                </div>
            </a>

            <!-- Uji Profisiemsi -->
            <a href="<?php echo e(url('/uji-profisiensi')); ?>" class="group">
                <div
                    class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:translate-y-[-4px] hover:shadow-xl flex flex-col h-full">
                    <div class="h-48 overflow-hidden">
                        <img src="<?php echo e(asset('images/Pengujian4.png')); ?>" alt="Uji Profisiensi"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <h2 class="text-xl font-semibold text-gray-900 mb-2 group-hover:text-blue-600"><?php echo e(__('common.services_card_proficiency_title')); ?></h2>
                        <p class="text-gray-600 flex-1"><?php echo e(__('common.services_card_proficiency_desc')); ?></p>
                    </div>
                </div>
            </a>

            <!-- Pelatihan Teknis -->
            <a href="<?php echo e(url('/pelatihan-teknis')); ?>" class="group">
                <div
                    class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:translate-y-[-4px] hover:shadow-xl">
                    <div class="h-48 overflow-hidden">
                        <img src="<?php echo e(asset('images/pelatihan.jpg')); ?>" alt="Pelatihan Teknis"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <h2 class="text-xl font-semibold text-gray-900 mb-2 group-hover:text-blue-600"><?php echo e(__('common.services_card_training_title')); ?>

                        </h2>
                        <p class="text-gray-600 flex-1"><?php echo e(__('common.services_card_training_desc')); ?></p>
                    </div>
                </div>
            </a>

            <!-- Produsen Bahan Acuan -->
            <a href="<?php echo e(url('/produsen-bahan-acuan')); ?>" class="group">
                <div
                    class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:translate-y-[-4px] hover:shadow-xl">
                    <div class="h-48 overflow-hidden">
                        <img src="<?php echo e(asset('images/produsen.jpg')); ?>" alt="Produsen Bahan Acuan"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <h2 class="text-xl font-semibold text-gray-900 mb-2 group-hover:text-blue-600"><?php echo e(__('common.services_card_reference_title')); ?>

                        </h2>
                        <p class="text-gray-600 flex-1"><?php echo e(__('common.services_card_reference_desc')); ?></p>
                    </div>
                </div>
            </a>

            <!-- Edukasi -->
            <a href="<?php echo e(url('/edukasi')); ?>" class="group">
                <div
                    class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:translate-y-[-4px] hover:shadow-xl">
                    <div class="h-48 overflow-hidden">
                        <img src="<?php echo e(asset('images/edukasi.jpg')); ?>" alt="Edukasi"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <h2 class="text-xl font-semibold text-gray-900 mb-2 group-hover:text-blue-600"><?php echo e(__('common.services_card_education_title')); ?></h2>
                        <p class="text-gray-600 flex-1"><?php echo e(__('common.services_card_education_desc')); ?></p>
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
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\alamak\resources\views/pages/services/Layanan.blade.php ENDPATH**/ ?>