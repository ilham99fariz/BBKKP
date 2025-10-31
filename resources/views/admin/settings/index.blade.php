@extends('layouts.admin')

@section('title', 'Pengaturan Website - Admin Panel')
@section('page-title', 'Pengaturan Website')

@section('content')
    <div class="max-w-6xl mx-auto">
        <div class="bg-white rounded-lg shadow">
            <div class="px-6 py-4 border-b border-gray-200">
                <h1 class="text-xl font-semibold text-gray-900">Pengaturan Website</h1>
                <p class="text-sm text-gray-600 mt-1">Kelola konten dan pengaturan halaman utama website</p>
            </div>
            
            <form action="{{ route('admin.settings.update') }}" method="POST" class="p-6">
                @csrf
                
                <div class="space-y-8">
                    <!-- Hero Section -->
                    <div class="border-b border-gray-200 pb-8">
                        <h2 class="text-lg font-medium text-gray-900 mb-6">Hero Section</h2>
                        <div class="grid grid-cols-1 gap-6">
                            <div>
                                <label for="hero_title" class="block text-sm font-medium text-gray-700 mb-2">
                                    Judul Utama <span class="text-red-500">*</span>
                                </label>
                                <input type="text" 
                                       name="hero_title" 
                                       id="hero_title" 
                                       value="{{ old('hero_title', $settings['hero_title'] ?? '') }}"
                                       class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('hero_title') border-red-500 @enderror"
                                       required>
                                @error('hero_title')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="hero_subtitle" class="block text-sm font-medium text-gray-700 mb-2">
                                    Sub Judul <span class="text-red-500">*</span>
                                </label>
                                <input type="text" 
                                       name="hero_subtitle" 
                                       id="hero_subtitle" 
                                       value="{{ old('hero_subtitle', $settings['hero_subtitle'] ?? '') }}"
                                       class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('hero_subtitle') border-red-500 @enderror"
                                       required>
                                @error('hero_subtitle')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="hero_description" class="block text-sm font-medium text-gray-700 mb-2">
                                    Deskripsi <span class="text-red-500">*</span>
                                </label>
                                <textarea name="hero_description" 
                                          id="hero_description" 
                                          rows="3"
                                          class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('hero_description') border-red-500 @enderror"
                                          required>{{ old('hero_description', $settings['hero_description'] ?? '') }}</textarea>
                                @error('hero_description')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <!-- About Section -->
                    <div class="border-b border-gray-200 pb-8">
                        <h2 class="text-lg font-medium text-gray-900 mb-6">Tentang Kami</h2>
                        <div class="grid grid-cols-1 gap-6">
                            <div>
                                <label for="about_title" class="block text-sm font-medium text-gray-700 mb-2">
                                    Judul <span class="text-red-500">*</span>
                                </label>
                                <input type="text" 
                                       name="about_title" 
                                       id="about_title" 
                                       value="{{ old('about_title', $settings['about_title'] ?? '') }}"
                                       class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('about_title') border-red-500 @enderror"
                                       required>
                                @error('about_title')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="about_description" class="block text-sm font-medium text-gray-700 mb-2">
                                    Deskripsi <span class="text-red-500">*</span>
                                </label>
                                <textarea name="about_description" 
                                          id="about_description" 
                                          rows="4"
                                          class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('about_description') border-red-500 @enderror"
                                          required>{{ old('about_description', $settings['about_description'] ?? '') }}</textarea>
                                @error('about_description')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <!-- Services Section -->
                    <div class="border-b border-gray-200 pb-8">
                        <h2 class="text-lg font-medium text-gray-900 mb-6">Layanan</h2>
                        <div class="grid grid-cols-1 gap-6">
                            <div>
                                <label for="services_title" class="block text-sm font-medium text-gray-700 mb-2">
                                    Judul <span class="text-red-500">*</span>
                                </label>
                                <input type="text" 
                                       name="services_title" 
                                       id="services_title" 
                                       value="{{ old('services_title', $settings['services_title'] ?? '') }}"
                                       class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('services_title') border-red-500 @enderror"
                                       required>
                                @error('services_title')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="services_subtitle" class="block text-sm font-medium text-gray-700 mb-2">
                                    Sub Judul <span class="text-red-500">*</span>
                                </label>
                                <input type="text" 
                                       name="services_subtitle" 
                                       id="services_subtitle" 
                                       value="{{ old('services_subtitle', $settings['services_subtitle'] ?? '') }}"
                                       class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('services_subtitle') border-red-500 @enderror"
                                       required>
                                @error('services_subtitle')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <!-- News Section -->
                    <div class="border-b border-gray-200 pb-8">
                        <h2 class="text-lg font-medium text-gray-900 mb-6">Berita</h2>
                        <div class="grid grid-cols-1 gap-6">
                            <div>
                                <label for="news_title" class="block text-sm font-medium text-gray-700 mb-2">
                                    Judul <span class="text-red-500">*</span>
                                </label>
                                <input type="text" 
                                       name="news_title" 
                                       id="news_title" 
                                       value="{{ old('news_title', $settings['news_title'] ?? '') }}"
                                       class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('news_title') border-red-500 @enderror"
                                       required>
                                @error('news_title')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="news_subtitle" class="block text-sm font-medium text-gray-700 mb-2">
                                    Sub Judul <span class="text-red-500">*</span>
                                </label>
                                <input type="text" 
                                       name="news_subtitle" 
                                       id="news_subtitle" 
                                       value="{{ old('news_subtitle', $settings['news_subtitle'] ?? '') }}"
                                       class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('news_subtitle') border-red-500 @enderror"
                                       required>
                                @error('news_subtitle')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <!-- Testimonials Section -->
                    <div class="border-b border-gray-200 pb-8">
                        <h2 class="text-lg font-medium text-gray-900 mb-6">Testimoni</h2>
                        <div class="grid grid-cols-1 gap-6">
                            <div>
                                <label for="testimonials_title" class="block text-sm font-medium text-gray-700 mb-2">
                                    Judul <span class="text-red-500">*</span>
                                </label>
                                <input type="text" 
                                       name="testimonials_title" 
                                       id="testimonials_title" 
                                       value="{{ old('testimonials_title', $settings['testimonials_title'] ?? '') }}"
                                       class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('testimonials_title') border-red-500 @enderror"
                                       required>
                                @error('testimonials_title')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="testimonials_subtitle" class="block text-sm font-medium text-gray-700 mb-2">
                                    Sub Judul <span class="text-red-500">*</span>
                                </label>
                                <input type="text" 
                                       name="testimonials_subtitle" 
                                       id="testimonials_subtitle" 
                                       value="{{ old('testimonials_subtitle', $settings['testimonials_subtitle'] ?? '') }}"
                                       class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('testimonials_subtitle') border-red-500 @enderror"
                                       required>
                                @error('testimonials_subtitle')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <!-- Contact Section -->
                    <div class="border-b border-gray-200 pb-8">
                        <h2 class="text-lg font-medium text-gray-900 mb-6">Kontak</h2>
                        <div class="grid grid-cols-1 gap-6">
                            <div>
                                <label for="contact_title" class="block text-sm font-medium text-gray-700 mb-2">
                                    Judul <span class="text-red-500">*</span>
                                </label>
                                <input type="text" 
                                       name="contact_title" 
                                       id="contact_title" 
                                       value="{{ old('contact_title', $settings['contact_title'] ?? '') }}"
                                       class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('contact_title') border-red-500 @enderror"
                                       required>
                                @error('contact_title')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="contact_subtitle" class="block text-sm font-medium text-gray-700 mb-2">
                                    Sub Judul <span class="text-red-500">*</span>
                                </label>
                                <input type="text" 
                                       name="contact_subtitle" 
                                       id="contact_subtitle" 
                                       value="{{ old('contact_subtitle', $settings['contact_subtitle'] ?? '') }}"
                                       class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('contact_subtitle') border-red-500 @enderror"
                                       required>
                                @error('contact_subtitle')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="address" class="block text-sm font-medium text-gray-700 mb-2">
                                    Alamat <span class="text-red-500">*</span>
                                </label>
                                <textarea name="address" 
                                          id="address" 
                                          rows="3"
                                          class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('address') border-red-500 @enderror"
                                          required>{{ old('address', $settings['address'] ?? '') }}</textarea>
                                @error('address')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">
                                        Telepon <span class="text-red-500">*</span>
                                    </label>
                                    <input type="text" 
                                           name="phone" 
                                           id="phone" 
                                           value="{{ old('phone', $settings['phone'] ?? '') }}"
                                           class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('phone') border-red-500 @enderror"
                                           required>
                                    @error('phone')
                                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div>
                                    <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                                        Email <span class="text-red-500">*</span>
                                    </label>
                                    <input type="email" 
                                           name="email" 
                                           id="email" 
                                           value="{{ old('email', $settings['email'] ?? '') }}"
                                           class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('email') border-red-500 @enderror"
                                           required>
                                    @error('email')
                                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Social Media -->
                    <div>
                        <h2 class="text-lg font-medium text-gray-900 mb-6">Media Sosial</h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="facebook_url" class="block text-sm font-medium text-gray-700 mb-2">
                                    Facebook URL
                                </label>
                                <input type="url" 
                                       name="facebook_url" 
                                       id="facebook_url" 
                                       value="{{ old('facebook_url', $settings['facebook_url'] ?? '') }}"
                                       placeholder="https://facebook.com/yourpage"
                                       class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('facebook_url') border-red-500 @enderror">
                                @error('facebook_url')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="twitter_url" class="block text-sm font-medium text-gray-700 mb-2">
                                    Twitter URL
                                </label>
                                <input type="url" 
                                       name="twitter_url" 
                                       id="twitter_url" 
                                       value="{{ old('twitter_url', $settings['twitter_url'] ?? '') }}"
                                       placeholder="https://twitter.com/yourpage"
                                       class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('twitter_url') border-red-500 @enderror">
                                @error('twitter_url')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="instagram_url" class="block text-sm font-medium text-gray-700 mb-2">
                                    Instagram URL
                                </label>
                                <input type="url" 
                                       name="instagram_url" 
                                       id="instagram_url" 
                                       value="{{ old('instagram_url', $settings['instagram_url'] ?? '') }}"
                                       placeholder="https://instagram.com/yourpage"
                                       class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('instagram_url') border-red-500 @enderror">
                                @error('instagram_url')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="linkedin_url" class="block text-sm font-medium text-gray-700 mb-2">
                                    LinkedIn URL
                                </label>
                                <input type="url" 
                                       name="linkedin_url" 
                                       id="linkedin_url" 
                                       value="{{ old('linkedin_url', $settings['linkedin_url'] ?? '') }}"
                                       placeholder="https://linkedin.com/company/yourcompany"
                                       class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('linkedin_url') border-red-500 @enderror">
                                @error('linkedin_url')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Actions -->
                <div class="flex justify-end mt-8 pt-6 border-t border-gray-200">
                    <button type="submit" 
                            class="px-6 py-2 text-sm font-medium text-white bg-blue-600 border border-transparent rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        Simpan Pengaturan
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
