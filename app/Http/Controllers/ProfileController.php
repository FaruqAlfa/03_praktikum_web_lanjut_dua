<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile($profile = ''){
        if ($profile == 'fahmi'){
            return view('profileFahmi');
        }elseif ($profile = 'rizqi'){
            return view('profileRizqi');
        }else{
            return view('home');
        }
    }
}
