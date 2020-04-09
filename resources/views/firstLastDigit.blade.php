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
      <li class="nav-item"><a class="nav-link " href="/session">Session</a></li>
     
    </ul> 
</nav>
@endsection

@section('content')




@endsection