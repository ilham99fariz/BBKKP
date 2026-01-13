<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\MenuItem;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Create parent menu for Tentang Kami
        $footerTentangParent = MenuItem::create([
            'title' => 'Tentang Kami',
            'title_id' => 'Tentang Kami',
            'title_en' => 'About Us',
            'slug' => null,
            'url' => null,
            'location' => 'footer_tentang',
            'parent_id' => null,
            'sort_order' => 0,
            'is_active' => true,
        ]);

        // Get all existing footer_tentang items and set them as children
        $tentangItems = MenuItem::where('location', 'footer_tentang')
            ->where('parent_id', null)
            ->where('id', '!=', $footerTentangParent->id)
            ->get();

        foreach ($tentangItems as $idx => $item) {
            $item->update([
                'parent_id' => $footerTentangParent->id,
                'sort_order' => $idx,
            ]);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Find the parent menu
        $parent = MenuItem::where('title', 'Tentang Kami')
            ->where('location', 'footer_tentang')
            ->first();

        if ($parent) {
            // Restore children to have no parent
            MenuItem::where('parent_id', $parent->id)->update(['parent_id' => null]);
            // Delete the parent
            $parent->delete();
        }
    }
};
