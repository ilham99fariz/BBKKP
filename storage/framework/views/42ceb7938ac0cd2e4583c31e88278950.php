

<?php $__env->startSection('title', 'Manajemen Berita - Admin Panel'); ?>
<?php $__env->startSection('page-title', 'Manajemen Berita'); ?>

<?php $__env->startSection('content'); ?>
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-gray-900">Berita</h1>
        <a href="<?php echo e(route('admin.news.create')); ?>"
            class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors duration-200">
            <i class="fas fa-plus mr-2"></i>Tambah Berita
        </a>
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
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider w-20">
                            Status</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider w-24">
                            Tanggal</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider w-24">Aksi
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
                                            class="h-10 w-10 rounded-lg object-cover mr-3 flex-shrink-0">
                                    <?php else: ?>
                                        <div
                                            class="h-10 w-10 bg-gray-200 rounded-lg flex items-center justify-center mr-3 flex-shrink-0">
                                            <i class="fas fa-newspaper text-gray-400"></i>
                                        </div>
                                    <?php endif; ?>
                                    <div class="min-w-0 flex-1">
                                        <div class="text-sm font-medium text-gray-900 truncate"><?php echo e($item->title); ?></div>
                                        <div class="text-xs text-gray-500">Oleh: <?php echo e($item->author); ?></div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-900 max-w-md">
                                    <div class="line-clamp-2"><?php echo e(Str::limit($item->excerpt ?? strip_tags($item->content), 100)); ?></div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <?php if($item->is_published): ?>
                                    <span
                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                        Diterbitkan
                                    </span>
                                <?php else: ?>
                                    <span
                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                                        Draft
                                    </span>
                                <?php endif; ?>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                <?php if($item->published_at): ?>
                                    <?php echo e($item->published_at->format('d/m/Y')); ?>

                                <?php else: ?>
                                    <?php echo e($item->created_at->format('d/m/Y')); ?>

                                <?php endif; ?>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <div class="flex space-x-2">
                                    <a href="<?php echo e(route('news.show', $item)); ?>"
                                        class="text-blue-600 hover:text-blue-900" target="_blank">
                                        <i class="fas fa-external-link-alt"></i>
                                    </a>
                                    <a href="<?php echo e(route('admin.news.edit', $item)); ?>"
                                        class="text-indigo-600 hover:text-indigo-900">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="<?php echo e(route('admin.news.toggle-publish', $item)); ?>" method="POST" class="inline">
                                        <?php echo csrf_field(); ?>
                                        <button type="submit" 
                                                class="text-<?php echo e($item->is_published ? 'yellow' : 'green'); ?>-600 hover:text-<?php echo e($item->is_published ? 'yellow' : 'green'); ?>-900"
                                                title="<?php echo e($item->is_published ? 'Unpublish' : 'Publish'); ?>">
                                            <i class="fas fa-<?php echo e($item->is_published ? 'eye-slash' : 'eye'); ?>"></i>
                                        </button>
                                    </form>
                                    <form action="<?php echo e(route('admin.news.destroy', $item)); ?>" method="POST"
                                        class="inline"
                                        onsubmit="return confirm('Apakah Anda yakin ingin menghapus berita ini?')">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="text-red-600 hover:text-red-900">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="5" class="px-6 py-12 text-center">
                                <div class="text-gray-500">
                                    <i class="fas fa-newspaper text-4xl mb-4"></i>
                                    <p class="text-lg font-medium">Belum ada berita</p>
                                    <p class="text-sm">Mulai dengan menambahkan berita pertama Anda</p>
                                </div>
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>

        <?php if($news->hasPages()): ?>
            <div class="px-6 py-4 border-t border-gray-200">
                <?php echo e($news->links()); ?>

            </div>
        <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\alamak\resources\views/admin/news/index.blade.php ENDPATH**/ ?>