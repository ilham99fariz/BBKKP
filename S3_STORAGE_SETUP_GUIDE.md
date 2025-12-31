# PANDUAN SETUP S3-Compatible STORAGE (MinIO)

## 🎯 Overview
Anda telah diberikan akses ke S3-compatible storage (MinIO/Object Storage) yang hosted di `storage.bbkkp.kemenperin.go.id`. Panduan ini akan membantu Anda mengkonfigurasi Laravel untuk menggunakan storage eksternal tersebut.

---

## 📋 Step-by-Step Setup

### Step 1: Install AWS SDK untuk PHP

Package AWS SDK diperlukan agar Laravel bisa berkomunikasi dengan S3-compatible storage.

```bash
composer require league/flysystem-aws-s3-v3 "^3.0" --with-all-dependencies
```

**Catatan:** Package ini sudah include AWS SDK yang diperlukan.

### Step 2: Update File `.env`

Buka file `.env` di root project Anda dan tambahkan/update konfigurasi berikut:

```env
# Storage Configuration (S3-Compatible)
AWS_ENDPOINT=https://storage.bbkkp.kemenperin.go.id
AWS_ACCESS_KEY_ID=xxxxxxxxxxx
AWS_SECRET_ACCESS_KEY=xxxxxxxxxxxxx
AWS_DEFAULT_REGION=s3
AWS_BUCKET=prod-web
AWS_USE_PATH_STYLE_ENDPOINT=false

# Set default filesystem disk to S3
FILESYSTEM_DISK=s3
```

**⚠️ PENTING:**
- Ganti `xxxxxxxxxxx` dengan credentials yang sebenarnya yang diberikan kepada Anda
- Jangan commit file `.env` ke repository (sudah ada di `.gitignore`)

### Step 3: Verifikasi Konfigurasi `config/filesystems.php`

File ini sudah dikonfigurasi dengan benar. Pastikan ada konfigurasi `s3` disk seperti ini:

```php
's3' => [
    'driver' => 's3',
    'key' => env('AWS_ACCESS_KEY_ID'),
    'secret' => env('AWS_SECRET_ACCESS_KEY'),
    'region' => env('AWS_DEFAULT_REGION'),
    'bucket' => env('AWS_BUCKET'),
    'url' => env('AWS_URL'),
    'endpoint' => env('AWS_ENDPOINT'),
    'use_path_style_endpoint' => env('AWS_USE_PATH_STYLE_ENDPOINT', false),
    'throw' => false,
],
```

✅ **Sudah tersedia** - Tidak perlu diubah!

### Step 4: Clear Configuration Cache

Setelah update `.env`, jalankan command ini untuk clear cache:

```bash
php artisan config:clear
php artisan cache:clear
```

### Step 5: Test Koneksi

Buat test sederhana untuk memastikan koneksi berhasil:

```bash
php artisan tinker
```

Kemudian di dalam Tinker, jalankan:

```php
// Test upload file
Storage::disk('s3')->put('test.txt', 'Hello World');

// Test read file
Storage::disk('s3')->get('test.txt');

// Test list files
Storage::disk('s3')->files();

// Test delete file
Storage::disk('s3')->delete('test.txt');
```

Jika tidak ada error, koneksi berhasil! ✅

---

## 🔄 Migrasi Upload yang Sudah Ada

### Opsi 1: Upload Ulang Files (Recommended)

Cara paling aman adalah upload ulang semua files melalui admin panel.

1. Backup files yang ada di `storage/app/public/`
2. Update `.env` dengan `FILESYSTEM_DISK=s3`
3. Upload ulang files melalui admin panel

### Opsi 2: Manual Upload ke S3

Jika ada banyak files, Anda bisa upload manual menggunakan tools:

**Menggunakan AWS CLI:**
```bash
aws s3 sync storage/app/public/ s3://prod-web/ --endpoint-url=https://storage.bbkkp.kemenperin.go.id
```

**Menggunakan Laravel Command:**
Buat custom artisan command untuk migrate files dari local ke S3.

---

