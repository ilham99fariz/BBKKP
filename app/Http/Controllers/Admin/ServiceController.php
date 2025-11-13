<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ServiceController extends Controller
{
    /**
     * Display a listing of services.
     */
    public function index()
    {
        $services = Service::ordered()->paginate(10);
        return view('admin.services.index', compact('services'));
    }

    /**
     * Show the form for creating a new service.
     */
    public function create()
    {
        return view('admin.services.create');
    }

    /**
     * Store a newly created service.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'content' => 'nullable|string',
            'icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'is_active' => 'boolean',
            'sort_order' => 'integer|min:0',
        ]);

        $data = $request->all();
        $data['slug'] = Str::slug($request->title);
        $data['is_active'] = $request->boolean('is_active', true);

        if ($request->hasFile('icon')) {
            $data['icon'] = $request->file('icon')->store('services', 'public');
        }

        Service::create($data);

        return redirect()->route('admin.services.index')
            ->with('success', 'Layanan berhasil ditambahkan.');
    }

    /**
     * Show the form for editing the specified service.
     */
    public function edit(Service $service)
    {
        return view('admin.services.edit', compact('service'));
    }

    /**
     * Update the specified service.
     */
    public function update(Request $request, Service $service)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'content' => 'nullable|string',
            'icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'is_active' => 'boolean',
            'sort_order' => 'integer|min:0',
        ]);

        $data = $request->all();
        $data['slug'] = Str::slug($request->title);
        $data['is_active'] = $request->boolean('is_active', false);

        if ($request->hasFile('icon')) {
            // Delete old icon
            if ($service->icon) {
                \Storage::disk('public')->delete($service->icon);
            }
            $data['icon'] = $request->file('icon')->store('services', 'public');
        }

        $service->update($data);

        return redirect()->route('admin.services.index')
            ->with('success', 'Layanan berhasil diperbarui.');
    }

    /**
     * Remove the specified service.
     */
    public function destroy(Service $service)
    {
        // Delete icon file
        if ($service->icon) {
            \Storage::disk('public')->delete($service->icon);
        }

        $service->delete();

        return redirect()->route('admin.services.index')
            ->with('success', 'Layanan berhasil dihapus.');
    }
}
