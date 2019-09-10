@extends('layouts.app')

@section('content')

<div class="container">
    <div>
        <h1>Developer Conference 2019</h1>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group row">
                <div class="col-md-4">
                    <input type="text" name="ticket_id" placeholder="Ticket ID" class="form-control">
                </div>
                <div class="col-md-4">
                    <input type="submit" value="go" class="btn btn-success">
                </div>
            </div>
        </form>
    </div>
</div>

@endsection 