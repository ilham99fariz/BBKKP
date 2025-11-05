<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PengujianController;
use App\Http\Controllers\DynamicPageController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DynamicPageController as AdminDynamicPageController;
use App\Http\Controllers\Admin\ServiceController as AdminServiceController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\PartnerController;
use App\Http\Controllers\Admin\SettingController;

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

// Public Routes
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/layanan', [ServiceController::class, 'index'])->name('services.index');
Route::get('/layanan/{service}', [ServiceController::class, 'show'])->name('services.show');

Route::get('/berita', [NewsController::class, 'index'])->name('news.index');
Route::get('/berita/{news}', [NewsController::class, 'show'])->name('news.show');

// Static index pages for parent menus
Route::view('/standar-layanan', 'pages.standards.index')->name('standards.index');
Route::view('/media-informasi', 'pages.media.index')->name('media.index');
Route::view('/tentang-kami', 'pages.about.index')->name('about.index');

Route::get('/kontak', [ContactController::class, 'show'])->name('contact.show');
Route::post('/kontak', [ContactController::class, 'submit'])->name('contact.submit');

Route::post('/testimonials', [App\Http\Controllers\TestimonialController::class, 'submit'])->name('testimonials.submit');

// Pengujian Routes
Route::get('/pengujian', [PengujianController::class, 'index'])->name('pengujian.index');
Route::get('/pengujian/produk-kulit', [PengujianController::class, 'produkKulit'])->name('pengujian.produk-kulit');

Route::get('admin/login', [App\Http\Controllers\Auth\AuthenticatedSessionController::class, 'createAdmin'])
    ->middleware('guest')
    ->name('admin.login');
    
// Admin Routes
Route::prefix('admin')->middleware(['admin'])->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');

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

    Route::resource('dynamic-pages', AdminDynamicPageController::class)->names([
        'index' => 'admin.dynamic-pages.index',
        'create' => 'admin.dynamic-pages.create',
        'store' => 'admin.dynamic-pages.store',
        'show' => 'admin.dynamic-pages.show',
        'edit' => 'admin.dynamic-pages.edit',
        'update' => 'admin.dynamic-pages.update',
        'destroy' => 'admin.dynamic-pages.destroy',
    ]);
});

// Login Admin khusus (url terpisah)
Route::get('admin/login', [App\Http\Controllers\Auth\AuthenticatedSessionController::class, 'getLoginAdmin'])->name('admin.login');
Route::post('admin/login', [App\Http\Controllers\Auth\AuthenticatedSessionController::class, 'postLoginAdmin'])->name('admin.login.submit');

// Authentication Routes (Laravel Breeze)
require __DIR__ . '/auth.php';

// Dynamic Pages Route (MUST BE LAST - catch-all route)
Route::get('/{slug}', [DynamicPageController::class, 'show'])->name('dynamic.page');
