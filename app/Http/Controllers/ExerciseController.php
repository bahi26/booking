<?php

namespace App\Http\Controllers;

use App\exercise;
use App\employee;
use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;
use Storage;

class ExerciseController extends Controller
{
    //
    public function view()
    {
        $exercises = exercise::all();
        $data = array('exercises' => $exercises);
        return view('Exercise.viewExercise', $data);
    }
    public function create(Request $request)
    {
        $employees = employee::where('type',"=",'freelancer')->get();
       // return $request;
        if($request->isMethod('post'))
        {
           // return $request;
            $exercise=new exercise();
            $exercise->name=$request->input("name");
            $exercise->duration=$request->input("duration");
            $exercise->calories=$request->input("calories");
            $exercise->employee_id=$request->input("employee_id");
            $exercise->description=$request->input("description");
            $date=Carbon::now()->micro;
            if(!empty($request->file('image')))
            {

                $request->file('image')->storeAs(
                    'public/ExerciseImages', $date.'.jpg'
                );
                $exercise->photo=$date.'.jpg';
            }
            if(!empty($request->file('image')))
            {
                $request->file('video')->storeAs(
                    'public/ExerciseVideos', $date.'.mp4'
                );
                $exercise->video=$date.'.mp4';
            }
            $exercise->save();


            return redirect("/viewExercise");
        }
        $data = array('employees' => $employees);

        return view('Exercise.createExercise',$data);
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
        $employees = employee::where('type',"=",'freelancer')->get();
        $exercise[0]->photo=Storage::url('ExerciseImages/'.$exercise[0]->photo);
        $exercise[0]->video = Storage::url('exerciseVideos/'.$exercise[0]->video);
        $data = array('exercise' => $exercise[0],'employees'=>$employees);

        return view('Exercise.detailsExercise',$data);
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
        $exercise[0]->photo=Storage::url('ExerciseImages/'.$exercise[0]->photo);
        $exercise[0]->video = Storage::url('exerciseVideos/'.$exercise[0]->video);
        $data = array('exercise' => $exercise[0],'employees'=>$employees);

      //  return $data;
        return view('Exercise.updateExercise',$data);
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
        if(!empty($request->description))
            DB::table('exercises')->where('id',$id)->update(['description'=>$request->description]);
        $data=DB::table('exercises')->where('id',$id)->get();
        $date=Carbon::now()->micro;

        if(!empty($request->file('image')))
        {
            $request->file('image')->storeAs(
                'public/ExerciseImages', $date.'.jpg'
            );
            Storage::delete('public/ExerciseImages/'.$data[0]->photo);
            DB::table('exercises')->where('id',$id)->update(['photo'=>$date.'.jpg']);
        }
        if(!empty($request->file('image')))
        {
            $request->file('video')->storeAs(
                'public/ExerciseVideos', $date.'.mp4'
            );
            Storage::delete('public/ExerciseVideos/'.$data[0]->video);
            DB::table('exercises')->where('id',$id)->update(['video'=>$date.'.mp4']);
        }
        return redirect()->route('editExercise', [$id]);
    }

    public function assign(Request $request)
    {

        if(isset($request->exercise_id)&&isset($request->id))
        {
            foreach ($request->id as $id)
             DB::table('exercise_bookings')->insert(['duration'=>0,'date'=>Carbon::now(),'booking_id'=>$id,
                 'exercise_id'=>$request->exercise_id]);
        }
        return redirect()->route('assign');
    }

    public function get_users()
    {
        $users=DB::table('bookings')->join('users','users.id','=','bookings.id')
            ->select('bookings.id','users.name','users.email')->orderBy('bookings.id')->get();
        $exercises=DB::table('exercises')->get();
        $data = array('exercises' => $exercises,'users'=>$users);
       // return $data;
        return view('Exercise.assignExercise',$data);
    }
    public function track($id)
    {
        $users=DB::table('bookings')->join('users','users.id','=','bookings.id')
            ->rightJoin('exercise_bookings','exercise_bookings.booking_id','=','bookings.id')->orderBy('exercise_bookings.date')
            ->where('exercise_bookings.exercise_id','=',$id)
            ->select('exercise_bookings.id','exercise_bookings.exercise_id','exercise_bookings.date','users.name','users.email')->get();
        $exercises=DB::table('exercises')->where('id',$id)->get();
        $data = array('exercise' => $exercises[0],'users'=>$users);
        return view('exercise.track',$data);
    }
    public function delete_assign($id)
    {
        $ex=DB::table('exercise_bookings')->where('id', $id)->get();
        DB::table('exercise_bookings')->where('id', $id)->delete();
        return redirect()->route('trackExercise', [$ex[0]->exercise_id]);
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
        return redirect("/viewExercise");

    }
}

