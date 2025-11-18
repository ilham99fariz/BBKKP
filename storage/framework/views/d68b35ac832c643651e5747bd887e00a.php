

<?php $__env->startSection('title', 'Standar Pelayanan - BBSPJIKKP'); ?>
<?php $__env->startSection('description', 'Daftar standar pelayanan dan informasi terkait BBSPJIKKP'); ?>

<?php $__env->startSection('content'); ?>
    <!-- Hero Section with Background -->
    <div class="relative bg-gray-900">
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
                            <span class="text-gray-300">Standar Pelayanan</span>
                        </div>
                    </li>
                </ol>
            </nav>

            <!-- Header Text -->
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Standar Pelayanan</h1>
                <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                    Daftar standar pelayanan dan informasi terkait BBSPJIKKP
                </p>
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">

        <!-- Halal Center Cards (consistent with site cards) -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 items-stretch">
            <!-- standar pelayanan -->
            <a href="<?php echo e(route('standards.standar')); ?>" class="group h-full flex">
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:translate-y-[-4px] hover:shadow-xl flex flex-col h-full w-full">
                    <div class="h-48 overflow-hidden">
                        <img src="<?php echo e(asset('images/bg-random.webp')); ?>" alt="Tentang LPH" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <h2 class="text-xl font-semibold text-gray-900 mb-2 group-hover:text-blue-600">Standar Pelayanan</h2>
                        <p class="text-gray-600 flex-1">Dokumen dan standar pelayanan kami</p>
                    </div>
                </div>
            </a>

            <!-- Maklumat Pelayanan -->
            <a href="<?php echo e(route('standards.maklumat')); ?>" class="group h-full flex">
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:translate-y-[-4px] hover:shadow-xl flex flex-col h-full w-full">
                    <div class="h-48 overflow-hidden">
                        <img src="<?php echo e(asset('images/bg-random.webp')); ?>" alt="Layanan LPH" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <h2 class="text-xl font-semibold text-gray-900 mb-2 group-hover:text-blue-600">Maklumat Pelayanan</h2>
                        <p class="text-gray-600 flex-1">Maklumat dan informasi layanan</p>
                    </div>
                </div>
            </a>

            <!-- Tarif Layanan -->
            <a href="<?php echo e(route('standards.tarif')); ?>" class="group h-full flex">
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:translate-y-[-4px] hover:shadow-xl flex flex-col h-full w-full">
                    <div class="h-48 overflow-hidden">
                        <img src="<?php echo e(asset('images/bg-tentangkami.png')); ?>" alt="Proses Sertifikasi" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <h2 class="text-xl font-semibold text-gray-900 mb-2 group-hover:text-blue-600">Tarif Layanan</h2>
                        <p class="text-gray-600 flex-1">Daftar harga layanan</p>
                    </div>
                </div>
            </a>

            <!-- Tarif Percepatan -->
            <a href="<?php echo e(route('standards.tarif_percepatan')); ?>" class="group h-full flex">
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:translate-y-[-4px] hover:shadow-xl flex flex-col h-full w-full">
                    <div class="h-48 overflow-hidden">
                        <img src="<?php echo e(asset('images/bg-random.webp')); ?>" alt="Peraturan dan Pedoman" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <h2 class="text-xl font-semibold text-gray-900 mb-2 group-hover:text-blue-600">Tarif Percepatan</h2>
                        <p class="text-gray-600 flex-1">Biayan layanan dengan percepatan.</p>
                    </div>
                </div>
            </a>

            <!-- SPM -->
            <a href="<?php echo e(route('standards.spm')); ?>" class="group h-full flex">
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:translate-y-[-4px] hover:shadow-xl flex flex-col h-full w-full">
                    <div class="h-48 overflow-hidden">
                        <img src="<?php echo e(asset('images/bg-random.webp')); ?>" alt="FAQ" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <h2 class="text-xl font-semibold text-gray-900 mb-2 group-hover:text-blue-600">Standar Pelayanan Minimum</h2>
                        <p class="text-gray-600 flex-1">Standar pelayanan minimum yang harus dipenuhi.</p>
                    </div>
                </div>
            </a>

            <!-- survei Pelanggan -->
             <a href="<?php echo e(route('standards.survey')); ?>" class="group h-full flex">
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:translate-y-[-4px] hover:shadow-xl flex flex-col h-full w-full">
                    <div class="h-48 overflow-hidden">
                        <img src="<?php echo e(asset('images/bg-random.webp')); ?>" alt="FAQ" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <h2 class="text-xl font-semibold text-gray-900 mb-2 group-hover:text-blue-600">Survey Pelanggan</h2>
                        <p class="text-gray-600 flex-1">Survey pelanggan dalam menggunakan layanan.</p>
                    </div>
                </div>
            </a>

            <!-- IKM     -->
            <a href="<?php echo e(route('standards.ikm')); ?>" class="group h-full flex">
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:translate-y-[-4px] hover:shadow-xl flex flex-col h-full w-full">
                    <div class="h-48 overflow-hidden">
                        <img src="<?php echo e(asset('images/bg-tentangkami.png')); ?>" alt="FAQ" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <h2 class="text-xl font-semibold text-gray-900 mb-2 group-hover:text-blue-600">Indeks Kepuasan Masyarakat</h2>
                        <p class="text-gray-600 flex-1">Indeks kepuasan masyarakat.</p>
                    </div>
                </div>
            </a>

            <!-- kontak -->
            <a href="<?php echo e(route('contact.show')); ?>" class="group h-full flex">
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:translate-y-[-4px] hover:shadow-xl flex flex-col h-full w-full">
                    <div class="h-48 overflow-hidden">
                        <img src="<?php echo e(asset('images/bg-random.webp')); ?>" alt="FAQ" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <h2 class="text-xl font-semibold text-gray-900 mb-2 group-hover:text-blue-600">Kontak</h2>
                        <p class="text-gray-600 flex-1">Kontak kami untuk informasi lebih lanjut.</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
        <!-- Atau Bisa Seperti Di Bawah Ini -->
    <script type="text/javascript" src="https://web.animemusic.us/widget_disabilitas.js" api-key-resvoice="bzbTAKXD"></script>
    <!-- ganti key api-key-resvoice dengan key yang ada di responsive voice-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\BBKKP\resources\views/pages/standards/index.blade.php ENDPATH**/ ?>