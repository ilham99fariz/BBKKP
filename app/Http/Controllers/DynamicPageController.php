<?php

namespace App\Http\Controllers;

use App\Models\DynamicPage;
use Illuminate\Http\Request;

class DynamicPageController extends Controller
{
    public function show($slug)
    {
        // Try to find page by localized slug first (slug_{locale}), then fallback to default slug
        $locale = app()->getLocale();

        $page = DynamicPage::where('slug_' . $locale, $slug)
            ->orWhere('slug', $slug)
            ->first();

        if (! $page) {
            // also try other locale as fallback
            $other = $locale === 'id' ? 'en' : 'id';
            $page = DynamicPage::where('slug_' . $other, $slug)->first();
        }

        $page = $page ?? DynamicPage::where('slug', $slug)->firstOrFail();

        // Override title and content for view using locale helpers so views don't need changes
        $page->title = $page->getTitleByLocale($locale);
        $page->content = $page->getContentByLocale($locale);
        $page->slug = $page->getSlugByLocale($locale);

        return view('pages.dynamic.show', compact('page'));
    }
}
