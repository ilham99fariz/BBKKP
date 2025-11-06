

<?php $__env->startSection('title', 'Standar Pelayanan - BBSPJIKKP'); ?>
<?php $__env->startSection('description', 'Daftar standar pelayanan dan informasi terkait BBSPJIKKP'); ?>

<?php $__env->startSection('content'); ?>
    <section class="relative">
        <div class="h-56 md:h-72 w-full bg-cover bg-center"
            style="background-image:url('https://images.unsplash.com/photo-1504384308090-c894fdcc538d?q=80&w=1600&fit=crop');">
            <div class="h-full w-full bg-black/40 flex items-end">
                <div class="max-w-7xl mx-auto w-full px-4 sm:px-6 lg:px-8 py-8">
                    <nav class="text-white/80 text-sm mb-2">
                        <a href="<?php echo e(route('home')); ?>" class="hover:text-white">Home</a>
                        <span class="mx-2">/</span>
                        <span>Standar Pelayanan</span>
                    </nav>
                    <h1 class="text-3xl md:text-4xl font-bold text-white">Standar Pelayanan</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="py-12 md:py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-6">
                <a href="/standar-pelayanan" class="bg-white border rounded-xl p-5 hover:shadow-md transition-shadow">
                    <div class="text-lg font-semibold">Standar Pelayanan</div>
                </a>
                <a href="/maklumat-pelayanan" class="bg-white border rounded-xl p-5 hover:shadow-md transition-shadow">
                    <div class="text-lg font-semibold">Maklumat Pelayanan</div>
                </a>
                <a href="/tarif-layanan" class="bg-white border rounded-xl p-5 hover:shadow-md transition-shadow">
                    <div class="text-lg font-semibold">Tarif Layanan</div>
                </a>
                <a href="/tarif-percepatan" class="bg-white border rounded-xl p-5 hover:shadow-md transition-shadow">
                    <div class="text-lg font-semibold">Tarif Percepatan</div>
                </a>
                <a href="/spm" class="bg-white border rounded-xl p-5 hover:shadow-md transition-shadow">
                    <div class="text-lg font-semibold">Standar Pelayanan Minimum (SPM)</div>
                </a>
                <a href="/survey-layanan-pelanggan" class="bg-white border rounded-xl p-5 hover:shadow-md transition-shadow">
                    <div class="text-lg font-semibold">Survey Layanan Pelanggan</div>
                </a>
                <a href="/ikm" class="bg-white border rounded-xl p-5 hover:shadow-md transition-shadow">
                    <div class="text-lg font-semibold">Indeks Kepuasan Masyarakat</div>
                </a>
                <a href="<?php echo e(route('contact.show')); ?>" class="bg-white border rounded-xl p-5 hover:shadow-md transition-shadow">
                    <div class="text-lg font-semibold">Kontak</div>
                </a>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\BBKKP\resources\views/pages/standards/index.blade.php ENDPATH**/ ?>