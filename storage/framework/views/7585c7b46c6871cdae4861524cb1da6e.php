

<?php $__env->startSection('title', 'Maklumat Pelayanan - BBSPJIKKP'); ?>
<?php $__env->startSection('description', 'Maklumat pelayanan untuk pengguna layanan BBSPJIKKP'); ?>

<?php $__env->startSection('content'); ?>
    <section class="relative">
        <div class="h-56 md:h-72 w-full bg-cover bg-center" style="background-image:url('https://images.unsplash.com/photo-1496307042754-b4aa456c4a2d?q=80&w=1600&fit=crop');">
            <div class="h-full w-full bg-black/40 flex items-end">
                <div class="max-w-7xl mx-auto w-full px-4 sm:px-6 lg:px-8 py-8">
                    <nav class="text-white/80 text-sm mb-2">
                        <a href="<?php echo e(route('home')); ?>" class="hover:text-white">Home</a>
                        <span class="mx-2">/</span>
                        <a href="<?php echo e(route('standards.index')); ?>" class="hover:text-white">Standar Pelayanan</a>
                        <span class="mx-2">/</span>
                        <span>Maklumat Pelayanan</span>
                    </nav>
                    <h1 class="text-3xl md:text-4xl font-bold text-white">Maklumat Pelayanan</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="py-12 md:py-16 bg-gray-50">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white rounded-lg shadow p-8">
                <h2 class="text-xl font-semibold mb-3">Maklumat Pelayanan</h2>
                <p class="text-gray-600">Isi maklumat pelayanan akan ditampilkan di sini. Untuk sementara, halaman ini berfungsi sebagai placeholder.</p>
                <p class="mt-4 text-sm text-gray-500">Halaman ini akan segera hadir.</p>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\BBKKP\resources\views/pages/standards/maklumat-pelayanan.blade.php ENDPATH**/ ?>