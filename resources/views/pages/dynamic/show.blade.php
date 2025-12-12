@extends('layouts.app')

@section('title', $page->title)

@section('content')
    <!-- Hero Section -->
    @if($page->hero_image || $page->hero_title || $page->hero_subtitle)
        <section class="relative text-white py-20 min-h-[400px] flex items-center">
            @if($page->hero_image)
                <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('{{ Storage::url($page->hero_image) }}')"></div>
                <!-- Overlay untuk readability teks -->
                <div class="absolute inset-0 bg-black bg-opacity-40"></div>
            @else
                <div class="absolute inset-0 bg-gradient-to-r from-blue-600 to-blue-800"></div>
            @endif
            <div class="container mx-auto px-4 relative z-10">
                <div class="max-w-3xl">
                    @if($page->hero_title)
                        <h1 class="text-4xl md:text-5xl font-bold mb-4 drop-shadow-lg">{{ $page->hero_title }}</h1>
                    @else
                        <h1 class="text-4xl md:text-5xl font-bold mb-4 drop-shadow-lg">{{ $page->title }}</h1>
                    @endif
                    @if($page->hero_subtitle)
                        <p class="text-xl drop-shadow-md">{{ $page->hero_subtitle }}</p>
                    @endif
                </div>
            </div>
        </section>
    @else
        <div class="bg-gradient-to-r from-blue-600 to-blue-800 text-white py-12">
            <div class="container mx-auto px-4">
                <h1 class="text-4xl font-bold">{{ $page->title }}</h1>
            </div>
        </div>
    @endif

    <!-- Main Content -->
    <section class="py-12">
        <div class="w-full">
            <div class="max-w-7xl mx-auto px-4 mb-8">
                @if (!$page->hero_title)
                    <h1 class="text-3xl font-bold text-gray-900">{{ $page->title }}</h1>
                @endif
            </div>
            <div id="accordion-container" class="w-full">
                {!! $page->content !!}
            </div>
        </div>
    </section>
@endsection

@push('styles')
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

        .prose, .prose-lg {
            max-width: none !important;
            width: 100% !important;
        }

        iframe {
            width: 98vw !important;
            max-width: 1920px !important;
            min-height: 2800px !important;
            height: 2800px !important;
            border: none !important;
            margin: 30px auto !important;
            display: block !important;
            transform: scale(1.0);
            transform-origin: top center;
        }

        /* Desktop besar */
        @media (min-width: 1920px) {
            iframe {
                width: 95vw !important;
                max-width: 2400px !important;
                min-height: 3200px !important;
                height: 3200px !important;
            }
        }

        /* Desktop sedang */
        @media (min-width: 1440px) and (max-width: 1919px) {
            iframe {
                width: 96vw !important;
                max-width: 1800px !important;
                min-height: 3000px !important;
                height: 3000px !important;
            }
        }

        /* Laptop */
        @media (min-width: 1024px) and (max-width: 1439px) {
            iframe {
                width: 95vw !important;
                max-width: 1400px !important;
                min-height: 2800px !important;
                height: 2800px !important;
            }
        }

        /* Tablet */
        @media (max-width: 1023px) {
            iframe {
                width: 96vw !important;
                min-height: 3200px !important;
                height: 3200px !important;
            }
        }

        /* Mobile */
        @media (max-width: 768px) {
            iframe {
                width: 98vw !important;
                min-height: 3800px !important;
                height: 3800px !important;
            }
        }

        @media (max-width: 480px) {
            iframe {
                width: 99vw !important;
                min-height: 4500px !important;
                height: 4500px !important;
            }
        }

        /* Accordion Styles - Override prose if needed */
        #accordion-container .accordion .ac-item {
            border: 1px solid #ddd;
            margin-bottom: 10px;
            border-radius: 6px;
            overflow: hidden;
        }

        #accordion-container .accordion .ac-item h5 {
            background: #f5f5f5;
            padding: 12px;
            cursor: pointer;
            margin: 0 !important;
            font-size: 1.1rem;
            transition: background 0.3s;
        }

        #accordion-container .accordion .ac-item h5:hover {
            background: #e8e8e8;
        }

        #accordion-container .accordion .ac-item .ac-content {
            display: none;
            padding: 15px;
            background: white;
        }

        #accordion-container .accordion .ac-item.active .ac-content {
            display: block;
        }
    </style>
@endpush

@push('scripts')
<script>
    // Initialize accordion for dynamic content
    document.addEventListener("DOMContentLoaded", function () {
        const accordionContainer = document.getElementById('accordion-container');
        
        if (accordionContainer) {
            // Use event delegation to handle dynamically loaded content
            accordionContainer.addEventListener('click', function(e) {
                // Check if clicked element is an h5 inside ac-item
                const h5 = e.target.closest('.accordion .ac-item h5');
                
                if (h5) {
                    const acItem = h5.parentElement;
                    acItem.classList.toggle('active');
                }
            });

            // Fix Google Forms iframe - remove restrictive sandbox attributes
            const iframes = accordionContainer.querySelectorAll('iframe');
            iframes.forEach(function(iframe) {
                // Remove sandbox attribute if exists
                if (iframe.hasAttribute('sandbox')) {
                    iframe.removeAttribute('sandbox');
                }
                
                // Ensure Google Forms can run JavaScript
                if (iframe.src && iframe.src.includes('docs.google.com/forms')) {
                    // Add allow attributes for better compatibility
                    iframe.setAttribute('allow', 'accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture');
                    
                    // Ensure embedded parameter exists
                    if (!iframe.src.includes('embedded=true')) {
                        const separator = iframe.src.includes('?') ? '&' : '?';
                        iframe.src = iframe.src + separator + 'embedded=true';
                    }
                }
            });
        }
    });
</script>
@endpush
