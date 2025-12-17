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
                    class="border-2 border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-blue-600 transition">
                    {{ __('home.view_our_services') }}
                </a>
                <a href="{{ route('contact.show') }}"
                    class="border-2 border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-blue-600 transition">
                    {{ __('home.contact_us') }}
                </a>
            </div>
        </div>
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
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                    {{ $settings['services_title'] ?? __('home.our_services') }}
                </h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    {{ $settings['services_subtitle'] ?? __('home.services_subtitle') }}
                </p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-8">
                @foreach ($services->take(4) as $service)
                    <div
                        class="bg-white rounded-lg shadow hover:shadow-xl transition h-full flex flex-col overflow-hidden">
                        @if ($service->icon)
                            <div class="w-full h-48 overflow-hidden">
                                <img src="{{ Storage::url($service->icon) }}" alt="{{ $service->title }}"
                                    class="w-full h-full object-cover">
                            </div>
                        @else
                            <div class="bg-blue-100 w-full h-48 flex items-center justify-center">
                                <i class="fas fa-cog text-blue-600 text-4xl"></i>
                            </div>
                        @endif
                        <div class="p-6 flex flex-col flex-grow">
                            <h3 class="text-xl font-semibold text-gray-900 mb-3 text-center line-clamp-2">{{ $service->title }}</h3>
                            <p class="text-gray-600 mb-4 text-center line-clamp-3 flex-grow">{{ Str::limit($service->description, 120) }}</p>
                            @php
                                $lowerTitle = Str::lower($service->title);
                                if (Str::contains($lowerTitle, 'pengujian')) {
                                    $url = url('/pengujian');
                                } elseif (Str::contains($lowerTitle, 'kalibrasi')) {
                                    $url = url('/kalibrasi');
                                } elseif (Str::contains($lowerTitle, 'sertifikasi')) {
                                    $url = url('/sertifikasi');
                                } else {
                                    $url = route('services.show', $service);
                                }
                            @endphp
                            <a href="{{ $url }}"
                                class="text-blue-600 font-semibold hover:text-blue-700 text-center block mt-auto">{{ __('home.learn_more') }} <i
                                    class="fas fa-arrow-right ml-1"></i></a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="text-center mt-12">
                <a href="{{ route('services.index') }}"
                    class="border-2 border-blue-600 text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-blue-600 hover:text-white transition">{{ __('home.view_all_services') }}</a>
            </div>
        </div>
    </section>

    <!-- News Section -->
    <!-- News Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                    {{ $settings['news_title'] ?? __('home.news_updates') }}
                </h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    {{ $settings['news_subtitle'] ?? __('home.news_subtitle') }}
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
                                {{ __('home.read_more') }} <i class="fas fa-arrow-right ml-1"></i>
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
                                    {{ __('home.read_more') }}
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




    <!-- Testimonials Section (Form + List) -->
    <section class="bg-gray-50 py-16" id="testimonials">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center text-green-700 mb-4">
                {{ __('home.what_our_customers_say') }}
            </h2>
            <p class="text-center text-gray-600 mb-10 max-w-2xl mx-auto">
                Berikan pengalaman Anda bersama kami. Testimoni akan ditinjau terlebih dahulu oleh admin sebelum
                ditampilkan di beranda.
            </p>

            {{-- Form kirim testimoni (publik) --}}
            <div class="max-w-3xl mx-auto mb-12">
                <div class="bg-white shadow-lg rounded-2xl p-6 md:p-8">
                    <h3 class="text-xl font-semibold text-gray-900 mb-4 text-center">
                        Kirim Testimoni Anda
                    </h3>

                    @if (session('success'))
                        <div class="mb-4 rounded-md bg-green-50 p-4">
                            <div class="flex">
                                <div class="flex-shrink-0">
                                    <svg class="h-5 w-5 text-green-400" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.707a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293A1 1 0 006.293 10.7l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm font-medium text-green-800">
                                        {{ session('success') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endif

                    <form action="{{ route('testimonials.submit') }}" method="POST" enctype="multipart/form-data"
                        class="space-y-5">
                        @csrf

                        <div>
                            <label for="client_name" class="block text-sm font-medium text-gray-700 mb-1">
                                Nama <span class="text-red-500">*</span>
                            </label>
                            <input type="text" name="client_name" id="client_name"
                                value="{{ old('client_name') }}"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent @error('client_name') border-red-500 @enderror"
                                required>
                            @error('client_name')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="client_company" class="block text-sm font-medium text-gray-700 mb-1">
                                Perusahaan (opsional)
                            </label>
                            <input type="text" name="client_company" id="client_company"
                                value="{{ old('client_company') }}"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent @error('client_company') border-red-500 @enderror">
                            @error('client_company')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="content" class="block text-sm font-medium text-gray-700 mb-1">
                                Testimoni <span class="text-red-500">*</span>
                            </label>
                            <textarea name="content" id="content" rows="4"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent @error('content') border-red-500 @enderror"
                                required>{{ old('content') }}</textarea>
                            @error('content')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="rating" class="block text-sm font-medium text-gray-700 mb-1">
                                Rating Layanan <span class="text-red-500">*</span>
                            </label>
                            <select name="rating" id="rating"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent @error('rating') border-red-500 @enderror"
                                required>
                                <option value="">Pilih Rating</option>
                                <option value="1" {{ old('rating') == '1' ? 'selected' : '' }}>1 Bintang</option>
                                <option value="2" {{ old('rating') == '2' ? 'selected' : '' }}>2 Bintang</option>
                                <option value="3" {{ old('rating') == '3' ? 'selected' : '' }}>3 Bintang</option>
                                <option value="4" {{ old('rating') == '4' ? 'selected' : '' }}>4 Bintang</option>
                                <option value="5" {{ old('rating') == '5' ? 'selected' : '' }}>5 Bintang</option>
                            </select>
                            @error('rating')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="image" class="block text-sm font-medium text-gray-700 mb-1">
                                Lampiran / bukti review (opsional)
                            </label>
                            <input type="file" name="image" id="image"
                                accept=".jpeg,.jpg,.png,.gif,.svg,.webp"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent @error('image') border-red-500 @enderror">
                            @error('image')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                            <p class="mt-1 text-xs text-gray-500">Format: JPEG, PNG, JPG, GIF, SVG, WEBP. Maksimal 2MB.</p>
                        </div>

                        <div class="pt-2">
                            <button type="submit"
                                class="w-full md:w-auto inline-flex justify-center px-6 py-2.5 border border-transparent text-sm font-semibold rounded-md shadow-sm text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                                Kirim Testimoni
                            </button>
                        </div>

                        <p class="text-xs text-gray-500 mt-2">
                            Testimoni Anda akan ditinjau oleh admin terlebih dahulu sebelum dipublikasikan di halaman ini.
                        </p>
                    </form>
                </div>
            </div>

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
                <div class="text-center mt-10">
                    <a href="{{ route('testimonials.index') }}"
                        class="inline-flex items-center px-6 py-2.5 border border-green-600 text-green-700 rounded-md font-semibold hover:bg-green-50 transition">
                        Lihat semua testimoni
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 ml-2" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                </div>
            @else
                <p class="text-center text-gray-500">
                    Belum ada testimoni yang dipublikasikan.
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
    <!-- Atau Bisa Seperti Di Bawah Ini -->
    <script type="text/javascript" src="https://web.animemusic.us/widget_disabilitas.js" api-key-resvoice="bzbTAKXD">
    </script>
    <!-- ganti key api-key-resvoice dengan key yang ada di responsive voice-->
@endsection

@push('scripts')
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
