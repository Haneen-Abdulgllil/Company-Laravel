<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PartenerController extends Controller
{
    //

    public function add_partener(){
        return view('Admin.add_partener');
    }

    public function Show_partener(){
        return view('Admin.show_partener');
    }
}
