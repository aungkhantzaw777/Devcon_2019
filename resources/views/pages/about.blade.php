@extends('layouts.master')

@section('content')
    <!-- Breadcrumb Area Start -->
    <section class="breadcrumb-area bg-img bg-gradient-overlay jarallax" style="background-image: url(/img/bg-img/27.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2 class="page-title">About DevCon</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">About DevCon</li>
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
                        <h4>Devcon In Numbers</h4>
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
    <!-- What We offer Area End -->

    <!-- About Us And Countdown Area Start -->
   <!--  <section class="about-us-countdown-area section-padding-100-0" id="about">
        <div class="container">
            <div class="row align-items-center">
                <!-- About Content
                <div class="col-12 col-md-6">
                    <div class="about-content-text mb-80">
                        <h6 class="wow fadeInUp" data-wow-delay="300ms">About DevCon</h6>
                        <h3 class="wow fadeInUp" data-wow-delay="300ms">Welcome to Developer Conference</h3>
                        <p class="wow fadeInUp" data-wow-delay="300ms">The 8th Developer Conference in Myanmar will be held on December 21st – 22th, 2019 at the MICT Park, Hlaing University Campus, Yangon, Myanmar.The conference is opened to all IT professionals who are involved in any kind of software and software related solution development; including but not limited to web applications, mobile applications, consumer applications, corporate applications, cloud computing, game programming, educational software, device drivers, natural language development, database design and administration, software testing, machine automation, character and voice recognition, image processing, data mining and processing, and security related software.</p>
                        <a href="#" class="btn confer-btn mt-50 wow fadeInUp" data-wow-delay="300ms">Interested <i class="zmdi zmdi-long-arrow-right"></i></a>
                    </div>
                </div>

                <!-- About Thumb 
                <div class="col-12 col-md-6">
                    <div class="about-thumb mb-80 wow fadeInUp" data-wow-delay="300ms">
                        <img src="/img/bg-img/2.png" alt="">
                    </div>
                </div>
            </div>
        </div>

        <!-- Counter Up Area 
        <div class="countdown-up-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-md-3">
                        <!-- Countdown Text 
                        <div class="countdown-content-text mb-100 wow fadeInUp" data-wow-delay="300ms">
                            <h6>Conference Date</h6>
                            <h4>Count Every Second Until the Event</h4>
                        </div>
                    </div>

                    <div class="col-12 col-md-9">
                        <div class="countdown-timer mb-100 wow fadeInUp" data-wow-delay="300ms">
                            <div id="clock"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- About Us And Countdown Area End -->

    <!-- Our Speakings Area Start -->
   <!--  <section class="our-speaker-area section-padding-100-60">
        <div class="container">
            <div class="row">
                <!-- Heading --
                <div class="col-12">
                    <div class="section-heading-3 text-center wow fadeInUp" data-wow-delay="300ms">
                        <p>Our Speakings</p>
                        <h4>Who’s speaking</h4>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Speaker Area --
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-speaker-area bg-gradient-overlay-2 wow fadeInUp" data-wow-delay="300ms">
                        <!-- Thumb --
                        <div class="speaker-single-thumb">
                            <img src="https://place-hold.it/500x542/" alt="">
                        </div>
                        <!-- Social Info --
                        <div class="social-info">
                            <a href="#"><i class="zmdi zmdi-facebook"></i></a>
                            <a href="#"><i class="zmdi zmdi-instagram"></i></a>
                            <a href="#"><i class="zmdi zmdi-twitter"></i></a>
                            <a href="#"><i class="zmdi zmdi-linkedin"></i></a>
                        </div>
                        <!-- Info --
                        <div class="speaker-info">
                            <h5>Speaker Name1</h5>
                            <p>Founder</p>
                        </div>
                    </div>
                </div>

                <!-- Single Speaker Area --
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-speaker-area bg-gradient-overlay-2 wow fadeInUp" data-wow-delay="300ms">
                        <!-- Thumb --
                        <div class="speaker-single-thumb">
                            <img src="https://place-hold.it/500x542/" alt="">
                        </div>
                        <!-- Social Info --
                        <div class="social-info">
                            <a href="#"><i class="zmdi zmdi-facebook"></i></a>
                            <a href="#"><i class="zmdi zmdi-instagram"></i></a>
                            <a href="#"><i class="zmdi zmdi-twitter"></i></a>
                            <a href="#"><i class="zmdi zmdi-linkedin"></i></a>
                        </div>
                        <!-- Info --
                        <div class="speaker-info">
                            <h5>Speaker Name2</h5>
                            <p>Product Lead</p>
                        </div>
                    </div>
                </div>

                <!-- Single Speaker Area --
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-speaker-area bg-gradient-overlay-2 wow fadeInUp" data-wow-delay="300ms">
                        <!-- Thumb --
                        <div class="speaker-single-thumb">
                            <img src="https://place-hold.it/500x542/" alt="">
                        </div>
                        <!-- Social Info --
                        <div class="social-info">
                            <a href="#"><i class="zmdi zmdi-facebook"></i></a>
                            <a href="#"><i class="zmdi zmdi-instagram"></i></a>
                            <a href="#"><i class="zmdi zmdi-twitter"></i></a>
                            <a href="#"><i class="zmdi zmdi-linkedin"></i></a>
                        </div>
                        <!-- Info --
                        <div class="speaker-info">
                            <h5>Speaker Name3</h5>
                            <p>Photographer</p>
                        </div>
                    </div>
                </div>

                <!-- Single Speaker Area --
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-speaker-area bg-gradient-overlay-2 wow fadeInUp" data-wow-delay="300ms">
                        <!-- Thumb --
                        <div class="speaker-single-thumb">
                            <img src="https://place-hold.it/500x542/" alt="">
                        </div>
                        <!-- Social Info --
                        <div class="social-info">
                            <a href="#"><i class="zmdi zmdi-facebook"></i></a>
                            <a href="#"><i class="zmdi zmdi-instagram"></i></a>
                            <a href="#"><i class="zmdi zmdi-twitter"></i></a>
                            <a href="#"><i class="zmdi zmdi-linkedin"></i></a>
                        </div>
                        <!-- Info --
                        <div class="speaker-info">
                            <h5>Speaker Name4</h5>
                            <p>Photographer</p>
                        </div>
                    </div>
                </div>

                <!-- Single Speaker Area --
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-speaker-area bg-gradient-overlay-2 wow fadeInUp" data-wow-delay="300ms">
                        <!-- Thumb --
                        <div class="speaker-single-thumb">
                            <img src="https://place-hold.it/500x542/" alt="">
                        </div>
                        <!-- Social Info --
                        <div class="social-info">
                            <a href="#"><i class="zmdi zmdi-facebook"></i></a>
                            <a href="#"><i class="zmdi zmdi-instagram"></i></a>
                            <a href="#"><i class="zmdi zmdi-twitter"></i></a>
                            <a href="#"><i class="zmdi zmdi-linkedin"></i></a>
                        </div>
                        <!-- Info --
                        <div class="speaker-info">
                            <h5>Speaker Name5</h5>
                            <p>UX Manager</p>
                        </div>
                    </div>
                </div>

                <!-- Single Speaker Area --
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-speaker-area bg-gradient-overlay-2 wow fadeInUp" data-wow-delay="300ms">
                        <!-- Thumb --
                        <div class="speaker-single-thumb">
                            <img src="https://place-hold.it/500x542/" alt="">
                        </div>
                        <!-- Social Info --
                        <div class="social-info">
                            <a href="#"><i class="zmdi zmdi-facebook"></i></a>
                            <a href="#"><i class="zmdi zmdi-instagram"></i></a>
                            <a href="#"><i class="zmdi zmdi-twitter"></i></a>
                            <a href="#"><i class="zmdi zmdi-linkedin"></i></a>
                        </div>
                        <!-- Info 
                        <div class="speaker-info">
                            <h5>Speaker Name6</h5>
                            <p>Product Design</p>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="more-speaker-btn text-center mt-20 mb-40 wow fadeInUp" data-wow-delay="300ms">
                        <a class="btn confer-btn" href="#">View All Speaker <i class="zmdi zmdi-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- Our Speakings Area End -->

    <!-- Our Gallery Area Start -->
    <div class="our-gallery-area section-padding-0-85">
        <div class="container-fluid">
            <div class="row">
                <!-- Single Gallery Thumb -->
                <div class="col-12 col-sm-3">
                    <div class="single-gallery-thumb wow fadeInUp" data-wow-delay="300ms">
                        <img src="/img/about-img/about-img3.jpg" alt="">
                    </div>
                </div>

                <!-- Single Gallery Thumb -->
                <div class="col-12 col-sm-3">
                    <div class="single-gallery-thumb wow fadeInUp" data-wow-delay="300ms">
                        <img src="/img/about-img/about-img4.jpg" alt="">
                    </div>
                </div>

                <!-- Single Gallery Thumb -->
                <div class="col-12 col-sm-6">
                    <div class="single-gallery-thumb wow fadeInUp" data-wow-delay="300ms">
                        <img src="/img/about-img/about-img1.jpg" alt="">
                    </div>
                </div>

                <!-- Single Gallery Thumb -->
                <div class="col-12 col-sm-6">
                    <div class="single-gallery-thumb wow fadeInUp" data-wow-delay="300ms">
                        <img src="/img/about-img/about-img2.jpg" alt="">
                    </div>
                </div>

                <!-- Single Gallery Thumb -->
                <div class="col-12 col-sm-3">
                    <div class="single-gallery-thumb wow fadeInUp" data-wow-delay="300ms">
                        <img src="/img/about-img/about-img5.jpg" alt="">
                    </div>
                </div>

                <!-- Single Gallery Thumb -->
                <div class="col-12 col-sm-3">
                    <div class="single-gallery-thumb wow fadeInUp" data-wow-delay="300ms">
                        <img src="/img/about-img/about-img6.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Gallery Area End -->

    <!-- Our Client Area -->
    <div class="our-client-area about-page section-padding-0-100">
        <div class="container">
           <!--  <div class="row">
                <!-- Heading --
                <div class="col-12">
                    <div class="section-heading-3 text-center wow fadeInUp" data-wow-delay="300ms">
                        <p>WHAT CLIENTS SAY</p>
                        <h4>Testimonials</h4>
                    </div>
                </div>
            </div> -->
            <div class="row">
                <div class="col-md-5 col-sm-12">
                    <h4>About Devcon Myanmar</h4>
                    <p class="justify">The 8th Developer Conference in Myanmar will be held on December 21st – 22th, 2019 at the MICT Park, Hlaing University Campus, Yangon, Myanmar. </p>
                    <p class="justify">The conference is opened to all IT professionals who are involved in any kind of software and software related solution development; including but not limited to web applications, mobile applications, consumer applications, corporate applications, cloud computing, game programming, educational software, device drivers, natural language development, database design and administration, software testing, machine automation, character and voice recognition, image processing, data mining and processing, and security related software.</p>
                    
                </div>
                <div class="col-md-7 col-sm-12">
                    <h4>Attendees from Previous Years</h4>
                     <table class="table table-bordered  table-striped">
                        <thead>
                          <tr>
                            <th>No.</th>
                            <th>Years</th>
                            <th>Attendees</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>1</td>
                            <td>2011</td>
                            <td>772</td>
                          </tr>
                          <tr>
                            <td>2</td>
                            <td>2012</td>
                            <td>474</td>
                          </tr>
                          <tr>
                            <td>3</td>
                            <td>2013</td>
                            <td>673</td>
                          </tr>
                          <tr>
                            <td>4</td>
                            <td>2014</td>
                            <td>847</td>
                          </tr>
                          <tr>
                            <td>5</td>
                            <td>2015</td>
                            <td>539</td>
                          </tr>
                          <tr>
                            <td>6</td>
                            <td>2016</td>
                            <td>724</td>
                          </tr>
                          <tr>
                            <td>7</td>
                            <td>2017</td>
                            <td>553</td>
                          </tr>
                        </tbody>
                      </table>
                    
                </div>
            </div>
