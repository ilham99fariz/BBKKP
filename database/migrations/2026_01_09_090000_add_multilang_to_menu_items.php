<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('menu_items', function (Blueprint $table) {
            // Titles for languages
            $table->string('title_id')->nullable()->after('title');
            $table->string('title_en')->nullable()->after('title_id');

            // Slugs for languages
            $table->string('slug_id')->nullable()->after('slug');
            $table->string('slug_en')->nullable()->after('slug_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('menu_items', function (Blueprint $table) {
            $table->dropColumn(['title_id', 'title_en', 'slug_id', 'slug_en']);
        });
    }
};
