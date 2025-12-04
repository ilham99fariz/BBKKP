@extends('layouts.admin')

@section('title', 'Edit Skor IPK - Admin Panel')
@section('page-title', 'Edit Skor IPK')

@section('content')
    <div class="max-w-6xl mx-auto">
        <div class="flex items-center mb-6">
            <a href="{{ route('admin.ipk-ratings.index') }}" class="text-gray-500 hover:text-gray-700 mr-4">
                <i class="fas fa-arrow-left"></i>
            </a>
            <h1 class="text-2xl font-bold text-gray-900">Edit Skor IPK</h1>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <!-- Form -->
            <div class="lg:col-span-2 bg-white rounded-lg shadow p-6">
                <form action="{{ route('admin.ipk-ratings.update', $ipkRating) }}" method="POST" id="ratingForm">
                    @csrf
                    @method('PUT')

                    <div class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700">Nama Indikator</label>
                                <input type="text" name="name" id="name" value="{{ old('name', $ipkRating->name) }}"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                                    placeholder="Contoh: Skor IPK" required>
                                @error('name')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="tooltip_label" class="block text-sm font-medium text-gray-700">Label Tooltip</label>
                                <input type="text" name="tooltip_label" id="tooltip_label" value="{{ old('tooltip_label', $ipkRating->tooltip_label) }}"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                                    placeholder="Contoh: Skor">
                                <p class="mt-1 text-xs text-gray-500">Opsional. Jika kosong, akan menggunakan label tahun</p>
                                @error('tooltip_label')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="max_scale" class="block text-sm font-medium text-gray-700">Skala Maksimum</label>
                                <input type="number" name="max_scale" id="max_scale" value="{{ old('max_scale', $ipkRating->max_scale) }}"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                                    min="1" required onchange="updatePreview()">
                                <p class="mt-1 text-xs text-gray-500">Nilai maksimum skala (default: 4 untuk skor IPK)</p>
                                @error('max_scale')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        @for($i = 1; $i <= 5; $i++)
                        <div class="border-t pt-6">
                            <h3 class="text-lg font-medium text-gray-900 mb-4">Data Tahun {{ $i }}</h3>
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                <div>
                                    <label for="label_year{{ $i }}" class="block text-sm font-medium text-gray-700">Label Tahun</label>
                                    <input type="text" name="label_year{{ $i }}" id="label_year{{ $i }}" value="{{ old('label_year'.$i, $ipkRating->{'label_year'.$i}) }}"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                                        required>
                                </div>
                                <div>
                                    <label for="year{{ $i }}" class="block text-sm font-medium text-gray-700">Skor IPK</label>
                                    <input type="number" name="year{{ $i }}" id="year{{ $i }}" value="{{ old('year'.$i, $ipkRating->{'year'.$i}) }}" step="0.01"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                                        min="0" required oninput="updatePreview()">
                                </div>
                                <div>
                                    <label for="color{{ $i }}" class="block text-sm font-medium text-gray-700">Warna Bar</label>
                                    <div class="flex items-center mt-1 space-x-2">
                                        <input type="color" name="color{{ $i }}" id="color{{ $i }}" value="{{ old('color'.$i, $ipkRating->{'color'.$i}) }}"
                                            class="h-10 w-16 rounded border-gray-300 cursor-pointer" onchange="updatePreview()">
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endfor

                        <div class="border-t pt-6">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label for="sort_order" class="block text-sm font-medium text-gray-700">Urutan Tampil</label>
                                    <input type="number" name="sort_order" id="sort_order" value="{{ old('sort_order', $ipkRating->sort_order) }}"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                                        min="0">
                                </div>

                                <div class="flex items-center pt-6">
                                    <input type="checkbox" name="is_active" id="is_active" value="1"
                                        class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded"
                                        {{ old('is_active', $ipkRating->is_active) ? 'checked' : '' }}>
                                    <label for="is_active" class="ml-2 block text-sm text-gray-900">Aktif (tampil di footer)</label>
                                </div>
                            </div>
                        </div>

                        <div class="flex justify-end space-x-3 pt-4">
                            <a href="{{ route('admin.ipk-ratings.index') }}"
                                class="px-4 py-2 border border-gray-300 rounded-md text-sm font-medium text-gray-700 hover:bg-gray-50">
                                Batal
                            </a>
                            <button type="submit"
                                class="px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                Perbarui
                            </button>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Live Preview -->
            <div class="lg:col-span-1">
                <div class="bg-white rounded-lg shadow p-4 sticky top-4">
                    <h3 class="text-lg font-semibold text-gray-900 mb-4 text-center">Preview Grafik</h3>
                    
                    <div class="bg-gradient-to-br from-blue-500 to-blue-600 rounded-lg p-4">
                        <h4 class="text-sm font-semibold text-white/90 text-center mb-4" id="previewName">{{ $ipkRating->name }}</h4>
                        
                        <!-- Chart Preview -->
                        <div class="flex items-end justify-center h-40 relative">
                            <!-- Y-Axis -->
                            <div class="absolute left-0 top-0 bottom-6 w-6 flex flex-col justify-between text-xs text-white/50">
                                <span class="y-axis-label">{{ $ipkRating->max_scale }}</span>
                                <span class="y-axis-label">{{ $ipkRating->max_scale / 2 }}</span>
                                <span class="y-axis-label">0</span>
                            </div>
                            
                            <!-- Bars -->
                            <div class="flex items-end justify-center space-x-1 h-32 ml-6">
                                @for($i = 1; $i <= 5; $i++)
                                <div class="flex flex-col items-center group flex-1">
                                    <div class="w-full bg-white/20 rounded-t relative" style="height: 128px;">
                                        <div id="previewBar{{ $i }}" class="absolute bottom-0 w-full rounded-t transition-all duration-300"
                                            style="height: {{ $ipkRating->{'percentage'.$i} }}%; background-color: {{ $ipkRating->{'color'.$i} }};">
                                        </div>
                                    </div>
                                    <span id="previewLabel{{ $i }}" class="text-[10px] text-white/80 mt-1">{{ $ipkRating->{'label_year'.$i} }}</span>
                                </div>
                                @endfor
                            </div>
                        </div>
                        
                        <!-- Values -->
                        <div class="flex justify-center flex-wrap gap-1 mt-3 text-white text-xs">
                            @for($i = 1; $i <= 5; $i++)
                            <span id="previewValue{{ $i }}" class="px-1.5 py-0.5 rounded" style="background-color: {{ $ipkRating->{'color'.$i} }}">{{ $ipkRating->{'year'.$i} }}</span>
                            @endfor
                        </div>
                    </div>
                    
                    <p class="text-xs text-gray-500 text-center mt-3">
                        <i class="fas fa-info-circle mr-1"></i>
                        Preview akan update otomatis saat input berubah
                    </p>
                </div>
            </div>
        </div>
    </div>

    <script>
        function updatePreview() {
            const maxScale = parseFloat(document.getElementById('max_scale').value) || 4;
            
            // Update Y-Axis labels based on maxScale
            const yAxisLabels = document.querySelectorAll('.y-axis-label');
            if (yAxisLabels.length === 3) {
                yAxisLabels[0].textContent = maxScale;
                yAxisLabels[1].textContent = (maxScale / 2).toFixed(1);
                yAxisLabels[2].textContent = '0';
            }
            
            for (let i = 1; i <= 5; i++) {
                const value = parseFloat(document.getElementById('year' + i).value) || 0;
                const color = document.getElementById('color' + i).value;
                const label = document.getElementById('label_year' + i).value;
                const percentage = Math.min((value / maxScale) * 100, 100);
                
                const bar = document.getElementById('previewBar' + i);
                bar.style.height = percentage + '%';
                bar.style.backgroundColor = color;
                
                const valueBadge = document.getElementById('previewValue' + i);
                valueBadge.textContent = value;
                valueBadge.style.backgroundColor = color;
                
                document.getElementById('previewLabel' + i).textContent = label;
            }
            
            document.getElementById('previewName').textContent = document.getElementById('name').value || 'Nama Indikator';
        }
        
        for (let i = 1; i <= 5; i++) {
            document.getElementById('label_year' + i).addEventListener('input', updatePreview);
        }
        document.getElementById('name').addEventListener('input', updatePreview);
        document.getElementById('max_scale').addEventListener('input', updatePreview);
    </script>
@endsection
