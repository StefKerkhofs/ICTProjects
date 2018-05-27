<?php

namespace App\Http\Controllers;

use App\Page;
use App\Trip;
use App\TripsModel;
use Illuminate\Database\QueryException;

class GuestPagesController extends Controller
{
    //
    public function showPage($page)
    {
        $sContent="";
        if ($page == "contact"){
            try{
                $aActiveTrips = Trip::where('is_active', true)->get();
                return view('guest.contact', [
                    'aActiveTrips' => $aActiveTrips
                ]);
            }
            catch (QueryException $e){
                $sContent = $e->getMessage();
                return view('guest.contentpage', [
                    'sContent' => $sContent
                ]);
            }

        }
        elseif ($page == "Home"){
            $sContent = "test voor de header";
        }
        else{
            try{
<<<<<<< HEAD
            $oPageData = Page::where('page_name', $page)->first();
            //if ($oPageData->page_type == 'pdf'){
              //  $sContent = '<embed src="https://drive.google.com/viewerng/viewer?embedded=true&url='.$oPageData->page_content.' width="500" height="375">';
            //}
            //else{
              //  $sContent = $oPageData->page_content;
            //}
=======
                $oPageData = Page::where('page_name', $page)->first();
                if ($oPageData->page_type == 'pdf'){
                    $sContent = '<embed src="https://drive.google.com/viewerng/viewer?embedded=true&url='.$oPageData->page_content.' width="500" height="375">';
                }
                else{
                    $sContent = $oPageData->page_content;
                }
>>>>>>> 8f82aaa9c67b6bcde7a48606f5693fa76508eb6d
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
