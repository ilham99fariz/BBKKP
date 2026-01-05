<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomerSurvey extends Model
{
    protected $fillable = [
        'layanan',
        'nama',
        'jenis_kelamin',
        'email',
        'pendidikan',
        'instansi',
        'pekerjaan',
        'kepuasan_1',
        'kepuasan_2',
        'kepuasan_3',
        'kepuasan_4',
        'kepuasan_5',
        'kepuasan_6',
        'kepuasan_7',
        'kepuasan_8',
        'kepuasan_9',
        'saran',
        'jasa_dibutuhkan',
        'korupsi_1',
        'korupsi_2',
        'korupsi_3',
        'korupsi_4',
        'korupsi_5',
        'korupsi_6',
        'korupsi_7',
        'korupsi_8',
        'korupsi_9',
        'korupsi_10',
        'info_sumber',
        'info_sumber_lainnya',
        'lama_penggunaan',
        'nps_score',
        'nps_alasan',
    ];

    protected $casts = [
        'layanan' => 'array',
        'info_sumber' => 'array',
        'kepuasan_1' => 'integer',
        'kepuasan_2' => 'integer',
        'kepuasan_3' => 'integer',
        'kepuasan_4' => 'integer',
        'kepuasan_5' => 'integer',
        'kepuasan_6' => 'integer',
        'kepuasan_7' => 'integer',
        'kepuasan_8' => 'integer',
        'kepuasan_9' => 'integer',
        'korupsi_1' => 'integer',
        'korupsi_2' => 'integer',
        'korupsi_3' => 'integer',
        'korupsi_4' => 'integer',
        'korupsi_5' => 'integer',
        'korupsi_6' => 'integer',
        'korupsi_7' => 'integer',
        'korupsi_8' => 'integer',
        'korupsi_9' => 'integer',
        'korupsi_10' => 'integer',
        'nps_score' => 'integer',
    ];
}
