<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trip;

/**
 * Class AdminTripController
 * @package App\Http\Controllers
 * @author Sasha Van de Voorde
 */

class AdminTripController extends Controller
{
    /**@description
     * getTrips gets all the current trips in the database and returns them in view trip
     * function getTrips()
     * @return array $aTrips
     */
    public function getTrips()
    {
        $aTripData = Trip::get();
        return view('admin.trip.overview',[
                'aTripData' => $aTripData
        ]);
    }

    /**
     * function createTrip()
     *
     * @description
     * createTrip adds a new trip to the database
     * @param request $request
     *
     * @return view trip
     */
    public function createTrip(Request $request)
    {
        $sName = $request->post('sNameTrip');
        $iYear = $request->post('iYearTrip');
        $iPrice = $request->post('iPriceTrip');
        $bActive = $request->post('bActive');
        if($bActive == true)
        {
            $bActive = 1;
        }else
            {
                $bActive = 0;
            }
        Trip::insert(['trip_name' => $sName,'trip_year' => $iYear, 'trip_price' => $iPrice, 'is_active' => $bActive]);
        return view('admin.trip.trip');    }

    public function createTripForm()
    {

        return view('admin.trip.addForm');
    }
    /**
     * @param Trip $trip
     */
    public function editTripForm($id)
    {
        $oTripData = Trip::where('trip_id', $id)->first();
        return view('admin.trip.editForm', [
            'oTripData' => $oTripData,
        ]);
    }

    public function editTrip($id,Request $request)
    {
        $sName = $request->post('sNameTrip');
        $iYear = $request->post('iYearTrip');
        $iPrice = $request->post('iPriceTrip');
        $bActive = $request->post('bActive');
        if($bActive == true)
        {
            $bActive = 1;
        }else
        {
            $bActive = 0;
        }
        Trip::where('trip_id', $id)->update(['trip_name' => $sName,'trip_year' => $iYear, 'trip_price' => $iPrice, 'is_active' => $bActive]);
        return redirect('admin/trip');
    }
}
