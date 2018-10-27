<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\questionaire;

class questionnaireController extends Controller
{
    //


    public function create(Request $request,$id)
    {


        if($request->isMethod('post'))
        {
            $questionaire=new questionaire();
            $questionaire->question_one=$request->input("question_one");
            $questionaire->question_two=$request->input("question_two");
            $questionaire->question_three=$request->input("question_three");
            $questionaire->question_four=$request->input("question_four");
            $questionaire->question_five=$request->input("question_five");
            $questionaire->question_six=$request->input("question_six");
            $questionaire->question_seven=$request->input("question_seven");
            $questionaire->question_eight=$request->input("question_eight");
            $questionaire->question_nine=$request->input("question_nine");
            $questionaire->question_ten=$request->input("question_ten");
            $questionaire->question_eleven=$request->input("question_eleven");
            $questionaire->question_twelve=$request->input("question_twelve");
            $questionaire->question_thirteen=$request->input("question_thirteen");
            $questionaire->question_fourteen=$request->input("question_fourteen");
            $questionaire->question_fifteen=$request->input("question_fifteen");
            $questionaire->question_sixteen=$request->input("question_sixteen");
            $questionaire->question_seventeen=$request->input("question_seventeen");
            $questionaire->book_id=$id;
            $questionaire->save();



            return redirect("/book");
        }
        $data = array('id' => $id);

        return view('questionnaire.create',$data);
    }
}
