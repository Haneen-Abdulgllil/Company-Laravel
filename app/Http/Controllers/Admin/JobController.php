<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JobController extends Controller
{
    //

      //
        public function add_job(){
        return view('Admin.add_job');
    }

    public function Show_job(){
        return view('Admin.show_job');
    }
}
