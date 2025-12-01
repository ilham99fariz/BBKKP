

<?php $__env->startSection('title', 'Keterbukaan Informasi Publik - BBSPJIKKP'); ?>
<?php $__env->startSection('description', 'Keterbukaan Informasi Publik - informasi dan dokumen terkait BBSPJIKKP'); ?>

<?php $__env->startSection('content'); ?>
    <section class="relative">
        <div class="h-56 md:h-72 w-full bg-cover bg-center"
            style="background-image:url('https://images.unsplash.com/photo-1508830524289-0adcbe822b40?q=80&w=1600&fit=crop');">
            <div class="h-full w-full bg-black/40 flex items-end">
                <div class="max-w-7xl mx-auto w-full px-4 sm:px-6 lg:px-8 py-8">
                    <nav class="text-white/80 text-sm mb-2">
                        <a href="<?php echo e(route('home')); ?>" class="hover:text-white">Home</a>
                        <span class="mx-2">/</span>
                        <a href="/media-informasi" class="hover:text-white">Media dan Informasi</a>
                        <span class="mx-2">/</span>
                        <span>Keterbukaan Informasi Publik</span>
                    </nav>
                    <h1 class="text-3xl md:text-4xl font-bold text-white">Keterbukaan Informasi Publik</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20">
        <div class="max-w-3xl mx-auto px-4 text-center">
            <div class="bg-white border rounded-lg p-8 shadow-sm">
                <h2 class="text-xl md:text-2xl font-semibold mb-4">Halaman ini akan segera hadir</h2>
                <p class="text-gray-600 mb-6">Kami sedang menyiapkan konten terkait keterbukaan informasi publik. Silakan kembali nanti atau hubungi kami untuk informasi lebih lanjut.</p>
                <a href="<?php echo e(route('media.index') ?? url('/media-informasi')); ?>" class="inline-block bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">Kembali ke Media dan Informasi</a>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\alamak\resources\views/pages/media/keterbukaan-informasi-publik.blade.php ENDPATH**/ ?>