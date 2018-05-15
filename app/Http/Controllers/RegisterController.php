<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    function returnv(){
        if(!isset($_COOKIE['register'])) {
            $aData['PageID'] = 1;
            $aData['PageTest'] = 'Test';
            setcookie("register", serialize($aData), time() + (86400 * 30), "/");
            $_COOKIE['register'] = serialize($aData);
        }
        return $this->ShowView();
    }
    function next(){
        $aData = unserialize($_COOKIE['register']);
        $aData['PageID']++;
        $aData['PageTest'] = 'Next';
        setcookie("register", serialize($aData), time() + (86400 * 30), "/");
        $_COOKIE['register'] = serialize($aData);
        return $this->ShowView();
    }
    function previous(){
        $aData = unserialize($_COOKIE['register']);
        $aData['PageID']--;
        $aData['PageTest'] = 'Previous';
        setcookie("register", serialize($aData), time() + (86400 * 30), "/");
        $_COOKIE['register'] = serialize($aData);
        return $this->ShowView();
    }

    function ShowView(){
        $aData = unserialize($_COOKIE['register']);
        echo $aData['PageTest'];
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
