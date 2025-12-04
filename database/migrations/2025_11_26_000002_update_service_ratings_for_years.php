<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('service_ratings', function (Blueprint $table) {
            $table->dropColumn(['rating', 'color']);
        });

        Schema::table('service_ratings', function (Blueprint $table) {
            $table->integer('year1')->default(0)->after('name');
            $table->integer('year2')->default(0)->after('year1');
            $table->integer('year3')->default(0)->after('year2');
            $table->string('label_year1')->default('2022')->after('year3');
            $table->string('label_year2')->default('2023')->after('label_year1');
            $table->string('label_year3')->default('2024')->after('label_year2');
            $table->string('color1')->default('#F59E0B')->after('label_year3');
            $table->string('color2')->default('#10B981')->after('color1');
            $table->string('color3')->default('#8B5CF6')->after('color2');
            $table->integer('max_scale')->default(10)->after('color3');
        });
    }

    public function down(): void
    {
        Schema::table('service_ratings', function (Blueprint $table) {
            $table->dropColumn(['year1', 'year2', 'year3', 'label_year1', 'label_year2', 'label_year3', 'color1', 'color2', 'color3', 'max_scale']);
        });

        Schema::table('service_ratings', function (Blueprint $table) {
            $table->integer('rating')->default(0)->after('name');
            $table->string('color')->default('#10B981')->after('rating');
        });
    }
};
