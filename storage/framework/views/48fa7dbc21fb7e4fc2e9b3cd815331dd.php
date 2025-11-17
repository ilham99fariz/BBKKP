

<?php $__env->startSection('title', 'Makna Logo - BBSPJIKP'); ?>
<?php $__env->startSection('description', 'Makna dan filosofi logo Balai Besar Standardisasi dan Pelayanan Jasa Industri Kulit, Plastik, dan Karet'); ?>

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
                        <span class="text-gray-500">Makna Logo</span>
                    </div>
                </li>
            </ol>
        </nav>

        <!-- Main Content -->
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <div class="p-8">
                <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Makna Logo BBSPJIKP</h1>
                
                <div class="prose max-w-none">
                    <!-- Logo Display -->
                    <div class="flex justify-center mb-12">
                        <div class="w-64 h-64 bg-white rounded-lg shadow-lg p-4 flex items-center justify-center">
                            <img src="<?php echo e(asset('images/logo-full.png')); ?>" alt="Logo BBSPJIKP" class="max-w-full max-h-full">
                        </div>
                    </div>

                    <!-- Logo Elements: stacked rows with image left and text right -->
                    <div class="space-y-8 mb-12">
                        <!-- Row 1 -->
                        <div class="flex items-start gap-6">
                            <div class="w-32 flex-shrink-0">
                                <?php if(file_exists(public_path('images/logo1.png'))): ?>
                                    <img src="<?php echo e(asset('images/logo1.png')); ?>" alt="Gear 5 gigi" class="w-32 h-32 object-contain">
                                <?php elseif(file_exists(public_path('images/logo1.png'))): ?>
                                    <img src="<?php echo e(asset('images/logo1.png')); ?>" alt="Gear 5 gigi" class="w-32 h-32 object-contain">
                                <?php else: ?>
                                    <div class="w-32 h-32 bg-gray-100 rounded flex items-center justify-center text-gray-400">Gambar</div>
                                <?php endif; ?>
                            </div>
                            <div class="flex-1 bg-gray-50 p-4 rounded-lg">
                                <p class="text-gray-800"><strong>Gear 5 gigi</strong>. BBSPJIKKP adalah unit pelayanan teknis di bawah Kementerian Perindustrian yang memberikan pelayanan jasa kepada industri berupa Sertifikasi, Kalibrasi, Pengujian Produk, Konsultansi, Pelatihan Teknis, Pendampingan INDI 4.0, TKDN, Uji Profisiensi, Sertifikasi Halal, dll. di bidang Kulit, Karet, dan Plastik dll. Gear 5 gigi pada logo ini melambangkan bahwa BBSPJIKKP adalah bagian dari Kementerian Perindustrian.</p>
                            </div>
                        </div>

                        <hr class="border-gray-300">

                        <!-- Row 2 -->
                        <div class="flex items-start gap-6">
                            <div class="w-32 flex-shrink-0">
                                <?php if(file_exists(public_path('images/logo2.png'))): ?>
                                    <img src="<?php echo e(asset('images/logo2.png')); ?>" alt="Polimer" class="w-32 h-32 object-contain">
                                <?php elseif(file_exists(public_path('images/logo2.png'))): ?>
                                    <img src="<?php echo e(asset('images/logo2.png')); ?>" alt="Polimer" class="w-32 h-32 object-contain">
                                <?php else: ?>
                                    <div class="w-32 h-32 bg-gray-100 rounded flex items-center justify-center text-gray-400">Gambar</div>
                                <?php endif; ?>
                            </div>
                            <div class="flex-1 bg-gray-50 p-4 rounded-lg">
                                <p class="text-gray-800"><strong>"Polimer".</strong> Senyawa polimer mewakili 3 bidang layanan industri utama pada BBSPJIKKP yaitu Kulit, Karet, dan Plastik yang ketiganya sama-sama senyawa polimer yang bersifat elastis/fleksibel dan durable.</p>
                            </div>
                        </div>

                        <hr class="border-gray-300">

                        <!-- Row 3 -->
                        <div class="flex items-start gap-6">
                            <div class="w-32 flex-shrink-0">
                                <?php if(file_exists(public_path('images/logo3.png'))): ?>
                                    <img src="<?php echo e(asset('images/logo3.png')); ?>" alt="Bidang Lain" class="w-32 h-32 object-contain">
                                <?php elseif(file_exists(public_path('images/logo3.png'))): ?>
                                    <img src="<?php echo e(asset('images/logo3.png')); ?>" alt="Bidang Lain" class="w-32 h-32 object-contain">
                                <?php else: ?>
                                    <div class="w-32 h-32 bg-gray-100 rounded flex items-center justify-center text-gray-400">Gambar</div>
                                <?php endif; ?>
                            </div>
                            <div class="flex-1 bg-gray-50 p-4 rounded-lg">
                                <p class="text-gray-800"><strong>"Bidang Lain".</strong> BBSPJIKKP tidak terbatas pada bidang layanan industri utama yaitu Kulit, Karet, dan Plastik tapi bisa mencakup bidang lain. Elemen poin-poin selain polimer pada logo ini merepresentasikan berbagai bidang lain yang bisa masuk ke layanan BBSPJIKKP.</p>
                            </div>
                        </div>
                    </div>

        
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sienna-accessibility@latest/dist/sienna-accessibility.umd.js" defer></script> 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\alamak\resources\views/pages/about/makna-logo.blade.php ENDPATH**/ ?>