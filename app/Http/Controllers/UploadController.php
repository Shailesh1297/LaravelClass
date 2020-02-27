<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class UploadController extends Controller
{
    //

    function showUpload()
    {

        return view('fileUpload',["title"=>"Upload File"]);
    }

    function validateUpload(Request $request)
    {
        $request->validate([
            'email'=>'required',
            'file'=>'required'
        ]);

        $file=$request->file('file');
        $name=date("Y-m-d_H_i_s").".".$file->getClientOriginalExtension();
        $destination="uploads";
        $file->move($destination,$name);

        return back()->with('success','File Uploaded Successfully!');

    }
}
