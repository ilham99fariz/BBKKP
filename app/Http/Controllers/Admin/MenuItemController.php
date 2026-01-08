<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MenuItem;
use Illuminate\Http\Request;

class MenuItemController extends Controller
{
    public function index()
    {
        $menuItems = MenuItem::with('parent')->orderBy('location')->orderBy('sort_order')->paginate(50);
        return view('admin.menu-items.index', compact('menuItems'));
    }

    public function create()
    {
        $locations = [
            'navbar' => 'Navbar',
            'footer_layanan' => 'Footer - Layanan',
            'footer_standar' => 'Footer - Standar Pelayanan',
            'footer_media' => 'Footer - Media & Informasi',
            'footer_tentang' => 'Footer - Tentang Kami',
        ];
        
        $parentMenus = MenuItem::whereNull('parent_id')->orderBy('title')->get();
        
        return view('admin.menu-items.create', compact('locations', 'parentMenus'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255',
            'url' => 'nullable|string|max:255',
            'location' => 'required|string',
            'parent_id' => 'nullable|exists:menu_items,id',
            'sort_order' => 'integer|min:0',
            'is_active' => 'boolean',
            'open_new_tab' => 'boolean',
        ]);

        $data = $request->all();
        $data['is_active'] = $request->has('is_active');
        $data['open_new_tab'] = $request->has('open_new_tab');

        MenuItem::create($data);

        return redirect()->route('admin.menu-items.index')
            ->with('success', 'Menu item berhasil ditambahkan.');
    }

    public function edit(MenuItem $menuItem)
    {
        $locations = [
            'navbar' => 'Navbar',
            'footer_layanan' => 'Footer - Layanan',
            'footer_standar' => 'Footer - Standar Pelayanan',
            'footer_media' => 'Footer - Media & Informasi',
            'footer_tentang' => 'Footer - Tentang Kami',
        ];
        
        $parentMenus = MenuItem::whereNull('parent_id')
            ->where('id', '!=', $menuItem->id)
            ->orderBy('title')
            ->get();
        
        return view('admin.menu-items.edit', compact('menuItem', 'locations', 'parentMenus'));
    }

    public function update(Request $request, MenuItem $menuItem)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255',
            'url' => 'nullable|string|max:255',
            'location' => 'required|string',
            'parent_id' => 'nullable|exists:menu_items,id',
            'sort_order' => 'integer|min:0',
            'is_active' => 'boolean',
            'open_new_tab' => 'boolean',
        ]);

        $data = $request->all();
        $data['is_active'] = $request->has('is_active');
        $data['open_new_tab'] = $request->has('open_new_tab');

        $menuItem->update($data);

        return redirect()->route('admin.menu-items.index')
            ->with('success', 'Menu item berhasil diperbarui.');
    }

    public function destroy(MenuItem $menuItem)
    {
        $menuItem->delete();

        return redirect()->route('admin.menu-items.index')
            ->with('success', 'Menu item berhasil dihapus.');
    }
}
