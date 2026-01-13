@extends('layouts.app')

@section('title', 'Proses Sertifikasi Halal - BBSPJIKP')
@section('description', 'Tahapan dan prosedur sertifikasi halal di LPH BBSPJIKP')

@section('content')
    <!-- Hero Section with Background -->
    <div class="relative bg-gray-900">
        <!-- Background Image with Overlay -->
        <div class="absolute inset-0">
            <img src="{{ asset('images/bg-halalcenter.png') }}" alt="Header Background" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-black opacity-50"></div>
        </div>

        <!-- Content -->
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24">
            <!-- Breadcrumb di pojok kiri atas -->
            <nav class="absolute top-6 left-4 sm:left-6 flex items-center mb-0" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3 text-sm sm:text-base">
                    <li class="inline-flex items-center">
                        <a href="{{ route('home') }}" class="text-gray-300 hover:text-white flex items-center">
                            <i class="fas fa-home mr-2"></i>
                            {{ __('common.home') }}
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <i class="fas fa-chevron-right text-gray-400 mx-2"></i>
                            <a href="{{ route('halal.index') }}" class="text-gray-300 hover:text-white">
                                {{ __('halal.index_title') }}
                            </a>
                        </div>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <i class="fas fa-chevron-right text-gray-400 mx-2"></i>
                            <span class="text-gray-300">{{ __('halal.proses_breadcrumb') }}</span>
                        </div>
                    </li>
                </ol>
            </nav>

            <!-- Header Text -->
            <div class="text-center pt-14 sm:pt-2">
                <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">{{ __('halal.proses_sertifikasi_title') }}</h1>
                <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                    {{ __('halal.proses_sertifikasi_subtitle') }}
                </p>
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <div class="p-8">
                <!-- Diagram Alur -->
                <section class="mb-12">
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">{{ __('halal.proses_diagram_title') }}</h2>
                    <div class="space-y-6">
                        <!-- Alur Sertifikasi Halal -->
                        <section class="mb-12">
                            <h2 class="text-xl semi-bold mb-4">{{ __('halal.proses_alur_title') }}</h2>

                            <!-- Gambar Proses -->
                            <div class="flex my-1">
                                <img src="{{ asset('images/proses-sertifikasi.png')}}" alt="Gambar Proses Sertifikasi Halal"
                                    class="w-full block">
                            </div>
                        </section>

                        <div class="bg-gray-50 p-6 rounded-lg mt-10">
                            <h3 class="text-2xl font-bold text-gray-900 mb-3">
                                {{ __('halal.proses_requirement_title') }}
                            </h3>

                            <ol class="list-decimal list-inside text-gray-700 space-y-1">
                                <li>{{ __('halal.proses_requirement_1') }}</li>
                                <li>{{ __('halal.proses_requirement_2') }}</li>
                                <li>{{ __('halal.proses_requirement_3') }}</li>
                                <li>{{ __('halal.proses_requirement_4') }}</li>
                                <li>{{ __('halal.proses_requirement_5') }}</li>
                                <li>{{ __('halal.proses_requirement_6') }}</li>
                                <li>{{ __('halal.proses_requirement_7') }}</li>
                                <li>{{ __('halal.proses_requirement_8') }}</li>
                                <li>{{ __('halal.proses_requirement_9') }}</li>
                                <li>{{ __('halal.proses_requirement_10') }}</li>
                                <li>{{ __('halal.proses_requirement_11') }}</li>
                                <li>{{ __('halal.proses_requirement_12') }}</li>
                            </ol>
                        </div>

                        <!-- Hak dan Kewajiban Klien LPH -->
                        <div class="bg-gray-50 p-6 rounded-lg mt-10">

                            <h3 class="text-2xl font-bold text-gray-900 mb-6">
                                {{ __('halal.proses_rights_title') }}
                            </h3>

                            <!-- Bagian 1: Hak Klien Sertifikasi Halal -->
                            <h4 class="text-xl font-semibold text-gray-800 mb-3">
                                {{ __('halal.proses_client_rights_title') }}
                            </h4>

                            <ol class="list-decimal pl-5 list-inside text-gray-700 space-y-1 mb-3">
                                <li>{{ __('halal.proses_client_rights_1') }}</li>
                                <li>{{ __('halal.proses_client_rights_2') }}</li>
                                <li>{{ __('halal.proses_client_rights_3') }}</li>
                            </ol>

                            <!-- Bagian 2: Kewajiban Klien Sertifikasi Halal -->
                            <h4 class="text-xl font-semibold text-gray-800 mb-3">
                                {{ __('halal.proses_client_obligations_title') }}
                            </h4>

                            <ol class="list-decimal list-outside pl-9 text-gray-700 leading-relaxed space-y-1 mb-3">
                                <li>{{ __('halal.proses_client_obligations_1') }}</li>
                                <li>{{ __('halal.proses_client_obligations_2') }}</li>
                                <li>{{ __('halal.proses_client_obligations_3') }}</li>
                                <li>{{ __('halal.proses_client_obligations_4') }}</li>
                                <li>{{ __('halal.proses_client_obligations_5') }}</li>
                                <li>{{ __('halal.proses_client_obligations_6') }}</li>
                                <li>{{ __('halal.proses_client_obligations_7') }}</li>
                                <li>{{ __('halal.proses_client_obligations_8') }}</li>
                                <li>{{ __('halal.proses_client_obligations_9') }}</li>
                                <li>{{ __('halal.proses_client_obligations_10') }}</li>
                                <li>{{ __('halal.proses_client_obligations_11') }}</li>
                                <li>{{ __('halal.proses_client_obligations_12') }}</li>
                                <li>{{ __('halal.proses_client_obligations_13') }}</li>
                                <li>{{ __('halal.proses_client_obligations_14') }}</li>
                                <li>{{ __('halal.proses_client_obligations_15') }}</li>
                                <li>{{ __('halal.proses_client_obligations_16') }}</li>
                            </ol>
                        </div>

                        <!-- Informasi Proses Penanganan Keluhan -->
                        <div class="bg-gray-50 p-6 rounded-lg mt-10">

                            <h3 class="text-2xl font-bold text-gray-900 mb-5">
                                {{ __('halal.proses_complaint_title') }}
                            </h3>

                            <!-- Bagian 1: Keluhan terhadap Lembaga -->
                            <h4 class="text-xl font-semibold text-gray-800 mb-3">
                                {{ __('halal.proses_complaint_institution_title') }}
                            </h4>

                            <ol class="list-decimal list-outside pl-9 text-gray-700 leading-relaxed space-y-1 mb-3">
                                <li>{{ __('halal.proses_complaint_institution_1') }}</li>
                                <li>{{ __('halal.proses_complaint_institution_2') }}</li>
                                <li>{{ __('halal.proses_complaint_institution_3') }}</li>
                                <li>{{ __('halal.proses_complaint_institution_4') }}</li>
                                <li>{{ __('halal.proses_complaint_institution_5') }}</li>
                                <li>{{ __('halal.proses_complaint_institution_6') }}</li>
                            </ol>

                            <!-- Bagian 2: Keluhan Pihak Lain -->
                            <h4 class="text-xl font-semibold text-gray-800 mb-3">
                                {{ __('halal.proses_complaint_third_title') }}
                            </h4>

                            <ol class="list-decimal list-outside pl-9 text-gray-700 leading-relaxed space-y-1 mb-3">
                                <li>{{ __('halal.proses_complaint_third_1') }}</li>
                                <li>{{ __('halal.proses_complaint_third_2') }}</li>
                                <li>{{ __('halal.proses_complaint_third_3') }}</li>
                                <li>{{ __('halal.proses_complaint_third_4') }}</li>
                                <li>{{ __('halal.proses_complaint_third_5') }}</li>
                                <li>{{ __('halal.proses_complaint_third_6') }}</li>
                            </ol>
                        </div>

                        <div class="bg-[#2F8CD1] text-white rounded-xl p-5 w-fit ml-10 shadow-md">
                            <h3 class="text-lg font-bold mb-3">{{ __('halal.proses_audit_list_title') }}</h3>

                            <ul class="space-y-3">

                                <!-- PREVIEW FILE 2022–2023 -->
                                <li class="flex flex-col gap-2">
                                    <div class="flex items-center gap-2">
                                        <span class="w-2 h-2 bg-white rounded-full"></span>
                                        <button
                                            onclick="openPdfPreview('{{ asset('files/Daftar-Audit-LPH-BBSPJIKKP-2022-2023-per20250801.pdf') }}')"
                                            class="hover:underline text-white">
                                            {{ __('halal.proses_audit_2022_2023') }}
                                        </button>
                                    </div>
                                </li>

                                <!-- PREVIEW FILE 2024 -->
                                <li class="flex flex-col gap-2">
                                    <div class="flex items-center gap-2">
                                        <span class="w-2 h-2 bg-white rounded-full"></span>
                                        <button
                                            onclick="openPdfPreview('{{ asset('files/Daftar-Audit-LPH-BBSPJIKKP-2024-per20250801.pdf') }}')"
                                            class="hover:underline text-white">
                                            {{ __('halal.proses_audit_2024') }}
                                        </button>
                                    </div>
                                </li>

                            </ul>
                        </div>

                        <!-- MODAL PREVIEW PDF -->
                        <div id="pdfModal"
                            class="hidden fixed inset-0 bg-black bg-opacity-60 z-50 flex items-center justify-center p-4">
                            <div
                                class="bg-white rounded-xl shadow-xl w-full max-w-5xl h-[90vh] relative overflow-hidden flex flex-col">
                                <!-- Header dengan Close Button -->
                                <div class="flex items-center justify-between p-4 border-b border-gray-200">
                                    <h3 class="text-lg font-semibold text-gray-900">PDF Preview</h3>

                                    <div class="flex items-center gap-2">
                                        <button id="pdfDownloadBtn" type="button"
                                            class="hidden sm:inline-flex items-center px-3 py-1 rounded-md bg-gray-100 text-gray-700 hover:bg-gray-200 text-sm">
                                            <i class="fas fa-download mr-2"></i>Save
                                        </button>
                                        <button id="pdfOpenBtn" onclick="openPdfInNewTab()"
                                            class="inline-flex items-center px-3 py-1 rounded-md bg-gray-100 text-gray-700 hover:bg-gray-200 text-sm">
                                            <i class="fas fa-external-link-alt mr-2"></i>Open
                                        </button>
                                        <button onclick="closePdfPreview()"
                                            class="flex-shrink-0 inline-flex items-center justify-center h-8 w-8 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none transition">
                                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M6 18L18 6M6 6l12 12" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>

                                <!-- PDF VIEWER -->
                                <iframe id="pdfFrame" src="" class="flex-1 w-full" style="border: none;">
                                </iframe>
                            </div>
                        </div>
                        <script>
                            let currentPdfUrl = null;
                            function openPdfPreview(url) {
                                // Tambahkan #zoom=100 untuk memastikan bisa zoom
                                currentPdfUrl = url;
                                const frame = document.getElementById('pdfFrame');
                                frame.src = url + "#zoom=100";
                                document.getElementById('pdfModal').classList.remove('hidden');

                                // update download/open buttons
                                const dl = document.getElementById('pdfDownloadBtn');
                                const openBtn = document.getElementById('pdfOpenBtn');
                                if (dl) {
                                    // show download button and attach handler
                                    dl.classList.remove('hidden');
                                    dl.onclick = function (e) {
                                        e.preventDefault();
                                        downloadPdf();
                                    };
                                }
                                if (openBtn) {
                                    openBtn.dataset.url = url;
                                }
                            }

                            function closePdfPreview() {
                                currentPdfUrl = null;
                                document.getElementById('pdfModal').classList.add('hidden');
                                const frame = document.getElementById('pdfFrame');
                                if (frame) frame.src = "";

                                const dl = document.getElementById('pdfDownloadBtn');
                                if (dl) {
                                    dl.classList.add('hidden');
                                    dl.onclick = null;
                                }
                            }

                            function openPdfInNewTab() {
                                const url = currentPdfUrl || document.getElementById('pdfOpenBtn').dataset.url;
                                if (!url) return;
                                window.open(url, '_blank', 'noopener');
                            }

                            async function downloadPdf() {
                                const url = currentPdfUrl || document.getElementById('pdfOpenBtn').dataset.url;
                                if (!url) return;
                                // Try to fetch the file and trigger an in-window download via blob+anchor.
                                // Many mobile browsers ignore 'download' on cross-origin links; if that fails,
                                // fall back to opening the file in a new tab so the user can save it.
                                try {
                                    const resp = await fetch(url, { method: 'GET', mode: 'cors' });
                                    if (!resp.ok) throw new Error('Network response was not ok');
                                    const blob = await resp.blob();
                                    const filename = (url.split('/').pop() || 'document.pdf').split('?')[0];
                                    const blobUrl = URL.createObjectURL(blob);

                                    // Create an anchor with download attribute and click it
                                    const a = document.createElement('a');
                                    a.href = blobUrl;
                                    a.download = filename;
                                    // For iOS Safari, anchor download may be ignored; attempt click anyway
                                    document.body.appendChild(a);
                                    a.click();
                                    a.remove();

                                    // Revoke the blob URL after a short delay
                                    setTimeout(() => URL.revokeObjectURL(blobUrl), 20000);
                                } catch (err) {
                                    console.warn('Programmatic download failed, opening in new tab. Error:', err);
                                    // Fallback: open original URL in new tab (user can save from there)
                                    window.open(url, '_blank', 'noopener');
                                }
                            }
                        </script>
                    </div>
                </section>
            </div>
        </div>

        <!-- Atau Bisa Seperti Di Bawah Ini -->
        <script type="text/javascript" src="https://web.animemusic.us/widget_disabilitas.js"
            api-key-resvoice="bzbTAKXD"></script>
        <!-- ganti key api-key-resvoice dengan key yang ada di responsive voice-->

        <!-- Close modal jika klik area gelap -->
        <script>
            document.getElementById('pdfModal').addEventListener('click', function (e) {
                if (e.target === this) {
                    closePdfPreview();
                }
            });
        </script>
@endsection