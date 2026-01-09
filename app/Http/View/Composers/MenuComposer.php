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

        // Set display title based on current locale for menus and their children
        $locale = app()->getLocale();
        $mapLocaleTitles = function ($items) use ($locale) {
            foreach ($items as $item) {
                $item->display_title = $item->{'title_' . $locale} ?: $item->title;
                if ($item->relationLoaded('children')) {
                    foreach ($item->children as $child) {
                        $child->display_title = $child->{'title_' . $locale} ?: $child->title;
                    }
                }
            }
            return $items;
        };

        $navbarMenus = $mapLocaleTitles($navbarMenus);
        $footerLayanan = $footerLayanan ? $mapLocaleTitles(collect([$footerLayanan]))->first() : null;
        $footerStandar = $footerStandar ? $mapLocaleTitles(collect([$footerStandar]))->first() : null;
        $footerMedia = $mapLocaleTitles($footerMedia);
        $footerTentang = $mapLocaleTitles($footerTentang);

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
