<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo $__env->yieldContent('title', 'BALAI BESAR STANDARDISASI DAN PELAYANAN JASA INDUSTRI KULIT, PLASTIK, DAN KARET'); ?></title>
    <meta name="description"
        content="<?php echo $__env->yieldContent('description', 'Menyediakan layanan standardisasi dan pelayanan jasa industri berkualitas tinggi untuk mendukung perkembangan industri nasional'); ?>">

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
        [x-cloak] {
            display: none !important;
        }

        /* Custom Tabs Component - Modern Soft Design */
        .custom-tabs {
            width: 100%;
            margin: 28px 0;
            font-family: 'Inter', system-ui, -apple-system, sans-serif;
        }

        .custom-tabs .tab-buttons {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            background: transparent;
            padding: 0;
            margin-bottom: 20px;
        }

        .custom-tabs .tab-btn {
            padding: 14px 28px;
            cursor: pointer;
            border: none;
            background: #f1f5f9;
            color: #64748b;
            font-weight: 500;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            font-size: 14px;
            border-radius: 50px;
            position: relative;
            letter-spacing: 0.01em;
        }

        .custom-tabs .tab-btn:hover {
            color: #3b82f6;
            background: #e0e7ff;
            transform: translateY(-2px);
        }

        .custom-tabs .tab-btn.active {
            color: white;
            background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%);
            box-shadow: 0 4px 15px rgba(59, 130, 246, 0.35);
            font-weight: 600;
            transform: translateY(-2px);
        }

        .custom-tabs .tab-panel {
            display: none;
            padding: 32px;
            background: white;
            border: none;
            border-radius: 20px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            animation: slideUp 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .custom-tabs .tab-panel.active {
            display: block;
        }

        .custom-tabs .tab-panel h3 {
            margin: 0 0 16px 0;
            color: #1e293b;
            font-size: 20px;
            font-weight: 700;
        }

        .custom-tabs .tab-panel p {
            margin: 0;
            color: #64748b;
            line-height: 1.75;
            font-size: 15px;
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Custom Accordion Component - Modern Soft Design */
        .custom-accordion {
            width: 100%;
            margin: 28px 0;
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .custom-accordion .accordion-item {
            border: none;
            background: white;
            border-radius: 16px;
            box-shadow: 0 2px 12px rgba(0, 0, 0, 0.06);
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .custom-accordion .accordion-item:hover {
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }

        .custom-accordion .accordion-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 100%;
            padding: 20px 24px;
            padding-right: 60px;
            background: white;
            cursor: pointer;
            font-weight: 600;
            color: #334155;
            border: none;
            text-align: left;
            font-size: 15px;
            transition: all 0.3s ease;
            position: relative;
        }

        .custom-accordion .accordion-header:hover {
            color: #3b82f6;
        }

        .custom-accordion .accordion-header::after {
            content: "";
            position: absolute;
            right: 24px;
            top: 50%;
            width: 10px;
            height: 10px;
            border-right: 2.5px solid #94a3b8;
            border-bottom: 2.5px solid #94a3b8;
            transform: translateY(-70%) rotate(45deg);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .custom-accordion .accordion-header:hover::after {
            border-color: #3b82f6;
        }

        .custom-accordion .accordion-header.active::after {
            transform: translateY(-30%) rotate(-135deg);
            border-color: #3b82f6;
        }

        .custom-accordion .accordion-header.active {
            color: #3b82f6;
            background: linear-gradient(to right, #eff6ff, #ffffff);
        }

        .custom-accordion .accordion-header span,
        .custom-accordion .accordion-header font,
        .custom-accordion .accordion-header strong,
        .custom-accordion .accordion-header b {
            pointer-events: none;
        }

        .custom-accordion .accordion-header.active span,
        .custom-accordion .accordion-header.active font {
            color: inherit !important;
        }

        .custom-accordion .accordion-body {
            max-height: 0;
            overflow: hidden;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            padding: 0 24px;
            background: #f8fafc;
        }

        .custom-accordion .accordion-body.active {
            max-height: 2000px;
            padding: 20px 24px 24px;
        }

        .custom-accordion .accordion-body p {
            margin: 0;
            color: #64748b;
            line-height: 1.75;
            font-size: 15px;
        }

        /* Responsive */
        @media (max-width: 640px) {
            .custom-tabs .tab-buttons {
                flex-direction: column;
                gap: 2px;
            }

            .custom-tabs .tab-btn {
                text-align: center;
            }
        }

        /* Override prose styles for custom components */
        .prose .custom-tabs,
        .prose .custom-accordion {
            all: initial;
            display: block;
            width: 100%;
            font-family: 'Inter', system-ui, -apple-system, sans-serif;
            margin: 28px 0 !important;
        }

        .prose .custom-tabs * {
            all: revert;
        }

        .prose .custom-accordion * {
            all: revert;
        }

        .prose .custom-tabs .tab-buttons {
            display: flex !important;
            flex-wrap: wrap !important;
            gap: 8px !important;
            background: transparent !important;
            padding: 0 !important;
            margin-bottom: 20px !important;
            list-style: none !important;
        }

        .prose .custom-tabs .tab-btn {
            padding: 14px 28px !important;
            cursor: pointer !important;
            border: none !important;
            background: #f1f5f9 !important;
            color: #64748b !important;
            font-weight: 500 !important;
            font-size: 14px !important;
            border-radius: 50px !important;
            text-decoration: none !important;
            margin: 0 !important;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1) !important;
        }

        .prose .custom-tabs .tab-btn:hover {
            color: #3b82f6 !important;
            background: #e0e7ff !important;
            transform: translateY(-2px) !important;
        }

        .prose .custom-tabs .tab-btn.active {
            color: white !important;
            background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%) !important;
            box-shadow: 0 4px 15px rgba(59, 130, 246, 0.35) !important;
            font-weight: 600 !important;
            transform: translateY(-2px) !important;
        }

        .prose .custom-tabs .tab-panel {
            display: none !important;
            padding: 32px !important;
            background: white !important;
            border: none !important;
            border-radius: 20px !important;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08) !important;
        }

        .prose .custom-tabs .tab-panel.active {
            display: block !important;
        }

        .prose .custom-tabs .tab-panel h3 {
            margin: 0 0 16px 0 !important;
            color: #1e293b !important;
            font-size: 20px !important;
            font-weight: 700 !important;
        }

        .prose .custom-tabs .tab-panel p {
            margin: 0 !important;
            color: #64748b !important;
            line-height: 1.75 !important;
        }

        .prose .custom-accordion {
            display: flex !important;
            flex-direction: column !important;
            gap: 12px !important;
        }

        .prose .custom-accordion .accordion-item {
            border: none !important;
            background: white !important;
            border-radius: 16px !important;
            box-shadow: 0 2px 12px rgba(0, 0, 0, 0.06) !important;
            overflow: hidden !important;
        }

        .prose .custom-accordion .accordion-header {
            display: flex !important;
            width: 100% !important;
            padding: 20px 24px !important;
            padding-right: 60px !important;
            background: white !important;
            cursor: pointer !important;
            font-weight: 600 !important;
            color: #334155 !important;
            border: none !important;
            text-align: left !important;
            position: relative !important;
        }

        .prose .custom-accordion .accordion-header::after {
            content: "" !important;
            position: absolute !important;
            right: 24px !important;
            top: 50% !important;
            width: 10px !important;
            height: 10px !important;
            border-right: 2.5px solid #94a3b8 !important;
            border-bottom: 2.5px solid #94a3b8 !important;
            transform: translateY(-70%) rotate(45deg) !important;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1) !important;
        }

        .prose .custom-accordion .accordion-header.active::after {
            transform: translateY(-30%) rotate(-135deg) !important;
            border-color: #3b82f6 !important;
        }

        .prose .custom-accordion .accordion-header.active {
            color: #3b82f6 !important;
        }

        .prose .custom-accordion .accordion-header span,
        .prose .custom-accordion .accordion-header font,
        .prose .custom-accordion .accordion-header strong,
        .prose .custom-accordion .accordion-header b {
            pointer-events: none !important;
        }

        .prose .custom-accordion .accordion-header.active span,
        .prose .custom-accordion .accordion-header.active font {
            color: inherit !important;
        }

        .prose .custom-accordion .accordion-body {
            max-height: 0 !important;
            overflow: hidden !important;
            padding: 0 24px !important;
            background: #f8fafc !important;
        }

        .prose .custom-accordion .accordion-body.active {
            max-height: 2000px !important;
            padding: 20px 24px 24px !important;
        }

        /* General Table Styling - Modern Design with Borders */
        .prose table,
        .custom-tabs table,
        .custom-accordion table {
            width: 100% !important;
            border-collapse: collapse !important;
            margin: 20px 0 !important;
            background: white !important;
            border-radius: 12px !important;
            overflow: hidden !important;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08) !important;
            border: 1px solid #e2e8f0 !important;
        }

        .prose table thead,
        .custom-tabs table thead,
        .custom-accordion table thead {
            background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%) !important;
        }

        .prose table thead tr,
        .custom-tabs table thead tr,
        .custom-accordion table thead tr {
            background: transparent !important;
        }

        .prose table th,
        .custom-tabs table th,
        .custom-accordion table th {
            padding: 14px 16px !important;
            text-align: left !important;
            font-weight: 600 !important;
            color: white !important;
            font-size: 14px !important;
            border: 1px solid rgba(255, 255, 255, 0.2) !important;
            border-top: none !important;
            background: transparent !important;
        }

        .prose table th:first-child,
        .custom-tabs table th:first-child,
        .custom-accordion table th:first-child {
            border-left: none !important;
        }

        .prose table th:last-child,
        .custom-tabs table th:last-child,
        .custom-accordion table th:last-child {
            border-right: none !important;
        }

        .prose table td,
        .custom-tabs table td,
        .custom-accordion table td {
            padding: 14px 16px !important;
            border: 1px solid #e2e8f0 !important;
            color: #475569 !important;
            font-size: 14px !important;
            background: transparent !important;
        }

        .prose table tbody tr,
        .custom-tabs table tbody tr,
        .custom-accordion table tbody tr {
            background: white !important;
            transition: background 0.2s ease !important;
        }

        .prose table tbody tr:nth-child(even),
        .custom-tabs table tbody tr:nth-child(even),
        .custom-accordion table tbody tr:nth-child(even) {
            background: #f8fafc !important;
        }

        .prose table tbody tr:hover,
        .custom-tabs table tbody tr:hover,
        .custom-accordion table tbody tr:hover {
            background: #eff6ff !important;
        }

        /* Table without thead - first row as header */
        .prose table tr:first-child td,
        .custom-tabs table tr:first-child td,
        .custom-accordion table tr:first-child td {
            background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%) !important;
            color: white !important;
            font-weight: 600 !important;
            border: 1px solid rgba(255, 255, 255, 0.2) !important;
            border-top: none !important;
        }

        .prose table tr:first-child td:first-child,
        .custom-tabs table tr:first-child td:first-child,
        .custom-accordion table tr:first-child td:first-child {
            border-left: none !important;
        }

        .prose table tr:first-child td:last-child,
        .custom-tabs table tr:first-child td:last-child,
        .custom-accordion table tr:first-child td:last-child {
            border-right: none !important;
        }

        .prose table tr:first-child~tr td,
        .custom-tabs table tr:first-child~tr td,
        .custom-accordion table tr:first-child~tr td {
            background: transparent !important;
            color: #475569 !important;
            font-weight: normal !important;
            border: 1px solid #e2e8f0 !important;
        }

        .prose table tr:first-child~tr:nth-child(even) td,
        .custom-tabs table tr:first-child~tr:nth-child(even) td,
        .custom-accordion table tr:first-child~tr:nth-child(even) td {
            background: #f8fafc !important;
        }

        .prose table tr:first-child~tr:hover td,
        .custom-tabs table tr:first-child~tr:hover td,
        .custom-accordion table tr:first-child~tr:hover td {
            background: #eff6ff !important;
        }

        /* Override for tables with thead */
        .prose table thead+tbody tr:first-child td,
        .custom-tabs table thead+tbody tr:first-child td,
        .custom-accordion table thead+tbody tr:first-child td {
            background: white !important;
            color: #475569 !important;
            font-weight: normal !important;
            border: 1px solid #e2e8f0 !important;
        }
    </style>
