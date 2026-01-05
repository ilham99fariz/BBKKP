<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('surveys', function (Blueprint $table) {
            $table->id();
            
            // Data Responden
            $table->json('layanan');
            $table->string('layanan_lainnya')->nullable();
            $table->string('nama');
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
            $table->string('telepon');
            $table->string('email');
            $table->string('pendidikan');
            $table->string('instansi');
            $table->string('pekerjaan');
            
            // Kepuasan Pelanggan (1-4 bintang)
            $table->integer('kepuasan_1');
            $table->integer('kepuasan_2');
            $table->integer('kepuasan_3');
            $table->integer('kepuasan_4');
            $table->integer('kepuasan_5');
            $table->integer('kepuasan_6');
            $table->integer('kepuasan_7');
            $table->integer('kepuasan_8');
            $table->integer('kepuasan_9');
            $table->text('saran');
            $table->text('jasa_dibutuhkan');
            
            // Persepsi Korupsi (1-4 bintang)
            $table->integer('korupsi_1');
            $table->integer('korupsi_2');
            $table->integer('korupsi_3');
            $table->integer('korupsi_4');
            $table->integer('korupsi_5');
            $table->integer('korupsi_6');
            $table->integer('korupsi_7');
            $table->integer('korupsi_8');
            $table->integer('korupsi_9');
            $table->integer('korupsi_10');
            
            // NPS
            $table->json('info_sumber');
            $table->string('info_sumber_lainnya')->nullable();
            $table->string('lama_penggunaan');
            $table->integer('nps_score'); // 0-10
            $table->text('nps_alasan');
            
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('surveys');
    }
};