<?php

namespace App\View\Components\Formulaires;

use App\Models\File as ModelsFile;
use Illuminate\Support\Facades\Route;
use Illuminate\View\Component;

class File extends Component
{
    public array $locales;
    public string $routeName;
    public ModelsFile $file;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($file = null)
    {
        //
        $this->locales   = config("app.available_locales");
        $this->routeName = Route::currentRouteName();
        $this->file      = $file;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.formulaires.file');
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
            "files.create" => route("files.store"),
            "files.edit"   => route("files.update", [
                "file" => $this->file->id ?? 0
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
            "files.create" => "POST",
            "files.edit"   => "PUT",
        ];

        return $methodsMapping[$this->routeName];
    }
}
