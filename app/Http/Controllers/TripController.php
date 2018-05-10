<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Trip;

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
    public function createTrip()
    {
        return view('admin.TripForm');
    }
    /**
     * @param Trip $trip
     */
    public function editTrip(Request $request)
    {
        return redirect('admin/trips');
    }
}
