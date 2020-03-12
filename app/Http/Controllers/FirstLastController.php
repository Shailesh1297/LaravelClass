<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstLastController extends Controller
{
    //

    public function show()
    {
        return view('firstLastDigit',['title'=>'FirstLastDigit']);
    }
}
