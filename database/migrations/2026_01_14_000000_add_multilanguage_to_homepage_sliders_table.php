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
        Schema::table('homepage_sliders', function (Blueprint $table) {
            $table->string('title_id')->nullable()->after('title');
            $table->string('title_en')->nullable()->after('title_id');
            $table->text('description_id')->nullable()->after('description');
            $table->text('description_en')->nullable()->after('description_id');
            $table->string('link_text_id')->nullable()->after('link_text');
            $table->string('link_text_en')->nullable()->after('link_text_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('homepage_sliders', function (Blueprint $table) {
            $table->dropColumn([
                'title_id',
                'title_en',
                'description_id',
                'description_en',
                'link_text_id',
                'link_text_en',
            ]);
        });
    }
};
