<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profiles(){
        return view('profiles.Profiles');
    }

    public function userProfile(){
        return view('profiles.components.user-profile');
    }
}