@extends('frontend/layout/master')

@section('header')
{{-- <header id="gtco-header" class="gtco-cover gtco-cover-xs" role="banner" 
  style="background-image: url('https://pppenglish.sgp1.digitaloceanspaces.com/image/large/field/image/topic-16.-khmer-national-identity-card-by-hong-menea-2.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center;">
  <div class="overlay"></div>
  <div class="gtco-container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2 text-center">
        <div class="display-t">
          <div class="display-tc">
            <h1 class="animate-box" data-animate-effect="fadeInUp">Register</h1>
            <h2 class="animate-box" data-animate-effect="fadeInUp">Create a new account to get started</h2>
          </div>
        </div>
      </div>
    </div>
  </div>
</header> --}}
@endsection

@section('title', 'Register')
@section('Register_active', 'active')

@section('content')
<div class="gtco-section border-bottom">
  <div class="gtco-container">
    <div class="row animate-box">
      <div class="col-md-6 col-md-offset-3">
        <h2 class="text-center">Create Your Account</h2>

        <form method="POST" action="{{ route('register') }}">
          @csrf

          <div class="form-group">
            <label for="name">Full Name</label>
            <input 
              type="text" 
              name="name" 
              id="name" 
              class="form-control" 
              placeholder="Enter your full name" 
              required 
              autofocus>
          </div>

          <div class="form-group">
            <label>Register by:</label><br>
            <label><input type="radio" name="register_by" value="email" checked> Email</label> &nbsp;&nbsp;
            <label><input type="radio" name="register_by" value="phone"> Phone Number</label>
          </div>

          <div class="form-group" id="email-group">
            <label for="email">Email address</label>
            <input 
              type="email" 
              name="email" 
              id="email" 
              class="form-control" 
              placeholder="Enter your email" >
          </div>

          <div class="form-group" id="phone-group" style="display:none;">
            <label for="phone">Phone Number</label>
            <input 
              type="tel" 
              name="phone" 
              id="phone" 
              class="form-control" 
              placeholder="Enter your phone number" >
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
            <label for="password_confirmation">Confirm Password</label>
            <input 
              type="password" 
              name="password_confirmation" 
              id="password_confirmation" 
              class="form-control" 
              placeholder="Confirm your password" 
              required>
          </div>

          <button type="submit" class="btn btn-primary btn-block">Register</button>
        </form>

        <div class="text-center" style="margin-top:15px;">
          Already have an account? <a href="{{ route('login') }}">Login here</a>
        </div>

      </div>
    </div>
  </div>
</div>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    const emailGroup = document.getElementById('email-group');
    const phoneGroup = document.getElementById('phone-group');
    const radios = document.getElementsByName('register_by');

    radios.forEach(radio => {
      radio.addEventListener('change', function() {
        if (this.value === 'email') {
          emailGroup.style.display = 'block';
          phoneGroup.style.display = 'none';
          // Optionally clear phone input
          document.getElementById('phone').value = '';
        } else {
          emailGroup.style.display = 'none';
          phoneGroup.style.display = 'block';
          // Optionally clear email input
          document.getElementById('email').value = '';
        }
      });
    });
  });
</script>
@endsection
