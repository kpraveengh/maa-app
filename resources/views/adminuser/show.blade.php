@extends('layouts.app')
@section('content')


<div class="container">

<h1> {{ $users->name }} Details</h1>
    <div class="row profile">
		<div class="col-md-3">
			<div class="profile-sidebar">
				<!-- SIDEBAR USERPIC -->
				<div class="profile-userpic">
					<img src="https://cdn0.iconfinder.com/data/icons/PRACTIKA/256/user.png" class="img-responsive" alt="">
				</div>
				<!-- END SIDEBAR USERPIC -->
				<!-- SIDEBAR USER TITLE -->
				<div class="profile-usertitle">
					<div class="profile-usertitle-name">
						{{ $users->name }}
					</div>
					<div class="profile-usertitle-job">
						{{ $users->email }}
					</div>
				</div>
				<!-- END SIDEBAR USER TITLE -->
				<!-- SIDEBAR BUTTONS -->
				<div class="profile-userbuttons">
					<a class="btn btn-small btn-info" href="{{ URL::to('adminuser/' . $users->id . '/edit') }}">Edit</a>
        <a class="btn btn-small btn-info" href="{{ URL::to('admins/') }}">Back to Users</a>
				</div>
				<!-- END SIDEBAR BUTTONS -->
				<!-- SIDEBAR MENU -->
				<!-- END MENU -->
			</div>
		</div>
		<div class="col-md-6">
            <div class="panel with-nav-tabs panel-primary">
                <div class="panel-heading">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab1primary" data-toggle="tab"> Family Members</a></li>
                            <li><a href="#tab2primary" data-toggle="tab"> Preventive List</a></li>
                            <li><a href="#tab3primary" data-toggle="tab">User History</a></li>
                        </ul>
                </div>
                </div>
                  <div class="panel-body">
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="tab1primary">
                        	
                        </div>
                        <div class="tab-pane fade" id="tab2primary">
                        	
                        </div>
                        <div class="tab-pane fade" id="tab3primary">Primary 3</div>
                        <div class="tab-pane fade" id="tab4primary">Primary 4</div>
                        <div class="tab-pane fade" id="tab5primary">Primary 5</div>
                    </div>
                </div>
            </div>
	</div>
</div>
<br>
<br>
@endsection
