<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    //

    public function add_experience(){
        return view('user.add_experience');
    }

    public function Show_experience(){
        return view('user.show_experience');
    }
}
