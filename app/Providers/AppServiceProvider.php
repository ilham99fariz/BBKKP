<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use App\Models\ServiceRating;
use App\Models\CurveRating;
use App\Models\IpkRating;
use App\Http\View\Composers\MenuComposer;

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
        // Load helpers
        require_once app_path('Helpers/LanguageHelper.php');
        
        // Set default string length for MySQL
        Schema::defaultStringLength(191);

        // Register MenuComposer to share menu data with all views
        View::composer('*', MenuComposer::class);

        // Share service ratings, curve ratings, and IPK ratings with footer
        View::composer('partials.footer', function ($view) {
            try {
                $serviceRatings = ServiceRating::active()->ordered()->get();
            } catch (\Exception $e) {
                $serviceRatings = collect();
            }
            
            try {
                $curveRatings = CurveRating::active()->ordered()->get();
            } catch (\Exception $e) {
                $curveRatings = collect();
            }
            
            try {
                $ipkRatings = IpkRating::active()->ordered()->get();
            } catch (\Exception $e) {
                $ipkRatings = collect();
            }
            
            $view->with('serviceRatings', $serviceRatings);
            $view->with('curveRatings', $curveRatings);
            $view->with('ipkRatings', $ipkRatings);
        });
    }
}
