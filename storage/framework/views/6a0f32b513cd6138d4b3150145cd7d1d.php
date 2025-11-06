<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo $__env->yieldContent('title', 'Admin Dashboard - BALAI BESAR STANDARDISASI'); ?></title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Alpine.js -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        [x-cloak] { display: none !important; }
    </style>
</head>
<body class="font-sans antialiased bg-gray-100" x-data="{ sidebarOpen: false }">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <div class="bg-gray-800 text-white w-64 fixed inset-y-0 left-0 z-50 transform transition-transform duration-300 ease-in-out lg:translate-x-0 lg:static lg:inset-0" 
             :class="{ '-translate-x-full': !sidebarOpen, 'translate-x-0': sidebarOpen }">
            <div class="flex items-center justify-center h-16 bg-gray-900">
                <h1 class="text-xl font-bold">Admin Panel</h1>
            </div>
            
            <nav class="mt-8">
                <div class="px-4 space-y-2">
                    <a href="<?php echo e(route('admin.dashboard')); ?>" 
                       class="flex items-center px-4 py-2 text-sm font-medium rounded-lg <?php echo e(request()->routeIs('admin.dashboard') ? 'bg-gray-700 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white'); ?>">
                        <i class="fas fa-tachometer-alt mr-3"></i>
                        Dashboard
                    </a>
                    
                    <a href="<?php echo e(route('admin.services.index')); ?>" 
                       class="flex items-center px-4 py-2 text-sm font-medium rounded-lg <?php echo e(request()->routeIs('admin.services.*') ? 'bg-gray-700 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white'); ?>">
                        <i class="fas fa-cogs mr-3"></i>
                        Layanan
                    </a>
                    
                    <a href="<?php echo e(route('admin.news.index')); ?>" 
                       class="flex items-center px-4 py-2 text-sm font-medium rounded-lg <?php echo e(request()->routeIs('admin.news.*') ? 'bg-gray-700 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white'); ?>">
                        <i class="fas fa-newspaper mr-3"></i>
                        Berita
                    </a>
                    
                    <a href="<?php echo e(route('admin.testimonials.index')); ?>" 
                       class="flex items-center px-4 py-2 text-sm font-medium rounded-lg <?php echo e(request()->routeIs('admin.testimonials.*') ? 'bg-gray-700 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white'); ?>">
                        <i class="fas fa-quote-left mr-3"></i>
                        Testimoni
                    </a>
                    
                    <a href="<?php echo e(route('admin.partners.index')); ?>" 
                       class="flex items-center px-4 py-2 text-sm font-medium rounded-lg <?php echo e(request()->routeIs('admin.partners.*') ? 'bg-gray-700 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white'); ?>">
                        <i class="fas fa-handshake mr-3"></i>
                        Partner
                    </a>
                    
                    <a href="<?php echo e(route('admin.dynamic-pages.index')); ?>" 
                       class="flex items-center px-4 py-2 text-sm font-medium rounded-lg <?php echo e(request()->routeIs('admin.dynamic-pages.*') ? 'bg-gray-700 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white'); ?>">
                        <i class="fas fa-file-alt mr-3"></i>
                        Halaman Dinamis
                    </a>
                    
                    <a href="<?php echo e(route('admin.settings.index')); ?>" 
                       class="flex items-center px-4 py-2 text-sm font-medium rounded-lg <?php echo e(request()->routeIs('admin.settings.*') ? 'bg-gray-700 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white'); ?>">
                        <i class="fas fa-cog mr-3"></i>
                        Pengaturan
                    </a>
                </div>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col overflow-hidden lg:ml-0">
            <!-- Top Navigation -->
            <header class="bg-white shadow-sm border-b border-gray-200">
                <div class="flex items-center justify-between px-4 py-4">
                    <div class="flex items-center">
                        <button @click="sidebarOpen = !sidebarOpen" 
                                class="text-gray-500 hover:text-gray-600 lg:hidden">
                            <i class="fas fa-bars text-xl"></i>
                        </button>
                        <h2 class="ml-4 text-2xl font-semibold text-gray-900"><?php echo $__env->yieldContent('page-title', 'Dashboard'); ?></h2>
                    </div>
                    
                    <div class="flex items-center space-x-4">
                        <a href="<?php echo e(route('home')); ?>" 
                           class="text-gray-500 hover:text-gray-700">
                            <i class="fas fa-external-link-alt"></i>
                            <span class="ml-1">Lihat Website</span>
                        </a>
                        
                        <div class="relative" x-data="{ open: false }">
                            <button @click="open = !open" 
                                    class="flex items-center text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                <span class="sr-only">Open user menu</span>
                                <div class="h-8 w-8 rounded-full bg-gray-300 flex items-center justify-center">
                                    <i class="fas fa-user text-gray-600"></i>
                                </div>
                            </button>
                            
                            <div x-show="open" 
                                 x-cloak
                                 @click.away="open = false"
                                 class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none">
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Profil</a>
                                <form method="POST" action="<?php echo e(route('logout')); ?>">
                                    <?php echo csrf_field(); ?>
                                    <button type="submit" class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                        Logout
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Page Content -->
            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-100">
                <div class="container mx-auto px-6 py-8">
                    <?php if(session('success')): ?>
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
                        <?php echo e(session('success')); ?>

                    </div>
                    <?php endif; ?>

                    <?php if(session('error')): ?>
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6">
                        <?php echo e(session('error')); ?>

                    </div>
                    <?php endif; ?>

                    <?php echo $__env->yieldContent('content'); ?>
                </div>
            </main>
        </div>
    </div>

    <!-- Overlay for mobile -->
    <div x-show="sidebarOpen" 
         x-cloak
         @click="sidebarOpen = false"
         class="fixed inset-0 z-40 bg-gray-600 bg-opacity-75 lg:hidden"></div>
</body>
</html>
<?php /**PATH D:\BBKKP\resources\views/layouts/admin.blade.php ENDPATH**/ ?>