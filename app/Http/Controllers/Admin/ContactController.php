<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function add_contact(){
        return view('Admin.add_contact');
    }

    public function Show_contact(){
        return view('Admin.show_contact');
    }
}
