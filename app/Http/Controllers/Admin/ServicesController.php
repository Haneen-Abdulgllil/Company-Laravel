<?php

namespace App\Http\Controllers\Admin;
use App\Models\services;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use function GuzzleHttp\Promise\all;

class ServicesController extends Controller
{
    //

    public function add_services(){
        return view('Admin.add_services');
    }

    public function Show_services(){
        return view('Admin.show_services');
    }

    public function store_services(Request $request){
        $newServ = new services;
        $newServ->name=$request->name;
        $newServ->created_by=$request->created_by;
        $newServ->description=$request->description;
        $newServ->is_active=$request->is_active;
        if($newServ->save())
        return redirect()->route('show_services')
        ->with(['success'=>'user created successful']);
        return back()->with(['error'=>'can not create user']);
    }

    public function get_all()
    {
        $services = services::all();
        $serv = $services->find('services');
        return view('Admin.show_services',['services'=>$serv]);
    }

}

