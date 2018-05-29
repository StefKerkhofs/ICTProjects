<?php

namespace App\Http\Controllers;

use App\Traveller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/**
 * Class FilterController
 * @package App\Http\Controllers
 * @author Michiel Guilliams
 */

class FilterController extends Controller
{
    public function getFilteredTraveller(Request $request)
    {
        //$id = Auth::id();
        $afilters=$request->all();
        array_shift($afilters);

        $tripid=DB::table('travellers')
            ->where('user_id','2'/*id*/)
            ->select('trip_id')
            ->get();
        $tripid = json_decode(json_encode($tripid),true);

        $afilteredUserList=DB::table('travellers')
            ->join('studies', 'travellers.study_id', '=', 'studies.study_id')
            ->join('trips', 'travellers.trip_id', '=', 'trips.trip_id')
            ->where('travellers.trip_id',$tripid[0])
            ->get();
        $afilteredUserList = json_decode(json_encode($afilteredUserList),true);
        return view('user.filter.filter', [
            'afilteredUserList' => $afilteredUserList,
            'afilters'=>$afilters,
            'tripid'=>$tripid
        ]);
    }


}