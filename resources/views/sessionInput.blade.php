@extends('layouts.common')

@section('styles')
<link rel="stylesheet" href="{{asset('css/userPost.css')}}">
@endsection

@section('navigation')
<nav class="navbar"> 
<ul class="nav"> 
      <li class="nav-item"><a class="nav-link " href="/home">Home</a></li> 
      <li class="nav-item"><a class="nav-link " href="/upload">FileUpload</a></li> 
      <li class="nav-item"><a class="nav-link" href="/posts">Posts</a></li> 
      <li class="nav-item"><a class="nav-link " href="/post">Post</a></li> 
      <li class="nav-item"><a class="nav-link" href="/firstlast">FirstLast</a></li>
      <li class="nav-item"><a class="nav-link active" href="/session">Session</a></li>
     
     
    </ul> 
</nav>
@endsection

@section('content')

@if(\Session::has('success'))
<div class="alert alert-danger">
  <h3>{{\Session::get('success')}}</h3>
</div>
@endif

<div class="post-form">
  <h2 class="post-header">Session</h2>
    <form role="form" action="/session" method="post" >
        <input type="hidden" class="" name="_token" value="{{csrf_token()}}">
        
        <div class="form-group">
            <label for="email">Email</label>
            <input class="form-control" type="text" name="email" id="s_email" placeholder="Email">
        </div>
    
        <div class="form-group">
        <label for="password">Password</label>
            <input class="form-control" type="password" name="password" id="s_password"  placeholder="Password">
        </div>
        <div class="form-group">
        <button class="btn btn-success"  type="submit">Save</button>
        </div>
    </form>
    <a href="/session-data" class="list-group-item list-group-item-action"><button class="btn btn-success">Session Data</button></a>
    <a href="/session-delete" class="list-group-item list-group-item-action"><button class="btn btn-success">Delete Session</button></a>
    @if (count($errors) > 0)
   <div class = "alert alert-danger">
      <ul>
         @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
         @endforeach
      </ul>
   </div>
@endif

</div>

@endsection