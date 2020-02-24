<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class LoginController extends Controller
{
    //

    public function showLogin()
    {
        return view('login',["title"=>"Login"]);
    }

    public function validateLogin(Request $request)
    {
        print_r($request->all());
        $this->validate($request,[
            'email'=>'required',
            'password'=>'required'
        ]);
      return redirect('/home');
    }
}
