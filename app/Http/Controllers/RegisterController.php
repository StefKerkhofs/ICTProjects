<?php

namespace App\Http\Controllers;

use App\Traveller;
use App\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function form2(Request $aRequest){
        if (!isset($_COOKIE['register'])){
            $aData = null;
            setcookie("register", serialize($aData), time() + (86400 * 30), "/");
            return view('user.register.form1');
        }
        $aData = unserialize($_COOKIE['register']);
        $aData['txtNummer'] = $aRequest->post('txtNummer');
        $aData['txtWachtwoord'] = $aRequest->post('txtWachtwoord');
        setcookie("register", serialize($aData), time() + (86400 * 30), "/");
        echo serialize($_COOKIE['register']);
        return view('user.register.form2');
    }

     public function form3(Request $aRequest){
         if (!isset($_COOKIE['register'])){
             $aData = null;
             setcookie("register", serialize($aData), time() + (86400 * 30), "/");
             return view('user.register.form1');
         }

         $aData = unserialize($_COOKIE['register']);
        $aData['ReisKiezen'] = $aRequest->post('ReisKiezen');
        $aData['AfstudeerrichtingKiezen'] = $aRequest->post('AfstudeerrichtingKiezen');
        setcookie("register", serialize($aData), time() + (86400 * 30), "/");

         return view('user.register.form3');
    }

    public function form4(Request $aRequest){
        if (!isset($_COOKIE['register'])){
            $aData = null;
            setcookie("register", serialize($aData), time() + (86400 * 30), "/");
            return view('user.register.form1');
        }
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
        User::insert(
            [
                'name' => $aData['txtNummer'],
                'password' => $aData['txtWachtwoord'],
                'function' => 'reiziger',
            ]
        );

        $iUserID = User::where('name',$aData['txtNummer']) ->value('id');

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
                'email' => $aData['email'],
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
    public function form1(){
        $aData = null;
        setcookie("register", serialize($aData), time() + (86400 * 30), "/");
        $aTravellers = Traveller::get();
        foreach ($aTravellers as $oTraveller){
            echo  $oTraveller;
        }
        return view('user.register.form1');
    }
}
