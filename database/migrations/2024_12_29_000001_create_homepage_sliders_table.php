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
        Schema::create('homepage_sliders', function (Blueprint $table) {
            $table->id();
            $table->string('image'); // path gambar
            $table->string('title')->nullable(); // judul overlay (optional)
            $table->text('description')->nullable(); // deskripsi overlay (optional)
            $table->string('link_url')->nullable(); // URL tombol CTA (optional)
            $table->string('link_text')->nullable(); // text tombol CTA (optional)
            $table->integer('sort_order')->default(0); // urutan tampil
            $table->boolean('is_active')->default(true); // aktif/nonaktif
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('homepage_sliders');
    }
};