## 💻 Cara Penggunaan di Code

### Upload File (Otomatis ke S3)

```php
// Di Controller
public function store(Request $request)
{
    $request->validate([
        'image' => 'required|image|max:2048',
    ]);

    // Upload file - otomatis ke S3 karena default disk = s3
    $path = $request->file('image')->store('images', 'public');
    
    // Atau explicit ke S3
    $path = $request->file('image')->store('images', 's3');
    
    // Save path ke database
    Model::create(['image' => $path]);
    
    return redirect()->back();
}
```

### Get URL File

```php
// Get public URL dari S3
$url = Storage::disk('s3')->url($path);

// Di Blade template
<img src="{{ Storage::disk('s3')->url($model->image) }}" alt="Image">
```

### Delete File

```php
// Delete file dari S3
Storage::disk('s3')->delete($path);
```

### Check File Exists

```php
if (Storage::disk('s3')->exists($path)) {
    // File exists
}
```

---

## 🔧 Update Controllers yang Ada

Anda perlu update beberapa controllers yang handle file uploads. Berikut contohnya:

### Example: NewsController

**SEBELUM (Local Storage):**
```php
if ($request->hasFile('image')) {
    $path = $request->file('image')->store('news', 'public');
    $data['image'] = $path;
}
```

**SESUDAH (S3 Storage):**
```php
if ($request->hasFile('image')) {
    // Otomatis ke S3 karena default disk = s3
    $path = $request->file('image')->store('news');
    $data['image'] = $path;
}

// Atau explicit
if ($request->hasFile('image')) {
    $path = $request->file('image')->store('news', 's3');
    $data['image'] = $path;
}
```

**Update untuk Get URL:**
```php
// Di Model atau Accessor
public function getImageUrlAttribute()
{
    if (!$this->image) {
        return asset('images/placeholder.png');
    }
    
    // Get URL from S3
    return Storage::disk('s3')->url($this->image);
}
```

**Di Blade:**
```blade
{{-- SEBELUM --}}
<img src="{{ Storage::url($news->image) }}" alt="">

{{-- SESUDAH --}}
<img src="{{ Storage::disk('s3')->url($news->image) }}" alt="">

{{-- ATAU jika sudah ada accessor --}}
<img src="{{ $news->image_url }}" alt="">
```

---

## 📂 Files yang Perlu Di-Update

Berdasarkan struktur project Anda, files yang perlu update:

### Controllers yang Handle Upload:

1. **`app/Http/Controllers/Admin/ServiceController.php`**
   - Upload icon untuk services
   
2. **`app/Http/Controllers/Admin/NewsController.php`**
   - Upload featured image
   - Upload images dari CKEditor
   
3. **`app/Http/Controllers/Admin/TestimonialController.php`**
   - Upload client photo
   
4. **`app/Http/Controllers/Admin/PartnerController.php`**
   - Upload logo partner
   
5. **`app/Http/Controllers/TestimonialController.php`** (Frontend)
   - Upload photo saat submit testimoni

### Models yang Perlu Accessor:

1. **`app/Models/Service.php`**
2. **`app/Models/News.php`**
3. **`app/Models/Testimonial.php`**
4. **`app/Models/Partner.php`**

Tambahkan accessor untuk URL:

```php
public function getImageUrlAttribute()
{
    if (!$this->image) {
        return asset('images/placeholder.png');
    }
    
    return Storage::disk('s3')->url($this->image);
}

public function getIconUrlAttribute()
{
    if (!$this->icon) {
        return asset('images/icon-default.png');
    }
    
    return Storage::disk('s3')->url($this->icon);
}

public function getLogoUrlAttribute()
{
    if (!$this->logo) {
        return asset('images/logo-placeholder.png');
    }
    
    return Storage::disk('s3')->url($this->logo);
}
```

### Views yang Perlu Update:

Cari semua views yang menggunakan `Storage::url()` atau `asset()` untuk images yang diupload:

```bash
# Search di semua view files
grep -r "Storage::url" resources/views/
grep -r "storage/" resources/views/
```

