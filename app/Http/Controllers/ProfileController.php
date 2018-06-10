<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Traveller;
use App\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * @author Robin Machiels
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|\Illuminate\View\View
     *
     * Shows a Travellers profile
     * Checks if the user is logged in
     * Find the data of that user in the travellers table
     * Send the data to the view
     * If there is something wrong redirect to the homepage
     */
    public function profile()
    {
        $sUserLastname = \App\Traveller::where('user_id',\Illuminate\Support\Facades\Auth::id())->value('lastname');
        if ($sUserLastname == null){
            return redirect('/');
        }

        //check if user is logged in
        if(Auth::check()) {
            //find the user's user_id
            $id = Auth::id();

            //find the user's traveller_id
            $oTraveller = DB::table('travellers')
                ->join('users', 'travellers.user_id', '=', 'users.id')
                ->where('travellers.user_id', '=', $id)
                ->first();
            $oTraveller = json_decode(json_encode($oTraveller),true);

            return view('user.profile.profile', ['traveller' => $oTraveller]);
        }

        //if user is not logged in
        return redirect('/');
    }

    /**
     * @author Joren Meynen
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|\Illuminate\View\View
     *
     * Shows a traveller's profile ready to be edited
     * Checks if a user is logged in
     * Find the data of that user in the travellers table
     * Send the data to the view
     * If there is something wrong redirect to the homepage
     */
    public function profileEdit()
    {
        $sUserLastname = \App\Traveller::where('user_id',\Illuminate\Support\Facades\Auth::id())->value('lastname');
        if ($sUserLastname == null){
            return redirect('/');
        }

        //check if user is logged in
        if(Auth::check()) {
            //find the user's user_id
            $id = Auth::id();

            //find the user's traveller_id
            $aTravellers = DB::table('travellers')
                ->join('users', 'travellers.user_id', '=', 'users.id')
                ->where('travellers.user_id', '=', $id)
                ->get();
            //echo $aRequest;
            return view('user.profile.profileEdit', ['aTravellers' => $aTravellers]);
        }
        //if user is not logged in
        return redirect('/');
    }

    /**
     * @author Joren Meynen
     * @param Request $aRequest
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     *
     * Updates the profile of a traveller
     *
     * Check if the user is logged in
     * Validate the form
     * Update the data
     * Redirect to the profile
     * If there is something wrong redirect to the homepage
     */
    public function profileUpdate(Request $aRequest)
    {
        $sUserLastname = \App\Traveller::where('user_id',\Illuminate\Support\Facades\Auth::id())->value('lastname');
        if ($sUserLastname == null){
            return redirect('/');
        }

        //check if user is logged in
        if(Auth::check()) {

            $aRequest->validate([
                'txtLastName' => 'required',
                'txtFirstName' => 'required',
                'txtSex' => 'required',
                'txtBirthdate' => 'required|date_format:d/m/Y',
                'txtBirthplace' => 'required',
                'txtNationality' => 'required',
                'txtAddress' => 'required',
                'txtCity' => 'required',
                'txtCountry' => 'required',

                'txtEmail' => [ 'required', 'string', 'email', 'max:255' /*, 'unique:users,email' */],
                'txtPhone' => 'required',
                'txtEmergencyPhone1' => 'required',
                'txtMedicalIssue' => 'required',
            ],$this->messages());

            //find the user's user_id
            $id = Auth::id();

            //update the user's profile
            DB::table('travellers')
                ->join('users', 'travellers.user_id', '=', 'users.id')
                ->where('travellers.user_id', '=', $id)
                ->update(
                    [
                        'lastname'          => $aRequest->post('txtLastName'),
                        'firstname'         => $aRequest->post('txtFirstName'),
                        'sex'               => $aRequest->post('txtSex'),
                        'birthdate'         => $aRequest->post('txtBirthdate'),
                        'birthplace'        => $aRequest->post('txtBirthplace'),
                        'nationality'       => $aRequest->post('txtNationality'),
                        'address'           => $aRequest->post('txtAddress'),
                        'city'              => $aRequest->post('txtCity'),
                        'country'           => $aRequest->post('txtCountry'),
                        'email'             => $aRequest->post('txtEmail'),
                        'phone'             => $aRequest->post('txtPhone'),
                        'emergency_phone_1' => $aRequest->post('txtEmergencyPhone1'),
                        'emergency_phone_2' => $aRequest->post('txtEmergencyPhone2'),
                        'medical_issue'      => $aRequest->post('txtMedicalIssue'),
                        'medical_info'      => $aRequest->post('txtMedicalInfo'),
                    ]
                );

            return redirect('/profile');
        }
        //if user is not logged in
        return redirect('/');
    }

    /**
     * @return array
     * Returns an array with all the error messages for the form
     */
    public function messages()
    {
        return [
            'txtLastName.required' => 'Je moet je achternaam invullen.',
            'txtFirstName.required' => 'Je moet je voornaam invullen.',
            'txtSex.required' => 'Je moet een geslacht kiezen.',
            'txtBirthdate.required' => 'Je moet je geboorte datum ingeven.',
            'txtBirthdate.date_format' => 'De waarde die je hebt ingevuld hebt bij geboorte datum in ongeldig',
            'txtBirthplace.required' => 'Je moet je geboorte plaats ingeven.',
            'txtNationality.required' => 'je moet je nationaliteit opgeven.',
            'txtAddress.required' => 'Je moet je adres ingeven.',
            'txtCity.required' => 'Je moet je postcode ingeven.',
            'txtCountry.required' => 'Je moet je land ingeven',

            'txtEmail.required' => 'Vul je email adres in.',
            'txtEmail.email' => 'Het ingevulde email adres is niet geldig.',
            'txtEmail.unique' => 'Het ingevulde email adres is al in gebruik.',
            'txtPhone.required' => 'Je moet je GSM nummer invullen.',
            'txtEmergencyPhone1.required' => 'Je moet minstens 1 noodnummer invullen.',
            'txtMedicalIssue.required' => 'Je moet aanduiden indien je een medische behandeling volgt of niet.',
        ];
    }
}