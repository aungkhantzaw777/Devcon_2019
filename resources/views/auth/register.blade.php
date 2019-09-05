@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>
                
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        
                        <div class="form-group row">
                            <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('username') }}</label>
                            
                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>
                                
                                @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                            
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="Date_of_brith" class="col-md-4 col-form-label text-md-right">{{ __('Date of Birth') }}</label>
                            
                            <div class="col-md-6">
                                <input id="dob" type="text" class="form-control" name="dob" required autocomplete="new-password">
                            </div>
                            @error('dob')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        
                        <div class="form-group row">
                            <label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('gender') }}</label>
                            <div class="col-md-6 col-form-label text-md-left">
                                <span for="male">male</span> <input type="radio" name="gender" value="male">
                                <span for="female">female</span> <input type="radio" name="gender" value="female">
                            </div>
                            @error('gender')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        
                        
                        
                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('phone') }}</label>
                            
                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control" name="phone" required autocomplete="phone">
                            </div>
                            @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group row">
                            <label for="company_name" class="col-md-4 col-form-label text-md-right">{{ __('company name') }}</label>
                            
                            <div class="col-md-6">
                                <input id="company_name" type="text" class="form-control" name="company_name" required autocomplete="phone">
                            </div>
                            @error('company_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        
                        <div class="form-group row">
                            <label for="location" class="col-md-4 col-form-label text-md-right">{{ __('address') }}</label>
                            
                            <div class="col-md-6">
                                <input id="location" type="text" class="form-control" name="location" required>
                            </div>
                            @error('location')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        
                        <div class="form-group row">
                            <label for="employee_type" class="col-md-4 col-form-label text-md-right">{{ __('employee type') }}</label>
                            
                            <div class="col-md-6">
                                <input id="employee_type" type="text" class="form-control" name="employee_type" required >
                            </div>
                            @error('employee_type')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        
                        
                        
                        <div class="form-group row">
                            <label for="occupation" class="col-md-4 col-form-label text-md-right">{{ __('occupation') }}</label>
                            
                            <div class="col-md-6">
                                <textarea name="occupation" id="occupation" class="form-control"></textarea>
                            </div>
                            @error('occupation')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        
                        <div class="form-group row">
                            <label for="study_place" class="col-md-4 col-form-label text-md-right">{{ __('Study Place') }}</label>
                            
                            <div class="col-md-6">
                                <input id="study_place" type="text" class="form-control" name="study_place" required >
                            </div>
                            @error('study_place')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        
                        <div class="form-group row">
                            <label for="position" class="col-md-4 col-form-label text-md-right">{{ __('Position') }}</label>
                            
                            <div class="col-md-6">
                                <input id="position" type="text" class="form-control" name="position" required >
                            </div>
                            @error('position')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        
                        <div class="form-group row">
                            <label for="dev_ide" class="col-md-4 col-form-label text-md-right">{{ __('What is you Development Environment?') }}</label>
                            
                            <div class="col-md-6">
                                <input id="dev_ide" type="text" class="form-control" name="dev_ide" required >
                            </div>
                            @error('dev_ide')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group row">
                            <label for="about_devcon" class="col-md-4 col-form-label text-md-right">{{ __('About DevCon?') }}</label>
                            
                            <div class="col-md-6">
                                <textarea name="about_devcon" class="form-control" id="about_devcon"></textarea>
                            </div>
                            @error('about_devcon')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        
                        <div class="form-group row">
                            <label for="previous_year" class="col-md-4 col-form-label text-md-right">{{ __('previous year?') }}</label>
                            
                            <div class="col-md-6">
                                <textarea name="previous_year" class="form-control" id="previous_year"></textarea>
                            </div>
                            @error('previous_year')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
