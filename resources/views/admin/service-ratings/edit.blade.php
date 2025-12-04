@extends('layouts.admin')

@section('title', 'Edit Rating Layanan - Admin Panel')
@section('page-title', 'Edit Rating Layanan')

@section('content')
    <div class="max-w-6xl mx-auto">
        <div class="flex items-center mb-6">
            <a href="{{ route('admin.service-ratings.index') }}" class="text-gray-500 hover:text-gray-700 mr-4">
                <i class="fas fa-arrow-left"></i>
            </a>
            <h1 class="text-2xl font-bold text-gray-900">Edit Rating Layanan</h1>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <!-- Form -->
            <div class="lg:col-span-2 bg-white rounded-lg shadow p-6">
                <form action="{{ route('admin.service-ratings.update', $serviceRating) }}" method="POST" id="ratingForm">
                    @csrf
                    @method('PUT')

                    <div class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700">Nama Indikator</label>
                                <input type="text" name="name" id="name" value="{{ old('name', $serviceRating->name) }}"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                                    placeholder="Contoh: Indeks Kepuasan Masyarakat" required>
                                @error('name')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="max_scale" class="block text-sm font-medium text-gray-700">Skala Maksimum</label>
                                <input type="number" name="max_scale" id="max_scale" value="{{ old('max_scale', $serviceRating->max_scale) }}"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                                    min="1" required onchange="updatePreview()">
                                <p class="mt-1 text-xs text-gray-500">Nilai maksimum skala (misal: 10, 100, dll)</p>
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
                                <input type="text" name="label_year1" id="label_year1" value="{{ old('label_year1', $serviceRating->label_year1) }}"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                                    placeholder="2022" required>
                            </div>
                            <div>
                                <label for="year1" class="block text-sm font-medium text-gray-700">Nilai (0-10)</label>
                                <input type="number" name="year1" id="year1" value="{{ old('year1', $serviceRating->year1) }}" step="0.01"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                                    min="0" max="10" required oninput="updatePreview()">
                            </div>
                            <div>
                                <label for="color1" class="block text-sm font-medium text-gray-700">Warna Bar</label>
                                <div class="flex items-center mt-1 space-x-2">
                                    <input type="color" name="color1" id="color1" value="{{ old('color1', $serviceRating->color1) }}"
                                        class="h-10 w-16 rounded border-gray-300 cursor-pointer" onchange="updatePreview()">
                                    <button type="button" onclick="document.getElementById('color1').value='#F59E0B'; updatePreview()" class="w-6 h-6 rounded bg-amber-500"></button>
                                    <button type="button" onclick="document.getElementById('color1').value='#EF4444'; updatePreview()" class="w-6 h-6 rounded bg-red-500"></button>
                                    <button type="button" onclick="document.getElementById('color1').value='#EC4899'; updatePreview()" class="w-6 h-6 rounded bg-pink-500"></button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="border-t pt-6">
                        <h3 class="text-lg font-medium text-gray-900 mb-4">Data Tahun 2</h3>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            <div>
                                <label for="label_year2" class="block text-sm font-medium text-gray-700">Label Tahun</label>
                                <input type="text" name="label_year2" id="label_year2" value="{{ old('label_year2', $serviceRating->label_year2) }}"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                                    placeholder="2023" required>
                            </div>
                            <div>
                                <label for="year2" class="block text-sm font-medium text-gray-700">Nilai (0-10)</label>
                                <input type="number" name="year2" id="year2" value="{{ old('year2', $serviceRating->year2) }}" step="0.01"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                                    min="0" max="10" required oninput="updatePreview()">
                            </div>
                            <div>
                                <label for="color2" class="block text-sm font-medium text-gray-700">Warna Bar</label>
                                <div class="flex items-center mt-1 space-x-2">
                                    <input type="color" name="color2" id="color2" value="{{ old('color2', $serviceRating->color2) }}"
                                        class="h-10 w-16 rounded border-gray-300 cursor-pointer" onchange="updatePreview()">
                                    <button type="button" onclick="document.getElementById('color2').value='#10B981'; updatePreview()" class="w-6 h-6 rounded bg-emerald-500"></button>
                                    <button type="button" onclick="document.getElementById('color2').value='#22C55E'; updatePreview()" class="w-6 h-6 rounded bg-green-500"></button>
                                    <button type="button" onclick="document.getElementById('color2').value='#14B8A6'; updatePreview()" class="w-6 h-6 rounded bg-teal-500"></button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="border-t pt-6">
                        <h3 class="text-lg font-medium text-gray-900 mb-4">Data Tahun 3</h3>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            <div>
                                <label for="label_year3" class="block text-sm font-medium text-gray-700">Label Tahun</label>
                                <input type="text" name="label_year3" id="label_year3" value="{{ old('label_year3', $serviceRating->label_year3) }}"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                                    placeholder="2024" required>
                            </div>
                            <div>
                                <label for="year3" class="block text-sm font-medium text-gray-700">Nilai (0-10)</label>
                                <input type="number" name="year3" id="year3" value="{{ old('year3', $serviceRating->year3) }}" step="0.01"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                                    min="0" max="10" required oninput="updatePreview()">
                            </div>
                            <div>
                                <label for="color3" class="block text-sm font-medium text-gray-700">Warna Bar</label>
                                <div class="flex items-center mt-1 space-x-2">
                                    <input type="color" name="color3" id="color3" value="{{ old('color3', $serviceRating->color3) }}"
                                        class="h-10 w-16 rounded border-gray-300 cursor-pointer" onchange="updatePreview()">
                                    <button type="button" onclick="document.getElementById('color3').value='#8B5CF6'; updatePreview()" class="w-6 h-6 rounded bg-violet-500"></button>
                                    <button type="button" onclick="document.getElementById('color3').value='#6366F1'; updatePreview()" class="w-6 h-6 rounded bg-indigo-500"></button>
                                    <button type="button" onclick="document.getElementById('color3').value='#A855F7'; updatePreview()" class="w-6 h-6 rounded bg-purple-500"></button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="border-t pt-6">
                        <h3 class="text-lg font-medium text-gray-900 mb-4">Data Tahun 4</h3>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            <div>
                                <label for="label_year4" class="block text-sm font-medium text-gray-700">Label Tahun</label>
                                <input type="text" name="label_year4" id="label_year4" value="{{ old('label_year4', $serviceRating->label_year4) }}"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                                    placeholder="2025" required>
                            </div>
                            <div>
                                <label for="year4" class="block text-sm font-medium text-gray-700">Nilai (0-10)</label>
                                <input type="number" name="year4" id="year4" value="{{ old('year4', $serviceRating->year4) }}" step="0.01"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                                    min="0" max="10" required oninput="updatePreview()">
                            </div>
                            <div>
                                <label for="color4" class="block text-sm font-medium text-gray-700">Warna Bar</label>
                                <div class="flex items-center mt-1 space-x-2">
                                    <input type="color" name="color4" id="color4" value="{{ old('color4', $serviceRating->color4) }}"
                                        class="h-10 w-16 rounded border-gray-300 cursor-pointer" onchange="updatePreview()">
                                    <button type="button" onclick="document.getElementById('color4').value='#06B6D4'; updatePreview()" class="w-6 h-6 rounded bg-cyan-500"></button>
                                    <button type="button" onclick="document.getElementById('color4').value='#0EA5E9'; updatePreview()" class="w-6 h-6 rounded bg-sky-500"></button>
                                    <button type="button" onclick="document.getElementById('color4').value='#3B82F6'; updatePreview()" class="w-6 h-6 rounded bg-blue-500"></button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="border-t pt-6">
                        <h3 class="text-lg font-medium text-gray-900 mb-4">Data Tahun 5</h3>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            <div>
                                <label for="label_year5" class="block text-sm font-medium text-gray-700">Label Tahun</label>
                                <input type="text" name="label_year5" id="label_year5" value="{{ old('label_year5', $serviceRating->label_year5) }}"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                                    placeholder="2026" required>
                            </div>
                            <div>
                                <label for="year5" class="block text-sm font-medium text-gray-700">Nilai (0-10)</label>
                                <input type="number" name="year5" id="year5" value="{{ old('year5', $serviceRating->year5) }}" step="0.01"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                                    min="0" max="10" required oninput="updatePreview()">
                            </div>
                            <div>
                                <label for="color5" class="block text-sm font-medium text-gray-700">Warna Bar</label>
                                <div class="flex items-center mt-1 space-x-2">
                                    <input type="color" name="color5" id="color5" value="{{ old('color5', $serviceRating->color5) }}"
                                        class="h-10 w-16 rounded border-gray-300 cursor-pointer" onchange="updatePreview()">
                                    <button type="button" onclick="document.getElementById('color5').value='#F97316'; updatePreview()" class="w-6 h-6 rounded bg-orange-500"></button>
                                    <button type="button" onclick="document.getElementById('color5').value='#FB923C'; updatePreview()" class="w-6 h-6 rounded bg-orange-400"></button>
                                    <button type="button" onclick="document.getElementById('color5').value='#FBBF24'; updatePreview()" class="w-6 h-6 rounded bg-amber-400"></button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="border-t pt-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="sort_order" class="block text-sm font-medium text-gray-700">Urutan Tampil</label>
                                <input type="number" name="sort_order" id="sort_order" value="{{ old('sort_order', $serviceRating->sort_order) }}"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                                    min="0">
                            </div>

                            <div class="flex items-center pt-6">
                                <input type="checkbox" name="is_active" id="is_active" value="1"
                                    class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded"
                                    {{ old('is_active', $serviceRating->is_active) ? 'checked' : '' }}>
                                <label for="is_active" class="ml-2 block text-sm text-gray-900">Aktif (tampil di footer)</label>
                            </div>
                        </div>
                    </div>

                        <div class="flex justify-end space-x-3 pt-4">
                            <a href="{{ route('admin.service-ratings.index') }}"
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
                        <h4 class="text-sm font-semibold text-white/90 text-center mb-4" id="previewName">{{ $serviceRating->name }}</h4>
                        
                        <!-- Chart Preview -->
                        <div class="flex items-end justify-center h-40 relative">
                            <!-- Y-Axis -->
                            <div class="absolute left-0 top-0 bottom-6 w-6 flex flex-col justify-between text-xs text-white/50">
                                <span>10</span>
                                <span>5</span>
                                <span>0</span>
                            </div>
                            
                            <!-- Bars -->
                            <div class="flex items-end justify-center space-x-1 h-32 ml-6">
                                @for($i = 1; $i <= 5; $i++)
                                <div class="flex flex-col items-center group flex-1">
                                    <div class="w-full bg-white/20 rounded-t relative" style="height: 128px;">
                                        <div id="previewBar{{ $i }}" class="absolute bottom-0 w-full rounded-t transition-all duration-300"
                                            style="height: {{ $serviceRating->{'percentage'.$i} }}%; background-color: {{ $serviceRating->{'color'.$i} }};">
                                        </div>
                                    </div>
                                    <span id="previewLabel{{ $i }}" class="text-[10px] text-white/80 mt-1">{{ $serviceRating->{'label_year'.$i} }}</span>
                                </div>
                                @endfor
                            </div>
                        </div>
                        
                        <!-- Values -->
                        <div class="flex justify-center flex-wrap gap-1 mt-3 text-white text-xs">
                            @for($i = 1; $i <= 5; $i++)
                            <span id="previewValue{{ $i }}" class="px-1.5 py-0.5 rounded" style="background-color: {{ $serviceRating->{'color'.$i} }}">{{ $serviceRating->{'year'.$i} }}</span>
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
            const maxScale = parseFloat(document.getElementById('max_scale').value) || 10;
            
            // Update values and bars for 5 years
            for (let i = 1; i <= 5; i++) {
                const value = parseFloat(document.getElementById('year' + i).value) || 0;
                const color = document.getElementById('color' + i).value;
                const label = document.getElementById('label_year' + i).value;
                const percentage = Math.min((value / maxScale) * 100, 100);
                
                // Update bar
                const bar = document.getElementById('previewBar' + i);
                bar.style.height = percentage + '%';
                bar.style.backgroundColor = color;
                
                // Update value badge
                const valueBadge = document.getElementById('previewValue' + i);
                valueBadge.textContent = value;
                valueBadge.style.backgroundColor = color;
                
                // Update label
                document.getElementById('previewLabel' + i).textContent = label;
            }
            
            // Update name
            document.getElementById('previewName').textContent = document.getElementById('name').value || 'Nama Indikator';
        }
        
        // Add input listeners for labels (all 5 years)
        for (let i = 1; i <= 5; i++) {
            document.getElementById('label_year' + i).addEventListener('input', updatePreview);
        }
        document.getElementById('name').addEventListener('input', updatePreview);
    </script>
@endsection
