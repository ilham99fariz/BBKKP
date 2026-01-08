<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TestimonialController extends Controller
{
    /**
     * Show testimonial form page.
     */
    public function form()
    {
        return view('pages.testimonials.form');
    }

    /**
     * Public listing of approved testimonials.
     */
    public function index()
    {
        $testimonials = Testimonial::approved()->ordered()->paginate(9);

        return view('pages.testimonials.index', compact('testimonials'));
    }

    /**
     * Submit testimonial from public form.
     */
    public function submit(Request $request)
    {
        $request->validate([
            'client_name' => 'required|string|max:255',
            'client_company' => 'nullable|string|max:255',
            'content' => 'required|string|max:1000',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'rating' => 'required|integer|min:1|max:5',
        ]);

        $data = $request->all();
        $data['is_approved'] = false; // Default tidak disetujui, perlu review admin
        $data['sort_order'] = 0;

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('testimonials', 'public');
        }

        Testimonial::create($data);

        return redirect()->route('testimonials.form')
            ->with('testimonial_success', 'Terima kasih! Testimoni Anda telah dikirim dan akan ditinjau terlebih dahulu sebelum ditampilkan.');
    }
}
