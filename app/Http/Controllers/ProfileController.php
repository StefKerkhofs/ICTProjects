<?php

namespace App\Http\Controllers;

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
        return view('user.profile.searchStudentEdit');
    }
    public function editSearchedStudent()
    {
        return view('user.profile.editSearchedStudent');
    }
}