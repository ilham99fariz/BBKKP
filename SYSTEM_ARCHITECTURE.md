# DOKUMENTASI LENGKAP SISTEM BALAI BESAR STANDARDISASI DAN PELAYANAN JASA INDUSTRI KULIT, PLASTIK, DAN KARET

## 📋 Daftar Isi
1. [Gambaran Umum](#gambaran-umum)
2. [Arsitektur Sistem](#arsitektur-sistem)
3. [Struktur Database](#struktur-database)
4. [Alur Operasional](#alur-operasional)
5. [Fitur Utama](#fitur-utama)
6. [Teknologi Stack](#teknologi-stack)
7. [Flow User Journey](#flow-user-journey)
8. [Flow Admin Panel](#flow-admin-panel)

---

## Gambaran Umum

**Nama Aplikasi:** Website BALAI BESAR STANDARDISASI DAN PELAYANAN JASA INDUSTRI KULIT, PLASTIK, DAN KARET

**Deskripsi:** Website resmi untuk institusi pemerintah yang menyediakan layanan standardisasi dan sertifikasi untuk industri kulit, plastik, dan karet. Aplikasi ini memiliki dua bagian utama:
- **Frontend Public** - Untuk pengunjung umum
- **Backend Admin Panel** - Untuk manajemen konten dan data

**Framework:** Laravel 12 (PHP)

---

## Arsitektur Sistem

### 1. Struktur Folder Aplikasi

```
.
├── app/                          # Folder aplikasi utama
│   ├── Console/                  # Artisan commands
│   ├── Exceptions/               # Exception handlers
│   ├── Http/
│   │   ├── Kernel.php            # HTTP middleware configuration
│   │   ├── Controllers/          # Frontend controllers
│   │   │   ├── HomeController.php
│   │   │   ├── ServiceController.php
│   │   │   ├── NewsController.php
│   │   │   ├── ContactController.php
│   │   │   ├── TestimonialController.php
│   │   │   ├── SurveyController.php
│   │   │   ├── PengujianController.php
│   │   │   ├── DynamicPageController.php
│   │   │   └── Admin/            # Admin controllers (CRUD)
│   │   │       ├── DashboardController.php
│   │   │       ├── ServiceController.php
│   │   │       ├── NewsController.php
│   │   │       ├── TestimonialController.php
│   │   │       ├── PartnerController.php
│   │   │       ├── SettingController.php
│   │   │       ├── ServiceRatingController.php
│   │   │       ├── CurveRatingController.php
│   │   │       ├── IpkRatingController.php
│   │   │       ├── SurveyController.php
│   │   │       ├── ContactMessageController.php
│   │   │       └── DynamicPageController.php
│   │   └── Middleware/           # Custom middleware
│   ├── Mail/                     # Email templates
│   │   ├── AdminReplyMail.php
│   │   └── ContactMail.php
│   ├── Models/                   # Database models
│   │   ├── User.php              # Admin users
│   │   ├── Service.php           # Layanan
│   │   ├── News.php              # Berita
│   │   ├── Testimonial.php       # Testimoni pelanggan
│   │   ├── Partner.php           # Partner perusahaan
│   │   ├── HomepageSetting.php   # Pengaturan homepage
│   │   ├── DynamicPage.php       # Halaman dinamis
│   │   ├── ContactMessage.php    # Pesan kontak dari pengunjung
│   │   ├── ServiceRating.php     # Data rating layanan
│   │   ├── CurveRating.php       # Data kurva rating
│   │   ├── IpkRating.php         # Data IPK rating
│   │   └── SurveyResponse.php    # Respons survey pelanggan
│   └── Providers/                # Service providers
│
├── config/                       # Konfigurasi aplikasi
│   ├── app.php
│   ├── auth.php
│   ├── database.php
│   ├── mail.php
│   └── ...
│
├── database/
│   ├── migrations/               # Database schema definitions
│   └── seeders/                  # Data seeders
│
├── resources/
│   ├── css/                      # Tailwind CSS
│   ├── js/                       # JavaScript (Alpine.js)
│   └── views/                    # Blade templates
│       ├── admin/                # Admin panel templates
│       ├── auth/                 # Authentication templates
│       ├── pages/                # Public page templates
│       ├── layouts/              # Layout templates
│       ├── components/           # Reusable components
│       └── partials/             # Partial templates
│
├── routes/
│   ├── web.php                   # Web routes
│   ├── api.php                   # API routes
│   ├── auth.php                  # Auth routes (Laravel Breeze)
│   └── console.php               # Console routes
│
├── storage/                      # File storage
│   ├── app/                      # User uploads
│   └── logs/                     # Application logs
│
└── public/
    ├── index.php                 # Entry point
    ├── build/                    # Vite compiled assets
    ├── images/                   # Static images
    └── files/                    # Static files
```

### 2. Arsitektur MVC

**Model (Database Layer)**
- Models mendefinisikan struktur dan relasi data
- Setiap model merepresentasikan tabel di database
- Menggunakan Eloquent ORM untuk query building

**View (Presentation Layer)**
- Blade templates untuk rendering HTML
- Menggunakan Tailwind CSS untuk styling
- Alpine.js untuk interaktivitas frontend

**Controller (Business Logic Layer)**
- Menghandle request dari user
- Memproses business logic
- Return response (view atau JSON)

---

## Struktur Database

### Diagram ERD (Entity Relationship Diagram)

```
┌─────────────────────────────────────────────────────────┐
│ USERS TABLE                                             │
├─────────────────────────────────────────────────────────┤
│ id (PK)                                                 │
│ name                                                    │
│ email (UNIQUE)                                          │
│ password (hashed)                                       │
│ remember_token                                          │
│ created_at, updated_at                                  │
└─────────────────────────────────────────────────────────┘

┌─────────────────────────────────────────────────────────┐
│ ADMINS TABLE                                            │
├─────────────────────────────────────────────────────────┤
│ id (PK)                                                 │
│ name                                                    │
│ email (UNIQUE)                                          │
│ password (hashed)                                       │
│ role                                                    │
│ is_active                                               │
│ created_at, updated_at                                  │
└─────────────────────────────────────────────────────────┘

┌─────────────────────────────────────────────────────────┐
│ SERVICES TABLE                                          │
├─────────────────────────────────────────────────────────┤
│ id (PK)                                                 │
│ title                                                   │
│ slug (UNIQUE)                                           │
│ description                                             │
│ icon (file path)                                        │
│ content (rich text)                                     │
│ is_active                                               │
│ sort_order                                              │
│ created_at, updated_at                                  │
└─────────────────────────────────────────────────────────┘

┌─────────────────────────────────────────────────────────┐
│ NEWS TABLE                                              │
├─────────────────────────────────────────────────────────┤
│ id (PK)                                                 │
│ title                                                   │
│ slug (UNIQUE)                                           │
│ excerpt                                                 │
│ content (rich text)                                     │
│ image (file path)                                       │
│ is_published                                            │
│ published_at                                            │
│ author                                                  │
│ views (counter)                                         │
│ position (for featured news)                            │
│ created_at, updated_at                                  │
└─────────────────────────────────────────────────────────┘

┌─────────────────────────────────────────────────────────┐
│ TESTIMONIALS TABLE                                      │
├─────────────────────────────────────────────────────────┤
│ id (PK)                                                 │
│ client_name                                             │
│ client_company                                          │
│ content                                                 │
│ image (file path)                                       │
│ rating (1-5)                                            │
│ is_approved                                             │
│ sort_order                                              │
│ created_at, updated_at                                  │
└─────────────────────────────────────────────────────────┘

┌─────────────────────────────────────────────────────────┐
│ PARTNERS TABLE                                          │
├─────────────────────────────────────────────────────────┤
│ id (PK)                                                 │
│ name                                                    │
│ logo (file path)                                        │
│ website_url                                             │
│ is_active                                               │
│ sort_order                                              │
│ created_at, updated_at                                  │
└─────────────────────────────────────────────────────────┘

┌─────────────────────────────────────────────────────────┐
│ HOMEPAGE_SETTINGS TABLE                                 │
├─────────────────────────────────────────────────────────┤
│ id (PK)                                                 │
│ key (setting identifier)                                │
│ value (JSON or string)                                  │
│ created_at, updated_at                                  │
└─────────────────────────────────────────────────────────┘

┌─────────────────────────────────────────────────────────┐
│ DYNAMIC_PAGES TABLE                                     │
├─────────────────────────────────────────────────────────┤
│ id (PK)                                                 │
│ slug (UNIQUE, URL identifier)                           │
│ title                                                   │
│ type (kategori halaman)                                 │
│ content (rich text)                                     │
│ is_active                                               │
│ sort_order                                              │
│ created_at, updated_at                                  │
└─────────────────────────────────────────────────────────┘

┌─────────────────────────────────────────────────────────┐
│ CONTACT_MESSAGES TABLE                                  │
├─────────────────────────────────────────────────────────┤
│ id (PK)                                                 │
│ name                                                    │
│ email                                                   │
│ phone                                                   │
│ subject                                                 │
│ message                                                 │
│ is_read                                                 │
│ admin_reply                                             │
│ replied_at                                              │
│ created_at, updated_at                                  │
└─────────────────────────────────────────────────────────┘

┌─────────────────────────────────────────────────────────┐
│ SERVICE_RATINGS TABLE                                   │
├─────────────────────────────────────────────────────────┤
│ id (PK)                                                 │
│ title                                                   │
│ year1, year2, year3, year4, year5 (rating data)        │
│ is_active                                               │
│ sort_order                                              │
│ tooltip_label                                           │
│ created_at, updated_at                                  │
└─────────────────────────────────────────────────────────┘

┌─────────────────────────────────────────────────────────┐
│ CURVE_RATINGS TABLE                                     │
├─────────────────────────────────────────────────────────┤
│ id (PK)                                                 │
│ title                                                   │
│ year, value (data untuk kurva)                          │
│ is_active                                               │
│ sort_order                                              │
│ tooltip_label                                           │
│ created_at, updated_at                                  │
└─────────────────────────────────────────────────────────┘

┌─────────────────────────────────────────────────────────┐
│ IPK_RATINGS TABLE                                       │
├─────────────────────────────────────────────────────────┤
│ id (PK)                                                 │
│ title                                                   │
│ year1, year2, year3, year4, year5 (rating data)        │
│ is_active                                               │
│ sort_order                                              │
│ tooltip_label                                           │
│ created_at, updated_at                                  │
└─────────────────────────────────────────────────────────┘

┌─────────────────────────────────────────────────────────┐
│ SURVEY_RESPONSES TABLE                                  │
├─────────────────────────────────────────────────────────┤
│ id (PK)                                                 │
│ name                                                    │
│ email                                                   │
│ phone                                                   │
│ rating                                                  │
│ comments                                                │
│ show_on_home (display di homepage)                      │
│ created_at, updated_at                                  │
└─────────────────────────────────────────────────────────┘
```

### Tabel-Tabel Standar Laravel
- **sessions** - Manajemen session user
- **password_reset_tokens** - Token reset password
- **cache** - Caching system

---

## Alur Operasional

### 1. Request Processing Flow

```
┌──────────────────────────────────────────────────────┐
│ 1. USER REQUEST (URL/Form)                           │
└──────────────────────────────────────────────────────┘
                    │
                    ▼
┌──────────────────────────────────────────────────────┐
│ 2. ROUTING (routes/web.php)                          │
│ - Menentukan controller dan method yang dipanggil    │
└──────────────────────────────────────────────────────┘
                    │
                    ▼
┌──────────────────────────────────────────────────────┐
│ 3. MIDDLEWARE (app/Http/Kernel.php)                  │
│ - Validate CSRF token                                │
│ - Check authentication (jika diperlukan)             │
│ - Set locale/language                                │
│ - Validate admin access (jika route admin)           │
└──────────────────────────────────────────────────────┘
                    │
                    ▼
┌──────────────────────────────────────────────────────┐
│ 4. CONTROLLER (app/Http/Controllers/)                │
│ - Proses business logic                              │
│ - Query database via Models                          │
│ - Prepare data untuk view                            │
└──────────────────────────────────────────────────────┘
                    │
                    ▼
┌──────────────────────────────────────────────────────┐
│ 5. MODEL (app/Models/)                               │
│ - Fetch/Save data dari database                      │
│ - Apply scopes dan relationships                     │
│ - Return collection atau single record               │
└──────────────────────────────────────────────────────┘
                    │
                    ▼
┌──────────────────────────────────────────────────────┐
│ 6. VIEW (resources/views/)                           │
│ - Render HTML menggunakan Blade template             │
│ - Tampilkan data dari controller                     │
│ - Include styling (Tailwind CSS)                     │
│ - Include interaktivitas (Alpine.js)                 │
└──────────────────────────────────────────────────────┘
                    │
                    ▼
┌──────────────────────────────────────────────────────┐
│ 7. HTTP RESPONSE (HTML/JSON)                         │
│ - Kirim ke browser/client                            │
└──────────────────────────────────────────────────────┘
```

### 2. File Upload Flow

```
┌──────────────────────────────────┐
│ 1. Admin Upload File (Form)      │
└──────────────────────────────────┘
         │
         ▼
┌──────────────────────────────────┐
│ 2. Controller Receives File      │
│ - Validate file type & size      │
└──────────────────────────────────┘
         │
         ▼
┌──────────────────────────────────┐
│ 3. Store File                    │
│ - Storage::put() -> storage/app/ │
│ - Generate filename              │
└──────────────────────────────────┘
         │
         ▼
┌──────────────────────────────────┐
│ 4. Save Path to Database         │
│ - Model::create(['image' => ...])│
└──────────────────────────────────┘
         │
         ▼
┌──────────────────────────────────┐
│ 5. Public Access                 │
│ - Storage::url() -> public file  │
│ - Display di frontend            │
└──────────────────────────────────┘
```

---

## Fitur Utama

### Frontend Public (Pengunjung Umum)

#### 1. **Homepage**
- Hero section dengan banner
- Daftar layanan (up to 8 items)
- News/Berita terbaru
- Testimonial pelanggan
- Partner list
- Settings dari homepage_settings

**Controller:** `HomeController@index`
**View:** `pages/home.blade.php`

#### 2. **Halaman Layanan (Services)**
- List semua layanan aktif (paginated - 9 per page)
- Detail layanan individual
- Related services (3 layanan serupa)

**Controller:** `ServiceController@index`, `ServiceController@show`
**Views:** `pages/services/index.blade.php`, `pages/services/show.blade.php`

#### 3. **Halaman Berita (News)**
- List semua berita yang dipublikasi
- Pagination
- Detail berita dengan view counter
- Sistem positioning untuk berita featured

**Controller:** `NewsController@index`, `NewsController@show`
**Views:** `pages/news/index.blade.php`, `pages/news/show.blade.php`

#### 4. **Form Kontak (Contact Form)**
- Form input: nama, email, phone, subject, message
- Submit -> Simpan ke contact_messages table
- Auto-send email ke admin

**Controller:** `ContactController@show`, `ContactController@submit`
**View:** `pages/contact.blade.php`

#### 5. **Testimoni Pelanggan**
- List testimoni yang sudah di-approve
- Dapat submit testimoni baru (dengan approval system)

**Controller:** `TestimonialController@index`, `TestimonialController@submit`
**View:** `pages/testimonials.blade.php`

#### 6. **Survey Layanan Pelanggan**
- Form survey dengan rating
- Submit survey -> Simpan ke survey_responses table
- Opsi display di homepage

**Controller:** `SurveyController@store`

#### 7. **Halaman Dinamis**
- Halaman dapat dibuat oleh admin (misalnya: Tentang Kami, Profil, dll)
- URL: `/{slug}` (catch-all route terakhir)
- Support rich text content

**Controller:** `DynamicPageController@show`
**View:** `pages/dynamic-page.blade.php`

#### 8. **Halaman Statis**
- Profil Singkat
- Tonggak Sejarah
- Profil Pejabat
- Struktur Organisasi
- Makna Logo
- Standar Layanan
- Tarif Layanan
- Media & Informasi
- Pengujian Produk
- Kalibrasi
- Halal Center

**Views:** `pages/about/`, `pages/standards/`, `pages/pengujian/`, `pages/kalibrasi/`, `pages/halal-center/`

#### 9. **Language Switching**
- Support multi-bahasa (EN & ID)
- Route: `/language/{locale}`

**Controller:** `LanguageController@switch`

---

### Admin Panel

#### 1. **Dashboard**
- Overview statistik:
  - Total services, news, testimonials, partners
  - Published news count
  - Approved testimonials count
  - Active dynamic pages
  - Unread messages count
- Recent news & testimonials list

**Controller:** `Admin/DashboardController@index`
**View:** `admin/dashboard.blade.php`

#### 2. **Manajemen Layanan (Services CRUD)**
- **Create:** Add layanan baru (title, slug, description, icon, content, is_active, sort_order)
- **Read:** List semua layanan dengan pagination
- **Update:** Edit layanan existing
- **Delete:** Hapus layanan
- File upload untuk icon

**Controller:** `Admin/ServiceController`
**Routes:** `admin/services` (resource routes)
**Views:** `admin/services/`

#### 3. **Manajemen Berita (News CRUD)**
- **Create:** Add berita baru
- **Read:** List berita dengan filter published/draft
- **Update:** Edit berita
- **Delete:** Hapus berita
- Features:
  - Rich text editor (CKEditor 5) untuk content
  - Image upload untuk featured image
  - Publish/unpublish toggle
  - Position setting (untuk featured news)
  - View counter

**Controller:** `Admin/NewsController`
**Routes:** `admin/news` (resource routes)
**Views:** `admin/news/`

#### 4. **Manajemen Testimoni (Testimonials CRUD)**
- **Create:** Input testimoni manual dari admin
- **Read:** List testimoni dengan status approval
- **Update:** Edit testimoni
- **Delete:** Hapus testimoni
- Toggle approval status
- Rating system (1-5 stars)

**Controller:** `Admin/TestimonialController`
**Routes:** `admin/testimonials` (resource routes)
**Views:** `admin/testimonials/`

#### 5. **Manajemen Partner (Partners CRUD)**
- **Create:** Add partner baru
- **Read:** List partners
- **Update:** Edit partner
- **Delete:** Hapus partner
- Logo upload
- Website URL
- Active/inactive status
- Sort order untuk display

**Controller:** `Admin/PartnerController`
**Routes:** `admin/partners` (resource routes)
**Views:** `admin/partners/`

#### 6. **Manajemen Pesan Kontak (Contact Messages)**
- View semua pesan dari form kontak
- Mark as read
- View detail pesan
- Reply to message (auto-send email)

**Controller:** `Admin/ContactMessageController`
**Routes:** `admin/messages`
**Views:** `admin/messages/`

#### 7. **Manajemen Halaman Dinamis (Dynamic Pages CRUD)**
- Create halaman baru (slug, title, content, type, is_active)
- Edit halaman
- Delete halaman
- Rich text editor untuk content
- Publish/unpublish halaman

**Controller:** `Admin/DynamicPageController`
**Routes:** `admin/dynamic-pages` (resource routes)
**Views:** `admin/dynamic-pages/`

#### 8. **Pengaturan Homepage (Settings)**
- Customize homepage content
- Stored sebagai JSON di homepage_settings table

**Controller:** `Admin/SettingController`
**Route:** `admin/settings`
**View:** `admin/settings/index.blade.php`

#### 9. **Manajemen Rating Layanan (Service Ratings)**
- Create/Read/Update/Delete service ratings
- Multi-year data (year1-year5)
- Display di footer

**Controller:** `Admin/ServiceRatingController`
**Routes:** `admin/service-ratings` (resource routes)
**Views:** `admin/service-ratings/`

#### 10. **Manajemen Kurva Rating (Curve Ratings)**
- Create/Read/Update/Delete curve ratings
- Year-based data untuk kurva
- Display di footer

**Controller:** `Admin/CurveRatingController`
**Routes:** `admin/curve-ratings` (resource routes)
**Views:** `admin/curve-ratings/`

#### 11. **Manajemen IPK Rating (IPK Ratings)**
- Create/Read/Update/Delete IPK ratings
- Multi-year data
- Display di footer

**Controller:** `Admin/IpkRatingController`
**Routes:** `admin/ipk-ratings` (resource routes)
**Views:** `admin/ipk-ratings/`

#### 12. **Manajemen Survey Response**
- View survey responses dari pengunjung
- Toggle visibility (show di homepage)
- Delete responses

**Controller:** `Admin/SurveyController`
**Routes:** `admin/surveys`

#### 13. **Admin Authentication**
- Dedicated login page untuk admin
- Separate dari user login
- URL: `/admin/login`
- Session management

**Controller:** `Auth/AuthenticatedSessionController`
**Routes:** `admin/login` (GET & POST)
**View:** `auth/login-admin.blade.php`

---

## Flow User Journey

### Pengunjung Website (User Flow)

```
┌─────────────────────────────────────────────────────────┐
│ 1. AKSES HOMEPAGE                                       │
│ GET / → HomeController@index                            │
│ ├─ Fetch 8 services (aktif, urut sort_order)           │
│ ├─ Fetch 3 approved testimonials                        │
│ ├─ Fetch active partners                                │
│ ├─ Fetch settings                                       │
│ └─ Fetch featured & priority news                       │
│ ▼                                                       │
│ Return: pages/home.blade.php dengan semua data         │
└─────────────────────────────────────────────────────────┘

┌─────────────────────────────────────────────────────────┐
│ 2. BROWSE LAYANAN                                       │
│ GET /layanan → ServiceController@index                  │
│ ├─ Fetch all active services (paginate 9 per page)     │
│ ▼                                                       │
│ Return: pages/services/index.blade.php                 │
└─────────────────────────────────────────────────────────┘

┌─────────────────────────────────────────────────────────┐
│ 3. DETAIL LAYANAN                                       │
│ GET /layanan/{service} → ServiceController@show         │
│ ├─ Fetch service detail                                │
│ ├─ Fetch 3 related services                            │
│ ▼                                                       │
│ Return: pages/services/show.blade.php                  │
└─────────────────────────────────────────────────────────┘

┌─────────────────────────────────────────────────────────┐
│ 4. BROWSE BERITA                                        │
│ GET /berita → NewsController@index                      │
│ ├─ Fetch all published news (paginated)                │
│ ├─ Increment view counter (optional)                   │
│ ▼                                                       │
│ Return: pages/news/index.blade.php                     │
└─────────────────────────────────────────────────────────┘

┌─────────────────────────────────────────────────────────┐
│ 5. DETAIL BERITA                                        │
│ GET /berita/{news} → NewsController@show                │
│ ├─ Fetch news detail                                   │
│ ├─ Increment view counter                              │
│ ▼                                                       │
│ Return: pages/news/show.blade.php                      │
└─────────────────────────────────────────────────────────┘

┌─────────────────────────────────────────────────────────┐
│ 6. SUBMIT KONTAK                                        │
│ GET /kontak → ContactController@show                    │
│ └─ Return: pages/contact.blade.php                     │
│                                                         │
│ POST /kontak → ContactController@submit                 │
│ ├─ Validate input                                      │
│ ├─ Save ke contact_messages table                      │
│ ├─ Send email notification to admin                    │
│ └─ Redirect back with success message                  │
└─────────────────────────────────────────────────────────┘

┌─────────────────────────────────────────────────────────┐
│ 7. SUBMIT TESTIMONI                                     │
│ GET /testimonials → TestimonialController@index         │
│ └─ Return: pages/testimonials.blade.php                │
│                                                         │
│ POST /testimonials → TestimonialController@submit       │
│ ├─ Validate input                                      │
│ ├─ Save ke testimonials table (is_approved=false)      │
│ └─ Redirect back with message                          │
└─────────────────────────────────────────────────────────┘

┌─────────────────────────────────────────────────────────┐
│ 8. SUBMIT SURVEY                                        │
│ POST /survey-submit → SurveyController@store            │
│ ├─ Validate input                                      │
│ ├─ Save ke survey_responses table                      │
│ └─ Redirect back with success message                  │
└─────────────────────────────────────────────────────────┘

┌─────────────────────────────────────────────────────────┐
│ 9. AKSES HALAMAN DINAMIS                                │
│ GET /{slug} → DynamicPageController@show                │
│ ├─ Fetch dynamic_pages where slug = param              │
│ ├─ Check is_active = true                              │
│ ▼                                                       │
│ Return: pages/dynamic-page.blade.php                   │
│ OR                                                      │
│ Return: 404 if not found                               │
└─────────────────────────────────────────────────────────┘

┌─────────────────────────────────────────────────────────┐
│ 10. GANTI BAHASA                                        │
│ GET /language/{locale} → LanguageController@switch      │
│ ├─ Set session locale                                  │
│ ├─ Redirect ke referrer                                │
│ └─ Content akan ditampilkan dalam bahasa terpilih      │
└─────────────────────────────────────────────────────────┘
```

---

## Flow Admin Panel

### Admin Flow (Manajemen Konten)

```
┌─────────────────────────────────────────────────────────┐
│ 1. LOGIN ADMIN                                          │
│ GET /admin/login → Show login form                      │
│ POST /admin/login → AuthenticatedSessionController     │
│ ├─ Validate credentials                                │
│ ├─ Create session                                      │
│ └─ Redirect ke admin dashboard                         │
└─────────────────────────────────────────────────────────┘

┌─────────────────────────────────────────────────────────┐
│ 2. ADMIN DASHBOARD                                      │
│ GET /admin → DashboardController@index                  │
│ ├─ Middleware: AdminMiddleware (check authenticated)   │
│ ├─ Fetch statistics                                    │
│ ├─ Fetch recent data                                   │
│ └─ Return: admin/dashboard.blade.php                   │
└─────────────────────────────────────────────────────────┘

┌─────────────────────────────────────────────────────────┐
│ 3. KELOLA LAYANAN                                       │
│                                                         │
│ A. LIST LAYANAN                                        │
│ GET /admin/services → Admin/ServiceController@index    │
│ ├─ Fetch all services dengan pagination                │
│ └─ Return: admin/services/index.blade.php              │
│                                                         │
│ B. CREATE LAYANAN                                      │
│ GET /admin/services/create → show form                 │
│ POST /admin/services → store data                      │
│ ├─ Validate input                                      │
│ ├─ Upload icon (jika ada)                              │
│ ├─ Create slug dari title                              │
│ ├─ Save ke services table                              │
│ └─ Redirect dengan success message                     │
│                                                         │
│ C. EDIT LAYANAN                                        │
│ GET /admin/services/{id}/edit → show form dengan data  │
│ PUT /admin/services/{id} → update data                 │
│ ├─ Validate input                                      │
│ ├─ Update icon (jika ada file baru)                    │
│ ├─ Update record di database                          │
│ └─ Redirect dengan success message                     │
│                                                         │
│ D. DELETE LAYANAN                                      │
│ DELETE /admin/services/{id}                            │
│ ├─ Delete icon file (jika ada)                         │
│ ├─ Delete record dari database                         │
│ └─ Redirect dengan success message                     │
└─────────────────────────────────────────────────────────┘

┌─────────────────────────────────────────────────────────┐
│ 4. KELOLA BERITA                                        │
│                                                         │
│ A. LIST BERITA                                         │
│ GET /admin/news → Admin/NewsController@index           │
│ ├─ Fetch all news dengan pagination                    │
│ └─ Return: admin/news/index.blade.php                  │
│                                                         │
│ B. CREATE BERITA                                       │
│ GET /admin/news/create → show form dengan editor       │
│ POST /admin/news → store data                          │
│ ├─ Validate input                                      │
│ ├─ Upload image                                        │
│ ├─ Process rich text content (CKEditor)                │
│ ├─ Create slug dari title                              │
│ ├─ Save ke news table                                  │
│ └─ Redirect dengan success message                     │
│                                                         │
│ C. EDIT BERITA                                         │
│ GET /admin/news/{id}/edit → show form dengan data      │
│ PUT /admin/news/{id} → update data                     │
│ ├─ Validate input                                      │
│ ├─ Update image (jika ada file baru)                   │
│ ├─ Process rich text content                           │
│ ├─ Update record di database                          │
│ └─ Redirect dengan success message                     │
│                                                         │
│ D. PUBLISH/UNPUBLISH BERITA                            │
│ POST /admin/news/{id}/toggle-publish                   │
│ ├─ Toggle is_published status                          │
│ ├─ Set/unset published_at timestamp                    │
│ └─ Redirect dengan success message                     │
│                                                         │
│ E. DELETE BERITA                                       │
│ DELETE /admin/news/{id}                                │
│ ├─ Delete image file                                   │
│ ├─ Delete record dari database                         │
│ └─ Redirect dengan success message                     │
│                                                         │
│ F. UPLOAD IMAGE (dari CKEditor)                        │
│ POST /admin/news/upload-image                          │
│ ├─ Receive image dari editor                           │
│ ├─ Validate image                                      │
│ ├─ Store ke storage/app/news/                          │
│ └─ Return JSON dengan URL                              │
└─────────────────────────────────────────────────────────┘

┌─────────────────────────────────────────────────────────┐
│ 5. KELOLA TESTIMONI                                     │
│                                                         │
│ A. LIST TESTIMONI                                      │
│ GET /admin/testimonials → show dengan status           │
│ └─ Filter: approved/pending                            │
│                                                         │
│ B. CREATE TESTIMONI                                    │
│ POST /admin/testimonials → Admin/TestimonialController │
│ ├─ Validate input                                      │
│ ├─ Upload image                                        │
│ ├─ Save ke testimonials table                          │
│ └─ Redirect dengan success message                     │
│                                                         │
│ C. EDIT TESTIMONI                                      │
│ PUT /admin/testimonials/{id}                           │
│ ├─ Update data                                         │
│ ├─ Update image (jika ada)                             │
│ └─ Redirect dengan success message                     │
│                                                         │
│ D. TOGGLE APPROVAL                                     │
│ POST /admin/testimonials/{id}/toggle-approval          │
│ ├─ Toggle is_approved status                           │
│ └─ Redirect dengan success message                     │
│                                                         │
│ E. DELETE TESTIMONI                                    │
│ DELETE /admin/testimonials/{id}                        │
│ ├─ Delete image                                        │
│ ├─ Delete record                                       │
│ └─ Redirect dengan success message                     │
└─────────────────────────────────────────────────────────┘

┌─────────────────────────────────────────────────────────┐
│ 6. KELOLA PARTNER                                       │
│                                                         │
│ CRUD Operations similar to Services & News             │
│ ├─ Create partner baru                                 │
│ ├─ Upload logo                                         │
│ ├─ Set active/inactive status                          │
│ ├─ Set sort order                                      │
│ ├─ Update/Edit                                         │
│ └─ Delete                                              │
└─────────────────────────────────────────────────────────┘

┌─────────────────────────────────────────────────────────┐
│ 7. KELOLA PESAN KONTAK                                  │
│                                                         │
│ A. LIST PESAN                                          │
│ GET /admin/messages → Admin/ContactMessageController   │
│ ├─ Fetch all messages                                  │
│ └─ Show read/unread status                             │
│                                                         │
│ B. VIEW DETAIL PESAN                                   │
│ GET /admin/messages/{id}                               │
│ ├─ Show pesan detail                                   │
│ └─ Mark as read                                        │
│                                                         │
│ C. MARK AS READ                                        │
│ POST /admin/messages/{id}/mark-read                    │
│ ├─ Update is_read = true                               │
│ └─ Redirect                                            │
│                                                         │
│ D. REPLY PESAN                                         │
│ POST /admin/messages/{id}/reply                        │
│ ├─ Validate reply input                                │
│ ├─ Save reply ke database                              │
│ ├─ Send email ke pengirim (AdminReplyMail)            │
│ └─ Redirect dengan success message                     │
└─────────────────────────────────────────────────────────┘

┌─────────────────────────────────────────────────────────┐
│ 8. KELOLA HALAMAN DINAMIS                               │
│                                                         │
│ A. LIST HALAMAN                                        │
│ GET /admin/dynamic-pages → Admin/DynamicPageController │
│ ├─ Fetch all dynamic pages                             │
│ └─ Show active/inactive status                         │
│                                                         │
│ B. CREATE HALAMAN                                      │
│ POST /admin/dynamic-pages → store                      │
│ ├─ Validate input                                      │
│ ├─ Process rich text content                           │
│ ├─ Save ke dynamic_pages table                         │
│ └─ Redirect dengan success message                     │
│                                                         │
│ C. EDIT HALAMAN                                        │
│ PUT /admin/dynamic-pages/{id}                          │
│ ├─ Update data & content                               │
│ └─ Redirect dengan success message                     │
│                                                         │
│ D. DELETE HALAMAN                                      │
│ DELETE /admin/dynamic-pages/{id}                       │
│ ├─ Delete record                                       │
│ └─ Redirect dengan success message                     │
│                                                         │
│ E. PUBLIC AKSES HALAMAN                                │
│ GET /{slug} → DynamicPageController@show               │
│ ├─ Fetch dynamic page                                  │
│ └─ Render dengan template                              │
└─────────────────────────────────────────────────────────┘

┌─────────────────────────────────────────────────────────┐
│ 9. KELOLA PENGATURAN HOMEPAGE                           │
│                                                         │
│ A. VIEW SETTINGS                                       │
│ GET /admin/settings → SettingController@index          │
│ ├─ Fetch all settings dari homepage_settings table     │
│ └─ Return form dengan current values                   │
│                                                         │
│ B. UPDATE SETTINGS                                     │
│ PUT /admin/settings → SettingController@update         │
│ ├─ Validate input                                      │
│ ├─ Update/create settings records                      │
│ └─ Redirect dengan success message                     │
│                                                         │
│ C. HOMEPAGE DISPLAY                                    │
│ GET / → HomeController                                 │
│ ├─ Fetch settings                                      │
│ ├─ Use di template sesuai dengan config                │
│ └─ Display di homepage                                 │
└─────────────────────────────────────────────────────────┘

┌─────────────────────────────────────────────────────────┐
│ 10. KELOLA RATING LAYANAN                               │
│                                                         │
│ CRUD Operations:                                       │
│ ├─ Create service rating dengan multiple years         │
│ ├─ Edit rating                                         │
│ ├─ Delete rating                                       │
│ ├─ Toggle active status                                │
│ └─ Display di footer homepage                          │
└─────────────────────────────────────────────────────────┘

┌─────────────────────────────────────────────────────────┐
│ 11. KELOLA KURVA RATING & IPK RATING                    │
│                                                         │
│ Similar CRUD operations dengan data tahun              │
│ └─ Display di footer homepage                          │
└─────────────────────────────────────────────────────────┘

┌─────────────────────────────────────────────────────────┐
│ 12. KELOLA SURVEY RESPONSE                              │
│                                                         │
│ A. LIST RESPONSE                                       │
│ GET /admin/surveys                                     │
│ ├─ Fetch all survey responses                          │
│ └─ Show visibility status                              │
│                                                         │
│ B. TOGGLE VISIBILITY                                   │
│ POST /admin/surveys/{id}/toggle-visibility             │
│ ├─ Toggle show_on_home status                          │
│ └─ Redirect                                            │
│                                                         │
│ C. DELETE RESPONSE                                     │
│ DELETE /admin/surveys/{id}                             │
│ ├─ Delete record                                       │
│ └─ Redirect                                            │
└─────────────────────────────────────────────────────────┘

┌─────────────────────────────────────────────────────────┐
│ 13. LOGOUT                                              │
│ POST /logout → Destroy session                         │
│ └─ Redirect ke homepage                                │
└─────────────────────────────────────────────────────────┘
```

---

## Teknologi Stack

### Backend
- **Framework:** Laravel 12
- **PHP Version:** >=8.2
- **Database:** MySQL
- **Authentication:** Laravel Breeze

### Frontend
- **Template Engine:** Blade (Laravel)
- **Styling:** Tailwind CSS 3.2
- **JavaScript:** Alpine.js 3.12
- **Build Tool:** Vite
- **Rich Text Editor:** CKEditor 5
- **UI Components:** Bootstrap 5.3 (Icons)

### Additional Packages
- **Intervention/Image:** Image manipulation & processing
- **Guzzlehttp/Guzzle:** HTTP client
- **Tonysm/Rich-Text-Laravel:** Rich text content management
- **Laravel/Sanctum:** API authentication
- **Laravel/Tinker:** Interactive shell

### Development Tools
- **Laravel Pint:** Code style fixer
- **PHPUnit:** Testing framework
- **Faker:** Fake data generation
- **Laravel Sail:** Docker development environment

---

## Fitur Security

### 1. Authentication & Authorization
- Admin login dengan email & password
- Session management
- Admin middleware untuk route protection
- Admin role system

### 2. Data Validation
- Server-side validation di semua forms
- Client-side validation dengan HTML5
- CSRF token protection

### 3. File Upload Security
- File type validation
- File size limits
- Store di `/storage/app/` (tidak accessible langsung)
- Public access via `Storage::url()`

### 4. Email Security
- Auto-send email notifications
- Admin reply emails
- Contact form emails

---

## Environment Configuration

File `.env` mengontrol:
- `APP_NAME` - Nama aplikasi
- `APP_ENV` - Environment (local/production)
- `APP_DEBUG` - Debug mode
- `APP_URL` - Base URL aplikasi
- `DB_*` - Database configuration
- `MAIL_*` - Email configuration

---

## Deployment & Maintenance

### Installation Steps
1. Copy `.env.example` ke `.env`
2. Run `composer install`
3. Run `npm install`
4. Generate app key: `php artisan key:generate`
5. Run migrations: `php artisan migrate`
6. Run seeders: `php artisan db:seed`
7. Create storage link: `php artisan storage:link`
8. Build assets: `npm run build`

### Common Commands
```bash
# Development
php artisan serve                    # Start dev server
npm run dev                          # Build CSS/JS for dev

# Production
npm run build                        # Build CSS/JS for production
php artisan migrate --force          # Run migrations on production

# Database
php artisan migrate:refresh          # Reset & re-run migrations
php artisan db:seed                  # Run seeders
php artisan tinker                   # Interactive shell

# Cache
php artisan cache:clear              # Clear application cache
php artisan config:cache             # Cache configuration
```

---

## Workflow Summary

```
┌─────────────────────────────────────────────────────────────┐
│                    SISTEM KESELURUHAN                        │
├─────────────────────────────────────────────────────────────┤
│                                                               │
│  ┌──────────────────┐          ┌──────────────────┐         │
│  │  PUBLIC WEBSITE  │          │   ADMIN PANEL    │         │
│  └──────────────────┘          └──────────────────┘         │
│         │                              │                     │
│    ┌────┴────┐                   ┌────┴────┐                │
│    │ Frontend │                  │ Backend  │                │
│    │ Routes   │                  │ Routes   │                │
│    └────┬────┘                   └────┬────┘                │
│         │                             │                      │
│    ┌────▼──────────────────────────────▼────┐               │
│    │        Controllers & Middleware         │               │
│    │  - Route handling                       │               │
│    │  - Business logic                       │               │
│    │  - Validation                           │               │
│    └────┬──────────────────────────────┬────┘               │
│         │                              │                     │
│    ┌────▼──────────────────────────────▼────┐               │
│    │          Eloquent Models                │               │
│    │  - Data fetching                        │               │
│    │  - Data manipulation                    │               │
│    │  - Relationships                        │               │
│    └────┬──────────────────────────────┬────┘               │
│         │                              │                     │
│         └──────────────┬───────────────┘                     │
│                        │                                     │
│                   ┌────▼──────┐                              │
│                   │  DATABASE  │                              │
│                   │  (MySQL)   │                              │
│                   └────────────┘                              │
│                                                               │
└─────────────────────────────────────────────────────────────┘
```

---

## Kesimpulan

Sistem ini adalah **Content Management System (CMS)** berbasis Laravel yang komprehensif untuk website institusi pemerintah. Memiliki:

1. **Frontend:** Website publik dengan informasi layanan, berita, testimoni
2. **Backend:** Admin panel lengkap untuk manajemen semua konten
3. **Database:** 12+ tabel terstruktur dengan relasi yang tepat
4. **Security:** Middleware authentication, validation, CSRF protection
5. **Scalability:** Architecture yang modular dan mudah untuk extend

Sistem ini siap untuk production dengan semua fitur management content yang diperlukan.

