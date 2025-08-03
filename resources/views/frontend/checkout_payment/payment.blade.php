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
<div class="gtco-section">
    <div class="gtco-container">
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 text-center gtco-heading">
                <h2>Payment</h2>
                <p>Secure your spot by completing your payment below.</p>
            </div>
        </div>

        <div class="row animate-box">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default" style="box-shadow: 0 4px 10px rgba(0,0,0,0.05);">
                    <div class="panel-heading"><strong><i class="fas fa-credit-card"></i> Payment Details</strong></div>
                    <div class="panel-body">
                        <form action="/payment/submit" method="POST">
                            <div class="form-group">
                                <label for="paymentMethod">Select Payment Method</label>
                                <select class="form-control" id="paymentMethod" name="paymentMethod" required>
                                    <option value="card">Credit/Debit Card</option>
                                    <option value="aba">ABA KHQR</option>
                                    <option value="acleda">ACLEDA KHQR</option>
                                    <option value="wing">Wing KHQR</option>
                                </select>
                            </div>
                            <div id="cardSection">
                                <div class="form-group">
                                    <label for="cardName">Cardholder Name</label>
                                    <input type="text" class="form-control" id="cardName" name="cardName" placeholder="John Doe">
                                </div>
                                <div class="form-group">
                                    <label for="cardNumber">Card Number</label>
                                    <input type="text" class="form-control" id="cardNumber" name="cardNumber" placeholder="1234 5678 9012 3456">
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="expiry">Expiry Date</label>
                                        <input type="text" class="form-control" id="expiry" name="expiry" placeholder="MM/YY">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="cvv">CVV</label>
                                        <input type="text" class="form-control" id="cvv" name="cvv" placeholder="123">
                                    </div>
                                </div>
                            </div>
                            <div id="khqrSection" style="display: none;">
                                <p class="text-center"><strong>Please scan the KHQR code below to complete your payment.</strong></p>
                                <div class="text-center">
                                    <img id="khqrImage" src="" alt="KHQR Code" style="max-width: 100%; height: auto;">
                                </div>
                            </div>
                            <div class="text-center" style="margin-top: 20px;">
                                <a href="{{route('checkout')}}" class="btn btn-danger btn-lg"> Back To Checkout</a>
                                <button type="submit" class="btn btn-primary btn-lg"><i class="fas fa-lock"></i> Pay $30.00 Securely</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const methodSelect = document.getElementById("paymentMethod");
        const cardSection = document.getElementById("cardSection");
        const khqrSection = document.getElementById("khqrSection");
        const khqrImage = document.getElementById("khqrImage");

        methodSelect.addEventListener("change", function () {
            if (this.value === "card") {
                cardSection.style.display = "block";
                khqrSection.style.display = "none";
            } else {
                cardSection.style.display = "none";
                khqrSection.style.display = "block";

                if (this.value === "aba") {
                    khqrImage.src = "/images/khqr-aba.png";
                } else if (this.value === "acleda") {
                    khqrImage.src = "/images/khqr-acleda.png";
                } else if (this.value === "wing") {
                    khqrImage.src = "/images/khqr-wing.png";
                }
            }
        });
    });
</script>

@endsection
