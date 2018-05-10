<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trip;

/**
 * Class TripController
 * @package App\Http\Controllers
 * @author Sasha Van de Voorde
 */

class TripController extends Controller
{
    /**
     * function getTrips()
     * @return array $aTrips
     */
    public function getTrips()
    {
        $oTripContent = Trip::get();
        return view('admin.trip',array('oTripContent' => $oTripContent));
    }

    /**
     * function createTrip()
     *
     * @description
     * @param string $sName
     * @param int $iYear
     * @param int $iPrice
     * @param bool $bActive
     *
     * @return bool $bSucces
     * @return view $oTripView
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
        Trip::insert(['name' => $sName,'year' => $iYear, 'price' => $iPrice, 'is_active' => $bActive]);
        return view('admin.trip');    }
    /**
     * @param Trip $trip
     */
    public function editTripForm($trip_id = null)
    {
        if($trip_id == null){
            return view('admin.TripForm',array('oFormValues', null));
        }
        $oFormValues = Trip::where('trip_id', $trip_id)->first();
        return view('admin.TripForm', array(
            'oFormValues' => $oFormValues,
        ));
    }
    public function editTrip(Request $request)
    {
        $sName = $request->post('sNameTrip');
        $iYear = $request->post('iYearTrip');
        $iPrice = $request->post('iPriceTrip');
        $bActive = $request->post('bActive');
        Trip::where('name', 'sNameTrip')->update(['name' => $sName,'year' => $iYear, 'price' => $iPrice, 'is_active' => $bActive]);
        return view('admin.trip');

    }
}
