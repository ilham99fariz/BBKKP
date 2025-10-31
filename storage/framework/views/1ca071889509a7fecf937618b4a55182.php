

<?php $__env->startSection('title', 'Tentang Kami - BBSPJIKKP'); ?>
<?php $__env->startSection('description', 'Informasi tentang BBSPJIKKP: profil, struktur organisasi, pejabat, dan lain-lain'); ?>

<?php $__env->startSection('content'); ?>
    <section class="relative">
        <div class="h-56 md:h-72 w-full bg-cover bg-center"
            style="background-image:url('https://images.unsplash.com/photo-1529333166437-7750a6dd5a70?q=80&w=1600&fit=crop');">
            <div class="h-full w-full bg-black/40 flex items-end">
                <div class="max-w-7xl mx-auto w-full px-4 sm:px-6 lg:px-8 py-8">
                    <nav class="text-white/80 text-sm mb-2">
                        <a href="<?php echo e(route('home')); ?>" class="hover:text-white">Home</a>
                        <span class="mx-2">/</span>
                        <span>Tentang Kami</span>
                    </nav>
                    <h1 class="text-3xl md:text-4xl font-bold text-white">Tentang Kami</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="py-12 md:py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-6">
                <a href="/tonggak-sejarah" class="bg-white border rounded-xl p-5 hover:shadow-md transition-shadow">
                    <div class="text-lg font-semibold">Tonggak Sejarah</div>
                </a>
                <a href="/profil-singkat" class="bg-white border rounded-xl p-5 hover:shadow-md transition-shadow">
                    <div class="text-lg font-semibold">Profil Singkat BBSPJIKKP</div>
                </a>
                <a href="/profil-pejabat" class="bg-white border rounded-xl p-5 hover:shadow-md transition-shadow">
                    <div class="text-lg font-semibold">Profil Pejabat</div>
                </a>
                <a href="/struktur-organisasi" class="bg-white border rounded-xl p-5 hover:shadow-md transition-shadow">
                    <div class="text-lg font-semibold">Struktur Organisasi</div>
                </a>
                <a href="/makna-logo" class="bg-white border rounded-xl p-5 hover:shadow-md transition-shadow">
                    <div class="text-lg font-semibold">Makna Logo</div>
                </a>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\alamak\resources\views/pages/about/index.blade.php ENDPATH**/ ?>