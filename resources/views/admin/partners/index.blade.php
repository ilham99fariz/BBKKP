@extends('layouts.admin')

@section('title', 'Manajemen Partner - Admin Panel')
@section('page-title', 'Manajemen Partner')

@section('content')
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-gray-900">Partner</h1>
        <a href="{{ route('admin.partners.create') }}"
            class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors duration-200">
            <i class="fas fa-plus mr-2"></i>Tambah Partner
        </a>
    </div>

    <div class="bg-white rounded-lg shadow overflow-hidden">
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider w-1/4">
                            Partner</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider w-1/3">
                            Website</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider w-20">
                            Status</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider w-16">
                            Urutan</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider w-24">Aksi
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @forelse($partners as $partner)
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4">
                                <div class="flex items-center">
                                    @if ($partner->logo)
                                        <img src="{{ Storage::url($partner->logo) }}" alt="{{ $partner->name }}"
                                            class="h-10 w-10 rounded-lg object-cover mr-3 flex-shrink-0">
                                    @else
                                        <div
                                            class="h-10 w-10 bg-gray-200 rounded-lg flex items-center justify-center mr-3 flex-shrink-0">
                                            <i class="fas fa-handshake text-gray-400"></i>
                                        </div>
                                    @endif
                                    <div class="min-w-0 flex-1">
                                        <div class="text-sm font-medium text-gray-900 truncate">{{ $partner->name }}</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                @if($partner->website_url)
                                    <a href="{{ $partner->website_url }}" 
                                       target="_blank" 
                                       class="text-blue-600 hover:text-blue-900 text-sm">
                                        {{ $partner->website_url }}
                                        <i class="fas fa-external-link-alt ml-1"></i>
                                    </a>
                                @else
                                    <span class="text-gray-500 text-sm">-</span>
                                @endif
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                @if ($partner->is_active)
                                    <span
                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                        Aktif
                                    </span>
                                @else
                                    <span
                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800">
                                        Tidak Aktif
                                    </span>
                                @endif
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                {{ $partner->sort_order }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <div class="flex space-x-2">
                                    @if($partner->website_url)
                                        <a href="{{ $partner->website_url }}" 
                                           target="_blank"
                                           class="text-blue-600 hover:text-blue-900">
                                            <i class="fas fa-external-link-alt"></i>
                                        </a>
                                    @endif
                                    <a href="{{ route('admin.partners.edit', $partner) }}"
                                        class="text-indigo-600 hover:text-indigo-900">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('admin.partners.destroy', $partner) }}" method="POST"
                                        class="inline"
                                        onsubmit="return confirm('Apakah Anda yakin ingin menghapus partner ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:text-red-900">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="px-6 py-12 text-center">
                                <div class="text-gray-500">
                                    <i class="fas fa-handshake text-4xl mb-4"></i>
                                    <p class="text-lg font-medium">Belum ada partner</p>
                                    <p class="text-sm">Mulai dengan menambahkan partner pertama Anda</p>
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        @if ($partners->hasPages())
            <div class="px-6 py-4 border-t border-gray-200">
                {{ $partners->links() }}
            </div>
        @endif
    </div>
@endsection
