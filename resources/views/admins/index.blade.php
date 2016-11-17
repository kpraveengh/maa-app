<!-- app/views/users/index.blade.php -->
@extends('layouts.app')


@section('content')

<div class="container">
<h1>All Users</h1>
 <table id="example" class="table table-striped table-bordered" cellspacing="0" >
    <thead>
        <tr>
            <td>Id</td>
            <td>Name</td>
            <td>Email</td>
            <td>User-Type</td>
            <td>Action</td>
        </tr>
    </thead>
    <tbody>
        <tr>
        @foreach($users as $user)
        <tr>
        <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
             <td>{{ $user->user_type }}</td>
             <td> {!! Form::open(['method' => 'delete', 'url' => ['user/'. $user->id]]) !!}

              
                <!-- show the user (uses the show method found at GET /users/{id} -->
                <a class="btn btn-small btn-success" href="{{ URL::to('user/' . $user->id) }}">Show</a>

                <!-- edit this user (uses the edit method found at GET /users/{id}/edit -->
                <a class="btn btn-small btn-info" href="{{ URL::to('user/' . $user->id . '/edit') }}">Edit</a>

               <!-- delete the nerd (uses the destroy method DESTROY /users/{id} -->
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {{ Form::close() }}
            </tr>
            @endforeach
           
        </tr>
    </tbody>
</table>


</div>
@endsection