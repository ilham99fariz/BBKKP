@extends('layouts.app')

@section('title', 'Beranda - BALAI BESAR STANDARDISASI DAN PELAYANAN JASA INDUSTRI KULIT, PLASTIK, DAN KARET')
@section('description',
    'Menyediakan layanan standardisasi dan pelayanan jasa industri berkualitas tinggi untuk
    mendukung perkembangan industri nasional')

@section('content')
    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-blue-600 to-blue-800 text-white py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">
                {{ $settings['hero_title'] ?? 'BALAI BESAR STANDARDISASI DAN PELAYANAN JASA INDUSTRI KULIT, PLASTIK, DAN KARET' }}
            </h1>
            <p class="text-xl md:text-2xl mb-8 text-blue-100 max-w-4xl mx-auto">
                {{ $settings['hero_subtitle'] ?? 'Menyediakan layanan standardisasi dan pelayanan jasa industri berkualitas tinggi untuk mendukung perkembangan industri nasional' }}
            </p>
            <p class="text-lg mb-10 text-blue-200 max-w-3xl mx-auto">
                {{ $settings['hero_description'] ?? 'Kami berkomitmen untuk memberikan pelayanan terbaik dalam bidang standardisasi dan pelayanan jasa industri kulit, plastik, dan karet dengan standar internasional.' }}
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('services.index') }}"
                    class="bg-white text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition">
                    Lihat Layanan Kami
                </a>
                <a href="{{ route('contact.show') }}"
                    class="border-2 border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-blue-600 transition">
                    Hubungi Kami
                </a>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                {{ $settings['about_title'] ?? 'Tentang Kami' }}
            </h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto mb-16">
                {{ $settings['about_description'] ?? 'BALAI BESAR STANDARDISASI DAN PELAYANAN JASA INDUSTRI KULIT, PLASTIK, DAN KARET adalah lembaga yang berdedikasi untuk memberikan pelayanan terbaik dalam bidang standardisasi dan pelayanan jasa industri.' }}
            </p>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center">
                    <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-award text-blue-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Berpengalaman</h3>
                    <p class="text-gray-600">Tim ahli berpengalaman dalam bidang standardisasi industri.</p>
                </div>

                <div class="text-center">
                    <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-certificate text-blue-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Bersertifikat</h3>
                    <p class="text-gray-600">Memiliki sertifikasi internasional untuk kualitas layanan.</p>
                </div>

                <div class="text-center">
                    <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-handshake text-blue-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Terpercaya</h3>
                    <p class="text-gray-600">Dipercaya oleh berbagai perusahaan industri terkemuka.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="py-20 bg-gray-50" x-data="servicesCarousel()" x-init="init()">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                    {{ $settings['services_title'] ?? 'Layanan Kami' }}
                </h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    {{ $settings['services_subtitle'] ?? 'Kami menyediakan berbagai layanan berkualitas tinggi untuk mendukung industri Anda' }}
                </p>
            </div>

            <div class="relative">
                <!-- Prev Button -->
                <button @click="prev()"
                    class="absolute left-0 top-1/2 -translate-y-1/2 z-10 bg-white shadow rounded-full p-3 hover:bg-blue-50 transition"
                    :class="{ 'opacity-50 cursor-not-allowed': currentIndex === 0 }" :disabled="currentIndex === 0">
                    <i class="fas fa-chevron-left"></i>
                </button>

                <!-- Next Button -->
                <button @click="next()"
                    class="absolute right-0 top-1/2 -translate-y-1/2 z-10 bg-white shadow rounded-full p-3 hover:bg-blue-50 transition"
                    :class="{ 'opacity-50 cursor-not-allowed': currentIndex >= maxIndex }"
                    :disabled="currentIndex >= maxIndex">
                    <i class="fas fa-chevron-right"></i>
                </button>

                <!-- Carousel Wrapper -->
                <div class="overflow-hidden" x-ref="carouselWrapper">
                    <div class="flex transition-transform duration-300 ease-in-out"
                        :style="`transform: translateX(-${currentIndex * itemWidth}px)`" @touchstart="touchStart($event)"
                        @touchmove="touchMove($event)" @touchend="touchEnd($event)">

                        @foreach ($services as $service)
                            <div class="flex-shrink-0 px-2" :style="`width: ${itemWidth}px`">
                                <div class="bg-white rounded-lg shadow p-6 hover:shadow-xl transition h-full">
                                    <div class="text-center">
                                        @if ($service->icon)
                                            <div class="w-16 h-16 mx-auto mb-4 overflow-hidden rounded-full">
                                                <img src="{{ Storage::url($service->icon) }}" alt="{{ $service->title }}"
                                                    class="w-full h-full object-cover">
                                            </div>
                                        @else
                                            <div
                                                class="bg-blue-100 w-16 h-16 mx-auto mb-4 flex items-center justify-center rounded-full">
                                                <i class="fas fa-cog text-blue-600 text-2xl"></i>
                                            </div>
                                        @endif
                                        <h3 class="text-xl font-semibold text-gray-900 mb-3 line-clamp-2">
                                            {{ $service->title }}
                                        </h3>
                                        <p class="text-gray-600 mb-4 line-clamp-3">
                                            {{ Str::limit($service->description, 120) }}</p>
                                        <a href="{{ route('services.show', $service) }}"
                                            class="text-blue-600 font-semibold hover:text-blue-700">
                                            Pelajari Lebih Lanjut <i class="fas fa-arrow-right ml-1"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Dots -->
                <div class="flex justify-center mt-8 space-x-2">
                    <template x-for="(dot, index) in dots" :key="index">
                        <button @click="goToSlide(index)" class="w-3 h-3 rounded-full transition-all duration-200"
                            :class="index === currentIndex ? 'bg-blue-600 w-8' : 'bg-gray-300 hover:bg-gray-400'">
                        </button>
                    </template>
                </div>
            </div>

            <div class="text-center mt-12">
                <a href="{{ route('services.index') }}"
                    class="bg-blue-600 text-white px-8 py-3 rounded-lg font-semibold hover:bg-blue-700 transition">
                    Lihat Semua Layanan
                </a>
            </div>
        </div>
    </section>

    <!-- News Section -->
    <!-- News Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                    {{ $settings['news_title'] ?? 'Berita & Update' }}
                </h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    {{ $settings['news_subtitle'] ?? 'Ikuti perkembangan terbaru dari kami' }}
                </p>
            </div>

            @php
                $featured = $news->first();
                $others = $news->skip(1);
            @endphp

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Featured News (besar di kiri) -->
                @if ($featured)
                    <div class="lg:col-span-2 bg-white rounded-lg shadow hover:shadow-xl overflow-hidden transition">
                        @if ($featured->image)
                            <img src="{{ Storage::url($featured->image) }}" alt="{{ $featured->title }}"
                                class="w-full h-96 object-cover">
                        @else
                            <div class="w-full h-96 bg-gray-200 flex items-center justify-center">
                                <i class="fas fa-newspaper text-gray-400 text-6xl"></i>
                            </div>
                        @endif
                        <div class="p-8">
                            <div class="text-sm text-gray-500 mb-2">
                                {{ $featured->published_at->format('d M Y') }} • {{ $featured->author }}
                            </div>
                            <h3 class="text-3xl font-bold text-gray-900 mb-4">{{ $featured->title }}</h3>
                            <p class="text-gray-700 mb-6">{{ Str::limit(strip_tags($featured->content), 180) }}</p>
                            <a href="{{ route('news.show', $featured) }}"
                                class="text-blue-600 font-semibold hover:text-blue-700">
                                Baca Selengkapnya <i class="fas fa-arrow-right ml-1"></i>
                            </a>
                        </div>
                    </div>
                @endif

                <!-- Other News (kecil di kanan) -->
                <div class="space-y-6">
                    @foreach ($others as $article)
                        <div class="flex gap-4 bg-white rounded-lg shadow hover:shadow-lg overflow-hidden transition">
                            @if ($article->image)
                                <img src="{{ Storage::url($article->image) }}" alt="{{ $article->title }}"
                                    class="w-32 h-32 object-cover">
                            @else
                                <div class="w-32 h-32 bg-gray-200 flex items-center justify-center">
                                    <i class="fas fa-newspaper text-gray-400 text-2xl"></i>
                                </div>
                            @endif
                            <div class="p-4 flex-1">
                                <h4 class="text-lg font-semibold text-gray-900 leading-snug mb-1 line-clamp-2">
                                    {{ $article->title }}
                                </h4>
                                <p class="text-sm text-gray-500 mb-2">{{ $article->published_at->format('d M Y') }}</p>
                                <p class="text-gray-600 text-sm line-clamp-3">{{ $article->excerpt }}</p>
                                <a href="{{ route('news.show', $article) }}"
                                    class="text-blue-600 text-sm font-medium hover:text-blue-700">
                                    Baca Selengkapnya
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="text-center mt-12">
                <a href="{{ route('news.index') }}"
                    class="bg-blue-600 text-white px-8 py-3 rounded-lg font-semibold hover:bg-blue-700 transition">
                    Lihat Semua Berita
                </a>
            </div>
        </div>
    </section>




    <!-- Testimonials Section -->

    <!-- Testimonials Section -->
    @if ($testimonials->count())
        <section class="bg-gray-50 py-16">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-bold text-center text-green-700 mb-10">
                    Apa Kata Pelanggan Kami
                </h2>
                <div class="grid md:grid-cols-3 gap-8">
                    @foreach ($testimonials as $testimonial)
                        <div
                            class="bg-white shadow-lg rounded-2xl p-6 flex flex-col justify-between hover:shadow-xl transition">
                            <p class="text-gray-700 italic mb-4">
                                “{{ $testimonial->content }}”
                            </p>
                            <div class="mt-auto">
                                {{-- Nama dan perusahaan --}}
                                <p class="font-semibold text-green-700">
                                    {{ $testimonial->client_name }}
                                </p>
                                @if (!empty($testimonial->client_company))
                                    <p class="text-sm text-gray-500">
                                        {{ $testimonial->client_company }}
                                    </p>
                                @endif

                                {{-- Rating bintang --}}
                                @if (!empty($testimonial->rating))
                                    <div class="flex items-center mt-2">
                                        @for ($i = 1; $i <= 5; $i++)
                                            @if ($i <= $testimonial->rating)
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                    class="w-5 h-5 text-yellow-400" viewBox="0 0 24 24">
                                                    <path
                                                        d="M12 .587l3.668 7.431 8.2 1.193-5.934 5.782 1.402 8.174L12 18.896l-7.336 3.853 1.402-8.174L.132 9.211l8.2-1.193z" />
                                                </svg>
                                            @else
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    stroke="currentColor" class="w-5 h-5 text-gray-300"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.518 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.974 2.888a1 1 0 00-.364 1.118l1.518 4.674c.3.921-.755 1.688-1.54 1.118L12 17.347l-3.962 2.552c-.785.57-1.84-.197-1.54-1.118l1.518-4.674a1 1 0 00-.364-1.118L3.678 9.1c-.783-.57-.38-1.81.588-1.81h4.915a1 1 0 00.95-.69l1.518-4.674z" />
                                                </svg>
                                            @endif
                                        @endfor
                                    </div>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif




    @if ($partners->count() > 0)
        <section class="py-20 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Mitra Kami</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto mb-12">
                    Kami bangga bermitra dengan berbagai organisasi terkemuka.
                </p>

                <!-- Kotak besar berisi semua logo -->
                <div class="bg-gray-50 rounded-3xl shadow-lg p-8">
                    <div
                        class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-8 items-center justify-items-center">
                        @foreach ($partners as $partner)
                            <div class="flex items-center justify-center">
                                @if (!empty($partner->website_url))
                                    <a href="{{ $partner->website_url }}" target="_blank" rel="noopener">
                                        <img src="{{ $partner->logo_url }}" alt="{{ $partner->name }}"
                                            class="max-h-16 object-contain grayscale hover:grayscale-0 transition duration-300">
                                    </a>
                                @else
                                    <img src="{{ $partner->logo_url }}" alt="{{ $partner->name }}"
                                        class="max-h-16 object-contain grayscale hover:grayscale-0 transition duration-300">
                                @endif
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    @endif



    <!-- CTA Section -->

