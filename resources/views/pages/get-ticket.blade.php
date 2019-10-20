@extends('layouts.master')


@section('content')
    

<!-- Breadcrumb Area Start -->
    <section class="breadcrumb-area bg-img bg-gradient-overlay jarallax" style="background-image: url(/img/bg-img/pre.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2 class="page-title">Get Ticket</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Get Ticket</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Area End -->
      <section class="section-padding-100-0">
        <div class="container">
 <div class="row">
               <!-- // Single Ticket Pricing Table -->
             <!--    <div class="col-12 col-lg-4">
                    <div class="single-ticket-pricing-table text-center mb-100 wow fadeInUp" data-wow-delay="300ms">
                        <h6 class="ticket-plan">1 day pass</h6>
                     <!--  Ticket Icon  --
                        <div class="ticket-icon">
                            <img src="/img/core-img/p1.png" alt="">
                        </div>
                        <h2 class="ticket-price"><span>$</span>59</h2>
                        <a href="#" class="btn confer-btn w-100 mb-30">Get Tickets <i class="zmdi zmdi-long-arrow-right"></i></a>
                       <!--  Ticket Pricing Table Details  --
                        <div class="ticket-pricing-table-details">
                            <p><i class="zmdi zmdi-check"></i> One Day Conference Ticket</p>
                            <p><i class="zmdi zmdi-check"></i> Coffee-break</p>
                            <p><i class="zmdi zmdi-check"></i> Lunch and Networking</p>
                            <p><i class="zmdi zmdi-check"></i> Keynote talk</p>
                            <p><i class="zmdi zmdi-check"></i> Talk to the Editors Session</p>
                        </div>
                    </div>
                </div> -->

              <!--  //Single Ticket Pricing Table  -->
                <div class="col-12 col-md-7 col-lg-7 center">
                    <div class="single-ticket-pricing-table active text-center mb-100 wow fadeInUp" data-wow-delay="300ms">
                        <h6 class="ticket-plan">Early Bird Ticket</h6>
                     <!--  Ticket Icon  -->
                        <div class="ticket-icon">
                            <img src="/img/core-img/p1.png" alt="">
                        </div>
                        <h5 class="strikethrough">On Door - 15000 Kyats</h5>
                        <h5 class="strikethrough">Early Ticket - 10000 Kyats</h5>
                        <h5>Early Bird Ticket - 5000 Kyats</h5>
                       <!--  <h2 class="ticket-price"><span>$</span>99</h2> -->
                        <a href="/register-your-ticket-process/" class="btn confer-btn width mb-30">Buy Now <i class="zmdi zmdi-long-arrow-right"></i></a>
                        <p><b>" Early bird ticket end on 25-10-2019, get your ticket today! "</b></p>
                        <!-- Ticket Pricing Table Details -->
                        <div class="ticket-pricing-table-details">
                            <p><i class="zmdi zmdi-check"></i> Two Day Conference Ticket</p>
                            <p><i class="zmdi zmdi-check"></i> Coffee-break</p>
                            <p><i class="zmdi zmdi-check"></i> Lunch and Networking</p>
                            <p><i class="zmdi zmdi-check"></i> Allow to  attend all sessions</p>
                        </div>
                    </div>
                </div>

              <!--  // Single Ticket Pricing Table -->
              <!--   <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-ticket-pricing-table text-center mb-100 wow fadeInUp" data-wow-delay="300ms">
                        <h6 class="ticket-plan">Group pass</h6>
                   <!--   // Ticket Icon  --
                        <div class="ticket-icon">
                            <img src="/img/core-img/p3.png" alt="">
                        </div>
                        <h2 class="ticket-price"><span>$</span>199</h2>
                        <a href="#" class="btn confer-btn w-100 mb-30">Get Tickets <i class="zmdi zmdi-long-arrow-right"></i></a>
                        <!-- // Ticket Pricing Table Details --
                        <div class="ticket-pricing-table-details">
                            <p><i class="zmdi zmdi-check"></i> One Day Conference Ticket</p>
                            <p><i class="zmdi zmdi-check"></i> Coffee-break</p>
                            <p><i class="zmdi zmdi-check"></i> Lunch and Networking</p>
                            <p><i class="zmdi zmdi-check"></i> Keynote talk</p>
                            <p><i class="zmdi zmdi-check"></i> Talk to the Editors Session</p>
                        </div>
                    </div>
                </div> -->
            </div> 
        </div>
    </section>
    @endsection