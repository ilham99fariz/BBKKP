<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use App\Models\ServiceRating;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Set default string length for MySQL
        Schema::defaultStringLength(191);

        // Share service ratings with footer
        View::composer('partials.footer', function ($view) {
            try {
                $serviceRatings = ServiceRating::active()->ordered()->get();
            } catch (\Exception $e) {
                $serviceRatings = collect();
            }
            $view->with('serviceRatings', $serviceRatings);
        });
    }
}
