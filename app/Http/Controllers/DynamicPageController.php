<?php

namespace App\Http\Controllers;

use App\Models\DynamicPage;
use Illuminate\Http\Request;

class DynamicPageController extends Controller
{
    public function show($slug)
    {
        $page = DynamicPage::where('slug', $slug)->firstOrFail();
        // Gunakan template yang mendukung hero image dan konten lengkap
        return view('pages.dynamic.show', compact('page'));
    }
    public function store(Request $request)
    {
        $page = new Page();
        $page->title = $request->title;
        $page->content = $request->content;
        $page->save();

        return redirect()->back()->with('success', 'Halaman berhasil dibuat.');
    }

}
