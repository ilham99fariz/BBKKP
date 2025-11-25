@extends('layouts.app')

@section('title', 'SPM - Standar Pelayanan Minimum - BBSPJIKKP')
@section('description', 'Informasi Standar Pelayanan Minimum (SPM) untuk layanan BBSPJIKKP')

@section('content')
    <section class="relative">
        <div class="h-56 md:h-72 w-full bg-cover bg-center" style="background-image:url('https://images.unsplash.com/photo-1492724441997-5dc865305da7?q=80&w=1600&fit=crop');">
            <div class="h-full w-full bg-black/40 flex items-end">
                <div class="max-w-7xl mx-auto w-full px-4 sm:px-6 lg:px-8 py-8">
                    <nav class="text-white/80 text-sm mb-2">
                        <a href="{{ route('home') }}" class="hover:text-white">Home</a>
                        <span class="mx-2">/</span>
                        <a href="{{ route('standards.index') }}" class="hover:text-white">Standar Pelayanan</a>
                        <span class="mx-2">/</span>
                        <span>SPM</span>
                    </nav>
                    <h1 class="text-3xl md:text-4xl font-bold text-white">Standar Pelayanan Minimum (SPM)</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="py-12 md:py-16 bg-gray-50">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white rounded-lg shadow p-8">
                <h2 class="text-xl font-semibold mb-3">Standar Pelayanan Minimum</h2>
                <p class="text-gray-600">Dokumen SPM akan ditampilkan di halaman ini. Untuk sekarang, halaman berisi informasi sementara.</p>
                <p class="mt-4 text-sm text-gray-500">Halaman ini akan segera hadir.</p>
            </div>
        </div>
    </section>
@endsection
