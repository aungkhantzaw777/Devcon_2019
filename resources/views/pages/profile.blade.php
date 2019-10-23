@extends('layouts.master')

@section('content')
    <!-- Breadcrumb Area Start -->
    <section class="breadcrumb-area bg-img bg-gradient-overlay jarallax" style="background-image: url(/img/bg-img/27.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2 class="page-title">Welcom {{auth()->user()->username }}</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Profile</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Area End -->

    <!-- What We offer Area Start -->
    <section class="what-we-offer-area section-padding-100-70">
        <div class="container">
            <div class="row">
                <!-- Heading -->
                <div class="col-12">
                    <div class="section-heading-3 text-center wow fadeInUp" data-wow-delay="300ms">
                        <p>A Quick Recap About Devcon Yangon, Myanmar</p>
                        <h4>Your Ticket ID is </h4>
                        {!! QrCode::size(300)->generate('A basic example of QR code!') !!}
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Single We Offer Area -->
                <div class="col-12 col-md-6 col-xl-3">
                    <div class="single-we-offer-content text-center wow fadeInUp" data-wow-delay="0.3s">
                        <!-- Icon -->
                        <div class="offer-icon">
                            <img src="/img/core-img/icon.png" alt="">
                        </div>
                        <h5>8<br>Events</h5>
                        <p>We done 7 Devcon events in the past, between 2011 and 2017, and this year will be 8<sup>th.</sup></p>
                    </div>
                </div>
                 <!-- Single We Offer Area -->
                <div class="col-12 col-md-6 col-xl-3">
                    <div class="single-we-offer-content text-center wow fadeInUp" data-wow-delay="0.3s">
                        <!-- Icon -->
                        <div class="offer-icon">
                            <img src="/img/core-img/icon-2.png" alt="">
                        </div>
                         <h5>30<sup>+</sup><br>Topics</h5>
                        <p>Our conference covers over 30<sup>+</sup> topics every year, from programming to server tech.</p>
                    </div>
                </div>
                 <!-- Single We Offer Area -->
                <div class="col-12 col-md-6 col-xl-3">
                    <div class="single-we-offer-content text-center wow fadeInUp" data-wow-delay="0.3s">
                        <!-- Icon -->
                        <div class="offer-icon">
                            <img src="/img/core-img/icon-4.png" alt="">
                        </div>
                        <h5>40<sup>+</sup><br>Speakers</h5>
                        <p>Every year we have about 40<sup>+</sup> professional tech speakers contribute to our events.</p>
                    </div>
                </div>
                 <!-- Single We Offer Area -->
                <div class="col-12 col-md-6 col-xl-3">
                    <div class="single-we-offer-content text-center wow fadeInUp" data-wow-delay="0.3s">
                        <!-- Icon -->
                        <div class="offer-icon">
                            <img src="/img/core-img/attendees.png" alt="">
                        </div>
                         <h5>550 ~ 850<br>Attendees</h5>
                        <p>Every year there are about 550 to 850 attendees at Devcon Yangon events</p>
                    </div>
                </div>
            </div>
           <!--  <div class="row">
                <!-- Single We Offer Area --
                <div class="col-12 col-md-6 col-xl-3">
                    <div class="single-we-offer-content text-center wow fadeInUp" data-wow-delay="0.3s">
                        <!-- Icon --
                        <div class="offer-icon">
                            <img src="/img/core-img/icon.png" alt="">
                        </div>
                        <h5>Conference</h5>
                        <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque</p>
                    </div>
                </div>

                <!-- Single We Offer Area --
                <div class="col-12 col-md-6 col-xl-3">
                    <div class="single-we-offer-content text-center wow fadeInUp" data-wow-delay="0.3s">
                        <!-- Icon --
                        <div class="offer-icon">
                            <img src="/img/core-img/icon-2.png" alt="">
                        </div>
                        <h5>Workshops</h5>
                        <p>Temporibus autem quibusdam et aut officiis debitis aut rerum</p>
                    </div>
                </div>

                <!-- Single We Offer Area --
                <div class="col-12 col-md-6 col-xl-3">
                    <div class="single-we-offer-content text-center wow fadeInUp" data-wow-delay="0.3s">
                        <!-- Icon --
                        <div class="offer-icon">
                            <img src="/img/core-img/icon-3.png" alt="">
                        </div>
                        <h5>Coffee Breaks</h5>
                        <p>On the other hand, we denounce with righteous indignation</p>
                    </div>
                </div>

                <!-- Single We Offer Area --
                <div class="col-12 col-md-6 col-xl-3">
                    <div class="single-we-offer-content text-center wow fadeInUp" data-wow-delay="0.3s">
                        <!-- Icon --
                        <div class="offer-icon">
                            <img src="/img/core-img/icon-4.png" alt="">
                        </div>
                        <h5>Events</h5>
                        <p>These cases are perfectly simple and easy to distinguish in a free hour</p>
                    </div>
                </div>
            </div> -->
        </div>
    </section>
 
   

    

    
@endsection