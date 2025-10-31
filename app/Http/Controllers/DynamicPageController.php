<?php

namespace App\Http\Controllers;

use App\Models\DynamicPage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class DynamicPageController extends Controller
{
    /**
     * Display a dynamic page by slug.
     */
    public function show($slug)
    {
        $page = DynamicPage::where('slug', $slug)->active()->firstOrFail();
        return view('pages.dynamic.show', compact('page'));
    }
    
    /**
     * Helper method to check if a dynamic page exists
     */
    public static function pageExists($slug)
    {
        return DynamicPage::where('slug', $slug)->active()->exists();
    }
}
