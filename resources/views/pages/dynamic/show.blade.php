@extends('layouts.app')

@section('title', $page->title)

@section('content')
    <!-- Hero Section -->
    @if($page->hero_image || $page->hero_title || $page->hero_subtitle)
        <section class="relative text-white py-12 min-h-[280px] flex items-center">
            @if($page->hero_image)
                <div class="absolute inset-0 bg-cover bg-center"
                    style="background-image: url('{{ Storage::url($page->hero_image) }}')"></div>
                <!-- Overlay untuk readability teks -->
                <div class="absolute inset-0 bg-black bg-opacity-40"></div>
            @else
                <div class="absolute inset-0 bg-gradient-to-r from-blue-600 to-blue-800"></div>
            @endif
            <div class="container mx-auto px-4 relative z-10">
                <div class="max-w-3xl">
                    @if($page->hero_title)
                        <h1 class="text-3xl md:text-4xl font-bold mb-3 drop-shadow-lg">{{ $page->hero_title }}</h1>
                    @else
                        <h1 class="text-3xl md:text-4xl font-bold mb-3 drop-shadow-lg">{{ $page->title }}</h1>
                    @endif
                    @if($page->hero_subtitle)
                        <p class="text-lg drop-shadow-md">{{ $page->hero_subtitle }}</p>
                    @endif
                </div>
            </div>
        </section>
    @else
        <div class="bg-gradient-to-r from-blue-600 to-blue-800 text-white py-8">
            <div class="container mx-auto px-4">
                <h1 class="text-3xl font-bold">{{ $page->title }}</h1>
            </div>
        </div>
    @endif

    <!-- Main Content -->
    <section class="py-8">
        <div class="w-full">
            <div class="max-w-6xl mx-auto px-6 md:px-12 lg:px-16 mb-4">
                @if (!$page->hero_title)
                    <h1 class="text-3xl font-bold text-gray-900">{{ $page->title }}</h1>
                @endif

                {{-- Menampilkan Attachment Files --}}
                @if ($page->attachments->count() > 0)
                    @php
                        // Halaman yang auto-embed PDF di iframe
                        $autoEmbedPdfPages = ['standar-pelayanan-minimum', 'spm', 'tarif-layanan'];
                        $shouldAutoEmbedPdf = in_array($page->slug, $autoEmbedPdfPages);
                        
                        if ($shouldAutoEmbedPdf) {
                            $pdfFiles = $page->attachments->filter(function($att) {
                                return strpos($att->mime_type, 'pdf') !== false;
                            });
                            $nonPdfFiles = $page->attachments->filter(function($att) {
                                return strpos($att->mime_type, 'pdf') === false;
                            });
                        }
                    @endphp

                    @if ($shouldAutoEmbedPdf)
                        {{-- Mode Auto-Embed untuk halaman tertentu --}}
                        
                        {{-- PDF Files - Auto Embed dengan iframe --}}
                        @if ($pdfFiles->count() > 0)
                            <div class="mt-8 mb-8">
                                @foreach ($pdfFiles as $pdf)
                                    <div class="mb-6">
                                        <div class="flex items-center justify-between mb-3">
                                            <h3 class="text-lg font-bold text-gray-900">
                                                <i class="fas fa-file-pdf text-red-600 mr-2"></i>{{ $pdf->original_name }}
                                            </h3>
                                            <a href="{{ $pdf->getFileUrlAttribute() }}" target="_blank" 
                                               class="inline-flex items-center px-4 py-2 bg-blue-600 text-white text-sm rounded-lg hover:bg-blue-700 transition">
                                                <i class="fas fa-download mr-2"></i> Download
                                            </a>
                                        </div>
                                        <iframe src="{{ $pdf->getFileUrlAttribute() }}" 
                                                class="w-full border-2 border-gray-200 rounded-lg shadow-lg"
                                                style="height: 800px; min-height: 600px;">
                                        </iframe>
                                    </div>
                                @endforeach
                            </div>
                        @endif

                        {{-- Non-PDF Files - Button modal --}}
                        @if ($nonPdfFiles->count() > 0)
                            <div class="mt-8 mb-8">
                                <h3 class="text-lg font-bold text-gray-900 mb-4">📎 File Lampiran Lainnya</h3>
                                <div class="space-y-3">
                                    @foreach ($nonPdfFiles as $attachment)
                                        <a href="{{ $attachment->getFileUrlAttribute() }}" download
                                            class="w-full flex items-center justify-between p-4 bg-gradient-to-r from-blue-50 to-blue-100 border-l-4 border-blue-600 rounded-lg hover:shadow-md transition-all text-left">
                                            <div class="flex items-center flex-1">
                                                @php
                                                    $mimeType = $attachment->mime_type;
                                                    $icon = 'fas fa-file';
                                                    $iconColor = 'text-gray-500';

                                                    if (strpos($mimeType, 'word') !== false || strpos($mimeType, 'document') !== false) {
                                                        $icon = 'fas fa-file-word';
                                                        $iconColor = 'text-blue-600';
                                                    } elseif (strpos($mimeType, 'spreadsheet') !== false || strpos($mimeType, 'excel') !== false) {
                                                        $icon = 'fas fa-file-excel';
                                                        $iconColor = 'text-green-600';
                                                    } elseif (strpos($mimeType, 'presentation') !== false) {
                                                        $icon = 'fas fa-file-powerpoint';
                                                        $iconColor = 'text-orange-600';
                                                    }
                                                @endphp
                                                <i class="{{ $icon }} {{ $iconColor }} text-2xl mr-4"></i>
                                                <div class="min-w-0">
                                                    <p class="text-sm font-semibold text-gray-900 truncate">{{ $attachment->original_name }}</p>
                                                    <p class="text-xs text-gray-500">{{ round($attachment->file_size / 1024 / 1024, 2) }} MB</p>
                                                </div>
                                            </div>
                                            <i class="fas fa-download text-blue-600 text-lg ml-4 flex-shrink-0"></i>
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                    @else
                        {{-- Mode Default (Button Modal) untuk halaman lain seperti Publikasi --}}
                        <div class="mt-8 mb-8">
                            <h3 class="text-lg font-bold text-gray-900 mb-4">📎 File Lampiran</h3>
                            <div class="space-y-3">
                                @foreach ($page->attachments as $attachment)
                                    <a href="{{ $attachment->getFileUrlAttribute() }}" download
                                        class="w-full flex items-center justify-between p-4 bg-gradient-to-r from-blue-50 to-blue-100 border-l-4 border-blue-600 rounded-lg hover:shadow-md transition-all text-left">
                                        <div class="flex items-center flex-1">
                                            @php
                                                $mimeType = $attachment->mime_type;
                                                $icon = 'fas fa-file';
                                                $iconColor = 'text-gray-500';

                                                if (strpos($mimeType, 'pdf') !== false) {
                                                    $icon = 'fas fa-file-pdf';
                                                    $iconColor = 'text-red-600';
                                                } elseif (strpos($mimeType, 'word') !== false || strpos($mimeType, 'document') !== false) {
                                                    $icon = 'fas fa-file-word';
                                                    $iconColor = 'text-blue-600';
                                                } elseif (strpos($mimeType, 'spreadsheet') !== false || strpos($mimeType, 'excel') !== false) {
                                                    $icon = 'fas fa-file-excel';
                                                    $iconColor = 'text-green-600';
                                                } elseif (strpos($mimeType, 'presentation') !== false) {
                                                    $icon = 'fas fa-file-powerpoint';
                                                    $iconColor = 'text-orange-600';
                                                }
                                            @endphp
                                            <i class="{{ $icon }} {{ $iconColor }} text-2xl mr-4"></i>
                                            <div class="min-w-0">
                                                <p class="text-sm font-semibold text-gray-900 truncate">{{ $attachment->original_name }}</p>
                                                <p class="text-xs text-gray-500">{{ round($attachment->file_size / 1024 / 1024, 2) }} MB</p>
                                            </div>
                                        </div>
                                        <i class="fas fa-download text-blue-600 text-lg ml-4 flex-shrink-0"></i>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    @endif

                @endif
            </div>
            <div id="accordion-container" class="w-full max-w-6xl mx-auto px-6 md:px-12 lg:px-16 prose prose-lg max-w-none">
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

        .prose,
        .prose-lg {
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
        }

        /* Global content styling */
        #accordion-container {
            font-size: 15px;
            line-height: 1.8;
            color: #333;
        }

        /* Image gallery (auto-generated for Tonggak Sejarah) */
        #accordion-container .image-gallery {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
            gap: 18px;
            margin: 12px 0 20px;
            align-items: start;
        }

        #accordion-container .image-gallery .image-item img {
            width: 100% !important;
            height: auto !important;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.12);
        }

        /* List styling */
        #accordion-container ol,
        #accordion-container ul {
            margin: 1em 0;
            padding-left: 2.5em;
        }

        #accordion-container ol {
            list-style-type: decimal;
        }

        #accordion-container ul {
            list-style-type: disc;
        }

        #accordion-container ol ol {
            list-style-type: lower-alpha;
            margin-top: 0.5em;
            margin-bottom: 0.5em;
        }

        #accordion-container ul ul,
        #accordion-container ol ul {
            list-style-type: square;
            margin-top: 0.5em;
            margin-bottom: 0.5em;
        }

        #accordion-container ul ul ul,
        #accordion-container ol ul ul {
            list-style-type: circle;
        }

        #accordion-container li {
            margin-bottom: 0.6em;
            text-align: justify;
        }

        /* Nested lists */
        #accordion-container li>ol,
        #accordion-container li>ul {
            margin-top: 0.5em;
            margin-bottom: 0;
        }

        /* Heading styling - matched to CKEditor view */
        #accordion-container h1 {
            font-size: 1.8em;
            font-weight: bold;
            margin: 1.2em 0 0.6em 0;
            color: #1a1a1a;
        }

        #accordion-container h2 {
            font-size: 1.5em;
            font-weight: bold;
            margin: 1.1em 0 0.5em 0;
            color: #1a1a1a;
        }

        #accordion-container h3 {
            font-size: 1.25em;
            font-weight: bold;
            margin: 1em 0 0.4em 0;
            color: #1a1a1a;
        }

        #accordion-container h4 {
            font-size: 1.1em;
            font-weight: bold;
            margin: 0.9em 0 0.4em 0;
            color: #1a1a1a;
        }

        #accordion-container h5 {
            font-size: 1.05em;
            font-weight: bold;
            margin: 0.8em 0 0.3em 0;
        }

        #accordion-container h6 {
            font-size: 1em;
            font-weight: bold;
            margin: 0.8em 0 0.3em 0;
        }

        /* Paragraph styling */
        #accordion-container p {
            margin-bottom: 0.8em;
            text-align: justify;
            line-height: 1.8;
        }

        /* Force all images to display inline-block and allow horizontal layout */
        #accordion-container img {
            display: inline-block !important;
            vertical-align: top !important;
            margin-right: 16px !important;
            margin-bottom: 16px !important;
            height: auto !important;
            max-width: calc(25% - 16px) !important;
        }

        /* Remove default block behavior from paragraphs containing only images */
        #accordion-container p:has(> img:only-child) {
            display: inline !important;
            margin: 0 !important;
        }

        /* Emphasis styling - matched to CKEditor */
        #accordion-container em,
        #accordion-container i {
            font-style: italic;
        }

        #accordion-container strong,
        #accordion-container b {
            font-weight: bold;
        }

        /* Blockquote styling */
        #accordion-container blockquote {
            border-left: 4px solid #ddd;
            margin: 1em 0;
            padding-left: 1em;
            color: #666;
            font-style: italic;
        }

        /* Code styling */
        #accordion-container code {
            background-color: #f5f5f5;
            padding: 0.2em 0.4em;
            border-radius: 3px;
            font-family: 'Courier New', monospace;
        }

        #accordion-container pre {
            background-color: #f5f5f5;
            padding: 1em;
            border-radius: 6px;
            overflow-x: auto;
            margin: 1em 0;
        }

        /* Table styling */
        #accordion-container table {
            width: 100%;
            border-collapse: collapse;
            margin: 1.5em 0;
            border: 1px solid #ddd;
            font-size: 0.95em;
        }

        #accordion-container th,
        #accordion-container td {
            border: 1px solid #ddd;
            padding: 0.8em 0.6em;
            text-align: left;
        }

        #accordion-container th {
            background-color: #f5f5f5;
            font-weight: bold;
            color: #333;
        }

        #accordion-container tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        /* Link styling */
        #accordion-container a {
            color: #0066cc;
            text-decoration: none;
        }

        #accordion-container a:hover {
            text-decoration: underline;
            color: #0052a3;
        }

        /* HR styling */
        #accordion-container hr {
            border: none;
            border-top: 1px solid #ddd;
            margin: 1.5em 0;
        }


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
                // Auto-build image gallery for specific pages
                const pageSlug = document.body.getAttribute('data-page-slug') || '';
                const galleryPages = ['tonggak-sejarah', 'verifikasi-validasi'];
                
                if(galleryPages.includes(pageSlug)){
                    (function buildImageGalleries(root){
                        const children = Array.from(root.children);
                        let i = 0;
                        function isImageOnlyBlock(el){
                            if(!el) return false;
                            if(!['P','DIV'].includes(el.tagName)) return false;
                            const imgs = el.querySelectorAll('img');
                            if(imgs.length === 0) return false;
                            const textLen = (el.textContent || '').replace(/\s+/g,'').length;
                            return textLen <= 2;
                        }
                        while(i < children.length){
                            const group = [];
                            while(i < children.length && isImageOnlyBlock(children[i])){
                                group.push(children[i]);
                                i++;
                            }
                            if(group.length >= 2){
                                const gallery = document.createElement('div');
                                gallery.className = 'image-gallery';
                                group.forEach(function(block){
                                    const imgs = Array.from(block.querySelectorAll('img'));
                                    imgs.forEach(function(img){
                                        img.removeAttribute('width');
                                        img.removeAttribute('height');
                                        img.style.width = '';
                                        img.style.height = '';
                                        const item = document.createElement('div');
                                        item.className = 'image-item';
                                        item.appendChild(img);
                                        gallery.appendChild(item);
                                    });
                                    block.remove();
                                });
                                const refNode = children[i] || null;
                                root.insertBefore(gallery, refNode);
                            }else{
                                i++;
                            }
                        }
                    })(accordionContainer);
                    console.log('Image gallery initialized for page: ' + pageSlug);
                }


                // Use event delegation to handle dynamically loaded content
                accordionContainer.addEventListener('click', function (e) {
                    // Check if clicked element is an h5 inside ac-item
                    const h5 = e.target.closest('.accordion .ac-item h5');

                    if (h5) {
                        const acItem = h5.parentElement;
                        acItem.classList.toggle('active');
                    }
                });

                // Fix Google Forms iframe - remove restrictive sandbox attributes
                const iframes = accordionContainer.querySelectorAll('iframe');
                iframes.forEach(function (iframe) {
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