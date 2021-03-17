<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function execute()
    {
        if(view()->exists('components.admin.pages'))
        {
            $pages = Page::all();
            $data = [
                'title'=>'Pages',
                'pages'=>$pages,
            ];
            return view('components.admin.pages', $data);
        }
        else
        {
            abort(404);
        }
    }
}
