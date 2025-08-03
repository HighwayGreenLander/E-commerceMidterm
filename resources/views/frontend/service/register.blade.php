@extends('frontend/layout/master')

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

@section('title', 'Register for a New License')
@section('Service_avtive', 'active')

@section('content')
<div class="gtco-section border-bottom">
    <div class="gtco-container">

        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 text-center gtco-heading">
                <h2>What You’ll Need</h2>
                <p>Before you register, make sure you have these essential items ready to upload:</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="feature-left animate-box" data-animate-effect="fadeInLeft">
                    <span class="icon"><i class="fas fa-id-card"></i></span>
                    <div class="feature-copy">
                        <h3>Valid National ID or Passport</h3>
                        <p>This is required to verify your identity during the registration process.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="feature-left animate-box" data-animate-effect="fadeInLeft">
                    <span class="icon"><i class="fas fa-image"></i></span>
                    <div class="feature-copy">
                        <h3>Passport-Sized Photo</h3>
                        <p>Please prepare a clear, recent passport-style photo for your application.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="feature-left animate-box" data-animate-effect="fadeInLeft">
                    <span class="icon"><i class="fas fa-notes-medical"></i></span>
                    <div class="feature-copy">
                        <h3>Medical Certificate</h3>
                        <p>Optional at registration time, but required before your final approval.</p>
                    </div>
                </div>
            </div>
        </div>


        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 text-center gtco-heading">
                <h2>How It Works</h2>
            </div>

            <div class="col-md-6 col-sm-6">
                <div class="feature-left animate-box" data-animate-effect="fadeInLeft">
                    <span class="icon"><i class="fas fa-user-edit"></i></span>
                    <div class="feature-copy">
                        <h3>Step 1: Fill Out Personal Details</h3>
                        <p>Enter your name, contact info, and choose license type (Car or Motorcycle).</p>
                    </div>
                </div>

                <div class="feature-left animate-box" data-animate-effect="fadeInLeft">
                    <span class="icon"><i class="fas fa-upload"></i></span>
                    <div class="feature-copy">
                        <h3>Step 2: Upload Your Documents</h3>
                        <p>Upload your National ID, passport photo, and optional medical certificate securely.</p>
                    </div>
                </div>

                <div class="feature-left animate-box" data-animate-effect="fadeInLeft">
                    <span class="icon"><i class="fas fa-map-marker-alt"></i></span>
                    <div class="feature-copy">
                        <h3>Step 3: Select Test Center</h3>
                        <p>Choose a test location and schedule your written exam conveniently.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-sm-6">
                <div class="feature-left animate-box" data-animate-effect="fadeInLeft">
                    <span class="icon"><i class="fas fa-envelope-open-text"></i></span>
                    <div class="feature-copy">
                        <h3>Step 4: Get Confirmation</h3>
                        <p>Receive confirmation via SMS or email with your booking details and next steps.</p>
                    </div>
                </div>

                <div class="feature-left animate-box" data-animate-effect="fadeInLeft">
                    <span class="icon"><i class="fas fa-lock"></i></span>
                    <div class="feature-copy">
                        <h3>Step 5: Data Security</h3>
                        <p>All data is encrypted and processed through official government systems for safety.</p>
                    </div>
                </div>

                <div class="feature-left animate-box" data-animate-effect="fadeInLeft">
                    <span class="icon"><i class="fas fa-flag"></i></span>
                    <div class="feature-copy">
                        <h3>Start Your Registration</h3>
                        <p>Take the first step toward legal driving in Cambodia below.</p>
                       
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
                <h2>Driver’s License Registration Form</h2>
                <p>Please complete the form below to register for your new driver’s license.</p>
            </div>
        </div>

        <div class="row animate-box">
            <div class="col-md-10 col-md-offset-1">
                <form method="POST"  enctype="multipart/form-data">
                    @csrf

                    <h4 class="text-primary">🧍 Personal Information</h4>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="first_name">First Name <span class="text-danger">*</span></label>
                            <input type="text" name="first_name" class="form-control" required>
                        </div>
                        <div class="col-md-6">
                            <label for="last_name">Last Name <span class="text-danger">*</span></label>
                            <input type="text" name="last_name" class="form-control" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="gender">Gender <span class="text-danger">*</span></label>
                            <select name="gender" class="form-control" required>
                                <option value="">-- Select Gender --</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="dob">Date of Birth <span class="text-danger">*</span></label>
                            <input type="date" name="dob" class="form-control" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="email">Email Address <span class="text-danger">*</span></label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                        <div class="col-md-6">
                            <label for="phone">Phone Number <span class="text-danger">*</span></label>
                            <input type="text" name="phone" class="form-control" required>
                        </div>
                    </div>

                    <h4 class="text-primary">📄 License Information</h4>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="license_type">License Type <span class="text-danger">*</span></label>
                            <select name="license_type" class="form-control" required>
                                <option value="">-- Choose Type --</option>
                                <option value="car">Car</option>
                                <option value="motorcycle">Motorcycle</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="test_center">Test Center <span class="text-danger">*</span></label>
                            <select name="test_center" class="form-control" required>
                                <option value="">-- Select Center --</option>
                                <option value="phnom_penh">Phnom Penh</option>
                                <option value="siem_reap">Siem Reap</option>
                                <option value="battambang">Battambang</option>
                                <option value="kampong_cham">Kampong Cham</option>
                                <option value="preah_sihanouk">Preah Sihanouk</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="test_date">Preferred Test Date <span class="text-danger">*</span></label>
                        <input type="date" name="test_date" class="form-control" required>
                    </div>

                    <h4 class="text-primary">📎 Document Uploads</h4>
                    <div class="form-group">
                        <label for="national_id">National ID or Passport <span class="text-danger">*</span></label>
                        <input type="file" name="national_id" class="form-control" accept=".pdf,.jpg,.jpeg,.png" required>
                    </div>

                    <div class="form-group">
                        <label for="photo">Passport-Sized Photo <span class="text-danger">*</span></label>
                        <input type="file" name="photo" class="form-control" accept=".jpg,.jpeg,.png" required>
                    </div>

                    <div class="form-group">
                        <label for="medical_cert">Medical Certificate (Optional)</label>
                        <input type="file" name="medical_cert" class="form-control" accept=".pdf,.jpg,.jpeg,.png">
                    </div>

                    <div class="form-group">
                        <a  class="btn btn-success btn-block" href="{{route('checkout')}}">
                            Submit Registration
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection
