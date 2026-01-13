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
        // Create parent menu for Media & Informasi
        $footerMediaParent = MenuItem::create([
            'title' => 'Media & Informasi',
            'title_id' => 'Media & Informasi',
            'title_en' => 'Media & Information',
            'slug' => null,
            'url' => null,
            'location' => 'footer_media',
            'parent_id' => null,
            'sort_order' => 0,
            'is_active' => true,
        ]);

        // Get all existing footer_media items and set them as children
        $mediaItems = MenuItem::where('location', 'footer_media')
            ->where('parent_id', null)
            ->where('id', '!=', $footerMediaParent->id)
            ->get();

        foreach ($mediaItems as $idx => $item) {
            $item->update([
                'parent_id' => $footerMediaParent->id,
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
        $parent = MenuItem::where('title', 'Media & Informasi')
            ->where('location', 'footer_media')
            ->first();

        if ($parent) {
            // Restore children to have no parent
            MenuItem::where('parent_id', $parent->id)->update(['parent_id' => null]);
            // Delete the parent
            $parent->delete();
        }
    }
};
