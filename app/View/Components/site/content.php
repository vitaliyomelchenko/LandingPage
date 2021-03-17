<?php

namespace App\View\Components\site;

use Illuminate\View\Component;
use App\Models\Page;

class content extends Component
{
    /**
     * @var Page
     */
    public $page;
    public $services;
    public $portfolios;
    public $peoples;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($page, $services, $portfolios, $peoples)
    {
        //
        $this->page = $page;
        $this->services = $services;
        $this->portfolios = $portfolios;
        $this->peoples = $peoples;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.site.content',
        [
            'page'=>$this->page,
            'services'=>$this->services,
        ]);
    }
}
