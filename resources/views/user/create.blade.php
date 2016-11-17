

<!-- app/views/nerds/edit.blade.php -->
@extends('user.layout.auth')
@section('content')
 {!!Form::open(['route' => 'user.store','class'=>'form-horizontal'])!!}

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
<!-- Date input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="dob">Date of Birth</label>  
  <div class="col-md-4">
  <input id="dob" name="dob" type="date" class="form-control input-md" required="">
    
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="phone">Mobile No</label>  
  <div class="col-md-4">
  <input id="phone" name="phone" type="number" placeholder="Mobile no" class="form-control input-md" required="">
    
  </div>
</div>
<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="phone">Password</label>  
  <div class="col-md-4">
  <input id="password" name="password" type="password" placeholder="Password" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="user_type">User Type</label>
  <div class="col-md-4">
    <select id="user_type" name="user_type" class="form-control input-md">
      <option value="generaluser">Genaral user</option>
      <option value="owner">Restaurant Owner</option>
    </select>
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