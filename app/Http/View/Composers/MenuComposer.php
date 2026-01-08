<?php

namespace App\Http\View\Composers;

use App\Models\MenuItem;
use Illuminate\View\View;

class MenuComposer
{
    public function compose(View $view): void
    {
        // Navbar menus - get parent items only with their active children
        $navbarMenus = MenuItem::where('location', 'navbar')
            ->whereNull('parent_id')
            ->where('is_active', true)
            ->orderBy('sort_order')
            ->with(['children' => function ($query) {
                $query->where('is_active', true)
                    ->orderBy('sort_order');
            }])
            ->get();

        // Footer sections
        $footerLayanan = MenuItem::where('location', 'footer_layanan')
            ->whereNull('parent_id')
            ->where('is_active', true)
            ->orderBy('sort_order')
            ->with(['children' => function ($query) {
                $query->where('is_active', true)
                    ->orderBy('sort_order');
            }])
            ->first();

        $footerStandar = MenuItem::where('location', 'footer_standar')
            ->whereNull('parent_id')
            ->where('is_active', true)
            ->orderBy('sort_order')
            ->with(['children' => function ($query) {
                $query->where('is_active', true)
                    ->orderBy('sort_order');
            }])
            ->first();

        $footerMedia = MenuItem::where('location', 'footer_media')
            ->where('is_active', true)
            ->orderBy('sort_order')
            ->get();

        $footerTentang = MenuItem::where('location', 'footer_tentang')
            ->where('is_active', true)
            ->orderBy('sort_order')
            ->get();

        // Share to all views
        $view->with([
            'navbarMenus' => $navbarMenus,
            'footerLayanan' => $footerLayanan,
            'footerStandar' => $footerStandar,
            'footerMedia' => $footerMedia,
            'footerTentang' => $footerTentang,
        ]);
    }
}
