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
        $services = services::orderBy('id','desc')->get();
        return view('Admin.show_services')
        ->with('services',$services);
    }

    public function edit($services_id){
        $services=services::find($services_id);
        return view('Admin.edit_services')
        ->with('services',$services);

    }
    public function toggle($services_id){

        $services=services::find($services_id);
        $services->is_active*=-1;
        if($services->save())
        return back()->with(['success'=>'data updated successful']);
        return back()->with(['error'=>'can not update data']);

    }

    public function update(Request $request,$services_id){
        $newServ=services::find($services_id);
        $newServ->name=$request->name;
        $newServ->created_by=$request->created_by;
        $newServ->description=$request->description;
        $newServ->is_active=$request->is_active;
        if($newServ->save())
        return redirect()->route('services')->with(['success'=>'data updated successful']);
        return redirect()->back()->with(['error'=>'can not update data ']);

    }


}

