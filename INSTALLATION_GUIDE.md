# PANDUAN INSTALASI LENGKAP
# Website BALAI BESAR STANDARDISASI DAN PELAYANAN JASA INDUSTRI KULIT, PLASTIK, DAN KARET

## Langkah 1: Persiapan

### Install Software yang Diperlukan

1. **Install XAMPP/WAMP/Laragon** (untuk Windows)
   - Download dari: https://www.apachefriends.org/
   - Install dan pastikan Apache dan MySQL berjalan

2. **Install Composer**
   - Download dari: https://getcomposer.org/download/
   - Ikuti wizard instalasi
   - Verifikasi dengan: `composer --version`

3. **Install Node.js**
   - Download dari: https://nodejs.org/
   - Install versi LTS (Long Term Support)
   - Verifikasi dengan: `node --version` dan `npm --version`

## Langkah 2: Setup Database

1. Buka phpMyAdmin (http://localhost/phpmyadmin)
2. Buat database baru dengan nama: `balai_besar_db`
3. Collation: `utf8mb4_unicode_ci`

## Langkah 3: Konfigurasi Proyek

1. **Copy Environment File**
   ```bash
   copy env.example .env
   ```

2. **Edit File .env**
   Buka file `.env` dengan text editor dan sesuaikan:
   ```
   APP_NAME="BALAI BESAR STANDARDISASI"
   APP_ENV=local
   APP_DEBUG=true
   APP_URL=http://localhost:8000

   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=balai_besar_db
   DB_USERNAME=root
   DB_PASSWORD=
   ```

## Langkah 4: Install Dependencies

1. **Install PHP Dependencies**
   ```bash
   composer install
   ```
   
   Tunggu hingga selesai (mungkin butuh beberapa menit)

2. **Install JavaScript Dependencies**
   ```bash
   npm install
   ```

## Langkah 5: Setup Aplikasi

1. **Generate Application Key**
   ```bash
   php artisan key:generate
   ```

2. **Jalankan Migration Database**
   ```bash
   php artisan migrate
   ```
   
   Ketik `yes` jika ditanya

3. **Jalankan Seeder (Data Awal)**
   ```bash
   php artisan db:seed
   ```

4. **Buat Symbolic Link untuk Storage**
   ```bash
   php artisan storage:link
   ```

## Langkah 6: Build Assets

1. **Build untuk Production**
   ```bash
   npm run build
   ```

   ATAU untuk Development:
   ```bash
   npm run dev
   ```

## Langkah 7: Jalankan Aplikasi

1. **Start Laravel Server**
   ```bash
   php artisan serve
   ```

2. **Buka Browser**
   - Website: http://localhost:8000
   - Admin Login: http://localhost:8000/login

## Langkah 8: Buat Akun Admin

Ada 2 cara untuk membuat akun admin:

### Cara 1: Melalui Browser
1. Buka: http://localhost:8000/register
2. Isi form pendaftaran
3. Login dengan akun yang baru dibuat

### Cara 2: Melalui Tinker (CLI)
```bash
php artisan tinker
```

Kemudian jalankan:
```php
$user = new App\Models\User();
$user->name = 'Admin';
$user->email = 'admin@balaiindustri.go.id';
$user->password = bcrypt('admin123');
$user->is_admin = true;
$user->save();
exit
```

## Troubleshooting

### Error: "No application encryption key has been specified"
**Solusi:**
```bash
php artisan key:generate
```

### Error: "Class 'PDO' not found"
**Solusi:**
1. Buka file `php.ini`
2. Hilangkan tanda `;` pada baris:
   ```
   ;extension=pdo_mysql
   ```
   Menjadi:
   ```
   extension=pdo_mysql
   ```
3. Restart Apache

### Error: Storage link tidak berfungsi
**Solusi:**
```bash
php artisan storage:link
```

Jika masih error, hapus folder `public/storage` dan jalankan lagi perintah di atas.

### Gambar Tidak Muncul
**Solusi:**
1. Pastikan storage link sudah dibuat
2. Pastikan folder `storage/app/public` memiliki permission yang benar
3. Cek apakah file gambar ada di `storage/app/public/`

### Error saat Composer Install
**Solusi:**
```bash
composer update
composer install --no-scripts
php artisan key:generate
composer install
```

### Error saat NPM Install
**Solusi:**
```bash
npm cache clean --force
npm install
```

## Konfigurasi Server Production

### Apache (.htaccess sudah ada di public/)
Pastikan mod_rewrite aktif:
```apache
a2enmod rewrite
```

### Nginx
Contoh konfigurasi:
```nginx
server {
    listen 80;
    server_name balaiindustri.com;
    root /path/to/project/public;

    add_header X-Frame-Options "SAMEORIGIN";
    add_header X-Content-Type-Options "nosniff";

    index index.php;

    charset utf-8;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location = /favicon.ico { access_log off; log_not_found off; }
    location = /robots.txt  { access_log off; log_not_found off; }

    error_page 404 /index.php;

    location ~ \.php$ {
        fastcgi_pass unix:/var/run/php/php8.1-fpm.sock;
        fastcgi_param SCRIPT_FILENAME $realpath_root$fastcgi_script_name;
        include fastcgi_params;
    }

    location ~ /\.(?!well-known).* {
        deny all;
    }
}
```

## Backup Database

Untuk backup database:
```bash
php artisan db:seed --class=DatabaseSeeder > backup.sql
```

Atau melalui phpMyAdmin:
1. Pilih database `balai_besar_db`
2. Klik tab "Export"
3. Pilih "Quick" export method
4. Klik "Go"

## Update Aplikasi

Jika ada perubahan kode:
```bash
git pull origin main
composer install
npm install
npm run build
php artisan migrate
php artisan cache:clear
php artisan config:clear
php artisan view:clear
```

## Security Checklist untuk Production

- [ ] Set `APP_DEBUG=false` di `.env`
- [ ] Set `APP_ENV=production` di `.env`
- [ ] Generate key yang kuat: `php artisan key:generate`
- [ ] Aktifkan HTTPS
- [ ] Set permission yang benar untuk folder `storage` dan `bootstrap/cache`
- [ ] Hapus file `.env.example` dari server
- [ ] Pastikan folder `.git` tidak accessible dari web
- [ ] Setup regular backup database
- [ ] Setup firewall dan security rules

## Kontak Support

Jika mengalami masalah yang tidak dapat diselesaikan, silakan hubungi tim pengembang dengan menyertakan:
1. Error message lengkap
2. Screenshot jika memungkinkan
3. Langkah yang sudah dilakukan
4. Versi PHP, Composer, dan Node.js yang digunakan