Ganti dengan:
```blade
{{-- SEBELUM --}}
{{ Storage::url($model->image) }}

{{-- SESUDAH --}}
{{ Storage::disk('s3')->url($model->image) }}
{{-- ATAU --}}
{{ $model->image_url }}
```

---

## 🔐 Security & Best Practices

### 1. Environment Variables

**JANGAN PERNAH:**
- Commit credentials ke repository
- Share `.env` file
- Hardcode credentials di code

**LAKUKAN:**
- Simpan credentials di `.env` file
- Gunakan `.env.example` sebagai template
- Backup `.env` file dengan aman

### 2. File Permissions

Pastikan bucket S3 memiliki permissions yang tepat:
- Public files: Set ACL ke `public-read`
- Private files: Set ACL ke `private`

### 3. File Validation

Selalu validate file uploads:
```php
$request->validate([
    'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    'document' => 'required|mimes:pdf,doc,docx|max:10240',
]);
```

### 4. Cleanup Old Files

Saat update/delete records, jangan lupa delete file lama:

```php
// Delete old file before upload new one
if ($model->image && Storage::disk('s3')->exists($model->image)) {
    Storage::disk('s3')->delete($model->image);
}
```

---

## 🚀 Deployment Checklist

Saat deploy ke production:

- [ ] Install AWS SDK package di production
- [ ] Update `.env` production dengan credentials yang benar
- [ ] Clear cache: `php artisan config:clear`
- [ ] Test upload functionality
- [ ] Test display images
- [ ] Monitor storage usage
- [ ] Setup backup policy untuk S3 bucket

---

## 🐛 Troubleshooting

### Error: "Class 'League\Flysystem\AwsS3V3\AwsS3V3Adapter' not found"

**Solusi:** Install AWS SDK package
```bash
composer require league/flysystem-aws-s3-v3 "^3.0" --with-all-dependencies
```

### Error: "Error executing PutObject"

**Kemungkinan Penyebab:**
1. Credentials salah
2. Bucket name salah
3. Endpoint URL salah
4. Network/firewall issue

**Solusi:**
- Double check credentials di `.env`
- Pastikan bucket `prod-web` sudah dibuat
- Test koneksi ke endpoint menggunakan curl

### Error: "SignatureDoesNotMatch"

**Solusi:**
- Pastikan `AWS_USE_PATH_STYLE_ENDPOINT` sesuai konfigurasi server
- Coba set ke `true` atau `false`

### Images tidak muncul di frontend

**Kemungkinan Penyebab:**
1. URL tidak benar
2. File tidak ada di S3
3. Permissions bucket salah

**Solusi:**
```php
// Debug URL
dd(Storage::disk('s3')->url($path));

// Check file exists
dd(Storage::disk('s3')->exists($path));

// List all files
dd(Storage::disk('s3')->files());
```

---

## 📞 Support

Jika ada masalah dengan S3 storage:

1. **Check Laravel Logs:** `storage/logs/laravel.log`
2. **Enable Debug Mode:** Set `APP_DEBUG=true` di `.env`
3. **Test dengan Tinker:** Isolate masalah dengan testing di tinker
4. **Contact Storage Admin:** Hubungi admin yang memberikan credentials

---

## 📚 Referensi

- [Laravel File Storage Documentation](https://laravel.com/docs/12.x/filesystem)
- [AWS S3 SDK Documentation](https://docs.aws.amazon.com/sdk-for-php/)
- [Flysystem Documentation](https://flysystem.thephpleague.com/)

---

## ✅ Quick Start Commands

```bash
# 1. Install package
composer require league/flysystem-aws-s3-v3 "^3.0" --with-all-dependencies

# 2. Update .env dengan credentials Anda

# 3. Clear cache
php artisan config:clear
php artisan cache:clear

# 4. Test koneksi
php artisan tinker
# Kemudian: Storage::disk('s3')->put('test.txt', 'Hello World');

# 5. Done! ✨
```

---

**Selamat! Storage S3 Anda sudah siap digunakan! 🎉**

