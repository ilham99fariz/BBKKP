<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('curve_ratings', function (Blueprint $table) {
            $table->string('tooltip_label')->nullable()->after('line_color');
        });
    }

    public function down(): void
    {
        Schema::table('curve_ratings', function (Blueprint $table) {
            $table->dropColumn('tooltip_label');
        });
    }
};
