# Multi-Language System Implementation Guide

## Overview
Website ini mengimplementasikan sistem multi-bahasa (Indonesia & English) yang efektif untuk menangani halaman dinamis dan hardcoded.

## Struktur

### 1. Language Files (`lang/` folder)

#### `lang/id/common.php` & `lang/en/common.php`
File utama berisi:
- Navigation items
- Service names
- Common buttons & actions
- Footer content
- Breadcrumb labels
- Error messages

#### `lang/id/forms.php` & `lang/en/forms.php`
Berisi:
- Form labels
- Survey questions
- Validation messages
- Contact form strings
- Testimonial form strings

#### `lang/id/home.php` & `lang/en/home.php` (exists)
Homepage specific strings

### 2. Helper Functions (`app/Helpers/LanguageHelper.php`)

Fungsi-fungsi yang tersedia:

```php
// Get URL dengan locale tertentu
getLocaleUrl('en');  // URL dengan parameter lang=en

// Check locale
isIndonesian();      // true jika locale = 'id'
isEnglish();         // true jika locale = 'en'
getCurrentLocale();  // return current locale

// Get language info
getLanguageName('en');      // 'English'
getLocaleDisplayName();     // nama language yang user-friendly
getAlternateLocale();       // return locale alternatif (id->en, en->id)
getAlternateLocaleName();   // nama language alternatif

// URL helpers
multiLangUrl('/about', 'en');  // URL multi-language
getLanguageFlag('id');         // 🇮🇩
```

### 3. Middleware (`app/Http/Middleware/SetLocale.php`)

Middleware ini:
- Membaca parameter `lang` dari query string
- Menyimpan preference di session
- Validasi locale (hanya 'id' atau 'en')
- Set application locale

### 4. Language Switcher Component

File: `resources/views/components/language-switcher.blade.php`

Penggunaan di navbar:
```blade
@include('components.language-switcher')
```

## Penggunaan di Views

### Terjemahan String Sederhana
```blade
<!-- Menggunakan helper __() untuk terjemahan -->
<h1>{{ __('common.home') }}</h1>
<p>{{ __('common.services') }}</p>
<button>{{ __('common.submit') }}</button>
```

### Terjemahan dengan Parameter
```blade
<p>{{ __('forms.service_type') }}</p>
<input placeholder="{{ __('forms.contact_name') }}">
```

### Conditional Content Berdasarkan Locale
```blade
@if(isIndonesian())
    <p>Konten khusus Indonesia</p>
@else
    <p>English specific content</p>
@endif
```

### Dynamic Title & Description
```blade
@section('title', __('common.about_us') . ' - BBSPJIKP')
@section('description', __('common.about_us_subtitle'))
```

### Breadcrumb dengan Translations
```blade
<a href="{{ route('home') }}">{{ __('common.breadcrumb_home') }}</a>
<span>{{ __('common.breadcrumb_about') }}</span>
```

## Language File Structure Best Practices

### Organizing Keys
```php
return [
    // Group by feature
    'navigation' => [
        'home' => 'Home',
        'services' => 'Services',
    ],
    
    // Or by page
    'home' => [
        'hero_title' => '...',
        'services_section' => '...',
    ],
    
    // Or simple hierarchy
    'home.hero_title' => '...',
    'services.list' => '...',
];
```

### Current Organization
Kami menggunakan dua pendekatan:
1. **common.php** - Teks yang digunakan di multiple halaman (universal)
2. **forms.php** - Teks spesifik form
3. **home.php** - Teks spesifik homepage

Aksesnya: `__('common.key')`, `__('forms.key')`, `__('home.key')`

## Implementation Checklist

### Untuk Halaman Hardcoded:
- [ ] Identifikasi semua teks yang hardcoded
- [ ] Tambahkan string ke language file yang sesuai
- [ ] Replace hardcoded string dengan `{{ __('key') }}`
- [ ] Test kedua bahasa

### Contoh Implementasi (Before & After):

