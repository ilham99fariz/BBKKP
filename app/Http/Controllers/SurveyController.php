<?php

namespace App\Http\Controllers;

use App\Models\SurveyResponse;
use Illuminate\Http\Request;

class SurveyController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'fullname' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'nullable|string|max:20',
            'company' => 'nullable|string|max:255',
            'rating' => 'required|integer|min:1|max:5',
            'feedback' => 'required|string',
        ]);

        SurveyResponse::create($request->all());

        if ($request->expectsJson()) {
            return response()->json([
                'success' => true,
                'message' => 'Terima kasih! Survey Anda telah terkirim.'
            ]);
        }

        return back()->with('success', 'Terima kasih! Survey Anda telah terkirim.');
    }
}

