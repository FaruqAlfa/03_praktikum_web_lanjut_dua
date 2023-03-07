<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile($profile = ''){
        if ($profile == ''){
            return view('profileFahmi');
        // }elseif ($profile = 'Rizqi'){
        //     return view('profileRizqi');
        }else{
            return view('home');
        }
    }
}
