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
        return view('user.profile.profile');
    }
    public function profileEdit()
    {
        return view('user.profile.profileEdit');
    }
    public function searchStudentEdit()
    {
        $aTravellers = DB::table('travellers')
            ->join('studies', 'travellers.study_id', '=', 'studies.study_id')
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