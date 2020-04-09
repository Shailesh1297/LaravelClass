<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class UserPost extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    
     public function index()
    {
        $post=new Post;
        $data=$post->all();
    
   return view('posts',["title"=>"Posts",'datas'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'title'=>'required',
            'description'=>'required',
            'file'=>'required'
        ]);

        //image processsing
        $file=$request->file('file');
        $name=date("Y-m-d_H_i_s").".".$file->getClientOriginalExtension();
        $destination="uploads";
        $file->move($destination,$name);

        //title 
        $title=$request->input('title');

        //description
        $description=$request->input('description');

        //saving in database

        $post=new Post;

        $post->title=$title;

        $post->description=$description;

        $post->image=$name;

        $post->save();

        return redirect('/posts');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        //$post=new Post;
      
        

        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
          $data=Post::find($id);
          //$users = Post::where('id',1)->first();
       // return $data;
         return view('updatePost',['title'=>'Update','data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'title'=>'required',
            'description'=>'required',
            
        ]);

        $data=Post::find($id);
        $data->title=$request->input('title');
        $data->description=$request->input('description');
        $data->save();

        return redirect('/posts')->with('success','Data Updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $data=Post::find($id);
        $data->delete();
        return redirect('/posts')->with('success','Data Deleted');
    }
}
