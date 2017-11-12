@extends('layouts.master')
@section('customcss')
  <link href="/css/login.css" rel="stylesheet">
@endsection
@section('nav')
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">Secure Diary</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fa fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="/login">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="/signup">SignUp</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

@endsection
@section('mainsection')
  <!-- Login form -->
  < <!-- Login form -->
  <!-- Login form -->
  <div class="wrapper">
    <form class="form-signin" method="POST" action="{{ route('signup') }}">
      {{ csrf_field() }}
      <h2 class="form-signin-heading">Please Sign Up</h2>
      <input id="name" placeholder="Your Name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
      <input id="email" placeholder="Your Email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
      <input id="password" placeholder="Password" type="password" class="form-control" name="password" required>
      <input id="password-confirm" placeholder="Confirm Password" type="password" class="form-control" name="password_confirmation" required>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Signup</button>
    </form>
  </div>


@endsection