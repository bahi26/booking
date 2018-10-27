<?php

namespace App\Http\Controllers;

use App\points;
use Illuminate\Http\Request;

class PointsController extends Controller
{
    public function view()
    {
        $points = points::all();
        $data = array('points' => $points);
        return view('Points.view', $data);
    }
    public function create(Request $request)
    {
        if($request->isMethod('post'))
        {
            $points=new points();
            $points->name=$request->input("name");
            $points->start=($request->input("start")*7)+1;
            $points->finish=$request->input("finish")*7;
            $points->incentive_percentage=$request->input("incentive_percentage");

            $points->save();


            return redirect("/detailsPoints/".$points->id);
        }

        return view('Points.create');
    }
    public function update($id,Request $request)
    {
        $points= points::find($id);
        if($request->isMethod('post'))
        {   $points->name=$request->input("name");
            $points->start=$request->input("start")*7;
            $points->finish=$request->input("finish")*7;

            $points->incentive_percentage=$request->input("incentive_percentage");
            $points->save();

            return redirect("/viewPoints");
        }
        $data=array('points'=>$points);
        return view('Points.update',$data);
    }
    public function delete($id){
        $points=points::find($id);
        $points::where ('id',$id)->delete();
        return redirect("/viewPoints");
    }
    public function details($id)
    {
        $points= points::find($id);
        $data = array('points' => $points);
        return view('Points.details', $data);
    }
}
