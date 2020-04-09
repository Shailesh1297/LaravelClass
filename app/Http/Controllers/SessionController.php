<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    //

    public function show()
    {
        return view('sessionInput',['title'=>'Session']);
    }

    public function save(Request $req)
    {
        $email=$req->input('email');
        $password=$req->input('password');
        $req->session()->put('email',$email);
        $req->session()->put('password',$password);
        
        return redirect('/session')->with('success',"Session Saved");
        
    }

    public function showSessionData(Request $req)
    {
       $data['email']= $req->session()->get('email');
        $data['password']=$req->session()->get('password');

        if($data['email']=='' && $data['password']=='')
        return "NO SESSION FOUND";
        else
        return $data;
        
    }

    public function deleteSession(Request $req)
    {
        $req->session()->forget('email');
        $req->session()->forget('password');
       return redirect()->back()->with("success","Session Deleted");
    }

}
