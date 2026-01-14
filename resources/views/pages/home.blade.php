@extends('layouts.app')

@section('title', 'Beranda - BALAI BESAR STANDARDISASI DAN PELAYANAN JASA INDUSTRI KULIT, PLASTIK, DAN KARET')
@section('description',
    'Menyediakan layanan standardisasi dan pelayanan jasa industri berkualitas tinggi untuk
    mendukung perkembangan industri nasional')

@section('content')
    
    <!-- Hero Slider Section (NEW - Image Based) -->
    <section class="relative w-full overflow-hidden bg-gray-900" id="hero-slider">
        @if($sliders->count() > 0)
            <div class="relative h-[400px] md:h-[500px] lg:h-[600px]">
                @foreach($sliders as $index => $slider)
                    <div class="slider-item absolute inset-0 transition-opacity duration-[1500ms] ease-in-out {{ $index === 0 ? 'opacity-100 z-10' : 'opacity-0 z-0' }}" 
                         data-slide="{{ $index }}">
                        <img src="{{ Storage::url($slider->image) }}" 
                            alt="{{ $slider->getTitleByLocale() ?? 'Slider Image' }}"
                             class="w-full h-full object-cover">
                        
                        @if($slider->getTitleByLocale() || $slider->getDescriptionByLocale() || $slider->link_url)
                            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/40 to-transparent flex items-end">
                                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-16 md:pb-20 w-full">
                                    <div class="max-w-3xl">
                                        @if($slider->getTitleByLocale())
                                            <h2 class="text-3xl md:text-5xl lg:text-6xl font-bold text-white mb-4 leading-tight">
                                                {{ $slider->getTitleByLocale() }}
                                            </h2>
                                        @endif
                                        @if($slider->getDescriptionByLocale())
                                            <p class="text-lg md:text-xl text-white/90 mb-6">
                                                {{ $slider->getDescriptionByLocale() }}
                                            </p>
                                        @endif
                                        @if($slider->link_url && $slider->getLinkTextByLocale())
                                            <a href="{{ $slider->link_url }}" 
                                               class="inline-block bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-lg font-semibold transition-all transform hover:scale-105">
                                                {{ $slider->getLinkTextByLocale() }}
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                @endforeach

                @if($sliders->count() > 1)
                    <!-- Previous Button -->
                    <button id="slider-prev" 
                            class="absolute left-4 top-1/2 -translate-y-1/2 z-20 bg-white/30 hover:bg-white/50 backdrop-blur-sm text-white p-3 rounded-full transition-all">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                    </button>

                    <!-- Next Button -->
                    <button id="slider-next" 
                            class="absolute right-4 top-1/2 -translate-y-1/2 z-20 bg-white/30 hover:bg-white/50 backdrop-blur-sm text-white p-3 rounded-full transition-all">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>

                    <!-- Dots Navigation -->
                    <div class="absolute bottom-6 left-1/2 -translate-x-1/2 z-20 flex gap-2">
                        @foreach($sliders as $index => $slider)
                            <button class="slider-dot w-3 h-3 rounded-full transition-all {{ $index === 0 ? 'bg-white w-8' : 'bg-white/50' }}" 
                                    data-slide="{{ $index }}">
                            </button>
                        @endforeach
                    </div>
                @endif
            </div>
        @else
            <!-- Fallback jika belum ada slider -->
            <div class="h-[500px] md:h-[600px] bg-gradient-to-r from-blue-600 to-blue-800 flex items-center justify-center">
                <div class="text-center text-white px-4">
                    <h1 class="text-4xl md:text-6xl font-bold mb-6">
                        BALAI BESAR STANDARDISASI DAN PELAYANAN JASA INDUSTRI KULIT, PLASTIK, DAN KARET
                    </h1>
                    <p class="text-xl md:text-2xl text-blue-100 max-w-4xl mx-auto">
                        Menyediakan layanan standardisasi dan pelayanan jasa industri berkualitas tinggi
                    </p>
                </div>
            </div>
        @endif
    </section>


    <section class="py-20 bg-gradient-to-br from-white via-white to-blue-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <!-- Left Side - Image -->
                <div class="flex justify-center lg:justify-start">
                    <img src="{{ asset('images/logobalai.png') }}" alt="Logo BBSPJIKP" class="w-full max-w-md">
                    <!-- Atau jika menggunakan path langsung -->
                    <!-- <img src="/path/to/your/image.png" alt="Logo BBSPJIKP" class="w-full max-w-md"> -->
                </div>

                <!-- Right Side - Content -->
                <div>
                    <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                        {{ __('home.from_testing_to_trust') }}
                    </h2>
                    <p class="text-lg text-gray-700 mb-4">
                        {{ __('home.maintaining_quality') }} <span
                            class="text-green-600 font-semibold">{{ __('common.industry') }}</span>
                    </p>
                    <p class="text-base text-gray-600 leading-relaxed">
                        {{ __('home.vision_description') }}
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section (native scroll slider with arrows + swipe) -->
    <section id="services" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                    {{ __('home.our_services') }}
                </h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    {{ __('home.services_subtitle') }}
                </p>
            </div>
                @php
                    $servicesData = [
                        [
                            'title' => __('common.service_testing'),
                            'description' => __('common.service_testing_desc'),
                            'image' => 'images/Pengujian1.jpg',
                            'slug' => 'pengujian'
                        ],
                        [
                            'title' => __('common.service_calibration'),
                            'description' => __('common.service_calibration_desc'),
                            'image' => 'images/kalibrasiB.jpg',
                            'slug' => 'kalibrasi'
                        ],
                        [
                            'title' => __('common.service_certification'),
                            'description' => __('common.service_certification_desc'),
                            'image' => 'images/Sertifikasi1.png',
                            'slug' => 'sertifikasi'
                        ],
                        [
                            'title' => __('common.service_guidance'),
                            'description' => __('common.service_guidance_desc'),
                            'image' => 'images/konsultasi.png',
                            'slug' => 'bimbingan-teknis-konsultasi'
                        ],
                    ];
                @endphp
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-8">
                @foreach ($servicesData as $service)
                    <div
                        class="bg-white rounded-lg shadow hover:shadow-xl transition h-full flex flex-col overflow-hidden">
                        <div class="w-full h-48 overflow-hidden relative">
                            @if(isset($service['image']))
                                <img src="{{ asset($service['image']) }}" 
                                     alt="{{ $service['title'] }}" 
                                     class="w-full h-full object-cover transition-transform duration-300 hover:scale-110"
                                     onerror="this.parentElement.innerHTML='<div class=\'bg-gradient-to-br from-blue-100 to-blue-200 w-full h-full flex items-center justify-center\'><i class=\'fas fa-file-image text-blue-400 text-5xl\'></i></div>'">
                            @else
                                <div class="bg-gradient-to-br from-blue-100 to-blue-200 w-full h-full flex items-center justify-center">
                                    <i class="fas fa-file-image text-blue-400 text-5xl"></i>
                                </div>
                            @endif
                        </div>
                        <div class="p-6 flex flex-col flex-grow">
                            <h3 class="text-xl font-semibold text-gray-900 mb-3 text-center line-clamp-2">{{ $service['title'] }}</h3>
                            <p class="text-gray-600 mb-4 text-center line-clamp-3 flex-grow">{{ $service['description'] }}</p>
                            <a href="{{ url('/' . $service['slug']) }}"
                                class="text-blue-600 font-semibold hover:text-blue-700 text-center block mt-auto">{{ __('home.learn_more') }} <i
                                    class="fas fa-arrow-right ml-1"></i></a>
                        </div>
                    </div>
                @endforeach
            </div>
            
            <!-- View All Services Button -->
            <div class="text-center mt-12">
                <a href="{{ route('services.index') }}"
                    class="inline-flex items-center bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-lg font-semibold transition-colors duration-200">
                    {{ __('common.view_all_services') }}
                    <i class="fas fa-arrow-right ml-2"></i>
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
                    {{ __('home.news_updates') }}
                </h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    {{ __('home.news_subtitle') }}
                </p>
            </div>

            @php
                $featured = $news->first();
                $others = $news->skip(1)->take(4);
            @endphp

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Featured News (Position 1 - Tampilan Besar) -->
                @if ($featured)
                    <div class="lg:col-span-2 bg-white rounded-lg shadow-lg hover:shadow-xl overflow-hidden transition-all transform hover:scale-[1.02] duration-300">
                        @if ($featured->image)
                            <img src="{{ Storage::url($featured->image) }}" alt="{{ $featured->title }}"
                                class="w-full h-96 object-cover">
                        @else
                            <div class="w-full h-96 bg-gray-200 flex items-center justify-center">
                                <i class="fas fa-newspaper text-gray-400 text-6xl"></i>
                            </div>
                        @endif
                        <div class="p-8">
                            <div class="flex items-center text-sm text-gray-500 mb-3">
                                <i class="fas fa-calendar-alt mr-2"></i>
                                <span>{{ $featured->published_at->format('d M Y') }}</span>
                                <span class="mx-2">•</span>
                                <i class="fas fa-user mr-2"></i>
                                <span>{{ $featured->author }}</span>
                            </div>
                            <h3 class="text-3xl font-bold text-gray-900 mb-4 leading-tight">{{ $featured->title }}</h3>
                            <p class="text-gray-700 mb-6 text-lg">{{ Str::limit(strip_tags($featured->content), 200) }}</p>
                            <a href="{{ route('news.show', $featured) }}"
                                class="inline-flex items-center text-blue-600 font-semibold hover:text-blue-700 transition-colors duration-200">
                                {{ __('home.read_more') }} <i class="fas fa-arrow-right ml-2"></i>
                            </a>
                        </div>
                    </div>
                @endif

                <!-- Priority News (Position 2, 3 - Tampilan Sedang) -->
                <div class="space-y-6">
                    @foreach ($others as $article)
                        <div class="flex gap-4 bg-white rounded-lg shadow-lg hover:shadow-xl overflow-hidden transition-all transform hover:scale-[1.02] duration-300">
                            @if ($article->image)
                                <img src="{{ Storage::url($article->image) }}" alt="{{ $article->title }}"
                                    class="w-32 h-32 object-cover flex-shrink-0">
                            @else
                                <div class="w-32 h-32 bg-gray-200 flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-newspaper text-gray-400 text-2xl"></i>
                                </div>
                            @endif
                            <div class="p-4 flex-1 flex flex-col">
                                <div class="flex items-center text-xs text-gray-500 mb-2">
                                    <i class="fas fa-calendar-alt mr-1"></i>
                                    <span>{{ $article->published_at->format('d M Y') }}</span>
                                </div>
                                <h4 class="text-lg font-semibold text-gray-900 leading-snug mb-2 line-clamp-2">
                                    {{ $article->title }}
                                </h4>
                                <p class="text-gray-600 text-sm line-clamp-2 flex-grow mb-3">{{ $article->excerpt }}</p>
                                <a href="{{ route('news.show', $article) }}"
                                    class="text-blue-600 text-sm font-semibold hover:text-blue-700 inline-flex items-center transition-colors duration-200">
                                    {{ __('home.read_more') }} <i class="fas fa-arrow-right ml-1"></i>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="text-center mt-12">
                <a href="{{ route('news.index') }}"
                    class="border-2 border-blue-600 text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-blue-600 hover:text-white transition">
                    {{ __('home.view_all_news') }}
                </a>
            </div>
        </div>
    </section>




    <!-- Testimonials Section (Display Only) -->
    <section class="bg-gray-50 py-16" id="testimonials">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center text-green-700 mb-4">
                {{ __('home.what_our_customers_say') }}
            </h2>
            <p class="text-center text-gray-600 mb-10 max-w-2xl mx-auto">
                {{ __('common.testimonials_subtitle_long') }}
            </p>

            {{-- Daftar testimoni yang sudah disetujui admin --}}
            @if ($testimonials->count())
                <div class="grid md:grid-cols-3 gap-8">
                    @foreach ($testimonials as $testimonial)
                        <div
                            class="bg-white shadow-lg rounded-2xl p-6 flex flex-col justify-between hover:shadow-xl transition">
                            <div class="mb-3">
                                <p class="font-semibold text-green-700">
                                    {{ $testimonial->client_name }}
                                </p>
                                @if (!empty($testimonial->client_company))
                                    <p class="text-sm text-gray-500">
                                        {{ $testimonial->client_company }}
                                    </p>
                                @endif
                            </div>

                            @if (!empty($testimonial->image))
                                <div class="mb-4">
                                    <img src="{{ Storage::url($testimonial->image) }}" alt="Lampiran review"
                                        class="w-full h-48 object-cover rounded-xl border border-gray-100 shadow-sm">
                                </div>
                            @endif

                            <p class="text-gray-700 italic mb-4">
                                “{{ $testimonial->content }}”
                            </p>

                            {{-- Rating bintang --}}
                            @if (!empty($testimonial->rating))
                                <div class="flex items-center mt-auto">
                                    @for ($i = 1; $i <= 5; $i++)
                                        @if ($i <= $testimonial->rating)
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                class="w-5 h-5 text-yellow-400" viewBox="0 0 24 24">
                                                <path
                                                    d="M12 .587l3.668 7.431 8.2 1.193-5.934 5.782 1.402 8.174L12 18.896l-7.336 3.853 1.402-8.174L.132 9.211l8.2-1.193z" />
                                            </svg>
                                        @else
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor"
                                                class="w-5 h-5 text-gray-300" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.518 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.974 2.888a1 1 0 00-.364 1.118l1.518 4.674c.3.921-.755 1.688-1.54 1.118L12 17.347l-3.962 2.552c-.785.57-1.84-.197-1.54-1.118l1.518-4.674a1 1 0 00-.364-1.118L3.678 9.1c-.783-.57-.38-1.81.588-1.81h4.915a1 1 0 00.95-.69l1.518-4.674z" />
                                            </svg>
                                        @endif
                                    @endfor
                                </div>
                            @endif
                        </div>
                    @endforeach
                </div>
                <div class="text-center mt-10 flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ route('testimonials.form') }}"
                        class="inline-flex items-center justify-center px-6 py-2.5 bg-green-600 text-white rounded-md font-semibold hover:bg-green-700 transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                        </svg>
                        {{ __('common.testimonials_submit') }}
                    </a>
                    <a href="{{ route('testimonials.index') }}"
                        class="inline-flex items-center justify-center px-6 py-2.5 border border-green-600 text-green-700 rounded-md font-semibold hover:bg-green-50 transition">
                        {{ __('common.testimonials_view_all') }}
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 ml-2" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                </div>
            @else
                <p class="text-center text-gray-500">
                    {{ __('common.testimonials_empty') }}
                </p>
            @endif
        </div>
    </section>




    @if ($partners->count() > 0)
        <section class="py-20 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">{{ __('home.our_partners') }}</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto mb-12">
                    {{ __('home.partners_subtitle') }}
                </p>

                <!-- Kotak besar berisi carousel logo -->
                <div class="bg-gray-50 rounded-3xl shadow-lg p-8 relative">
                    <div id="partners-carousel" class="overflow-hidden cursor-grab select-none"
                        aria-label="{{ __('home.our_partners') }}">
                        <div id="partners-track" class="flex items-center gap-10 w-max py-2">
                            @foreach (range(1, 2) as $loopIndex)
                                @foreach ($partners as $partner)
                                    <div
                                        class="flex-shrink-0 w-44 h-20 flex items-center justify-center bg-white rounded-2xl shadow-sm border border-gray-100 hover:shadow-md transition">
                                        @if (!empty($partner->website_url))
                                            <a href="{{ $partner->website_url }}" target="_blank" rel="noopener"
                                                class="flex items-center justify-center w-full h-full px-4">
                                                <img src="{{ $partner->logo_url }}" alt="{{ $partner->name }}"
                                                    class="max-h-14 object-contain grayscale hover:grayscale-0 transition duration-300">
                                            </a>
                                        @else
                                            <img src="{{ $partner->logo_url }}" alt="{{ $partner->name }}"
                                                class="max-h-14 object-contain grayscale hover:grayscale-0 transition duration-300 px-4">
                                        @endif
                                    </div>
                                @endforeach
                            @endforeach
                        </div>
                    </div>
                    <div
                        class="pointer-events-none absolute inset-y-0 left-0 w-32 bg-gradient-to-r from-gray-50 to-transparent">
                    </div>
                    <div
                        class="pointer-events-none absolute inset-y-0 right-0 w-32 bg-gradient-to-l from-gray-50 to-transparent">
                    </div>
                </div>
            </div>
        </section>
    @endif



    <!-- CTA Section -->
    {{-- <!-- Atau Bisa Seperti Di Bawah Ini -->
    <script type="text/javascript" src="https://web.animemusic.us/widget_disabilitas.js" api-key-resvoice="bzbTAKXD">
    </script> --}}
    <!-- ganti key api-key-resvoice dengan key yang ada di responsive voice-->
@endsection

@push('scripts')
    {{-- Hero Slider Script --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const sliderItems = document.querySelectorAll('.slider-item');
            const sliderDots = document.querySelectorAll('.slider-dot');
            const prevBtn = document.getElementById('slider-prev');
            const nextBtn = document.getElementById('slider-next');
            
            if (sliderItems.length === 0) return;
            
            let currentSlide = 0;
            const totalSlides = sliderItems.length;
            let autoplayInterval;

            function showSlide(index) {
                // Hide all slides
                sliderItems.forEach((item, i) => {
                    if (i === index) {
                        item.classList.remove('opacity-0', 'z-0');
                        item.classList.add('opacity-100', 'z-10');
                    } else {
                        item.classList.remove('opacity-100', 'z-10');
                        item.classList.add('opacity-0', 'z-0');
                    }
                });

                // Update dots
                sliderDots.forEach((dot, i) => {
                    if (i === index) {
                        dot.classList.add('bg-white', 'w-8');
                        dot.classList.remove('bg-white/50');
                    } else {
                        dot.classList.remove('bg-white', 'w-8');
                        dot.classList.add('bg-white/50');
                    }
                });
            }

            function nextSlide() {
                currentSlide = (currentSlide + 1) % totalSlides;
                showSlide(currentSlide);
            }

            function prevSlide() {
                currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
                showSlide(currentSlide);
            }

            function startAutoplay() {
                if (totalSlides > 1) {
                    autoplayInterval = setInterval(nextSlide, 7000); // Auto slide setiap 7 detik
                }
            }

            function stopAutoplay() {
                clearInterval(autoplayInterval);
            }

            // Event listeners
            if (nextBtn) {
                nextBtn.addEventListener('click', () => {
                    stopAutoplay();
                    nextSlide();
                    startAutoplay();
                });
            }

            if (prevBtn) {
                prevBtn.addEventListener('click', () => {
                    stopAutoplay();
                    prevSlide();
                    startAutoplay();
                });
            }

            sliderDots.forEach((dot, index) => {
                dot.addEventListener('click', () => {
                    stopAutoplay();
                    currentSlide = index;
                    showSlide(currentSlide);
                    startAutoplay();
                });
            });

            // Pause on hover
            const sliderSection = document.getElementById('hero-slider');
            if (sliderSection) {
                sliderSection.addEventListener('mouseenter', stopAutoplay);
                sliderSection.addEventListener('mouseleave', startAutoplay);
            }

            // Start autoplay
            startAutoplay();
        });
    </script>

    {{-- Services Slider Script --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const slider = document.getElementById('services-slider');
            if (!slider) return;

            const prevBtn = document.getElementById('services-prev');
            const nextBtn = document.getElementById('services-next');
            const dotsContainer = document.getElementById('services-dots');

            function getItems() {
                return Array.from(slider.querySelectorAll('.flex > .flex-shrink-0, .flex > [class*="w-"]'));
            }

            function itemsPerView() {
                const w = window.innerWidth;
                if (w >= 1024) return 4;
                if (w >= 768) return 3;
                if (w >= 640) return 2;
                return 1;
            }

            function updateDots() {
                const items = getItems();
                const per = itemsPerView();
                const pages = Math.max(1, Math.ceil(items.length / per));
                dotsContainer.innerHTML = '';
                for (let i = 0; i < pages; i++) {
                    const btn = document.createElement('button');
                    btn.className = 'w-3 h-3 rounded-full transition-all duration-200 bg-gray-300';
                    btn.addEventListener('click', () => {
                        slider.scrollTo({
                            left: i * slider.clientWidth,
                            behavior: 'smooth'
                        });
                    });
                    dotsContainer.appendChild(btn);
                }
                updateActiveDot();
            }

            function updateActiveDot() {
                const items = getItems();
                if (!items.length) return;
                const per = itemsPerView();
                const left = slider.scrollLeft;
                const page = Math.round(left / slider.clientWidth);
                const dots = dotsContainer.querySelectorAll('button');
                dots.forEach((d, i) => d.className = i === page ?
                    'w-8 h-3 rounded-full bg-blue-600 transition-all duration-200' :
                    'w-3 h-3 rounded-full bg-gray-300 transition-all duration-200');
            }

            // Prev/Next scroll by one viewport-width (page)
            prevBtn && prevBtn.addEventListener('click', () => {
                slider.scrollBy({
                    left: -slider.clientWidth,
                    behavior: 'smooth'
                });
            });
            nextBtn && nextBtn.addEventListener('click', () => {
                slider.scrollBy({
                    left: slider.clientWidth,
                    behavior: 'smooth'
                });
            });

            // Pointer drag for desktop
            let isDown = false,
                startX = 0,
                scrollLeft = 0;
            slider.addEventListener('pointerdown', (e) => {
                isDown = true;
                slider.setPointerCapture(e.pointerId);
                startX = e.clientX;
                scrollLeft = slider.scrollLeft;
                slider.classList.add('cursor-grabbing');
            });
            slider.addEventListener('pointermove', (e) => {
                if (!isDown) return;
                const x = e.clientX;
                const walk = startX - x;
                slider.scrollLeft = scrollLeft + walk;
            });
            slider.addEventListener('pointerup', (e) => {
                isDown = false;
                try {
                    slider.releasePointerCapture(e.pointerId);
                } catch (er) {}
                slider.classList.remove('cursor-grabbing');
            });
            slider.addEventListener('pointercancel', () => {
                isDown = false;
                slider.classList.remove('cursor-grabbing');
            });

            // Update dots on resize and scroll
            window.addEventListener('resize', updateDots);
            slider.addEventListener('scroll', () => {
                // throttle via requestAnimationFrame
                window.requestAnimationFrame(updateActiveDot);
            });

            // init
            updateDots();

            // autoplay (optional) - slow interval
            let autoplay = setInterval(() => {
                if (document.hidden) return;
                slider.scrollBy({
                    left: slider.clientWidth,
                    behavior: 'smooth'
                });
            }, 7000);
            slider.addEventListener('mouseenter', () => clearInterval(autoplay));
            slider.addEventListener('mouseleave', () => {
                autoplay = setInterval(() => slider.scrollBy({
                    left: slider.clientWidth,
                    behavior: 'smooth'
                }), 7000);
            });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const carousel = document.getElementById('partners-carousel');
            const track = document.getElementById('partners-track');
            if (!carousel || !track) return;

            let segmentWidth = track.scrollWidth / 2;
            const speed = 0.4;
            let animationId = null;

            const updateSegmentWidth = () => {
                segmentWidth = track.scrollWidth / 2;
            };

            const loop = () => {
                carousel.scrollLeft += speed;
                if (carousel.scrollLeft >= segmentWidth) {
                    carousel.scrollLeft -= segmentWidth;
                }
                animationId = requestAnimationFrame(loop);
            };

            const start = () => {
                if (!animationId) {
                    animationId = requestAnimationFrame(loop);
                }
            };

            const stop = () => {
                if (animationId) {
                    cancelAnimationFrame(animationId);
                    animationId = null;
                }
            };

            start();

            window.addEventListener('resize', () => {
                const ratio = carousel.scrollLeft / segmentWidth;
                updateSegmentWidth();
                carousel.scrollLeft = segmentWidth * ratio;
            });

            let isDown = false;
            let startX = 0;
            let scrollLeft = 0;

            carousel.addEventListener('pointerdown', (e) => {
                isDown = true;
                carousel.setPointerCapture(e.pointerId);
                startX = e.clientX;
                scrollLeft = carousel.scrollLeft;
                carousel.classList.add('cursor-grabbing');
                stop();
            });

            carousel.addEventListener('pointermove', (e) => {
                if (!isDown) return;
                const walk = startX - e.clientX;
                carousel.scrollLeft = scrollLeft + walk;
            });

            const endDrag = (e) => {
                if (!isDown) return;
                isDown = false;
                carousel.classList.remove('cursor-grabbing');
                try {
                    carousel.releasePointerCapture(e.pointerId);
                } catch (error) {}
                start();
            };

            carousel.addEventListener('pointerup', endDrag);
            carousel.addEventListener('pointerleave', endDrag);
            carousel.addEventListener('pointercancel', endDrag);

            carousel.addEventListener('mouseenter', stop);
            carousel.addEventListener('mouseleave', start);

            carousel.addEventListener('wheel', (e) => {
                stop();
                carousel.scrollLeft += e.deltaY || e.deltaX;
                start();
            }, {
                passive: true
            });
        });
    </script>
@endpush
