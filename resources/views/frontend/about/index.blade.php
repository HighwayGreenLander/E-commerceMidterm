@extends('Frontend/layout/master')

@section('header')
<header id="gtco-header" class="gtco-cover gtco-cover-xs" role="banner" style="background-image:url('https://mptc.gov.kh/wp-content/uploads/2021/04/traffic-law.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center;">
    <div class="overlay"></div>
    <div class="gtco-container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
                <div class="display-t">
                    <div class="display-tc">
                        <h1 class="animate-box" data-animate-effect="fadeInUp">Cambodia’s Driver Licensing System</h1>
                        <h2 class="animate-box" data-animate-effect="fadeInUp">
                            Learn how Cambodia is advancing driver licensing and road safety through regulation and technology.
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
@endsection

@section('title', 'Cambodia Licensing Information')
@section('About_avtive', 'active')

@section('content')
<div class="gtco-section border-bottom">
    <div class="gtco-container">

        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 text-center gtco-heading">
                <h2><i class="fas fa-traffic-light"></i> Licensing in Cambodia</h2>
                <p>Cambodia’s Ministry of Public Works and Transport (MPWT) oversees the issuance of driver licenses across different vehicle categories. With the goal of improving traffic safety and service accessibility, they’ve introduced online registration and digital documentation systems.</p>
            </div>
        </div>

        <div class="row animate-box">
            <div class="col-md-6">
                <h3><i class="fas fa-car"></i> License Types</h3>
                <ul>
                    <li><i class="fas fa-id-card"></i> A1, A2 – Motorcycles</li>
                    <li><i class="fas fa-car-side"></i> B – Light vehicles</li>
                    <li><i class="fas fa-truck"></i> C, D – Trucks and buses</li>
                </ul>
            </div>
            <div class="col-md-6">
                <h3><i class="fas fa-cogs"></i> Digital Services</h3>
                <p>The MPWT has launched e-services for:</p>
                <ul>
                    <li><i class="fas fa-file-alt"></i> New license registration</li>
                    <li><i class="fas fa-sync-alt"></i> Renewal applications</li>
                    <li><i class="fas fa-calendar-check"></i> Test scheduling</li>
                    <li><i class="fas fa-search"></i> Application status tracking</li>
                </ul>
            </div>
        </div>

        <div class="row animate-box">
            <div class="col-md-12">
                <h3><i class="fas fa-shield-alt"></i> Road Safety Goals</h3>
                <p>
                    Cambodia has adopted the Decade of Action for Road Safety plan and is collaborating with stakeholders to reduce road accidents by improving driver education, traffic enforcement, and vehicle inspection systems.
                </p>
            </div>
        </div>

    </div>
</div>
@endsection
