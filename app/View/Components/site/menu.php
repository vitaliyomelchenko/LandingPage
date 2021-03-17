<?php

namespace App\View\Components\site;

use Illuminate\View\Component;

class menu extends Component
{
    public $menu;

    /**
     * Create a new component instance.
     *
     * @param $title
     */
    public function __construct($menu)
    {

        $this->menu = $menu;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.site.menu', [
            'menu'=>$this->menu,

        ]);
    }

}
