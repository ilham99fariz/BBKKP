@extends('layouts.admin')

@section('title', 'Detail Survey - Admin Panel')
@section('page-title', 'Detail Survey #' . $survey->id)

@section('content')
    <div class="mb-6">
        <a href="{{ route('admin.surveys.index') }}"
            class="inline-flex items-center px-4 py-2 bg-gray-600 text-white rounded-lg hover:bg-gray-700">
            <i class="fas fa-arrow-left mr-2"></i> Kembali
        </a>
    </div>

    <div class="bg-white rounded-lg shadow overflow-hidden">
        <!-- Header -->
        <div class="bg-blue-600 text-white px-6 py-4">
            <h3 class="text-xl font-bold">Survey #{{ $survey->id }}</h3>
            <p class="text-sm opacity-90">Diisi pada: {{ $survey->created_at->format('d F Y, H:i') }}</p>
        </div>

        <div class="p-6 space-y-8">
            <!-- Data Responden -->
            <section>
                <h4 class="text-lg font-bold text-gray-900 border-b-2 border-gray-200 pb-2 mb-4">Data Responden</h4>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <p class="text-sm text-gray-600">Nama</p>
                        <p class="font-medium text-gray-900">{{ $survey->nama }}</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-600">Email</p>
                        <p class="font-medium text-gray-900">{{ $survey->email }}</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-600">Jenis Kelamin</p>
                        <p class="font-medium text-gray-900">{{ $survey->jenis_kelamin }}</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-600">Pendidikan</p>
                        <p class="font-medium text-gray-900">{{ $survey->pendidikan }}</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-600">Instansi</p>
                        <p class="font-medium text-gray-900">{{ $survey->instansi }}</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-600">Pekerjaan</p>
                        <p class="font-medium text-gray-900">{{ $survey->pekerjaan }}</p>
                    </div>
                    <div class="md:col-span-2">
                        <p class="text-sm text-gray-600">Layanan yang Digunakan</p>
                        <div class="flex flex-wrap gap-2 mt-1">
                            @foreach($survey->layanan as $layanan)
                                <span class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm">{{ $layanan }}</span>
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>

            <!-- Kepuasan Pelanggan -->
            <section>
                <h4 class="text-lg font-bold text-gray-900 border-b-2 border-gray-200 pb-2 mb-4">Kepuasan Pelanggan</h4>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    @php
                        $kepuasanLabels = [
                            1 => 'Kesesuaian persyaratan',
                            2 => 'Kemudahan prosedur',
                            3 => 'Ketepatan waktu',
                            4 => 'Kesesuaian biaya',
                            5 => 'Kesesuaian hasil',
                            6 => 'Kemampuan petugas',
                            7 => 'Sikap petugas',
                            8 => 'Kualitas sarana prasarana',
                            9 => 'Penanganan pengaduan'
                        ];
                    @endphp
                    @foreach($kepuasanLabels as $key => $label)
                        <div class="flex justify-between items-center p-3 bg-gray-50 rounded">
                            <span class="text-sm text-gray-700">{{ $label }}</span>
                            <span class="flex items-center">
                                @for($i = 1; $i <= 4; $i++)
                                    <i
                                        class="fas fa-star {{ $i <= $survey->{'kepuasan_' . $key} ? 'text-yellow-400' : 'text-gray-300' }}"></i>
                                @endfor
                                <span class="ml-2 text-sm font-bold">{{ $survey->{'kepuasan_' . $key} }}/4</span>
                            </span>
                        </div>
                    @endforeach
                </div>

                <div class="mt-4">
                    <p class="text-sm text-gray-600 font-medium mb-2">Saran / Masukan</p>
                    <div class="p-4 bg-gray-50 rounded">
                        <p class="text-gray-800">{{ $survey->saran }}</p>
                    </div>
                </div>

                <div class="mt-4">
                    <p class="text-sm text-gray-600 font-medium mb-2">Jasa yang Dibutuhkan</p>
                    <div class="p-4 bg-gray-50 rounded">
                        <p class="text-gray-800">{{ $survey->jasa_dibutuhkan }}</p>
                    </div>
                </div>
            </section>

            <!-- Persepsi Korupsi -->
            <section>
                <h4 class="text-lg font-bold text-gray-900 border-b-2 border-gray-200 pb-2 mb-4">Persepsi Korupsi</h4>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    @php
                        $korupsiLabels = [
                            1 => 'Tidak ada KKN',
                            2 => 'Tidak memberikan tanda terima kasih',
                            3 => 'Tidak ada oknum korupsi',
                            4 => 'Tidak ditawari percepatan berbayar',
                            5 => 'Tidak dipersulit',
                            6 => 'Tidak dihubungi di luar jalur resmi',
                            7 => 'Petugas memberikan kwitansi sah',
                            8 => 'Transaksi sesuai dokumen',
                            9 => 'Tidak ada penutupan info keuangan',
                            10 => 'Tidak ada penutupan info tarif BLU'
                        ];
                    @endphp
                    @foreach($korupsiLabels as $key => $label)
                        <div class="flex justify-between items-center p-3 bg-gray-50 rounded">
                            <span class="text-sm text-gray-700">{{ $label }}</span>
                            <span class="flex items-center">
                                @for($i = 1; $i <= 4; $i++)
                                    <i
                                        class="fas fa-star {{ $i <= $survey->{'korupsi_' . $key} ? 'text-yellow-400' : 'text-gray-300' }}"></i>
                                @endfor
                                <span class="ml-2 text-sm font-bold">{{ $survey->{'korupsi_' . $key} }}/4</span>
                            </span>
                        </div>
                    @endforeach
                </div>
            </section>

            <!-- Net Promoter Score -->
            <section>
                <h4 class="text-lg font-bold text-gray-900 border-b-2 border-gray-200 pb-2 mb-4">Net Promoter Score (NPS)
                </h4>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <p class="text-sm text-gray-600">Sumber Informasi</p>
                        <div class="flex flex-wrap gap-2 mt-1">
                            @foreach($survey->info_sumber as $sumber)
                                <span class="px-3 py-1 bg-purple-100 text-purple-800 rounded-full text-sm">{{ $sumber }}</span>
                            @endforeach
                            @if($survey->info_sumber_lainnya)
                                <span
                                    class="px-3 py-1 bg-purple-100 text-purple-800 rounded-full text-sm">{{ $survey->info_sumber_lainnya }}</span>
                            @endif
                        </div>
                    </div>
                    <div>
                        <p class="text-sm text-gray-600">Lama Penggunaan Layanan</p>
                        <p class="font-medium text-gray-900">{{ $survey->lama_penggunaan }}</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-600">NPS Score</p>
                        <div class="flex items-center">
                            <span
                                class="text-3xl font-bold {{ $survey->nps_score >= 9 ? 'text-green-600' : ($survey->nps_score >= 7 ? 'text-yellow-600' : 'text-red-600') }}">
                                {{ $survey->nps_score }}/10
                            </span>
                            <span
                                class="ml-3 px-3 py-1 rounded-full text-sm font-semibold {{ $survey->nps_score >= 9 ? 'bg-green-100 text-green-800' : ($survey->nps_score >= 7 ? 'bg-yellow-100 text-yellow-800' : 'bg-red-100 text-red-800') }}">
                                {{ $survey->nps_score >= 9 ? 'Promoter' : ($survey->nps_score >= 7 ? 'Passive' : 'Detractor') }}
                            </span>
                        </div>
                    </div>
                    <div class="md:col-span-2">
                        <p class="text-sm text-gray-600 font-medium mb-2">Alasan Score</p>
                        <div class="p-4 bg-gray-50 rounded">
                            <p class="text-gray-800">{{ $survey->nps_alasan }}</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection