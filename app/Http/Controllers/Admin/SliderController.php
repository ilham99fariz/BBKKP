<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HomepageSlider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    /**
     * Display a listing of sliders.
     */
    public function index()
    {
        $sliders = HomepageSlider::ordered()->get();
        return view('admin.sliders.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new slider.
     */
    public function create()
    {
        return view('admin.sliders.create');
    }

    /**
     * Store a newly created slider in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,jpg,png,gif,webp|max:5120', // max 5MB
            'title' => 'nullable|string|max:255',
            'description' => 'nullable|string|max:1000',
            'link_url' => 'nullable|url|max:500',
            'link_text' => 'nullable|string|max:100',
            'sort_order' => 'nullable|integer|min:0',
            'is_active' => 'boolean',
        ]);

        $data = $request->only(['title', 'description', 'link_url', 'link_text', 'sort_order']);
        $data['is_active'] = $request->has('is_active');

        // Upload image
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('sliders', 'public');
        }

        HomepageSlider::create($data);

        return redirect()->route('admin.sliders.index')
            ->with('success', 'Slider berhasil ditambahkan.');
    }

    /**
     * Show the form for editing the specified slider.
     */
    public function edit(HomepageSlider $slider)
    {
        return view('admin.sliders.edit', compact('slider'));
    }

    /**
     * Update the specified slider in storage.
     */
    public function update(Request $request, HomepageSlider $slider)
    {
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,jpg,png,gif,webp|max:5120',
            'title' => 'nullable|string|max:255',
            'description' => 'nullable|string|max:1000',
            'link_url' => 'nullable|url|max:500',
            'link_text' => 'nullable|string|max:100',
            'sort_order' => 'nullable|integer|min:0',
            'is_active' => 'boolean',
        ]);

        $data = $request->only(['title', 'description', 'link_url', 'link_text', 'sort_order']);
        $data['is_active'] = $request->has('is_active');

        // Upload new image if provided
        if ($request->hasFile('image')) {
            // Delete old image
            if ($slider->image && Storage::disk('public')->exists($slider->image)) {
                Storage::disk('public')->delete($slider->image);
            }
            $data['image'] = $request->file('image')->store('sliders', 'public');
        }

        $slider->update($data);

        return redirect()->route('admin.sliders.index')
            ->with('success', 'Slider berhasil diperbarui.');
    }

    /**
     * Remove the specified slider from storage.
     */
    public function destroy(HomepageSlider $slider)
    {
        // Delete image file
        if ($slider->image && Storage::disk('public')->exists($slider->image)) {
            Storage::disk('public')->delete($slider->image);
        }

        $slider->delete();

        return redirect()->route('admin.sliders.index')
            ->with('success', 'Slider berhasil dihapus.');
    }

    /**
     * Reorder sliders.
     */
    public function reorder(Request $request)
    {
        $request->validate([
            'order' => 'required|array',
            'order.*' => 'required|integer|exists:homepage_sliders,id',
        ]);

        foreach ($request->order as $index => $id) {
            HomepageSlider::where('id', $id)->update(['sort_order' => $index]);
        }

        return response()->json(['success' => true]);
    }

    /**
     * Toggle slider active status.
     */
    public function toggleActive(HomepageSlider $slider)
    {
        $slider->update(['is_active' => !$slider->is_active]);

        return redirect()->route('admin.sliders.index')
            ->with('success', 'Status slider berhasil diperbarui.');
    }
}
