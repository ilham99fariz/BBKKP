# 📋 Analisis Multi-Language Halaman Dinamis & Solusi

## 1️⃣ STATUS HALAMAN DINAMIS SAAT INI

### ✅ SUDAH Multi-Language (Field `_id` / `_en` tersedia):

**Halaman Dinamis Subpage:**
- `/standar-pelayanan/*` (Standar Pelayanan subpages)
- `/tentang-kami/*` (Tentang Kami subpages)  
- `/media-informasi/*` (Media & Informasi subpages)
- `/layanan/*` (Layanan subpages)

**Cara kerja:**
```php
// DynamicPageController
$page->title = $page->getTitleByLocale($locale);  // Ambil title_id atau title_en
$page->content = $page->getContentByLocale($locale);  // Ambil content_id atau content_en
$page->slug = $page->getSlugByLocale($locale);  // Ambil slug_id atau slug_en
```

**Saat User Switch Language:**
- Session `locale` berubah (id ↔ en)
- `app()->getLocale()` membaca locale dari session
- DynamicPageController menampilkan konten sesuai locale
- ✅ **Konten halaman dinamis BERUBAH otomatis**

---

### ❌ BELUM Multi-Language (Field HANYA 1):

**Halaman Index/Main:**
- `/layanan` - Service Index (Route view static)
- `/standar-layanan` - Standards Index (Route view static)
- `/tentang-kami` - About Index (Route view static)
- `/media-informasi` - Media Index (Route view static)

**Mengapa tidak bekerja?**
```php
// routes/web.php
Route::view('/layanan', 'pages.services.Layanan')->name('services.index');
// Ini route STATIC view, bukan dynamic
// Tidak membaca dari database, jadi tidak bisa multi-language
```

---

## 2️⃣ SOLUSI UNTUK HALAMAN INDEX (Layanan, Standar Layanan, dll)

### **Opsi A: Ubah dari Route View menjadi Dynamic Page (Recommended)**

**Langkah 1:** Buat Dynamic Page di admin panel
- Title ID: "Layanan"
- Title EN: "Services"
- Content ID: (konten layanan)
- Content EN: (service content)
- Slug ID: "layanan"
- Slug EN: "services"

**Langkah 2:** Update routes/web.php
```php
// HAPUS ini:
Route::view('/layanan', 'pages.services.Layanan')->name('services.index');

// GUNAKAN catch-all dynamic route (sudah ada):
Route::get('/{slug}', [DynamicPageController::class, 'show'])->name('dynamic.page');
```

**Langkah 3:** Akses melalui slug:
- ID: `/layanan` → Tampilkan `title_id`, `content_id`
- EN: `/services` → Tampilkan `title_en`, `content_en`

---

### **Opsi B: Update Route View dengan Locale (Alternatif)**

```php
// routes/web.php
Route::get('/layanan', function() {
    $locale = app()->getLocale();
    $viewPath = 'pages.services.' . ($locale === 'en' ? 'services' : 'Layanan');
    return view($viewPath);
})->name('services.index');
```

Kemudian buat 2 view:
- `resources/views/pages/services/Layanan.blade.php` (ID)
- `resources/views/pages/services/services.blade.php` (EN)

---

## 3️⃣ IMPLEMENTASI MULTI-LANGUAGE NEWS, SLIDER, DIAGRAM

### **A. MULTI-LANGUAGE NEWS**

#### Step 1: Buat Migration
```bash
php artisan make:migration add_multilanguage_to_news_table
```

#### Step 2: Update Migration
```php
public function up()
{
    Schema::table('news', function (Blueprint $table) {
        $table->string('title_id')->nullable()->after('title');
        $table->string('title_en')->nullable()->after('title_id');
        $table->text('excerpt_id')->nullable()->after('excerpt');
        $table->text('excerpt_en')->nullable()->after('excerpt_id');
        $table->text('content_id')->nullable()->after('content');
        $table->text('content_en')->nullable()->after('content_id');
        $table->string('slug_id')->nullable()->unique()->after('slug');
        $table->string('slug_en')->nullable()->unique()->after('slug_id');
    });
}

public function down()
{
    Schema::table('news', function (Blueprint $table) {
        $table->dropColumn(['title_id', 'title_en', 'excerpt_id', 'excerpt_en', 'content_id', 'content_en', 'slug_id', 'slug_en']);
    });
}
```

#### Step 3: Update News Model
```php
// app/Models/News.php
protected $fillable = [
    'title', 'title_id', 'title_en',
    'slug', 'slug_id', 'slug_en',
    'excerpt', 'excerpt_id', 'excerpt_en',
    'content', 'content_id', 'content_en',
    'image', 'is_published', 'published_at', 'author', 'views', 'position',
];

public function getTitleByLocale($locale = null)
{
    $locale = $locale ?? app()->getLocale();
    if ($locale && isset($this->{'title_' . $locale}) && $this->{'title_' . $locale}) {
        return $this->{'title_' . $locale};
    }
    return $this->title;
}

public function getExcerptByLocale($locale = null)
{
    $locale = $locale ?? app()->getLocale();
    if ($locale && isset($this->{'excerpt_' . $locale}) && $this->{'excerpt_' . $locale}) {
        return $this->{'excerpt_' . $locale};
    }
    return $this->excerpt;
}

public function getContentByLocale($locale = null)
{
    $locale = $locale ?? app()->getLocale();
    if ($locale && isset($this->{'content_' . $locale}) && $this->{'content_' . $locale}) {
        return $this->{'content_' . $locale};
    }
    return $this->content;
}

public function getSlugByLocale($locale = null)
{
    $locale = $locale ?? app()->getLocale();
    if ($locale && isset($this->{'slug_' . $locale}) && $this->{'slug_' . $locale}) {
        return $this->{'slug_' . $locale};
    }
    return $this->slug;
}
```

