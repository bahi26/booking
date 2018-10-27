<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\room;

class RoomController extends Controller
{
    //

    public function view()
    {
        $rooms = room::all();
        $data = array('rooms' => $rooms);
        return view('Room.view', $data);
    }
    public function create(Request $request)
    {
        if($request->isMethod('post'))
        {
            $rooms=new room();
            $rooms->number=$request->input("number");
            $rooms->type=$request->input("type");
            $rooms->number_of_beds=$request->input("number_of_beds");
            $rooms->cost_per_week_egy=$request->input("cost_per_week_egy");
            $rooms->cost_per_2week_egy=$request->input("cost_per_2week_egy");
            $rooms->cost_per_3week_egy=$request->input("cost_per_3week_egy");
            $rooms->cost_per_4week_egy=$request->input("cost_per_4week_egy");
            $rooms->cost_per_weekend_egy=$request->input("cost_per_weekend_egy");
            $rooms->cost_per_week_dol=$request->input("cost_per_week_dol");
            $rooms->cost_per_2week_dol=$request->input("cost_per_2week_dol");
            $rooms->cost_per_3week_dol=$request->input("cost_per_3week_dol");
            $rooms->cost_per_4week_dol=$request->input("cost_per_4week_dol");
            $rooms->cost_per_weekend_dol=$request->input("cost_per_weekend_dol");
            $rooms->save();


            return redirect("/viewRooms");
        }
        return view('Room.create');
    }
    public function update($id,Request $request)
    {
        $rooms= room::find($id);
        if($request->isMethod('number'))
        {
            $rooms->number=$request->input("number");
            $rooms->type=$request->input("type");
            $rooms->number_of_beds=$request->input("number_of_beds");
            $rooms->cost_per_week_egy=$request->input("cost_per_week_egy");
            $rooms->cost_per_2week_egy=$request->input("cost_per_2week_egy");
            $rooms->cost_per_3week_egy=$request->input("cost_per_3week_egy");
            $rooms->cost_per_4week_egy=$request->input("cost_per_4week_egy");
            $rooms->cost_per_weekend_egy=$request->input("cost_per_weekend_egy");
            $rooms->cost_per_week_dol=$request->input("cost_per_week_dol");
            $rooms->cost_per_2week_dol=$request->input("cost_per_2week_dol");
            $rooms->cost_per_3week_dol=$request->input("cost_per_3week_dol");
            $rooms->cost_per_4week_dol=$request->input("cost_per_4week_dol");
            $rooms->cost_per_weekend_dol=$request->input("cost_per_weekend_dol");
            $rooms->save();

            return redirect("/viewRoom");
        }
        $data=array('room'=>$rooms);
        return view('Room.update',$data);
    }
    public function delete($id){
        $rooms=room::find($id);
        $rooms::where ('id',$id)->delete();
        return redirect("/viewRoom");
    }
}
