<?php

namespace App\Providers;

use App\Models\Ville;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // Accès à la liste des villes à tous les formulaires étudiants
        view()->composer("formualires.etudiant", function($view) {
            $view->with("villes", Ville::all());
        });
    }
}
