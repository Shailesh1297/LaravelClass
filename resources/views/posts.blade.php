@extends('layouts.common')

@section('styles')
<link rel="stylesheet" href="{{asset('css/posts.css')}}">
@endsection

@section('navigation')
<nav class="navbar"> 
<ul class="nav"> 
      <li class="nav-item"><a class="nav-link " href="/home">Home</a></li> 
      <li class="nav-item"><a class="nav-link " href="/upload">FileUpload</a></li> 
      <li class="nav-item"><a class="nav-link active" href="/posts">Posts</a></li> 
      <li class="nav-item"><a class="nav-link" href="/post">Post</a></li> 
     
    </ul> 
</nav>
@endsection

@section('content')

@if(count($datas) > 0)
  @foreach($datas as $data)
  <div class="post-div">
    
      <div class="post-title">
        <h5 class="mb-1">{{$data->title}}</h5>
       
      </div>
      <div class="post-content">
        <div class="post-image-block"><img class="post-image" src="{{ asset('uploads').'/'.$data->image}}" alt="post-image" width=100 height=100></div>
        
        <div class="post-desc"> <p class="mb-1">{{$data->description}}</p></div>
     </div>
    
   </div>

    
      
    
  @endforeach
@endif
   
@endsection