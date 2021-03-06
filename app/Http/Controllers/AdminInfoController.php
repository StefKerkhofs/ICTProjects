<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

/**
 * Class AdminInfoController
 * @package App\Http\Controllers
 * @author Yoeri op't Roodt
 */

class AdminInfoController extends Controller
{
    /**
     * getInfo
     *
     * Get content of info page and pass to view
     *
     * @author Yoeri op't Roodt
     * @since 2018-05-07
     *
     * @return object $oPageContent
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getInfo(){
        if (DB::table('users')->where('id', Auth::id())->value('function') !== 'admin')
        {
            return redirect('/');
        }
        $oPageContent = Page::where('page_name', 'Info')->first();
        return view('admin.info.info', array(
            'oPageContent' => $oPageContent,
        ));
    }

    /**
     * updateInfo
     *
     * Get the post values and update the info page content
     *
     * @author Yoeri op't Roodt
     * @since 2018-05-07
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updateInfo(Request $request){
        if (DB::table('users')->where('id', Auth::id())->value('function') !== 'admin')
        {
            return redirect('/');
        }
        $sContentString = $request->post('content');
        if (strlen($sContentString) == 0){
            $sContentString = "";
        }
        Page::where('page_name', 'Info')->update(['page_content' => $sContentString]);
        return redirect()->back()->with('message', 'De info pagina is aangepast');
    }
}
