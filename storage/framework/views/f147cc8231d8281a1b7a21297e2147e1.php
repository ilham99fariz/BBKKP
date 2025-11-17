

<?php $__env->startSection('title', 'Media dan Informasi - BBSPJIKKP'); ?>
<?php $__env->startSection('description', 'Kumpulan media dan informasi BBSPJIKKP: berita, publikasi, pengumuman, dan lain-lain'); ?>

<?php $__env->startSection('content'); ?>
    <!-- Hero Section with Background -->
    <div class="relative bg-gray-900">
        <!-- Background Image with Overlay -->
        <div class="absolute inset-0">
            <img src="<?php echo e(asset('images/bg-tentangkami.png')); ?>" alt="Header Background" class="w-full h-full object-cover">
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
                            <span class="text-gray-300">Media dan Informasi</span>
                        </div>
                    </li>
                </ol>
            </nav>

            <!-- Header Text -->
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Media dan Informasi</h1>
                <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                    Kumpulan berita, publikasi, pengumuman, serta informasi resmi dari BBSPJIKKP
                </p>
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">

        <!-- Keterbukaan Informasi Publik -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- informasi Publik -->
            <a href="<?php echo e(route('media.keterbukaan-informasi-publik')); ?>" class="group h-full flex">
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:translate-y-[-4px] hover:shadow-xl">
                    <div class="h-48 overflow-hidden">
                        <img src="<?php echo e(asset('images/joker.jpg')); ?>" alt="Keterbukaan Informasi Publik" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <h2 class="text-xl font-semibold text-gray-900 mb-2 group-hover:text-blue-600">keterbukaan Informasi Publik</h2>
                        <p class="text-gray-600 flex-1">Dokumen dan informasi publik yang wajib tersedia bagi masyarakat.</p>
                    </div>
                </div>
            </a>

            <!-- News -->
            <a href="<?php echo e(route('news.index')); ?>" class="group h-full flex">
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:translate-y-[-4px] hover:shadow-xl">
                    <div class="h-48 overflow-hidden">
                        <img src="<?php echo e(asset('images/bg-random.webp')); ?>" alt="Layanan LPH" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <h2 class="text-xl font-semibold text-gray-900 mb-2 group-hover:text-blue-600">BBSPJIKKP News</h2>
                        <p class="text-gray-600 flex-1">berita-berita, artikel dan update kegiatan BBSPJIKKP.</p>
                    </div>
                </div>
            </a>

            <!-- Publikasi -->
            <a href="<?php echo e(route('media.publication')); ?>" class="group h-full flex">
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:translate-y-[-4px] hover:shadow-xl">
                    <div class="h-48 overflow-hidden">
                        <img src="<?php echo e(asset('images/joker.jpg')); ?>" alt="Publikasi" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <h2 class="text-xl font-semibold text-gray-900 mb-2 group-hover:text-blue-600">Publikasi</h2>
                        <p class="text-gray-600 flex-1">Laporan, pedoman, dan materi komunikasi yang dapat diunduh.</p>
                    </div>
                </div>
            </a>

            <!-- Pengumuman -->
            <a href="<?php echo e(route('media.announcement')); ?>" class="group h-full flex">
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:translate-y-[-4px] hover:shadow-xl">
                    <div class="h-48 overflow-hidden">
                        <img src="<?php echo e(asset('images/bg-random.webp')); ?>" alt="Peraturan dan Pedoman" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <h2 class="text-xl font-semibold text-gray-900 mb-2 group-hover:text-blue-600">Pengumuman</h2>
                        <p class="text-gray-600 flex-1">Pemberitahuan resmi dan informasi penting untuk publik.</p>
                    </div>
                </div>
            </a>
            <!-- <a href="<?php echo e(route('media.index')); ?>" class="bg-white border rounded-xl p-5 hover:shadow-md transition-shadow opacity-0 pointer-events-none">
                <-- spacer to keep grid even on some breakpoints -->
            <!-- </a> --> 

        </div>
    </div>
    <!-- Atau Bisa Seperti Di Bawah Ini -->
    <script type="text/javascript" src="https://web.animemusic.us/widget_disabilitas.js" api-key-resvoice="bzbTAKXD"></script>
    <!-- ganti key api-key-resvoice dengan key yang ada di responsive voice-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\alamak\resources\views/pages/media/index.blade.php ENDPATH**/ ?>