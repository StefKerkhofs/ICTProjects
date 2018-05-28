<?php

namespace App\Http\Controllers;

use App\menu;
use App\Page;
use App\Profile;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     */
    public static function index()
    {
        $navbars = menu::orderBy('menu_id')->get();

        $menu = [];

        foreach ($navbars as $navbar)
        {
            $page = Page::where('page_id', $navbar->page_id)->get();
        }

        return view()->make('user.layout.headbar', ['navbars' => $navbars, 'page' => $page]);
    }

    public function create()
    {
        return view('guest.login');
    }

    public function store()
    {
       if (! auth()->attempt(request(['email', 'password'])))
       {
           $user = User::where(['email'=> request('email'), 'password' => request('password')])->get();

           if (! auth()->loginUsingId($user->id))
           {
               return back();
           }
           return view('user.info.info');
       }

       return view('user.info.info');
    }
}
