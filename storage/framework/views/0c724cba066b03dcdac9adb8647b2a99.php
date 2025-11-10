

<?php $__env->startSection('title', 'Peraturan dan Pedoman Halal - BBSPJIKP'); ?>
<?php $__env->startSection('description', 'Regulasi dan panduan terkait sertifikasi halal di LPH BBSPJIKP'); ?>

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
                            <span class="text-gray-300">Peraturan dan Pedoman</span>
                        </div>
                    </li>
                </ol>
            </nav>

            <!-- Header Text -->
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Peraturan dan Pedoman</h1>
                <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                    Regulasi dan Panduan Terkait Sertifikasi Halal
                </p>
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <div class="p-8">
                <!-- Peraturan Perundang-undangan -->
                <section class="mb-12">
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">Peraturan Perundang-undangan</h2>
                    <div class="space-y-6">
                        <!-- UU -->
                        <div class="bg-gray-50 p-6 rounded-lg">
                            <h3 class="text-xl font-semibold mb-4">Undang-Undang</h3>
                            <ul class="space-y-4">
                                <li class="flex items-start">
                                    <i class="fas fa-file-pdf text-red-500 mt-1 mr-3"></i>
                                    <div>
                                        <a href="#" class="text-blue-600 hover:underline">UU No. 33 Tahun 2014</a>
                                        <p class="text-gray-600 mt-1">Tentang Jaminan Produk Halal</p>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <!-- PP -->
                        <div class="bg-gray-50 p-6 rounded-lg">
                            <h3 class="text-xl font-semibold mb-4">Peraturan Pemerintah</h3>
                            <ul class="space-y-4">
                                <li class="flex items-start">
                                    <i class="fas fa-file-pdf text-red-500 mt-1 mr-3"></i>
                                    <div>
                                        <a href="#" class="text-blue-600 hover:underline">PP No. 39 Tahun 2021</a>
                                        <p class="text-gray-600 mt-1">Tentang Penyelenggaraan Jaminan Produk Halal</p>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <!-- Permen -->
                        <div class="bg-gray-50 p-6 rounded-lg">
                            <h3 class="text-xl font-semibold mb-4">Peraturan Menteri</h3>
                            <ul class="space-y-4">
                                <li class="flex items-start">
                                    <i class="fas fa-file-pdf text-red-500 mt-1 mr-3"></i>
                                    <div>
                                        <a href="#" class="text-blue-600 hover:underline">Permenag No. 26 Tahun 2019</a>
                                        <p class="text-gray-600 mt-1">Tentang Penyelenggaraan Jaminan Produk Halal</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </section>

                <!-- Pedoman Teknis -->
                <section class="mb-12">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6">Pedoman Teknis</h2>
                    <div class="grid md:grid-cols-2 gap-6">
                        <!-- Pedoman SJH -->
                        <div class="bg-white border rounded-lg p-6">
                            <div class="flex items-start">
                                <div class="flex-shrink-0">
                                    <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                                        <i class="fas fa-book text-blue-600 text-xl"></i>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-lg font-semibold">Pedoman Sistem Jaminan Halal</h3>
                                    <p class="text-gray-600 mt-2">Panduan penerapan sistem jaminan halal di perusahaan</p>
                                    <a href="#" class="text-blue-600 hover:underline mt-2 inline-block">Download PDF</a>
                                </div>
                            </div>
                        </div>

                        <!-- Manual Audit -->
                        <div class="bg-white border rounded-lg p-6">
                            <div class="flex items-start">
                                <div class="flex-shrink-0">
                                    <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center">
                                        <i class="fas fa-clipboard-check text-green-600 text-xl"></i>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-lg font-semibold">Manual Audit</h3>
                                    <p class="text-gray-600 mt-2">Panduan pelaksanaan audit halal</p>
                                    <a href="#" class="text-blue-600 hover:underline mt-2 inline-block">Download PDF</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Standar & Kriteria -->
                <section>
                    <h2 class="text-2xl font-bold text-gray-900 mb-6">Standar dan Kriteria</h2>
                    <div class="bg-gray-50 p-6 rounded-lg">
                        <div class="space-y-6">
                            <div>
                                <h3 class="text-xl font-semibold mb-3">Kriteria Sistem Jaminan Halal</h3>
                                <ul class="list-disc list-inside text-gray-600 space-y-2">
                                    <li>Kebijakan halal</li>
                                    <li>Tim manajemen halal</li>
                                    <li>Pelatihan dan edukasi</li>
                                    <li>Bahan</li>
                                    <li>Produk</li>
                                    <li>Fasilitas produksi</li>
                                    <li>Prosedur tertulis aktivitas kritis</li>
                                    <li>Kemampuan telusur</li>
                                    <li>Penanganan produk yang tidak memenuhi kriteria</li>
                                    <li>Audit internal</li>
                                    <li>Kaji ulang manajemen</li>
                                </ul>
                            </div>

                            <div>
                                <h3 class="text-xl font-semibold mb-3">Standar Fasilitas Produksi</h3>
                                <ul class="list-disc list-inside text-gray-600 space-y-2">
                                    <li>Lokasi</li>
                                    <li>Bangunan</li>
                                    <li>Peralatan</li>
                                    <li>Sanitasi</li>
                                    <li>Karyawan</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\alamak\resources\views/pages/halal-center/regulations.blade.php ENDPATH**/ ?>