@extends('layouts.master')

@section('content')
    


    <!-- Breadcrumb Area Start -->
    <section class="breadcrumb-area bg-img bg-gradient-overlay jarallax" style="background-image: url(/img/bg-img/pre.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2 class="page-title">Login</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Login to your account</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Area End -->

    <!-- Login Area Start -->
    <section class="section-padding-100-0">
        <div class="container">
            <div class="row">


                <!--Login Form -->
                <div class="col-12">
                    <div class="mb-100 clearfix">
                        <div class="login_form">
                            <form method="POST" action="{{ route('login') }}">
                  
                                @csrf
                                <div class="input_area">
                                    <div class="row bg-img bg-gradient-overlay">
                                        <!-- Form Group -->
                                        <div class="col-12">
                                            <div class="form-group">
                                                <input type="email" class="form-control mb-30" name="email" id="email" placeholder="Login Email" required>
                                            </div>
                                        </div>
                                        <!-- Form Group -->
                                        <div class="col-12">
                                            <div class="form-group">
                                                <input type="password" class="form-control mb-30" name="password" id="password" placeholder="Password" required>
                                            </div>
                                        </div>
                                        <!-- Button -->
                                        <div class="col-12  mb-30">
                                            <button type="submit" class="btn confer-btn-white" name="login">login <i class="zmdi zmdi-long-arrow-right"></i></button>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                            <a href="">forget password?</a>
                                             </div>
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
    <!-- Login Area End -->
    @endsection