@extends('Frontend/layout/master')

@section('header')
    <header id="gtco-header" class="gtco-cover gtco-cover-xs" role="banner" style="background-image:url('https://pppenglish.sgp1.digitaloceanspaces.com/image/large/field/image/topic-16.-khmer-national-identity-card-by-hong-menea-2.jpg');background-repeat: no-repeat;background-size: cover;background-position: center;">
        <div class="overlay"></div>
        <div class="gtco-container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <div class="display-t">
                        <div class="display-tc">
                            <h1 class="animate-box" data-animate-effect="fadeInUp">Driver’s License Services</h1>
                            <h2 class="animate-box" data-animate-effect="fadeInUp">Simplify your journey to getting, renewing, and managing your driver’s license online in Cambodia</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
@endsection

@section('title', 'Driver License Services')
@section('Service_avtive', 'active')

@section('content')

    <div class="gtco-section border-bottom">
        <div class="gtco-container">
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2 text-center gtco-heading">
                    <h2>Our Core Services</h2>
                    <p>Experience fast, secure, and convenient online services for driver’s license registration, renewal, testing, and more — all designed for Cambodia's drivers.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="feature-left animate-box" data-animate-effect="fadeInLeft">
                        <span class="icon">
                            <i class="fas fa-user"></i>
                        </span>
                        <div class="feature-copy">
                            <h3>Register for a New License</h3>
                            <p>Easily submit your application for a car or motorcycle license with document uploads and exam scheduling online.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-left animate-box" data-animate-effect="fadeInLeft">
                        <span class="icon">
                            <i class="fas fa-sync-alt"></i>
                        </span>
                        <div class="feature-copy">
                            <h3>Renew Your License</h3>
                            <p>Quickly renew your existing license online, upload required documents, and select pickup or delivery options.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-left animate-box" data-animate-effect="fadeInLeft">
                        <span class="icon">
                            <i class="fas fa-calendar-alt"></i>
                        </span>
                        <div class="feature-copy">
                            <h3>Book Your Driving Test</h3>
                            <p>Schedule your written and practical exams at a test center and time that fits your needs with instant confirmation.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="feature-left animate-box" data-animate-effect="fadeInLeft">
                        <span class="icon">
                            <i class="fas fa-search"></i>
                        </span>
                        <div class="feature-copy">
                            <h3>Check Application Status</h3>
                            <p>Track your application progress or renewal status anytime and get real-time updates on your license.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-left animate-box" data-animate-effect="fadeInLeft">
                        <span class="icon">
                            <i class="fas fa-download"></i>
                        </span>
                        <div class="feature-copy">
                            <h3>Download Documents</h3>
                            <p>Access appointment slips, test confirmations, and other important documents instantly for a smooth process.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-left animate-box" data-animate-effect="fadeInLeft">
                        <span class="icon">
                            <i class="fas fa-headset"></i>
                        </span>
                        <div class="feature-copy">
                            <h3>Customer Support</h3>
                            <p>Get assistance and answers to your questions to ensure your driver’s license process is hassle-free.</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <div class="gtco-section">
        <div class="gtco-container">

            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2 text-center gtco-heading">
                    <h2>Why Choose Us?</h2>
                    <p>We combine technology and expertise to deliver reliable, user-friendly, and secure driver’s license services across Cambodia.</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="feature-left animate-box" data-animate-effect="fadeInLeft">
                        <span class="icon">
                            <i class="fas fa-check-circle"></i>
                        </span>
                        <div class="feature-copy">
                            <h3>Fast & Paperless</h3>
                            <p>Complete your applications and renewals online with no long queues or paperwork.</p>
                        </div>
                    </div>

                    <div class="feature-left animate-box" data-animate-effect="fadeInLeft">
                        <span class="icon">
                            <i class="fas fa-mobile-alt"></i>
                        </span>
                        <div class="feature-copy">
                            <h3>Mobile Friendly</h3>
                            <p>Our platform works seamlessly on phones, tablets, and desktops for your convenience.</p>
                        </div>
                    </div>

                    <div class="feature-left animate-box" data-animate-effect="fadeInLeft">
                        <span class="icon">
                            <i class="fas fa-language"></i>
                        </span>
                        <div class="feature-copy">
                            <h3>Bilingual Support</h3>
                            <p>Available in Khmer and English to serve all users effectively.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="feature-left animate-box" data-animate-effect="fadeInLeft">
                        <span class="icon">
                            <i class="fas fa-lock"></i>
                        </span>
                        <div class="feature-copy">
                            <h3>Secure & Reliable</h3>
                            <p>We prioritize your privacy and data security with robust systems.</p>
                        </div>
                    </div>

                    <div class="feature-left animate-box" data-animate-effect="fadeInLeft">
                        <span class="icon">
                            <i class="fas fa-headset"></i>
                        </span>
                        <div class="feature-copy">
                            <h3>24/7 Customer Support</h3>
                            <p>Our team is ready to assist you anytime with your queries.</p>
                        </div>
                    </div>

                    <div class="feature-left animate-box" data-animate-effect="fadeInLeft">
                        <span class="icon">
                            <i class="fas fa-users"></i>
                        </span>
                        <div class="feature-copy">
                            <h3>Trusted by Thousands</h3>
                            <p>Serving thousands of users nationwide with trusted, official driver’s license services.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row"></div>
        </div>
    </div>

    <div id="gtco-subscribe">
        <div class="gtco-container">
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2 text-center gtco-heading">
                    <h2>Subscribe for Updates</h2>
                    <p>Be the first to know about important news, service updates, and helpful tips related to driver’s license registration, renewal, and testing in Cambodia.</p>
                </div>
            </div>
            <div class="row animate-box">
                <div class="col-md-12">
                    <form class="form-inline">
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group">
                                <label for="email" class="sr-only">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Your Email">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group">
                                <label for="name" class="sr-only">Name</label>
                                <input type="text" class="form-control" id="name" placeholder="Your Name">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <button type="submit" class="btn btn-default btn-block">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
