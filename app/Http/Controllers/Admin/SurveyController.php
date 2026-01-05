<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CustomerSurvey;
use Illuminate\Http\Request;

class SurveyController extends Controller
{
    public function index()
    {
        $surveys = CustomerSurvey::orderBy('created_at', 'desc')->paginate(20);
        return view('admin.survey.index', compact('surveys'));
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
