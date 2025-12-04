<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SurveyResponse;
use Illuminate\Http\Request;

class SurveyController extends Controller
{
    /**
     * Delete a survey response
     */
    public function destroy($id)
    {
        $survey = SurveyResponse::find($id);
        if (!$survey) {
            return redirect()->back()->with('error', 'Survey tidak ditemukan.');
        }

        $survey->delete();

        return redirect()->route('admin.testimonials.index')->with('success', 'Survey berhasil dihapus.');
    }

    /**
     * Toggle show_on_home flag
     */
    public function toggleVisibility($id)
    {
        $survey = SurveyResponse::find($id);
        if (!$survey) {
            return redirect()->back()->with('error', 'Survey tidak ditemukan.');
        }

        $survey->show_on_home = !$survey->show_on_home;
        $survey->save();

        return redirect()->route('admin.testimonials.index')->with('success', 'Visibility survey diperbarui.');
    }
}
