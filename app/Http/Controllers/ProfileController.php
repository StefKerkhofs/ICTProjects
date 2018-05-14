<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function editprofile()
    {
        return view('user.profile.editprofile');
    }
    public function profile()
    {
        return view('user.profile.profile');
    }
}
