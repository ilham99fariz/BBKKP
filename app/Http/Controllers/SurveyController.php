<?php

namespace App\Http\Controllers;

use App\Models\CustomerSurvey;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class SurveyController extends Controller
{
    public function index()
    {
        return view('survey.form');
    }

    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'layanan' => 'required|array',
                'nama' => 'required|string|max:255',
                'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
                'email' => 'required|email',
                'pendidikan' => 'required|string',
                'instansi' => 'required|string|max:255',
                'pekerjaan' => 'required|string|max:255',
                'kepuasan_1' => 'required|integer|min:1|max:4',
                'kepuasan_2' => 'required|integer|min:1|max:4',
                'kepuasan_3' => 'required|integer|min:1|max:4',
                'kepuasan_4' => 'required|integer|min:1|max:4',
                'kepuasan_5' => 'required|integer|min:1|max:4',
                'kepuasan_6' => 'required|integer|min:1|max:4',
                'kepuasan_7' => 'required|integer|min:1|max:4',
                'kepuasan_8' => 'required|integer|min:1|max:4',
                'kepuasan_9' => 'required|integer|min:1|max:4',
                'saran' => 'required|string',
                'jasa_dibutuhkan' => 'required|string',
                'korupsi_1' => 'required|integer|min:1|max:4',
                'korupsi_2' => 'required|integer|min:1|max:4',
                'korupsi_3' => 'required|integer|min:1|max:4',
                'korupsi_4' => 'required|integer|min:1|max:4',
                'korupsi_5' => 'required|integer|min:1|max:4',
                'korupsi_6' => 'required|integer|min:1|max:4',
                'korupsi_7' => 'required|integer|min:1|max:4',
                'korupsi_8' => 'required|integer|min:1|max:4',
                'korupsi_9' => 'required|integer|min:1|max:4',
                'korupsi_10' => 'required|integer|min:1|max:4',
                'info_sumber' => 'required|array',
                'info_sumber_lainnya' => 'nullable|string',
                'lama_penggunaan' => 'required|string',
                'nps_score' => 'required|integer|min:0|max:10',
                'nps_alasan' => 'required|string',
            ]);

            CustomerSurvey::create($validated);

            if ($request->expectsJson()) {
                return response()->json([
                    'success' => true,
                    'message' => 'Terima kasih! Survey Anda telah terkirim.'
                ]);
            }

            return back()->with('success', 'Terima kasih! Survey Anda telah terkirim.');
            
        } catch (\Illuminate\Validation\ValidationException $e) {
            if ($request->expectsJson()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Validasi gagal',
                    'errors' => $e->errors()
                ], 422);
            }
            throw $e;
        } catch (\Exception $e) {
            Log::error('Survey submission error: ' . $e->getMessage());
            
            if ($request->expectsJson()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Terjadi kesalahan: ' . $e->getMessage()
                ], 500);
            }
            
            return back()->with('error', 'Terjadi kesalahan saat menyimpan survey.');
        }
    }
}

