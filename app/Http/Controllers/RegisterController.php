<?php

namespace App\Http\Controllers;

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
        $aData['NoodmMail'] = $aRequest->post('NoodmMail');
        $aData['NoodGSM'] = $aRequest->post('NoodGSM');
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
        echo serialize($_COOKIE['register']);
        return view('user.register.form6');
    }
    public function form1(){
        $aData = null;
        setcookie("register", serialize($aData), time() + (86400 * 30), "/");
        return view('user.register.form1');
    }
}
