<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public function show_index(){
        return view('index.index');
    }

    public function show_about(){
        return view('index.about');
    }

    public function show_companies(){
        return view('index.companies');
    }


    public function show_contact(){
        return view('index.Contact-us');
    }


    public function show_signup(){
        return view('index.signup');
    }

    public function show_login(){
        return view('index.login');
    }

    public function show_services(){
        return view('index.Services');
    }

    public function show_jobs(){
        return view('index.Jobs');
    }


    public function show_jobs_details(){
        return view('index.Jobs-details');
    }
}
