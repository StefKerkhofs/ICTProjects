<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class EditTravellerController extends Controller
{
    private $user_id;
    public function searchTraveller()
    {
        $aTravellers = DB::table('travellers')
            ->join('studies', 'travellers.study_id', '=', 'studies.study_id')
            ->select('travellers.*', 'studies.name')
            ->get();
        return view('user.edit_traveller.searchTraveller', ['aTravellers' => $aTravellers]);
    }
    public function editTraveller($user_id)
    {
        $this->user_id = $user_id;
        $aTravellers = DB::table('travellers')
            ->join('users', 'travellers.user_id', '=', 'users.id')
            ->where('travellers.user_id', '=', $user_id)
            ->get();
        return view('user.edit_traveller.editTraveller', ['aTravellers' => $aTravellers]);
    }
    public function editTravellerPOST(Request $aRequest)
    {
        DB::table('travellers')
            ->where('travellers.user_id', '=', $this->user_id)
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
                //'email'             => $aRequest->post('txtEmail'),
                'phone'             => $aRequest->post('txtPhone'),
                'emergency_phone_1' => $aRequest->post('txtEmergencyPhone1'),
                'emergency_phone_2' => $aRequest->post('txtEmergencyPhone2'),
                'medical_info'      => $aRequest->post('txtMedicalIssue'),
                'MedicalIssue'      => $aRequest->post('txtMedicalInfo'),
            ]
        );

        $aTravellers = DB::table('travellers')
            ->join('studies', 'travellers.study_id', '=', 'studies.study_id')
            ->select('travellers.*', 'studies.name')
            ->get();
        return view('user.edit_traveller.searchTraveller', ['aTravellers' => $aTravellers]);
    }
}
