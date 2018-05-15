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
        return view('user.filter.filter');
    }
    public function getFilteredTraveller(Request $request,$tripId)
    {
        $afilters=$request->all();

        $afilteredUserList= Traveller::where('trip_id',$tripId)->get();
        return view('user.filter.filter', [
            'afilteredUserList' => $afilteredUserList,
            'afilters'=>$afilters
        ]);
    }


}