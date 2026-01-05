<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Survey;
use Illuminate\Http\Request;

class SurveyAdminController extends Controller
{
    public function index()
    {
        $surveys = Survey::latest()->paginate(20);
        
        // Statistik
        $totalSurveys = Survey::count();
        $avgKepuasan = Survey::selectRaw('
            (kepuasan_1 + kepuasan_2 + kepuasan_3 + kepuasan_4 + kepuasan_5 + 
             kepuasan_6 + kepuasan_7 + kepuasan_8 + kepuasan_9) / 9 as avg
        ')->get()->avg('avg');
        
        $avgKorupsi = Survey::selectRaw('
            (korupsi_1 + korupsi_2 + korupsi_3 + korupsi_4 + korupsi_5 + 
             korupsi_6 + korupsi_7 + korupsi_8 + korupsi_9 + korupsi_10) / 10 as avg
        ')->get()->avg('avg');
        
        $avgNps = Survey::avg('nps_score');
        
        // NPS Distribution
        $promoters = Survey::where('nps_score', '>=', 9)->count();
        $passives = Survey::whereBetween('nps_score', [7, 8])->count();
        $detractors = Survey::where('nps_score', '<=', 6)->count();
        
        // Calculate NPS
        $npsScore = $totalSurveys > 0 
            ? round((($promoters - $detractors) / $totalSurveys) * 100, 2) 
            : 0;

        return view('admin.surveys.index', compact(
            'surveys', 
            'totalSurveys', 
            'avgKepuasan', 
            'avgKorupsi', 
            'avgNps',
            'promoters',
            'passives',
            'detractors',
            'npsScore'
        ));
    }

    public function show($id)
    {
        $survey = Survey::findOrFail($id);
        return view('admin.surveys.show', compact('survey'));
    }

    public function destroy($id)
    {
        $survey = Survey::findOrFail($id);
        $survey->delete();

        return redirect()->route('admin.surveys.index')
            ->with('success', 'Survey berhasil dihapus!');
    }

    public function export()
    {
        $surveys = Survey::all();
        
        // Set headers untuk download CSV
        $filename = "survey_export_" . date('Y-m-d_H-i-s') . ".csv";
        
        header('Content-Type: text/csv; charset=utf-8');
        header('Content-Disposition: attachment; filename=' . $filename);
        
        $output = fopen('php://output', 'w');
        
        // Header CSV
        fputcsv($output, [
            'ID', 'Tanggal', 'Nama', 'Email', 'Telepon', 'Jenis Kelamin', 
            'Pendidikan', 'Instansi', 'Pekerjaan', 'Layanan',
            'Avg Kepuasan', 'Avg Korupsi', 'NPS Score', 'NPS Category'
        ]);
        
        // Data
        foreach ($surveys as $survey) {
            fputcsv($output, [
                $survey->id,
                $survey->created_at->format('Y-m-d H:i:s'),
                $survey->nama,
                $survey->email,
                $survey->telepon,
                $survey->jenis_kelamin,
                $survey->pendidikan,
                $survey->instansi,
                $survey->pekerjaan,
                implode(', ', $survey->layanan),
                $survey->avg_kepuasan,
                $survey->avg_korupsi,
                $survey->nps_score,
                $survey->nps_category
            ]);
        }
        
        fclose($output);
        exit;
    }
}