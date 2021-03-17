<?php

namespace App\View\Components\site;

use Illuminate\View\Component;

class page extends Component
{
    public $data;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($data)
    {

        $this->data = $data;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.site.page',
        [
            'data'=> $this->data,
        ]);
    }
}
