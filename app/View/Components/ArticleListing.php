<?php

namespace App\View\Components;

use App\Models\Article;
use Illuminate\Support\Facades\App;
use Illuminate\View\Component;

class ArticleListing extends Component
{
    public $articles;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        // Filtrer les articles afin d'obtenir que ceux qui ont une version de la locale courante
        $this->articles = Article::whereHas("localizedContent")
                                    ->with("localizedContent")
                                    ->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.article-listing');
    }
}
