<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;

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
        $aPageList = Page::where('page_type', 'pdf')->get();
        return view('admin.pdf.pdf', array(
            'aPageList' => $aPageList,
        ));
    }

    public function updateContent(Request $request, UploadedFile $pdf){
        $iPageId = $request->post('pageSelector');
        $pdf->store('public');
        return $pdf;
    }
}
