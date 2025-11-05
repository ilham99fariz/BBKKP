<?php

namespace App\Http\Controllers;

use App\Models\DynamicPage;
use Illuminate\Http\Request;

class DynamicPageController extends Controller
{
    public function show($slug)
    {
        $page = DynamicPage::where('slug', $slug)->firstOrFail();
        return view('pages.dynamic-page', compact('page'));
    }
}
