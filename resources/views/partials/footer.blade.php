<!-- Footer -->
<footer class="bg-gray-900 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Company Info -->
            <div class="col-span-1 lg:col-span-2">
                <div class="flex items-center mb-4">
                    <img class="h-8 w-8" src="{{ asset('images/logo.png') }}" alt="Logo">
                    <span class="ml-2 text-xl font-bold">BALAI BESAR</span>
                </div>
                <p class="text-gray-300 mb-4 leading-relaxed">
                    BALAI BESAR STANDARDISASI DAN PELAYANAN JASA INDUSTRI KULIT, PLASTIK, DAN KARET
                </p>
                <p class="text-gray-300 text-sm">
                    Menyediakan layanan standardisasi dan pelayanan jasa industri berkualitas tinggi untuk mendukung perkembangan industri nasional.
                </p>
            </div>

            <!-- Quick Links -->
            <div>
                <h3 class="text-lg font-semibold mb-4">Menu Cepat</h3>
                <ul class="space-y-2">
                    <li><a href="{{ route('home') }}" class="text-gray-300 hover:text-white transition-colors duration-200">Beranda</a></li>
                    <li><a href="{{ route('services.index') }}" class="text-gray-300 hover:text-white transition-colors duration-200">Layanan</a></li>
                    <li><a href="{{ route('news.index') }}" class="text-gray-300 hover:text-white transition-colors duration-200">Berita</a></li>
                    <li><a href="{{ route('contact.show') }}" class="text-gray-300 hover:text-white transition-colors duration-200">Kontak</a></li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div>
                <h3 class="text-lg font-semibold mb-4">Kontak</h3>
                <div class="space-y-2 text-gray-300">
                    <div class="flex items-center">
                        <i class="fas fa-map-marker-alt mr-3 text-blue-400"></i>
                        <span class="text-sm">{{ $settings['address'] ?? 'Jl. Raya Industri No. 123, Jakarta Selatan 12345' }}</span>
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-phone mr-3 text-blue-400"></i>
                        <span class="text-sm">{{ $settings['phone'] ?? '+62 21 1234 5678' }}</span>
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-envelope mr-3 text-blue-400"></i>
                        <span class="text-sm">{{ $settings['email'] ?? 'info@balaiindustri.go.id' }}</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Social Media & Copyright -->
        <div class="border-t border-gray-800 mt-8 pt-8">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="text-gray-400 text-sm mb-4 md:mb-0">
                    © {{ date('Y') }} BALAI BESAR STANDARDISASI DAN PELAYANAN JASA INDUSTRI KULIT, PLASTIK, DAN KARET. All rights reserved.
                </div>
                
                <!-- Social Media Links -->
                <div class="flex space-x-4">
                    <a href="{{ $settings['facebook_url'] ?? '#' }}" class="text-gray-400 hover:text-white transition-colors duration-200">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="{{ $settings['twitter_url'] ?? '#' }}" class="text-gray-400 hover:text-white transition-colors duration-200">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="{{ $settings['instagram_url'] ?? '#' }}" class="text-gray-400 hover:text-white transition-colors duration-200">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="{{ $settings['linkedin_url'] ?? '#' }}" class="text-gray-400 hover:text-white transition-colors duration-200">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>
