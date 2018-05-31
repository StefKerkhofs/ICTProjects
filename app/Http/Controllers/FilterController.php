<?php

namespace App\Http\Controllers;

use App\Traveller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        if (\App\User::where('id',\Illuminate\Support\Facades\Auth::id())->value('function') !== 'Begeleider')
        {
            return redirect('/info');
        }
        //check if user is logged in
        if(Auth::check()) {
            //find the mentor's user_id
            $id = Auth::id();

            //find the checked filters
            $afilters = $request->all();
            array_shift($afilters);

            //find the mentor's trip_id
            $tripid = DB::table('travellers')
                ->where('user_id', $id)
                ->select('trip_id')
                ->get();
            $tripid = json_decode(json_encode($tripid), true);

            //find all travellers with the same trip_id
            $afilteredUserList = DB::table('travellers')
                ->join('studies', 'travellers.study_id', '=', 'studies.study_id')
                ->join('trips', 'travellers.trip_id', '=', 'trips.trip_id')
                ->where('travellers.trip_id', $tripid[0])
                ->get();
            $afilteredUserList = json_decode(json_encode($afilteredUserList), true);

            //return travellers and selected filters to list
            return view('user.filter.filter', [
                'afilteredUserList' => $afilteredUserList,
                'afilters' => $afilters,
                'tripid' => $tripid
            ]);
        }
        //if user is not logged in
        return redirect('/');
    }
}