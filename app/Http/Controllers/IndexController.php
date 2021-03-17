<?php

namespace App\Http\Controllers;

use App\Mail\LandingMail;
use Dotenv\Validator;
use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\People;
use App\Models\Service;
use App\Models\Portfolio;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class IndexController extends Controller
{
    public function execute(Request $request)
    {

        //Mail setting
        if($request->isMethod('POST'))
        {
            $request->validate([
                'name'=>'required',
                'email'=>'required|email|max:50',
                'text'=>'required',
            ]);

            $data = $request->all();

           Mail::to('vitaxa000@gmail.com')->send(new LandingMail($data));
           return redirect()->route('home')->with('status', 'Message sent');
        }

        //

        $pages = Page::all();
        $portfolios = Portfolio::all();
        $services = Service::all();
        $peoples = People::all();

        $menu = array();
        foreach (Page::all() as $item)
        {
            $tmp = array('title'=>$item->name, 'alias'=>$item->alias);
            array_push($menu, $tmp);
        }
        $item = ['title'=>'Services', 'alias'=>'service'];
        array_push($menu,$item);

        $item = ['title'=>'Portfolio', 'alias'=>'Portfolio'];
        array_push($menu,$item);

        $item = ['title'=>'Clients', 'alias'=>'clients'];
        array_push($menu,$item);

        $item = ['title'=>'Team', 'alias'=>'team'];
        array_push($menu,$item);

        $item = ['title'=>'Contacts', 'alias'=>'contact'];
        array_push($menu,$item);

//        dump($services);

        return view('components.site.layout', [
            'menu'=>$menu,
            'page'=>$pages,
            'services'=>$services,
            'portfolios'=>$portfolios,
            'peoples'=>$peoples,
        ]);


    }
}
