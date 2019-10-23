@extends('layouts.master')

@section('content')



    <!-- Breadcrumb Area Start -->
    <section class="breadcrumb-area bg-img bg-gradient-overlay jarallax" style="background-image: url(/img/bg-img/pre.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2 class="page-title">Ticket registration</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Register Your Ticket</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Area End -->

    <!-- Contact Us Area Start -->
    <section class="section-padding-100-0">
        <div class="container">
            <div class="row reg" align="center">
                <div class="col-12 mb-30">
                    <h3>Register Your Ticket</h3>
                    <p>If you already got a paper Ticket for DevCon Yangon 2019, please register on this page to get free gift pack.</p>
                    <p>For those who bought a ticket online from this website, you do not need to register again as we already got your details!!</p>
                </div>
            </div>
            <div class="row">

                <div class="col-12">
                    <div class="mb-100 clearfix">
                        <div class="login_form">
                            <form action="{{ route('activate') }}" method="post">
                              @csrf
                                <div class="input_area">
                                    <div class="row bg-img bg-gradient-overlay">
                                        <!-- Form Group -->
                                        <div class="col-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control @error('ticket_id') is-invalid @enderror mb-30" name="ticket_id" id="ID" placeholder="Your Ticket ID" required>
                                                @error('ticket_id')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <!-- Button -->
                                        <div class="col-12">
                                            <input type="submit" class="btn confer-btn-white" name="nextstep" value="Next Step">
                                        </div>

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Us Area End -->
    @endsection
