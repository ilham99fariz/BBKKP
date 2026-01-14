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
        // Add multi-language columns to service_ratings table
        Schema::table('service_ratings', function (Blueprint $table) {
            if (!Schema::hasColumn('service_ratings', 'title')) {
                $table->string('title')->nullable()->after('name');
            }
            if (!Schema::hasColumn('service_ratings', 'title_id')) {
                $table->string('title_id')->nullable()->after('title');
            }
            if (!Schema::hasColumn('service_ratings', 'title_en')) {
                $table->string('title_en')->nullable()->after('title_id');
            }
        });

        // Add multi-language columns to ipk_ratings table
        Schema::table('ipk_ratings', function (Blueprint $table) {
            if (!Schema::hasColumn('ipk_ratings', 'title')) {
                $table->string('title')->nullable()->after('name');
            }
            if (!Schema::hasColumn('ipk_ratings', 'title_id')) {
                $table->string('title_id')->nullable()->after('title');
            }
            if (!Schema::hasColumn('ipk_ratings', 'title_en')) {
                $table->string('title_en')->nullable()->after('title_id');
            }
        });

        // Add multi-language columns to curve_ratings table
        Schema::table('curve_ratings', function (Blueprint $table) {
            if (!Schema::hasColumn('curve_ratings', 'title')) {
                $table->string('title')->nullable()->after('name');
            }
            if (!Schema::hasColumn('curve_ratings', 'title_id')) {
                $table->string('title_id')->nullable()->after('title');
            }
            if (!Schema::hasColumn('curve_ratings', 'title_en')) {
                $table->string('title_en')->nullable()->after('title_id');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('service_ratings', function (Blueprint $table) {
            if (Schema::hasColumn('service_ratings', 'title_en')) {
                $table->dropColumn('title_en');
            }
            if (Schema::hasColumn('service_ratings', 'title_id')) {
                $table->dropColumn('title_id');
            }
            if (Schema::hasColumn('service_ratings', 'title')) {
                $table->dropColumn('title');
            }
        });

        Schema::table('ipk_ratings', function (Blueprint $table) {
            if (Schema::hasColumn('ipk_ratings', 'title_en')) {
                $table->dropColumn('title_en');
            }
            if (Schema::hasColumn('ipk_ratings', 'title_id')) {
                $table->dropColumn('title_id');
            }
            if (Schema::hasColumn('ipk_ratings', 'title')) {
                $table->dropColumn('title');
            }
        });

        Schema::table('curve_ratings', function (Blueprint $table) {
            if (Schema::hasColumn('curve_ratings', 'title_en')) {
                $table->dropColumn('title_en');
            }
            if (Schema::hasColumn('curve_ratings', 'title_id')) {
                $table->dropColumn('title_id');
            }
            if (Schema::hasColumn('curve_ratings', 'title')) {
                $table->dropColumn('title');
            }
        });
    }
};
