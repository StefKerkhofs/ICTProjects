<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    function returnv($iViewID){
        switch ($iViewID){
            case 1:
                return view('user.register.form1');
                break;
            case 2:
                break;
        }
    }
}
