<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\IpkRating;
use Illuminate\Http\Request;

class IpkRatingController extends Controller
{
    public function index()
    {
        $ratings = IpkRating::ordered()->paginate(10);
        return view('admin.ipk-ratings.index', compact('ratings'));
    }

    public function create()
    {
        return view('admin.ipk-ratings.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
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

        IpkRating::create($data);

        return redirect()->route('admin.ipk-ratings.index')
            ->with('success', 'Skor IPK berhasil ditambahkan.');
    }

    public function edit(IpkRating $ipkRating)
    {
        return view('admin.ipk-ratings.edit', compact('ipkRating'));
    }

    public function update(Request $request, IpkRating $ipkRating)
    {
        $request->validate([
            'name' => 'required|string|max:255',
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

        $ipkRating->update($data);

        return redirect()->route('admin.ipk-ratings.index')
            ->with('success', 'Skor IPK berhasil diperbarui.');
    }

    public function destroy(IpkRating $ipkRating)
    {
        $ipkRating->delete();

        return redirect()->route('admin.ipk-ratings.index')
            ->with('success', 'Skor IPK berhasil dihapus.');
    }
}
