<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('ipk_ratings', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->decimal('year1', 5, 2)->default(0);
            $table->decimal('year2', 5, 2)->default(0);
            $table->decimal('year3', 5, 2)->default(0);
            $table->decimal('year4', 5, 2)->default(0);
            $table->decimal('year5', 5, 2)->default(0);
            $table->string('label_year1')->default('2020');
            $table->string('label_year2')->default('2021');
            $table->string('label_year3')->default('2022');
            $table->string('label_year4')->default('2023');
            $table->string('label_year5')->default('2024');
            $table->string('color1')->default('#22C55E');
            $table->string('color2')->default('#3B82F6');
            $table->string('color3')->default('#F59E0B');
            $table->string('color4')->default('#EF4444');
            $table->string('color5')->default('#8B5CF6');
            $table->integer('max_scale')->default(4);
            $table->integer('sort_order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ipk_ratings');
    }
};
