<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class userController extends Controller
{
    //

    public function view(Request $request)
    {
        if ($request->isMethod('post')) {
            $user = User::find(Auth::id());
            $user->name = $request->input("name");
            $user->phone = $request->input("phone");
            $user->address = $request->input("address");
            $user->save();
            return redirect("/profile");

        }
        $user = User::find(Auth::id());
        $data = array('user' => $user);
        return view('auth.profile', $data);
    }

}
