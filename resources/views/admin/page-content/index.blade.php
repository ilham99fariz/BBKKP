@extends('layouts.admin')

@section('title', 'Manajemen Konten - Admin Panel')
@section('page-title', 'Manajemen Konten: ' . ucfirst(str_replace('-', ' ', $type)))

@section('content')
    <div class="flex justify-between items-center mb-6">
        <div>
            <h1 class="text-2xl font-bold text-gray-900">
                @if($currentCategory)
                    {{ $categories[$currentCategory] ?? ucfirst($currentCategory) }}
                @else
                    Semua Konten {{ ucfirst(str_replace('-', ' ', $type)) }}
                @endif
            </h1>
            @if($currentCategory)
                <p class="text-sm text-gray-500 mt-1">
                    <a href="{{ route('admin.page-content.index', ['type' => $type]) }}" class="text-blue-600 hover:text-blue-700">
                        ← Kembali ke semua konten
                    </a>
                </p>
            @endif
        </div>
        <a href="{{ route('admin.page-content.create', ['type' => $type, 'category' => $currentCategory]) }}"
            class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors duration-200">
            <i class="fas fa-plus mr-2"></i>Tambah Konten
        </a>
    </div>

    @if(session('success'))
        <div class="bg-green-50 border-l-4 border-green-400 text-green-700 p-4 mb-6 rounded">
            <div class="flex">
                <div class="flex-shrink-0">
                    <i class="fas fa-check-circle"></i>
                </div>
                <div class="ml-3">
                    <p class="text-sm font-medium">{{ session('success') }}</p>
                </div>
            </div>
        </div>
    @endif

    <!-- Category Filter -->
    @if(count($categories) > 0)
        <div class="bg-white rounded-lg shadow p-4 mb-6">
            <div class="flex flex-wrap gap-2">
                <a href="{{ route('admin.page-content.index', ['type' => $type]) }}"
                    class="px-4 py-2 rounded-lg text-sm font-medium transition-colors duration-200 {{ !$currentCategory ? 'bg-blue-600 text-white' : 'bg-gray-100 text-gray-700 hover:bg-gray-200' }}">
                    Semua
                </a>
                @foreach($categories as $key => $label)
                    <a href="{{ route('admin.page-content.index', ['type' => $type, 'category' => $key]) }}"
                        class="px-4 py-2 rounded-lg text-sm font-medium transition-colors duration-200 {{ $currentCategory == $key ? 'bg-blue-600 text-white' : 'bg-gray-100 text-gray-700 hover:bg-gray-200' }}">
                        {{ $label }}
                    </a>
                @endforeach
            </div>
        </div>
    @endif

    <div class="bg-white rounded-lg shadow overflow-hidden">
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Judul</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Slug</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Kategori</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Urutan</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @forelse($pages as $page)
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4">
                                <div class="text-sm font-medium text-gray-900">{{ $page->title }}</div>
                                @if($page->hero_title)
                                    <div class="text-xs text-gray-500 mt-1">{{ $page->hero_title }}</div>
                                @endif
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-600">{{ $page->slug }}</div>
                            </td>
                            <td class="px-6 py-4">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">
                                    {{ $categories[$page->category] ?? $page->category ?? '-' }}
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                @if ($page->is_active)
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                        Aktif
                                    </span>
                                @else
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800">
                                        Tidak Aktif
                                    </span>
                                @endif
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                {{ $page->sort_order }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <div class="flex space-x-2">
                                    <a href="{{ route('dynamic.page', $page->slug) }}"
                                        class="text-blue-600 hover:text-blue-900" target="_blank" title="Lihat">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="{{ route('admin.page-content.edit', ['type' => $type, 'page' => $page]) }}"
                                        class="text-indigo-600 hover:text-indigo-900" title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('admin.page-content.destroy', ['type' => $type, 'page' => $page]) }}" method="POST"
                                        class="inline"
                                        onsubmit="return confirm('Apakah Anda yakin ingin menghapus konten ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:text-red-900" title="Hapus">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="px-6 py-12 text-center">
                                <div class="text-gray-500">
                                    <i class="fas fa-file-alt text-4xl mb-4"></i>
                                    <p class="text-lg font-medium">Belum ada konten</p>
                                    <p class="text-sm">Mulai dengan menambahkan konten pertama Anda</p>
                                    <a href="{{ route('admin.page-content.create', ['type' => $type, 'category' => $currentCategory]) }}"
                                        class="mt-4 inline-block bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors duration-200">
                                        <i class="fas fa-plus mr-2"></i>Tambah Konten
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection

