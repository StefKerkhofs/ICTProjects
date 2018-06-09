<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class EditTravellerController extends Controller
{
    /*
     *searchTravellers page
     */
    public function searchTravellers()
    {
        //check if user is a mentor
        if (DB::table('users')->where('id', Auth::id())->value('function') !== 'Begeleider')
        {
            return redirect('/');
        }

        //check if user is logged in
        if(Auth::check()){
            try
            {
                //find the mentor's user_id
                $iMentor_id = Auth::id();

                //find the mentor's trip_id
                $oTripIDMentor = DB::table('travellers')
                    ->where('travellers.user_id', '=', $iMentor_id)
                    ->select('travellers.trip_id')
                    ->first();
                $aTripIDMentor = json_decode(json_encode($oTripIDMentor),true);

                //find all travellers with the same trip_id, except for the mentor
                $oTravellers = DB::table('travellers')
                    ->join('trips', 'travellers.trip_id', '=', 'trips.trip_id')
                    ->join('majors', 'travellers.major_id', '=', 'majors.major_id')
                    ->join('studies', 'studies.study_id', '=', 'majors.study_id')
                    ->where('travellers.trip_id', '=', $aTripIDMentor)
                    ->where('travellers.user_id', '!=', $iMentor_id)
                    ->orderBy('travellers.lastname')
                    ->select('travellers.*', 'studies.study_name as study_name', 'majors.major_name as major_name')
                    ->get();

                //return travellers to view
                return view('user.edit_traveller.searchTravellers', ['aTravellers' => $oTravellers]);
            }
            catch (\Exception $exception)
            {
                return $exception;
            }
        }
        //if user is not logged in, return home view
        return redirect('/');
    }
    /*
    * Search Table
    */
    public function search(Request $request)
    {
        if($request->ajax())
        {
            $output="";
            $travellers = DB::table('travellers')
                ->join('majors', 'travellers.major_id', '=', 'majors.major_id')
                ->join('studies', 'studies.study_id', '=', 'majors.study_id')
                ->where('firstname', 'LIKE', '%' . $request->search . "%")
                ->orWhere('lastname', 'LIKE', '%' . $request->search . "%")
                ->select('travellers.*', 'studies.study_name as study_name', 'majors.major_name as major_name')
                ->get();

            if ($travellers)
            {
                foreach ($travellers as $key => $traveller)
                {
                    $output .=
                        '<tr>' .
                        '<td>' . $traveller->lastname . '</td>' .
                        '<td>' . $traveller->firstname . '</td>' .
                        '<td>' . $traveller->study_name . '&nbsp&nbsp' . $traveller->major_name . '</td>' .
                        '<td><a href="/editTraveller/' . $traveller->user_id . '"><img src="' . asset("/image/pen.png") . '" alt="pen.png" height="40" width="40"/></a></td>' .
                        '</tr>';

                }
                return Response($output);
            }
        }
    }
    /*
     * editTraveller page
     */
    public function editTraveller(Request $aRequest, $user_id)
    {
        if (\App\User::where('id',\Illuminate\Support\Facades\Auth::id())->value('function') !== 'Begeleider')
        {
            return redirect('/info');
        }
        $aTravellers = DB::table('travellers')
            ->join('users', 'travellers.user_id', '=', 'users.id')
            ->where('travellers.user_id', '=', $user_id)
            ->get();
        //echo $aRequest;
        return view('user.edit_traveller.editTraveller', ['aTravellers' => $aTravellers]);
    }
    /*
     * update selected Traveller in database
     */
    public function updateTraveller(Request $aRequest, $user_id)
    {
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

        DB::table('travellers')
            ->join('users', 'travellers.user_id', '=', 'users.id')
            ->where('travellers.user_id', '=', $user_id)
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

        return redirect('/searchTravellers');
    }

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
