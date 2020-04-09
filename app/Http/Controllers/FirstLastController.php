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

    public function find(Request $req)
    {
        $req->validate([
            'num'=>'required'
        ]);

        $num=$req->input('num');

        $size=strlen($num);
        $divisor=pow(10,($size-1));
         $temp=0;
        for($i=1;$i<$size;$i++)
        {
          $temp=$num%$divisor;
          if($i==1)
          {
              $lastnum=$num%$divisor;
          }
          if($i==($size-1))
          {
              $firstnum=$num%$divisor;
          }
          $num=$num/$divisor;
        
        }
        return $lastnum.$firstnum;

       
    }


}
