<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    //


    public function add_education(){
        return view('user.add_education');
    }

    public function Show_education(){
        return view('user.show_education');
    }
}
