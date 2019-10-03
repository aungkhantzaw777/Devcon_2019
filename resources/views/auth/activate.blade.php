@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Activate') }}</div>
                
                <div class="card-body">
                    <form method="POST" action="{{ route('postActivate') }}">
                        @csrf
                        
                    <input type="hidden" name="ticket_id" value="{{ $ticket_id }}">
                        <div class="form-group row">
                            <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                            
                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" autocomplete="username" autofocus>
                                
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
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}">
                                
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="Password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                            
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}">
                                
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="comfirm password" class="col-md-4 col-form-label text-md-right">{{ __('Comfirm Password') }}</label>
                            
                            <div class="col-md-6">
                                <input id="comfirm" type="password" class="form-control @error('confirm') is-invalid @enderror" name="password_confirmation" value="{{ old('confirm') }}">
                                
                                
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="Date_of_brith" class="col-md-4 col-form-label text-md-right">{{ __('Date of Birth') }}</label>
                            
                            <div class="col-md-6">
                                <input id="dob" type="date" class="form-control @error('dob') is-invalid @enderror" value="{{ old('dob') }}" name="dob" autocomplete="new-password">
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
                                <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone') }}" name="phone" autocomplete="phone">
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
                                <input id="company_name" type="text" class="form-control @error('company_name') is-invalid @enderror" value="{{ old('company_name') }}" name="company_name">
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
                                <input id="location" type="text" class="form-control @error('location') is-invalid @enderror" value="{{ old('location') }}" name="location">
                            </div>
                            @error('location')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        
                        <div class="form-group row">
                            <label for="employee_type" class="col-md-4 col-form-label text-md-right">{{ __('Employee Type') }}</label>
                            
                            <div class="col-md-6">
                                <select name="employee_type" class="form-control @error('employee_type') is-invalid @enderror" id="employee_type">
                                    <option value="">Choose...</option>
                                    <option value="Permanent/Full-time Developer">Permanent/Full-time Developer</option>
                                    <option value="Freelance Developer">Freelance Developer</option>
                                    <option value="Management Level at IT Company">Management Level at IT Company</option>
                                    <option value="Self-Employed">Self-Employed</option>
                                    <option value="Owned Company / Business in IT Field">Owned Company / Business in IT Field</option>
                                    <option value="Others">Others</option>
                                </select>
                                
                            </div>
                            @error('employee_type')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        
                        
                        
                        <div class="form-group row">
                            <label for="occupation" class="col-md-4 col-form-label text-md-right">{{ __('Occupation') }}</label>
                            
                            <div class="col-md-6">
                                <textarea name="occupation" id="occupation" class="form-control @error('occupation') is-invalid @enderror">{{ old('occupation') }}</textarea>
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
                                <div class="study_place">
                                    <input type="radio" name="study_place" id="study_place" value="Computer University (eg: UCSY, UCST, etc)"><span>Computer University (eg: UCSY, UCST, etc)</span>
                                </div>
                                <div class="study_place">
                                    <input type="radio" name="study_place" id="study_place" value="Technology University (eg: TU-Mawbi, TU-Thanlyin)"><span>Technology University (eg: TU-Mawbi, TU-Thanlyin)</span>
                                </div>
                                <div class="study_place">
                                    <input type="radio" name="study_place" id="study_place" value="University of Information Technology (UIT)"><span>University of Information Technology (UIT)</span>
                                </div>
                                <div class="study_place">
                                    <input type="radio" name="study_place" id="study_place" value="Private IT School/College"><span>Private IT School/College</span>
                                </div>

                                <div class="study_place">
                                    <input type="radio" name="study_place" id="study_place" value="Private IT Training Center"><span>Private IT Training Center</span>
                                </div>

                                <div class="study_place">
                                    <input type="radio" name="study_place" id="study_place" value="Private IT Training Center"><span>Private IT Training Center</span>
                                </div>
                                <div class="study_place">
                                    <input type="radio" name="study_place" id="study_place" value="Other"><span>Other</span>
                                </div>
                                
                                {{-- <input id="study_place" type="text" class="form-control @error('study_place') is-invalid @enderror" value="{{ old('study_place') }}" name="study_place" > --}}
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
                                <input id="position" type="text" class="form-control @error('position') is-invalid @enderror" value="{{ old('position') }}" name="position" >
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
                                <input id="dev_ide" type="text" class="form-control @error('dev_ide') is-invalid @enderror" value="{{ old('dev_ide') }}" name="dev_ide" >
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
                                <textarea name="about_devcon" class="form-control @error('about_devcon') is-invalid @enderror" id="about_devcon">{{ old('about_devcon') }}</textarea>
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
                                <textarea name="previous_year" class="form-control @error('about_devcon') is-invalid @enderror" id="previous_year">{{ old('about_devcon') }}</textarea>
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
