<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DynamicPage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class DynamicPageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pages = DynamicPage::orderBy('type')->orderBy('sort_order')->get();
        return view('admin.dynamic-pages.index', compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $types = [
            'layanan' => 'Layanan',
            'standar-pelayanan' => 'Standar Pelayanan',
            'media-dan-informasi' => 'Media dan Informasi',
            'tentang-kami' => 'Tentang Kami',
            'halal-center' => 'Halal Center',
            'daftar-layanan' => 'Daftar Layanan',
        ];

        return view('admin.dynamic-pages.create', compact('types'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:dynamic_pages,slug',
            'content' => 'nullable|string',
            'type' => 'required|string',
            'category' => 'nullable|string',
            'sort_order' => 'nullable|integer',
            'is_active' => 'boolean',
        ]);

        $data = $request->all();
        $data['slug'] = $data['slug'] ?? Str::slug($request->title);
        $data['is_active'] = $request->has('is_active');

        if ($request->hasFile('hero_image')) {
            $data['hero_image'] = $request->file('hero_image')->store('pages', 'public');
        }

        DynamicPage::create($data);

        return redirect()->route('admin.dynamic-pages.index')
            ->with('success', 'Halaman berhasil dibuat.');
    }

    /**
     * Display the specified resource.
     */
    public function show(DynamicPage $dynamicPage)
    {
        return view('admin.dynamic-pages.show', compact('dynamicPage'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DynamicPage $dynamicPage)
    {
        $types = [
            'layanan' => 'Layanan',
            'standar-pelayanan' => 'Standar Pelayanan',
            'media-dan-informasi' => 'Media dan Informasi',
            'tentang-kami' => 'Tentang Kami',
            'halal-center' => 'Halal Center',
            'daftar-layanan' => 'Daftar Layanan',
        ];

        return view('admin.dynamic-pages.edit', compact('dynamicPage', 'types'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DynamicPage $dynamicPage)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:dynamic_pages,slug,' . $dynamicPage->id,
            'content' => 'nullable|string',
            'type' => 'required|string',
            'category' => 'nullable|string',
            'sort_order' => 'nullable|integer',
            'is_active' => 'boolean',
        ]);

        $data = $request->all();
        $data['is_active'] = $request->has('is_active');

        if ($request->hasFile('hero_image')) {
            if ($dynamicPage->hero_image) {
                Storage::disk('public')->delete($dynamicPage->hero_image);
            }
            $data['hero_image'] = $request->file('hero_image')->store('pages', 'public');
        }

        $dynamicPage->update($data);

        return redirect()->route('admin.dynamic-pages.index')
            ->with('success', 'Halaman berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DynamicPage $dynamicPage)
    {
        if ($dynamicPage->hero_image) {
            Storage::disk('public')->delete($dynamicPage->hero_image);
        }

        $dynamicPage->delete();

        return redirect()->route('admin.dynamic-pages.index')
            ->with('success', 'Halaman berhasil dihapus.');
    }
}
