@extends('layouts.app')

@section('content')
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Telepon</th>
                <th>Instansi</th>
                <th>Kepuasan Layanan (1-9)</th>
                <th>NPS Score</th>
                <th>Catatan Korupsi</th>
                <th>Tanggal</th>
            </tr>
        </thead>
        <tbody>
            @foreach($surveys as $survey)
                <tr>
                    <td>{{ $survey->id }}</td>
                    <td>{{ $survey->nama }}</td>
                    <td>{{ $survey->email }}</td>
                    <td>{{ $survey->telepon }}</td>
                    <td>{{ $survey->instansi }}</td>
                    <td>
                        @php
                            $scores = [];
                            for ($i = 1; $i <= 9; $i++) {
                                if (!empty($survey->{"kepuasan_$i"})) {
                                    $scores[] = "$i:" . $survey->{"kepuasan_$i"};
                                }
                            }
                        @endphp
                        {{ implode(' | ', $scores) }}
                    </td>
                    <td>{{ $survey->nps_score ?? '-' }}</td>
                    <td>{{ $survey->catatan_korupsi ?? '-' }}</td>
                    <td>{{ $survey->created_at?->format('d M Y H:i') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection