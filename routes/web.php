<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PengujianController;
use App\Http\Controllers\DynamicPageController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DynamicPageController as AdminDynamicPageController;
use App\Http\Controllers\Admin\ServiceController as AdminServiceController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\PartnerController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\ServiceRatingController;
use App\Http\Controllers\Admin\CurveRatingController;
use App\Http\Controllers\Admin\IpkRatingController;
use App\Http\Controllers\Admin\SurveyController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Language Switching
Route::get('/language/{locale}', [LanguageController::class, 'switch'])->name('language.switch');

// Public Routes
Route::get('/', [HomeController::class, 'index'])->name('home');
//Layanan
Route::get('/layanan', [ServiceController::class, 'index'])->name('services.index');
Route::get('/layanan/{service}', [ServiceController::class, 'show'])->name('services.show');

//Layanan
Route::view('/sertifikasi', 'pages.services.sertifikasi')->name('services.sertifikasi');

Route::get('/berita', [NewsController::class, 'index'])->name('news.index');
Route::get('/berita/{news}', [NewsController::class, 'show'])->name('news.show');

// Static index pages for parent menus
Route::view('/standar-layanan', 'pages.standards.index')->name('standards.index');
Route::view('/media-informasi', 'pages.media.index')->name('media.index');
// Keterbukaan Informasi Publik page
Route::view('/keterbukaan-informasi-publik', 'pages.media.keterbukaan-informasi-publik')->name('media.keterbukaan-informasi-publik');
Route::view('/publikasi', 'pages.media.publication')->name('media.publication');
Route::view('/pengumuman', 'pages.media.announcement')->name('media.announcement');

// Standar Pelayanan subpages
Route::view('/standar-pelayanan', 'pages.standards.standar-pelayanan')->name('standards.standar');
Route::view('/maklumat-pelayanan', 'pages.standards.maklumat-pelayanan')->name('standards.maklumat');
Route::view('/tarif-layanan', 'pages.standards.tarif-layanan')->name('standards.tarif');
Route::view('/tarif-percepatan', 'pages.standards.tarif-percepatan')->name('standards.tarif_percepatan');
Route::view('/spm', 'pages.standards.spm')->name('standards.spm');
Route::view('/survey-layanan-pelanggan', 'pages.standards.survey-layanan-pelanggan')->name('standards.survey');
Route::view('/ikm', 'pages.standards.ikm')->name('standards.ikm');

// About Routes
Route::view('/profil-singkat', 'pages.about.profil-singkat')->name('profil-singkat');
Route::view('/tonggak-sejarah', 'pages.about.tonggak-sejarah')->name('tonggak-sejarah');
Route::view('/profil-pejabat', 'pages.about.profil-pejabat')->name('profil-pejabat');
Route::view('/struktur-organisasi', 'pages.about.struktur-organisasi')->name('struktur-organisasi');
Route::view('/makna-logo', 'pages.about.makna-logo')->name('makna-logo');
Route::view('/makna-logo', 'pages.about.makna-logo')->name('makna-logo');
Route::prefix('tentang-kami')->name('about.')->group(function () {
    Route::view('/', 'pages.about.index')->name('index');
    Route::view('/profil-singkat', 'pages.about.profil-singkat')->name('profil-singkat');
    Route::view('/tonggak-sejarah', 'pages.about.tonggak-sejarah')->name('tonggak-sejarah');
    Route::view('/profil-pejabat', 'pages.about.profil-pejabat')->name('profil-pejabat');
    Route::view('/struktur-organisasi', 'pages.about.struktur-organisasi')->name('struktur-organisasi');
    Route::view('/makna-logo', 'pages.about.makna-logo')->name('makna-logo');
});

Route::get('/kontak', [ContactController::class, 'show'])->name('contact.show');
Route::post('/kontak', [ContactController::class, 'submit'])->name('contact.submit');

Route::post('/testimonials', [App\Http\Controllers\TestimonialController::class, 'submit'])->name('testimonials.submit');

// Pengujian Routes
Route::get('/pengujian', [PengujianController::class, 'index'])->name('pengujian.index');
Route::get('/pengujian/produk-kulit', [PengujianController::class, 'produkKulit'])->name('pengujian.produk-kulit');
// Proses Pengujian (informasi alur dan dokumen)
Route::view('/pengujian/proses', 'pages.pengujian.proses-pengujian')->name('pengujian.proses');

// Kalibrasi Routes
Route::view('/kalibrasi', 'pages.kalibrasi.index')->name('kalibrasi.index');

Route::get('admin/login', [App\Http\Controllers\Auth\AuthenticatedSessionController::class, 'createAdmin'])
    ->middleware('guest')
    ->name('admin.login');

//survey routes
Route::post('/survey-submit', [\App\Http\Controllers\SurveyController::class, 'store'])->name('survey.submit');

// Admin Routes
Route::prefix('admin')->middleware(['admin'])->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');

    // Messages / Kunjungan
    Route::get('/messages', [App\Http\Controllers\Admin\ContactMessageController::class, 'index'])->name('admin.messages.index');
    Route::get('/messages/{message}', [App\Http\Controllers\Admin\ContactMessageController::class, 'show'])->name('admin.messages.show');
    Route::post('/messages/{message}/mark-read', [App\Http\Controllers\Admin\ContactMessageController::class, 'markRead'])->name('admin.messages.mark-read');
    Route::post('/messages/{message}/reply', [App\Http\Controllers\Admin\ContactMessageController::class, 'reply'])->name('admin.messages.reply');

    Route::resource('services', AdminServiceController::class)->names([
        'index' => 'admin.services.index',
        'create' => 'admin.services.create',
        'store' => 'admin.services.store',
        'show' => 'admin.services.show',
        'edit' => 'admin.services.edit',
        'update' => 'admin.services.update',
        'destroy' => 'admin.services.destroy',
    ]);

    Route::resource('news', AdminNewsController::class)->names([
        'index' => 'admin.news.index',
        'create' => 'admin.news.create',
        'store' => 'admin.news.store',
        'show' => 'admin.news.show',
        'edit' => 'admin.news.edit',
        'update' => 'admin.news.update',
        'destroy' => 'admin.news.destroy',
    ]);

    Route::post('/news/{news}/toggle-publish', [AdminNewsController::class, 'togglePublish'])
        ->name('admin.news.toggle-publish');

    // Upload image from CKEditor 5 in news content
    Route::post('/news/upload-image', [AdminNewsController::class, 'uploadImage'])
        ->name('admin.news.upload-image');

    Route::resource('testimonials', TestimonialController::class)->names([
        'index' => 'admin.testimonials.index',
        'create' => 'admin.testimonials.create',
        'store' => 'admin.testimonials.store',
        'show' => 'admin.testimonials.show',
        'edit' => 'admin.testimonials.edit',
        'update' => 'admin.testimonials.update',
        'destroy' => 'admin.testimonials.destroy',
    ]);

    Route::post('/testimonials/{testimonial}/toggle-approval', [TestimonialController::class, 'toggleApproval'])
        ->name('admin.testimonials.toggle-approval');

    // Admin actions for survey responses displayed in testimonials listing
    Route::delete('/surveys/{id}', [App\Http\Controllers\Admin\SurveyController::class, 'destroy'])
        ->name('admin.surveys.destroy');

    Route::post('/surveys/{id}/toggle-visibility', [App\Http\Controllers\Admin\SurveyController::class, 'toggleVisibility'])
        ->name('admin.surveys.toggle-visibility');

    Route::resource('partners', PartnerController::class)->names([
        'index' => 'admin.partners.index',
        'create' => 'admin.partners.create',
        'store' => 'admin.partners.store',
        'show' => 'admin.partners.show',
        'edit' => 'admin.partners.edit',
        'update' => 'admin.partners.update',
        'destroy' => 'admin.partners.destroy',
    ]);

    Route::get('/settings', [SettingController::class, 'index'])->name('admin.settings.index');
    Route::put('/settings', [SettingController::class, 'update'])->name('admin.settings.update');

    Route::resource('service-ratings', ServiceRatingController::class)->names([
        'index' => 'admin.service-ratings.index',
        'create' => 'admin.service-ratings.create',
        'store' => 'admin.service-ratings.store',
        'show' => 'admin.service-ratings.show',
        'edit' => 'admin.service-ratings.edit',
        'update' => 'admin.service-ratings.update',
        'destroy' => 'admin.service-ratings.destroy',
    ]);

    Route::resource('curve-ratings', CurveRatingController::class)->names([
        'index' => 'admin.curve-ratings.index',
        'create' => 'admin.curve-ratings.create',
        'store' => 'admin.curve-ratings.store',
        'show' => 'admin.curve-ratings.show',
        'edit' => 'admin.curve-ratings.edit',
        'update' => 'admin.curve-ratings.update',
        'destroy' => 'admin.curve-ratings.destroy',
    ]);

    Route::resource('ipk-ratings', IpkRatingController::class)->names([
        'index' => 'admin.ipk-ratings.index',
        'create' => 'admin.ipk-ratings.create',
        'store' => 'admin.ipk-ratings.store',
        'show' => 'admin.ipk-ratings.show',
        'edit' => 'admin.ipk-ratings.edit',
        'update' => 'admin.ipk-ratings.update',
        'destroy' => 'admin.ipk-ratings.destroy',
    ]);

    Route::resource('dynamic-pages', AdminDynamicPageController::class)->names([
        'index' => 'admin.dynamic-pages.index',
        'create' => 'admin.dynamic-pages.create',
        'store' => 'admin.dynamic-pages.store',
        'show' => 'admin.dynamic-pages.show',
        'edit' => 'admin.dynamic-pages.edit',
        'update' => 'admin.dynamic-pages.update',
        'destroy' => 'admin.dynamic-pages.destroy',
    ]);

    // Page Content Routes (for categorized content)
    Route::prefix('page-content')->name('admin.page-content.')->group(function () {
        Route::get('/{type}', [App\Http\Controllers\Admin\PageContentController::class, 'index'])->name('index');
        Route::get('/{type}/create', [App\Http\Controllers\Admin\PageContentController::class, 'create'])->name('create');
        Route::post('/{type}', [App\Http\Controllers\Admin\PageContentController::class, 'store'])->name('store');
        Route::get('/{type}/{page}/edit', [App\Http\Controllers\Admin\PageContentController::class, 'edit'])->name('edit');
        Route::put('/{type}/{page}', [App\Http\Controllers\Admin\PageContentController::class, 'update'])->name('update');
        Route::delete('/{type}/{page}', [App\Http\Controllers\Admin\PageContentController::class, 'destroy'])->name('destroy');
        Route::post('/{type}/upload', [App\Http\Controllers\Admin\PageContentController::class, 'upload'])->name('upload');
    });
});

// Login Admin khusus (url terpisah)
Route::get('admin/login', [App\Http\Controllers\Auth\AuthenticatedSessionController::class, 'getLoginAdmin'])->name('admin.login');
Route::post('admin/login', [App\Http\Controllers\Auth\AuthenticatedSessionController::class, 'postLoginAdmin'])->name('admin.login.submit');

// Authentication Routes (Laravel Breeze)
require __DIR__ . '/auth.php';

// Halal Center Routes
Route::prefix('halal-center')->name('halal.')->group(function () {
    Route::view('/', 'pages.halal-center.index')->name('index');
    Route::view('/tentang-lph', 'pages.halal-center.about')->name('about');
    Route::view('/layanan', 'pages.halal-center.services')->name('services');
    Route::view('/proses-sertifikasi', 'pages.halal-center.certification-process')->name('certification-process');
    Route::view('/peraturan-dan-pedoman', 'pages.halal-center.regulations')->name('regulations');
    Route::view('/faq', 'pages.halal-center.faq')->name('faq');
});

// PDF proxy download route (same-origin attachment response)
Route::get('/pdf/download/{key}', [App\Http\Controllers\PdfProxyController::class, 'download'])
    ->name('pdf.download');

// Dynamic Pages Route (MUST BE LAST - catch-all route)
Route::get('/{slug}', [DynamicPageController::class, 'show'])->name('dynamic.page');
