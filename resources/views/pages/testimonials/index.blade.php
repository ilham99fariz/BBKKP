@extends('layouts.app')

@section('title', __('common.testimonials_title'))
@section('description', __('common.testimonials_subtitle_long'))

@section('content')
    <section class="bg-gray-50 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-10">
                <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-3">{{ __('common.testimonials_title') }}</h1>
                <p class="text-gray-600 max-w-3xl mx-auto">
                    {{ __('common.testimonials_subtitle_long') }}
                </p>
            </div>

            @if ($testimonials->count())
                <div class="grid md:grid-cols-3 gap-8">
                    @foreach ($testimonials as $testimonial)
                        <div class="bg-white shadow-lg rounded-2xl p-6 flex flex-col justify-between hover:shadow-xl transition">
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
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-5 h-5 text-yellow-400"
                                                viewBox="0 0 24 24">
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

                <div class="mt-10">
                    {{ $testimonials->links() }}
                </div>
            @else
                <p class="text-center text-gray-500">
                    {{ __('common.testimonials_empty') }}
                </p>
            @endif
        </div>
    </section>
@endsection