**BEFORE:**
```blade
<h1 class="text-4xl font-bold">Tentang Kami</h1>
<p>Mengenal lebih dekat Balai Besar Standardisasi...</p>
<a href="/layanan">Lihat Layanan</a>
```

**AFTER:**
```blade
<h1 class="text-4xl font-bold">{{ __('common.about_us') }}</h1>
<p>{{ __('common.about_us_subtitle') }}</p>
<a href="/{{ getCurrentLocale() }}/layanan">{{ __('common.view_all_services') }}</a>
```

## Language Switching URLs

### Query Parameter Method (Current)
```
/?lang=en
/?lang=id
/about?lang=en
/services?lang=id
```

Menggunakan: `request()->fullUrlWithQuery(['lang' => 'en'])`

## Session Management

Language preference disimpan di session:
- User preference tersimpan ketika navigasi dengan parameter `lang`
- Default language: `id` (dari config/app.php)
- Session expire sesuai konfigurasi Laravel

## Tips & Best Practices

### 1. Konsistensi Naming
```php
// GOOD - Deskriptif
'service_testing_description'
'breadcrumb_home'
'button_submit_form'

// BAD - Tidak jelas
'desc1'
'home'
'btn'
```

### 2. Gruppering Logis
```php
// GOOD - Grouped by context
'services' => [
    'testing' => '...',
    'calibration' => '...',
]

// Less ideal - Too flat
'service_testing' => '...',
'service_calibration' => '...',
```

### 3. Placeholder di Translation
```php
// GOOD - Untuk dynamic content
'welcome_user' => 'Welcome, :name!'
// Usage: __('messages.welcome_user', ['name' => $user->name])

// OK untuk static
'welcome' => 'Welcome'
```

### 4. Array dalam Translation
```php
// GOOD - Untuk list items
'services' => [
    'testing',
    'calibration',
    'certification'
]
// Usage: @foreach(__('common.service_list') as $service)
```

## Testing Multi-Language

### Manual Testing URLs
```
http://localhost:8000/?lang=id
http://localhost:8000/?lang=en
http://localhost:8000/about?lang=en
http://localhost:8000/services?lang=id
```

### Check Translation Coverage
```bash
# Search untuk hardcoded strings yang belum di-translate
grep -r "Tentang Kami\|About Us" resources/views/ | grep -v "__("
```

## Performance Considerations

1. **Language files di-cache** oleh Laravel dalam production
2. **Session storage** untuk user preference
3. **Minimal overhead** dengan helper functions
4. **No database queries** untuk language switching

## Troubleshooting

### String tidak ter-translate
- Check file path: `lang/[locale]/filename.php`
- Verify key name exact match
- Check typo dalam `__('key')`

### Session tidak tersimpan
- Ensure SetLocale middleware registered
- Check session configuration
- Verify session driver (file/database)

### Language switcher tidak berfungsi
- Check middleware di Kernel.php
- Verify query parameter name: `lang=`
- Check locale validation dalam middleware

## Integrasi dengan Fitur Existing

### Database Content (Dinamis)
```php
// Model sudah punya: title_id, title_en
$item->getLocalizedTitle(); // Menggunakan locale saat ini
```

### Menu Items
Menu items sudah menggunakan `display_title` yang locale-aware (dari MenuComposer)

### Dynamic Pages
Sudah support dual language di database

## Next Steps

1. **Identify remaining hardcoded strings** di seluruh views
2. **Add missing translations** ke language files
3. **Update views** menggunakan `__()` helper
4. **Test** semua halaman dengan kedua bahasa
5. **Monitor** untuk teks baru yang ditambahkan

## File References

- Middleware: `app/Http/Middleware/SetLocale.php`
- Helper: `app/Helpers/LanguageHelper.php`
- Service Provider: `app/Providers/AppServiceProvider.php`
- Component: `resources/views/components/language-switcher.blade.php`
- Language Files:
  - `lang/id/common.php`
  - `lang/en/common.php`
  - `lang/id/forms.php`
  - `lang/en/forms.php`
  - `lang/id/home.php`
  - `lang/en/home.php`
