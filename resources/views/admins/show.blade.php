@extends('layouts.app')
@section('content')
<div class="container">
<h1>Showing {{ $admins->name }}</h1>
    <div class="jumbotron text-center">
        <h2>{{ $admins->name }}</h2>
        <p>
            <strong>Email:</strong> {{ $admins->email }}<br>
        </p>
        <a class="btn btn-small btn-info" href="{{ URL::to('admins/' . $admins->id . '/edit') }}">Edit</a>
        <a class="btn btn-small btn-info" href="{{ URL::to('admins/') }}">Back to Users</a>

    </div>

</div>
@endsection
