<?php

namespace App\Http\Controllers;

use App\Page;
use App\Trip;
use App\TripsModel;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class GuestPagesController extends Controller
{
    //
    public function showPage($page)
    {
        $sContent="";
        if ($page == "contact"){
           $aActiveTrips = Trip::where('is_active', true)->get();

            return view('guest.contact', [
                'aActiveTrips' => $aActiveTrips
            ]);
        }
        else{
            try{
            $oPageData = Page::where('page_name', $page)->first();
            if ($oPageData->page_type == 'pdf'){
                $sContent = '<embed src="https://drive.google.com/viewerng/viewer?embedded=true&url='.$oPageData->page_content.' width="500" height="375">';
            }
            else{
                $sContent = $oPageData->page_content;
            }
        }
        catch (QueryException $e){
            $sContent = 'Error 404, page not found';
            }
            return view('guest.contentpage', [
                'sContent' => $sContent
            ]);
        }






    }
}
