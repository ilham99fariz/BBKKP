<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\News;
use App\Models\Testimonial;
use App\Models\Partner;
use App\Models\HomepageSetting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display the homepage.
     */
  public function index()
{
    $services = Service::active()->ordered()->take(4)->get();
    $testimonials = Testimonial::approved()->ordered()->take(3)->get();
    $partners = Partner::active()->ordered()->get();
    $settings = HomepageSetting::getAllAsArray();

    // Featured first (position = 1)
    $featuredNews = News::published()
        ->where('position', 1)
        ->latest()
        ->first();

    // Other news (excluding featured)
    $otherNews = News::published()
        ->where(function ($q) {
            $q->whereNull('position')
              ->orWhere('position', '!=', 1);
        })
        ->latest()
        ->take(3)
        ->get();

    // Build $news collection with featured first, then others (limit 3)
    $news = collect();
    if ($featuredNews) {
        $news->push($featuredNews);
    }
    $news = $news->merge($otherNews)->slice(0, 3)->values();

    return view('pages.home', compact('services', 'news', 'testimonials', 'partners', 'settings'));
}


}
