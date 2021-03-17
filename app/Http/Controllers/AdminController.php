<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function execute()
    {
        if(view()->exists('components.admin.index'))
        {
            $data = ['title'=>'Admin'];
            return view('components.admin.index', $data);
        }
    }
}
