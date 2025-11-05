<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\DynamicPage;

class DynamicPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pages = [
            [
                'title' => 'Tonggak Sejarah',
                'slug' => 'tonggak-sejarah',
                'content' => '<h1>Tonggak Sejarah</h1><p>Konten tonggak sejarah akan ditambahkan di sini.</p>',
            ],
            [
                'title' => 'Profil Singkat BBSPJIKKP',
                'slug' => 'profil-singkat',
                'content' => '<h1>Profil Singkat BBSPJIKKP</h1><p>Konten profil singkat akan ditambahkan di sini.</p>',
            ],
            [
                'title' => 'Profil Pejabat',
                'slug' => 'profil-pejabat',
                'content' => '<h1>Profil Pejabat</h1><p>Konten profil pejabat akan ditambahkan di sini.</p>',
            ],
            [
                'title' => 'Struktur Organisasi',
                'slug' => 'struktur-organisasi',
                'content' => '<h1>Struktur Organisasi</h1><p>Konten struktur organisasi akan ditambahkan di sini.</p>',
            ],
            [
                'title' => 'Makna Logo',
                'slug' => 'makna-logo',
                'content' => '<h1>Makna Logo</h1><p>Konten makna logo akan ditambahkan di sini.</p>',
            ],
        ];

        foreach ($pages as $page) {
            DynamicPage::create($page);
        }
    }
}
