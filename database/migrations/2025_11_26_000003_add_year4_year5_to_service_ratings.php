<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('service_ratings', function (Blueprint $table) {
            $table->integer('year4')->default(0)->after('year3');
            $table->integer('year5')->default(0)->after('year4');
            $table->string('label_year4')->default('2025')->after('label_year3');
            $table->string('label_year5')->default('2026')->after('label_year4');
            $table->string('color4')->default('#06B6D4')->after('color3');
            $table->string('color5')->default('#F97316')->after('color4');
        });
    }

    public function down(): void
    {
        Schema::table('service_ratings', function (Blueprint $table) {
            $table->dropColumn(['year4', 'year5', 'label_year4', 'label_year5', 'color4', 'color5']);
        });
    }
};
