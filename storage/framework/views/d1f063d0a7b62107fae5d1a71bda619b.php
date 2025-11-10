

<?php $__env->startSection('title', 'Layanan LPH - BBSPJIKP'); ?>
<?php $__env->startSection('description', 'Layanan pemeriksaan dan audit kehalalan produk oleh LPH BBSPJIKP'); ?>

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
                            <span class="text-gray-300">Layanan LPH</span>
                        </div>
                    </li>
                </ol>
            </nav>

            <!-- Header Text -->
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Layanan LPH</h1>
                <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                    Layanan Pemeriksaan dan Audit Kehalalan Produk
                </p>
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <div class="p-8">
                <!-- Jenis Layanan -->
                <section class="mb-12">
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">Jenis Layanan</h2>
                    <div class="grid md:grid-cols-3 gap-6">
                        <!-- Pemeriksaan Dokumen -->
                        <div class="bg-white border rounded-lg p-6">
                            <div class="w-12 h-12 bg-blue-100 rounded-lg mb-4 flex items-center justify-center">
                                <i class="fas fa-file-alt text-blue-600 text-2xl"></i>
                            </div>
                            <h3 class="text-xl font-semibold mb-3">Pemeriksaan Dokumen</h3>
                            <p class="text-gray-600">Pemeriksaan kelengkapan dan kesesuaian dokumen untuk sertifikasi halal</p>
                        </div>

                        <!-- Audit Lapangan -->
                        <div class="bg-white border rounded-lg p-6">
                            <div class="w-12 h-12 bg-green-100 rounded-lg mb-4 flex items-center justify-center">
                                <i class="fas fa-clipboard-check text-green-600 text-2xl"></i>
                            </div>
                            <h3 class="text-xl font-semibold mb-3">Audit Lapangan</h3>
                            <p class="text-gray-600">Pemeriksaan langsung ke lokasi produksi untuk verifikasi sistem jaminan halal</p>
                        </div>

                        <!-- Pengujian Laboratorium -->
                        <div class="bg-white border rounded-lg p-6">
                            <div class="w-12 h-12 bg-purple-100 rounded-lg mb-4 flex items-center justify-center">
                                <i class="fas fa-flask text-purple-600 text-2xl"></i>
                            </div>
                            <h3 class="text-xl font-semibold mb-3">Pengujian Laboratorium</h3>
                            <p class="text-gray-600">Pengujian kehalalan produk di laboratorium terakreditasi</p>
                        </div>
                    </div>
                </section>

                <!-- Ruang Lingkup -->
                <section class="mb-12">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6">Ruang Lingkup</h2>
                    <div class="grid md:grid-cols-2 gap-8">
                        <div class="bg-gray-50 p-6 rounded-lg">
                            <h3 class="text-xl font-semibold mb-4">Produk yang Dilayani</h3>
                            <ul class="list-disc list-inside text-gray-600 space-y-2">
                                <li>Produk kulit dan turunannya</li>
                                <li>Produk plastik dan kemasan</li>
                                <li>Produk karet dan komponennya</li>
                                <li>Bahan tambahan dan penolong</li>
                            </ul>
                        </div>
                        <div class="bg-gray-50 p-6 rounded-lg">
                            <h3 class="text-xl font-semibold mb-4">Cakupan Pemeriksaan</h3>
                            <ul class="list-disc list-inside text-gray-600 space-y-2">
                                <li>Bahan baku dan tambahan</li>
                                <li>Proses produksi</li>
                                <li>Peralatan produksi</li>
                                <li>Sistem jaminan halal</li>
                            </ul>
                        </div>
                    </div>
                </section>

                <!-- Biaya dan Waktu -->
                <section>
                    <h2 class="text-2xl font-bold text-gray-900 mb-6">Biaya dan Waktu Layanan</h2>
                    <div class="overflow-x-auto">
                        <table class="min-w-full">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Jenis Layanan
                                    </th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Estimasi Waktu
                                    </th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Biaya
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                        Pemeriksaan Dokumen
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        3-5 hari kerja
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        Sesuai ketentuan
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                        Audit Lapangan
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        1-3 hari kerja
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        Sesuai ketentuan
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                        Pengujian Laboratorium
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        5-10 hari kerja
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        Sesuai parameter
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </section>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\alamak\resources\views/pages/halal-center/services.blade.php ENDPATH**/ ?>