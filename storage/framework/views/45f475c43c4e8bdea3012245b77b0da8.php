<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['title', 'description', 'image', 'currentPage']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['title', 'description', 'image', 'currentPage']); ?>
<?php foreach (array_filter((['title', 'description', 'image', 'currentPage']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<!-- Hero Section with Background -->
<div class="relative bg-gray-900">
    <!-- Background Image with Overlay -->
    <div class="absolute inset-0">
        <img src="<?php echo e($image); ?>" alt="<?php echo e($title); ?>" class="w-full h-full object-cover">
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
                        <span class="text-gray-300"><?php echo e($currentPage); ?></span>
                    </div>
                </li>
            </ol>
        </nav>

        <!-- Header Text -->
        <div class="text-center">
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-4"><?php echo e($title); ?></h1>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                <?php echo e($description); ?>

            </p>
        </div>
    </div>
</div><?php /**PATH C:\alamak\resources\views/pages/halal-center/layouts/_hero.blade.php ENDPATH**/ ?>