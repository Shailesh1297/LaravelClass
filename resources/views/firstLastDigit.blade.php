@extends('layouts.common')

@section('styles')
<link rel="stylesheet" href="{{asset('css/firstlast.css')}}">
@endsection

@section('navigation')
<nav class="navbar"> 
<ul class="nav"> 
      <li class="nav-item"><a class="nav-link " href="/home">Home</a></li> 
      <li class="nav-item"><a class="nav-link " href="/upload">FileUpload</a></li> 
      <li class="nav-item"><a class="nav-link" href="/posts">Posts</a></li> 
      <li class="nav-item"><a class="nav-link " href="/post">Post</a></li> 
      <li class="nav-item"><a class="nav-link active" href="/firstlast">FirstLast</a></li>
     
    </ul> 
</nav>
@endsection

@section('content')

{{ Form::open(['url' => '/firstlast']) }}
<div class="form-group">

  

    
    {{ Form::number("num",null, array_merge(['class' => 'form-control','placeholder'=>'number'])) }}

 
    {{ Form::number("first-num",null, array_merge(['class' => 'form-control','placeholder'=>'first-digit','disabled'=>'disabled'])) }}

   
    {{ Form::number("second-num",null, array_merge(['class' => 'form-control','placeholder'=>'second-digit','disabled'=>'disabled'])) }}

    {{Form::submit('find')}}
</div> 
{{ Form::close() }}
@if (count($errors) > 0)
   <div class = "alert alert-danger">
      <ul>
         @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
         @endforeach
      </ul>
   </div>
@endif
@endsection