<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['title', 'description', 'image']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['title', 'description', 'image']); ?>
<?php foreach (array_filter((['title', 'description', 'image']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div class="relative group">
    <div class="aspect-[4/5] rounded-lg overflow-hidden">
        <img src="<?php echo e($image); ?>" alt="<?php echo e($title); ?>" class="w-full h-full object-cover transform transition-transform duration-300 group-hover:scale-110">
        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/50 to-transparent"></div>
        <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
            <h3 class="text-xl font-semibold mb-2"><?php echo e($title); ?></h3>
            <p class="text-sm text-white/80"><?php echo e($description); ?></p>
        </div>
    </div>
</div><?php /**PATH C:\alamak\resources\views/pages/halal-center/layouts/_card-style.blade.php ENDPATH**/ ?>