<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PdfProxyController extends Controller
{
    public function download($key)
    {
        $map = [
            'tarif' => 'https://bbkkp.kemenperin.go.id/storage/files/page/tarif/Kep.%2040%20Penetapan%20Tarif%20Jasa%20Layanan%20BLU%20BBSPJIKKP%202025%20uji.pdf',
            'sop' => 'https://bbkkp.kemenperin.go.id/storage/files/page/SOP%20Layanan%20Jasa%20Pengujian.pdf',
            'audit2022' => public_path('files/Daftar-Audit-LPH-BBSPJIKKP-2022-2023-per20250801.pdf'),
            'audit2024' => public_path('files/Daftar-Audit-LPH-BBSPJIKKP-2024-per20250801.pdf'),
        ];

        if (! isset($map[$key])) {
            abort(404);
        }

        $value = $map[$key];

        // If the map entry is a local file path
        if (is_string($value) && file_exists($value)) {
            return response()->download($value);
        }

        // Otherwise treat it as a remote URL and proxy the response
        try {
            $res = Http::get($value);
        } catch (\Exception $e) {
            abort(404);
        }

        if (! $res->successful()) {
            abort(404);
        }

        $contentType = $res->header('Content-Type', 'application/pdf');
        $filename = basename(parse_url($value, PHP_URL_PATH));

        return response($res->body(), 200)
            ->header('Content-Type', $contentType)
            ->header('Content-Disposition', 'attachment; filename="' . $filename . '"');
    }
}
