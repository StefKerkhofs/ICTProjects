<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Traveller;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile()
    {
        if(Auth::check()) {
            $id = Auth::id();

            $oTraveller = DB::table('travellers')
                ->join('users', 'travellers.user_id', '=', 'users.id')
                ->where('travellers.user_id', '=', $id)
                ->first();
            $oTraveller = json_decode(json_encode($oTraveller),true);

            return view('user.profile.profile', ['traveller' => $oTraveller]);
        }
        return view('user.profile.profile');
    }
    public function profileEdit()
    {
        return view('user.profile.profileEdit');
    }
}