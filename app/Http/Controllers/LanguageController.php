<?php

namespace App\Http\Controllers;

use App\Models\DynamicPage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    public function switch(Request $request, $locale)
    {
        // Validate locale
        if (!in_array($locale, ['id', 'en'])) {
            $locale = 'id';
        }
        
        // Store locale in session
        Session::put('locale', $locale);
        
        // If we're on a dynamic page, redirect to the localized slug
        $referrer = $request->header('referer');
        if ($referrer && strpos($referrer, '/pages/') !== false) {
            // Extract slug from the referrer URL
            preg_match('/\/pages\/([^\/?\#]+)/', $referrer, $matches);
            if (isset($matches[1])) {
                $currentSlug = $matches[1];
                
                // Find the page by any slug variant
                $page = DynamicPage::where('slug_id', $currentSlug)
                    ->orWhere('slug_en', $currentSlug)
                    ->orWhere('slug', $currentSlug)
                    ->first();
                
                // If found, redirect to the localized slug
                if ($page) {
                    $localizedSlug = $page->{'slug_' . $locale} ?? $page->slug;
                    return redirect()->route('pages.show', $localizedSlug);
                }
            }
        }
        
        // Redirect back to previous page if not a dynamic page
        return redirect()->back();
    }
}

