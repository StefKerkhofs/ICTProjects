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
        else{
            $sType="";
            try{
                $oPageData = Page::where('page_name', $page)->first();
                    $sContent = $oPageData->page_content;
                    $sType = $oPageData->page_type;
        }
            catch (QueryException $e){
                $sContent = 'Error 404, page not found';
            }
            catch (\Exception $e){
                $sContent = $e->getMessage();
            }
            return view('guest.contentpage', [
                'sContent' => $sContent,
                'sType' => $sType
            ]);
        }






    }
}
