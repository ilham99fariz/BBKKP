<?php
// Minimal script to render a Laravel view from CLI (no psysh)
require __DIR__ . '/vendor/autoload.php';
$app = require_once __DIR__ . '/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

try {
    // replicate controller variables used by the home view
    $services = \App\Models\Service::active()->ordered()->take(8)->get();
    $testimonials = \App\Models\Testimonial::approved()->ordered()->take(3)->get();
    $partners = \App\Models\Partner::active()->ordered()->get();
    $settings = \App\Models\HomepageSetting::getAllAsArray();

    // Featured & other news similar to controller
    $featuredNews = \App\Models\News::published()->where('position', 1)->latest()->first();
    $otherNews = \App\Models\News::published()->where(function($q){ $q->whereNull('position')->orWhere('position', '!=', 1); })->latest()->take(3)->get();
    $news = collect();
    if ($featuredNews) { $news->push($featuredNews); }
    $news = $news->merge($otherNews)->slice(0,3)->values();

    // Render the Tonggak Sejarah about page for verification
    echo view('pages.about.tonggak-sejarah')->render();
} catch (Throwable $e) {
    echo get_class($e) . ': ' . $e->getMessage() . PHP_EOL;
    echo $e->getTraceAsString();
}
