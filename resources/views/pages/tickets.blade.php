@extends('layouts.master')

@section('content')

    <!-- Breadcrumb Area Start -->
    <section class="breadcrumb-area bg-img bg-gradient-overlay jarallax" style="background-image: url(/img/bg-img/27.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2 class="page-title">Tickets</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Tickets</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Area End -->

    <!-- Our Ticket Pricing Table Area Start -->
    <section class="our-ticket-pricing-table-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <!-- Single Ticket Pricing Table -->
                <div class="col-12 col-lg-4">
                    <div class="single-ticket-pricing-table style-2 text-center mb-100 wow fadeInUp" data-wow-delay="300ms">
                        <h6 class="ticket-plan">1 day pass</h6>
                        <!-- Ticket Icon -->
                        <div class="ticket-icon">
                            <img src="/img/core-img/p1.png" alt="">
                        </div>
                        <h2 class="ticket-price"><span>$</span>59</h2>
                        <a href="#" class="btn confer-btn w-100 mb-30">Get Tickets <i class="zmdi zmdi-long-arrow-right"></i></a>
                        <!-- Ticket Pricing Table Details -->
                        <div class="ticket-pricing-table-details">
                            <p><i class="zmdi zmdi-check"></i> One Day Conference Ticket</p>
                            <p><i class="zmdi zmdi-check"></i> Coffee-break</p>
                            <p><i class="zmdi zmdi-check"></i> Lunch and Networking</p>
                            <p><i class="zmdi zmdi-check"></i> Keynote talk</p>
                            <p><i class="zmdi zmdi-check"></i> Talk to the Editors Session</p>
                        </div>
                    </div>
                </div>

                <!-- Single Ticket Pricing Table -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-ticket-pricing-table style-2 active text-center mb-100 wow fadeInUp" data-wow-delay="300ms">
                        <h6 class="ticket-plan">Full pass</h6>
                        <!-- Ticket Icon -->
                        <div class="ticket-icon">
                            <img src="/img/core-img/p2.png" alt="">
                        </div>
                        <h2 class="ticket-price"><span>$</span>99</h2>
                        <a href="#" class="btn confer-btn w-100 mb-30">Get Tickets <i class="zmdi zmdi-long-arrow-right"></i></a>
                        <!-- Ticket Pricing Table Details -->
                        <div class="ticket-pricing-table-details">
                            <p><i class="zmdi zmdi-check"></i> One Day Conference Ticket</p>
                            <p><i class="zmdi zmdi-check"></i> Coffee-break</p>
                            <p><i class="zmdi zmdi-check"></i> Lunch and Networking</p>
                            <p><i class="zmdi zmdi-check"></i> Keynote talk</p>
                            <p><i class="zmdi zmdi-check"></i> Talk to the Editors Session</p>
                        </div>
                    </div>
                </div>

                <!-- Single Ticket Pricing Table -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-ticket-pricing-table style-2 text-center mb-100 wow fadeInUp" data-wow-delay="300ms">
                        <h6 class="ticket-plan">Group pass</h6>
                        <!-- Ticket Icon -->
                        <div class="ticket-icon">
                            <img src="/img/core-img/p3.png" alt="">
                        </div>
                        <h2 class="ticket-price"><span>$</span>199</h2>
                        <a href="#" class="btn confer-btn w-100 mb-30">Get Tickets <i class="zmdi zmdi-long-arrow-right"></i></a>
                        <!-- Ticket Pricing Table Details -->
                        <div class="ticket-pricing-table-details">
                            <p><i class="zmdi zmdi-check"></i> One Day Conference Ticket</p>
                            <p><i class="zmdi zmdi-check"></i> Coffee-break</p>
                            <p><i class="zmdi zmdi-check"></i> Lunch and Networking</p>
                            <p><i class="zmdi zmdi-check"></i> Keynote talk</p>
                            <p><i class="zmdi zmdi-check"></i> Talk to the Editors Session</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Our Ticket Pricing Table Area End -->

    <!-- Call to Action Area Start -->
    <section class="call-to-action-area bg-img bg-gradient-overlay jarallax section-padding-100" style="background-image: url(img/bg-img/14.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="call-to-action-content text-center">
                        <div class="call-to-action-heading">
                            <h6>the event consistently</h6>
                            <h2>Osha Compliance</h2>
                        </div>
                        <div class="event-time">
                            <p><i class="zmdi zmdi-alarm-check"></i> 2-14 Jan 2019</p>
                            <p><i class="zmdi zmdi-map"></i> Mountain Resort, Phoenix, USA</p>
                        </div>
                    </div>

                    <div class="ticket-btn text-center">
                        <a href="#" class="btn confer-btn-white-2 mt-40">Get Tickets <i class="zmdi zmdi-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Call to Action Area End -->
@endsection