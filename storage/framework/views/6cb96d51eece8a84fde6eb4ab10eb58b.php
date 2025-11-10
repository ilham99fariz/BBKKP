

<?php $__env->startSection('title', 'Profil Singkat - BBSPJIKP'); ?>
<?php $__env->startSection('description', 'Profil dan informasi umum tentang Balai Besar Standardisasi dan Pelayanan Jasa Industri Kulit, Plastik, dan Karet'); ?>

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
                        <span class="text-gray-500">Profil Singkat</span>
                    </div>
                </li>
            </ol>
        </nav>

        <!-- Main Content -->
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <div class="p-8">
                <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Profil Singkat BBSPJIKP</h1>
                
                <div class="prose max-w-none">
                    <!-- Visi Section -->
                    <section class="mb-12">
                        <h2 class="text-2xl font-bold text-blue-600 mb-4">Visi</h2>
                        <div class="bg-blue-50 border-l-4 border-blue-500 p-4">
                            <p class="text-lg">Menjadi lembaga terkemuka dalam standardisasi dan pelayanan jasa industri kulit, plastik, dan karet yang mendukung daya saing industri nasional.</p>
                        </div>
                    </section>

                    <!-- Misi Section -->
                    <section class="mb-12">
                        <h2 class="text-2xl font-bold text-blue-600 mb-4">Misi</h2>
                        <ul class="space-y-4">
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-blue-500 mt-1 mr-3"></i>
                                <span>Mengembangkan standar dan pelayanan jasa yang berkualitas tinggi dalam industri kulit, plastik, dan karet.</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-blue-500 mt-1 mr-3"></i>
                                <span>Meningkatkan kompetensi SDM dan infrastruktur pengujian sesuai standar internasional.</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-blue-500 mt-1 mr-3"></i>
                                <span>Mendukung pengembangan industri nasional melalui riset dan inovasi teknologi.</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-blue-500 mt-1 mr-3"></i>
                                <span>Memberikan pelayanan prima kepada pelaku industri dan stakeholder.</span>
                            </li>
                        </ul>
                    </section>

                    <!-- Tugas dan Fungsi -->
                    <section class="mb-12">
                        <h2 class="text-2xl font-bold text-blue-600 mb-4">Tugas dan Fungsi</h2>
                        <div class="grid md:grid-cols-2 gap-6">
                            <div class="bg-gray-50 p-6 rounded-lg">
                                <h3 class="text-xl font-semibold mb-3">Tugas Pokok</h3>
                                <p class="text-gray-600">Melaksanakan pengembangan standardisasi, pengujian, sertifikasi, kalibrasi, dan pelayanan jasa teknis lainnya dalam industri kulit, plastik, dan karet sesuai dengan kebijakan teknis yang ditetapkan.</p>
                            </div>
                            <div class="bg-gray-50 p-6 rounded-lg">
                                <h3 class="text-xl font-semibold mb-3">Fungsi Utama</h3>
                                <ul class="space-y-2 text-gray-600">
                                    <li>• Penelitian dan pengembangan standardisasi</li>
                                    <li>• Pengujian dan sertifikasi produk</li>
                                    <li>• Kalibrasi peralatan industri</li>
                                    <li>• Konsultasi teknis dan pelatihan</li>
                                </ul>
                            </div>
                        </div>
                    </section>

                    <!-- Layanan Utama -->
                    <section>
                        <h2 class="text-2xl font-bold text-blue-600 mb-4">Layanan Utama</h2>
                        <div class="grid md:grid-cols-3 gap-6">
                            <div class="border p-4 rounded-lg">
                                <div class="text-blue-500 mb-3">
                                    <i class="fas fa-flask text-3xl"></i>
                                </div>
                                <h3 class="font-semibold mb-2">Pengujian Laboratorium</h3>
                                <p class="text-sm text-gray-600">Layanan pengujian komprehensif untuk produk kulit, plastik, dan karet.</p>
                            </div>
                            <div class="border p-4 rounded-lg">
                                <div class="text-blue-500 mb-3">
                                    <i class="fas fa-certificate text-3xl"></i>
                                </div>
                                <h3 class="font-semibold mb-2">Sertifikasi</h3>
                                <p class="text-sm text-gray-600">Sertifikasi produk dan sistem manajemen mutu industri.</p>
                            </div>
                            <div class="border p-4 rounded-lg">
                                <div class="text-blue-500 mb-3">
                                    <i class="fas fa-graduation-cap text-3xl"></i>
                                </div>
                                <h3 class="font-semibold mb-2">Pelatihan</h3>
                                <p class="text-sm text-gray-600">Program pelatihan dan pengembangan kompetensi industri.</p>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\alamak\resources\views/pages/about/profil-singkat.blade.php ENDPATH**/ ?>