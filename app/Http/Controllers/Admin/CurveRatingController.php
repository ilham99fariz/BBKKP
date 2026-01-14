<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CurveRating;
use Illuminate\Http\Request;

class CurveRatingController extends Controller
{
    public function index()
    {
        $curveRatings = CurveRating::ordered()->get();
        return view('admin.curve-ratings.index', compact('curveRatings'));
    }

    public function create()
    {
        return view('admin.curve-ratings.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'title' => 'nullable|string|max:255',
            'title_id' => 'nullable|string|max:255',
            'title_en' => 'nullable|string|max:255',
            'value1' => 'required|numeric|min:0|max:6',
            'value2' => 'required|numeric|min:0|max:6',
            'value3' => 'required|numeric|min:0|max:6',
            'value4' => 'required|numeric|min:0|max:6',
            'value5' => 'required|numeric|min:0|max:6',
            'label_year1' => 'required|string|max:50',
            'label_year2' => 'required|string|max:50',
            'label_year3' => 'required|string|max:50',
            'label_year4' => 'required|string|max:50',
            'label_year5' => 'required|string|max:50',
            'line_color' => 'required|string|max:20',
            'tooltip_label' => 'nullable|string|max:100',
            'sort_order' => 'nullable|integer',
            'is_active' => 'boolean',
        ]);

        $validated['is_active'] = $request->has('is_active');

        CurveRating::create($validated);

        return redirect()->route('admin.curve-ratings.index')
            ->with('success', 'Curve Rating berhasil ditambahkan.');
    }

    public function edit(CurveRating $curveRating)
    {
        return view('admin.curve-ratings.edit', compact('curveRating'));
    }

    public function update(Request $request, CurveRating $curveRating)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'title' => 'nullable|string|max:255',
            'title_id' => 'nullable|string|max:255',
            'title_en' => 'nullable|string|max:255',
            'value1' => 'required|numeric|min:0|max:6',
            'value2' => 'required|numeric|min:0|max:6',
            'value3' => 'required|numeric|min:0|max:6',
            'value4' => 'required|numeric|min:0|max:6',
            'value5' => 'required|numeric|min:0|max:6',
            'label_year1' => 'required|string|max:50',
            'label_year2' => 'required|string|max:50',
            'label_year3' => 'required|string|max:50',
            'label_year4' => 'required|string|max:50',
            'label_year5' => 'required|string|max:50',
            'line_color' => 'required|string|max:20',
            'tooltip_label' => 'nullable|string|max:100',
            'sort_order' => 'nullable|integer',
            'is_active' => 'boolean',
        ]);

        $validated['is_active'] = $request->has('is_active');

        $curveRating->update($validated);

        return redirect()->route('admin.curve-ratings.index')
            ->with('success', 'Curve Rating berhasil diperbarui.');
    }

    public function destroy(CurveRating $curveRating)
    {
        $curveRating->delete();

        return redirect()->route('admin.curve-ratings.index')
            ->with('success', 'Curve Rating berhasil dihapus.');
    }
}
