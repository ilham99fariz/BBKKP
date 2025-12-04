@extends('layouts.admin')

@section('title', 'Tambah Skor IPK - Admin Panel')
@section('page-title', 'Tambah Skor IPK')

@section('content')
    <div class="max-w-6xl mx-auto">
        <div class="flex items-center mb-6">
            <a href="{{ route('admin.ipk-ratings.index') }}" class="text-gray-500 hover:text-gray-700 mr-4">
                <i class="fas fa-arrow-left"></i>
            </a>
            <h1 class="text-2xl font-bold text-gray-900">Tambah Skor IPK</h1>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <!-- Form -->
            <div class="lg:col-span-2 bg-white rounded-lg shadow p-6">
            <form action="{{ route('admin.ipk-ratings.store') }}" method="POST">
                @csrf

                <div class="space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700">Nama Indikator</label>
                            <input type="text" name="name" id="name" value="{{ old('name', 'Skor IPK') }}"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                                placeholder="Contoh: Skor IPK" required>
                            @error('name')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="tooltip_label" class="block text-sm font-medium text-gray-700">Label Tooltip</label>
                            <input type="text" name="tooltip_label" id="tooltip_label" value="{{ old('tooltip_label') }}"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                                placeholder="Contoh: Skor">
                            <p class="mt-1 text-xs text-gray-500">Opsional. Jika kosong, akan menggunakan label tahun</p>
                            @error('tooltip_label')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="max_scale" class="block text-sm font-medium text-gray-700">Skala Maksimum</label>
                            <input type="number" name="max_scale" id="max_scale" value="{{ old('max_scale', 4) }}"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                                min="1" required>
                            <p class="mt-1 text-xs text-gray-500">Nilai maksimum skala (default: 4 untuk skor IPK)</p>
                            @error('max_scale')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="border-t pt-6">
                        <h3 class="text-lg font-medium text-gray-900 mb-4">Data Tahun 1</h3>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            <div>
                                <label for="label_year1" class="block text-sm font-medium text-gray-700">Label Tahun</label>
                                <input type="text" name="label_year1" id="label_year1" value="{{ old('label_year1', '2020') }}"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                                    placeholder="2020" required>
                            </div>
                            <div>
                                <label for="year1" class="block text-sm font-medium text-gray-700">Skor IPK</label>
                                <input type="number" name="year1" id="year1" value="{{ old('year1', 0) }}" step="0.01"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                                    min="0" required>
                            </div>
                            <div>
                                <label for="color1" class="block text-sm font-medium text-gray-700">Warna Bar</label>
                                <div class="flex items-center mt-1 space-x-2">
                                    <input type="color" name="color1" id="color1" value="{{ old('color1', '#22C55E') }}"
                                        class="h-10 w-16 rounded border-gray-300 cursor-pointer">
                                    <button type="button" onclick="document.getElementById('color1').value='#22C55E'" class="w-6 h-6 rounded bg-green-500"></button>
                                    <button type="button" onclick="document.getElementById('color1').value='#10B981'" class="w-6 h-6 rounded bg-emerald-500"></button>
                                    <button type="button" onclick="document.getElementById('color1').value='#14B8A6'" class="w-6 h-6 rounded bg-teal-500"></button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="border-t pt-6">
                        <h3 class="text-lg font-medium text-gray-900 mb-4">Data Tahun 2</h3>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            <div>
                                <label for="label_year2" class="block text-sm font-medium text-gray-700">Label Tahun</label>
                                <input type="text" name="label_year2" id="label_year2" value="{{ old('label_year2', '2021') }}"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                                    placeholder="2021" required>
                            </div>
                            <div>
                                <label for="year2" class="block text-sm font-medium text-gray-700">Skor IPK</label>
                                <input type="number" name="year2" id="year2" value="{{ old('year2', 0) }}" step="0.01"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                                    min="0" required>
                            </div>
                            <div>
                                <label for="color2" class="block text-sm font-medium text-gray-700">Warna Bar</label>
                                <div class="flex items-center mt-1 space-x-2">
                                    <input type="color" name="color2" id="color2" value="{{ old('color2', '#3B82F6') }}"
                                        class="h-10 w-16 rounded border-gray-300 cursor-pointer">
                                    <button type="button" onclick="document.getElementById('color2').value='#3B82F6'" class="w-6 h-6 rounded bg-blue-500"></button>
                                    <button type="button" onclick="document.getElementById('color2').value='#0EA5E9'" class="w-6 h-6 rounded bg-sky-500"></button>
                                    <button type="button" onclick="document.getElementById('color2').value='#6366F1'" class="w-6 h-6 rounded bg-indigo-500"></button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="border-t pt-6">
                        <h3 class="text-lg font-medium text-gray-900 mb-4">Data Tahun 3</h3>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            <div>
                                <label for="label_year3" class="block text-sm font-medium text-gray-700">Label Tahun</label>
                                <input type="text" name="label_year3" id="label_year3" value="{{ old('label_year3', '2022') }}"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                                    placeholder="2022" required>
                            </div>
                            <div>
                                <label for="year3" class="block text-sm font-medium text-gray-700">Skor IPK</label>
                                <input type="number" name="year3" id="year3" value="{{ old('year3', 0) }}" step="0.01"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                                    min="0" required>
                            </div>
                            <div>
                                <label for="color3" class="block text-sm font-medium text-gray-700">Warna Bar</label>
                                <div class="flex items-center mt-1 space-x-2">
                                    <input type="color" name="color3" id="color3" value="{{ old('color3', '#F59E0B') }}"
                                        class="h-10 w-16 rounded border-gray-300 cursor-pointer">
                                    <button type="button" onclick="document.getElementById('color3').value='#F59E0B'" class="w-6 h-6 rounded bg-amber-500"></button>
                                    <button type="button" onclick="document.getElementById('color3').value='#F97316'" class="w-6 h-6 rounded bg-orange-500"></button>
                                    <button type="button" onclick="document.getElementById('color3').value='#FBBF24'" class="w-6 h-6 rounded bg-amber-400"></button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="border-t pt-6">
                        <h3 class="text-lg font-medium text-gray-900 mb-4">Data Tahun 4</h3>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            <div>
                                <label for="label_year4" class="block text-sm font-medium text-gray-700">Label Tahun</label>
                                <input type="text" name="label_year4" id="label_year4" value="{{ old('label_year4', '2023') }}"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                                    placeholder="2023" required>
                            </div>
                            <div>
                                <label for="year4" class="block text-sm font-medium text-gray-700">Skor IPK</label>
                                <input type="number" name="year4" id="year4" value="{{ old('year4', 0) }}" step="0.01"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                                    min="0" required>
                            </div>
                            <div>
                                <label for="color4" class="block text-sm font-medium text-gray-700">Warna Bar</label>
                                <div class="flex items-center mt-1 space-x-2">
                                    <input type="color" name="color4" id="color4" value="{{ old('color4', '#EF4444') }}"
                                        class="h-10 w-16 rounded border-gray-300 cursor-pointer">
                                    <button type="button" onclick="document.getElementById('color4').value='#EF4444'" class="w-6 h-6 rounded bg-red-500"></button>
                                    <button type="button" onclick="document.getElementById('color4').value='#F43F5E'" class="w-6 h-6 rounded bg-rose-500"></button>
                                    <button type="button" onclick="document.getElementById('color4').value='#EC4899'" class="w-6 h-6 rounded bg-pink-500"></button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="border-t pt-6">
                        <h3 class="text-lg font-medium text-gray-900 mb-4">Data Tahun 5</h3>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            <div>
                                <label for="label_year5" class="block text-sm font-medium text-gray-700">Label Tahun</label>
                                <input type="text" name="label_year5" id="label_year5" value="{{ old('label_year5', '2024') }}"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                                    placeholder="2024" required>
                            </div>
                            <div>
                                <label for="year5" class="block text-sm font-medium text-gray-700">Skor IPK</label>
                                <input type="number" name="year5" id="year5" value="{{ old('year5', 0) }}" step="0.01"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                                    min="0" required>
                            </div>
                            <div>
                                <label for="color5" class="block text-sm font-medium text-gray-700">Warna Bar</label>
                                <div class="flex items-center mt-1 space-x-2">
                                    <input type="color" name="color5" id="color5" value="{{ old('color5', '#8B5CF6') }}"
                                        class="h-10 w-16 rounded border-gray-300 cursor-pointer">
                                    <button type="button" onclick="document.getElementById('color5').value='#8B5CF6'" class="w-6 h-6 rounded bg-violet-500"></button>
                                    <button type="button" onclick="document.getElementById('color5').value='#A855F7'" class="w-6 h-6 rounded bg-purple-500"></button>
                                    <button type="button" onclick="document.getElementById('color5').value='#D946EF'" class="w-6 h-6 rounded bg-fuchsia-500"></button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="border-t pt-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="sort_order" class="block text-sm font-medium text-gray-700">Urutan Tampil</label>
                                <input type="number" name="sort_order" id="sort_order" value="{{ old('sort_order', 0) }}"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                                    min="0">
                            </div>

                            <div class="flex items-center pt-6">
                                <input type="checkbox" name="is_active" id="is_active" value="1"
                                    class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded"
                                    {{ old('is_active', true) ? 'checked' : '' }}>
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
                            Simpan
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
                        <h4 class="text-sm font-semibold text-white/90 text-center mb-4" id="previewName">Skor IPK</h4>
                        
                        <!-- Chart Preview -->
                        <div class="flex items-end justify-center h-40 relative">
                            <!-- Y-Axis -->
                            <div class="absolute left-0 top-0 bottom-6 w-6 flex flex-col justify-between text-xs text-white/50">
                                <span class="y-axis-label">4</span>
                                <span class="y-axis-label">2</span>
                                <span class="y-axis-label">0</span>
                            </div>
                            
                            <!-- Bars -->
                            <div class="flex items-end justify-center space-x-1 h-32 ml-6">
                                @for($i = 1; $i <= 5; $i++)
                                <div class="flex flex-col items-center group flex-1">
                                    <div class="w-full bg-white/20 rounded-t relative" style="height: 128px;">
                                        <div id="previewBar{{ $i }}" class="absolute bottom-0 w-full rounded-t transition-all duration-300"
                                            style="height: 0%; background-color: #3B82F6;">
                                        </div>
                                    </div>
                                    <span id="previewLabel{{ $i }}" class="text-[10px] text-white/80 mt-1">{{ 2019 + $i }}</span>
                                </div>
                                @endfor
                            </div>
                        </div>
                        
                        <!-- Values -->
                        <div class="flex justify-center flex-wrap gap-1 mt-3 text-white text-xs">
                            @for($i = 1; $i <= 5; $i++)
                            <span id="previewValue{{ $i }}" class="px-1.5 py-0.5 rounded" style="background-color: #3B82F6">0</span>
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
            
            document.getElementById('previewName').textContent = document.getElementById('name').value || 'Skor IPK';
        }
        
        // Add event listeners
        document.getElementById('name').addEventListener('input', updatePreview);
        document.getElementById('max_scale').addEventListener('input', updatePreview);
        for (let i = 1; i <= 5; i++) {
            document.getElementById('year' + i).addEventListener('input', updatePreview);
            document.getElementById('color' + i).addEventListener('input', updatePreview);
            document.getElementById('label_year' + i).addEventListener('input', updatePreview);
        }
        
        // Initial preview update
        document.addEventListener('DOMContentLoaded', updatePreview);
    </script>
@endsection
