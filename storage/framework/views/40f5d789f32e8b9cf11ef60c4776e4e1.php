

<?php $__env->startSection('title', $news->title . ' - BALAI BESAR STANDARDISASI DAN PELAYANAN JASA INDUSTRI KULIT, PLASTIK, DAN KARET'); ?>
<?php $__env->startSection('description', $news->excerpt); ?>

<?php $__env->startSection('content'); ?>
<!-- Page Header -->
<section class="bg-gradient-to-r from-blue-600 to-blue-800 text-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h1 class="text-3xl md:text-4xl font-bold mb-4"><?php echo e($news->title); ?></h1>
            <div class="flex items-center justify-center text-blue-100 space-x-6">
                <div class="flex items-center">
                    <i class="fas fa-calendar-alt mr-2"></i>
                    <span><?php echo e($news->published_at->format('d M Y')); ?></span>
                </div>
                <div class="flex items-center">
                    <i class="fas fa-user mr-2"></i>
                    <span><?php echo e($news->author); ?></span>
                </div>
                <div class="flex items-center">
                    <i class="fas fa-eye mr-2"></i>
                    <span><?php echo e($news->views); ?> views</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Article Content -->
<section class="py-20 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-12">
            <!-- Main Content -->
            <div class="lg:col-span-3">
                <?php if($news->image): ?>
                <div class="mb-8">
                    <img src="<?php echo e(Storage::url($news->image)); ?>" alt="<?php echo e($news->title); ?>" class="w-full h-64 md:h-96 object-cover rounded-lg">
                </div>
                <?php endif; ?>
                
                <div class="prose prose-lg max-w-none">
                    <?php echo $news->content; ?>

                </div>
                
                <!-- Share Buttons -->
                <div class="mt-12 pt-8 border-t border-gray-200">
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">Bagikan Artikel Ini</h3>
                    <div class="flex space-x-4">
                        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo e(urlencode(request()->url())); ?>" 
                           target="_blank"
                           class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors duration-200">
                            <i class="fab fa-facebook-f mr-2"></i>Facebook
                        </a>
                        <a href="https://twitter.com/intent/tweet?url=<?php echo e(urlencode(request()->url())); ?>&text=<?php echo e(urlencode($news->title)); ?>" 
                           target="_blank"
                           class="bg-blue-400 text-white px-4 py-2 rounded-lg hover:bg-blue-500 transition-colors duration-200">
                            <i class="fab fa-twitter mr-2"></i>Twitter
                        </a>
                        <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo e(urlencode(request()->url())); ?>" 
                           target="_blank"
                           class="bg-blue-700 text-white px-4 py-2 rounded-lg hover:bg-blue-800 transition-colors duration-200">
                            <i class="fab fa-linkedin-in mr-2"></i>LinkedIn
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Sidebar -->
            <div class="lg:col-span-1">
                <!-- Related News -->
                <?php if($relatedNews->count() > 0): ?>
                <div class="bg-gray-50 rounded-lg p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Berita Terkait</h3>
                    <div class="space-y-4">
                        <?php $__currentLoopData = $relatedNews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $relatedArticle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="border-l-4 border-blue-500 pl-4">
                            <h4 class="font-semibold text-gray-900 mb-1 line-clamp-2"><?php echo e($relatedArticle->title); ?></h4>
                            <p class="text-sm text-gray-600 mb-2"><?php echo e($relatedArticle->published_at->format('d M Y')); ?></p>
                            <a href="<?php echo e(route('news.show', $relatedArticle)); ?>" 
                               class="text-blue-600 text-sm font-semibold hover:text-blue-700">
                                Baca Selengkapnya <i class="fas fa-arrow-right ml-1"></i>
                            </a>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
                <?php endif; ?>
                
                <!-- Contact CTA -->
                <div class="mt-8 bg-blue-50 rounded-lg p-6">
                    <h3 class="text-lg font-bold text-gray-900 mb-3">Butuh Informasi Lebih Lanjut?</h3>
                    <p class="text-gray-600 mb-4 text-sm">
                        Hubungi kami untuk informasi lebih detail tentang layanan kami.
                    </p>
                    <a href="<?php echo e(route('contact.show')); ?>" 
                       class="bg-blue-600 text-white px-4 py-2 rounded-lg font-semibold hover:bg-blue-700 transition-colors duration-200 text-sm">
                        Hubungi Kami
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Back to News -->
<section class="py-12 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <a href="<?php echo e(route('news.index')); ?>" 
           class="inline-flex items-center text-blue-600 font-semibold hover:text-blue-700 transition-colors duration-200">
            <i class="fas fa-arrow-left mr-2"></i>
            Kembali ke Semua Berita
        </a>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\BBKKP\resources\views/pages/news/show.blade.php ENDPATH**/ ?>