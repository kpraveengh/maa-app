

<!-- app/views/nerds/edit.blade.php -->
@extends('user.layout.auth')
@section('content')
 {!!Form::open(['route' => 'user.storemember','class'=>'form-horizontal'])!!}

<fieldset>

<!-- Form Name -->
<legend>General User</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="name">Name</label>  
  <div class="col-md-4">
  <input id="name" name="name" type="text" placeholder="Full Name" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="email">Email</label>  
  <div class="col-md-4">
  <input id="email" name="email" type="text" placeholder="email" class="form-control input-md" required="">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <button id="submit" name="submit" class="btn btn-primary">SUBMIT</button>
  </div>
</div>
</fieldset>
 

{{ Form::close() }}


@endsection