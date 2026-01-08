# Menu Structure Reference

## Current Seeded Menu Structure

### NAVBAR MENUS (33 items total)

```
Beranda (sort: 0)
├─ No children

Layanan (sort: 1) [PARENT]
├─ Pengujian (sort: 0)
├─ Kalibrasi (sort: 1)
├─ Sertifikasi (sort: 2)
├─ Bimbingan Teknis & Konsultasi (sort: 3)
├─ Inspeksi (sort: 4)
├─ Verifikasi & Validasi (sort: 5)
├─ Uji Profisiensi (sort: 6)
├─ Pelatihan Teknis (sort: 7)
├─ Produsen Bahan Acuan (sort: 8)
└─ Edukasi (sort: 9)

Standar Pelayanan (sort: 2) [PARENT]
├─ Standar Pelayanan (sort: 0)
├─ Maklumat Pelayanan (sort: 1)
├─ Tarif Layanan (sort: 2)
├─ Tarif Percepatan (sort: 3)
└─ Survey Layanan Pelanggan (sort: 4)

Media & Informasi (sort: 3) [PARENT]
├─ Keterbukaan Informasi Publik (sort: 0)
├─ Berita BBSPJIKKP (sort: 1)
├─ Publikasi (sort: 2)
└─ Pengumuman (sort: 3)

Tentang Kami (sort: 4) [PARENT]
├─ Tonggak Sejarah (sort: 0)
├─ Profil Singkat (sort: 1)
├─ Profil Pejabat (sort: 2)
├─ Struktur Organisasi (sort: 3)
├─ Makna Logo (sort: 4)
├─ Kontak (sort: 5)
└─ Testimoni (sort: 6)

Halal Center (sort: 5)
├─ No children

Daftar Layanan (sort: 6) [EXTERNAL LINK - opens new tab]
├─ No children
```

---

### FOOTER_LAYANAN (10 items total)

```
Pengujian (sort: 0) [PARENT]
├─ Kalibrasi (sort: 1)
├─ Sertifikasi (sort: 2)
├─ Bimbingan Teknis & Konsultasi (sort: 3)
├─ Inspeksi (sort: 4)
├─ Verifikasi & Validasi (sort: 5)
├─ Uji Profisiensi (sort: 6)
├─ Pelatihan Teknis (sort: 7)
├─ Produsen Bahan Acuan (sort: 8)
└─ Edukasi (sort: 9)
```

**Display in Footer**: "Layanan" section shows first item as title, then list of children

---

### FOOTER_STANDAR (6 items total)

```
Standar Pelayanan (sort: 0) [PARENT]
├─ Maklumat Pelayanan (sort: 1)
├─ Tarif Layanan (sort: 2)
├─ Tarif Percepatan (sort: 3)
├─ Standar Pelayanan Minimum (sort: 4)
└─ Survey Layanan Pelanggan (sort: 5)
```

**Display in Footer**: "Standar Pelayanan" section shows first item as title, then list of children

---

### FOOTER_MEDIA (4 items total - NO PARENT STRUCTURE)

```
Keterbukaan Informasi Publik (sort: 0)
├─ No children

Berita BBSPJIKKP (sort: 1)
├─ No children

Publikasi (sort: 2)
├─ No children

Pengumuman (sort: 3)
├─ No children
```

**Display in Footer**: Direct list items in "Media & Informasi" section

---

### FOOTER_TENTANG (7 items total - NO PARENT STRUCTURE)

```
Tonggak Sejarah (sort: 0)
├─ No children

Profil Singkat (sort: 1)
├─ No children

Profil Pejabat (sort: 2)
├─ No children

Struktur Organisasi (sort: 3)
├─ No children

Makna Logo (sort: 4)
├─ No children

Kontak (sort: 5)
├─ No children

Testimoni (sort: 6)
├─ No children
```

**Display in Footer**: Direct list items in "Tentang Kami" section

---

## URL Resolution Examples

| Title | Slug | URL | Result |
|-------|------|-----|--------|
| Pengujian | pengujian | NULL | `/pengujian` |
| Daftar Layanan | NULL | https://jis.id/ | https://jis.id/ |
| Kontak | kontak | NULL | `/kontak` |
| External | NULL | https://example.com | https://example.com |
| Home | NULL | NULL | `#` |

---

## Database Query Examples

### Get navbar menus with all children
```php
$navbar = MenuItem::where('location', 'navbar')
    ->whereNull('parent_id')
    ->where('is_active', true)
    ->orderBy('sort_order')
    ->with(['children' => function($q) {
        $q->where('is_active', true)->orderBy('sort_order');
    }])
    ->get();

// Result: 6 items (Beranda, Layanan, Standar, Media, Tentang, Halal, Daftar)
```

