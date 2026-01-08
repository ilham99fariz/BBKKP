@extends('layouts.app')

@section('title', 'Kontak - BALAI BESAR STANDARDISASI DAN PELAYANAN JASA INDUSTRI KULIT, PLASTIK, DAN KARET')
@section('description', 'Hubungi kami untuk informasi lebih lanjut tentang layanan standardisasi dan pelayanan jasa industri')

@section('content')
    <!-- Page Header -->
    <section class="bg-gradient-to-r from-blue-600 to-blue-900 text-white py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-3xl md:text-4xl font-bold mb-4">Kontak Kami</h1>
                <p class="text-lg text-blue-100 max-w-3xl mx-auto">
                    Siap membantu kebutuhan industri Anda
                </p>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Contact Form -->
                <div class="bg-white rounded-lg shadow-lg p-8">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6">Kirim Pesan</h2>

                    @if(session('success'))
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if(session('error'))
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6">
                            {{ session('error') }}
                        </div>
                    @endif

                    <form action="{{ route('contact.submit') }}" method="POST" class="space-y-6">
                        @csrf

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Nama Lengkap
                                    *</label>
                                <input type="text" id="name" name="name" value="{{ old('name') }}"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('name') border-red-500 @enderror"
                                    required>
                                @error('name')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email *</label>
                                <input type="email" id="email" name="email" value="{{ old('email') }}"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('email') border-red-500 @enderror"
                                    required>
                                @error('email')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Telepon</label>
                                <input type="tel" id="phone" name="phone" value="{{ old('phone') }}"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('phone') border-red-500 @enderror">
                                @error('phone')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="company" class="block text-sm font-medium text-gray-700 mb-2">Perusahaan</label>
                                <input type="text" id="company" name="company" value="{{ old('company') }}"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('company') border-red-500 @enderror">
                                @error('company')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <label for="subject" class="block text-sm font-medium text-gray-700 mb-2">Subjek *</label>
                            <input type="text" id="subject" name="subject" value="{{ old('subject') }}"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('subject') border-red-500 @enderror"
                                required>
                            @error('subject')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="purpose" class="block text-sm font-medium text-gray-700 mb-2">Keperluan *</label>
                            <select id="purpose" name="purpose" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('purpose') border-red-500 @enderror">
                                <option value="" disabled {{ old('purpose') ? '' : 'selected' }}>Pilih keperluan</option>
                                <option value="kunjungan" {{ old('purpose') == 'kunjungan' ? 'selected' : '' }}>Kunjungan
                                </option>
                                <option value="ajuan_layanan" {{ old('purpose') == 'ajuan_layanan' ? 'selected' : '' }}>Ajuan
                                    Layanan</option>
                                <option value="lainnya" {{ old('purpose') == 'lainnya' ? 'selected' : '' }}>Lainnya</option>
                            </select>
                            @error('purpose')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Pesan *</label>
                            <textarea id="message" name="message" rows="6"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('message') border-red-500 @enderror"
                                required>{{ old('message') }}</textarea>
                            @error('message')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <button type="submit"
                            class="w-full bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700 transition-colors duration-200">
                            Kirim Pesan
                        </button>
                    </form>
                </div>

                <!-- Contact Information -->
                <div class="space-y-8">
                    <!-- Office Info -->
                    <div class="bg-white rounded-lg shadow-lg p-8">
                        <h2 class="text-2xl font-bold text-gray-900 mb-6">Informasi Kantor</h2>
                        <div class="space-y-4">
                            <div class="flex items-start">
                                <div
                                    class="bg-blue-100 w-12 h-12 rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                                    <i class="fas fa-map-marker-alt text-blue-600"></i>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-900">Alamat</h3>
                                    <a href="https://maps.app.goo.gl/FtS4PNQ56YYLv4z86" target="_blank"
                                        class="text-gray-600 hover:text-blue-600 transition-colors duration-200">Jl.
                                        Sukonandi No.9, Semaki, Kec. Umbulharjo,<br>Kota Yogyakarta, Daerah Istimewa
                                        Yogyakarta<br>55166, Indonesia</a>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <div
                                    class="bg-blue-100 w-12 h-12 rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                                    <i class="fas fa-phone text-blue-600"></i>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-900">Telepon</h3>
                                    <p class="text-gray-600">+62 (274) 512-929</p>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <div
                                    class="bg-blue-100 w-12 h-12 rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                                    <i class="fas fa-envelope text-blue-600"></i>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-900">Email</h3>
                                    <a href="mailto:bbkkp_jogja@yahoo.com"
                                        class="text-gray-600 hover:text-blue-600 transition-colors duration-200">bbkkp_jogja@kemenprin.id</a>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <div
                                    class="bg-blue-100 w-12 h-12 rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                                    <i class="fas fa-clock text-blue-600"></i>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-900 mb-3">Jam Operasional</h3>
                                    <div class="space-y-2 max-w-sm">
                                        <div
                                            class="flex items-center bg-blue-50 px-4 py-2 rounded-lg border-l-4 border-blue-600">
                                            <span class="text-gray-700 w-32">Senin - Kamis</span>
                                            <span class="font-semibold text-blue-600">08:00 - 15:30</span>
                                        </div>
                                        <div
                                            class="flex items-center bg-blue-50 px-4 py-2 rounded-lg border-l-4 border-blue-600">
                                            <span class="text-gray-700 w-32">Jum'at</span>
                                            <span class="font-semibold text-blue-600">08:00 - 16:00</span>
                                        </div>
                                        <div
                                            class="flex items-center bg-red-50 px-4 py-2 rounded-lg border-l-4 border-red-600">
                                            <span class="text-gray-700 w-32">Sabtu - Minggu</span>
                                            <span class="font-semibold text-red-600">Tutup</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Map -->
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                        <div class="p-6 bg-gradient-to-r from-blue-600 to-blue-700">
                            <h2 class="text-2xl font-bold text-white mb-2">Lokasi Kami</h2>
                            <p class="text-blue-100">Temukan kami di peta</p>
                        </div>
                        <div class="p-6">
                            <!-- Location Info Card -->
                            <div class="mb-4 p-4 bg-gray-50 rounded-lg border border-gray-200">
                                <div class="flex items-start mb-3">
                                    <div
                                        class="bg-red-500 w-8 h-8 rounded-full flex items-center justify-center mr-3 flex-shrink-0 mt-1">
                                        <i class="fas fa-map-marker-alt text-white text-sm"></i>
                                    </div>
                                    <div>
                                        <h3 class="font-bold text-gray-900 mb-1">Balai Besar Kulit, Karet dan Plastik</h3>
                                        <p class="text-sm text-gray-600">Jl. Sukonandi No.9, Semaki, Kec. Umbulharjo, Kota
                                            Yogyakarta, Daerah Istimewa Yogyakarta 55166</p>
                                        <div class="flex items-center mt-2">
                                            <div class="flex items-center text-yellow-400 mr-2">
                                                <i class="fas fa-star text-xs"></i>
                                                <span class="ml-1 text-sm font-semibold text-gray-900">4.6</span>
                                            </div>
                                            <a href="https://www.google.com/maps/place/Balai+Besar+Kulit,+Karet+dan+Plastik/@-7.779399,110.389257,17z/data=!4m7!3m6!1s0x2e7a59e4a6b0c0c7:0x7e9e8e0e8e8e8e8e!8m2!3d-7.779399!4d110.391851!15sCjBCYWxhaSBCZXNhciBLdWxpdCwgS2FyZXQgZGFuIFBsYXN0aWsgWW9neWFrYXJ0YZIBDmdvdmVybm1lbnRfb2ZmaWNl4AEA!16s%2Fg%2F11c5n3j9xh"
                                                target="_blank" class="text-xs text-blue-600 hover:underline">(50
                                                reviews)</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex gap-2">
                                    <a href="https://maps.app.goo.gl/Q6KFuoJ2DxtJNprC8" target="_blank"
                                        class="flex-1 inline-flex items-center justify-center px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-lg hover:bg-blue-700 transition-colors">
                                        <i class="fas fa-directions mr-2"></i>
                                        Directions
                                    </a>
                                    <a href="https://www.google.com/maps/place/Balai+Besar+Kulit,+Karet+dan+Plastik/@-7.779399,110.389257,17z"
                                        target="_blank"
                                        class="inline-flex items-center justify-center px-4 py-2 border border-gray-300 text-gray-700 text-sm font-medium rounded-lg hover:bg-gray-50 transition-colors">
                                        <i class="fas fa-external-link-alt mr-2"></i>
                                        View larger map
                                    </a>
                                </div>
                            </div>

                            <!-- Google Maps Embed -->
                            <div class="rounded-lg overflow-hidden border border-gray-200">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.1445988679084!2d110.38925687501677!3d-7.779399392240474!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a59e4a6b0c0c7%3A0x7e9e8e0e8e8e8e8e!2sBalai%20Besar%20Kulit%2C%20Karet%20dan%20Plastik!5e0!3m2!1sid!2sid!4v1735628400000!5m2!1sid!2sid"
                                    width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade">
                                </iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-10 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Pertanyaan yang Sering Diajukan</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Temukan jawaban untuk pertanyaan yang sering diajukan tentang layanan kami
                </p>
            </div>

            <div class="max-w-3xl mx-auto">
                <div class="space-y-4" x-data="{ open: null }">
                    <div class="bg-gray-50 rounded-lg">
                        <button @click="open = open === 1 ? null : 1"
                            class="w-full px-6 py-4 text-left font-semibold text-gray-900 flex justify-between items-center">
                            <span>Bagaimana cara mengajukan permohonan layanan?</span>
                            <i class="fas fa-chevron-down transition-transform duration-200"
                                :class="{ 'rotate-180': open === 1 }"></i>
                        </button>
                        <div x-show="open === 1" x-cloak class="px-6 pb-4 text-gray-600">
                            <p>Anda dapat mengajukan permohonan layanan dengan mengisi formulir kontak di halaman ini atau
                                menghubungi kami langsung melalui telepon atau email. Tim kami akan segera merespons
                                permohonan Anda.</p>
                        </div>
                    </div>

                    <div class="bg-gray-50 rounded-lg">
                        <button @click="open = open === 2 ? null : 2"
                            class="w-full px-6 py-4 text-left font-semibold text-gray-900 flex justify-between items-center">
                            <span>Berapa lama waktu proses layanan?</span>
                            <i class="fas fa-chevron-down transition-transform duration-200"
                                :class="{ 'rotate-180': open === 2 }"></i>
                        </button>
                        <div x-show="open === 2" x-cloak class="px-6 pb-4 text-gray-600">
                            <p>Waktu proses layanan bervariasi tergantung jenis layanan yang diminta. Umumnya, proses audit
                                dan sertifikasi memakan waktu 7-14 hari kerja, sedangkan testing dan analisis memakan waktu
                                3-7 hari kerja.</p>
                        </div>
                    </div>

                    <div class="bg-gray-50 rounded-lg">
                        <button @click="open = open === 3 ? null : 3"
                            class="w-full px-6 py-4 text-left font-semibold text-gray-900 flex justify-between items-center">
                            <span>Apakah layanan tersedia untuk perusahaan kecil?</span>
                            <i class="fas fa-chevron-down transition-transform duration-200"
                                :class="{ 'rotate-180': open === 3 }"></i>
                        </button>
                        <div x-show="open === 3" x-cloak class="px-6 pb-4 text-gray-600">
                            <p>Ya, kami melayani semua jenis perusahaan, baik besar maupun kecil. Kami memiliki paket
                                layanan yang disesuaikan dengan kebutuhan dan budget perusahaan Anda.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection