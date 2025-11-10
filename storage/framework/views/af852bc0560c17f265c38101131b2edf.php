

<?php $__env->startSection('title', 'Profil Pejabat - BBSPJIKP'); ?>
<?php $__env->startSection('description', 'Profil pejabat dan struktur kepemimpinan Balai Besar Standardisasi dan Pelayanan Jasa Industri Kulit, Plastik, dan Karet'); ?>

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
                        <span class="text-gray-500">Profil Pejabat</span>
                    </div>
                </li>
            </ol>
        </nav>

        <!-- Main Content -->
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <div class="p-8">
                <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Profil Pejabat BBSPJIKP</h1>
                
                <div class="space-y-12">
                    <!-- Kepala Balai -->
                    <section>
                        <h2 class="text-2xl font-bold text-blue-600 mb-6">Kepala Balai</h2>
                        <div class="flex flex-col md:flex-row gap-8">
                            <div class="md:w-1/3">
                                <div class="aspect-w-4 aspect-h-5 rounded-lg overflow-hidden bg-gray-100">
                                    <img src="<?php echo e(asset('images/pejabat/kepala-balai.jpg')); ?>" alt="Kepala Balai" class="w-full h-full object-cover">
                                </div>
                            </div>
                            <div class="md:w-2/3">
                                <h3 class="text-xl font-semibold mb-2">Nama Kepala Balai</h3>
                                <p class="text-gray-600 mb-4">NIP. XXXXXXXXXXXXX</p>
                                <div class="prose max-w-none">
                                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <h4 class="font-semibold mb-2">Pendidikan</h4>
                                    <ul class="list-disc pl-5 mb-4">
                                        <li>S3 Teknik Kimia - Universitas XXX (20XX)</li>
                                        <li>S2 Teknik Industri - Universitas XXX (20XX)</li>
                                        <li>S1 Teknik Kimia - Universitas XXX (19XX)</li>
                                    </ul>
                                    <h4 class="font-semibold mb-2">Karir & Pencapaian</h4>
                                    <ul class="list-disc pl-5">
                                        <li>Kepala Balai BBSPJIKP (20XX - sekarang)</li>
                                        <li>Jabatan sebelumnya (20XX - 20XX)</li>
                                        <li>Penghargaan dan prestasi lainnya</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Pejabat Struktural -->
                    <section>
                        <h2 class="text-2xl font-bold text-blue-600 mb-6">Pejabat Struktural</h2>
                        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                            <!-- Pejabat 1 -->
                            <div class="bg-gray-50 rounded-lg p-6">
                                <div class="aspect-w-4 aspect-h-5 rounded-lg overflow-hidden bg-gray-100 mb-4">
                                    <img src="<?php echo e(asset('images/pejabat/pejabat-1.jpg')); ?>" alt="Nama Pejabat 1" class="w-full h-full object-cover">
                                </div>
                                <h3 class="text-lg font-semibold mb-1">Nama Pejabat 1</h3>
                                <p class="text-gray-600 text-sm mb-2">Kepala Bagian XXX</p>
                                <p class="text-gray-500 text-sm">NIP. XXXXXXXXXXXXX</p>
                            </div>

                            <!-- Pejabat 2 -->
                            <div class="bg-gray-50 rounded-lg p-6">
                                <div class="aspect-w-4 aspect-h-5 rounded-lg overflow-hidden bg-gray-100 mb-4">
                                    <img src="<?php echo e(asset('images/pejabat/pejabat-2.jpg')); ?>" alt="Nama Pejabat 2" class="w-full h-full object-cover">
                                </div>
                                <h3 class="text-lg font-semibold mb-1">Nama Pejabat 2</h3>
                                <p class="text-gray-600 text-sm mb-2">Kepala Bidang XXX</p>
                                <p class="text-gray-500 text-sm">NIP. XXXXXXXXXXXXX</p>
                            </div>

                            <!-- Pejabat 3 -->
                            <div class="bg-gray-50 rounded-lg p-6">
                                <div class="aspect-w-4 aspect-h-5 rounded-lg overflow-hidden bg-gray-100 mb-4">
                                    <img src="<?php echo e(asset('images/pejabat/pejabat-3.jpg')); ?>" alt="Nama Pejabat 3" class="w-full h-full object-cover">
                                </div>
                                <h3 class="text-lg font-semibold mb-1">Nama Pejabat 3</h3>
                                <p class="text-gray-600 text-sm mb-2">Kepala Seksi XXX</p>
                                <p class="text-gray-500 text-sm">NIP. XXXXXXXXXXXXX</p>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\alamak\resources\views/pages/about/profil-pejabat.blade.php ENDPATH**/ ?>