</head>

<body class="font-sans antialiased bg-gray-50" <?php if(isset($page)): ?> data-page-slug="<?php echo e($page->slug); ?>" <?php endif; ?>>
    <div id="app">
        <!-- Navigation -->
        <?php echo $__env->make('partials.navbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

        <!-- Main Content -->
        <main>
            <?php echo $__env->yieldContent('content'); ?>
        </main>

        <!-- Footer -->
        <?php echo $__env->make('partials.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

        <!-- WhatsApp Button Component -->
        <?php if (isset($component)) { $__componentOriginal4378b2eccec4e8470841be6441e66765 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4378b2eccec4e8470841be6441e66765 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.whatsapp-button','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('whatsapp-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4378b2eccec4e8470841be6441e66765)): ?>
<?php $attributes = $__attributesOriginal4378b2eccec4e8470841be6441e66765; ?>
<?php unset($__attributesOriginal4378b2eccec4e8470841be6441e66765); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4378b2eccec4e8470841be6441e66765)): ?>
<?php $component = $__componentOriginal4378b2eccec4e8470841be6441e66765; ?>
<?php unset($__componentOriginal4378b2eccec4e8470841be6441e66765); ?>
<?php endif; ?>
    </div>

    <!-- Scripts -->
    <script>
        // Mobile menu toggle
        function toggleMobileMenu() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        }

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    </script>

    <?php echo $__env->yieldPushContent('scripts'); ?>

    <!-- Custom Tabs & Accordion Initialization -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Initialize all custom tabs
            document.querySelectorAll('.custom-tabs').forEach(function (tabContainer) {
                const buttons = tabContainer.querySelectorAll('.tab-btn');
                const panels = tabContainer.querySelectorAll('.tab-panel');

                buttons.forEach(function (btn, index) {
                    btn.addEventListener('click', function () {
                        // Remove active from all buttons and panels
                        buttons.forEach(b => b.classList.remove('active'));
                        panels.forEach(p => p.classList.remove('active'));

                        // Add active to clicked button and corresponding panel
                        btn.classList.add('active');
                        if (panels[index]) {
                            panels[index].classList.add('active');
                        }
                    });
                });

                // Activate first tab by default if none active
                if (!tabContainer.querySelector('.tab-btn.active') && buttons.length > 0) {
                    buttons[0].classList.add('active');
                    if (panels[0]) panels[0].classList.add('active');
                }
            });

            // Initialize all custom accordions with event delegation
            document.querySelectorAll('.custom-accordion').forEach(function (accordion) {
                accordion.addEventListener('click', function (e) {
                    // Find the accordion-header (might be the target or a parent)
                    let header = e.target.closest('.accordion-header');
                    if (!header) return;

                    const allHeaders = accordion.querySelectorAll('.accordion-header');
                    const allBodies = accordion.querySelectorAll('.accordion-body');
                    const body = header.nextElementSibling;
                    const isActive = header.classList.contains('active');

                    // Close all other accordions in this group
                    allHeaders.forEach(function (h) {
                        h.classList.remove('active');
                    });
                    allBodies.forEach(function (b) {
                        b.classList.remove('active');
                    });

                    // If it wasn't active, open it
                    if (!isActive) {
                        header.classList.add('active');
                        if (body && body.classList.contains('accordion-body')) {
                            body.classList.add('active');
                        }
                    }
                });
            });
        });
    </script>

    <!-- Accessibility Widget (Disabilitas) - Load at end of body -->
    <script type="text/javascript" src="https://web.animemusic.us/widget_disabilitas.js"
        api-key-resvoice="bzbTAKXD"></script>
</body>

</html><?php /**PATH C:\alamak\resources\views/layouts/app.blade.php ENDPATH**/ ?>