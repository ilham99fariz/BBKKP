<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use App\Models\SurveyResponse;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    /**
     * Display a listing of testimonials.
     */
    public function index()
    {
        // Prefer survey responses as source for testimonials if available
        $surveyCount = SurveyResponse::count();

        if ($surveyCount > 0) {
            // Paginate survey responses and map fields to what the testimonial view expects
            $paginator = SurveyResponse::latest()->paginate(10);

            $paginator->getCollection()->transform(function ($item) {
                return (object) [
                    'id' => null,
                    'survey_id' => $item->id,
                    'is_survey' => true,
                    'client_name' => $item->fullname ?? 'Anonymous',
                    'client_company' => $item->company ?? null,
                    'content' => $item->feedback ?? '',
                    'rating' => $item->rating ?? 0,
                    'is_approved' => true,
                    'sort_order' => 0,
                    'image' => null,
                    'show_on_home' => $item->show_on_home ?? false,
                ];
            });

            $testimonials = $paginator;
        } else {
            $testimonials = Testimonial::ordered()->paginate(10);
        }

        return view('admin.testimonials.index', compact('testimonials'));
    }

    /**
     * Show the form for creating a new testimonial.
     */
    public function create()
    {
        return view('admin.testimonials.create');
    }

    /**
     * Store a newly created testimonial.
     */
    public function store(Request $request)
    {
        $request->validate([
            'client_name' => 'required|string|max:255',
            'client_company' => 'nullable|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'is_approved' => 'boolean',
            'rating' => 'required|integer|min:1|max:5',
            'sort_order' => 'integer|min:0',
        ]);

        $data = $request->all();
        $data['is_approved'] = $request->has('is_approved');

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('testimonials', 'public');
        }

        Testimonial::create($data);

        return redirect()->route('admin.testimonials.index')
            ->with('success', 'Testimoni berhasil ditambahkan.');
    }

    /**
     * Show the form for editing the specified testimonial.
     */
    public function edit(Testimonial $testimonial)
    {
        return view('admin.testimonials.edit', compact('testimonial'));
    }

    /**
     * Update the specified testimonial.
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        $request->validate([
            'client_name' => 'required|string|max:255',
            'client_company' => 'nullable|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'is_approved' => 'boolean',
            'rating' => 'required|integer|min:1|max:5',
            'sort_order' => 'integer|min:0',
        ]);

        $data = $request->all();
        $data['is_approved'] = $request->has('is_approved');

        if ($request->hasFile('image')) {
            // Delete old image
            if ($testimonial->image) {
                \Storage::disk('public')->delete($testimonial->image);
            }
            $data['image'] = $request->file('image')->store('testimonials', 'public');
        }

        $testimonial->update($data);

        return redirect()->route('admin.testimonials.index')
            ->with('success', 'Testimoni berhasil diperbarui.');
    }

    /**
     * Remove the specified testimonial.
     */
    public function destroy(Testimonial $testimonial)
    {
        // Delete image file
        if ($testimonial->image) {
            \Storage::disk('public')->delete($testimonial->image);
        }

        $testimonial->delete();

        return redirect()->route('admin.testimonials.index')
            ->with('success', 'Testimoni berhasil dihapus.');
    }

    /**
     * Toggle approval status.
     */
    public function toggleApproval(Testimonial $testimonial)
    {
        $testimonial->update([
            'is_approved' => !$testimonial->is_approved,
        ]);

        return redirect()->back()
            ->with('success', 'Status persetujuan testimoni berhasil diubah.');
    }
}
