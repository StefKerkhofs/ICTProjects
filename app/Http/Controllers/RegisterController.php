<?php

namespace App\Http\Controllers;

use App\Traveller;
use App\User;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    function __construct() {
        session_start();
    }
    function __destruct() {
    }
    /*----------------------------------------------------------------------------------------------------------------------*/
    /*--------------------------------------------------------------------------FORM 1--------------------------------------*/
    /*----------------------------------------------------------------------------------------------------------------------*/
    public function form1POST(Request $aRequest){
        //Validation
        $aRequest->validate([
            'radio' => 'required',
            'txtEmail' => [ 'required', 'string', 'email', 'max:255', 'unique:users,email'],
        ],$this->messages());
        if($aRequest->post('radio') == 1){
            $aRequest->validate([
                'txtNummer' => [ 'required', 'max:255', 'unique:users,name']
            ],$this->messages());
            $_SESSION['StudentOrDocent'] = 1;
        }
        else{
            $_SESSION['StudentOrDocent'] = 2;
        }
        $aRequest->validate([
            'txtWachtwoord' => 'required|min:8|confirmed',
            'txtWachtwoord_confirmation' => 'required',
        ],$this->messages());

        //Saving
        $aData['txtNummer'] = $aRequest->post('txtNummer');
        $aData['txtWachtwoord'] = $aRequest->post('txtWachtwoord');
        $aData['email'] = $aRequest->post('txtEmail');
        $aData['IsStudentOrDocent'] = $_SESSION["StudentOrDocent"];
        $aData['IsStudentOrDocent'] = $aRequest->post('radio');

        //Setting Cookie
        setcookie("register", serialize($aData), time() + (86400 * 30), "/");

        //Calling next form
        return redirect('reg/form2');
    }
    public function form1(){

        return view('user.register.form1');

    }

    /*----------------------------------------------------------------------------------------------------------------------*/
    /*--------------------------------------------------------------------------FORM 2--------------------------------------*/
    /*----------------------------------------------------------------------------------------------------------------------*/
    public function form2POST(Request $aRequest){
        try {
            //Validation
            $aData = unserialize($_COOKIE['register']);
            if ($aData['IsStudentOrDocent'] == "1") {
                $aRequest->validate([
                    'ReisKiezen' => 'required',
                    'AfstudeerrichtingKiezen' => 'required',
                ], $this->messages());
                $aData['AfstudeerrichtingKiezen'] = $aRequest->post('AfstudeerrichtingKiezen');
            } else {
                $aRequest->validate([
                    'ReisKiezen' => 'required',
                ], $this->messages());
            }

            //Saving
            $aData['ReisKiezen'] = $aRequest->post('ReisKiezen');

            //Setting cookie
            setcookie("register", serialize($aData), time() + (86400 * 30), "/");

            //Calling next form
            return redirect('reg/form3');
        }
        catch(Exception $exception) {

        }
    }
    public function form2(){

        return view('user.register.form2');

    }

    /*----------------------------------------------------------------------------------------------------------------------*/
    /*--------------------------------------------------------------------------FORM 3--------------------------------------*/
    /*----------------------------------------------------------------------------------------------------------------------*/
    public function form3POST(Request $aRequest){
        try{
            //Validation
            $aRequest->validate([
                'lastname' => 'required',
                'firstname' => 'required',
                'gender' => 'required',
                'birthdate' => 'required|date_format:d/m/Y',
                'birthplace' => 'required',
                'nationality' => 'required',
                'address' => 'required',
                'Postcode' => 'required',
                'country' => 'required',
            ],$this->messages());

            //Saving

            $aData = unserialize($_COOKIE['register']);
            $aData["lastname"] = $aRequest->post('lastname');
            $aData["firstname"] = $aRequest->post('firstname');
            $aData["gender"] = $aRequest->post('gender');
            $aData["birthplace"] = $aRequest->post('birthplace');
            $aData["nationality"] = $aRequest->post('nationality');
            $aData["address"] = $aRequest->post('address');
            $aData["Postcode"] = $aRequest->post('Postcode');
            $aData["country"] = $aRequest->post('country');
            $aData["birthdate"] = $aRequest->post('birthdate');

            //Setting cookie
            setcookie("register", serialize($aData), time() + (86400 * 30), "/");

            //Calling next form
            return redirect('reg/form4');

        }
        catch(Exception $exception) {

        }
    }
    public function form3(){

        return view('user.register.form3');

    }

    /*----------------------------------------------------------------------------------------------------------------------*/
    /*--------------------------------------------------------------------------FORM 4--------------------------------------*/
    /*----------------------------------------------------------------------------------------------------------------------*/
    public function form4POST(Request $aRequest){
        try{
            //Validation
            $aRequest->validate([
                'gsm' => 'required',
                'NoodNummer1' => 'required',
            ],$this->messages());

            //Saving
            $aData = unserialize($_COOKIE['register']);
            $aData['gsm'] = $aRequest->post('gsm');
            $aData['NoodNummer1'] = $aRequest->post('NoodNummer1');
            $aData['NoodNummer2'] = $aRequest->post('NoodNummer2');

            //Setting cookie
            setcookie("register", serialize($aData), time() + (86400 * 30), "/");

            //Calling next form
            return redirect('reg/form5');
        }
        catch(Exception $exception) {

        }
    }
    public function form4(){

        return view('user.register.form4');

    }

    /*----------------------------------------------------------------------------------------------------------------------*/
    /*--------------------------------------------------------------------------FORM 5--------------------------------------*/
    /*----------------------------------------------------------------------------------------------------------------------*/
    public function form5POST(Request $aRequest){
        try{
            //validation
            $aRequest->validate([
                'MedischeAandoening' => 'required',
            ],$this->messages());
            echo 'test123';

            //Saving
            $aData = unserialize($_COOKIE['register']);
            $aData['MedischeAandoening'] = $aRequest->post('MedischeAandoening');
            $aData['MedischeInfo'] = $aRequest->post('MedischeInfo');

            //Setting cookie
            setcookie("register", serialize($aData), time() + (86400 * 30), "/");

            //Call next form
            return redirect('reg/form6');
        }
        catch (Exception $exception) {

        }
    }
    public function form5(){

        return view('user.register.form5');

    }

    /*----------------------------------------------------------------------------------------------------------------------*/
    /*--------------------------------------------------------------------------FORM 6--------------------------------------*/
    /*----------------------------------------------------------------------------------------------------------------------*/
    public function form6POST(Request $aRequest){
        try{
            //Scanning whether user is 'begeleider' or 'Reiziger'
            $aData = unserialize($_COOKIE['register']);

            if ($aData['txtNummer'] == null){
                $sFunctie = "Begeleider";
            }
            elseif (strtolower(substr($aData['txtNummer'],0,1)) == 'r'){
                $sFunctie = "Reiziger";
            }
            else{
                $sFunctie = "Begeleider";
            }

            //Saving User
            User::insert(
                [
                    'name' => $aData['txtNummer'],
                    'email' => $aData['email'],
                    'password' => $aData['txtWachtwoord'],
                    'function' => $sFunctie,
                ]
            );

            //Saving traveller
            $iUserID = User::where('email',$aData['email']) ->value('id');

            if ($aData['IsStudentOrDocent'] == "2"){
                Traveller::insert(
                    [
                        'user_id' => $iUserID,
                        'trip_id' => $aData['ReisKiezen'],
                        'zipcode_id' => $aData['Postcode'],
                        'firstname' => $aData['firstname'],
                        'lastname' => $aData['lastname'],
                        'city' => $aData['Postcode'],
                        'country' => $aData['country'],
                        'address' => $aData['address'],
                        'sex' => $aData['gender'],
                        'phone' => $aData['gsm'],
                        'emergency_phone_1' => $aData['NoodNummer1'],
                        'emergency_phone_2' => $aData['NoodNummer2'],
                        'nationality' => $aData['nationality'],
                        'birthdate' => $aData['birthdate'],
                        'birthplace' => $aData['birthplace'],
                        'medical_info' => $aData['MedischeInfo'],
                        'MedicalIssue' => $aData['MedischeAandoening']
                    ]
                );
            }
            else{
                Traveller::insert(
                    [
                        'user_id' => $iUserID,
                        'trip_id' => $aData['ReisKiezen'],
                        'study_id' => $aData['AfstudeerrichtingKiezen'],
                        'zipcode_id' => $aData['Postcode'],
                        'firstname' => $aData['firstname'],
                        'lastname' => $aData['lastname'],
                        'city' => $aData['Postcode'],
                        'country' => $aData['country'],
                        'address' => $aData['address'],
                        'sex' => $aData['gender'],
                        'phone' => $aData['gsm'],
                        'emergency_phone_1' => $aData['NoodNummer1'],
                        'emergency_phone_2' => $aData['NoodNummer2'],
                        'nationality' => $aData['nationality'],
                        'birthdate' => $aData['birthdate'],
                        'birthplace' => $aData['birthplace'],
                        'medical_info' => $aData['MedischeInfo'],
                        'MedicalIssue' => $aData['MedischeAandoening']
                    ]
                );
            }

            //Returning completion screen
            return redirect('reg/form6POST');
        }
        catch (Exception $exception) {

            //If error is caught, redirect to first form
            return redirect('reg');

        }
        finally{

            //Reset cookie data
            $aData = null;
            setcookie("register", serialize($aData), time() -1, "/");

        }

    }
    public function form6(){

        return view('user.register.form6');

    }

    /*----------------------------------------------------------------------------------------------------------------------*/
    /*--------------------------------------------------------------------------FORM 7--------------------------------------*/
    /*----------------------------------------------------------------------------------------------------------------------*/
    public function form7(){

        return view('user.register.form7');

    }

    /*----------------------------------------------------------------------------------------------------------------------*/
    /*--------------------------------------------------------------------------Collection of error messages----------------*/
    /*----------------------------------------------------------------------------------------------------------------------*/
    public function messages()
    {
        return [
            'txtNummer.required' => 'Je Studenten-/docentennummer moet ingevuld worden.',
            'txtWachtwoord.required'  => 'Je moet een wachtwoord invullen.',
            'txtWachtwoord_confirmation.required'  => 'Je moet je wachtwoord bevestigen.',
            'txtWachtwoord.min' => 'Je wachtwoord moet minsten uit 8 tekens bestaan.',
            'txtWachtwoord.confirmed' => 'Je opgegeven paswoorden komen niet met elkaar overeen.',
            'radio.required' => 'Geef aan als je een student/docent bent of niet.',
            'txtEmail.required' => 'Vul je email adres in.',
            'txtEmail.email' => 'Het ingevulde email adres is niet geldig.',
            'txtEmail.unique' => 'Het ingevulde email adres is al in gebruik.',
            'txtNummer.unique' => 'Het ingevulde Studenten-/docentennummer is al in gebruik.',

            'ReisKiezen.required' => 'Je moet een reis kiezen.',
            'AfstudeerrichtingKiezen.required' => 'Je moet een afstudeerrichting kiezen.',

            'lastname.required' => 'Je moet je achternaam invullen.',
            'firstname.required' => 'Je moet je voornaam invullen.',
            'gender.required' => 'Je moet een geslacht kiezen.',
            'birthdate.required' => 'Je moet je geboorte datum ingeven.',
            'birthdate.date_format' => 'De waarde die je hebt ingevuld hebt bij geboorte datum in ongeldig',
            'birthplace.required' => 'Je moet je geboorte plaats ingeven.',
            'nationality.required' => 'je moet je nationaliteit opgeven.',
            'adress.required' => 'Je moet je adres ingeven.',
            'Postcode.required' => 'Je moet je postcode ingeven.',
            'country.required' => 'Je moet je land ingeven',
            'address.required' => 'Je moet je adres ingeven.',

            'gsm.required' => 'Je moet je GSM nummer invullen.',
            'NoodNummer1.required' => 'Je moet minstens 1 noodnummer invullen.',

            'MedischeAandoening.required' => 'Je moet aanduiden indien je een medische behandeling volgt of niet.',
        ];
    }
}
