<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

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
        // Ogni volta che viene caricato l'header, passa la variabile $menuLinks
        View::composer('partials.header', function ($view) {
            $view->with('links', config('headerLinks'));
        });

        // Ogni volta che viene caricato il footer, passa la variabile $footerLinks e $servicesLinks
        View::composer('partials.footer', function ($view) {
            $view->with('links', config('footerLinks'));
          
        });
    }
}
