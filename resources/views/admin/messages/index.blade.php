@extends('layouts.admin')

@section('page-title', 'Kunjungan & Pesan')

@section('content')
<div class="bg-white rounded-lg shadow p-6">
    <div class="flex items-center justify-between mb-4">
        <h3 class="text-lg font-semibold">Daftar Kunjungan & Pesan</h3>
        <div class="text-sm text-gray-600">Total: {{ $messages->total() }}</div>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full table-auto">
            <thead>
                <tr class="text-left text-sm text-gray-500 border-b">
                    <th class="py-3">#</th>
                    <th class="py-3">Nama</th>
                    <th class="py-3">Email</th>
                    <th class="py-3">Keperluan</th>
                    <th class="py-3">Subjek</th>
                    <th class="py-3">Tanggal</th>
                    <th class="py-3">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($messages as $msg)
                <tr class="border-b {{ $msg->is_read ? '' : 'bg-blue-50' }}">
                    <td class="py-3 text-sm">{{ $msg->id }}</td>
                    <td class="py-3 text-sm">{{ $msg->name }}</td>
                    <td class="py-3 text-sm">{{ $msg->email }}</td>
                    <td class="py-3 text-sm">{{ $msg->purpose ?? '-' }}</td>
                    <td class="py-3 text-sm">{{ $msg->subject }}</td>
                    <td class="py-3 text-sm">{{ $msg->created_at->format('d M Y H:i') }}</td>
                    <td class="py-3 text-sm">
                        <a href="{{ route('admin.messages.show', $msg) }}" class="text-blue-600 hover:underline">Lihat</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="mt-4">
        {{ $messages->links() }}
    </div>
</div>
@endsection
