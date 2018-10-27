<?php

namespace App\Http\Controllers;

use App\employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function view()
    {
        $employees = employee::all();
        $data = array('employees' => $employees);
        return view('Employee.view', $data);
    }
    public function create(Request $request)
    {
        if($request->isMethod('post'))
        {
            $employee=new employee();
            $employee->name=$request->input("name");
            $employee->salary=$request->input("salary");
            $employee->date_of_birth=$request->input("date_of_birth");
            $employee->phone=$request->input("phone");
            $employee->national_id=$request->input("national_id");
            $employee->job=$request->input("job");
            $employee->type=$request->input("type");
if ($request->input("insurance")!=null)
{
    $employee->insurance=true;
}
else
{
    $employee->insurance=false;

}
            $employee->save();


            return redirect("/viewEmployee");
        }

        return view('Employee.create');
    }
}
