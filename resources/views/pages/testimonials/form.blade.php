@extends('layouts.app')

@section('title', __('forms.testimonial_title') . ' - BALAI BESAR STANDARDISASI DAN PELAYANAN JASA INDUSTRI KULIT, PLASTIK, DAN KARET')
@section('description', __('forms.testimonial_description'))

@section('content')
    <!-- Page Header -->
    <section class="bg-gradient-to-r from-blue-600 to-blue-900 text-white py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-3xl md:text-4xl font-bold mb-4">{{ __('forms.testimonial_title') }}</h1>
                <p class="text-lg text-green-100 max-w-3xl mx-auto">
                    {{ __('forms.testimonial_description') }}
                </p>
            </div>
        </div>
    </section>

    <!-- Testimonial Form Section -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-10">
                <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-3">{{ __('forms.testimonial_heading') }}</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    {{ __('forms.testimonial_note') }}
                </p>
            </div>

            <div class="bg-white shadow-lg rounded-2xl p-6 md:p-8">
                @if(session('testimonial_success'))
                    <div class="mb-6 rounded-md bg-green-50 p-4 border border-green-200">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <svg class="h-5 w-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                    fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.707a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293A1 1 0 006.293 10.7l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm font-medium text-green-800">
                                    {{ session('testimonial_success') }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endif

                <form action="{{ route('testimonials.submit') }}" method="POST" enctype="multipart/form-data"
                    class="space-y-5">
                    @csrf

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                        <div>
                            <label for="client_name" class="block text-sm font-medium text-gray-700 mb-1">
                                {{ __('forms.testimonial_name') }} <span class="text-red-500">*</span>
                            </label>
                            <input type="text" name="client_name" id="client_name" value="{{ old('client_name') }}"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent @error('client_name') border-red-500 @enderror"
                                required>
                            @error('client_name')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="client_company" class="block text-sm font-medium text-gray-700 mb-1">
                                {{ __('forms.testimonial_company') }}
                            </label>
                            <input type="text" name="client_company" id="client_company" value="{{ old('client_company') }}"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent @error('client_company') border-red-500 @enderror">
                            @error('client_company')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div>
                        <label for="rating" class="block text-sm font-medium text-gray-700 mb-1">
                            {{ __('forms.testimonial_rating') }} <span class="text-red-500">*</span>
                        </label>
                        <select name="rating" id="rating"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent @error('rating') border-red-500 @enderror"
                            required>
                            <option value="">{{ __('forms.testimonial_rating_select') }}</option>
                            <option value="1" {{ old('rating') == '1' ? 'selected' : '' }}>{{ __('forms.testimonial_rating_1') }}</option>
                            <option value="2" {{ old('rating') == '2' ? 'selected' : '' }}>{{ __('forms.testimonial_rating_2') }}</option>
                            <option value="3" {{ old('rating') == '3' ? 'selected' : '' }}>{{ __('forms.testimonial_rating_3') }}</option>
                            <option value="4" {{ old('rating') == '4' ? 'selected' : '' }}>{{ __('forms.testimonial_rating_4') }}</option>
                            <option value="5" {{ old('rating') == '5' ? 'selected' : '' }}>{{ __('forms.testimonial_rating_5') }}</option>
                        </select>
                        @error('rating')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="content" class="block text-sm font-medium text-gray-700 mb-1">
                            {{ __('forms.testimonial_message') }} <span class="text-red-500">*</span>
                        </label>
                        <textarea name="content" id="content" rows="5"
                            placeholder="{{ __('forms.testimonial_message_placeholder') }}"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent @error('content') border-red-500 @enderror"
                            required>{{ old('content') }}</textarea>
                        @error('content')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                        <p class="mt-1 text-xs text-gray-500">{{ __('forms.testimonial_char_limit') }}</p>
                    </div>

                    <div>
                        <label for="image" class="block text-sm font-medium text-gray-700 mb-1">
                            {{ __('forms.testimonial_image') }}
                        </label>
                        <input type="file" name="image" id="image" accept=".jpeg,.jpg,.png,.gif,.svg,.webp"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent @error('image') border-red-500 @enderror">
                        @error('image')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                        <p class="mt-1 text-xs text-gray-500">{{ __('forms.testimonial_image_note') }}</p>
                    </div>

                    <div class="pt-4">
                        <button type="submit"
                            class="w-full md:w-auto inline-flex justify-center items-center px-6 py-3 border border-transparent text-base font-semibold rounded-lg shadow-sm text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 transition-colors duration-200">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                            </svg>
                            {{ __('forms.testimonial_submit') }}
                        </button>
                    </div>

                    <p class="text-sm text-gray-600 mt-4 p-4 bg-blue-50 rounded-lg border border-blue-200">
                        <i class="fas fa-info-circle text-blue-600 mr-2"></i>
                        {{ __('forms.testimonial_note') }}
                    </p>
                </form>
            </div>

            <!-- Info Box -->
            <div class="mt-10 grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white rounded-lg shadow p-6">
                    <div class="text-center">
                        <div class="text-green-600 text-3xl mb-2">✓</div>
                        <h3 class="font-semibold text-gray-900 mb-2">{{ __('forms.testimonial_review_process') }}</h3>
                        <p class="text-sm text-gray-600">{{ __('forms.testimonial_review_desc') }}</p>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow p-6">
                    <div class="text-center">
                        <div class="text-green-600 text-3xl mb-2">📋</div>
                        <h3 class="font-semibold text-gray-900 mb-2">{{ __('forms.testimonial_authentic') }}</h3>
                        <p class="text-sm text-gray-600">{{ __('forms.testimonial_authentic_desc') }}</p>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow p-6">
                    <div class="text-center">
                        <div class="text-green-600 text-3xl mb-2">🌟</div>
                        <h3 class="font-semibold text-gray-900 mb-2">{{ __('forms.testimonial_award') }}</h3>
                        <p class="text-sm text-gray-600">{{ __('forms.testimonial_award_desc') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection