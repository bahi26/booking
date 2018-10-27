<?php

namespace App\Http\Controllers;

use App\exercise;
use App\employee;
use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;

class ExerciseController extends Controller
{
    //
    public function view()
    {
        $exercises = exercise::all();
        $data = array('exercises' => $exercises);
        return view('Exercise.view', $data);
    }
    public function create(Request $request)
    {
        $employees = employee::where('type',"=",'freelancer')->get();


        if($request->isMethod('post'))
        {
            $exercise=new exercise();
            $exercise->name=$request->input("name");
            $exercise->duration=$request->input("duration");
            $exercise->calories=$request->input("calories");
            $exercise->employee_id=$request->input("employee_id");

            $exercise->save();


            return redirect("/viewExercise");
        }
        $data = array('employees' => $employees);

        return view('Exercise.create',$data);
    }
    public function index()
    {
        return Exercise::orderBy('name','DESC')->get();

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $exercise=DB::table('exercises')->where('id',$id)->get();
        $data = array('exercise' => $exercise);
        return view('Exercise.edit',$data);
    }
    public function get()
    {
        $exercises=DB::table('exercises')->orderBy('id','desc')->get();
        return $exercises;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $exercise=DB::table('exercises')->where('id',$id)->get();
        $employees = employee::where('type',"=",'freelancer')->get();
        $data = array('exercise' => $exercise[0],'employees'=>$employees);
      //  return $data;
        return view('Exercise.edit',$data);
    }

    /**
     * Update the specified resource in storage.
    ظ
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if(empty($id))
            return ;
        if(!empty($request->name))
            DB::table('exercises')->where('id',$id)->update(['name'=>$request->name]);
        if(!empty($request->duration))
            DB::table('exercises')->where('id',$id)->update(['duration'=>$request->duration]);
        if(!empty($request->employee_id))
            DB::table('exercises')->where('id',$id)->update(['employee_id'=>$request->employee_id]);
        if(!empty($request->calories))
            DB::table('exercises')->where('id',$id)->update(['calories'=>$request->calories]);
        return redirect()->route('editExercise', [$id]);
    }

    public function assign(Request $request)
    {
        if(empty($request->user_id))
            return;
        if(empty($request->exercise_id))
            return;
        DB::table('exercise_bookings')->where([['booking_id','=',$request->user_id]])->delete();
        DB::table('exercise_bookings')->insert(['duration'=>$request->duration,'date'=>Carbon::now(),'booking_id'=>$request->user_id,
            'exercise_id'=>$request->exercise_id]);
        return redirect()->route('assign');
    }

    public function get_users()
    {
        $users=DB::table('bookings')->join('users','users.id','=','bookings.id')
            ->leftJoin('exercise_bookings','exercise_bookings.booking_id','=','bookings.id')
            ->leftjoin('exercises','exercise_bookings.exercise_id','=','exercises.id')->select('bookings.id','exercise_bookings.exercise_id',
                'exercise_bookings.duration','exercises.name','users.name','users.email')->get();
        $exercises=DB::table('exercises')->get();
        $data = array('exercises' => $exercises,'users'=>$users);
       // return $data;
        return view('Exercise.assign',$data);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Exercise::where('id', $id)->delete();
        return response()->json('success',200);

    }
}

