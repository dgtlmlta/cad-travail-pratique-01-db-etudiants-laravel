<?php

namespace App\View\Components;

use App\Models\Article;
use Illuminate\View\Component;

class ArticleListing extends Component
{
    public array $articles = Article::all();

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
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
