<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function execute($alias)
    {
        if(!$alias)
        {
            abort(404);
        }

        if(view()->exists('components.site.page'))
        {
            $page = Page::where('alias', $alias)->first();
            $data = [
                'title'=>$page->name,
                'page'=>$page,
            ];

            return view('components.site.page',
            [
                'data' => $data,
            ]);
        }
        else
        {
            abort(404);
        }
    }
}
