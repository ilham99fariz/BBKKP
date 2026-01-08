<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MenuItem;

class MenuItemSeeder extends Seeder
{
    public function run(): void
    {
        // Clear existing data
        MenuItem::truncate();

        // NAVBAR ITEMS
        // Beranda
        MenuItem::create([
            'title' => 'Beranda',
            'slug' => null,
            'url' => null,
            'location' => 'navbar',
            'parent_id' => null,
            'sort_order' => 0,
            'is_active' => true,
        ]);

        // Layanan
        $layanan = MenuItem::create([
            'title' => 'Layanan',
            'location' => 'navbar',
            'parent_id' => null,
            'sort_order' => 1,
            'is_active' => true,
        ]);

        $layanan_items = [
            ['title' => 'Pengujian', 'slug' => 'pengujian', 'sort_order' => 0],
            ['title' => 'Kalibrasi', 'slug' => 'kalibrasi', 'sort_order' => 1],
            ['title' => 'Sertifikasi', 'slug' => 'sertifikasi', 'sort_order' => 2],
            ['title' => 'Bimbingan Teknis & Konsultasi', 'slug' => 'bimbingan-teknis-konsultasi', 'sort_order' => 3],
            ['title' => 'Inspeksi', 'slug' => 'inspeksi', 'sort_order' => 4],
            ['title' => 'Verifikasi & Validasi', 'slug' => 'verifikasi-validasi', 'sort_order' => 5],
            ['title' => 'Uji Profisiensi', 'slug' => 'uji-profisiensi', 'sort_order' => 6],
            ['title' => 'Pelatihan Teknis', 'slug' => 'pelatihan-teknis', 'sort_order' => 7],
            ['title' => 'Produsen Bahan Acuan', 'slug' => 'produsen-bahan-acuan', 'sort_order' => 8],
            ['title' => 'Edukasi', 'slug' => 'edukasi', 'sort_order' => 9],
        ];

        foreach ($layanan_items as $item) {
            MenuItem::create([
                'title' => $item['title'],
                'slug' => $item['slug'],
                'location' => 'navbar',
                'parent_id' => $layanan->id,
                'sort_order' => $item['sort_order'],
                'is_active' => true,
            ]);
        }

        // Standar Pelayanan
        $standar = MenuItem::create([
            'title' => 'Standar Pelayanan',
            'location' => 'navbar',
            'parent_id' => null,
            'sort_order' => 2,
            'is_active' => true,
        ]);

        $standar_items = [
            ['title' => 'Standar Pelayanan', 'slug' => 'standar-pelayanan', 'sort_order' => 0],
            ['title' => 'Maklumat Pelayanan', 'slug' => 'maklumat-pelayanan', 'sort_order' => 1],
            ['title' => 'Tarif Layanan', 'slug' => 'tarif-layanan', 'sort_order' => 2],
            ['title' => 'Tarif Percepatan', 'slug' => 'tarif-percepatan', 'sort_order' => 3],
            ['title' => 'Survey Layanan Pelanggan', 'slug' => 'survey-layanan-pelanggan', 'sort_order' => 4],
        ];

        foreach ($standar_items as $item) {
            MenuItem::create([
                'title' => $item['title'],
                'slug' => $item['slug'],
                'location' => 'navbar',
                'parent_id' => $standar->id,
                'sort_order' => $item['sort_order'],
                'is_active' => true,
            ]);
        }

        // Media & Informasi
        $media = MenuItem::create([
            'title' => 'Media & Informasi',
            'location' => 'navbar',
            'parent_id' => null,
            'sort_order' => 3,
            'is_active' => true,
        ]);

        $media_items = [
            ['title' => 'Keterbukaan Informasi Publik', 'slug' => 'keterbukaan-informasi-publik', 'sort_order' => 0],
            ['title' => 'Berita BBSPJIKKP', 'slug' => 'berita', 'sort_order' => 1],
            ['title' => 'Publikasi', 'slug' => 'publikasi', 'sort_order' => 2],
            ['title' => 'Pengumuman', 'slug' => 'pengumuman', 'sort_order' => 3],
        ];

        foreach ($media_items as $item) {
            MenuItem::create([
                'title' => $item['title'],
                'slug' => $item['slug'],
                'location' => 'navbar',
                'parent_id' => $media->id,
                'sort_order' => $item['sort_order'],
                'is_active' => true,
            ]);
        }

        // Tentang Kami
        $tentang = MenuItem::create([
            'title' => 'Tentang Kami',
            'location' => 'navbar',
            'parent_id' => null,
            'sort_order' => 4,
            'is_active' => true,
        ]);

        $tentang_items = [
            ['title' => 'Tonggak Sejarah', 'slug' => 'tonggak-sejarah', 'sort_order' => 0],
            ['title' => 'Profil Singkat', 'slug' => 'profil-singkat', 'sort_order' => 1],
            ['title' => 'Profil Pejabat', 'slug' => 'profil-pejabat', 'sort_order' => 2],
            ['title' => 'Struktur Organisasi', 'slug' => 'struktur-organisasi', 'sort_order' => 3],
            ['title' => 'Makna Logo', 'slug' => 'makna-logo', 'sort_order' => 4],
            ['title' => 'Kontak', 'slug' => 'kontak', 'sort_order' => 5],
            ['title' => 'Testimoni', 'slug' => 'testimoni', 'sort_order' => 6],
        ];

        foreach ($tentang_items as $item) {
            MenuItem::create([
                'title' => $item['title'],
                'slug' => $item['slug'],
                'location' => 'navbar',
                'parent_id' => $tentang->id,
                'sort_order' => $item['sort_order'],
                'is_active' => true,
            ]);
        }

        // Halal Center
        MenuItem::create([
            'title' => 'Halal Center',
            'url' => '/halal-center',
            'location' => 'navbar',
            'parent_id' => null,
            'sort_order' => 5,
            'is_active' => true,
        ]);

        // Daftar Layanan
        MenuItem::create([
            'title' => 'Daftar Layanan',
            'url' => 'https://jis.id/',
            'location' => 'navbar',
            'parent_id' => null,
            'sort_order' => 6,
            'is_active' => true,
            'open_new_tab' => true,
        ]);

        // FOOTER ITEMS - Layanan (parent + children)
        $footerLayananParent = MenuItem::create([
            'title' => 'Layanan',
            'slug' => null,
            'url' => null,
            'location' => 'footer_layanan',
            'parent_id' => null,
            'sort_order' => 0,
            'is_active' => true,
        ]);

        $footer_layanan_items = [
            ['title' => 'Pengujian', 'slug' => 'pengujian'],
            ['title' => 'Kalibrasi', 'slug' => 'kalibrasi'],
            ['title' => 'Sertifikasi', 'slug' => 'sertifikasi'],
            ['title' => 'Bimbingan Teknis & Konsultasi', 'slug' => 'bimbingan-teknis-konsultasi'],
            ['title' => 'Inspeksi', 'slug' => 'inspeksi'],
            ['title' => 'Verifikasi & Validasi', 'slug' => 'verifikasi-validasi'],
            ['title' => 'Uji Profisiensi', 'slug' => 'uji-profisiensi'],
            ['title' => 'Pelatihan Teknis', 'slug' => 'pelatihan-teknis'],
            ['title' => 'Produsen Bahan Acuan', 'slug' => 'produsen-bahan-acuan'],
            ['title' => 'Edukasi', 'slug' => 'edukasi'],
        ];

        foreach ($footer_layanan_items as $idx => $item) {
            MenuItem::create([
                'title' => $item['title'],
                'slug' => $item['slug'],
                'location' => 'footer_layanan',
                'parent_id' => $footerLayananParent->id,
                'sort_order' => $idx,
                'is_active' => true,
            ]);
        }

        // FOOTER ITEMS - Standar Pelayanan
        $footer_standar = MenuItem::create([
            'title' => 'Standar Pelayanan',
            'slug' => 'standar-pelayanan',
            'location' => 'footer_standar',
            'parent_id' => null,
            'sort_order' => 0,
            'is_active' => true,
        ]);

        $footer_standar_items = [
            ['title' => 'Maklumat Pelayanan', 'slug' => 'maklumat-pelayanan'],
            ['title' => 'Tarif Layanan', 'slug' => 'tarif-layanan'],
            ['title' => 'Tarif Percepatan', 'slug' => 'tarif-percepatan'],
            ['title' => 'Standar Pelayanan Minimum', 'slug' => 'spm'],
            ['title' => 'Survey Layanan Pelanggan', 'slug' => 'survey-layanan-pelanggan'],
        ];

        foreach ($footer_standar_items as $idx => $item) {
            MenuItem::create([
                'title' => $item['title'],
                'slug' => $item['slug'],
                'location' => 'footer_standar',
                'parent_id' => $footer_standar->id,
                'sort_order' => $idx + 1,
                'is_active' => true,
            ]);
        }

        // FOOTER ITEMS - Media & Informasi
        MenuItem::create([
            'title' => 'Keterbukaan Informasi Publik',
            'slug' => 'keterbukaan-informasi-publik',
            'location' => 'footer_media',
            'parent_id' => null,
            'sort_order' => 0,
            'is_active' => true,
        ]);

        MenuItem::create([
            'title' => 'Berita BBSPJIKKP',
            'slug' => 'berita',
            'location' => 'footer_media',
            'parent_id' => null,
            'sort_order' => 1,
            'is_active' => true,
        ]);

        MenuItem::create([
            'title' => 'Publikasi',
            'slug' => 'publikasi',
            'location' => 'footer_media',
            'parent_id' => null,
            'sort_order' => 2,
            'is_active' => true,
        ]);

        MenuItem::create([
            'title' => 'Pengumuman',
            'slug' => 'pengumuman',
            'location' => 'footer_media',
            'parent_id' => null,
            'sort_order' => 3,
            'is_active' => true,
        ]);

        // FOOTER ITEMS - Tentang Kami
        MenuItem::create([
            'title' => 'Tonggak Sejarah',
            'slug' => 'tonggak-sejarah',
            'location' => 'footer_tentang',
            'parent_id' => null,
            'sort_order' => 0,
            'is_active' => true,
        ]);

        MenuItem::create([
            'title' => 'Profil Singkat',
            'slug' => 'profil-singkat',
            'location' => 'footer_tentang',
            'parent_id' => null,
            'sort_order' => 1,
            'is_active' => true,
        ]);

        MenuItem::create([
            'title' => 'Profil Pejabat',
            'slug' => 'profil-pejabat',
            'location' => 'footer_tentang',
            'parent_id' => null,
            'sort_order' => 2,
            'is_active' => true,
        ]);

        MenuItem::create([
            'title' => 'Struktur Organisasi',
            'slug' => 'struktur-organisasi',
            'location' => 'footer_tentang',
            'parent_id' => null,
            'sort_order' => 3,
            'is_active' => true,
        ]);

        MenuItem::create([
            'title' => 'Makna Logo',
            'slug' => 'makna-logo',
            'location' => 'footer_tentang',
            'parent_id' => null,
            'sort_order' => 4,
            'is_active' => true,
        ]);

        MenuItem::create([
            'title' => 'Kontak',
            'slug' => 'kontak',
            'location' => 'footer_tentang',
            'parent_id' => null,
            'sort_order' => 5,
            'is_active' => true,
        ]);

        MenuItem::create([
            'title' => 'Testimoni',
            'slug' => 'testimoni',
            'location' => 'footer_tentang',
            'parent_id' => null,
            'sort_order' => 6,
            'is_active' => true,
        ]);
    }
}
