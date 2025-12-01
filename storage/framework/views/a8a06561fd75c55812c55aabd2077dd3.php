

<?php $__env->startSection('page-title', 'Detail Pesan'); ?>

<?php $__env->startSection('content'); ?>
<div class="space-y-6">
    <div class="bg-white rounded-xl shadow-md p-6 flex items-start gap-4">
        <div class="flex-shrink-0">
            <div class="h-14 w-14 rounded-full bg-gradient-to-br from-blue-500 to-indigo-600 flex items-center justify-center text-white font-semibold text-lg">
                <?php echo e(strtoupper(substr($message->name, 0, 1))); ?>

            </div>
        </div>

        <div class="flex-1">
            <div class="flex items-center justify-between">
                <div>
                    <h1 class="text-2xl font-semibold text-gray-900"><?php echo e($message->subject); ?></h1>
                    <div class="mt-1 text-sm text-gray-500">Dikirim oleh <strong class="text-gray-800"><?php echo e($message->name); ?></strong> — <?php echo e($message->created_at->format('d M Y H:i')); ?></div>
                </div>

                <div class="flex items-center space-x-3">
                    <?php if(! $message->is_read): ?>
                        <span class="inline-flex items-center px-3 py-1 rounded-full bg-yellow-100 text-yellow-800 text-sm">Belum dibaca</span>
                    <?php else: ?>
                        <span class="inline-flex items-center px-3 py-1 rounded-full bg-green-100 text-green-800 text-sm">Terbaca</span>
                    <?php endif; ?>
                    <span class="inline-flex items-center px-3 py-1 rounded-full bg-gray-100 text-gray-700 text-sm"><?php echo e($message->purpose ? ucfirst(str_replace('_', ' ', $message->purpose)) : 'Umum'); ?></span>
                </div>
            </div>

            <div class="mt-6 bg-gray-50 border border-gray-100 rounded-lg p-5 prose">
                <p class="text-gray-800 whitespace-pre-line"><?php echo e($message->message); ?></p>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <div class="lg:col-span-2">
            <div class="bg-white rounded-xl shadow p-6">
                <h3 class="text-lg font-medium text-gray-900 mb-4">Detail Kontak</h3>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="text-sm text-gray-600">
                        <p><span class="font-medium text-gray-800">Email:</span> <a href="mailto:<?php echo e($message->email); ?>" class="text-blue-600"><?php echo e($message->email); ?></a></p>
                        <p class="mt-2"><span class="font-medium text-gray-800">Telepon:</span> <?php echo e($message->phone ?? '-'); ?></p>
                    </div>

                    <div class="text-sm text-gray-600">
                        <p><span class="font-medium text-gray-800">Perusahaan:</span> <?php echo e($message->company ?? '-'); ?></p>
                        <p class="mt-2"><span class="font-medium text-gray-800">Diterima:</span> <?php echo e($message->created_at->diffForHumans()); ?></p>
                    </div>
                </div>

                <div class="mt-6 flex items-center gap-3">
                    <?php if(! $message->is_read): ?>
                        <form action="<?php echo e(route('admin.messages.mark-read', $message)); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md shadow-sm hover:bg-blue-700">Tandai Terbaca</button>
                        </form>
                    <?php endif; ?>

                    <a href="<?php echo e(route('admin.messages.index')); ?>" class="px-4 py-2 border rounded-md text-sm">Kembali ke Daftar</a>
                </div>
            </div>
        </div>

        <aside class="bg-white rounded-xl shadow p-6">
            <h3 class="text-lg font-medium text-gray-900 mb-3">Balas Pesan</h3>

            <?php if(session('success')): ?>
                <div class="bg-green-50 border border-green-200 text-green-800 px-3 py-2 rounded mb-3"><?php echo e(session('success')); ?></div>
            <?php endif; ?>
            <?php if(session('error')): ?>
                <div class="bg-red-50 border border-red-200 text-red-800 px-3 py-2 rounded mb-3"><?php echo e(session('error')); ?></div>
            <?php endif; ?>

            <form action="<?php echo e(route('admin.messages.reply', $message)); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="mb-3">
                    <label class="block text-sm font-medium text-gray-700 mb-1">Kepada</label>
                    <input type="email" value="<?php echo e($message->email); ?>" readonly class="w-full px-3 py-2 border rounded bg-gray-50 text-sm" />
                </div>

                <div class="mb-3">
                    <label for="reply_message" class="block text-sm font-medium text-gray-700 mb-1">Pesan Balasan</label>
                    <textarea id="reply_message" name="reply_message" rows="6" required class="w-full px-3 py-2 border rounded text-sm <?php if($errors->has('reply_message')): ?> border-red-500 <?php endif; ?>"><?php echo e(old('reply_message')); ?></textarea>
                    <?php if($errors->has('reply_message')): ?>
                        <p class="text-red-500 text-sm mt-1"><?php echo e($errors->first('reply_message')); ?></p>
                    <?php endif; ?>
                </div>

                <div class="flex items-center gap-2">
                    <button type="submit" class="inline-flex items-center px-4 py-2 bg-indigo-600 text-white rounded-md shadow-sm hover:bg-indigo-700">Kirim Balasan</button>
                    <a href="mailto:<?php echo e($message->email); ?>" class="inline-flex items-center px-4 py-2 border rounded-md text-sm text-white bg-green-700">Buka di Email</a>
                </div>

                <p class="mt-3 text-xs text-gray-500">Balasan akan dikirimkan melalui mailer yang dikonfigurasi di `.env`.</p>
            </form>
        </aside>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\alamak\resources\views/admin/messages/show.blade.php ENDPATH**/ ?>