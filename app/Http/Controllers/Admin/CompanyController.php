<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    //

    public function add_company(){
        return view('Admin.add_company');
    }

    public function Show_companies(){
        return view('Admin.Show_companies');
    }
}
