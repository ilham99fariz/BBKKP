@extends('layouts.app')

@section('title', 'Survey Layanan Pelanggan - BBSPJIKKP')
@section('description', 'Survei layanan pelanggan dan masukan untuk peningkatan layanan')

@section('content')
    <section class="relative">
        <div class="h-56 md:h-72 w-full bg-cover bg-center" style="background-image:url('https://images.unsplash.com/photo-1522202176988-66273c2fd55f?q=80&w=1600&fit=crop');">
            <div class="h-full w-full bg-black/40 flex items-end">
                <div class="max-w-7xl mx-auto w-full px-4 sm:px-6 lg:px-8 py-8">
                    <nav class="text-white/80 text-sm mb-2">
                        <a href="{{ route('home') }}" class="hover:text-white">Home</a>
                        <span class="mx-2">/</span>
                        <a href="{{ route('standards.index') }}" class="hover:text-white">Standar Pelayanan</a>
                        <span class="mx-2">/</span>
                        <span>Survey Layanan Pelanggan</span>
                    </nav>
                    <h1 class="text-3xl md:text-4xl font-bold text-white">Survey Layanan Pelanggan</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="py-12 md:py-16 bg-gray-50">
        <div class="w-full px-4 sm:px-6 lg:px-8 mx-auto">
            <div class="max-w-7xl mx-auto bg-white rounded-lg shadow p-8 mb-8">
                <h2 class="text-xl font-semibold mb-3">Survei dan Masukan Pelanggan</h2>
                <p class="text-gray-600">Halaman survei pelanggan akan tersedia di sini. Untuk sekarang, halaman ini berfungsi sebagai placeholder.</p>
                <p class="mt-4 text-sm text-gray-500">Halaman ini akan segera hadir.</p>
            </div>
        </div>
    </section>
@endsection

@push('styles')
<style>
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
        const iframes = document.querySelectorAll('iframe');
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
