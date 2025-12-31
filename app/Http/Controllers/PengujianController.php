<?php

namespace App\Http\Controllers;

use App\Models\DynamicPage;
use Illuminate\Http\Request;

class PengujianController extends Controller
{
    /**
     * Display Pengujian main page.
     */
    public function index()
    {
        // Get dynamic page with slug 'pengujian' or fail with 404
        $page = DynamicPage::where('slug', 'pengujian')->active()->firstOrFail();
        
        return view('pages.dynamic.show', compact('page'));
    }

    /**
     * Display Pengujian Produk Kulit detail page.
     */
    public function produkKulit()
    {
        // Get dynamic page with slug 'pengujian-produk-kulit' or fail with 404
        $page = DynamicPage::where('slug', 'pengujian-produk-kulit')->active()->firstOrFail();
        
        return view('pages.dynamic.show', compact('page'));
    }
}
