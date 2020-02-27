@extends('layouts.common')

@section('styles')
<link rel="stylesheet" href="{{asset('css/home.css')}}">
@endsection

@section('navigation')
<nav class="navbar"> 
<ul class="nav"> 
      <li class="nav-item"><a class="nav-link active" href="/home">Home</a></li> 
      <li class="nav-item"><a class="nav-link" href="/upload">FileUpload</a></li> 
      <li class="nav-item"><a class="nav-link" href="/database">Database</a></li> 
     
    </ul> 
</nav>
@endsection

@section('content')
 
 @foreach($images as $image)
    <div class="image_content">
        <img class="image_object" src="{{ asset('uploads/' . $image->getFilename()) }}">
    </div>
 
@endforeach

@endsection