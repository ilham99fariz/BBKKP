<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ServiceRating;
use Illuminate\Http\Request;

class ServiceRatingController extends Controller
{
    public function index()
    {
        $ratings = ServiceRating::ordered()->paginate(10);
        return view('admin.service-ratings.index', compact('ratings'));
    }

    public function create()
    {
        return view('admin.service-ratings.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'title' => 'nullable|string|max:255',
            'title_id' => 'nullable|string|max:255',
            'title_en' => 'nullable|string|max:255',
            'tooltip_label' => 'nullable|string|max:255',
            'year1' => 'required|numeric|min:0',
            'year2' => 'required|numeric|min:0',
            'year3' => 'required|numeric|min:0',
            'year4' => 'required|numeric|min:0',
            'year5' => 'required|numeric|min:0',
            'label_year1' => 'required|string|max:10',
            'label_year2' => 'required|string|max:10',
            'label_year3' => 'required|string|max:10',
            'label_year4' => 'required|string|max:10',
            'label_year5' => 'required|string|max:10',
            'color1' => 'required|string|max:7',
            'color2' => 'required|string|max:7',
            'color3' => 'required|string|max:7',
            'color4' => 'required|string|max:7',
            'color5' => 'required|string|max:7',
            'max_scale' => 'required|integer|min:1',
            'sort_order' => 'integer|min:0',
            'is_active' => 'boolean',
        ]);

        $data = $request->all();
        $data['is_active'] = $request->boolean('is_active', true);

        ServiceRating::create($data);

        return redirect()->route('admin.service-ratings.index')
            ->with('success', 'Rating layanan berhasil ditambahkan.');
    }

    public function edit(ServiceRating $serviceRating)
    {
        return view('admin.service-ratings.edit', compact('serviceRating'));
    }

    public function update(Request $request, ServiceRating $serviceRating)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'title' => 'nullable|string|max:255',
            'title_id' => 'nullable|string|max:255',
            'title_en' => 'nullable|string|max:255',
            'tooltip_label' => 'nullable|string|max:255',
            'year1' => 'required|numeric|min:0',
            'year2' => 'required|numeric|min:0',
            'year3' => 'required|numeric|min:0',
            'year4' => 'required|numeric|min:0',
            'year5' => 'required|numeric|min:0',
            'label_year1' => 'required|string|max:10',
            'label_year2' => 'required|string|max:10',
            'label_year3' => 'required|string|max:10',
            'label_year4' => 'required|string|max:10',
            'label_year5' => 'required|string|max:10',
            'color1' => 'required|string|max:7',
            'color2' => 'required|string|max:7',
            'color3' => 'required|string|max:7',
            'color4' => 'required|string|max:7',
            'color5' => 'required|string|max:7',
            'max_scale' => 'required|integer|min:1',
            'sort_order' => 'integer|min:0',
            'is_active' => 'boolean',
        ]);

        $data = $request->all();
        $data['is_active'] = $request->boolean('is_active', false);

        $serviceRating->update($data);

        return redirect()->route('admin.service-ratings.index')
            ->with('success', 'Rating layanan berhasil diperbarui.');
    }

    public function destroy(ServiceRating $serviceRating)
    {
        $serviceRating->delete();

        return redirect()->route('admin.service-ratings.index')
            ->with('success', 'Rating layanan berhasil dihapus.');
    }
}
