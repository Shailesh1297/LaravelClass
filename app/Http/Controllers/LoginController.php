<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Customer;
class LoginController extends Controller
{
    //

    public function showLogin()
    {
        return view('login',["title"=>"Login"]);
    }

    public function validateLogin(Request $request)
    {
     
        $this->validate($request,[
            'email'=>'required',
            'password'=>'required'
        ]);

        $email=$request->input('email');
        $password=$request->input('password');
        $data=Customer::where('email', $email)->first();
        if($password!=$data->password)
        {
            return redirect('/login')->with("warning","Login Failed");
        }

        $images =\File::allFiles(public_path('uploads'));
        return view('home',["title"=>"Home","images"=>$images]);
    }
}
