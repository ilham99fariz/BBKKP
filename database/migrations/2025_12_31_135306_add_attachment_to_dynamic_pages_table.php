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
            $table->text('attachment_file')->nullable()->after('hero_image');
            $table->string('attachment_name')->nullable()->after('attachment_file');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('dynamic_pages', function (Blueprint $table) {
            $table->dropColumn(['attachment_file', 'attachment_name']);
        });
    }
};
