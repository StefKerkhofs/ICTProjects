<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trip;

/**
 * Class AdminContactController
 * @package App\Http\Controllers
 * @author Sasha Van de Voorde and Andrey Sereda
 */
class AdminContactController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     * The updateContact function will update the contacts of the trips and return a page redirect with a succes message
     */
    public function updateContact(Request $request){

        $aInputData = $request->all();
        $aInputKeys = array_keys($aInputData);
        $aInputValues = array_values($aInputData);
        $iCounter = 0;
        foreach ($aInputValues as $oInputValue){
            Trip::where('trip_id', $aInputKeys[$iCounter])->update(['trip_contact' => $oInputValue]);
            $iCounter++;
        }
        return redirect('admin/contact')->with('message', 'De contactpersoon is veranderd');

    }

    /**
     * showContact will return the contact view
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     *
     */
    public function showContact(){

        return view('admin.contact.contact');

    }


}
