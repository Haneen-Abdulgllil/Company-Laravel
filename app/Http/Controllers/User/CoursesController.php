<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    //

    public function add_courses(){
        return view('user.add_courses');
    }

    public function show_courses(){
        return view('user.show_courses');
    }
}
