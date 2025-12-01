

<?php $__env->startSection('page-title', 'Kunjungan & Pesan'); ?>

<?php $__env->startSection('content'); ?>
<div class="bg-white rounded-lg shadow p-6">
    <div class="flex items-center justify-between mb-4">
        <h3 class="text-lg font-semibold">Daftar Kunjungan & Pesan</h3>
        <div class="text-sm text-gray-600">Total: <?php echo e($messages->total()); ?></div>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full table-auto">
            <thead>
                <tr class="text-left text-sm text-gray-500 border-b">
                    <th class="py-3">#</th>
                    <th class="py-3">Nama</th>
                    <th class="py-3">Email</th>
                    <th class="py-3">Keperluan</th>
                    <th class="py-3">Subjek</th>
                    <th class="py-3">Tanggal</th>
                    <th class="py-3">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $msg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr class="border-b <?php echo e($msg->is_read ? '' : 'bg-blue-50'); ?>">
                    <td class="py-3 text-sm"><?php echo e($msg->id); ?></td>
                    <td class="py-3 text-sm"><?php echo e($msg->name); ?></td>
                    <td class="py-3 text-sm"><?php echo e($msg->email); ?></td>
                    <td class="py-3 text-sm"><?php echo e($msg->purpose ?? '-'); ?></td>
                    <td class="py-3 text-sm"><?php echo e($msg->subject); ?></td>
                    <td class="py-3 text-sm"><?php echo e($msg->created_at->format('d M Y H:i')); ?></td>
                    <td class="py-3 text-sm">
                        <a href="<?php echo e(route('admin.messages.show', $msg)); ?>" class="text-blue-600 hover:underline">Lihat</a>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>

    <div class="mt-4">
        <?php echo e($messages->links()); ?>

    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\alamak\resources\views/admin/messages/index.blade.php ENDPATH**/ ?>