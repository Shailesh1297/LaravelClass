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
      <li class="nav-item"><a class="nav-link " href="/firstlast">FirstLast</a></li>
      <li class="nav-item"><a class="nav-link " href="/session">Session</a></li>
     
    </ul> 
</nav>
@endsection

@section('content')

@if(\Session::has('success'))
<div class="alert alert-danger">
  <h3>{{\Session::get('success')}}</h3>
</div>
@endif

<div class="list-group">
  <ol type=>
@if(count($datas) > 0)
  @foreach($datas as $data)
  <div class="posts">
  <li>
  <div class="post-item">{{$data->title}}</div>
   <div class="post-item">created on:{{$data->created_at}}</div>
   <div class="post-item">updated on:{{$data->updated_at}}</div>
   <a href="/posts/{{$data->id}}/edit" class="list-group-item list-group-item-action post-item">  <button>Update</button></a>
   <div class="post-item">
     
          <form action="{{action('UserPost@destroy',$data->id)}}" method="post">
          <input type="hidden" class="" name="_token" value="{{csrf_token()}}">
                {{ method_field('DELETE') }}
            <button type=submit>Delete</button>
            </form>
  </div>
  </li>
  </div>
  @endforeach
@endif
</ol>
</div>
@endsection