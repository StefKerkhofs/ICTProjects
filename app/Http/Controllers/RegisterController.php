<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    private $aData = null;
    public function form1(){
        setcookie("register", serialize($this->aData), time() + (86400 * 30), "/");
        return view('user.register.form1');
    }

    public function form2(Request $aRequest){
        if (!isset($_COOKIE['register'])){
            return $this->form1();
        }
        $this->aDate['nummer'] = $aRequest->post('txtNummer');
        $this->aDate['wachtwoord'] = $aRequest->post('txtWachtwoord');
        return view('user.register.form2');
    }

     public function form3(Request $aRequest){
         if (!isset($_COOKIE['register'])){
             return $this->form1();
         }
        $this->aData['reis'] = $aRequest->post('ReisKiezen');
        $this->aData['afstudeerRichting'] = $aRequest->post('AfstudeerrichtingKiezen');
         echo $this->aData['nummer'];
         echo $this->aData['wachtwoord'];
         echo $this->aData['reis'];
         echo $this->aData['afstudeerRichting'];
         return view('user.register.form3');
    }

    public function form4(Request $aRequest){
        if (!isset($_COOKIE['register'])){
            return $this->form1();
        }
        return view('user.register.form4');
    }

    public function form5(){
        if (!isset($_COOKIE['register'])){
            return $this->form1();
        }
        return view('user.register.form5');
    }

    public function form6(){
        if (!isset($_COOKIE['register'])){
            return $this->form1();
        }
        return view('user.register.form6');
    }
}
