

<?php $__env->startSection('title', 'Tonggak Sejarah - BBSPJIKP'); ?>
<?php $__env->startSection('description', 'Sejarah perjalanan dan perkembangan Balai Besar Standardisasi dan Pelayanan Jasa Industri Kulit, Plastik, dan Karet'); ?>

<?php $__env->startSection('content'); ?>
     <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <!-- Breadcrumb -->
        <nav class="flex mb-8" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                <li class="inline-flex items-center">
                    <a href="<?php echo e(route('home')); ?>" class="text-gray-700 hover:text-blue-600">
                        <i class="fas fa-home mr-2"></i>
                        Beranda
                    </a>
                </li>
                <li>
                    <div class="flex items-center">
                        <i class="fas fa-chevron-right text-gray-400 mx-2"></i>
                        <a href="<?php echo e(route('about.index')); ?>" class="text-gray-700 hover:text-blue-600">Tentang Kami</a>
                    </div>
                </li>
                <li aria-current="page">
                    <div class="flex items-center">
                        <i class="fas fa-chevron-right text-gray-400 mx-2"></i>
                        <span class="text-gray-500">Tonggak Sejarah</span>
                    </div>
                </li>
            </ol>
        </nav>

        <!-- Main Content -->
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <div class="p-8">
                <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Tonggak Sejarah BBSPJIKP</h1>
                
                <div class="prose max-w-none">
                    <div class="space-y-8">
                        <!-- Timeline items -->
                        <div class="flex gap-4">
                            <div class="flex-none">
                                <div class="w-20 h-20 bg-blue-100 rounded-full flex items-center justify-center">
                                    <span class="text-blue-600 font-bold">1953</span>
                                </div>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold mb-2">Pendirian Awal</h3>
                                <p class="text-gray-600">Didirikan sebagai Balai Penyelidikan Kulit di Yogyakarta, dengan fokus pada penelitian dan pengembangan industri kulit.</p>
                            </div>
                        </div>

                        <div class="flex gap-4">
                            <div class="flex-none">
                                <div class="w-20 h-20 bg-blue-100 rounded-full flex items-center justify-center">
                                    <span class="text-blue-600 font-bold">1975</span>
                                </div>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold mb-2">Pengembangan Kapasitas</h3>
                                <p class="text-gray-600">Perluasan cakupan menjadi Balai Penelitian Kulit, dengan penambahan fasilitas laboratorium dan peralatan modern.</p>
                            </div>
                        </div>

                        <div class="flex gap-4">
                            <div class="flex-none">
                                <div class="w-20 h-20 bg-blue-100 rounded-full flex items-center justify-center">
                                    <span class="text-blue-600 font-bold">1990</span>
                                </div>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold mb-2">Integrasi Plastik dan Karet</h3>
                                <p class="text-gray-600">Penambahan bidang plastik dan karet dalam lingkup kerja, menjadi Balai Besar Penelitian dan Pengembangan Industri Barang Kulit, Karet, dan Plastik.</p>
                            </div>
                        </div>

                        <div class="flex gap-4">
                            <div class="flex-none">
                                <div class="w-20 h-20 bg-blue-100 rounded-full flex items-center justify-center">
                                    <span class="text-blue-600 font-bold">2002</span>
                                </div>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold mb-2">Modernisasi dan Standardisasi</h3>
                                <p class="text-gray-600">Transformasi menjadi Balai Besar Standardisasi dan Pelayanan Jasa Industri Kulit, Plastik, dan Karet (BBSPJIKP) dengan fokus pada standardisasi dan pelayanan industri.</p>
                            </div>
                        </div>

                        <div class="flex gap-4">
                            <div class="flex-none">
                                <div class="w-20 h-20 bg-blue-100 rounded-full flex items-center justify-center">
                                    <span class="text-blue-600 font-bold">2020</span>
                                </div>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold mb-2">Era Digital</h3>
                                <p class="text-gray-600">Implementasi sistem pelayanan digital dan pengembangan laboratorium terakreditasi internasional untuk mendukung industri 4.0.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\alamak\resources\views/pages/about/tonggak-sejarah.blade.php ENDPATH**/ ?>