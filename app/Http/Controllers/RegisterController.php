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

    public function form1(){
        return view('user.register.form1');
    }
    public function form2(Request $aRequest){
        $aDate['nummer'] = $aRequest->post('txtNummer');
        $aDate['wachtwoord'] = $aRequest->post('txtWachtwoord');
        echo $aDate['nummer'];
        return view('user.register.form2');
    }
     public function form3(){
        return view('user.register.form3');
    }
    public function form4(){
        return view('user.register.form4');
    }
    public function form5(){
        return view('user.register.form5');
    }
    public function form6(){
        return view('user.register.form6');
    }
}
