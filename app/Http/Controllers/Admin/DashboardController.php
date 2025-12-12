<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\News;
use App\Models\Testimonial;
use App\Models\Partner;
use App\Models\DynamicPage;
use App\Models\ContactMessage;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display the admin dashboard.
     */
    public function index()
    {
        $stats = [
            'services' => Service::count(),
            'news' => News::count(),
            'published_news' => News::where('is_published', true)->count(),
            'testimonials' => Testimonial::count(),
            'approved_testimonials' => Testimonial::where('is_approved', true)->count(),
            'partners' => Partner::count(),
            'dynamic_pages' => DynamicPage::count(),
            'active_dynamic_pages' => DynamicPage::where('is_active', true)->count(),
            'visits' => ContactMessage::where('is_read', false)->count(),
            'messages' => ContactMessage::where('is_read', true)->count(),
        ];

        $recentNews = News::latest()->take(5)->get();
        $recentTestimonials = Testimonial::latest()->take(5)->get();

        return view('admin.dashboard', compact('stats', 'recentNews', 'recentTestimonials'));
    }
}
