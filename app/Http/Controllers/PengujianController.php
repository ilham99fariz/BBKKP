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
        // Try to get dynamic page with slug 'pengujian'
        $page = DynamicPage::where('slug', 'pengujian')->active()->first();
        
        if ($page) {
            return view('pages.dynamic.show', compact('page'));
        }
        
        // Fallback to static view if no dynamic page found
        return view('pages.pengujian.index');
    }

    /**
     * Display Pengujian Produk Kulit detail page.
     */
    public function produkKulit()
    {
        // Try to get dynamic page with slug 'pengujian-produk-kulit'
        $page = DynamicPage::where('slug', 'pengujian-produk-kulit')->active()->first();
        
        if ($page) {
            return view('pages.dynamic.show', compact('page'));
        }
        
        // Fallback to static view if no dynamic page found
        return view('pages.pengujian.produk-kulit');
    }
}
