<!-- app/views/users/index.blade.php -->
@extends('layouts.app')


@section('content')

<div class="container">
<h1>All Admins</h1>
 <table id="example" class="table table-striped table-bordered" cellspacing="0" >
    <thead>
        <tr>
            <td>Id</td>
            <td>Name</td>
            <td>Email</td>
            <td>Action</td>
        </tr>
    </thead>
    <tbody>
        <tr>
        @foreach($admins as $admin)
        <tr>
            <td>{{ $admin->id }}</td>
            <td>{{ $admin->name }}</td>
            <td>{{ $admin->email }}</td>
            <td>{!! Form::open(['method' => 'DELETE', 'url' => ['admins/'. $admin->id]]) !!}
                <!-- show the user (uses the show method found at GET /users/{id} -->
                <a class="btn btn-small btn-success" href="{{ URL::to('admins/' . $admin->id) }}">Show</a>

                <!-- edit this user (uses the edit method found at GET /users/{id}/edit -->
                <a class="btn btn-small btn-info" href="{{ URL::to('admins/' . $admin->id . '/edit') }}">Edit</a>
                  {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                  {{ Form::close() }}
            </td>
            </tr>
            @endforeach
           
        </tr>
    </tbody>
</table>


</div>
@endsection