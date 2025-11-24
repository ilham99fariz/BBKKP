<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DynamicPage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PageContentController extends Controller
{
    /**
     * Get available categories for a type
     */
    private function getCategories($type)
    {
        $categories = [
            'layanan' => [
                'pengujian' => 'Pengujian',
                'kalibrasi' => 'Kalibrasi',
                'sertifikasi' => 'Sertifikasi',
                'bimbingan-teknis-dan-konsultasi' => 'Bimbingan Teknis dan Konsultasi',
                'inspeksi' => 'Inspeksi',
                'verifikasi-dan-validasi' => 'Verifikasi dan Validasi',
                'uji-profisiensi' => 'Uji Profisiensi',
                'pelatihan-teknis' => 'Pelatihan Teknis',
                'produsen-bahan-acuan' => 'Produsen Bahan Acuan',
                'edukasi' => 'Edukasi',
            ],
            'standar-pelayanan' => [
                'standar-pelayanan' => 'Standar Pelayanan',
                'maklumat-pelayanan' => 'Maklumat Pelayanan',
                'tarif-layanan' => 'Tarif Layanan',
                'tarif-percepatan' => 'Tarif Percepatan',
                'spm' => 'SPM',
                'survey-layanan-pelanggan' => 'Survey Layanan Pelanggan',
            ],
            'media-informasi' => [
                'berita' => 'Berita',
                'publikasi' => 'Publikasi',
                'pengumuman' => 'Pengumuman',
            ],
            'tentang-kami' => [
                'profil-singkat' => 'Profil Singkat',
                'tonggak-sejarah' => 'Tonggak Sejarah',
                'profil-pejabat' => 'Profil Pejabat',
                'struktur-organisasi' => 'Struktur Organisasi',
                'makna-logo' => 'Makna Logo',
            ],
            'halal-center' => [
                'faq' => 'FAQ',
            ],
        ];

        return $categories[$type] ?? [];
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, $type)
    {
        $query = DynamicPage::where('type', $type);

        if ($request->has('category') && $request->category) {
            $query->where('category', $request->category);
        }

        $pages = $query->orderBy('sort_order')->orderBy('created_at', 'desc')->get();
        $categories = $this->getCategories($type);
        $currentCategory = $request->category;

        return view('admin.page-content.index', compact('pages', 'type', 'categories', 'currentCategory'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request, $type)
    {
        $categories = $this->getCategories($type);
        $selectedCategory = $request->category;

        return view('admin.page-content.create', compact('type', 'categories', 'selectedCategory'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $type)
    {
        $categories = $this->getCategories($type);
        $categoryKeys = array_keys($categories);

        $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:dynamic_pages,slug',
            'content' => 'nullable|string',
            'category' => 'required|string|in:' . implode(',', $categoryKeys),
            'hero_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'hero_title' => 'nullable|string|max:255',
            'hero_subtitle' => 'nullable|string|max:500',
            'sort_order' => 'nullable|integer|min:0',
            'is_active' => 'boolean',
        ]);

        $data = $request->all();
        $data['type'] = $type;
        $data['slug'] = $data['slug'] ?? Str::slug($request->title);
        $data['is_active'] = $request->has('is_active');
        $data['sort_order'] = $request->sort_order ?? 0;

        if ($request->hasFile('hero_image')) {
            $data['hero_image'] = $request->file('hero_image')->store('pages', 'public');
        }

        DynamicPage::create($data);

        return redirect()->route('admin.page-content.index', ['type' => $type, 'category' => $request->category])
            ->with('success', 'Konten halaman berhasil dibuat.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($type, DynamicPage $page)
    {
        if ($page->type !== $type) {
            abort(404);
        }

        $categories = $this->getCategories($type);

        return view('admin.page-content.edit', compact('page', 'type', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $type, DynamicPage $page)
    {
        if ($page->type !== $type) {
            abort(404);
        }

        $categories = $this->getCategories($type);
        $categoryKeys = array_keys($categories);

        $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:dynamic_pages,slug,' . $page->id,
            'content' => 'nullable|string',
            'category' => 'required|string|in:' . implode(',', $categoryKeys),
            'hero_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'hero_title' => 'nullable|string|max:255',
            'hero_subtitle' => 'nullable|string|max:500',
            'sort_order' => 'nullable|integer|min:0',
            'is_active' => 'boolean',
        ]);

        $data = $request->all();
        $data['is_active'] = $request->has('is_active');
        $data['sort_order'] = $request->sort_order ?? 0;

        if ($request->hasFile('hero_image')) {
            if ($page->hero_image) {
                Storage::disk('public')->delete($page->hero_image);
            }
            $data['hero_image'] = $request->file('hero_image')->store('pages', 'public');
        }

        $page->update($data);

        return redirect()->route('admin.page-content.index', ['type' => $type, 'category' => $request->category])
            ->with('success', 'Konten halaman berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($type, DynamicPage $page)
    {
        if ($page->type !== $type) {
            abort(404);
        }

        if ($page->hero_image) {
            Storage::disk('public')->delete($page->hero_image);
        }

        $page->delete();

        return redirect()->route('admin.page-content.index', ['type' => $type])
            ->with('success', 'Konten halaman berhasil dihapus.');
    }

    /**
     * Handle image upload from CKEditor
     */
    public function upload(Request $request, $type)
    {
        $request->validate([
            'upload' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        if ($request->hasFile('upload')) {
            $image = $request->file('upload');
            $filename = time() . '_' . $image->getClientOriginalName();
            $path = $image->storeAs('pages', $filename, 'public');

            // CKEditor 4 expects specific response format
            $url = Storage::url($path);
            
            return response()->json([
                'uploaded' => true,
                'url' => $url
            ]);
        }

        return response()->json([
            'uploaded' => false,
            'error' => ['message' => 'Upload failed']
        ], 400);
    }
}

