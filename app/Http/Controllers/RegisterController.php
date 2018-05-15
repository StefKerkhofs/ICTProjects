<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    function returnv(){
        if(!isset($_COOKIE['register'])) {
            $aUserData['PageID'] = 1;
            $this->CreateCookie($aUserData);
        }
        else{
            return $this->ShowView();
        }
    }
    function next(){
        $aData = unserialize($_COOKIE['register']);
        $aData['PageID']++;
        $this->CreateCookie($aData);
        return $this->ShowView();
    }
    function previous(){
        $aData = unserialize($_COOKIE['register']);
        $aData['PageID']--;
        $this->CreateCookie($aData);
        return $this->ShowView();
    }

    function CreateCookie($aData){
        $cookie_name = "register";
        $cookie_value = $aData;
        setcookie($cookie_name, serialize($cookie_value), time() + (86400 * 30), "/");
    }
    function ShowView(){
        $aData = unserialize($_COOKIE['register']);
        switch ($aData['PageID']){
            case 1:
                return view('user.register.form1');
                break;
            case 2:
                return view('user.register.form2');
                break;
            case 3:
                return view('user.register.form3');
                break;
            case 4:
                return view('user.register.form4');
                break;
            case 5:
                return view('user.register.form5');
                break;
            case 6:
                return view('user.register.form6');
                break;
        }
    }
}
