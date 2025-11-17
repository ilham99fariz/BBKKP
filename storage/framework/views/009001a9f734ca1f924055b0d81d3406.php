

<?php $__env->startSection('title', 'Struktur Organisasi - BBSPJIKP'); ?>
<?php $__env->startSection('description', 'Struktur organisasi dan tata kerja Balai Besar Standardisasi dan Pelayanan Jasa Industri Kulit, Plastik, dan Karet'); ?>

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
                        <span class="text-gray-500">Struktur Organisasi</span>
                    </div>
                </li>
            </ol>
        </nav>

        <!-- Main Content -->
<div class="bg-white shadow-lg rounded-lg overflow-hidden">
    <div class="p-8">
        <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">
            Struktur Organisasi BBSPJIKP
        </h1>

        <div class="prose max-w-none">
            
            <!-- Penjelasan Struktur (DIPINDAH KE ATAS) -->
            <div class="space-y-8 mb-12">
                <!-- Kepala Balai -->
                <section> 
                    <p class="text-gray-600 mb-4">
                        Berdasarkan Peraturan Menteri Perindustrian Nomor 1 Tahun 2022 tentang "Organisasi dan Tata Kerja Unit Pelaksana Teknis di Lingkungan Badan Standardisasi dan Kebijakan Jasa Industri", Struktur Organisasi Balai Besar Standardisasi dan Pelayanan Jasa Industri Kulit, Karet, dan Plastik:
                    </p>
                </section>

                <!-- Tambahkan section lain jika ada -->
            </div>

            <!-- Diagram Struktur Organisasi (DIPINDAH KE BAWAH) -->
            <div class="mb-12 overflow-x-auto">
                <div class="min-w-[800px]">
                    <img 
                        src="<?php echo e(asset('images/struktur.png')); ?>" 
                        alt="Struktur Organisasi BBSPJIKP"
                        class="w-full"
                    >
                </div>
            </div>

        </div>
    </div>
</div>


                        
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sienna-accessibility@latest/dist/sienna-accessibility.umd.js" defer></script> 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\alamak\resources\views/pages/about/struktur-organisasi.blade.php ENDPATH**/ ?>