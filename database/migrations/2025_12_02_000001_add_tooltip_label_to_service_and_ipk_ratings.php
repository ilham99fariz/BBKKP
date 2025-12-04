<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('service_ratings', function (Blueprint $table) {
            $table->string('tooltip_label')->nullable()->after('name');
        });

        Schema::table('ipk_ratings', function (Blueprint $table) {
            $table->string('tooltip_label')->nullable()->after('name');
        });
    }

    public function down(): void
    {
        Schema::table('service_ratings', function (Blueprint $table) {
            $table->dropColumn('tooltip_label');
        });

        Schema::table('ipk_ratings', function (Blueprint $table) {
            $table->dropColumn('tooltip_label');
        });
    }
};
