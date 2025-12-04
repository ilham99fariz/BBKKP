@extends('layouts.admin')

@section('title', 'Manajemen Testimoni - Admin Panel')
@section('page-title', 'Manajemen Testimoni')

@section('content')
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-gray-900">Testimoni</h1>
        <a href="{{ route('admin.testimonials.create') }}"
            class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors duration-200">
            <i class="fas fa-plus mr-2"></i>Tambah Testimoni
        </a>
    </div>

    <div class="bg-white rounded-lg shadow overflow-hidden">
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider w-1/4">
                            Klien</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider w-1/3">
                            Testimoni</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider w-20">
                            Rating</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider w-20">
                            Status</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider w-16">
                            Urutan</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider w-24">Aksi
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @forelse($testimonials as $testimonial)
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4">
                                <div class="flex items-center">
                                    @if ($testimonial->image)
                                        <img src="{{ Storage::url($testimonial->image) }}" alt="{{ $testimonial->client_name }}"
                                            class="h-10 w-10 rounded-full object-cover mr-3 flex-shrink-0">
                                    @else
                                        <div
                                            class="h-10 w-10 bg-gray-200 rounded-full flex items-center justify-center mr-3 flex-shrink-0">
                                            <i class="fas fa-user text-gray-400"></i>
                                        </div>
                                    @endif
                                    <div class="min-w-0 flex-1">
                                        <div class="text-sm font-medium text-gray-900 truncate">{{ $testimonial->client_name }}</div>
                                        @if($testimonial->client_company)
                                            <div class="text-xs text-gray-500">{{ $testimonial->client_company }}</div>
                                        @endif
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-900 max-w-md">
                                    <div class="line-clamp-2">{{ Str::limit($testimonial->content, 100) }}</div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    @for($i = 1; $i <= 5; $i++)
                                        <i class="fas fa-star {{ $i <= $testimonial->rating ? 'text-yellow-400' : 'text-gray-300' }} text-sm"></i>
                                    @endfor
                                    <span class="ml-1 text-xs text-gray-500">({{ $testimonial->rating }}/5)</span>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                @if ($testimonial->is_approved)
                                    <span
                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                        <i class="fas fa-check mr-1"></i>Disetujui
                                    </span>
                                @else
                                    <span
                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                                        <i class="fas fa-clock mr-1"></i>Menunggu Review
                                    </span>
                                @endif
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                {{ $testimonial->sort_order }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <div class="flex space-x-2">
                                    @if(isset($testimonial->is_survey) && $testimonial->is_survey === true)
                                        {{-- Survey item: allow only toggle visibility and delete --}}
                                        <form action="{{ route('admin.surveys.toggle-visibility', $testimonial->survey_id) }}" method="POST" class="inline">
                                            @csrf
                                            <button type="submit" class="text-{{ $testimonial->show_on_home ? 'green' : 'gray' }}-600 hover:text-{{ $testimonial->show_on_home ? 'green' : 'gray' }}-900"
                                                    title="{{ ($testimonial->show_on_home ?? false) ? 'Sembunyikan di beranda' : 'Tampilkan di beranda' }}">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                        </form>

                                        <form action="{{ route('admin.surveys.destroy', $testimonial->survey_id) }}" method="POST" class="inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus survey ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-600 hover:text-red-900">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    @else
                                        {{-- Regular Testimonial actions --}}
                                        <a href="{{ route('admin.testimonials.edit', $testimonial) }}" class="text-indigo-600 hover:text-indigo-900">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form action="{{ route('admin.testimonials.toggle-approval', $testimonial) }}" method="POST" class="inline">
                                            @csrf
                                            <button type="submit" class="text-{{ $testimonial->is_approved ? 'yellow' : 'green' }}-600 hover:text-{{ $testimonial->is_approved ? 'yellow' : 'green' }}-900" title="{{ $testimonial->is_approved ? 'Batalkan Persetujuan' : 'Setujui' }}">
                                                <i class="fas fa-{{ $testimonial->is_approved ? 'times' : 'check' }}"></i>
                                            </button>
                                        </form>
                                        <form action="{{ route('admin.testimonials.destroy', $testimonial) }}" method="POST" class="inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus testimoni ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-600 hover:text-red-900">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    @endif
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="px-6 py-12 text-center">
                                <div class="text-gray-500">
                                    <i class="fas fa-quote-left text-4xl mb-4"></i>
                                    <p class="text-lg font-medium">Belum ada testimoni</p>
                                    <p class="text-sm">Mulai dengan menambahkan testimoni pertama Anda</p>
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        @if ($testimonials->hasPages())
            <div class="px-6 py-4 border-t border-gray-200">
                {{ $testimonials->links() }}
            </div>
        @endif
    </div>
@endsection