### Get footer section with children
```php
$footer = MenuItem::where('location', 'footer_layanan')
    ->whereNull('parent_id')
    ->where('is_active', true)
    ->with(['children' => function($q) {
        $q->where('is_active', true)->orderBy('sort_order');
    }])
    ->first();

// Result: 1 item "Pengujian" with 9 children
```

### Get all items in footer media
```php
$media = MenuItem::where('location', 'footer_media')
    ->where('is_active', true)
    ->orderBy('sort_order')
    ->get();

// Result: 4 items (no parent structure)
```

---

## Blade Template Iteration Examples

### Navbar Desktop (Desktop Version)
```blade
@foreach($navbarMenus as $menu)
    @if($menu->children->isNotEmpty())
        <!-- Dropdown -->
        <div class="relative">
            <a href="{{ $menu->full_url }}">{{ $menu->title }}</a>
            <div>
                @foreach($menu->children as $child)
                    <a href="{{ $child->full_url }}">{{ $child->title }}</a>
                @endforeach
            </div>
        </div>
    @else
        <!-- Direct Link -->
        <a href="{{ $menu->full_url }}">{{ $menu->title }}</a>
    @endif
@endforeach
```

### Footer Layanan Section
```blade
@if($footerLayanan && $footerLayanan->children->isNotEmpty())
    <h3>{{ $footerLayanan->title }}</h3>
    <ul>
        @foreach($footerLayanan->children as $item)
            <li>
                <a href="{{ $item->full_url }}">
                    {{ $item->title }}
                </a>
            </li>
        @endforeach
    </ul>
@endif
```

### Footer Media Section (No Parent)
```blade
@foreach($footerMedia as $item)
    <li>
        <a href="{{ $item->full_url }}">
            {{ $item->title }}
        </a>
    </li>
@endforeach
```

---

## Count Reference

| Location | Type | Count |
|----------|------|-------|
| navbar | Total | 33 |
| navbar | Parents | 6 |
| navbar | Children | 27 |
| footer_layanan | Total | 10 |
| footer_layanan | Parents | 1 |
| footer_layanan | Children | 9 |
| footer_standar | Total | 6 |
| footer_standar | Parents | 1 |
| footer_standar | Children | 5 |
| footer_media | Total | 4 |
| footer_media | Parents | 0 |
| footer_media | Children | 0 |
| footer_tentang | Total | 7 |
| footer_tentang | Parents | 0 |
| footer_tentang | Children | 0 |
| **GRAND TOTAL** | **ITEMS** | **60** |

---

## Adding New Items

### Example: Add "Lihat Sertifikat Kami" to Navbar under Tentang Kami

**Admin Form:**
- Title: "Lihat Sertifikat Kami"
- Location: navbar
- Parent Menu: "Tentang Kami"
- Slug: "lihat-sertifikat"
- Sort Order: 7 (after Testimoni which is 6)
- Is Active: ✓
- Open in New Tab: ☐

**Result:**
```
Tentang Kami
├─ Tonggak Sejarah
├─ Profil Singkat
├─ Profil Pejabat
├─ Struktur Organisasi
├─ Makna Logo
├─ Kontak
├─ Testimoni
└─ Lihat Sertifikat Kami (NEW)
```

---

## Hiding Items

To hide "Daftar Layanan" button:

1. Go to `/admin/menu-items`
2. Find "Daftar Layanan" row
3. Click "Edit"
4. Uncheck "Is Active"
5. Save

**Result:** Item no longer appears in navbar but still in database (can be restored)

---

## Mobile Menu Display

Mobile drawer shows same structure but with toggle buttons:

```
Menu Navigasi
├─ Beranda
├─ [▼] Layanan
│  ├─ Pengujian
│  ├─ Kalibrasi
│  └─ ...
├─ [▼] Standar Pelayanan
│  └─ ...
├─ [▼] Media & Informasi
│  └─ ...
├─ [▼] Tentang Kami
│  └─ ...
├─ Halal Center
└─ [Daftar Layanan] (button)
```

When item with children is tapped, chevron rotates and children show/hide.

---

## Performance Notes

- Navbar query: 1 query (loads all 6 parents + 27 children)
- Footer queries: 4 queries (one per section)
- Total queries: 5
- Cache per request: Yes (via ViewComposer)
- Avg load time: 5-10ms
- Database size: ~60 rows (negligible impact)
