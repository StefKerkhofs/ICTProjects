<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class EditTravellerController extends Controller
{
    public function SearchTravellerQuery(Request $request){
        $aTravellers = DB::table('travellers')
            ->join('studies', 'travellers.study_id', '=', 'studies.study_id')
            ->select('travellers.*', 'studies.name')
            ->where('travellers.lastname', '=', $request->post('lastname'))
            ->get();
        return view('user.edit_traveller.searchTraveller', ['aTravellers' => $aTravellers]);
    }
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
        $aTravellers = DB::table('travellers')
            ->join('users', 'travellers.user_id', '=', 'users.id')
            ->where('travellers.user_id', '=', $user_id)
            ->get();
        return view('user.edit_traveller.editTraveller', ['aTravellers' => $aTravellers]);
    }
}
