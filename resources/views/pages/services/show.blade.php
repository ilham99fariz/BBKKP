@extends('layouts.app')

@section('title', $service->title . ' - BALAI BESAR STANDARDISASI DAN PELAYANAN JASA INDUSTRI KULIT, PLASTIK, DAN KARET')
@section('description', $service->description)

@section('content')
<!-- Page Header -->
<section class="bg-gradient-to-r from-blue-600 to-blue-800 text-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h1 class="text-3xl md:text-4xl font-bold mb-4">{{ $service->title }}</h1>
            <p class="text-lg text-blue-100 max-w-3xl mx-auto">
                {{ $service->description }}
            </p>
        </div>
    </div>
</section>

<!-- Service Content -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
            <!-- Main Content -->
            <div class="lg:col-span-2">
                <div class="prose prose-lg max-w-none">
                    @if($service->content)
                        {!! $service->content !!}
                    @else
                        <p class="text-gray-600">{{ $service->description }}</p>
                    @endif
                </div>
                
                <!-- Contact CTA -->
                <div class="mt-12 bg-blue-50 rounded-lg p-8">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Tertarik dengan Layanan Ini?</h3>
                    <p class="text-gray-600 mb-6">
                        Hubungi kami untuk konsultasi lebih lanjut dan informasi detail tentang layanan {{ $service->title }}.
                    </p>
                    <a href="{{ route('contact.show') }}" 
                       class="bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700 transition-colors duration-200">
                        Hubungi Kami
                    </a>
                </div>
            </div>
            
            <!-- Sidebar -->
            <div class="lg:col-span-1">
                <!-- Service Info -->
                <div class="bg-gray-50 rounded-lg p-6 mb-8">
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Informasi Layanan</h3>
                    <div class="space-y-3">
                        <div class="flex items-center">
                            <i class="fas fa-check-circle text-green-500 mr-3"></i>
                            <span class="text-gray-700">Layanan Aktif</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-clock text-blue-500 mr-3"></i>
                            <span class="text-gray-700">Tersedia 24/7</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-certificate text-yellow-500 mr-3"></i>
                            <span class="text-gray-700">Bersertifikat</span>
                        </div>
                    </div>
                </div>
                
                <!-- Related Services -->
                @if($relatedServices->count() > 0)
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Layanan Terkait</h3>
                    <div class="space-y-4">
                        @foreach($relatedServices as $relatedService)
                        <div class="border-l-4 border-blue-500 pl-4">
                            <h4 class="font-semibold text-gray-900 mb-1">{{ $relatedService->title }}</h4>
                            <p class="text-sm text-gray-600 mb-2">{{ Str::limit($relatedService->description, 100) }}</p>
                            <a href="{{ route('services.show', $relatedService) }}" 
                               class="text-blue-600 text-sm font-semibold hover:text-blue-700">
                                Pelajari Lebih Lanjut <i class="fas fa-arrow-right ml-1"></i>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</section>

<!-- Back to Services -->
<section class="py-12 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <a href="{{ route('services.index') }}" 
           class="inline-flex items-center text-blue-600 font-semibold hover:text-blue-700 transition-colors duration-200">
            <i class="fas fa-arrow-left mr-2"></i>
            Kembali ke Semua Layanan
        </a>
    </div>
</section>
@endsection
