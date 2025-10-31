@extends('layouts.admin')

@section('title', 'Dashboard - Admin Panel')
@section('page-title', 'Dashboard')

@section('content')
    <!-- Stats Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-blue-100 text-blue-600">
                    <i class="fas fa-cogs text-2xl"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm font-medium text-gray-500">Total Layanan</p>
                    <p class="text-2xl font-semibold text-gray-900">{{ $stats['services'] }}</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-green-100 text-green-600">
                    <i class="fas fa-newspaper text-2xl"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm font-medium text-gray-500">Total Berita</p>
                    <p class="text-2xl font-semibold text-gray-900">{{ $stats['news'] }}</p>
                    <p class="text-xs text-gray-500">{{ $stats['published_news'] }} dipublikasikan</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-yellow-100 text-yellow-600">
                    <i class="fas fa-quote-left text-2xl"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm font-medium text-gray-500">Total Testimoni</p>
                    <p class="text-2xl font-semibold text-gray-900">{{ $stats['testimonials'] }}</p>
                    <p class="text-xs text-gray-500">{{ $stats['approved_testimonials'] }} disetujui</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-purple-100 text-purple-600">
                    <i class="fas fa-handshake text-2xl"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm font-medium text-gray-500">Total Partner</p>
                    <p class="text-2xl font-semibold text-gray-900">{{ $stats['partners'] }}</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-indigo-100 text-indigo-600">
                    <i class="fas fa-file-alt text-2xl"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm font-medium text-gray-500">Total Halaman Dinamis</p>
                    <p class="text-2xl font-semibold text-gray-900">{{ $stats['dynamic_pages'] }}</p>
                    <p class="text-xs text-gray-500">{{ $stats['active_dynamic_pages'] }} aktif</p>
                </div>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        <!-- Recent News -->
        <div class="bg-white rounded-lg shadow">
            <div class="px-6 py-4 border-b border-gray-200">
                <div class="flex items-center justify-between">
                    <h3 class="text-lg font-medium text-gray-900">Berita Terbaru</h3>
                    <a href="{{ route('admin.news.index') }}" class="text-blue-600 hover:text-blue-700 text-sm font-medium">
                        Lihat Semua
                    </a>
                </div>
            </div>
            <div class="p-6">
                @forelse($recentNews as $news)
                    <div class="flex items-center space-x-4 py-3 {{ !$loop->last ? 'border-b border-gray-200' : '' }}">
                        <div class="flex-shrink-0">
                            @if ($news->image)
                                <img src="{{ Storage::url($news->image) }}" alt="{{ $news->title }}"
                                    class="h-12 w-12 rounded-lg object-cover">
                            @else
                                <div class="h-12 w-12 bg-gray-200 rounded-lg flex items-center justify-center">
                                    <i class="fas fa-newspaper text-gray-400"></i>
                                </div>
                            @endif
                        </div>
                        <div class="flex-1 min-w-0">
                            <p class="text-sm font-medium text-gray-900 truncate">{{ $news->title }}</p>
                            <p class="text-sm text-gray-500">{{ $news->created_at->format('d M Y') }}</p>
                        </div>
                        <div class="flex-shrink-0">
                            @if ($news->is_published)
                                <span
                                    class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                    Dipublikasikan
                                </span>
                            @else
                                <span
                                    class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                                    Draft
                                </span>
                            @endif
                        </div>
                    </div>
                @empty
                    <div class="text-center py-8">
                        <i class="fas fa-newspaper text-gray-400 text-4xl mb-4"></i>
                        <p class="text-gray-500">Belum ada berita</p>
                    </div>
                @endforelse
            </div>
        </div>

        <!-- Recent Testimonials -->
        <div class="bg-white rounded-lg shadow">
            <div class="px-6 py-4 border-b border-gray-200">
                <div class="flex items-center justify-between">
                    <h3 class="text-lg font-medium text-gray-900">Testimoni Terbaru</h3>
                    <a href="{{ route('admin.testimonials.index') }}"
                        class="text-blue-600 hover:text-blue-700 text-sm font-medium">
                        Lihat Semua
                    </a>
                </div>
            </div>
            <div class="p-6">
                @forelse($recentTestimonials as $testimonial)
                    <div class="py-3 {{ !$loop->last ? 'border-b border-gray-200' : '' }}">
                        <div class="flex items-start space-x-3">
                            <div class="flex-shrink-0">
                                @if ($testimonial->image)
                                    <img src="{{ Storage::url($testimonial->image) }}"
                                        alt="{{ $testimonial->client_name }}" class="h-10 w-10 rounded-full object-cover">
                                @else
                                    <div class="h-10 w-10 bg-gray-200 rounded-full flex items-center justify-center">
                                        <i class="fas fa-user text-gray-400"></i>
                                    </div>
                                @endif
                            </div>
                            <div class="flex-1 min-w-0">
                                <p class="text-sm font-medium text-gray-900">{{ $testimonial->client_name }}</p>
                                @if ($testimonial->client_company)
                                    <p class="text-sm text-gray-500">{{ $testimonial->client_company }}</p>
                                @endif
                                <p class="text-sm text-gray-600 mt-1 line-clamp-2">{{ $testimonial->content }}</p>
                                <div class="flex items-center mt-2 space-x-2">
                                    <div class="flex items-center">
                                        @for ($i = 1; $i <= 5; $i++)
                                            <i class="fas fa-star text-yellow-400 text-xs"></i>
                                        @endfor
                                    </div>
                                    @if ($testimonial->is_approved)
                                        <span
                                            class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-green-100 text-green-800">
                                            Disetujui
                                        </span>
                                    @else
                                        <span
                                            class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-yellow-100 text-yellow-800">
                                            Menunggu
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="text-center py-8">
                        <i class="fas fa-quote-left text-gray-400 text-4xl mb-4"></i>
                        <p class="text-gray-500">Belum ada testimoni</p>
                    </div>
                @endforelse
            </div>
        </div>
    </div>

    <!-- Quick Actions -->
    <div class="mt-8 bg-white rounded-lg shadow p-6">
        <h3 class="text-lg font-medium text-gray-900 mb-4">Aksi Cepat</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
            <a href="{{ route('admin.services.create') }}"
                class="flex items-center p-4 border border-gray-200 rounded-lg hover:bg-gray-50 transition-colors duration-200">
                <div class="p-2 bg-blue-100 rounded-lg mr-3">
                    <i class="fas fa-plus text-blue-600"></i>
                </div>
                <div>
                    <p class="font-medium text-gray-900">Tambah Layanan</p>
                    <p class="text-sm text-gray-500">Buat layanan baru</p>
                </div>
            </a>

            <a href="{{ route('admin.news.create') }}"
                class="flex items-center p-4 border border-gray-200 rounded-lg hover:bg-gray-50 transition-colors duration-200">
                <div class="p-2 bg-green-100 rounded-lg mr-3">
                    <i class="fas fa-plus text-green-600"></i>
                </div>
                <div>
                    <p class="font-medium text-gray-900">Tambah Berita</p>
                    <p class="text-sm text-gray-500">Buat artikel baru</p>
                </div>
            </a>

            <a href="{{ route('admin.testimonials.create') }}"
                class="flex items-center p-4 border border-gray-200 rounded-lg hover:bg-gray-50 transition-colors duration-200">
                <div class="p-2 bg-yellow-100 rounded-lg mr-3">
                    <i class="fas fa-plus text-yellow-600"></i>
                </div>
                <div>
                    <p class="font-medium text-gray-900">Tambah Testimoni</p>
                    <p class="text-sm text-gray-500">Tambah testimoni klien</p>
                </div>
            </a>

            <a href="{{ route('admin.partners.create') }}"
                class="flex items-center p-4 border border-gray-200 rounded-lg hover:bg-gray-50 transition-colors duration-200">
                <div class="p-2 bg-purple-100 rounded-lg mr-3">
                    <i class="fas fa-plus text-purple-600"></i>
                </div>
                <div>
                    <p class="font-medium text-gray-900">Tambah Partner</p>
                    <p class="text-sm text-gray-500">Tambah mitra baru</p>
                </div>
            </a>
        </div>
    </div>
@endsection
