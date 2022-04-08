<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    //

    public function add_services(){
        return view('Admin.add_services');
    }

    public function Show_services(){
        return view('Admin.show_services');
    }

}
