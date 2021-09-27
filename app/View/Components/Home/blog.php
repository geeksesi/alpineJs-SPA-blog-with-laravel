<?php

namespace App\View\Components\Home;

use Illuminate\View\Component;

class blog extends Component
{
    public $latest;
    public $popular;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($latest, $popular)
    {
        $this->latest = $latest;
        $this->popular = $popular;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view("components.home.blog");
    }
}
