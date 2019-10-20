@extends('layouts.master')

@section('content')
    
    {{-- <!-- Welcome Area Start --> --}}
    <section class="welcome-area">
        <div class="welcome-slides owl-carousel">
            {{-- <!-- Single Slide --> --}}
            <div class="single-welcome-slide bg-img bg-overlay jarallax" style="background-image: url(/img/slider1.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        {{-- <!-- Welcome Text --> --}}
                        <div class="col-12">
                            <div class="welcome-text text-right">
                                <h2 data-animation="fadeInUp" data-delay="300ms">Developer <br>Conference</h2>
                                <h6 data-animation="fadeInUp" data-delay="500ms">21st-22th December,2019</h6><br>
                                <h6 data-animation="fadeInUp" data-delay="500ms">MICT Park, Hlaing, Yangon</h6>
                                <div class="hero-btn-group" data-animation="fadeInUp" data-delay="700ms">
                                    <a href="/about/" class="btn confer-btn">More Information <i class="zmdi zmdi-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- <!-- Single Slide --> --}}
            <div class="single-welcome-slide bg-img bg-overlay jarallax" style="background-image: url(img/slider2.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        {{-- <!-- Welcome Text --> --}}
                        <div class="col-12">
                            <div class="welcome-text-two text-center">
                                <h5 data-animation="fadeInUp" data-delay="100ms">Welcome To</h5>
                                <h2 data-animation="fadeInUp" data-delay="300ms">Developer Conference</h2>
                                {{-- <!-- Event Meta --> --}}
                                <div class="event-meta" data-animation="fadeInUp" data-delay="500ms">
                                    <a class="event-date" href="#"><i class="zmdi zmdi-map"></i> MICT Park, Hlaing, Yangon</a>
                                    <a class="event-author" href="#"><i class="zmdi zmdi-calendar"></i> 21st-22th December,2019 </a>
                                </div>
                                <div class="hero-btn-group" data-animation="fadeInUp" data-delay="700ms">
                                    <a href="/about/" class="btn confer-btn m-2">View more <i class="zmdi zmdi-long-arrow-right"></i></a>
                                    <a href="/get-ticket/" class="btn confer-btn m-2">Get Tickets <i class="zmdi zmdi-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- <!-- Scroll Icon --> --}}
        <div class="icon-scroll" id="scrollDown"></div>
    </section>
    {{-- <!-- Welcome Area End --> --}}

    {{-- <!-- About Us And Countdown Area Start --> --}}
    <section class="about-us-countdown-area section-padding-100-0" id="about">
        <div class="container">
            <div class="row align-items-center">
                {{-- <!-- About Content --> --}}
                <div class="col-12 col-md-6">
                    <div class="about-content-text mb-80">
                        <h6 class="wow fadeInUp" data-wow-delay="300ms">About DevCon</h6>
                        <h3 class="wow fadeInUp" data-wow-delay="300ms">Welcome to Developer Conference</h3>
                        <p class="wow fadeInUp" data-wow-delay="300ms">The 8th Developer Conference in Myanmar will be held on December 21st – 22th, 2019 at the MICT Park, Hlaing University Campus, Yangon, Myanmar. The conference is opened to all IT professionals who are involved in any kind of software and software related solution development; including but not limited to web applications, mobile applications, consumer applications, corporate applications, cloud computing, game programming, educational software, device drivers, natural language development, database design and administration, software testing, machine automation, character and voice recognition, image processing, data mining and processing, and security related software.</p>
                        <a href="/schedule/" class="btn confer-btn mt-50 wow fadeInUp" data-wow-delay="300ms">Interested <i class="zmdi zmdi-long-arrow-right"></i></a>
                    </div>
                </div>

                {{-- <!-- About Thumb --> --}}
                <div class="col-12 col-md-6">
                    <div class="about-thumb mb-80 wow fadeInUp" data-wow-delay="300ms">
                        <img src="/img/bg-img/dev-logo-text.png" alt="" class="hidden-xs">
                        <p>This year theme is <br><span> “Developer Beyond 2020”</span></p>
                    </div>
                </div>
            </div>
        </div>

        {{-- <!-- Counter Up Area --> --}}
        <div class="countdown-up-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-md-3">
                        {{-- <!-- Countdown Text --> --}}
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
    </section>
    {{-- <!-- About Us And Countdown Area End --> --}}

    {{-- <!-- Our Speakings Area Start --> --}}
    <section class="our-speaker-area bg-img bg-gradient-overlay section-padding-100-60" style="background-image: url(img/bg-img/3.jpg);">
        <div class="container">
            <div class="row">
                {{-- <!-- Heading --> --}}
                <div class="col-12">
                    <div class="section-heading text-center wow fadeInUp" data-wow-delay="300ms">
                        <p>Our Speakings</p>
                        <h4>Who’s speaking</h4>
                    </div>
                </div>
            </div>

            <div class="row">
                {{-- <!-- Single Speaker Area --> --}}
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-speaker-area bg-gradient-overlay-2 wow fadeInUp" data-wow-delay="300ms">
                        {{-- <!-- Thumb --> --}}
                        <div class="speaker-single-thumb">
                            <img src="/img/kokoye.jpg" alt="" class="img-responsive">
                        </div>
                        {{-- <!-- Social Info --> --}}
                        <div class="social-info">
                            <a href="https://www.facebook.com/kokoye2007" target="_blank"><i class="zmdi zmdi-facebook"></i></a>
                            <a href="#"><i class="zmdi zmdi-instagram"></i></a>
                        </div>
                        {{-- <!-- Info --> --}}
                        <div class="speaker-info">
                            <h5>Ko Ko Ye</h5>
                            <p>Team Leader at Ubuntu Myanmar LoCo Team</p>
                        </div>
                    </div>
                </div>

                {{-- <!-- Single Speaker Area --> --}}
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-speaker-area bg-gradient-overlay-2 wow fadeInUp" data-wow-delay="300ms">
                        {{-- <!-- Thumb --> --}}
                        <div class="speaker-single-thumb">
                            <img src="/img/EiMaung.jpg" alt="" class="img-responsive">
                        </div>
                        {{-- <!-- Social Info --> --}}
                        <div class="social-info">
                            <a href="https://www.facebook.com/ei.mung" target="_blank"><i class="zmdi zmdi-facebook"></i></a>
                            <a href="#"><i class="zmdi zmdi-instagram"></i></a>
                        </div>
                        {{-- <!-- Info --> --}}
                        <div class="speaker-info">
                            <h5>Ei Maung</h5>
                            <p>Former Founder, Project Manager at Durosoft</p>
                        </div>
                    </div>
                </div>

                {{-- <!-- Single Speaker Area --> --}}
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-speaker-area bg-gradient-overlay-2 wow fadeInUp" data-wow-delay="300ms">
                        {{-- <!-- Thumb --> --}}
                        <div class="speaker-single-thumb">
                            <img src="/img/AKHlaing.jpg" alt="" class="img-responsive">
                        </div>
                        {{-- <!-- Social Info --> --}}
                        <div class="social-info">
                            <a href="https://www.facebook.com/ak.hlaing" target="_blank"><i class="zmdi zmdi-facebook"></i></a>
                            <a href="#"><i class="zmdi zmdi-instagram"></i></a>
                        </div>
                        {{-- <!-- Info --> --}}
                        <div class="speaker-info">
                            <h5>Aye Kyaw Hlaing</h5>
                            <p>Founder of V2M</p>
                        </div>
                    </div>
                </div>

               

                <div class="col-12">
                    <div class="more-speaker-btn text-center mt-20 mb-40 wow fadeInUp" data-wow-delay="300ms">
                        <a class="btn confer-btn-white" href="/speakers/">view all Speaker <i class="zmdi zmdi-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- <!-- Our Speakings Area End --> --}}

    {{-- <!-- Our Schedule Area Start --> --}}
    <section class="our-schedule-area section-padding-100">
        <div class="container">
            <div class="row">
                {{-- <!-- Heading --> --}}
                <div class="col-12">
                    <div class="section-heading-2 text-center wow fadeInUp" data-wow-delay="300ms">
                        <p>Our Timetable</p>
                        <h4>Schedule Plan</h4>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="schedule-tab">
                        {{-- <!-- Nav Tabs --> --}}
                        <ul class="nav nav-tabs wow fadeInUp" data-wow-delay="300ms" id="conferScheduleTab" role="tablist">
                          {{-- <!--   <li class="nav-item">
                                <a class="nav-link active" id="monday-tab" data-toggle="tab" href="#step-one" role="tab" aria-controls="step-one" aria-expanded="true">Monday <br> <span>January 14, 2019</span></a>
                            </li> -->
                            <!-- Nav Item --> --}}
                            <li class="nav-item">
                                <a class="nav-link" id="saturday-tab" data-toggle="tab" href="#step-two" role="tab" aria-controls="step-two" aria-expanded="true">Saturday <br> <span>December 21, 2019</span></a>
                            </li>
                            {{-- <!-- Nav Item --> --}}
                            <li class="nav-item">
                                <a class="nav-link" id="sunday-tab" data-toggle="tab" href="#step-three" role="tab" aria-controls="step-three" aria-expanded="true">Sunday <br> <span>December 22, 2019</span></a>
                            </li>
                        </ul>
                    </div>

                    {{-- <!-- Tab Content --> --}}
                    <div class="tab-content" id="conferScheduleTabContent">
           
                        <div class="tab-pane fade show active" id="step-two" role="tabpanel" aria-labelledby="saturday-tab">
                            {{-- <!-- Single Tab Content --> --}}
                            <div class="single-tab-content">
                                <div class="row">
                                    <div class="col-12">
                                        {{-- <!-- Single Schedule Area --> --}}
                                        <div class="single-schedule-area d-flex flex-wrap justify-content-between align-items-center wow fadeInUp" data-wow-delay="300ms">
                                            {{-- <!-- Single Schedule Thumb and Info --> --}}
                                            <div class="single-schedule-tumb-info d-flex align-items-center">
                                                {{-- <!-- Single Schedule Thumb --> --}}
                                                <div class="single-schedule-tumb">
                                                    <img src="https://place-hold.it/150x150/" alt="">
                                                </div>
                                                {{-- <!-- Single Schedule Info --> --}}
                                                <div class="single-schedule-info">
                                                    <h6>Title 1</h6>
                                                    <p>by <span>Speaker 1</span> / Ceo of Confer</p>
                                                </div>
                                            </div>
                                            {{-- <!-- Single Schedule Info --> --}}
                                            <div class="schedule-time-place">
                                                <p><i class="zmdi zmdi-time"></i> 10:00-11:00 AM 21 Dec 2019</p>
                                                <p><i class="zmdi zmdi-map"></i> Conference Hall</p>
                                            </div>
                                            {{-- <!-- Schedule Btn --> --}}
                                            <a href="" class="btn confer-btn">View More <i class="zmdi zmdi-long-arrow-right"></i></a>
                                        </div>

                                        {{-- <!-- Single Schedule Area --> --}}
                                        <div class="single-schedule-area d-flex flex-wrap justify-content-between align-items-center wow fadeInUp" data-wow-delay="300ms">
                                            {{-- <!-- Single Schedule Thumb and Info --> --}}
                                            <div class="single-schedule-tumb-info d-flex align-items-center">
                                                {{-- <!-- Single Schedule Thumb --> --}}
                                                <div class="single-schedule-tumb">
                                                    <img src="https://place-hold.it/150x150/" alt="">
                                                </div>
                                                {{-- <!-- Single Schedule Info --> --}}
                                                <div class="single-schedule-info">
                                                    <h6>Title 2</h6>
                                                    <p>by <span>Speaker 2</span> / Ceo of Confer</p>
                                                </div>
                                            </div>
                                            {{-- <!-- Single Schedule Info --> --}}
                                            <div class="schedule-time-place">
                                                <p><i class="zmdi zmdi-time"></i> 9:00AM-11:00PM 21 Dec 2019</p>
                                                <p><i class="zmdi zmdi-map"></i> Room 204 </p>
                                            </div>
                                            {{-- <!-- Schedule Btn --> --}}
                                            <a href="#" class="btn confer-btn">View More <i class="zmdi zmdi-long-arrow-right"></i></a>
                                        </div>

                                        {{-- <!-- Single Schedule Area --> --}}
                                        <div class="single-schedule-area d-flex flex-wrap justify-content-between align-items-center wow fadeInUp" data-wow-delay="300ms">
                                            {{-- <!-- Single Schedule Thumb and Info --> --}}
                                            <div class="single-schedule-tumb-info d-flex align-items-center">
                                                {{-- <!-- Single Schedule Thumb --> --}}
                                                <div class="single-schedule-tumb">
                                                    <img src="https://place-hold.it/150x150/" alt="">
                                                </div>
                                                {{-- <!-- Single Schedule Info --> --}}
                                                <div class="single-schedule-info">
                                                    <h6>Title 3</h6>
                                                    <p>by <span>Speaker 3</span> / Ceo of Confer</p>
                                                </div>
                                            </div>
                                            {{-- <!-- Single Schedule Info --> --}}
                                            <div class="schedule-time-place">
                                                <p><i class="zmdi zmdi-time"></i>  11:30AM-12:00PM 21 Dec 2019</p>
                                                <p><i class="zmdi zmdi-map"></i>Room 404</p>
                                            </div>
                                            {{-- <!-- Schedule Btn --> --}}
                                            <a href="#" class="btn confer-btn">View More <i class="zmdi zmdi-long-arrow-right"></i></a>
                                        </div>
                                    </div>

                                    {{-- <!-- More Schedule Btn --> --}}
                                    <div class="col-12">
                                        <div class="more-schedule-btn text-center mt-50 wow fadeInUp" data-wow-delay="300ms">
                                            <a href="#" class="btn confer-gb-btn">Dowload schedule (Pdf)</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="step-three" role="tabpanel" aria-labelledby="sunday-tab">
                            {{-- <!-- Single Tab Content --> --}}
                            <div class="single-tab-content">
                                <div class="row">
                                    <div class="col-12">
                                        {{-- <!-- Single Schedule Area --> --}}
                                        <div class="single-schedule-area d-flex flex-wrap justify-content-between align-items-center wow fadeInUp" data-wow-delay="300ms">
                                            {{-- <!-- Single Schedule Thumb and Info --> --}}
                                            <div class="single-schedule-tumb-info d-flex align-items-center">
                                                {{-- <!-- Single Schedule Thumb --> --}}
                                                <div class="single-schedule-tumb">
                                                    <img src="https://place-hold.it/150x150/" alt="">
                                                </div>
                                                {{-- <!-- Single Schedule Info --> --}}
                                                <div class="single-schedule-info">
                                                    <h6>Title 4</h6>
                                                    <p>by <span>Speaker 4</span> / Ceo of Confer</p>
                                                </div>
                                            </div>
                                            {{-- <!-- Single Schedule Info --> --}}
                                            <div class="schedule-time-place">
                                                <p><i class="zmdi zmdi-time"></i>11:30AM-12:00PM 22 Dec 2019</p>
                                                <p><i class="zmdi zmdi-map"></i>Conference Hall</p>
                                            </div>
                                            {{-- <!-- Schedule Btn --> --}}
                                            <a href="#" class="btn confer-btn">View More <i class="zmdi zmdi-long-arrow-right"></i></a>
                                        </div>

                                        {{-- <!-- Single Schedule Area --> --}}
                                        <div class="single-schedule-area d-flex flex-wrap justify-content-between align-items-center wow fadeInUp" data-wow-delay="300ms">
                                            {{-- <!-- Single Schedule Thumb and Info --> --}}
                                            <div class="single-schedule-tumb-info d-flex align-items-center">
                                                {{-- <!-- Single Schedule Thumb --> --}}
                                                <div class="single-schedule-tumb">
                                                    <img src="https://place-hold.it/150x150/" alt="">
                                                </div>
                                                {{-- <!-- Single Schedule Info --> --}}
                                                <div class="single-schedule-info">
                                                    <h6>Title 5</h6>
                                                    <p>by <span>Speaker 5</span> / Ceo of Confer</p>
                                                </div>
                                            </div>
                                            {{-- <!-- Single Schedule Info --> --}}
                                            <div class="schedule-time-place">
                                                <p><i class="zmdi zmdi-time"></i> 11:30AM-12:00PM 22 Dec 2019</p>
                                                <p><i class="zmdi zmdi-map"></i> Room 302</p>
                                            </div>
                                            {{-- <!-- Schedule Btn --> --}}
                                            <a href="#" class="btn confer-btn">View More <i class="zmdi zmdi-long-arrow-right"></i></a>
                                        </div>
                                    </div>

                                    {{-- <!-- More Schedule Btn --> --}}
                                    <div class="col-12">
                                        <div class="more-schedule-btn text-center mt-50 wow fadeInUp" data-wow-delay="300ms">
                                            <a href="#" class="btn confer-gb-btn">Dowload schedule (Pdf)</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- <!-- Our Schedule Area End --> --}}

    {{-- <!-- Our Ticket Pricing Table Area Start --> --}}
    <section class="our-ticket-pricing-table-area bg-img bg-gradient-overlay section-padding-100-0 jarallax" style="background-image: url(img/bg-img/14.jpg);">
        <div class="container">
            <div class="row">
                {{-- <!-- Heading --> --}}
                <div class="col-12">
                    <div class="section-heading text-center wow fadeInUp" data-wow-delay="300ms">
                        <p>We have early bird discount for advanced ticket.</p>
                        <h4>Get your ticket today!!</h4>
                        <a href="/register-your-ticket-process/" class="btn confer-btn-white">Buy Now</a>
                    </div>
                </div>
            </div>

            
        </div>
    </section>
    

     {{-- Our Sponsor And Client Area Start  --}}
    <section class="our-sponsor-client-area section-padding-100">
        <div class="container">
            <div class="row">
                {{-- <!-- Heading --> --}}
                <div class="col-12">
                    <div class="section-heading-2 text-center wow fadeInUp" data-wow-delay="300ms">
                        <p>Partners &amp; Sponsors</p>
                        <h4>OFFICIAL SPONSOR</h4>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    {{-- <!-- Our Sponsor area --> --}}
                    <div class="our-sponsor-area d-flex flex-wrap mb-100">
                        {{-- <!-- Single Sponsor --> --}}
                        <div class="single-sponsor wow fadeInUp" data-wow-delay="300ms">
                            <a href="#"><img src="/img/core-img/p-1.png" alt=""></a>
                        </div>
                        {{-- <!-- Single Sponsor --> --}}
                        <div class="single-sponsor wow fadeInUp" data-wow-delay="300ms">
                            <a href="#"><img src="/img/core-img/p-2.png" alt=""></a>
                        </div>
                        {{-- <!-- Single Sponsor --> --}}
                        <div class="single-sponsor wow fadeInUp" data-wow-delay="300ms">
                            <a href="#"><img src="/img/core-img/p-3.png" alt=""></a>
                        </div>
                        {{-- <!-- Single Sponsor --> --}}
                        <div class="single-sponsor wow fadeInUp" data-wow-delay="300ms">
                            <a href="#"><img src="/img/core-img/p-4.png" alt=""></a>
                        </div>
                        {{-- <!-- Single Sponsor --> --}}
                        <div class="single-sponsor wow fadeInUp" data-wow-delay="300ms">
                            <a href="#"><img src="/img/core-img/p-5.png" alt=""></a>
                        </div>
                        {{-- <!-- Single Sponsor --> --}}
                        <div class="single-sponsor wow fadeInUp" data-wow-delay="300ms">
                            <a href="#"><img src="/img/core-img/p-6.png" alt=""></a>
                        </div>
                        {{-- <!-- Single Sponsor --> --}}
                        <div class="single-sponsor wow fadeInUp" data-wow-delay="300ms">
                            <a href="#"><img src="/img/core-img/p-7.png" alt=""></a>
                        </div>
                        {{-- <!-- Single Sponsor --> --}}
                        <div class="single-sponsor wow fadeInUp" data-wow-delay="300ms">
                            <a href="#"><img src="/img/core-img/p-8.png" alt=""></a>
                        </div>
                    </div>
                </div>

             </div>
         </div>
        </div>
     </div>
</div>
    </section>
    

@endsection