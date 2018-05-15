<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trip;

class AdminContactController extends Controller
{
    public function updateContact(Request $request){

        $aInputData = $request->all();
        foreach ($aInputData as $oInputData){
            Trip::where('trip_name', $oInputData->)
        }


    }

    public function showContact(){

        return view('admin.contact.contact');

    }


}
