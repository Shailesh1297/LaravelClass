<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function home()
    {
        $images =\File::allFiles(public_path('uploads'));

      
     
            return view('home',["title"=>"Home","images"=>$images]);
        
    }
}
