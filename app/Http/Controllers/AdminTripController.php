<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trip;
use App\Page;
use App\Menu;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

/**
 * Class AdminTripController
 * @package App\Http\Controllers
 * @author Sasha Van de Voorde
 */

class AdminTripController extends Controller
{
    /**
     * getTrips
     *
     * getTrips gets all the current trips in the database and returns them in a view trip
     * @return view overview
     * @return array $aTripData
     */
    public function getTrips()
    {
        if (DB::table('users')->where('id', Auth::id())->value('function') !== 'admin')
        {
            return redirect('/');
        }
        $aTripData = Trip::get();
        return view('admin.trip.overview',[
                'aTripData' => $aTripData
        ]);
    }

    /**
     * createTrip
     *
     * createTrip adds a new trip to the database
     * @param request $request
     *
     * @return view trip
     * @return message succes
     */
    public function createTrip(Request $request)
    {
        if (DB::table('users')->where('id', Auth::id())->value('function') !== 'admin')
        {
            return redirect('/');
        }
        $validatedData = $request->validate([
            'sNameTrip' => 'required',
            'iYearTrip' => 'required',
            'iPriceTrip' => 'required',
        ],$this->messages());
        $sName = $request->post('sNameTrip');
        $iYear = $request->post('iYearTrip');
        $iPrice = $request->post('iPriceTrip');
        $bActive = $request->post('bActive');
        if($bActive == true)
        {
            $bActive = 1;
        }
        else
            {
                $bActive = 0;
            }
        Page::insert(['page_name' => $sName,'page_content' => '' ,'page_type' => 'pdf']);
        $iId = Page::where('page_name', $sName)->value('page_id');
        Trip::insert(['page_id' => $iId,'trip_name' => $sName,'trip_year' => $iYear, 'trip_price' => $iPrice,'trip_contact' => '', 'is_active' => $bActive]);
        Menu::insert([
            'page_id' => $iId,
            'menu_name' => $sName,
        ]);
        /*
            $table->increments('menu_id');
            $table->integer('page_id')->unsigned();
            $table->string('menu_name');
        */
        return redirect('admin/trip')->with('message', 'De reis is opgeslagen');
    }

    /**
     * messages is used by the laravel validator to override the error messages
     * @return array
     */
    public function messages()
    {
        return [
            'sNameTrip.required' => 'De reis naam mag niet leeg zijn.',
            'iYearTrip.required'  => 'Het jaar dat de reis doorgaat mag niet leeg zijn.',
            'iPriceTrip.required'  => 'De prijs van de reis mag niet leeg zijn',


        ];
    }
    /**
     * createTripForm
     *
     * Gets a form view
     * @return View addForm
     */
    public function createTripForm()
    {
        if (DB::table('users')->where('id', Auth::id())->value('function') !== 'admin')
        {
            return redirect('/');
        }
        return view('admin.trip.addForm');
    }
    /**
     * editTripForm
     *
     * searches the database for a trip with a given id, then returns an editForm view
     * @param integer $id
     * @return view editForm
     */
    public function editTripForm($id)
    {
        if (DB::table('users')->where('id', Auth::id())->value('function') !== 'admin')
        {
            return redirect('/');
        }
        $oTripData = Trip::where('trip_id', $id)->first();
        return view('admin.trip.editForm', [
            'oTripData' => $oTripData,
        ]);
    }

    /**
     * editTrip
     *
     * Updates a trip in the database with values from a form by a given id
     * @param $id
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function editTrip($id,Request $request)
    {
        if (DB::table('users')->where('id', Auth::id())->value('function') !== 'admin')
        {
            return redirect('/');
        }
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
        return redirect('admin/trip')->with('message', 'De reis is aangepast');
    }
}