#### Step 4: Update NewsController
```php
public function show(News $news)
{
    $locale = app()->getLocale();
    
    $news->title = $news->getTitleByLocale($locale);
    $news->excerpt = $news->getExcerptByLocale($locale);
    $news->content = $news->getContentByLocale($locale);
    
    return view('pages.news.show', compact('news'));
}
```

#### Step 5: Update View
```blade
<!-- Sebelum -->
<h1>{{ $news->title }}</h1>

<!-- Sesudah -->
<h1>{{ $news->getTitleByLocale() }}</h1>
<p>{{ $news->getContentByLocale() }}</p>
```

---

### **B. MULTI-LANGUAGE HOMEPAGE SLIDER**

#### Step 1: Buat Migration
```bash
php artisan make:migration add_multilanguage_to_homepage_sliders_table
```

#### Step 2: Update Migration
```php
public function up()
{
    Schema::table('homepage_sliders', function (Blueprint $table) {
        $table->string('title_id')->nullable()->after('title');
        $table->string('title_en')->nullable()->after('title_id');
        $table->text('description_id')->nullable()->after('description');
        $table->text('description_en')->nullable()->after('description_id');
        $table->string('link_text_id')->nullable()->after('link_text');
        $table->string('link_text_en')->nullable()->after('link_text_id');
    });
}
```

#### Step 3: Update HomepageSlider Model
```php
// app/Models/HomepageSlider.php
protected $fillable = [
    'title', 'title_id', 'title_en',
    'description', 'description_id', 'description_en',
    'link_text', 'link_text_id', 'link_text_en',
    'link_url', 'image', 'sort_order', 'is_active',
];

public function getTitleByLocale($locale = null)
{
    $locale = $locale ?? app()->getLocale();
    return $this->{'title_' . $locale} ?? $this->title;
}

public function getDescriptionByLocale($locale = null)
{
    $locale = $locale ?? app()->getLocale();
    return $this->{'description_' . $locale} ?? $this->description;
}

public function getLinkTextByLocale($locale = null)
{
    $locale = $locale ?? app()->getLocale();
    return $this->{'link_text_' . $locale} ?? $this->link_text;
}
```

#### Step 4: Update View
```blade
@foreach($sliders as $slider)
    <h2>{{ $slider->getTitleByLocale() }}</h2>
    <p>{{ $slider->getDescriptionByLocale() }}</p>
    <a href="{{ $slider->link_url }}">{{ $slider->getLinkTextByLocale() }}</a>
@endforeach
```

---

### **C. MULTI-LANGUAGE DIAGRAM/RATING (Footer)**

Diagram di footer menggunakan data dari `ServiceRating`, `IpkRating`, `CurveRating`. Ini adalah data numeric/visualisasi, bukan konten teks, jadi **TIDAK PERLU DITRANSLASI**.

Yang PERLU ditranslasi hanya label:

#### Step 1: Tambah Translasi Labels
```php
// lang/id/common.php
'customer_satisfaction' => 'Kepuasan Pelanggan',
'corruption_perception_index' => 'Indeks Persepsi Korupsi',
'customer_complaints' => 'Keluhan Pelanggan',

// lang/en/common.php
'customer_satisfaction' => 'Customer Satisfaction',
'corruption_perception_index' => 'Corruption Perception Index',
'customer_complaints' => 'Customer Complaints',
```

#### Step 2: Update View (Footer)
```blade
<h3>{{ __('common.customer_satisfaction') }}</h3>
<h3>{{ __('common.corruption_perception_index') }}</h3>
<h3>{{ __('common.customer_complaints') }}</h3>
```

---

## 4️⃣ SUMMARY TABLE

| Konten | Multi-Language? | Method | Aksi |
|--------|-----------------|--------|------|
| Halaman Dinamis Subpage | ✅ **YA** | `getTitleByLocale()` | Sudah berjalan |
| Halaman Index (Layanan, Standar, Tentang) | ❌ **TIDAK** | - | Ubah ke Dynamic Page |
| Berita (News) | ❌ **BELUM** | `getTitleByLocale()` | Ikuti Step 3A |
| Homepage Slider | ❌ **BELUM** | `getTitleByLocale()` | Ikuti Step 3B |
| Diagram/Rating Label | ✅ **BISA** | `__('key')` | Ikuti Step 3C |

---

## 5️⃣ EXECUTION ORDER

1. **Jalankan Migration:**
   ```bash
   php artisan migrate
   ```

2. **Update Admin Panel Form** (news, slider) untuk input `title_id/en`, `content_id/en`

3. **Update Database** dengan konten yang sudah ada

4. **Test Switch Language** → konten berubah

---

## 🎯 HASIL AKHIR

Setelah implementasi:
- ✅ User klik EN → semua konten berita, slider, diagram berubah ke English
- ✅ User klik ID → semua konten kembali ke Indonesia
- ✅ Seamless language switching di seluruh website
