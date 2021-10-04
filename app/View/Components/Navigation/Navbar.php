<?php

namespace App\View\Components;

use Illuminate\Support\Facades\App;
use Illuminate\View\Component;

class Navbar extends Component
{
    private array $available_locales;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        // Récupérer les locales disponibles à partir des variables de l'application
        $this->availableLocales = app()->getenv("available_locales");
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
