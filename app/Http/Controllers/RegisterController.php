<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    function returnv(){

        if(!isset($_COOKIE['register'])) {
            $this->CreateCookie();
        }
        else{
            $this->ShowView();
        }
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
        }
    }

    function CreateCookie(){
        $cookie_name = "register";
        $iRegisterCount = 1;
        $aUserData = null;
        $aUserData['PageID'] = 1;
        $cookie_value = $aUserData;
        setcookie($cookie_name, serialize($cookie_value), time() + (86400 * 30), "/");
        $this->ShowView();
    }
}
