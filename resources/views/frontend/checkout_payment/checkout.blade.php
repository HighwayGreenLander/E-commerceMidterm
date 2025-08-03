@extends('frontend/layout/master')

@section('title', 'Checkout Registration')
@section('Service_avtive', 'active')

@section('header')
<header id="gtco-header" class="gtco-cover gtco-cover-xs" role="banner" style="background-image:url('https://pppenglish.sgp1.digitaloceanspaces.com/image/large/field/image/topic-16.-khmer-national-identity-card-by-hong-menea-2.jpg');background-repeat: no-repeat;background-size: cover;background-position: center;">
    <div class="overlay"></div>
    <div class="gtco-container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
                <div class="display-t">
                    <div class="display-tc">
                        <h1 class="animate-box" data-animate-effect="fadeInUp">Register for a New Driver’s License</h1>
                        <h2 class="animate-box" data-animate-effect="fadeInUp">
                            Applying for your first driver’s license has never been easier. Our online registration system guides you through every step — from account creation to exam booking — without needing to visit the office in person.
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
@endsection

@section('content')
<div class="gtco-section border-bottom">
    <div class="gtco-container">
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 text-center gtco-heading">
                <h2>Checkout</h2>
                <p>Review and complete your registration below.</p>
            </div>
        </div>

        <div class="row animate-box">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-primary" style="box-shadow: 0 4px 10px rgba(0,0,0,0.1);">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fas fa-receipt"></i> Registration Summary</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="list-group">
                                    <li class="list-group-item"><strong><i class="fas fa-user"></i> Name:</strong> John Doe</li>
                                    <li class="list-group-item"><strong><i class="fas fa-envelope"></i> Email:</strong> johndoe@example.com</li>
                                    <li class="list-group-item"><strong><i class="fas fa-phone"></i> Phone:</strong> +855 123 456 789</li>
                                    <li class="list-group-item"><strong><i class="fas fa-id-card"></i> License Type:</strong> Motorcycle</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="list-group">
                                    <li class="list-group-item"><strong><i class="fas fa-map-marker-alt"></i> Test Center:</strong> Phnom Penh</li>
                                    <li class="list-group-item"><strong><i class="fas fa-calendar-alt"></i> Test Date:</strong> August 15, 2025</li>
                                    <li class="list-group-item"><strong><i class="fas fa-money-bill"></i> Price:</strong> $30.00</li>
                                </ul>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group text-center" style="margin-top: 20px;">
                            <a class="btn btn-success btn-lg" href="{{route('payment')}}"><i class="fas fa-credit-card"></i> Confirm & Pay</a>
                            <a href="{{ route('register-new-license') }}" class="btn btn-link">Edit Information</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
