@extends('layouts.app')

@section('content')

<div class="container">
    <div>
        <h1>Developer Conference 2019</h1>
        <form method="POST">
            <div class="form-group row">
                <div class="col-md-4">
                    <input type="text" placeholder="Ticket ID" class="form-control">
                </div>
                <div class="col-md-4">
                    <input type="submit" value="go" class="btn btn-success">
                </div>
            </div>
        </form>
    </div>
</div>

@endsection 