@extends('layouts.app')

@section('title', 'Indeks Kepuasan Masyarakat - BBSPJIKKP')
@section('description', 'Indeks Kepuasan Masyarakat (IKM) dan hasil survei kepuasan')

@section('content')
    <section class="relative">
        <div class="h-56 md:h-72 w-full bg-cover bg-center" style="background-image:url('https://images.unsplash.com/photo-1507679799987-c73779587ccf?q=80&w=1600&fit=crop');">
            <div class="h-full w-full bg-black/40 flex items-end">
                <div class="max-w-7xl mx-auto w-full px-4 sm:px-6 lg:px-8 py-8">
                    <nav class="text-white/80 text-sm mb-2">
                        <a href="{{ route('home') }}" class="hover:text-white">Home</a>
                        <span class="mx-2">/</span>
                        <a href="{{ route('standards.index') }}" class="hover:text-white">Standar Pelayanan</a>
                        <span class="mx-2">/</span>
                        <span>Indeks Kepuasan Masyarakat</span>
                    </nav>
                    <h1 class="text-3xl md:text-4xl font-bold text-white">Indeks Kepuasan Masyarakat (IKM)</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="py-12 md:py-16 bg-gray-50">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white rounded-lg shadow p-8">
                <h2 class="text-xl font-semibold mb-3">Indeks Kepuasan Masyarakat</h2>
                <p class="text-gray-600">Hasil IKM dan statistik kepuasan masyarakat akan ditampilkan di halaman ini. Saat ini, ini adalah placeholder.</p>
                <p class="mt-4 text-sm text-gray-500">Halaman ini akan segera hadir.</p>
            </div>
        </div>
    </section>
@endsection
