<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
        $afilteredUserList=DB::table('menus')
            ->join('pages', 'menus.page_id', '=', 'pages.page_id')
            ->select('menus.menu_name', 'pages.page_name')
            ->get();
        $page = json_decode(json_encode($afilteredUserList),true);

        return view()->make('user.layout.headbar', ['navbars' => $page]);
    }

    /*public function CheckUser()
    {
        $user = User::where('user_id', Auth::id())->get();

        $level = $user->function;

        return view()->make('user.layout.headbar', ['level' => $level]);
    }*/

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
           return redirect('/info');
       }

        return redirect('/info');
    }

    public function destroy()
    {
        Auth::logout();

        return redirect('/info');
    }
}
