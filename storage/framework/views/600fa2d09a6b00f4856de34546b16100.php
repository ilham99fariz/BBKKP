

<?php $__env->startSection('title', 'Tarif Percepatan - BBSPJIKKP'); ?>
<?php $__env->startSection('description', 'Informasi tarif percepatan layanan BBSPJIKKP'); ?>

<?php $__env->startSection('content'); ?>
    <section class="relative">
        <div class="h-56 md:h-72 w-full bg-cover bg-center" style="background-image:url('https://images.unsplash.com/photo-1515169067865-5387ec356754?q=80&w=1600&fit=crop');">
            <div class="h-full w-full bg-black/40 flex items-end">
                <div class="max-w-7xl mx-auto w-full px-4 sm:px-6 lg:px-8 py-8">
                    <nav class="text-white/80 text-sm mb-2">
                        <a href="<?php echo e(route('home')); ?>" class="hover:text-white">Home</a>
                        <span class="mx-2">/</span>
                        <a href="<?php echo e(route('standards.index')); ?>" class="hover:text-white">Standar Pelayanan</a>
                        <span class="mx-2">/</span>
                        <span>Tarif Percepatan</span>
                    </nav>
                    <h1 class="text-3xl md:text-4xl font-bold text-white">Tarif Percepatan</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="py-12 md:py-16 bg-gray-50">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white rounded-lg shadow p-8">
                <h2 class="text-xl font-semibold mb-3">Tarif Percepatan</h2>
                <p class="text-gray-600">Informasi tarif percepatan akan tersedia di halaman ini. Untuk sementara, merupakan placeholder.</p>
                <p class="mt-4 text-sm text-gray-500">Halaman ini akan segera hadir.</p>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\alamak\resources\views/pages/standards/tarif-percepatan.blade.php ENDPATH**/ ?>