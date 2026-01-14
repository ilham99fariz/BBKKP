@extends('layouts.admin')

@section('title', 'Edit Curve Rating - Admin Panel')
@section('page-title', 'Edit Curve Rating')

@section('content')
    <div class="max-w-4xl mx-auto">
        <div class="flex items-center mb-6">
            <a href="{{ route('admin.curve-ratings.index') }}" class="text-gray-500 hover:text-gray-700 mr-4">
                <i class="fas fa-arrow-left"></i>
            </a>
            <h1 class="text-2xl font-bold text-gray-900">Edit Curve Rating</h1>
        </div>

        <div class="bg-white rounded-lg shadow p-6">
            <form action="{{ route('admin.curve-ratings.update', $curveRating) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700">Nama Indikator</label>
                            <input type="text" name="name" id="name" value="{{ old('name', $curveRating->name) }}"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                                placeholder="Contoh: Grafik Perkembangan" required>
                            @error('name')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="line_color" class="block text-sm font-medium text-gray-700">Warna Garis</label>
                            <div class="flex items-center mt-1 space-x-2">
                                <input type="color" name="line_color" id="line_color" value="{{ old('line_color', $curveRating->line_color) }}"
                                    class="h-10 w-16 rounded border-gray-300 cursor-pointer">
                                <button type="button" onclick="document.getElementById('line_color').value='#10B981'" class="w-6 h-6 rounded bg-emerald-500"></button>
                                <button type="button" onclick="document.getElementById('line_color').value='#3B82F6'" class="w-6 h-6 rounded bg-blue-500"></button>
                                <button type="button" onclick="document.getElementById('line_color').value='#8B5CF6'" class="w-6 h-6 rounded bg-violet-500"></button>
                                <button type="button" onclick="document.getElementById('line_color').value='#F59E0B'" class="w-6 h-6 rounded bg-amber-500"></button>
                                <button type="button" onclick="document.getElementById('line_color').value='#EF4444'" class="w-6 h-6 rounded bg-red-500"></button>
                            </div>
                            @error('line_color')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div>
                        <label for="tooltip_label" class="block text-sm font-medium text-gray-700">Label Tooltip (Opsional)</label>
                        <input type="text" name="tooltip_label" id="tooltip_label" value="{{ old('tooltip_label', $curveRating->tooltip_label) }}"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                            placeholder="Contoh: Jumlah Komplain">
                        <p class="mt-1 text-xs text-gray-500">Jika diisi, popup akan menampilkan label ini. Contoh: "Jumlah Komplain: 5"</p>
                        @error('tooltip_label')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Title (Multi-Language) -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div>
                            <label for="title" class="block text-sm font-medium text-gray-700 mb-2">
                                Judul Default (Opsional)
                            </label>
                            <input type="text" name="title" id="title" value="{{ old('title', $curveRating->title) }}"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('title') border-red-500 @enderror"
                                placeholder="Contoh: Keluhan Pelanggan">
                            <p class="mt-1 text-xs text-gray-500">Fallback jika tidak ada terjemahan</p>
                            @error('title')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="title_id" class="block text-sm font-medium text-gray-700 mb-2">
                                Judul Bahasa Indonesia
                            </label>
                            <input type="text" name="title_id" id="title_id" value="{{ old('title_id', $curveRating->title_id) }}"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('title_id') border-red-500 @enderror"
                                placeholder="Contoh: Keluhan Pelanggan">
                            @error('title_id')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="title_en" class="block text-sm font-medium text-gray-700 mb-2">
                                Judul Bahasa Inggris
                            </label>
                            <input type="text" name="title_en" id="title_en" value="{{ old('title_en', $curveRating->title_en) }}"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('title_en') border-red-500 @enderror"
                                placeholder="Example: Customer Complaints">
                            @error('title_en')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="bg-blue-50 p-4 rounded-lg">
                        <p class="text-sm text-blue-700"><i class="fas fa-info-circle mr-2"></i>Skala nilai: 0 - 6</p>
                    </div>

                    <div class="border-t pt-6">
                        <h3 class="text-lg font-medium text-gray-900 mb-4">Data Tahun 1</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label for="label_year1" class="block text-sm font-medium text-gray-700">Label Tahun</label>
                                <input type="text" name="label_year1" id="label_year1" value="{{ old('label_year1', $curveRating->label_year1) }}"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                                    placeholder="2021" required>
                            </div>
                            <div>
                                <label for="value1" class="block text-sm font-medium text-gray-700">Nilai (0-6)</label>
                                <input type="number" name="value1" id="value1" value="{{ old('value1', $curveRating->value1) }}" step="0.01"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                                    min="0" max="6" required>
                            </div>
                        </div>
                    </div>

                    <div class="border-t pt-6">
                        <h3 class="text-lg font-medium text-gray-900 mb-4">Data Tahun 2</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label for="label_year2" class="block text-sm font-medium text-gray-700">Label Tahun</label>
                                <input type="text" name="label_year2" id="label_year2" value="{{ old('label_year2', $curveRating->label_year2) }}"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                                    placeholder="2022" required>
                            </div>
                            <div>
                                <label for="value2" class="block text-sm font-medium text-gray-700">Nilai (0-6)</label>
                                <input type="number" name="value2" id="value2" value="{{ old('value2', $curveRating->value2) }}" step="0.01"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                                    min="0" max="6" required>
                            </div>
                        </div>
                    </div>

                    <div class="border-t pt-6">
                        <h3 class="text-lg font-medium text-gray-900 mb-4">Data Tahun 3</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label for="label_year3" class="block text-sm font-medium text-gray-700">Label Tahun</label>
                                <input type="text" name="label_year3" id="label_year3" value="{{ old('label_year3', $curveRating->label_year3) }}"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                                    placeholder="2023" required>
                            </div>
                            <div>
                                <label for="value3" class="block text-sm font-medium text-gray-700">Nilai (0-6)</label>
                                <input type="number" name="value3" id="value3" value="{{ old('value3', $curveRating->value3) }}" step="0.01"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                                    min="0" max="6" required>
                            </div>
                        </div>
                    </div>

                    <div class="border-t pt-6">
                        <h3 class="text-lg font-medium text-gray-900 mb-4">Data Tahun 4</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label for="label_year4" class="block text-sm font-medium text-gray-700">Label Tahun</label>
                                <input type="text" name="label_year4" id="label_year4" value="{{ old('label_year4', $curveRating->label_year4) }}"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                                    placeholder="2024" required>
                            </div>
                            <div>
                                <label for="value4" class="block text-sm font-medium text-gray-700">Nilai (0-6)</label>
                                <input type="number" name="value4" id="value4" value="{{ old('value4', $curveRating->value4) }}" step="0.01"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                                    min="0" max="6" required>
                            </div>
                        </div>
                    </div>

                    <div class="border-t pt-6">
                        <h3 class="text-lg font-medium text-gray-900 mb-4">Data Tahun 5</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label for="label_year5" class="block text-sm font-medium text-gray-700">Label Tahun</label>
                                <input type="text" name="label_year5" id="label_year5" value="{{ old('label_year5', $curveRating->label_year5) }}"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                                    placeholder="2025" required>
                            </div>
                            <div>
                                <label for="value5" class="block text-sm font-medium text-gray-700">Nilai (0-6)</label>
                                <input type="number" name="value5" id="value5" value="{{ old('value5', $curveRating->value5) }}" step="0.01"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                                    min="0" max="6" required>
                            </div>
                        </div>
                    </div>

                    <div class="border-t pt-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="sort_order" class="block text-sm font-medium text-gray-700">Urutan Tampil</label>
                                <input type="number" name="sort_order" id="sort_order" value="{{ old('sort_order', $curveRating->sort_order) }}"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                                    min="0">
                            </div>

                            <div class="flex items-center pt-6">
                                <input type="checkbox" name="is_active" id="is_active" value="1"
                                    class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded"
                                    {{ old('is_active', $curveRating->is_active) ? 'checked' : '' }}>
                                <label for="is_active" class="ml-2 block text-sm text-gray-900">Aktif (tampil di footer)</label>
                            </div>
                        </div>
                    </div>

                    <div class="flex justify-end space-x-3 pt-4">
                        <a href="{{ route('admin.curve-ratings.index') }}"
                            class="px-4 py-2 border border-gray-300 rounded-md text-sm font-medium text-gray-700 hover:bg-gray-50">
                            Batal
                        </a>
                        <button type="submit"
                            class="px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            Update
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
