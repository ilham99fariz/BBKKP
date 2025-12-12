@extends('layouts.app')

@section('title', $page->title)

@section('content')
    <div class="w-full py-8">
        <div class="max-w-7xl mx-auto px-4 mb-6">
            <h1 class="text-3xl font-bold">{{ $page->title }}</h1>
        </div>
        <div class="w-full">
            {!! $page->content !!}
        </div>
    </div>
@endsection

@push('styles')
<style>
    /* Hapus semua batasan prose */
    .prose, .prose-lg {
        max-width: none !important;
        width: 100% !important;
    }

    /* Iframe Google Form - Full Size */
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
</style>
@endpush

@push('scripts')
<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Fix Google Forms iframe - remove restrictive sandbox attributes
        const iframes = document.querySelectorAll('.prose iframe');
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
    });
</script>
@endpush