<?php

namespace App\Http\Controllers;

use App\Traveller;

use Illuminate\Http\Request;

/**
 * Class FilterController
 * @package App\Http\Controllers
 * @author Michiel Guilliams
 */

class FilterController extends Controller
{
    public function index(){
        $afilteredUserList=array();
        $afilters=array();
        return view('user.filter.filter', [
            'afilteredUserList' => $afilteredUserList,
            'afilters'=>$afilters
        ]);
    }
    public function getFilteredTraveller(Request $request)
    {
        //$id = Auth::id();
        $afilters=$request->all();
        array_shift($afilters);
        $tripId=  Traveller::where('user_id','1'/*id*/)->pluck('trip_id');
        $afilteredUserList= Traveller::where('trip_id','1'/*$tripId*/)->get();
        return view('user.filter.filter', [
            'afilteredUserList' => $afilteredUserList,
            'afilters'=>$afilters
        ]);
    }


}