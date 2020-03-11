@extends('layouts.common')

@section('styles')
<link rel="stylesheet" href="{{asset('css/userPost.css')}}">
@endsection

@section('navigation')
<nav class="navbar"> 
<ul class="nav"> 
      <li class="nav-item"><a class="nav-link " href="/home">Home</a></li> 
      <li class="nav-item"><a class="nav-link active" href="/upload">FileUpload</a></li> 
      <li class="nav-item"><a class="nav-link" href="/post">Post</a></li> 
     
    </ul> 
</nav>
@endsection

@section('content')
<div class="post-form">
  <h2 class="post-header">Post</h2>
    <form role="form" action="/post" method="post" enctype="multipart/form-data">
        <input type="hidden" class="" name="_token" value="{{csrf_token()}}">
        
        <div class="form-group">
            <label for="title">Title</label>
            <input class="form-control" type="text" name="title" id="post_title" placeholder="Post title">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control"  name="description" id="post_description" placeholder="Post here">
            </textarea>
        </div>
        <div class="form-group">
            
            <input class="form-control" type="file" name="file" id="upload_file">
        </div>
        <div class="form-group">
        <button class="btn btn-success"  type="submit">Post</button>
        </div>
    </form>
    @if (count($errors) > 0)
   <div class = "alert alert-danger">
      <ul>
         @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
         @endforeach
      </ul>
   </div>
@endif

@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
	
        <strong>{{ $message }}</strong>
</div>
@endif
</div>

@endsection