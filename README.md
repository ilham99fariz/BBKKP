# Website BALAI BESAR STANDARDISASI DAN PELAYANAN JASA INDUSTRI KULIT, PLASTIK, DAN KARET

Website resmi untuk BALAI BESAR STANDARDISASI DAN PELAYANAN JASA INDUSTRI KULIT, PLASTIK, DAN KARET yang dibangun menggunakan Laravel 10 dengan fitur admin panel untuk manajemen konten.

## Fitur Utama

### Frontend (User-facing)
- **Homepage**: Halaman utama dengan hero section, layanan, berita, testimoni, dan partner
- **Halaman Layanan**: Daftar layanan yang tersedia dengan detail lengkap
- **Halaman Berita**: Artikel berita dengan pagination dan detail artikel
- **Halaman Kontak**: Form kontak dengan validasi
- **Responsive Design**: Tampilan yang responsif untuk desktop, tablet, dan mobile
- **SEO Friendly**: Meta tags dan struktur URL yang SEO-friendly

### Backend (Admin Panel)
- **Dashboard**: Overview statistik dan data terbaru
- **Manajemen Layanan**: CRUD untuk layanan dengan upload icon
- **Manajemen Berita**: CRUD untuk berita dengan upload gambar dan publish/unpublish
- **Manajemen Testimoni**: CRUD untuk testimoni dengan approval system
- **Manajemen Partner**: CRUD untuk partner dengan upload logo
- **Pengaturan Homepage**: Konfigurasi konten dinamis untuk homepage
- **Autentikasi**: Sistem login yang aman untuk admin

## Teknologi yang Digunakan

- **Framework**: Laravel 12
- **Frontend**: Blade Templates, Tailwind CSS, Alpine.js
- **Database**: MySQL
- **Authentication**: Laravel Breeze
- **File Upload**: Laravel Storage
- **Icons**: Font Awesome 6

## Struktur Database

### Tabel `users`
- id, name, email, password, is_admin, created_at, updated_at

### Tabel `services`
- id, title, slug, description, icon, content, is_active, sort_order, created_at, updated_at

### Tabel `news`
- id, title, slug, excerpt, content, image, is_published, published_at, author, views, created_at, updated_at

### Tabel `testimonials`
- id, client_name, client_company, content, image, is_approved, rating, sort_order, created_at, updated_at

### Tabel `partners`
- id, name, logo, website_url, is_active, sort_order, created_at, updated_at

### Tabel `homepage_settings`
- id, key, value, created_at, updated_at

## Instalasi

### Persyaratan Sistem
- PHP >= 8.2
- Composer
- MySQL >= 5.7
- Node.js & NPM (untuk assets)
- Web Server (Apache/Nginx)

### Langkah Instalasi

1. **Clone atau ekstrak proyek ini**
   ```bash
   cd "D:\aduh pusing"
   ```

2. **Install dependencies PHP**
   ```bash
   composer install
   ```

3. **Install dependencies JavaScript**
   ```bash
   npm install
   ```

