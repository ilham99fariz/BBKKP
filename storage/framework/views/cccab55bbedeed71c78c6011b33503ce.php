

<?php $__env->startSection('title', $page->title); ?>

<?php $__env->startSection('content'); ?>
    <!-- Hero Section -->
    <?php if($page->hero_image || $page->hero_title || $page->hero_subtitle): ?>
        <section class="relative text-white py-20 min-h-[400px] flex items-center">
            <?php if($page->hero_image): ?>
                <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('<?php echo e(Storage::url($page->hero_image)); ?>')"></div>
                <!-- Overlay untuk readability teks -->
                <div class="absolute inset-0 bg-black bg-opacity-40"></div>
            <?php else: ?>
                <div class="absolute inset-0 bg-gradient-to-r from-blue-600 to-blue-800"></div>
            <?php endif; ?>
            <div class="container mx-auto px-4 relative z-10">
                <div class="max-w-3xl">
                    <?php if($page->hero_title): ?>
                        <h1 class="text-4xl md:text-5xl font-bold mb-4 drop-shadow-lg"><?php echo e($page->hero_title); ?></h1>
                    <?php else: ?>
                        <h1 class="text-4xl md:text-5xl font-bold mb-4 drop-shadow-lg"><?php echo e($page->title); ?></h1>
                    <?php endif; ?>
                    <?php if($page->hero_subtitle): ?>
                        <p class="text-xl drop-shadow-md"><?php echo e($page->hero_subtitle); ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </section>
    <?php else: ?>
        <div class="bg-gradient-to-r from-blue-600 to-blue-800 text-white py-12">
            <div class="container mx-auto px-4">
                <h1 class="text-4xl font-bold"><?php echo e($page->title); ?></h1>
            </div>
        </div>
    <?php endif; ?>

    <!-- Main Content -->
    <section class="py-12">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <?php if(!$page->hero_title): ?>
                    <h1 class="text-3xl font-bold text-gray-900 mb-8"><?php echo e($page->title); ?></h1>
                <?php endif; ?>

                <div class="prose prose-lg max-w-none">
                    <?php echo $page->content; ?>

                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('styles'); ?>
    <style>
        .prose h2 {
            @apply text-2xl font-bold text-gray-900 mt-8 mb-4;
        }

        .prose h3 {
            @apply text-xl font-bold text-gray-800 mt-6 mb-3;
        }

        .prose p {
            @apply text-gray-700 mb-4 leading-relaxed;
        }

        .prose ul,
        .prose ol {
            @apply mb-4 pl-6;
        }

        .prose ul {
            @apply list-disc;
        }

        .prose ol {
            @apply list-decimal;
        }

        .prose li {
            @apply mb-2;
        }

        .prose a {
            @apply text-blue-600 hover:text-blue-800 underline;
        }

        .prose strong {
            @apply font-semibold text-gray-900;
        }

        .prose table {
            @apply w-full border-collapse border border-gray-300 my-4;
        }

        .prose th {
            @apply bg-gray-100 border border-gray-300 px-4 py-2 text-left font-semibold;
        }

        .prose td {
            @apply border border-gray-300 px-4 py-2;
        }
    </style>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\BBKKP\resources\views/pages/dynamic/show.blade.php ENDPATH**/ ?>