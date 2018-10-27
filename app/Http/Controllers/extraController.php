<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\extra_services;

class extraController extends Controller
{
    //
    public function view()
    {
        $extras = extra_services::all();
        $data = array('extras' => $extras);
        return view('Extra.view', $data);
    }
    public function create(Request $request)
    {
        if($request->isMethod('post'))
        {
            $extra=new extra_services();
            $extra->name=$request->input("name");
            $extra->cost_per_duration=$request->input("cost_per_duration");
            $extra->duration=$request->input("duration");

            $extra->save();


            return redirect("/viewExtras");
        }

        return view('Extra.create');
    }
}
