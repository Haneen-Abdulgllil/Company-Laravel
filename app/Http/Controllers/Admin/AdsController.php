<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdsController extends Controller
{
    //

    public function add_ads(){
        return view('Admin.add_ads');
    }

    public function Show_ads(){
        return view('Admin.show_ads');
    }
}
