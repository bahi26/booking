<?php

namespace App\Http\Controllers;

use App\maintenance;
use Illuminate\Http\Request;use PhpParser\Builder\Use_;

class MaintenanceController extends Controller
{

    public function view()
    {
        $maintenance = maintenance::all();
        $data = array('maintenance' => $maintenance);
        return view('Maintenance.view', $data);
    }
    public function create(Request $request)
    {
        if($request->isMethod('post'))
        {
            $maintenance=new maintenance();
            $maintenance->cause=$request->input("cause");
            $maintenance->cost=$request->input("cost");
            $maintenance->duration=$request->input("duration");
            $maintenance->type=$request->input("type");

            $maintenance->save();


            return redirect("/viewMaintenance");
        }

        return view('Maintenance.create');
    }
}
