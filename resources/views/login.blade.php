@extends('layouts.common')

@section('styles')
<link rel="stylesheet" href="{{asset('css/login.css')}}">
@endsection


@section('content')
<div class="login-form">
  <h2 class="login-header">Login</h2>
    <form role="form" action="/login" method="post">
        <input type="hidden" class="" name="_token" value="{{csrf_token()}}">
        <div class="form-group">
            <label for="email">Email</label>
            <input class="form-control" type="email" name="email" id="login_email" placeholder="Email">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input class="form-control" type="password" name="password" id="login_password"  placeholder="Password">
        </div>
        <div class="form-group">
        <button class="btn btn-success"  type="submit">LOGIN</button>
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