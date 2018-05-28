<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Traveller;
use App\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile()
    {
        if(Auth::check()) {
            $id = Auth::id();

            $oTraveller = Traveller::where('user_id', $id)->first();
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
    public function searchStudentEdit(Request $request)
    {
        $afilters = $request->all();
        array_shift($afilters);
        $tripid=DB::table('travellers')
            ->where('user_id','1'/*id*/)
            ->select('trip_id')
            ->get();
        $tripid = json_decode(json_encode($tripid),true);

        $aTravellers = DB::table('travellers')
            ->join('studies', 'travellers.study_id', '=', 'studies.study_id')
            ->join('trips', 'travellers.trip_id', '=', 'trips.trip_id')
            ->where('travellers.trip_id',$tripid[0])
            ->select('travellers.*', 'studies.name')
            ->get();
        return view('user.profile.searchStudentEdit', ['aTravellers' => $aTravellers]);
    }
    public function editSearchedStudent()
    {
        $aTravellers = DB::table('travellers')
            //->join('users', 'travellers.user_id', '=', 'users.id')
            ->get();
        return view('user.profile.editSearchedStudent', ['aTravellers' => $aTravellers]);
    }
}