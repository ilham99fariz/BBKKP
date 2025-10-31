@extends('layouts.app')

@section('title', 'Media dan Informasi - BBSPJIKKP')
@section('description', 'Kumpulan media dan informasi BBSPJIKKP: berita, publikasi, pengumuman, dan lain-lain')

@section('content')
    <section class="relative">
        <div class="h-56 md:h-72 w-full bg-cover bg-center"
            style="background-image:url('https://images.unsplash.com/photo-1495020689067-958852a7765e?q=80&w=1600&fit=crop');">
            <div class="h-full w-full bg-black/40 flex items-end">
                <div class="max-w-7xl mx-auto w-full px-4 sm:px-6 lg:px-8 py-8">
                    <nav class="text-white/80 text-sm mb-2">
                        <a href="{{ route('home') }}" class="hover:text-white">Home</a>
                        <span class="mx-2">/</span>
                        <span>Media dan Informasi</span>
                    </nav>
                    <h1 class="text-3xl md:text-4xl font-bold text-white">Media dan Informasi</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="py-12 md:py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-6">
                <a href="/keterbukaan-informasi-publik" class="bg-white border rounded-xl p-5 hover:shadow-md transition-shadow">
                    <div class="text-lg font-semibold">Keterbukaan Informasi Publik</div>
                </a>
                <a href="{{ route('news.index') }}" class="bg-white border rounded-xl p-5 hover:shadow-md transition-shadow">
                    <div class="text-lg font-semibold">BBSPJIKKP News</div>
                </a>
                <a href="/publikasi" class="bg-white border rounded-xl p-5 hover:shadow-md transition-shadow">
                    <div class="text-lg font-semibold">Publikasi</div>
                </a>
                <a href="/pengumuman" class="bg-white border rounded-xl p-5 hover:shadow-md transition-shadow">
                    <div class="text-lg font-semibold">Pengumuman</div>
                </a>
            </div>
        </div>
    </section>
@endsection


