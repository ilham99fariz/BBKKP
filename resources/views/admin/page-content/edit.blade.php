@extends('layouts.admin')

@section('title', 'Edit Konten - Admin Panel')
@section('page-title', 'Edit Konten: ' . ucfirst(str_replace('-', ' ', $type)))

@section('content')
    <div class="max-w-5xl mx-auto">
        <div class="bg-white rounded-lg shadow p-6">
            <form action="{{ route('admin.page-content.update', ['type' => $type, 'page' => $page]) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="grid grid-cols-1 gap-6">
                    <div>
                        <label for="title" class="block text-sm font-medium text-gray-700 mb-2">Judul Halaman *</label>
                        <input type="text" id="title" name="title" value="{{ old('title', $page->title) }}"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('title') border-red-500 @enderror"
                            required>
                        @error('title')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="slug" class="block text-sm font-medium text-gray-700 mb-2">Slug (URL)</label>
                        <input type="text" id="slug" name="slug" value="{{ old('slug', $page->slug) }}"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('slug') border-red-500 @enderror"
                            placeholder="kosongkan untuk auto-generate dari judul">
                        <p class="text-sm text-gray-500 mt-1">Format: huruf-kecil-dan-tanpa-spasi</p>
                        @error('slug')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="category" class="block text-sm font-medium text-gray-700 mb-2">Kategori *</label>
                        <select id="category" name="category"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('category') border-red-500 @enderror"
                            required>
                            <option value="">Pilih Kategori</option>
                            @foreach ($categories as $key => $label)
                                <option value="{{ $key }}"
                                    {{ old('category', $page->category) == $key ? 'selected' : '' }}>
                                    {{ $label }}
                                </option>
                            @endforeach
                        </select>
                        @error('category')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="sort_order" class="block text-sm font-medium text-gray-700 mb-2">Urutan</label>
                            <input type="number" id="sort_order" name="sort_order"
                                value="{{ old('sort_order', $page->sort_order) }}" min="0"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('sort_order') border-red-500 @enderror">
                            @error('sort_order')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex items-center">
                            <input type="checkbox" id="is_active" name="is_active" value="1"
                                {{ old('is_active', $page->is_active) ? 'checked' : '' }}
                                class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                            <label for="is_active" class="ml-2 block text-sm text-gray-900">
                                Aktifkan halaman
                            </label>
                        </div>
                    </div>

                    <div>
                        <label for="hero_title" class="block text-sm font-medium text-gray-700 mb-2">Judul Hero</label>
                        <input type="text" id="hero_title" name="hero_title"
                            value="{{ old('hero_title', $page->hero_title) }}"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>

                    <div>
                        <label for="hero_subtitle" class="block text-sm font-medium text-gray-700 mb-2">Subjudul Hero</label>
                        <textarea id="hero_subtitle" name="hero_subtitle" rows="2"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">{{ old('hero_subtitle', $page->hero_subtitle) }}</textarea>
                    </div>

                    <div>
                        <label for="hero_image" class="block text-sm font-medium text-gray-700 mb-2">Gambar Hero</label>
                        @if ($page->hero_image)
                            <div class="mb-2">
                                <img src="{{ Storage::url($page->hero_image) }}" alt="Hero Image"
                                    class="h-32 w-auto rounded">
                                <p class="text-sm text-gray-600 mt-1">Gambar saat ini</p>
                            </div>
                        @endif
                        <input type="file" id="hero_image" name="hero_image" accept=".jpeg,.jpg,.png,.gif,.webp"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        <p class="text-sm text-gray-500 mt-1">Format: JPG, PNG, WEBP. Maksimal 2MB</p>
                    </div>

                    <div>
                        <label for="content" class="block text-sm font-medium text-gray-700 mb-2">Konten Halaman</label>
                        <textarea id="content" name="content" rows="20"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('content') border-red-500 @enderror">{{ old('content', $page->content) }}</textarea>
                        @error('content')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="flex justify-end space-x-4 mt-8 pt-6 border-t border-gray-200">
                    <a href="{{ route('admin.page-content.index', ['type' => $type, 'category' => $page->category]) }}"
                        class="px-6 py-3 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 transition-colors duration-200">
                        Batal
                    </a>
                    <button type="submit"
                        class="px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors duration-200">
                        Update Konten
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- CKEditor 4 -->
    <script src="https://cdn.ckeditor.com/4.22.1/standard-all/ckeditor.js"></script>
    <script>
        const ckUploadUrl = "{{ route('admin.page-content.upload', ['type' => $type]) }}?_token={{ csrf_token() }}";

        CKEDITOR.replace('content', {
            height: 500,
            language: 'id',
            toolbar: [
                { name: 'document', items: ['Source', '-', 'Save', 'NewPage', 'Preview', 'Print', '-', 'Templates'] },
                { name: 'clipboard', items: ['Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo'] },
                { name: 'editing', items: ['Find', 'Replace', '-', 'SelectAll', '-', 'Scayt'] },
                { name: 'forms', items: ['Form', 'Checkbox', 'Radio', 'TextField', 'Textarea', 'Select', 'Button', 'ImageButton', 'HiddenField'] },
                '/',
                { name: 'basicstyles', items: ['Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript', '-', 'CopyFormatting', 'RemoveFormat'] },
                { name: 'paragraph', items: ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote', 'CreateDiv', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock', '-', 'BidiLtr', 'BidiRtl', 'Language'] },
                { name: 'links', items: ['Link', 'Unlink', 'Anchor'] },
                { name: 'insert', items: ['Image', 'Flash', 'Table', 'HorizontalRule', 'Smiley', 'SpecialChar', 'PageBreak', 'Iframe'] },
                '/',
                { name: 'styles', items: ['Styles', 'Format', 'Font', 'FontSize'] },
                { name: 'colors', items: ['TextColor', 'BGColor'] },
                { name: 'tools', items: ['Maximize', 'ShowBlocks'] },
                { name: 'about', items: ['About'] }
            ],
            filebrowserImageUploadUrl: ckUploadUrl,
            filebrowserUploadUrl: ckUploadUrl,
            filebrowserUploadMethod: 'form',
            extraPlugins: 'uploadimage,image2,justify',
            removePlugins: 'easyimage,cloudservices,image',
            allowedContent: true
        });
    </script>
@endsection

