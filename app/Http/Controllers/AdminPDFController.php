<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminPDFController extends Controller
{
    /**
     * index
     *
     * Get list of pages
     *
     * @author Yoeri op't Roodt
     * @since 2018-05-07
     *
     * @return object $aPageList
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(){
        if (DB::table('users')->where('id', Auth::id())->value('function') !== 'admin')
        {
            return redirect('/');
        }
        $aPageList = Page::where('page_type', 'pdf')->get();
        return view('admin.pdf.pdf', array(
            'aPageList' => $aPageList,
        ));
    }

    /**
     * updateContent
     *
     * @author Yoeri op't Roodt - Sasha Van De Voorde
     * @since 2018-05-07
     *
     * @param Request $request
     */
    public function updateContent(Request $request){
        if (DB::table('users')->where('id', Auth::id())->value('function') !== 'admin')
        {
            return redirect('/');
        }
        $pdf = $request->file('pdf');

        Storage::put('/public/pdf', $pdf);

        Page::where('page_id', $request->post('pageSelector'))->update([
            'page_content' => $pdf->hashName(),
        ]);

        return redirect()->back()->with('message', 'De PDF is opgeslagen');
    }
}
