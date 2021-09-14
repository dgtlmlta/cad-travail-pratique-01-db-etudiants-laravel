<?php

namespace App\View\Components\formulaires;

use App\Models\Ville;
use Illuminate\Support\Facades\Route;
use Illuminate\View\Component;

class etudiant extends Component
{
    public $action;
    public $villes;
    public $routeName;
    public $method;
    public $etudiant;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($etudiant = null)
    {
        //
        $this->routeName = Route::currentRouteName();
        $this->villes = Ville::all();
        $this->etudiant = $etudiant;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.formulaires.etudiant');
    }

    /**
     * 
     * Retourne l'action à effectuer par le formulaire
     * 
     * @return string
     * 
     */
    public function actionRoute() {
        $actionsMapping = [
            "etudiants.create" => route("etudiants.store"),
            "etudiants.edit" => route("etudiants.update", [
                "etudiant" => $this->etudiant->id ?? 0
            ])
        ];

        return $actionsMapping[$this->routeName];
    }

    /**
     * 
     * Retourne les différents textes dynamiques de la page
     * 
     * @return array
     */
    public function method() {
        $methodsMapping = [
            "etudiants.create" => "POST",
            "etudiants.edit" => "PUT",
        ];

        return $methodsMapping[$this->routeName];
    }
}
