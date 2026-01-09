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
        Schema::table('dynamic_pages', function (Blueprint $table) {
            // Slugs per locale
            $table->string('slug_id')->nullable()->after('slug');
            $table->string('slug_en')->nullable()->after('slug_id');

            // Titles per locale
            $table->string('title_id')->nullable()->after('title');
            $table->string('title_en')->nullable()->after('title_id');

            // Content per locale
            $table->longText('content_id')->nullable()->after('content');
            $table->longText('content_en')->nullable()->after('content_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('dynamic_pages', function (Blueprint $table) {
            $table->dropColumn(['slug_id', 'slug_en', 'title_id', 'title_en', 'content_id', 'content_en']);
        });
    }
};
