<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trip;

class AdminContactController extends Controller
{
    public function updateContact(Request $request){

        $aInputData = $request->all();
        $aInputKeys = array_keys($aInputData);
        $aInputValues = array_values($aInputData);
        $iCounter = 0;
        foreach ($aInputValues as $oInputValue){
            Trip::where('trip_name', $aInputKeys[$iCounter])->update(['trip_contact' => $oInputValue]);
            $iCounter++;
        }
        return redirect('admin/contact')->with('message', 'De contactpersoon is veranderd');

    }

    public function showContact(){

        return view('admin.contact.contact');

    }


}
