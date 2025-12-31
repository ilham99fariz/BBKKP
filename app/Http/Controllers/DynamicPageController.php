<?php

namespace App\Http\Controllers;

use App\Models\DynamicPage;
use Illuminate\Http\Request;

class DynamicPageController extends Controller
{
    public function show($slug)
    {
        $page = DynamicPage::where('slug', $slug)->firstOrFail();
        // Gunakan template yang mendukung hero image dan konten lengkap
        return view('pages.dynamic.show', compact('page'));
    }
}
