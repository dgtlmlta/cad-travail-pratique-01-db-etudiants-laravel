<?php

namespace App\View\Components\Formulaires;

use Illuminate\Support\Facades\Route;
use Illuminate\View\Component;

class Article extends Component
{
    public array $locales;
    public string $routeName;
    public Article|null $article;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($article = null)
    {
        //
        $this->locales   = config("app.available_locales");
        $this->routeName = Route::currentRouteName();
        $this->article   = $article;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.formulaires.article');
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
            "articles.create" => route("articles.store"),
            "articles.edit"   => route("articles.update", [
                "article" => $this->article->id ?? 0
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
            "articles.create" => "POST",
            "articles.edit"   => "PUT",
        ];

        return $methodsMapping[$this->routeName];
    }
}
