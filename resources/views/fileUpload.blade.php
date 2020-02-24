@extends('layouts.common')

@section('styles')
<link rel="stylesheet" href="{{asset('css/fileUpload.css')}}">
@endsection

@section('navigation')
<nav class="navbar"> 
<ul class="nav"> 
      <li class="nav-item"><a class="nav-link " href="/home">Home</a></li> 
      <li class="nav-item"><a class="nav-link active" href="/upload">FileUpload</a></li> 
      <li class="nav-item"><a class="nav-link" href="/database">Database</a></li> 
     
    </ul> 
</nav>
@endsection

@section('content')
<div class="upload-form">
  <h2 class="upload-header">Upload File</h2>
    <form role="form" action="/upload" method="post" enctype="multipart/form-data">
        <input type="hidden" class="" name="_token" value="{{csrf_token()}}">
        <div class="form-group">
            <label for="email">Email</label>
            <input class="form-control" type="email" name="email" id="upload_email" placeholder="Email">
        </div>
        <div class="form-group">
            
            <input class="form-control" type="file" name="file" id="upload_file">
        </div>
        <div class="form-group">
        <button class="btn btn-success"  type="submit">Upload</button>
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
</div>

@endsection