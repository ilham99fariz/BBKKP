<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    use HasFactory;

    protected $fillable = [
        'layanan',
        'layanan_lainnya',
        'nama',
        'jenis_kelamin',
        'telepon',
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
    ];

    // Accessor untuk rata-rata kepuasan
    public function getAvgKepuasanAttribute()
    {
        $total = 0;
        for ($i = 1; $i <= 9; $i++) {
            $total += $this->{'kepuasan_' . $i};
        }
        return round($total / 9, 2);
    }

    // Accessor untuk rata-rata persepsi korupsi
    public function getAvgKorupsiAttribute()
    {
        $total = 0;
        for ($i = 1; $i <= 10; $i++) {
            $total += $this->{'korupsi_' . $i};
        }
        return round($total / 10, 2);
    }

    // NPS Category
    public function getNpsCategoryAttribute()
    {
        if ($this->nps_score >= 9) {
            return 'Promoter';
        } elseif ($this->nps_score >= 7) {
            return 'Passive';
        } else {
            return 'Detractor';
        }
    }
}