<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Partager le nom de la route à toutes les vues
        View::share("routeName", Route::currentRouteName());

        // Utiliser bootstrap pour la pagination
        Paginator::useBootstrap();
        // Paginator::defaultView('pagination::bootstrap-4');
    }
}
