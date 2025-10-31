<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of news.
     */
    public function index()
    {
        $news = News::published()->latest()->paginate(6);
        
        return view('pages.news.index', compact('news'));
    }

    /**
     * Display the specified news.
     */
    public function show(News $news)
    {
        if (!$news->is_published || $news->published_at > now()) {
            abort(404);
        }

        // Increment views
        $news->incrementViews();

        $relatedNews = News::published()
            ->where('id', '!=', $news->id)
            ->latest()
            ->take(3)
            ->get();

        return view('pages.news.show', compact('news', 'relatedNews'));
    }
}
