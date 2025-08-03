@extends('frontend/layout/master')

@section('header')
<header id="gtco-header" class="gtco-cover gtco-cover-xs" role="banner" 
  style="background-image: url('https://pppenglish.sgp1.digitaloceanspaces.com/image/large/field/image/topic-16.-khmer-national-identity-card-by-hong-menea-2.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center;">
  <div class="overlay"></div>
  <div class="gtco-container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2 text-center">
        <div class="display-t">
          <div class="display-tc">
            <h1 class="animate-box" data-animate-effect="fadeInUp">Login</h1>
            <h2 class="animate-box" data-animate-effect="fadeInUp">Access your account to manage services</h2>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
@endsection

@section('title', 'Login')
@section('Login_active', 'active')

@section('content')
<div class="gtco-section border-bottom">
  <div class="gtco-container">
    <div class="row animate-box">
      <div class="col-md-6 col-md-offset-3">
        <h2 class="text-center">Please Log In</h2>

        <form method="POST" >
          @csrf

          <div class="form-group">
            <label for="email">Email address</label>
            <input 
              type="email" 
              name="email" 
              id="email" 
              class="form-control" 
              placeholder="Enter your email" 
              required 
              autofocus>
          </div>

          <div class="form-group">
            <label for="password">Password</label>
            <input 
              type="password" 
              name="password" 
              id="password" 
              class="form-control" 
              placeholder="Enter your password" 
              required>
          </div>

          <div class="form-group">
            <div class="checkbox">
              <label>
                <input type="checkbox" name="remember"> Remember Me
              </label>
            </div>
          </div>

          <a href="{{route('profile')}}" htype="submit" class="btn btn-primary btn-block">Log In</a>
        </form>

        <div class="text-center" style="margin-top:15px;">
          <a href="#">Forgot Your Password?</a> | 
          <a href="{{route('register')}}">Register</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
