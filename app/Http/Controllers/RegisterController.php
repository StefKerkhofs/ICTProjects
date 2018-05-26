<?php

namespace App\Http\Controllers;

use App\Traveller;
use App\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*----------------------------------------------------------------------------------------------------------------------*/
    /*--------------------------------------------------------------------------FORM 2--------------------------------------*/
    /*----------------------------------------------------------------------------------------------------------------------*/
    public function form2(Request $aRequest){
        if (!isset($_COOKIE['register'])){
            $aData = null;
            setcookie("register", serialize($aData), time() + (86400 * 30), "/");
            return view('user.register.form1');
        }
        session_start();


        $aData = unserialize($_COOKIE['register']);
        $aRequest->validate([
            'radio' => 'required',
            'txtEmail' => 'required|email',
        ],$this->messages());

        if($aRequest->post('radio') == 1){
            $aRequest->validate([
                'txtNummer' => 'required',
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

        $aData['txtNummer'] = $aRequest->post('txtNummer');
        $aData['txtWachtwoord'] = $aRequest->post('txtWachtwoord');
        $aData['email'] = $aRequest->post('txtEmail');
        setcookie("register", serialize($aData), time() + (86400 * 30), "/");

        return view('user.register.form2');
    }

    /*----------------------------------------------------------------------------------------------------------------------*/
    /*--------------------------------------------------------------------------FORM 3--------------------------------------*/
    /*----------------------------------------------------------------------------------------------------------------------*/
    public function form3(Request $aRequest){
         if (!isset($_COOKIE['register'])){
             $aData = null;
             setcookie("register", serialize($aData), time() + (86400 * 30), "/");
             return view('user.register.form1');
         }
         if(isset($_SESSION['StudentOrDocent'])){
             $_SESSION['StudentOrDocent'] = null;
         }
         $aRequest->validate([
             'ReisKiezen' => 'required',
             'AfstudeerrichtingKiezen' => 'required',
         ],$this->messages());

         $aData = unserialize($_COOKIE['register']);
        $aData['ReisKiezen'] = $aRequest->post('ReisKiezen');
        $sTest = $aRequest->post('AfstudeerrichtingKiezen');
        if (isset($sTest)) {
            $aData['AfstudeerrichtingKiezen'] = $aRequest->post('AfstudeerrichtingKiezen');
        }
        setcookie("register", serialize($aData), time() + (86400 * 30), "/");

         return view('user.register.form3');
    }

    /*----------------------------------------------------------------------------------------------------------------------*/
    /*--------------------------------------------------------------------------FORM 4--------------------------------------*/
    /*----------------------------------------------------------------------------------------------------------------------*/
    public function form4(Request $aRequest){
        if (!isset($_COOKIE['register'])){
            $aData = null;
            setcookie("register", serialize($aData), time() + (86400 * 30), "/");
            return view('user.register.form1');
        }

        $aRequest->validate([
            'lastname' => 'required',
            'firstname' => 'required',
            'gender' => 'required',
            'birthdate' => 'required|date',
            'birthplace' => 'required',
            'nationality' => 'required',
            'address' => 'required',
            'Postcode' => 'required',
            'country' => 'required',
        ],$this->messages());

        $aData = unserialize($_COOKIE['register']);
        $aData["lastname"] = $aRequest->post('lastname');
        $aData["firstname"] = $aRequest->post('firstname');
        $aData["gender"] = $aRequest->post('gender');
        $aData["birthdate"] = $aRequest->post('birthdate');
        $aData["birthplace"] = $aRequest->post('birthplace');
        $aData["nationality"] = $aRequest->post('nationality');
        $aData["address"] = $aRequest->post('address');
        $aData["Postcode"] = $aRequest->post('Postcode');
        $aData["country"] = $aRequest->post('country');
        setcookie("register", serialize($aData), time() + (86400 * 30), "/");

        return view('user.register.form4');
    }

    /*----------------------------------------------------------------------------------------------------------------------*/
    /*--------------------------------------------------------------------------FORM 5--------------------------------------*/
    /*----------------------------------------------------------------------------------------------------------------------*/
    public function form5(Request $aRequest){
        if (!isset($_COOKIE['register'])){
            $aData = null;
            setcookie("register", serialize($aData), time() + (86400 * 30), "/");
            return view('user.register.form1');
        }

        $aData = unserialize($_COOKIE['register']);
        $aData['email'] = $aRequest->post('email');
        $aData['gsm'] = $aRequest->post('gsm');
        $aData['NoodNummer1'] = $aRequest->post('NoodNummer1');
        $aData['NoodNummer2'] = $aRequest->post('NoodNummer2');
        setcookie("register", serialize($aData), time() + (86400 * 30), "/");

        return view('user.register.form5');
    }

    /*----------------------------------------------------------------------------------------------------------------------*/
    /*--------------------------------------------------------------------------FORM 6--------------------------------------*/
    /*----------------------------------------------------------------------------------------------------------------------*/
    public function form6(Request $aRequest){
        if (!isset($_COOKIE['register'])){
            $aData = null;
            setcookie("register", serialize($aData), time() + (86400 * 30), "/");
            return view('user.register.form1');
        }

        $aData = unserialize($_COOKIE['register']);
        $aData['MedischeAandoening'] = $aRequest->post('MedischeAandoening');
        $aData['MedischeInfo'] = $aRequest->post('MedischeInfo');
        setcookie("register", serialize($aData), time() + (86400 * 30), "/");

        $sFunctie = null;
        if ($aData['txtNummer'] == null){
            $sFunctie = "Begeleider";
        }
        elseif (strtolower(substr($aData['txtNummer'],0,1)) == 'r'){
            $sFunctie = "Reiziger";
        }
        else{
            $sFunctie = "Begeleider";
        }
        User::insert(
            [
                'name' => $aData['txtNummer'],
                'email' => $aData['email'],
                'password' => $aData['txtWachtwoord'],
                'function' => $sFunctie,
            ]
        );

        $iUserID = User::where('email',$aData['email']) ->value('id');

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
                'medical_info' => $aRequest->post('MedischeInfo'),
                'MedicalIssue' => $aRequest->post('MedischeAandoening')
            ]
        );
        return view('user.register.form6');
    }

    /*----------------------------------------------------------------------------------------------------------------------*/
    /*--------------------------------------------------------------------------FORM 1--------------------------------------*/
    /*----------------------------------------------------------------------------------------------------------------------*/
    public function form1(){
        if(isset($_SESSION['StudentOrDocent'])){
            $_SESSION['StudentOrDocent'] = null;
        }
        $aData = null;
        setcookie("register", serialize($aData), time() + (86400 * 30), "/");
        $aTravellers = Traveller::get();
        foreach ($aTravellers as $oTraveller){
            echo  $oTraveller;
        }
        return view('user.register.form1');
    }
    public function messages()
    {
        return [
            'txtNummer.required' => 'Je Studenten-/docentennumme moet ingevuld worden.',
            'txtWachtwoord.required'  => 'Je moet een wachtwoord invullen.',
            'txtWachtwoord_confirmation.required'  => 'Je moet je wachtwoord bevestigen.',
            'txtWachtwoord.min' => 'Je wachtwoord moet minsten uit 8 tekens bestaan.',
            'txtWachtwoord.confirmed' => 'Je opgegeven paswoorden komen niet met elkaar overeen.',
            'radio.required' => 'Geef aan als je een student/docent bent of niet.',
            'txtEmail.required' => 'Vul je email adres in.',
            'txtEmail.email' => 'Het ingevulde email adres is niet geldig.',

            'ReisKiezen.required' => 'Je moet een reis kiezen.',
            'AfstudeerrichtingKiezen.required' => 'Je moet een afstudeerrichting kiezen.',

            'lastname.required' => 'Je moet je achternaam invullen.',
            'firstname.required' => 'Je moet je voornaam invullen.',
            'gender.required' => 'Je moet een geslacht kiezen.',
            'birthdate.required' => 'Je moet je geboorte datum ingeven.',
            'birthdate.date' => 'De waarde die je hebt ingevuld hebt bij geboorte datum in ongeldig',
            'birthplace.required' => 'Je moet je geboorte plaats ingeven.',
            'nationality.required' => 'je moet je nationaliteit opgeven.',
            'adress.required' => 'Je moet je adres ingeven.',
            'Postcode.required' => 'Je moet je postcode ingeven.',
            'country.required' => 'Je moet je land ingeven',
        ];
    }
}
