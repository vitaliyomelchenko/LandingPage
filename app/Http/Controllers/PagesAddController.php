<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class PagesAddController extends Controller
{
    public function execute(Request $request)
    {
        if($request->isMethod('post'))
        {
            $page = new Page();

             $data = $request->except('_token');
             $request->validate([
                 'name'=>'required|unique:pages|max:255',
                 'alias'=>'required|max:255|unique:pages',
                 'text'=>'required|max:255',
                 'img'=>'required|image',
             ]);

             if($request->hasFile('img'))
             {
                 //store on the server
                 $request->img->storeAs('public/image', $request->file('img')->getClientOriginalName());

                 //edit to database
                 $page->name = $data['name'];
                 $page->alias = $data['alias'];
                 $page->text = $data['text'];
                 $page->img = $request->img->getClientOriginalName();
                 $page->save();
             }
             else{
                 return redirect()->back()->with('status', 'Файла нет!!!');
             }

            return redirect()->back()->with('status', "It's done...");
        }

        if(view()->exists('components.admin.pages_add'))
        {
            return view('components.admin.pages_add', ['title'=>'New Page']);
        }
        else{
            abort(404);
        }
    }
}
