<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('curve_ratings', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->decimal('value1', 5, 2)->default(0);
            $table->decimal('value2', 5, 2)->default(0);
            $table->decimal('value3', 5, 2)->default(0);
            $table->decimal('value4', 5, 2)->default(0);
            $table->decimal('value5', 5, 2)->default(0);
            $table->string('label_year1')->default('2021');
            $table->string('label_year2')->default('2022');
            $table->string('label_year3')->default('2023');
            $table->string('label_year4')->default('2024');
            $table->string('label_year5')->default('2025');
            $table->string('line_color')->default('#10B981');
            $table->integer('sort_order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('curve_ratings');
    }
};
