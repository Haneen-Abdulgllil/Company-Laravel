<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PersonalInfoController extends Controller
{
    //

    public function add_personal_info(){
        return view('user.add_personal_info');
    }

    public function Show_personal_info(){
        return view('user.show_personal_info');
    }
}
