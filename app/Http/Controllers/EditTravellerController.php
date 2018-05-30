<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class EditTravellerController extends Controller
{
    /*
     * Search Table
     */
    public function SearchTravellersQuery(Request $request){
        $aTravellers = DB::table('travellers')
            ->join('studies', 'travellers.study_id', '=', 'studies.study_id')
            ->select('travellers.*', 'studies.name')
            ->where('travellers.lastname', '=', $request->post('lastname'))
            ->get();
        return view('user.edit_traveller.searchTravellers', ['aTravellers' => $aTravellers]);
    }
    /*
     * searchTravellers page
     */
    public function searchTravellers()
    {
        //check if user is logged in
        if(Auth::check()){
            try
            {
                //find the mentor's user_id
                $iMentor_id = Auth::id();

                //find the mentor's trip_id
                $oTripIDMentor = DB::table('travellers')
                    ->where('travellers.user_id', '=', $iMentor_id)
                    ->select('travellers.trip_id')
                    ->first();
                $aTripIDMentor = json_decode(json_encode($oTripIDMentor),true);

                //find all travellers with the same trip_id, except for the mentor
                $oTravellers = DB::table('travellers')
                    ->join('studies', 'travellers.study_id', '=', 'studies.study_id')
                    ->join('trips', 'travellers.trip_id', '=', 'trips.trip_id')
                    ->where('travellers.trip_id', '=', $aTripIDMentor)
                    ->where('travellers.user_id', '!=', $iMentor_id)
                    ->orderBy('travellers.lastname')
                    ->select('travellers.*', 'studies.name')
                    ->get();

                //return travellers to view
                return view('user.edit_traveller.searchTravellers', ['aTravellers' => $oTravellers]);
            }
            catch (\Exception $exception)
            {
                return $exception;
            }
        }
        //if user not logged in, return home view
        return redirect('/');
    }
    /*
     * editTraveller page
     */
    public function editTraveller(Request $aRequest, $user_id)
    {
        $aTravellers = DB::table('travellers')
            ->join('users', 'travellers.user_id', '=', 'users.id')
            ->where('travellers.user_id', '=', $user_id)
            ->get();
        //echo $aRequest;
        return view('user.edit_traveller.editTraveller', ['aTravellers' => $aTravellers]);
    }
    /*
     * update selected Traveller in database
     */
    public function updateTraveller(Request $aRequest, $user_id)
    {
        DB::table('travellers')
            ->join('users', 'travellers.user_id', '=', 'users.id')
            ->where('travellers.user_id', '=', $user_id)
            ->update(
            [
                'lastname'          => $aRequest->post('txtLastName'),
                'firstname'         => $aRequest->post('txtFirstName'),
                'sex'               => $aRequest->post('txtSex'),
                'birthdate'         => $aRequest->post('txtBirthdate'),
                'birthplace'        => $aRequest->post('txtBirthplace'),
                'nationality'       => $aRequest->post('txtNationality'),
                'address'           => $aRequest->post('txtAddress'),
                'city'              => $aRequest->post('txtCity'),
                'country'           => $aRequest->post('txtCountry'),
                'email'             => $aRequest->post('txtEmail'),
                'phone'             => $aRequest->post('txtPhone'),
                'emergency_phone_1' => $aRequest->post('txtEmergencyPhone1'),
                'emergency_phone_2' => $aRequest->post('txtEmergencyPhone2'),
                'MedicalIssue'      => $aRequest->post('txtMedicalIssue'),
                'medical_info'      => $aRequest->post('txtMedicalInfo'),
            ]
        );

        return redirect('/searchTravellers');
    }
}
