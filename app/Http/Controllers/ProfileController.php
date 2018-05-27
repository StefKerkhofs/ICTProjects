<?php

namespace App\Http\Controllers;

use App\Traveller;
use App\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function getTravellers()
    {
        //$Travellers = DB::table('Traveller')->where("user_id", $traveller);
        $Travellers = [
            'firstname' => 'Joren',
            'lastname' => 'Meynen',
            'major' => 'ICT'
        ];
        return $Travellers;


    }
    public function profile()
    {
        return view('user.profile.profile');
    }
    public function profileEdit()
    {
        return view('user.profile.profileEdit');
    }
    public function searchStudentEdit()
    {
        $aTravellers = Traveller::get();
        return view('user.profile.searchStudentEdit', ['aTravellers' => $aTravellers]);
    }
    public function editSearchedStudent()
    {
        return view('user.profile.editSearchedStudent');
    }
}