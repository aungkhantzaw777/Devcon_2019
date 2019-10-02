@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6 col-lg-6 col-12 mb-2">
            <div class="card">
                <div class="card-header">
                    Already Bought Ticket
                </div>
                <div class="card-body">
                @include('flash-message')
                <form action="{{ route('activate') }}" method="POST">
                    @csrf
                    <div class="form-group row">
                        <div class="col-10">
                            <input type="text" class="form-control @error('ticket_id') is-invalid @enderror" placeholder="Ticket ID..." id="ticket_id" name="ticket_id">
                            @error('ticket_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        
                        <div class="col-2">
                            <button class="btn btn-success float-right">Activate</button>
                        </div>
                        
                    </div>
                </form>
                    
                    
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-6 col-12 mb-2 new-ticket-wrap">
            <div class="card">
                <div class="card-header">
                    Buy a new ticket
                </div>
                <div class="card-body">
                    <h1 class="text-primary text-center">8000Ks</h1>
                    <a class="btn btn-success btn-block" href="register">Buy Now</a>
                    
                </div>
            </div>
        </div>
        
    </div>
</div>

@endsection 