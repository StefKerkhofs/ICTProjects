<?php

namespace App\Http\Controllers;

use App\menu;

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

        return view()->share('navbars', $navbars);
    }
}
