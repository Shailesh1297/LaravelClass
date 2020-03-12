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
<div class="list-group">
  <ol type=>
@if(count($datas) > 0)
  @foreach($datas as $data)
  <div class="posts">
  <li><a href="/posts/{{$data->id}}" class="list-group-item list-group-item-action post-item">{{$data->title}}</a>
   <div class="post-item">created on:{{$data->created_at}}</div>
   <diV class="post-item">updated on:{{$data->updated_at}}</div>
</li>
</div>
  @endforeach
@endif
</ol>
</div>
@endsection