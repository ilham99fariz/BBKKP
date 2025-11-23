<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Service;
use App\Models\News;
use App\Models\Testimonial;
use App\Models\Partner;
use App\Models\HomepageSetting;
use App\Models\User;
use App\Models\Admin;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Seed admin users
        $this->call(AdminSeeder::class);

        // Seed Homepage Settings
        $this->seedHomepageSettings();

        // Seed Services
        $this->seedServices();

        // Seed News
        $this->seedNews();

        // Seed Testimonials
        $this->seedTestimonials();

        // Seed Partners
        $this->seedPartners();
    }

    private function seedAdminUser(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@balaiindustri.go.id'],
            [
                'name' => 'Admin',
                'password' => Hash::make('admin123'),
                'is_admin' => true,
                'email_verified_at' => now(),
            ]
        );
    }

    private function seedHomepageSettings()
    {
        $settings = [
            'hero_title' => 'BALAI BESAR STANDARDISASI DAN PELAYANAN JASA INDUSTRI KULIT, PLASTIK, DAN KARET',
            'hero_subtitle' => 'Menyediakan layanan standardisasi dan pelayanan jasa industri berkualitas tinggi untuk mendukung perkembangan industri nasional',
            'hero_description' => 'Kami berkomitmen untuk memberikan pelayanan terbaik dalam bidang standardisasi dan pelayanan jasa industri kulit, plastik, dan karet dengan standar internasional.',
            'about_title' => 'Tentang Kami',
            'about_description' => 'BALAI BESAR STANDARDISASI DAN PELAYANAN JASA INDUSTRI KULIT, PLASTIK, DAN KARET adalah lembaga yang berdedikasi untuk memberikan pelayanan terbaik dalam bidang standardisasi dan pelayanan jasa industri.',
            'services_title' => 'Layanan Kami',
            'services_subtitle' => 'Kami menyediakan berbagai layanan berkualitas tinggi untuk mendukung industri Anda',
            'news_title' => 'Berita & Update',
            'news_subtitle' => 'Ikuti perkembangan terbaru dari kami',
            'testimonials_title' => 'Testimoni Klien',
            'testimonials_subtitle' => 'Apa yang dikatakan klien tentang layanan kami',
            'contact_title' => 'Hubungi Kami',
            'contact_subtitle' => 'Siap membantu kebutuhan industri Anda',
            'address' => 'Jl. Raya Industri No. 123, Jakarta Selatan 12345',
            'phone' => '+62 21 1234 5678',
            'email' => 'info@balaiindustri.go.id',
            'facebook_url' => '#',
            'twitter_url' => '#',
            'instagram_url' => '#',
            'linkedin_url' => '#'
        ];

        foreach ($settings as $key => $value) {
            HomepageSetting::setValue($key, $value);
        }
    }

    private function seedServices()
    {
        $services = [
            [
                'title' => 'Audit & Sertifikasi',
                'description' => 'Layanan audit dan sertifikasi untuk memastikan produk industri memenuhi standar kualitas yang ditetapkan.',
                'content' => 'Kami menyediakan layanan audit dan sertifikasi komprehensif untuk berbagai jenis produk industri kulit, plastik, dan karet. Tim auditor kami yang berpengalaman akan memastikan produk Anda memenuhi semua standar kualitas yang berlaku.',
                'icon' => 'audit-icon.svg',
                'sort_order' => 1
            ],
            [
                'title' => 'Testing & Analisis',
                'description' => 'Pengujian dan analisis produk dengan teknologi terdepan untuk memastikan kualitas dan keamanan.',
                'content' => 'Laboratorium kami dilengkapi dengan peralatan testing dan analisis terdepan untuk menguji berbagai parameter produk industri. Kami memberikan hasil yang akurat dan dapat dipercaya.',
                'icon' => 'testing-icon.svg',
                'sort_order' => 2
            ],
            [
                'title' => 'Konsultasi Teknis',
                'description' => 'Konsultasi teknis untuk membantu perusahaan meningkatkan kualitas produk dan efisiensi produksi.',
                'content' => 'Tim konsultan teknis kami siap membantu perusahaan dalam mengoptimalkan proses produksi, meningkatkan kualitas produk, dan memenuhi standar industri yang berlaku.',
                'icon' => 'consultation-icon.svg',
                'sort_order' => 3
            ],
            [
                'title' => 'Pelatihan & Edukasi',
                'description' => 'Program pelatihan dan edukasi untuk meningkatkan kompetensi SDM industri.',
                'content' => 'Kami menyelenggarakan berbagai program pelatihan dan edukasi untuk meningkatkan kompetensi sumber daya manusia di bidang industri kulit, plastik, dan karet.',
                'icon' => 'training-icon.svg',
                'sort_order' => 4
            ]
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }

    private function seedNews()
    {
        $news = [
            [
                'title' => 'Pembukaan Laboratorium Testing Baru',
                'excerpt' => 'Kami dengan bangga mengumumkan pembukaan laboratorium testing baru yang dilengkapi dengan teknologi terdepan.',
                'content' => '<p>BALAI BESAR STANDARDISASI DAN PELAYANAN JASA INDUSTRI KULIT, PLASTIK, DAN KARET dengan bangga mengumumkan pembukaan laboratorium testing baru yang dilengkapi dengan teknologi terdepan.</p><p>Laboratorium baru ini akan meningkatkan kapasitas layanan testing dan analisis kami, memungkinkan kami untuk melayani lebih banyak klien dengan kualitas yang lebih baik.</p>',
                'is_published' => true,
                'published_at' => now()->subDays(5),
                'author' => 'Admin'
            ],
            [
                'title' => 'Sertifikasi ISO 9001:2015',
                'excerpt' => 'Kami telah berhasil memperoleh sertifikasi ISO 9001:2015 untuk sistem manajemen mutu kami.',
                'content' => '<p>Kami dengan bangga mengumumkan bahwa BALAI BESAR STANDARDISASI DAN PELAYANAN JASA INDUSTRI KULIT, PLASTIK, DAN KARET telah berhasil memperoleh sertifikasi ISO 9001:2015.</p><p>Sertifikasi ini membuktikan komitmen kami dalam memberikan layanan berkualitas tinggi dan berkelanjutan kepada klien kami.</p>',
                'is_published' => true,
                'published_at' => now()->subDays(10),
                'author' => 'Admin'
            ],
            [
                'title' => 'Workshop Standardisasi Industri',
                'excerpt' => 'Menyelenggarakan workshop tentang pentingnya standardisasi dalam industri modern.',
                'content' => '<p>Kami akan menyelenggarakan workshop bertema "Pentingnya Standardisasi dalam Industri Modern" yang akan diadakan pada tanggal 15 Februari 2024.</p><p>Workshop ini terbuka untuk umum dan akan menghadirkan pembicara-pembicara ahli di bidang standardisasi industri.</p>',
                'is_published' => true,
                'published_at' => now()->subDays(15),
                'author' => 'Admin'
            ]
        ];

        foreach ($news as $article) {
            News::create($article);
        }
    }

    private function seedTestimonials()
    {
        $testimonials = [
            [
                'client_name' => 'Budi Santoso',
                'client_company' => 'PT Industri Plastik Maju',
                'content' => 'Pelayanan audit dan sertifikasi yang sangat profesional. Tim yang responsif dan hasil yang memuaskan. Sangat direkomendasikan untuk perusahaan yang ingin meningkatkan kualitas produk.',
                'rating' => 5,
                'is_approved' => true,
                'sort_order' => 1
            ],
            [
                'client_name' => 'Sari Indah',
                'client_company' => 'CV Kulit Berkualitas',
                'content' => 'Laboratorium testing mereka sangat lengkap dan akurat. Hasil analisis yang diberikan sangat membantu dalam pengembangan produk kami. Terima kasih atas pelayanan yang excellent.',
                'rating' => 5,
                'is_approved' => true,
                'sort_order' => 2
            ],
            [
                'client_name' => 'Ahmad Wijaya',
                'client_company' => 'PT Karet Indonesia',
                'content' => 'Konsultasi teknis yang diberikan sangat membantu dalam mengoptimalkan proses produksi kami. Tim konsultan yang berpengalaman dan solusi yang tepat sasaran.',
                'rating' => 5,
                'is_approved' => true,
                'sort_order' => 3
            ]
        ];

        foreach ($testimonials as $testimonial) {
            Testimonial::create($testimonial);
        }
    }

    private function seedPartners()
    {
        $partners = [
            [
                'name' => 'Kementerian Perindustrian',
                'logo' => 'kemenperin-logo.png',
                'website_url' => 'https://kemenperin.go.id',
                'sort_order' => 1
            ],
            [
                'name' => 'Badan Standardisasi Nasional',
                'logo' => 'bsn-logo.png',
                'website_url' => 'https://bsn.go.id',
                'sort_order' => 2
            ],
            [
                'name' => 'Asosiasi Industri Plastik Indonesia',
                'logo' => 'inapin-logo.png',
                'website_url' => 'https://inapin.or.id',
                'sort_order' => 3
            ],
            [
                'name' => 'Asosiasi Industri Kulit Indonesia',
                'logo' => 'aiki-logo.png',
                'website_url' => 'https://aiki.or.id',
                'sort_order' => 4
            ]
        ];

        foreach ($partners as $partner) {
            Partner::create($partner);
        }
        $this->call(DynamicPageSeeder::class);
    }
}
