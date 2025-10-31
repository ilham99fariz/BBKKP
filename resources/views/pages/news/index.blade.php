@extends('layouts.app')

@section('title', 'Berita - BALAI BESAR STANDARDISASI DAN PELAYANAN JASA INDUSTRI KULIT, PLASTIK, DAN KARET')
@section('description', 'Berita dan update terbaru dari BALAI BESAR STANDARDISASI DAN PELAYANAN JASA INDUSTRI KULIT, PLASTIK, DAN KARET')

@section('content')
<!-- Page Header -->
<section class="bg-gradient-to-r from-blue-600 to-blue-800 text-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h1 class="text-3xl md:text-4xl font-bold mb-4">Berita & Update</h1>
            <p class="text-lg text-blue-100 max-w-3xl mx-auto">
                Ikuti perkembangan terbaru dari kami
            </p>
        </div>
    </div>
</section>

<!-- News Grid -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($news as $article)
            <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                @if($article->image)
                <img src="{{ Storage::url($article->image) }}" alt="{{ $article->title }}" class="w-full h-48 object-cover">
                @else
                <div class="w-full h-48 bg-gray-200 flex items-center justify-center">
                    <i class="fas fa-newspaper text-gray-400 text-4xl"></i>
                </div>
                @endif
                <div class="p-6">
                    <div class="flex items-center text-sm text-gray-500 mb-3">
                        <i class="fas fa-calendar-alt mr-2"></i>
                        <span>{{ $article->published_at->format('d M Y') }}</span>
                        <span class="mx-2">•</span>
                        <i class="fas fa-user mr-2"></i>
                        <span>{{ $article->author }}</span>
                        <span class="mx-2">•</span>
                        <i class="fas fa-eye mr-2"></i>
                        <span>{{ $article->views }} views</span>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-3 line-clamp-2">{{ $article->title }}</h3>
                    <p class="text-gray-600 mb-4 line-clamp-3">{{ $article->excerpt }}</p>
                    <a href="{{ route('news.show', $article) }}" 
                       class="text-blue-600 font-semibold hover:text-blue-700 transition-colors duration-200">
                        Baca Selengkapnya <i class="fas fa-arrow-right ml-1"></i>
                    </a>
                </div>
            </div>
            @empty
            <div class="col-span-full text-center py-12">
                <div class="bg-gray-100 w-24 h-24 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-newspaper text-gray-400 text-3xl"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-2">Belum Ada Berita</h3>
                <p class="text-gray-600">Berita akan segera tersedia.</p>
            </div>
            @endforelse
        </div>
        
        <!-- Pagination -->
        @if($news->hasPages())
        <div class="mt-12">
            {{ $news->links() }}
        </div>
        @endif
    </div>
</section>

<!-- Newsletter Subscription -->
<section class="py-20 bg-blue-600 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-4">Dapatkan Update Terbaru</h2>
        <p class="text-xl mb-8 text-blue-100">
            Berlangganan newsletter kami untuk mendapatkan informasi terbaru
        </p>
        <div class="max-w-md mx-auto">
            <form class="flex flex-col sm:flex-row gap-4">
                <input type="email" 
                       placeholder="Masukkan email Anda" 
                       class="flex-1 px-4 py-3 rounded-lg text-gray-900 focus:outline-none focus:ring-2 focus:ring-white">
                <button type="submit" 
                        class="bg-white text-blue-600 px-6 py-3 rounded-lg font-semibold hover:bg-gray-100 transition-colors duration-200">
                    Berlangganan
                </button>
            </form>
        </div>
    </div>
</section>
@endsection
