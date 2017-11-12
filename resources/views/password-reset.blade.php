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
  <div class="wrapper">
    <form class="form-signin" method="POST" action="{{ route('password.email') }}">
      <h2 class="form-signin-heading">Password Reset </h2>
      <input id="email" placeholder="Email Address" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

      @if ($errors->has('email'))
        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
      @endif
      <div id="margin"></div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Reset</button>
    </form>
  </div>

@endsection