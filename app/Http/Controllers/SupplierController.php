<?php

namespace App\Http\Controllers;

use App\supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function view()
    {
        $supplier = supplier::all();
        $data = array('suppliers' => $supplier);
        return view('Supplier.view', $data);
    }
    public function create(Request $request)
    {
        if($request->isMethod('post'))
        {
            $supplier=new supplier();
            $supplier->name=$request->input("name");
            $supplier->save();


            return redirect("/viewSupplier");
        }

        return view('Supplier.create');
    }
}
