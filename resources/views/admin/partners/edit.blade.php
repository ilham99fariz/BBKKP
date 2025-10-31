@extends('layouts.admin')

@section('title', 'Edit Partner - Admin Panel')
@section('page-title', 'Edit Partner')

@section('content')
    <div class="max-w-4xl mx-auto">
        <div class="bg-white rounded-lg shadow">
            <div class="px-6 py-4 border-b border-gray-200">
                <h1 class="text-xl font-semibold text-gray-900">Edit Partner</h1>
            </div>
            
            <form action="{{ route('admin.partners.update', $partner) }}" method="POST" enctype="multipart/form-data" class="p-6">
                @csrf
                @method('PUT')
                
                <div class="grid grid-cols-1 gap-6">
                    <!-- Name -->
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-2">
                            Nama Partner <span class="text-red-500">*</span>
                        </label>
                        <input type="text" 
                               name="name" 
                               id="name" 
                               value="{{ old('name', $partner->name) }}"
                               class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('name') border-red-500 @enderror"
                               required>
                        @error('name')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Website URL -->
                    <div>
                        <label for="website_url" class="block text-sm font-medium text-gray-700 mb-2">
                            Website URL
                        </label>
                        <input type="url" 
                               name="website_url" 
                               id="website_url" 
                               value="{{ old('website_url', $partner->website_url) }}"
                               placeholder="https://example.com"
                               class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('website_url') border-red-500 @enderror">
                        @error('website_url')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Current Logo -->
                    @if($partner->logo)
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                Logo Saat Ini
                            </label>
                            <div class="flex items-center space-x-4">
                                <img src="{{ Storage::url($partner->logo) }}" 
                                     alt="{{ $partner->name }}" 
                                     class="h-20 w-20 object-cover rounded-lg">
                                <div>
                                    <p class="text-sm text-gray-600">Logo saat ini</p>
                                    <p class="text-xs text-gray-500">Pilih logo baru untuk mengganti</p>
                                </div>
                            </div>
                        </div>
                    @endif

                    <!-- Logo -->
                    <div>
                        <label for="logo" class="block text-sm font-medium text-gray-700 mb-2">
                            {{ $partner->logo ? 'Ganti Logo Partner' : 'Logo Partner' }}
                        </label>
                        <input type="file" 
                               name="logo" 
                               id="logo" 
                               accept="image/*"
                               class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('logo') border-red-500 @enderror">
                        @error('logo')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                        <p class="mt-1 text-sm text-gray-500">Format yang didukung: JPEG, PNG, JPG, GIF, SVG. Maksimal 2MB.</p>
                    </div>

                    <!-- Sort Order -->
                    <div>
                        <label for="sort_order" class="block text-sm font-medium text-gray-700 mb-2">
                            Urutan Tampil
                        </label>
                        <input type="number" 
                               name="sort_order" 
                               id="sort_order" 
                               value="{{ old('sort_order', $partner->sort_order) }}"
                               min="0"
                               class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('sort_order') border-red-500 @enderror">
                        @error('sort_order')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                        <p class="mt-1 text-sm text-gray-500">Angka yang lebih kecil akan ditampilkan lebih dulu.</p>
                    </div>

                    <!-- Active Status -->
                    <div class="flex items-center">
                        <input type="checkbox" 
                               name="is_active" 
                               id="is_active" 
                               value="1"
                               {{ old('is_active', $partner->is_active) ? 'checked' : '' }}
                               class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                        <label for="is_active" class="ml-2 block text-sm text-gray-900">
                            Aktifkan partner ini
                        </label>
                    </div>
                </div>

                <!-- Actions -->
                <div class="flex justify-end space-x-4 mt-8 pt-6 border-t border-gray-200">
                    <a href="{{ route('admin.partners.index') }}" 
                       class="px-4 py-2 text-sm font-medium text-gray-700 bg-gray-100 border border-gray-300 rounded-md hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-500">
                        Batal
                    </a>
                    <button type="submit" 
                            class="px-4 py-2 text-sm font-medium text-white bg-blue-600 border border-transparent rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        Update Partner
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