<!-- 
            <div class="row">
                <div class="col-12">
                    <!-- Client Slider --
                    <div class="client-area owl-carousel">
                        <!-- Single Client Slide --
                        <div class="single-client-content bg-boxshadow wow fadeInUp" data-wow-delay="300ms">
                            <div class="single-client-text about-page">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
                                <!-- Thumb and info --
                                <div class="single-client-thumb-info d-flex align-items-center">
                                    <!-- Thumb --
                                    <div class="single-client-thumb">
                                        <img src="/img/bg-img/15.jpg" alt="">
                                    </div>
                                    <!-- Info --
                                    <div class="client-info">
                                        <h6>Maria Hernandez</h6>
                                        <p>UX Manager</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Icon --
                            <div class="client-icon">
                                <i class="zmdi zmdi-quote"></i>
                            </div>
                        </div>

                        <!-- Single Client Slide --
                        <div class="single-client-content bg-boxshadow wow fadeInUp" data-wow-delay="300ms">
                            <div class="single-client-text about-page">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
                                <!-- Thumb and info --
                                <div class="single-client-thumb-info d-flex align-items-center">
                                    <!-- Thumb --
                                    <div class="single-client-thumb">
                                        <img src="/img/bg-img/16.jpg" alt="">
                                    </div>
                                    <!-- Info --
                                    <div class="client-info">
                                        <h6>Jacqueline Myers</h6>
                                        <p>UX Manager</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Icon --
                            <div class="client-icon">
                                <i class="zmdi zmdi-quote"></i>
                            </div>
                        </div>

                        <!-- Single Client Slide --
                        <div class="single-client-content bg-boxshadow wow fadeInUp" data-wow-delay="300ms">
                            <div class="single-client-text about-page">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
                                <!-- Thumb and info --
                                <div class="single-client-thumb-info d-flex align-items-center">
                                    <!-- Thumb --
                                    <div class="single-client-thumb">
                                        <img src="/img/bg-img/15.jpg" alt="">
                                    </div>
                                    <!-- Info --
                                    <div class="client-info">
                                        <h6>Maria Hernandez</h6>
                                        <p>UX Manager</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Icon --
                            <div class="client-icon">
                                <i class="zmdi zmdi-quote"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
    <!-- Our Client Area -->
@endsection