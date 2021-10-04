<?php

namespace App\View\Components\Navigation;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use Illuminate\View\Component;

class Navbar extends Component
{
    public array $availableLocales;
    public string $currentLocale;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        // Récupérer les locales disponibles à partir des variables de l'application
        $this->availableLocales = Config::get("app.available_locales");

        // Récupérer la locale courante
        $this->currentLocale = App::getLocale();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.navigation.navbar');
    }
}
