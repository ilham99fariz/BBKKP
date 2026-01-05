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

                {{-- Menampilkan Attachment Files dengan Preview Modal --}}
                @if ($page->attachments->count() > 0)
                    <div class="mt-8 mb-8">
                        <h3 class="text-lg font-bold text-gray-900 mb-4">📎 File Lampiran</h3>
                        <div class="space-y-3">
                            @foreach ($page->attachments as $attachment)
                                <button 
                                   onclick="openPreviewModal('{{ $attachment->original_name }}', '{{ $attachment->getFileUrlAttribute() }}', '{{ $attachment->mime_type }}')"
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
                                    <i class="fas fa-eye text-blue-600 text-lg ml-4 flex-shrink-0"></i>
                                </button>
                            @endforeach
                        </div>
                    </div>

                    <!-- Preview Modal -->
                    <div id="previewModal" class="hidden fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center p-4">
                        <div class="bg-white rounded-lg shadow-xl w-full max-w-4xl max-h-[90vh] flex flex-col">
                            <!-- Modal Header -->
                            <div class="flex items-center justify-between p-4 border-b border-gray-200">
                                <h2 id="modalTitle" class="text-lg font-bold text-gray-900 truncate"></h2>
                                <button onclick="closePreviewModal()" class="text-gray-500 hover:text-gray-700 text-2xl">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>

                            <!-- Modal Content -->
                            <div class="flex-1 overflow-auto">
                                <div id="modalContent" class="p-4">
                                    <!-- Loading -->
                                    <div class="flex items-center justify-center h-96">
                                        <div class="text-center">
                                            <i class="fas fa-spinner fa-spin text-4xl text-blue-600 mb-3"></i>
                                            <p class="text-gray-600">Memuat file...</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Modal Footer -->
                            <div class="flex items-center justify-between p-4 border-t border-gray-200">
                                <a id="downloadBtn" href="#" target="_blank" class="inline-flex items-center px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
                                    <i class="fas fa-download mr-2"></i> Download
                                </a>
                                <button onclick="closePreviewModal()" class="px-4 py-2 bg-gray-300 text-gray-800 rounded-lg hover:bg-gray-400 transition">
                                    Tutup
                                </button>
                            </div>
                        </div>
                    </div>

                    <script>
                        function openPreviewModal(filename, fileUrl, mimeType) {
                            const modal = document.getElementById('previewModal');
                            const modalTitle = document.getElementById('modalTitle');
                            const modalContent = document.getElementById('modalContent');
                            const downloadBtn = document.getElementById('downloadBtn');

                            modalTitle.textContent = filename;
                            downloadBtn.href = fileUrl;

                            // Tentukan jenis preview berdasarkan mime type
                            if (mimeType.includes('pdf')) {
                                modalContent.innerHTML = `
                                    <iframe src="${fileUrl}" class="w-full h-96 border-none rounded-lg"></iframe>
                                `;
                            } else if (mimeType.includes('word') || mimeType.includes('document')) {
                                modalContent.innerHTML = `
                                    <div class="text-center py-12">
                                        <i class="fas fa-file-word text-6xl text-blue-600 mb-3"></i>
                                        <p class="text-gray-600 mb-4">File Word tidak bisa dipreview secara langsung</p>
                                        <a href="${fileUrl}" target="_blank" class="inline-flex items-center px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                                            <i class="fas fa-download mr-2"></i> Download File
                                        </a>
                                    </div>
                                `;
                            } else if (mimeType.includes('spreadsheet') || mimeType.includes('excel')) {
                                modalContent.innerHTML = `
                                    <div class="text-center py-12">
                                        <i class="fas fa-file-excel text-6xl text-green-600 mb-3"></i>
                                        <p class="text-gray-600 mb-4">File Excel tidak bisa dipreview secara langsung</p>
                                        <a href="${fileUrl}" target="_blank" class="inline-flex items-center px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                                            <i class="fas fa-download mr-2"></i> Download File
                                        </a>
                                    </div>
                                `;
                            } else if (mimeType.includes('presentation')) {
                                modalContent.innerHTML = `
                                    <div class="text-center py-12">
                                        <i class="fas fa-file-powerpoint text-6xl text-orange-600 mb-3"></i>
                                        <p class="text-gray-600 mb-4">File PowerPoint tidak bisa dipreview secara langsung</p>
                                        <a href="${fileUrl}" target="_blank" class="inline-flex items-center px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                                            <i class="fas fa-download mr-2"></i> Download File
                                        </a>
                                    </div>
                                `;
                            } else {
                                modalContent.innerHTML = `
                                    <div class="text-center py-12">
                                        <i class="fas fa-file text-6xl text-gray-600 mb-3"></i>
                                        <p class="text-gray-600 mb-4">File tidak bisa dipreview secara langsung</p>
                                        <a href="${fileUrl}" target="_blank" class="inline-flex items-center px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                                            <i class="fas fa-download mr-2"></i> Download File
                                        </a>
                                    </div>
                                `;
                            }

                            modal.classList.remove('hidden');
                            document.body.style.overflow = 'hidden';
                        }

                        function closePreviewModal() {
                            const modal = document.getElementById('previewModal');
                            modal.classList.add('hidden');
                            document.body.style.overflow = 'auto';
                        }

                        // Tutup modal jika klik di luar konten
                        document.getElementById('previewModal').addEventListener('click', function(e) {
                            if (e.target === this) {
                                closePreviewModal();
                            }
                        });

                        // Tutup modal dengan tombol Escape
                        document.addEventListener('keydown', function(e) {
                            if (e.key === 'Escape') {
                                closePreviewModal();
                            }
                        });
                    </script>
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
        #accordion-container li > ol,
        #accordion-container li > ul {
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