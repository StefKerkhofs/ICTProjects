<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile()
    {
        if(Auth::check()) {
            $id = Auth::id();

            $aUser = DB::select('select * from travellers where user_id = :id', ['id' => $id]);
            $oTraveller = $aUser[0];
            $aTravellerData = array();
            $aTravellerData['firstname'] = $oTraveller->firstname;
            $aTravellerData['lastname'] = $oTraveller->lastname;
            $aTravellerData['city'] = $oTraveller->city;
            $aTravellerData['country'] = $oTraveller->country;
            $aTravellerData['address'] = $oTraveller->address;
            $aTravellerData['sex'] = $oTraveller->sex;
            $aTravellerData['email'] = $oTraveller->email;
            $aTravellerData['phone'] = $oTraveller->phone;
            $aTravellerData['emergencyPhone1'] = $oTraveller->emergency_phone_1;
            $aTravellerData['emergencyPhone2'] = $oTraveller->emergency_phone_2;
            $aTravellerData['nationality'] = $oTraveller->nationality;
            $aTravellerData['birthdate'] = $oTraveller->birthdate;
            $aTravellerData['birthplace'] = $oTraveller->birthplace;
            $aTravellerData['medicalInfo'] = $oTraveller->medical_info;

            return view('user.profile.profile', ['traveller' => $aTravellerData]);
        }
        return view('user.profile.profile');
    }
    public function profileEdit()
    {
        return view('user.profile.profileEdit');
    }
    public function searchStudentEdit()
    {
        return view('user.profile.searchStudentEdit');
    }
    public function editSearchedStudent()
    {
        return view('user.profile.editSearchedStudent');
    }

}
