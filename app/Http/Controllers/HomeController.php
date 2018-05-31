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
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     *
     * Show the application dashboard.
     * Get dynamic menu and show it to the user.
     */
    public static function index()
    {
        try
        {
            $afilteredUserList=DB::table('menus')
                ->join('pages', 'menus.page_id', '=', 'pages.page_id')
                ->select('menus.menu_name', 'pages.page_name')
                ->get();
            $page = json_decode(json_encode($afilteredUserList),true);

            return view()->make('user.layout.headbar', ['navbars' => $page]);
        }
        catch (\Exception $e)
        {
            return view()->share(back(), ['content' => $e->getMessage()]);
        }
    }



    /*public function CheckUser()
    {
        $user = User::where('user_id', Auth::id())->get();

        $level = $user->function;

        return view()->make('user.layout.headbar', ['level' => $level]);
    }*/

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     *
     * Go to the login page.
     */

    public function create()
    {
        return view('guest.login');
    }

    /**
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     *
     * Log in function.
     * Checks if the user is in the database.
     * If there is something wrong go back to the login page.
     * If the user logs in with the right email and password,
     * go to the info page.
     */

    public function store()
    {
        try
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
    catch (\Exception $e) {
        return back();
        }
    }

    /**
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     *
     * Logout the user and sends him back to the info page.
     */

    public function destroy()
    {
        Auth::logout();

        return redirect('/info');
    }
}
