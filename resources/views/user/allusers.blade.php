
@extends('user.layout.auth')

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
        <tr>
        <td> {{ Auth::user()->name }} </td>
            <td>{{ $users->name }}</td>
            <td>{{ $users->email }}</td>
             <td>{{ $users->user_type }}</td>
             
            
            </tr>
           
        </tr>
    </tbody>
</table>


</div>
@endsection