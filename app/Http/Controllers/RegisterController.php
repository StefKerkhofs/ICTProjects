<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function form1(){
        $aData = null;
        setcookie("register", serialize($aData), time() + (86400 * 30), "/");
        return view('user.register.form1');
    }

    public function form2(Request $aRequest){
        if (!isset($_COOKIE['register'])){
            return $this->form1();
        }
        $aData = unserialize($_COOKIE['register']);
        $aData['txtNummer'] = $aRequest->post('txtNummer');
        $aData['txtWachtwoord'] = $aRequest->post('txtWachtwoord');
        setcookie("register", serialize($aData), time() + (86400 * 30), "/");
        return view('user.register.form2');
    }

     public function form3(Request $aRequest){
         if (!isset($_COOKIE['register'])){
             return $this->form1();
         }
         $aData = unserialize($_COOKIE['register']);
        $aData['ReisKiezen'] = $aRequest->post('ReisKiezen');
        $aData['AfstudeerrichtingKiezen'] = $aRequest->post('AfstudeerrichtingKiezen');
        setcookie("register", serialize($aData), time() + (86400 * 30), "/");
         return view('user.register.form3');
    }

    public function form4(Request $aRequest){
        if (!isset($_COOKIE['register'])){
            return $this->form1();
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
        $aData = unserialize($_COOKIE['register']);
        echo $aData['nummer'];

        return view('user.register.form4');
    }

    public function form5(Request $aRequest){
        if (!isset($_COOKIE['register'])){
            return $this->form1();
        }
        $aData = unserialize($_COOKIE['register']);
        echo serialize($aData);
        return view('user.register.form5');
    }

    public function form6(){
        if (!isset($_COOKIE['register'])){
            return $this->form1();
        }
        return view('user.register.form6');
    }
}