4. **Konfigurasi Environment**
   ```bash
   copy env.example .env
   ```
   
   Edit file `.env` dan sesuaikan konfigurasi database:
   ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=balai_besar_db
   DB_USERNAME=root
   DB_PASSWORD=
   ```

5. **Generate Application Key**
   ```bash
   php artisan key:generate
   ```

6. **Buat Database**
   Buat database baru di MySQL dengan nama `balai_besar_db`

7. **Jalankan Migration**
   ```bash
   php artisan migrate
   ```

8. **Jalankan Seeder (Data Awal)**
   ```bash
   php artisan db:seed
   ```

9. **Buat Storage Link**
   ```bash
   php artisan storage:link
   ```

10. **Build Assets**
    ```bash
    npm run build
    ```
    
    Atau untuk development:
    ```bash
    npm run dev
    ```

11. **Jalankan Server**
    ```bash
    php artisan serve
    ```
    
    Website akan berjalan di: http://localhost:8000

## Akun Admin Default

Setelah menjalankan seeder, Anda perlu membuat akun admin pertama dengan mengakses:
```
http://localhost:8000/register
```

Atau buat manual melalui tinker:
```bash
php artisan tinker
```
```php
$user = new App\Models\User();
$user->name = 'Admin';
$user->email = 'admin@balaiindustri.go.id';
$user->password = bcrypt('password');
$user->is_admin = true;
$user->save();
```

## Penggunaan

### Akses Website
- **Homepage**: http://localhost:8000
- **Layanan**: http://localhost:8000/layanan
- **Berita**: http://localhost:8000/berita
- **Kontak**: http://localhost:8000/kontak

### Akses Admin Panel
- **Login**: http://localhost:8000/login
- **Dashboard**: http://localhost:8000/admin
- **Register Admin**: http://localhost:8000/register

### Manajemen Konten

1. **Menambah Layanan**
   - Login ke admin panel
   - Navigasi ke menu "Layanan"
   - Klik "Tambah Layanan"
   - Isi form dan upload icon (opsional)
   - Klik "Simpan Layanan"

2. **Menambah Berita**
   - Login ke admin panel
   - Navigasi ke menu "Berita"
   - Klik "Tambah Berita"
   - Isi form dan upload gambar (opsional)
   - Centang "Aktifkan" untuk publish langsung
   - Klik "Simpan Berita"

3. **Mengubah Pengaturan Homepage**
   - Login ke admin panel
   - Navigasi ke menu "Pengaturan"
   - Edit konten yang diinginkan
   - Klik "Update Pengaturan"

## File Upload

Semua file yang diupload akan disimpan di `storage/app/public/` dengan struktur:
- `storage/app/public/services/` - Icon layanan
- `storage/app/public/news/` - Gambar berita
- `storage/app/public/testimonials/` - Foto klien testimoni
- `storage/app/public/partners/` - Logo partner

File dapat diakses melalui URL: `http://localhost:8000/storage/`

## Troubleshooting

### Storage Link Error
Jika gambar tidak muncul, pastikan storage link sudah dibuat:
```bash
php artisan storage:link
```

### Permission Error
Pastikan folder `storage` dan `bootstrap/cache` memiliki permission write:
```bash
chmod -R 775 storage bootstrap/cache
```

### Database Connection Error
Pastikan:
- MySQL service sudah berjalan
- Konfigurasi database di `.env` sudah benar
- Database sudah dibuat

### Asset Not Found
Jika CSS/JS tidak muncul, jalankan:
```bash
npm run build
```

## Struktur Direktori

```
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   ├── Admin/          # Admin controllers
│   │   │   └── Auth/           # Authentication controllers
│   │   └── Middleware/         # Custom middleware
│   ├── Mail/                   # Mail classes
│   └── Models/                 # Eloquent models
├── config/                     # Configuration files
├── database/
│   ├── migrations/             # Database migrations
│   └── seeders/                # Database seeders
├── resources/
│   └── views/
│       ├── admin/              # Admin panel views
│       ├── auth/               # Authentication views
│       ├── emails/             # Email templates
│       ├── layouts/            # Layout templates
│       ├── pages/              # Public pages
│       └── partials/           # Reusable components
├── routes/
│   ├── web.php                 # Web routes
│   └── auth.php                # Auth routes
└── storage/
    └── app/
        └── public/             # Public file uploads
```

## Kontribusi

Untuk mengembangkan website ini lebih lanjut, Anda dapat:
1. Menambahkan fitur baru di controller
2. Mengubah tampilan di folder `resources/views`
3. Menambahkan tabel baru dengan migration
4. Memperluas fungsi admin panel

## Lisensi

Proyek ini dibuat untuk BALAI BESAR STANDARDISASI DAN PELAYANAN JASA INDUSTRI KULIT, PLASTIK, DAN KARET.

## Support

Untuk bantuan atau pertanyaan, silakan hubungi tim pengembang.
