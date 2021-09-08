<?php

namespace App\View\Components\formulaires;

use App\Models\Ville;
use Illuminate\View\Component;

class etudiant extends Component
{
    public $action;
    public $villes;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(String $action)
    {
        //
        $this->villes = Ville::all();
        $this->action = $this->getActionRoute($action);
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


    private function getActionRoute($action) {
        $actionsMapping = [
            "ajouter" => route("etudiants.store")
        ];

        return $actionsMapping[$action];
    }
}
