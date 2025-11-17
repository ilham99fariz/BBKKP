

<?php $__env->startSection('title', 'Halal Center - BBSPJIKP'); ?>
<?php $__env->startSection('description', 'Lembaga Pemeriksa Halal Balai Besar Standarisasi dan Pelayanan Jasa Industri Kulit, Karet dan Plastik'); ?>

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
                            <span class="text-gray-300">Halal Center</span>
                        </div>
                    </li>
                </ol>
            </nav>

            <!-- Header Text -->
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Halal Center</h1>
                <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                    Lembaga Pemeriksa Halal Balai Besar Standarisasi dan Pelayanan Jasa Industri Kulit, Karet dan Plastik
                </p>
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">

        <!-- Halal Center Cards (consistent with site cards) -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- About LPH -->
            <a href="<?php echo e(route('halal.about')); ?>" class="group h-full flex">
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:translate-y-[-4px] hover:shadow-xl">
                    <div class="h-48 overflow-hidden">
                        <img src="<?php echo e(asset('images/bg-random.webp')); ?>" alt="Tentang LPH" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <h2 class="text-xl font-semibold text-gray-900 mb-2 group-hover:text-blue-600">Tentang LPH</h2>
                        <p class="text-gray-600">Informasi mengenai peran dan fungsi Lembaga Pemeriksa Halal BBSPJIKP.</p>
                    </div>
                </div>
            </a>

            <!-- Services -->
            <a href="<?php echo e(route('halal.services')); ?>" class="group h-full flex">
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:translate-y-[-4px] hover:shadow-xl">
                    <div class="h-48 overflow-hidden">
                        <img src="<?php echo e(asset('images/bg-random.webp')); ?>" alt="Layanan LPH" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <h2 class="text-xl font-semibold text-gray-900 mb-2 group-hover:text-blue-600">Layanan LPH</h2>
                        <p class="text-gray-600 flex-1">Pemeriksaan dokumen, audit lapangan, dan pengujian laboratorium.</p>
                    </div>
                </div>
            </a>

            <!-- Certification Process -->
            <a href="<?php echo e(route('halal.certification-process')); ?>" class="group h-full flex">
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:translate-y-[-4px] hover:shadow-xl">
                    <div class="h-48 overflow-hidden">
                        <img src="<?php echo e(asset('images/bg-random.webp')); ?>" alt="Proses Sertifikasi" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <h2 class="text-xl font-semibold text-gray-900 mb-2 group-hover:text-blue-600">Proses Sertifikasi</h2>
                        <p class="text-gray-600 flex-1">Tahapan pendaftaran, audit, rapat fatwa, dan penerbitan sertifikat.</p>
                    </div>
                </div>
            </a>

            <!-- Regulations -->
            <a href="<?php echo e(route('halal.regulations')); ?>" class="group h-full flex">
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:translate-y-[-4px] hover:shadow-xl">
                    <div class="h-48 overflow-hidden">
                        <img src="<?php echo e(asset('images/bg-random.webp')); ?>" alt="Peraturan dan Pedoman" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <h2 class="text-xl font-semibold text-gray-900 mb-2 group-hover:text-blue-600">Peraturan & Pedoman</h2>
                        <p class="text-gray-600 flex-1">Undang-undang, peraturan, dan pedoman teknis terkait JPH.</p>
                    </div>
                </div>
            </a>

            <!-- FAQ -->
            <a href="<?php echo e(route('halal.faq')); ?>" class="group h-full flex">
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:translate-y-[-4px] hover:shadow-xl">
                    <div class="h-48 overflow-hidden">
                        <img src="<?php echo e(asset('images/bg-random.webp')); ?>" alt="FAQ" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <h2 class="text-xl font-semibold text-gray-900 mb-2 group-hover:text-blue-600">FAQ</h2>
                        <p class="text-gray-600 flex-1  ">Pertanyaan yang sering diajukan seputar sertifikasi halal.</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <!-- Atau Bisa Seperti Di Bawah Ini -->
    <script type="text/javascript" src="https://web.animemusic.us/widget_disabilitas.js" api-key-resvoice="bzbTAKXD"></script>
    <!-- ganti key api-key-resvoice dengan key yang ada di responsive voice-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\alamak\resources\views/pages/halal-center/index.blade.php ENDPATH**/ ?>