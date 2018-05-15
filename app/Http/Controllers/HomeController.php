<?php

namespace App\Http\Controllers;

use App\menu;
use Illuminate\Http\Request;

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
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$oMenu = menu::all();
        //$aMenuItems = "info";
        return view('user.info.info');
    }
}
