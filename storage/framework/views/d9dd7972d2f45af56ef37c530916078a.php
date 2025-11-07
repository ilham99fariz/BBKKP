

<?php $__env->startSection('title', 'Manajemen Berita - Admin Panel'); ?>
<?php $__env->startSection('page-title', 'Manajemen Berita'); ?>

<?php $__env->startSection('content'); ?>
    <div class="flex justify-between items-center mb-6">
        <div>
            <h1 class="text-2xl font-bold text-gray-900">Berita</h1>
            <p class="text-sm text-gray-600 mt-1">Kelola posisi dan status berita Anda</p>
        </div>
        <a href="<?php echo e(route('admin.news.create')); ?>"
            class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors duration-200">
            <i class="fas fa-plus mr-2"></i>Tambah Berita
        </a>
    </div>

    <!-- Info Badge untuk Position -->
    <div class="bg-blue-50 border border-blue-200 rounded-lg p-4 mb-6">
        <div class="flex items-start">
            <i class="fas fa-info-circle text-blue-600 mt-1 mr-3"></i>
            <div class="flex-1">
                <h3 class="text-sm font-semibold text-blue-900 mb-2">Informasi Posisi Berita:</h3>
                <div class="grid grid-cols-1 md:grid-cols-4 gap-3 text-xs text-blue-800">
                    <div class="flex items-center">
                        <span class="inline-flex items-center px-2 py-1 rounded-full bg-red-100 text-red-700 font-semibold mr-2">1</span>
                        <span>Featured (Besar)</span>
                    </div>
                    <div class="flex items-center">
                        <span class="inline-flex items-center px-2 py-1 rounded-full bg-orange-100 text-orange-700 font-semibold mr-2">2</span>
                        <span>Priority (Sedang Atas)</span>
                    </div>
                    <div class="flex items-center">
                        <span class="inline-flex items-center px-2 py-1 rounded-full bg-yellow-100 text-yellow-700 font-semibold mr-2">3</span>
                        <span>Priority (Sedang Bawah)</span>
                    </div>
                    <div class="flex items-center">
                        <span class="inline-flex items-center px-2 py-1 rounded-full bg-gray-100 text-gray-700 font-semibold mr-2">-</span>
                        <span>Regular (Grid)</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white rounded-lg shadow overflow-hidden">
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider w-1/4">
                            Berita</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider w-1/3">
                            Konten</th>
                        <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider w-20">
                            Posisi</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider w-20">
                            Status</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider w-24">
                            Tanggal</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider w-32">Aksi
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <?php $__empty_1 = true; $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4">
                                <div class="flex items-center">
                                    <?php if($item->image): ?>
                                        <img src="<?php echo e(Storage::url($item->image)); ?>" alt="<?php echo e($item->title); ?>"
                                            class="h-12 w-12 rounded-lg object-cover mr-3 flex-shrink-0">
                                    <?php else: ?>
                                        <div
                                            class="h-12 w-12 bg-gray-200 rounded-lg flex items-center justify-center mr-3 flex-shrink-0">
                                            <i class="fas fa-newspaper text-gray-400"></i>
                                        </div>
                                    <?php endif; ?>
                                    <div class="min-w-0 flex-1">
                                        <div class="text-sm font-medium text-gray-900 line-clamp-2"><?php echo e($item->title); ?></div>
                                        <div class="text-xs text-gray-500 mt-1">
                                            <i class="fas fa-user mr-1"></i><?php echo e($item->author); ?>

                                            <?php if($item->views): ?>
                                                <span class="mx-1">•</span>
                                                <i class="fas fa-eye mr-1"></i><?php echo e(number_format($item->views)); ?> views
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-600 max-w-md">
                                    <div class="line-clamp-2"><?php echo e(Str::limit($item->excerpt ?? strip_tags($item->content), 120)); ?></div>
                                </div>
                            </td>
                            <td class="px-6 py-4 text-center">
                                <?php if($item->position == 1): ?>
                                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold bg-red-100 text-red-700">
                                        <i class="fas fa-star mr-1"></i> 1
                                    </span>
                                <?php elseif($item->position == 2): ?>
                                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold bg-orange-100 text-orange-700">
                                        <i class="fas fa-fire mr-1"></i> 2
                                    </span>
                                <?php elseif($item->position == 3): ?>
                                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold bg-yellow-100 text-yellow-700">
                                        <i class="fas fa-bolt mr-1"></i> 3
                                    </span>
                                <?php else: ?>
                                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-gray-100 text-gray-600">
                                        Regular
                                    </span>
                                <?php endif; ?>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <?php if($item->is_published): ?>
                                    <span
                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                        <i class="fas fa-check-circle mr-1"></i> Published
                                    </span>
                                <?php else: ?>
                                    <span
                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                                        <i class="fas fa-clock mr-1"></i> Draft
                                    </span>
                                <?php endif; ?>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                <?php if($item->published_at): ?>
                                    <div class="text-sm"><?php echo e($item->published_at->format('d M Y')); ?></div>
                                    <div class="text-xs text-gray-500"><?php echo e($item->published_at->format('H:i')); ?></div>
                                <?php else: ?>
                                    <div class="text-sm text-gray-400">Belum dipublish</div>
                                <?php endif; ?>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <div class="flex items-center space-x-3">
                                    <a href="<?php echo e(route('news.show', $item)); ?>"
                                        class="text-blue-600 hover:text-blue-900 transition-colors" 
                                        target="_blank"
                                        title="Lihat di website">
                                        <i class="fas fa-external-link-alt"></i>
                                    </a>
                                    <a href="<?php echo e(route('admin.news.edit', $item)); ?>"
                                        class="text-indigo-600 hover:text-indigo-900 transition-colors"
                                        title="Edit berita">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="<?php echo e(route('admin.news.toggle-publish', $item)); ?>" method="POST" class="inline">
                                        <?php echo csrf_field(); ?>
                                        <button type="submit" 
                                                class="text-<?php echo e($item->is_published ? 'yellow' : 'green'); ?>-600 hover:text-<?php echo e($item->is_published ? 'yellow' : 'green'); ?>-900 transition-colors"
                                                title="<?php echo e($item->is_published ? 'Unpublish' : 'Publish'); ?>">
                                            <i class="fas fa-<?php echo e($item->is_published ? 'eye-slash' : 'eye'); ?>"></i>
                                        </button>
                                    </form>
                                    <form action="<?php echo e(route('admin.news.destroy', $item)); ?>" method="POST"
                                        class="inline"
                                        onsubmit="return confirm('Apakah Anda yakin ingin menghapus berita ini? Tindakan ini tidak dapat dibatalkan.')">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" 
                                                class="text-red-600 hover:text-red-900 transition-colors"
                                                title="Hapus berita">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="6" class="px-6 py-12 text-center">
                                <div class="text-gray-500">
                                    <i class="fas fa-newspaper text-6xl mb-4 text-gray-300"></i>
                                    <p class="text-lg font-medium text-gray-700">Belum ada berita</p>
                                    <p class="text-sm text-gray-500 mt-1">Mulai dengan menambahkan berita pertama Anda</p>
                                    <a href="<?php echo e(route('admin.news.create')); ?>"
                                        class="inline-flex items-center mt-4 bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors duration-200">
                                        <i class="fas fa-plus mr-2"></i>Tambah Berita Sekarang
                                    </a>
                                </div>
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>

        <?php if($news->hasPages()): ?>
            <div class="px-6 py-4 border-t border-gray-200 bg-gray-50">
                <?php echo e($news->links()); ?>

            </div>
        <?php endif; ?>
    </div>

    <!-- Summary Statistics -->
    <?php if($news->count() > 0): ?>
    <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mt-6">
        <div class="bg-white rounded-lg shadow p-4">
            <div class="flex items-center">
                <div class="bg-blue-100 rounded-lg p-3">
                    <i class="fas fa-newspaper text-blue-600 text-xl"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm text-gray-600">Total Berita</p>
                    <p class="text-2xl font-bold text-gray-900"><?php echo e($news->total()); ?></p>
                </div>
            </div>
        </div>
        <div class="bg-white rounded-lg shadow p-4">
            <div class="flex items-center">
                <div class="bg-green-100 rounded-lg p-3">
                    <i class="fas fa-check-circle text-green-600 text-xl"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm text-gray-600">Published</p>
                    <p class="text-2xl font-bold text-gray-900"><?php echo e($news->where('is_published', true)->count()); ?></p>
                </div>
            </div>
        </div>
        <div class="bg-white rounded-lg shadow p-4">
            <div class="flex items-center">
                <div class="bg-yellow-100 rounded-lg p-3">
                    <i class="fas fa-clock text-yellow-600 text-xl"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm text-gray-600">Draft</p>
                    <p class="text-2xl font-bold text-gray-900"><?php echo e($news->where('is_published', false)->count()); ?></p>
                </div>
            </div>
        </div>
        <div class="bg-white rounded-lg shadow p-4">
            <div class="flex items-center">
                <div class="bg-red-100 rounded-lg p-3">
                    <i class="fas fa-star text-red-600 text-xl"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm text-gray-600">Featured</p>
                    <p class="text-2xl font-bold text-gray-900"><?php echo e($news->whereNotNull('position')->count()); ?></p>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\BBKKP\resources\views/admin/news/index.blade.php ENDPATH**/ ?>