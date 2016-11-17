@extends('user/layout.auth')
@section('content')
<div class="container">

<legend>{{ $users->name }} Profile</legend>

{{ Form::model($users, array('route' => array('user.update', $users->id), 'method' => 'PUT','class'=>'form-horizontal')) }}

<fieldset>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="name">Name</label>  
  <div class="col-md-4">
  <input id="name" name="name" type="text" value="{{ $users->name }}" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="email">Email</label>  
  <div class="col-md-4">
  <input id="email" name="email" type="text" value="{{ $users->email }}" class="form-control input-md" required="">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <button id="submit" name="submit" class="btn btn-info">Update</button>
     <a class="btn btn-small btn-primary" href="{{ URL::to('user/' . $users->id) }}">Cancel</a>
  </div>
</div>
</fieldset>

{{ Form::close() }}

</div>
@endsection