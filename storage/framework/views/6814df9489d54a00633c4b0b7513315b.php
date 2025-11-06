

<?php $__env->startSection('title', 'Beranda - BALAI BESAR STANDARDISASI DAN PELAYANAN JASA INDUSTRI KULIT, PLASTIK, DAN KARET'); ?>
<?php $__env->startSection('description',
    'Menyediakan layanan standardisasi dan pelayanan jasa industri berkualitas tinggi untuk
    mendukung perkembangan industri nasional'); ?>

<?php $__env->startSection('content'); ?>
    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-blue-600 to-blue-800 text-white py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">
                    <?php echo e($settings['hero_title'] ?? 'BALAI BESAR STANDARDISASI DAN PELAYANAN JASA INDUSTRI KULIT, PLASTIK, DAN KARET'); ?>

                </h1>
                <p class="text-xl md:text-2xl mb-8 text-blue-100 max-w-4xl mx-auto">
                    <?php echo e($settings['hero_subtitle'] ?? 'Menyediakan layanan standardisasi dan pelayanan jasa industri berkualitas tinggi untuk mendukung perkembangan industri nasional'); ?>

                </p>
                <p class="text-lg mb-10 text-blue-200 max-w-3xl mx-auto">
                    <?php echo e($settings['hero_description'] ?? 'Kami berkomitmen untuk memberikan pelayanan terbaik dalam bidang standardisasi dan pelayanan jasa industri kulit, plastik, dan karet dengan standar internasional.'); ?>

                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="<?php echo e(route('services.index')); ?>"
                        class="bg-white text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition-colors duration-200">
                        Lihat Layanan Kami
                    </a>
                    <a href="<?php echo e(route('contact.show')); ?>"
                        class="border-2 border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-blue-600 transition-colors duration-200">
                        Hubungi Kami
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                    <?php echo e($settings['about_title'] ?? 'Tentang Kami'); ?>

                </h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    <?php echo e($settings['about_description'] ?? 'BALAI BESAR STANDARDISASI DAN PELAYANAN JASA INDUSTRI KULIT, PLASTIK, DAN KARET adalah lembaga yang berdedikasi untuk memberikan pelayanan terbaik dalam bidang standardisasi dan pelayanan jasa industri.'); ?>

                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center">
                    <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-award text-blue-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Berpengalaman</h3>
                    <p class="text-gray-600">Tim ahli berpengalaman dalam bidang standardisasi industri</p>
                </div>
                <div class="text-center">
                    <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-certificate text-blue-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Bersertifikat</h3>
                    <p class="text-gray-600">Memiliki sertifikasi internasional untuk kualitas layanan</p>
                </div>
                <div class="text-center">
                    <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-handshake text-blue-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Terpercaya</h3>
                    <p class="text-gray-600">Dipercaya oleh berbagai perusahaan industri terkemuka</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                    <?php echo e($settings['services_title'] ?? 'Layanan Kami'); ?>

                </h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    <?php echo e($settings['services_subtitle'] ?? 'Kami menyediakan berbagai layanan berkualitas tinggi untuk mendukung industri Anda'); ?>

                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="bg-white rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow duration-300">
                        <div class="text-center">
                            <?php if($service->icon): ?>
                                <div
                                    class="w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4 overflow-hidden">
                                    <img src="<?php echo e(Storage::url($service->icon)); ?>" alt="<?php echo e($service->title); ?>"
                                        class="w-full h-full object-cover">
                                </div>
                            <?php else: ?>
                                <div
                                    class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                                    <i class="fas fa-cog text-blue-600 text-2xl"></i>
                                </div>
                            <?php endif; ?>
                            <h3 class="text-xl font-semibold text-gray-900 mb-3 line-clamp-2"><?php echo e($service->title); ?></h3>
                            <p class="text-gray-600 mb-4 line-clamp-3"><?php echo e(Str::limit($service->description, 120)); ?></p>
                            <a href="<?php echo e(route('services.show', $service)); ?>"
                                class="text-blue-600 font-semibold hover:text-blue-700 transition-colors duration-200">
                                Pelajari Lebih Lanjut <i class="fas fa-arrow-right ml-1"></i>
                            </a>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            <div class="text-center mt-12">
                <a href="<?php echo e(route('services.index')); ?>"
                    class="bg-blue-600 text-white px-8 py-3 rounded-lg font-semibold hover:bg-blue-700 transition-colors duration-200">
                    Lihat Semua Layanan
                </a>
            </div>
        </div>
    </section>

    <!-- News Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                    <?php echo e($settings['news_title'] ?? 'Berita & Update'); ?>

                </h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    <?php echo e($settings['news_subtitle'] ?? 'Ikuti perkembangan terbaru dari kami'); ?>

                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div
                        class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                        <?php if($article->image): ?>
                            <img src="<?php echo e(Storage::url($article->image)); ?>" alt="<?php echo e($article->title); ?>"
                                class="w-full h-48 object-cover">
                        <?php else: ?>
                            <div class="w-full h-48 bg-gray-200 flex items-center justify-center">
                                <i class="fas fa-newspaper text-gray-400 text-4xl"></i>
                            </div>
                        <?php endif; ?>
                        <div class="p-6">
                            <div class="text-sm text-gray-500 mb-2">
                                <?php echo e($article->published_at->format('d M Y')); ?> • <?php echo e($article->author); ?>

                            </div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-3"><?php echo e($article->title); ?></h3>
                            <p class="text-gray-600 mb-4"><?php echo e($article->excerpt); ?></p>
                            <a href="<?php echo e(route('news.show', $article)); ?>"
                                class="text-blue-600 font-semibold hover:text-blue-700 transition-colors duration-200">
                                Baca Selengkapnya <i class="fas fa-arrow-right ml-1"></i>
                            </a>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            <div class="text-center mt-12">
                <a href="<?php echo e(route('news.index')); ?>"
                    class="bg-blue-600 text-white px-8 py-3 rounded-lg font-semibold hover:bg-blue-700 transition-colors duration-200">
                    Lihat Semua Berita
                </a>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                    <?php echo e($settings['testimonials_title'] ?? 'Testimoni Klien'); ?>

                </h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    <?php echo e($settings['testimonials_subtitle'] ?? 'Apa yang dikatakan klien tentang layanan kami'); ?>

                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php $__currentLoopData = $testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimonial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="bg-white rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow duration-300">
                        <div class="flex items-center mb-4">
                            <?php for($i = 1; $i <= 5; $i++): ?>
                                <i class="fas fa-star text-yellow-400"></i>
                            <?php endfor; ?>
                        </div>
                        <p class="text-gray-600 mb-4 italic break-words overflow-hidden">"<?php echo e($testimonial->content); ?>"</p>
                        <div class="flex items-center">
                            <?php if($testimonial->image): ?>
                                <img src="<?php echo e(Storage::url($testimonial->image)); ?>" alt="<?php echo e($testimonial->client_name); ?>"
                                    class="w-12 h-12 rounded-full mr-4">
                            <?php else: ?>
                                <div class="w-12 h-12 bg-gray-300 rounded-full flex items-center justify-center mr-4">
                                    <i class="fas fa-user text-gray-600"></i>
                                </div>
                            <?php endif; ?>
                            <div>
                                <h4 class="font-semibold text-gray-900"><?php echo e($testimonial->client_name); ?></h4>
                                <?php if($testimonial->client_company): ?>
                                    <p class="text-sm text-gray-600"><?php echo e($testimonial->client_company); ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            <!-- Testimoni Form untuk User -->
            <div class="mt-16 bg-white rounded-lg shadow-lg p-8">
                <div class="text-center mb-8">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Bagikan Pengalaman Anda</h3>
                    <p class="text-gray-600">Berikan testimoni tentang layanan yang telah Anda terima</p>
                </div>

                <form action="<?php echo e(route('testimonials.submit')); ?>" method="POST" enctype="multipart/form-data"
                    class="max-w-2xl mx-auto">
                    <?php echo csrf_field(); ?>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Nama -->
                        <div>
                            <label for="client_name" class="block text-sm font-medium text-gray-700 mb-2">
                                Nama Lengkap <span class="text-red-500">*</span>
                            </label>
                            <input type="text" name="client_name" id="client_name" value="<?php echo e(old('client_name')); ?>"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent <?php $__errorArgs = ['client_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                required>
                            <?php $__errorArgs = ['client_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <p class="mt-1 text-sm text-red-600"><?php echo e($message); ?></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <!-- Perusahaan -->
                        <div>
                            <label for="client_company" class="block text-sm font-medium text-gray-700 mb-2">
                                Perusahaan/Instansi
                            </label>
                            <input type="text" name="client_company" id="client_company"
                                value="<?php echo e(old('client_company')); ?>"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent <?php $__errorArgs = ['client_company'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                            <?php $__errorArgs = ['client_company'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <p class="mt-1 text-sm text-red-600"><?php echo e($message); ?></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>

                    <!-- Testimoni -->
                    <div class="mt-6">
                        <label for="content" class="block text-sm font-medium text-gray-700 mb-2">
                            Testimoni <span class="text-red-500">*</span>
                        </label>
                        <textarea name="content" id="content" rows="4"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent <?php $__errorArgs = ['content'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                            placeholder="Ceritakan pengalaman Anda menggunakan layanan kami..." required><?php echo e(old('content')); ?></textarea>
                        <?php $__errorArgs = ['content'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p class="mt-1 text-sm text-red-600"><?php echo e($message); ?></p>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <!-- Rating -->
                    <div class="mt-6">
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            Rating <span class="text-red-500">*</span>
                        </label>
                        <div class="flex items-center space-x-2" id="rating-stars">
                            <?php for($i = 1; $i <= 5; $i++): ?>
                                <label class="cursor-pointer">
                                    <input type="radio" name="rating" value="<?php echo e($i); ?>" class="sr-only"
                                        <?php echo e(old('rating') == $i ? 'checked' : ''); ?>>
                                    <i class="fas fa-star text-2xl star-rating hover:text-yellow-400 transition-colors <?php echo e(old('rating') >= $i ? 'text-yellow-400' : 'text-gray-300'); ?>"
                                        data-rating="<?php echo e($i); ?>"></i>
                                </label>
                            <?php endfor; ?>
                        </div>
                        <?php $__errorArgs = ['rating'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p class="mt-1 text-sm text-red-600"><?php echo e($message); ?></p>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <!-- Foto -->
                    <div class="mt-6">
                        <label for="image" class="block text-sm font-medium text-gray-700 mb-2">
                            Foto Profil (Opsional)
                        </label>
                        <input type="file" name="image" id="image" accept="image/*"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                        <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p class="mt-1 text-sm text-red-600"><?php echo e($message); ?></p>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        <p class="mt-1 text-sm text-gray-500">Format: JPEG, PNG, JPG. Maksimal 2MB.</p>
                    </div>

                    <div class="mt-8 text-center">
                        <button type="submit"
                            class="bg-blue-600 text-white px-8 py-3 rounded-lg font-semibold hover:bg-blue-700 transition-colors duration-200">
                            Kirim Testimoni
                        </button>
                        <p class="mt-2 text-sm text-gray-500">
                            Testimoni akan ditinjau terlebih dahulu sebelum ditampilkan
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Partners Section -->
    <?php if($partners->count() > 0): ?>
        <section class="py-20 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Mitra Kami</h2>
                    <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                        Kami bangga bermitra dengan berbagai organisasi terkemuka
                    </p>
                </div>

                <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-8 items-center">
                    <?php $__currentLoopData = $partners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $partner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="text-center">
                            <?php if(!empty($partner->website_url)): ?>
                                <a href="<?php echo e($partner->website_url); ?>" target="_blank" rel="noopener"
                                    aria-label="Kunjungi <?php echo e($partner->name); ?>">
                                    <img src="<?php echo e($partner->logo_url); ?>" alt="<?php echo e($partner->name); ?>"
                                        class="h-16 mx-auto grayscale hover:grayscale-0 transition-all duration-300">
                                </a>
                            <?php else: ?>
                                <img src="<?php echo e($partner->logo_url); ?>" alt="<?php echo e($partner->name); ?>"
                                    class="h-16 mx-auto grayscale hover:grayscale-0 transition-all duration-300">
                            <?php endif; ?>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <!-- CTA Section -->
    <section class="py-20 bg-blue-600 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">
                <?php echo e($settings['contact_title'] ?? 'Hubungi Kami'); ?>

            </h2>
            <p class="text-xl mb-8 text-blue-100">
                <?php echo e($settings['contact_subtitle'] ?? 'Siap membantu kebutuhan industri Anda'); ?>

            </p>
            <a href="<?php echo e(route('contact.show')); ?>"
                class="bg-white text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition-colors duration-200">
                Hubungi Kami Sekarang
            </a>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const stars = document.querySelectorAll('.star-rating');
            const radioInputs = document.querySelectorAll('input[name="rating"]');

            stars.forEach((star, index) => {
                star.addEventListener('click', function() {
                    const rating = parseInt(this.dataset.rating);

                    // Update radio input
                    radioInputs.forEach((input, i) => {
                        input.checked = (i + 1) <= rating;
                    });

                    // Update star colors
                    stars.forEach((s, i) => {
                        if (i < rating) {
                            s.classList.remove('text-gray-300');
                            s.classList.add('text-yellow-400');
                        } else {
                            s.classList.remove('text-yellow-400');
                            s.classList.add('text-gray-300');
                        }
                    });
                });

                star.addEventListener('mouseenter', function() {
                    const rating = parseInt(this.dataset.rating);
                    stars.forEach((s, i) => {
                        if (i < rating) {
                            s.classList.add('text-yellow-400');
                        }
                    });
                });
            });

            // Reset stars on mouse leave
            document.getElementById('rating-stars').addEventListener('mouseleave', function() {
                const checkedInput = document.querySelector('input[name="rating"]:checked');
                const currentRating = checkedInput ? parseInt(checkedInput.value) : 0;

                stars.forEach((s, i) => {
                    if (i < currentRating) {
                        s.classList.remove('text-gray-300');
                        s.classList.add('text-yellow-400');
                    } else {
                        s.classList.remove('text-yellow-400');
                        s.classList.add('text-gray-300');
                    }
                });
            });
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\BBKKP\resources\views/pages/home.blade.php ENDPATH**/ ?>