@extends('layouts.admin')

@section('title', 'Tambah Konten - Admin Panel')
@section('page-title', 'Tambah Konten: ' . ucfirst(str_replace('-', ' ', $type)))

@section('content')
    <div class="max-w-5xl mx-auto">
        <div class="bg-white rounded-lg shadow p-6">
            <form action="{{ route('admin.page-content.store', ['type' => $type]) }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="grid grid-cols-1 gap-6">
                    <div>
                        <label for="title" class="block text-sm font-medium text-gray-700 mb-2">Judul Halaman *</label>
                        <input type="text" id="title" name="title" value="{{ old('title') }}"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('title') border-red-500 @enderror"
                            required>
                        @error('title')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="slug" class="block text-sm font-medium text-gray-700 mb-2">Slug (URL)</label>
                        <input type="text" id="slug" name="slug" value="{{ old('slug') }}"
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
                                <option value="{{ $key }}" {{ old('category', $selectedCategory) == $key ? 'selected' : '' }}>
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
                            <input type="number" id="sort_order" name="sort_order" value="{{ old('sort_order', 0) }}"
                                min="0"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('sort_order') border-red-500 @enderror">
                            @error('sort_order')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex items-center">
                            <input type="checkbox" id="is_active" name="is_active" value="1"
                                {{ old('is_active', 1) ? 'checked' : '' }}
                                class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                            <label for="is_active" class="ml-2 block text-sm text-gray-900">
                                Aktifkan halaman
                            </label>
                        </div>
                    </div>

                    <div>
                        <label for="hero_title" class="block text-sm font-medium text-gray-700 mb-2">Judul Hero</label>
                        <input type="text" id="hero_title" name="hero_title" value="{{ old('hero_title') }}"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>

                    <div>
                        <label for="hero_subtitle" class="block text-sm font-medium text-gray-700 mb-2">Subjudul Hero</label>
                        <textarea id="hero_subtitle" name="hero_subtitle" rows="2"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">{{ old('hero_subtitle') }}</textarea>
                    </div>

                    <div>
                        <label for="hero_image" class="block text-sm font-medium text-gray-700 mb-2">Gambar Hero</label>
                        <input type="file" id="hero_image" name="hero_image" accept=".jpeg,.jpg,.png,.gif,.webp"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        <p class="text-sm text-gray-500 mt-1">Format: JPG, PNG, WEBP. Maksimal 8MB</p>
                    </div>

                    <div>
                        <label for="content" class="block text-sm font-medium text-gray-700 mb-2">Konten Halaman</label>
                        <textarea id="content" name="content" rows="20"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('content') border-red-500 @enderror">{{ old('content') }}</textarea>
                        @error('content')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="flex justify-end space-x-4 mt-8 pt-6 border-t border-gray-200">
                    <a href="{{ route('admin.page-content.index', ['type' => $type, 'category' => $selectedCategory]) }}"
                        class="px-6 py-3 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 transition-colors duration-200">
                        Batal
                    </a>
                    <button type="submit"
                        class="px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors duration-200">
                        Simpan Konten
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Preview Styles for Accordion & Tabs -->
    <style>
        /* Custom Tabs Preview */
        .custom-tabs { width: 100%; margin: 28px 0; font-family: 'Inter', system-ui, sans-serif; }
        .custom-tabs .tab-buttons { display: flex; flex-wrap: wrap; gap: 8px; background: transparent; padding: 0; margin-bottom: 20px; }
        .custom-tabs .tab-btn { padding: 14px 28px; cursor: pointer; border: none; background: #f1f5f9; color: #64748b; font-weight: 500; font-size: 14px; border-radius: 50px; transition: all 0.3s ease; }
        .custom-tabs .tab-btn:hover { color: #3b82f6; background: #e0e7ff; transform: translateY(-2px); }
        .custom-tabs .tab-btn.active { color: white; background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%); box-shadow: 0 4px 15px rgba(59, 130, 246, 0.35); font-weight: 600; }
        .custom-tabs .tab-panel { display: none; padding: 32px; background: white; border-radius: 20px; box-shadow: 0 4px 20px rgba(0,0,0,0.08); }
        .custom-tabs .tab-panel.active { display: block; }
        
        /* Custom Accordion Preview */
        .custom-accordion { width: 100%; margin: 28px 0; display: flex; flex-direction: column; gap: 12px; }
        .custom-accordion .accordion-item { border: none; background: white; border-radius: 16px; box-shadow: 0 2px 12px rgba(0,0,0,0.06); overflow: hidden; }
        .custom-accordion .accordion-header { display: flex; align-items: center; width: 100%; padding: 20px 24px; padding-right: 60px; background: white; cursor: pointer; font-weight: 600; color: #334155; border: none; text-align: left; font-size: 15px; position: relative; transition: all 0.3s ease; }
        .custom-accordion .accordion-header:hover { color: #3b82f6; }
        .custom-accordion .accordion-header::after { content: ""; position: absolute; right: 24px; top: 50%; width: 10px; height: 10px; border-right: 2.5px solid #94a3b8; border-bottom: 2.5px solid #94a3b8; transform: translateY(-70%) rotate(45deg); transition: all 0.3s ease; }
        .custom-accordion .accordion-header.active::after { transform: translateY(-30%) rotate(-135deg); border-color: #3b82f6; }
        .custom-accordion .accordion-header.active { color: #3b82f6; background: linear-gradient(to right, #eff6ff, #ffffff); }
        .custom-accordion .accordion-header span, .custom-accordion .accordion-header font { pointer-events: none; }
        .custom-accordion .accordion-body { max-height: 0; overflow: hidden; padding: 0 24px; background: #f8fafc; transition: all 0.4s ease; }
        .custom-accordion .accordion-body.active { max-height: 2000px; padding: 20px 24px 24px; }
        
        /* Table Preview */
        #content-preview table { width: 100%; border-collapse: collapse; margin: 20px 0; background: white; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.08); border: 1px solid #e2e8f0; }
        #content-preview table tr:first-child td { background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%); color: white; font-weight: 600; }
        #content-preview table td { padding: 14px 16px; border: 1px solid #e2e8f0; }
    </style>

    <!-- CKEditor 4 -->
    <script src="https://cdn.ckeditor.com/4.22.1/full/ckeditor.js"></script>
    <script>
        CKEDITOR.dtd.$removeEmpty['iframe'] = false;
        
        var editor = CKEDITOR.replace('content', {
            height: 500,
            language: 'id',
            filebrowserImageUploadUrl: '{{ route("admin.page-content.upload", ["type" => $type]) }}?_token={{ csrf_token() }}',
            filebrowserUploadUrl: '{{ route("admin.page-content.upload", ["type" => $type]) }}?_token={{ csrf_token() }}',
            filebrowserUploadMethod: 'form',
            allowedContent: true,
            extraAllowedContent: 'iframe[*]{*}(*);table[*]{*}(*);thead[*]{*}(*);tbody[*]{*}(*);tr[*]{*}(*);th[*]{*}(*);td[*]{*}(*);div[*]{*}(*);button[*]{*}(*)',
            removePlugins: 'iframe',
            extraPlugins: '',
            toolbar: [
                { name: 'document', items: ['Source', '-', 'NewPage', 'Preview', 'Print'] },
                { name: 'clipboard', items: ['Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo'] },
                { name: 'editing', items: ['Find', 'Replace', '-', 'SelectAll'] },
                '/',
                { name: 'basicstyles', items: ['Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript', '-', 'RemoveFormat'] },
                { name: 'paragraph', items: ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock'] },
                { name: 'links', items: ['Link', 'Unlink', 'Anchor'] },
                { name: 'insert', items: ['Image', 'Table', 'HorizontalRule', 'SpecialChar'] },
                '/',
                { name: 'styles', items: ['Styles', 'Format', 'Font', 'FontSize'] },
                { name: 'colors', items: ['TextColor', 'BGColor'] },
                { name: 'tools', items: ['Maximize', 'ShowBlocks'] }
            ]
        });

        // Initialize accordion in preview
        function initPreviewComponents() {
            // Tabs
            document.querySelectorAll('#content-preview .custom-tabs').forEach(function(tabContainer) {
                const buttons = tabContainer.querySelectorAll('.tab-btn');
                const panels = tabContainer.querySelectorAll('.tab-panel');
                
                buttons.forEach(function(btn, index) {
                    btn.onclick = function() {
                        buttons.forEach(b => b.classList.remove('active'));
                        panels.forEach(p => p.classList.remove('active'));
                        btn.classList.add('active');
                        if (panels[index]) panels[index].classList.add('active');
                    };
                });
                
                if (!tabContainer.querySelector('.tab-btn.active') && buttons.length > 0) {
                    buttons[0].classList.add('active');
                    if (panels[0]) panels[0].classList.add('active');
                }
            });
            
            // Accordions
            document.querySelectorAll('#content-preview .custom-accordion').forEach(function(accordion) {
                accordion.onclick = function(e) {
                    let header = e.target.closest('.accordion-header');
                    if (!header) return;
                    
                    const allHeaders = accordion.querySelectorAll('.accordion-header');
                    const allBodies = accordion.querySelectorAll('.accordion-body');
                    const body = header.nextElementSibling;
                    const isActive = header.classList.contains('active');
                    
                    allHeaders.forEach(h => h.classList.remove('active'));
                    allBodies.forEach(b => b.classList.remove('active'));
                    
                    if (!isActive) {
                        header.classList.add('active');
                        if (body && body.classList.contains('accordion-body')) {
                            body.classList.add('active');
                        }
                    }
                };
            });
        }
    </script>
@endsection

