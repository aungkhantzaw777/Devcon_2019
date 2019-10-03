@extends('admin.layout.app')

@section('content')
<div class="row user-wrap">

    <div class="card w-100">
        <div class="card-header clearfix">
            <span class="float-left">Registeration</span>
            <div class="form-group float-right">
                <form method="POST" id="user-form" action="/dev_con/searchuser">
                    @csrf
                    <div class="input-group">
                        <input class="form-control small" name="keyword" onkeyenter="event.preventDefault();
                        document.getElementById('user-form').submit();" type="text" placeholder="Search for ...">
                        <div class="input-group-append"><button class="btn btn-primary py-0" type="submit"><i class="fas fa-search"></i></button></div>
                    </div>
                    
                    
                </form>
                
            </div>
            
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Ticket ID</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Gender</th>
                    <th scope="col">location</th>
                    <th scope="col">Details</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->ticket }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->phone }}</td>
                    <td>{{ $user->gender }}</td>
                    <td>{{ $user->location }}</td>
                    <td><a href="#" class="btn btn-success">Detail</a></td>
                </tr>
                @endforeach
                
                
            </tbody>
        </table>
        {{ $users->appends(['sort' => 'username'])->links() }}
    </div>
</div>
@endsection