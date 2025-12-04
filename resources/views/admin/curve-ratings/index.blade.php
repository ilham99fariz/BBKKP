@extends('layouts.admin')

@section('title', 'Manajemen Curve Rating - Admin Panel')
@section('page-title', 'Manajemen Curve Rating')

@section('content')
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-gray-900">Grafik Curve (Skala 0-6)</h1>
        <a href="{{ route('admin.curve-ratings.create') }}"
            class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors duration-200">
            <i class="fas fa-plus mr-2"></i>Tambah Curve
        </a>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-6">
        @forelse($curveRatings as $curve)
        <div class="bg-white rounded-lg shadow overflow-hidden">
            <div class="p-4 border-b border-gray-200">
                <div class="flex justify-between items-start">
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900">{{ $curve->name }}</h3>
                        <p class="text-sm text-gray-500">Skala: 0 - 6</p>
                    </div>
                    <div class="flex items-center space-x-2">
                        @if ($curve->is_active)
                            <span class="inline-flex items-center px-2 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                Aktif
                            </span>
                        @else
                            <span class="inline-flex items-center px-2 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800">
                                Nonaktif
                            </span>
                        @endif
                    </div>
                </div>
            </div>
            
            <!-- Mini Curve Chart Preview -->
            <div class="p-4 bg-gradient-to-br from-blue-500 to-blue-600">
                <div class="relative h-32">
                    <svg class="w-full h-full" viewBox="0 0 100 100" preserveAspectRatio="none">
                        <defs>
                            <linearGradient id="previewGradient{{ $curve->id }}" x1="0%" y1="0%" x2="0%" y2="100%">
                                <stop offset="0%" style="stop-color:{{ $curve->line_color }};stop-opacity:0.4" />
                                <stop offset="100%" style="stop-color:{{ $curve->line_color }};stop-opacity:0.05" />
                            </linearGradient>
                        </defs>
                        <path 
                            d="M 10,{{ 100 - ($curve->value1 / 6 * 100) }} 
                               C 20,{{ 100 - ($curve->value1 / 6 * 100) }} 22,{{ 100 - ($curve->value2 / 6 * 100) }} 30,{{ 100 - ($curve->value2 / 6 * 100) }}
                               C 38,{{ 100 - ($curve->value2 / 6 * 100) }} 42,{{ 100 - ($curve->value3 / 6 * 100) }} 50,{{ 100 - ($curve->value3 / 6 * 100) }}
                               C 58,{{ 100 - ($curve->value3 / 6 * 100) }} 62,{{ 100 - ($curve->value4 / 6 * 100) }} 70,{{ 100 - ($curve->value4 / 6 * 100) }}
                               C 78,{{ 100 - ($curve->value4 / 6 * 100) }} 82,{{ 100 - ($curve->value5 / 6 * 100) }} 90,{{ 100 - ($curve->value5 / 6 * 100) }}
                               L 90,100 L 10,100 Z"
                            fill="url(#previewGradient{{ $curve->id }})"
                        />
                        <path 
                            d="M 10,{{ 100 - ($curve->value1 / 6 * 100) }} 
                               C 20,{{ 100 - ($curve->value1 / 6 * 100) }} 22,{{ 100 - ($curve->value2 / 6 * 100) }} 30,{{ 100 - ($curve->value2 / 6 * 100) }}
                               C 38,{{ 100 - ($curve->value2 / 6 * 100) }} 42,{{ 100 - ($curve->value3 / 6 * 100) }} 50,{{ 100 - ($curve->value3 / 6 * 100) }}
                               C 58,{{ 100 - ($curve->value3 / 6 * 100) }} 62,{{ 100 - ($curve->value4 / 6 * 100) }} 70,{{ 100 - ($curve->value4 / 6 * 100) }}
                               C 78,{{ 100 - ($curve->value4 / 6 * 100) }} 82,{{ 100 - ($curve->value5 / 6 * 100) }} 90,{{ 100 - ($curve->value5 / 6 * 100) }}"
                            fill="none"
                            stroke="{{ $curve->line_color }}"
                            stroke-width="2"
                            stroke-linecap="round"
                        />
                    </svg>
                </div>
                
                <!-- Year Labels -->
                <div class="flex justify-between text-[10px] text-white/80 mt-2 px-2">
                    <span>{{ $curve->label_year1 }}</span>
                    <span>{{ $curve->label_year2 }}</span>
                    <span>{{ $curve->label_year3 }}</span>
                    <span>{{ $curve->label_year4 }}</span>
                    <span>{{ $curve->label_year5 }}</span>
                </div>
                
                <!-- Values -->
                <div class="flex justify-center flex-wrap gap-1 mt-3 text-white text-xs">
                    <span class="px-1.5 py-0.5 rounded" style="background-color: {{ $curve->line_color }}">{{ $curve->value1 }}</span>
                    <span class="px-1.5 py-0.5 rounded" style="background-color: {{ $curve->line_color }}">{{ $curve->value2 }}</span>
                    <span class="px-1.5 py-0.5 rounded" style="background-color: {{ $curve->line_color }}">{{ $curve->value3 }}</span>
                    <span class="px-1.5 py-0.5 rounded" style="background-color: {{ $curve->line_color }}">{{ $curve->value4 }}</span>
                    <span class="px-1.5 py-0.5 rounded" style="background-color: {{ $curve->line_color }}">{{ $curve->value5 }}</span>
                </div>
            </div>
            
            <!-- Actions -->
            <div class="p-4 bg-gray-50 flex justify-end space-x-2">
                <a href="{{ route('admin.curve-ratings.edit', $curve) }}"
                    class="px-3 py-1.5 bg-indigo-600 text-white text-sm rounded hover:bg-indigo-700 transition-colors">
                    <i class="fas fa-edit mr-1"></i>Edit
                </a>
                <form action="{{ route('admin.curve-ratings.destroy', $curve) }}" method="POST"
                    class="inline"
                    onsubmit="return confirm('Apakah Anda yakin ingin menghapus curve ini?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="px-3 py-1.5 bg-red-600 text-white text-sm rounded hover:bg-red-700 transition-colors">
                        <i class="fas fa-trash mr-1"></i>Hapus
                    </button>
                </form>
            </div>
        </div>
        @empty
        <div class="col-span-full">
            <div class="bg-white rounded-lg shadow p-12 text-center">
                <i class="fas fa-chart-line text-gray-400 text-5xl mb-4"></i>
                <p class="text-lg font-medium text-gray-900">Belum ada curve rating</p>
                <p class="text-sm text-gray-500 mb-4">Mulai dengan menambahkan curve pertama Anda</p>
                <a href="{{ route('admin.curve-ratings.create') }}"
                    class="inline-flex items-center px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                    <i class="fas fa-plus mr-2"></i>Tambah Curve
                </a>
            </div>
        </div>
        @endforelse
    </div>
@endsection
