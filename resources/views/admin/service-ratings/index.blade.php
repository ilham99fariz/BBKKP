@extends('layouts.admin')

@section('title', 'Manajemen Rating Layanan - Admin Panel')
@section('page-title', 'Manajemen Rating Layanan')

@section('content')
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-gray-900">Rating Layanan (Grafik Batang)</h1>
        <a href="{{ route('admin.service-ratings.create') }}"
            class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors duration-200">
            <i class="fas fa-plus mr-2"></i>Tambah Rating
        </a>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-6">
        @forelse($ratings as $rating)
        <div class="bg-white rounded-lg shadow overflow-hidden">
            <div class="p-4 border-b border-gray-200">
                <div class="flex justify-between items-start">
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900">{{ $rating->name }}</h3>
                        <p class="text-sm text-gray-500">Skala: 0 - {{ $rating->max_scale }}</p>
                    </div>
                    <div class="flex items-center space-x-2">
                        @if ($rating->is_active)
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
            
            <!-- Mini Chart Preview -->
            <div class="p-4 bg-gradient-to-br from-blue-500 to-blue-600">
                <div class="flex items-end justify-center space-x-1 h-32">
                    @for($i = 1; $i <= 5; $i++)
                    <div class="flex flex-col items-center flex-1">
                        <div class="w-full bg-white/20 rounded-t relative" style="height: 100px;">
                            <div class="absolute bottom-0 w-full rounded-t transition-all duration-500"
                                style="height: {{ $rating->{'percentage'.$i} }}%; background-color: {{ $rating->{'color'.$i} }};">
                            </div>
                        </div>
                        <span class="text-[10px] text-white/80 mt-1">{{ $rating->{'label_year'.$i} }}</span>
                    </div>
                    @endfor
                </div>
                
                <!-- Values -->
                <div class="flex justify-center flex-wrap gap-1 mt-3 text-white text-xs">
                    @for($i = 1; $i <= 5; $i++)
                    <span class="px-1.5 py-0.5 rounded" style="background-color: {{ $rating->{'color'.$i} }}">{{ $rating->{'year'.$i} }}</span>
                    @endfor
                </div>
            </div>
            
            <!-- Actions -->
            <div class="p-4 bg-gray-50 flex justify-end space-x-2">
                <a href="{{ route('admin.service-ratings.edit', $rating) }}"
                    class="px-3 py-1.5 bg-indigo-600 text-white text-sm rounded hover:bg-indigo-700 transition-colors">
                    <i class="fas fa-edit mr-1"></i>Edit
                </a>
                <form action="{{ route('admin.service-ratings.destroy', $rating) }}" method="POST"
                    class="inline"
                    onsubmit="return confirm('Apakah Anda yakin ingin menghapus rating ini?')">
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
                <i class="fas fa-chart-bar text-gray-400 text-5xl mb-4"></i>
                <p class="text-lg font-medium text-gray-900">Belum ada rating layanan</p>
                <p class="text-sm text-gray-500 mb-4">Mulai dengan menambahkan rating pertama Anda</p>
                <a href="{{ route('admin.service-ratings.create') }}"
                    class="inline-flex items-center px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                    <i class="fas fa-plus mr-2"></i>Tambah Rating
                </a>
            </div>
        </div>
        @endforelse
    </div>

    @if ($ratings->hasPages())
        <div class="mt-6">
            {{ $ratings->links() }}
        </div>
    @endif
@endsection
