@extends('layouts.app')

@section('title', $page->title)

@section('content')
    <!-- Hero Section -->
    @if($page->hero_image || $page->hero_title || $page->hero_subtitle)
        <section class="relative bg-gradient-to-r from-blue-600 to-blue-800 text-white py-20">
            @if($page->hero_image)
                <div class="absolute inset-0 bg-cover bg-center opacity-20" style="background-image: url('{{ Storage::url($page->hero_image) }}')"></div>
            @endif
            <div class="container mx-auto px-4 relative z-10">
                <div class="max-w-3xl">
                    @if($page->hero_title)
                        <h1 class="text-4xl md:text-5xl font-bold mb-4">{{ $page->hero_title }}</h1>
                    @else
                        <h1 class="text-4xl md:text-5xl font-bold mb-4">{{ $page->title }}</h1>
                    @endif
                    @if($page->hero_subtitle)
                        <p class="text-xl text-blue-100">{{ $page->hero_subtitle }}</p>
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
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                @if (!$page->hero_title)
                    <h1 class="text-3xl font-bold text-gray-900 mb-8">{{ $page->title }}</h1>
                @endif

                <div class="prose prose-lg max-w-none">
                    {!! $page->content !!}
                </div>
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
    </style>
@endpush
