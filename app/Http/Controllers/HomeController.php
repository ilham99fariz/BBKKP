<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Testimonial;
use App\Models\Partner;
use App\Models\HomepageSlider;
use App\Models\DynamicPage;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display the homepage.
     */
  public function index()
{
    $testimonials = Testimonial::approved()->ordered()->take(3)->get();
    $partners = Partner::active()->ordered()->get();
    $sliders = HomepageSlider::getActiveSliders(); // Load active sliders

    // Featured News (Position 1 - Tampilan Besar)
    $featuredNews = News::published()
        ->where('position', 1)
        ->latest('published_at')
        ->first();

    // Priority News (Position 2, 3, 4 - Tampilan Sedang)
    $priorityNews = News::published()
        ->whereIn('position', [2, 3, 4])
        ->orderBy('position')
        ->orderBy('published_at', 'desc')
        ->take(4)
        ->get();

    // Jika priority news kurang dari 4, ambil berita regular untuk melengkapi
    if ($priorityNews->count() < 4) {
        $regularNews = News::published()
            ->whereNull('position')
            ->orWhere('position', '>', 4)
            ->latest('published_at')
            ->take(4 - $priorityNews->count())
            ->get();
        
        $priorityNews = $priorityNews->merge($regularNews);
    }

    // Build $news collection: featured + 4 priority
    $news = collect();
    if ($featuredNews) {
        $news->push($featuredNews);
    }
    $news = $news->merge($priorityNews)->take(5)->values();

    // Get all active layanan content from DynamicPage
    $layananContents = DynamicPage::where('type', 'layanan')
        ->where('is_active', true)
        ->orderBy('sort_order')
        ->orderBy('created_at', 'desc')
        ->get();

    return view('pages.home', compact('news', 'testimonials', 'partners', 'sliders', 'layananContents'));
}


}
