<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SkillsController extends Controller
{
    //


    public function add_skills(){
        return view('user.add_skills');
    }

    public function Show_skills(){
        return view('user.show_skills');
    }
}
