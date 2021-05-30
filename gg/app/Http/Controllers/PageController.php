<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function welcome(){
        if (Auth::user()){
            return "you are logged in";
        }else{
            return "you need to log in";
        }
    }
}
