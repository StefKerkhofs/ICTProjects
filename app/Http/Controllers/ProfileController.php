<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Traveller;
use App\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile()
    {
        //check if user is logged in
        if(Auth::check()) {
            //find the user's user_id
            $id = Auth::id();

            //find the user's traveller_id
            $oTraveller = DB::table('travellers')
                ->join('users', 'travellers.user_id', '=', 'users.id')
                ->where('travellers.user_id', '=', $id)
                ->first();
            $oTraveller = json_decode(json_encode($oTraveller),true);

            return view('user.profile.profile', ['traveller' => $oTraveller]);
        }
        //if user is not logged in
        return redirect('/');
    }
    public function profileEdit()
    {
        //check if user is logged in
        if(Auth::check()) {
            //find the user's user_id
            $id = Auth::id();

            //find the user's traveller_id
            $aTravellers = DB::table('travellers')
                ->join('users', 'travellers.user_id', '=', 'users.id')
                ->where('travellers.user_id', '=', $id)
                ->get();
            //echo $aRequest;
            return view('user.profile.profileEdit', ['aTravellers' => $aTravellers]);
        }
        //if user is not logged in
        return redirect('/');
    }

    public function profileUpdate(Request $aRequest)
    {
        //check if user is logged in
        if(Auth::check()) {
            //find the user's user_id
            $id = Auth::id();

            //update the user's profile
            DB::table('travellers')
                ->join('users', 'travellers.user_id', '=', 'users.id')
                ->where('travellers.user_id', '=', $id)
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

            return redirect('/profile');
        }
        //if user is not logged in
        return redirect('/');
    }
}