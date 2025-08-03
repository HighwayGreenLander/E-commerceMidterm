@extends('frontend/layout/master')

@section('header')
<header id="gtco-header" class="gtco-cover gtco-cover-xs" role="banner" style="background-image:url('https://pppenglish.sgp1.digitaloceanspaces.com/image/large/field/image/topic-16.-khmer-national-identity-card-by-hong-menea-2.jpg');background-repeat: no-repeat;background-size: cover;background-position: center;">
    <div class="overlay"></div>
    <div class="gtco-container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
                <div class="display-t">
                    <div class="display-tc">
                        <h1 class="animate-box" data-animate-effect="fadeInUp">Latest News & Announcements</h1>
                        <h2 class="animate-box" data-animate-effect="fadeInUp">
                            Stay up-to-date with important updates regarding licensing, road safety, exam schedules, and policy changes.
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
@endsection

@section('title', 'Latest News')
@section('News_avtive', 'active')

@section('content')
@php
    // News data - you can replace/populate dynamically later
    $news = [
        [
            'title' => 'New Road Safety Campaign Launched Nationwide',
            'image_url' => 'https://images.unsplash.com/photo-1504384308090-c894fdcc538d?auto=format&fit=crop&w=800&q=70',
            'created_at' => '2025-07-20',
            'description' => 'The Ministry of Transport has launched a new road safety awareness campaign targeting young drivers to reduce traffic accidents and fatalities across Cambodia.',
            'url' => '#'
        ],
        [
            'title' => 'Simplified Process for Driver’s License Renewal',
            'image_url' => 'https://images.unsplash.com/photo-1568605114967-8130f3a36994?auto=format&fit=crop&w=800&q=70',
            'created_at' => '2025-07-15',
            'description' => 'Drivers can now renew their licenses online with an easier and faster process, eliminating the need to wait in long lines at licensing offices.',
            'url' => '#'
        ],
        [
            'title' => 'Upcoming Driving Test Dates Released for August',
            'image_url' => 'https://images.unsplash.com/photo-1494526585095-c41746248156?auto=format&fit=crop&w=800&q=70',
            'created_at' => '2025-07-10',
            'description' => 'The licensing department has announced the schedule for driving tests in August. Applicants are encouraged to book their slots early via the online system.',
            'url' => '#'
        ],
        [
            'title' => 'New Online Booking System Improves User Experience',
            'image_url' => 'https://images.unsplash.com/photo-1501594907352-04cda38ebc29?auto=format&fit=crop&w=800&q=70',
            'created_at' => '2025-07-05',
            'description' => 'Our new online booking system allows applicants to schedule appointments more easily with fewer errors and faster confirmations.',
            'url' => '#'
        ],
    ];
@endphp

<div class="gtco-section border-bottom">
    <div class="gtco-container">

        <!-- News Slider Carousel -->
        <div id="newsCarousel" class="carousel slide animate-box" data-ride="carousel" style="margin-bottom: 50px;">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                @foreach($news as $index => $item)
                    <li data-target="#newsCarousel" data-slide-to="{{ $index }}" class="{{ $index === 0 ? 'active' : '' }}"></li>
                @endforeach
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                @foreach($news as $index => $item)
                <div class="item {{ $index === 0 ? 'active' : '' }}">
                    <img src="{{ $item['image_url'] }}" alt="{{ $item['title'] }}" style="width:100%; max-height:400px; object-fit:cover;">
                    <div class="carousel-caption" style="background-color: rgba(0,0,0,0.5); padding:15px; border-radius:5px;">
                        <h3>{{ $item['title'] }}</h3>
                        <p>{{ \Illuminate\Support\Str::limit($item['description'], 120) }}</p>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#newsCarousel" role="button" data-slide="prev" style="background-image:none;">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true" style="color:#fff; font-size: 30px;"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#newsCarousel" role="button" data-slide="next" style="background-image:none;">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true" style="color:#fff; font-size: 30px;"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <!-- News List -->
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 text-center gtco-heading">
                <h2>Recent News</h2>
                <p>Catch up on the latest news, regulations, and service updates from the Licensing Department.</p>
            </div>
        </div>

        <div class="row">
            @foreach ($news as $item)
            <div class="col-md-12 animate-box" style="margin-bottom:30px;">
                <div class="thumbnail">
                    <img src="{{ $item['image_url'] }}" alt="{{ $item['title'] }}" class="img-responsive" style="max-height:350px; object-fit:cover; width:100%;">
                    <div class="caption" style="padding:20px;">
                        <h3>{{ $item['title'] }}</h3>
                        <small class="text-muted">Posted on {{ \Carbon\Carbon::parse($item['created_at'])->format('F d, Y') }}</small>
                        <p>{{ \Illuminate\Support\Str::limit($item['description'], 250) }}</p>
                        <p><a href="{{ $item['url'] }}" class="btn btn-primary btn-sm">Read More</a></p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</div>
@endsection
