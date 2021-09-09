<?php

namespace App\View\Components\layouts;

use Illuminate\View\Component;

class mainframe extends Component
{
    public $pageTitle;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $pageTitle)
    {
        //
        $this->pageTitle = $pageTitle;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.layouts.mainframe');
    }
}
