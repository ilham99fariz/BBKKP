<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    /**
     * Display a listing of news
     */
    public function index()
    {
        $news = News::orderByRaw('CASE WHEN position IS NULL THEN 1 ELSE 0 END')
            ->orderBy('position', 'asc')
            ->orderBy('published_at', 'desc')
            ->paginate(20);

        return view('admin.news.index', compact('news'));
    }

    /**
     * Show the form for creating a new news
     */
    public function create()
    {
        return view('admin.news.form');
    }

    /**
     * Store a newly created news
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'excerpt' => 'required|string|max:500',
            'content' => 'required|string',
            'author' => 'required|string|max:255',
            'position' => 'nullable|integer|in:1,2,3',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:10240',
            'published_at' => 'required|date',
            'is_published' => 'boolean'
        ]);

        // Generate slug from title
        $validated['slug'] = Str::slug($validated['title']);

        // Handle image upload
        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('news', 'public');
        }

        // Set is_published default value
        $validated['is_published'] = $request->has('is_published');

        // Initialize views counter
        $validated['views'] = 0;

        News::create($validated);

        return redirect()->route('admin.news.index')
            ->with('success', 'Berita berhasil ditambahkan!');
    }

    /**
     * Show the form for editing news
     */
    public function edit(News $news)
    {
        return view('admin.news.form', compact('news'));
    }

    /**
     * Update the specified news
     */
    public function update(Request $request, News $news)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'excerpt' => 'required|string|max:500',
            'content' => 'required|string',
            'author' => 'required|string|max:255',
            'position' => 'nullable|integer|in:1,2,3',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:10240',
            'published_at' => 'required|date',
            'is_published' => 'boolean'
        ]);

        // Update slug if title changed
        if ($validated['title'] !== $news->title) {
            $validated['slug'] = Str::slug($validated['title']);
        }

        // Handle image upload
        if ($request->hasFile('image')) {
            // Delete old image
            if ($news->image) {
                Storage::disk('public')->delete($news->image);
            }
            $validated['image'] = $request->file('image')->store('news', 'public');
        }

        // Set is_published
        $validated['is_published'] = $request->has('is_published');

        $news->update($validated);

        return redirect()->route('admin.news.index')
            ->with('success', 'Berita berhasil diupdate!');
    }

    /**
     * Toggle publish status
     */
    public function togglePublish(News $news)
    {
        $news->update([
            'is_published' => !$news->is_published
        ]);

        $status = $news->is_published ? 'dipublikasikan' : 'di-unpublish';

        return redirect()->back()
            ->with('success', "Berita berhasil {$status}!");
    }

    /**
     * Remove the specified news
     */
    public function destroy(News $news)
    {
        // Delete image if exists
        if ($news->image) {
            Storage::disk('public')->delete($news->image);
        }

        $news->delete();

        return redirect()->route('admin.news.index')
            ->with('success', 'Berita berhasil dihapus!');
    }
}
