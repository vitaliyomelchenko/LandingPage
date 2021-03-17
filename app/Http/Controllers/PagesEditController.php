<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use Illuminate\Support\Facades\Storage;

class PagesEditController extends Controller
{
    public function execute(Page $page, Request $request)
    {
        if($request->isMethod('delete'))
        {
//            dd($page->img);
            $page->delete();
            Storage::delete('public/image/'.$page->img);
            return redirect()->route('home')->with('status', 'The page has deleted');
        }

        if($request->isMethod('post'))
        {
            $data = $request->except('_token');
//            dd($data);
            $request->validate([
                'name'=>'required|max:255',
                'alias'=>'required|max:255|unique:pages,alias,'.$page->id,
                'text'=>'required'
            ]);

            //загрузка файла на сервер, если загружен новое изображение
            if($request->hasFile('img'))
            {
                //store on the server
                $request->img->storeAs('public/image', $request->file('img')->getClientOriginalName());
                $data['img'] = $request->file('img')->getClientOriginalName();

            }
            //если изображение старое
            else{
                $data['img'] = $data['old_images'];
            }

            $page->fill($data);
            if($page->update())
            {
                return redirect()->route('page', ['alias'=>$data['alias']]);
            }


//            $page->name = $data['name'];
//            $page->alias = $data['alias'];
//            $page->text = $data['text'];
//            $page->img = $data['img'];
//            $page->save();
//
//            return redirect()->route('home');
        }


        $old = $page->toArray();
        if(view()->exists('components.admin.pages_edit'))
        {
            return view('components.admin.pages_edit', ['title'=>'Edit Page', 'old'=>$old]);
        }

    }
}
