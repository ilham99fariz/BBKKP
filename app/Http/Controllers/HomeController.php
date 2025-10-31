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
        $news = News::published()->latest()->take(3)->get();
        $testimonials = Testimonial::approved()->ordered()->take(3)->get();
        $partners = Partner::active()->ordered()->get();
        $settings = HomepageSetting::getAllAsArray();

        return view('pages.home', compact('services', 'news', 'testimonials', 'partners', 'settings'));
    }
}
