<?php

namespace App\Http\Controllers\Admin;

use App\Exports\SurveyExport;
use App\Http\Controllers\Controller;
use App\Models\CustomerSurvey;
use Illuminate\Http\Request;

class SurveyController extends Controller
{
    public function index(Request $request)
    {
        $query = CustomerSurvey::query();

        // Filter berdasarkan tahun jika ada
        if ($request->filled('year')) {
            $query->whereYear('created_at', $request->year);
        }

        $surveys = $query->orderBy('created_at', 'desc')->paginate(20);
        $years = CustomerSurvey::selectRaw('YEAR(created_at) as year')
            ->distinct()
            ->orderBy('year', 'desc')
            ->pluck('year');

        return view('admin.survey.index', compact('surveys', 'years'));
    }

    public function export(Request $request)
    {
        $year = $request->input('year');
        $surveys = (new SurveyExport($year))->generate();

        // Headers untuk CSV/Excel
        header('Content-Type: application/vnd.ms-excel; charset=utf-8');
        header('Content-Disposition: attachment; filename="Survey_Layanan_' . ($year ?? 'Semua_Tahun') . '_' . now()->format('Y-m-d_H-i-s') . '.csv"');
        header('Pragma: no-cache');
        header('Expires: 0');

        // Buka output stream
        $output = fopen('php://output', 'w');

        // Set UTF-8 BOM untuk Excel
        fprintf($output, chr(0xEF).chr(0xBB).chr(0xBF));

        // Header kolom
        $headers = [
            'ID',
            'Nama',
            'Email',
            'Telepon',
            'Instansi',
            'Kepuasan 1',
            'Kepuasan 2',
            'Kepuasan 3',
            'Kepuasan 4',
            'Kepuasan 5',
            'Kepuasan 6',
            'Kepuasan 7',
            'Kepuasan 8',
            'Kepuasan 9',
            'NPS Score',
            'Catatan Korupsi',
            'Tanggal'
        ];
        fputcsv($output, $headers, ';');

        // Data rows
        foreach ($surveys as $survey) {
            $row = [
                $survey->id,
                $survey->nama,
                $survey->email,
                $survey->telepon,
                $survey->instansi,
                $survey->kepuasan_1 ?? '',
                $survey->kepuasan_2 ?? '',
                $survey->kepuasan_3 ?? '',
                $survey->kepuasan_4 ?? '',
                $survey->kepuasan_5 ?? '',
                $survey->kepuasan_6 ?? '',
                $survey->kepuasan_7 ?? '',
                $survey->kepuasan_8 ?? '',
                $survey->kepuasan_9 ?? '',
                $survey->nps_score ?? '',
                $survey->catatan_korupsi ?? '',
                $survey->created_at?->format('d M Y H:i') ?? ''
            ];
            fputcsv($output, $row, ';');
        }

        fclose($output);
        exit;
    }

    public function show($id)
    {
        $survey = CustomerSurvey::findOrFail($id);
        return view('admin.survey.show', compact('survey'));
    }

    public function destroy($id)
    {
        $survey = CustomerSurvey::findOrFail($id);
        $survey->delete();

        return response()->json([
            'success' => true,
            'message' => 'Survey berhasil dihapus.'
        ]);
    }

    public function toggleVisibility($id)
    {
        $survey = CustomerSurvey::findOrFail($id);
        $survey->show_on_home = !$survey->show_on_home;
        $survey->save();

        return response()->json([
            'success' => true,
            'message' => 'Status visibility berhasil diubah.'
        ]);
    }
}