@endsection

@push('scripts')
    <script>
        function servicesCarousel() {
            return {
                currentIndex: 0,
                itemWidth: 0,
                maxIndex: 0,
                dots: [],
                totalItems: {{ $services->count() }},
                init() {
                    this.updateDimensions();
                    window.addEventListener('resize', () => this.updateDimensions());
                    setInterval(() => {
                        this.currentIndex < this.maxIndex ? this.next() : this.goToSlide(0);
                    }, 5000);
                },
                updateDimensions() {
                    const w = this.$refs.carouselWrapper.offsetWidth;
                    let itemsPerSlide = window.innerWidth >= 1024 ? 4 :
                        window.innerWidth >= 768 ? 3 :
                        window.innerWidth >= 640 ? 2 : 1;
                    this.itemWidth = w / itemsPerSlide;
                    this.maxIndex = Math.ceil(this.totalItems / itemsPerSlide) - 1;
                    this.dots = Array(this.maxIndex + 1).fill(0);
                },
                prev() {
                    if (this.currentIndex > 0) this.currentIndex--;
                },
                next() {
                    if (this.currentIndex < this.maxIndex) this.currentIndex++;
                },
                goToSlide(i) {
                    this.currentIndex = i;
                },
                touchStart(e) {
                    this.touchStartX = e.changedTouches[0].screenX;
                },
                touchMove(e) {
                    this.touchEndX = e.changedTouches[0].screenX;
                },
                touchEnd() {
                    if (this.touchStartX - this.touchEndX > 50) this.next();
                    if (this.touchEndX - this.touchStartX > 50) this.prev();
                }
            }
        }
    </script>
@endpush
