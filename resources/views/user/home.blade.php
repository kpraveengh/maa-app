@extends('user.layout.auth')

@section('content')
   <ol class="breadcrumb">
   <h3> {{ Auth::user()->name }} Details</h3>
</ol>
<div class="container">
    <!-- <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <a href="{{ URL::to('user/' . Auth::user()->id) }}">{{ Auth::user()->name }}</a> are logged in as User!
                </div>
            </div>
        </div>
    </div> -->
   
    <div class="row profile">
        <div class="col-md-3">
            <div class="profile-sidebar">
                <!-- SIDEBAR USERPIC -->
                <div class="profile-userpic" style="text-align: center;">
                     <img src="/uploads/images/{{ Auth::user()->image }}" class="">
                </div>
                <!-- END SIDEBAR USERPIC -->
                <!-- SIDEBAR USER TITLE -->
                <div class="profile-usertitle">
                    <div class="profile-usertitle-name">
                        {{ Auth::user()->name }}
                    </div>
                    <div class="profile-usertitle-email">
                        {{ Auth::user()->user_type }}
                    </div>
                    <div class="profile-usertitle-email">
                        {{ Auth::user()->email }}
                    </div>
                </div>
                <!-- END SIDEBAR USER TITLE -->
                <!-- SIDEBAR BUTTONS -->
                <div class="profile-userbuttons">
                    <a class="btn btn-small btn-info" href="{{ URL::to('user/' . Auth::user()->id . '/edit') }}">Edit</a>
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
                            <a href="{{ URL::to('user/createmember') }}" class="btn btn-primary"> Add Member</a>
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
@endsection
