<?php $__env->startSection('title', $page->title); ?>

<?php $__env->startSection('content'); ?>
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-4"><?php echo e($page->title); ?></h1>
        <div class="prose max-w-full">
            <?php echo $page->content; ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\alamak\resources\views/pages/dynamic-page.blade.php ENDPATH**/ ?>