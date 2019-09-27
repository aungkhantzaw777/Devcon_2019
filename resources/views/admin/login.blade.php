<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Dev Con</title>
    {{-- <link rel="stylesheet" href="{{asset('admin/assets/bootstrap/css/bootstrap.min.css')}}"> --}}
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/fonts/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/css/login.min.css')}}">
</head>

<body>
    <div class="login-clean" id="app" style="min-height: 100vh;">
        <form method="post" action="/dev_con/login">
            @csrf
            <h2 class="sr-only">Admin Login Form</h2>
            <div class="illustration"><i class="icon ion-ios-navigate"></i></div>
            
            <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email"></div>
            <div class="input-group">
                {{-- <input class="form-control" type="password" name="password" placeholder="Password"> --}}
                <input :type="eyes.type" class="form-control" name="password" placeholder="Password" aria-label="password" aria-describedby="basic-addon2">
                <div class="input-group-append cursor-pointer" @click="eyesMethod">
                    <span class="input-group-text" id="basic-addon2"><i :class="eyes.icon"></i></span>
                </div>
                
            </div>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Log In</button></div><a class="forgot" href="#">Forgot your email or password?</a></form>
        </div>
        <script src="{{asset('js/login.js')}}"></script>
        <script src="{{asset('admin/assets/js/jquery.min.js')}}"></script>
        {{-- <script src="{{asset('admin/assets/bootstrap/js/bootstrap.min.js')}}"></script> --}}
    </body>
    
    </html>