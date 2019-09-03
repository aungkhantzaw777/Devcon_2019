@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Code</th>
                            <th scope="col">Create at</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tickets as $ticket)
                        <tr>
                            <th scope="row">{{ $ticket->id }} </th>
                            <td>{{$ticket->code}}</td>
                            <td>{{$ticket->created_at}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <a href="{{ route('ticket.create') }}" class="btn btn-success">Buy Ticket</a>
            </div>
        </div>
    </div>
</div>
@endsection
