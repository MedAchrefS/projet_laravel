
@guest
// The user is not authenticated...
@endguest

@auth

@if(Auth::user()->hasRole('Admin'))
 @extends('Admin.layout')

@endif

@section('content')
   
 


<div class="col-md-10">
    <div class="card  card-tasks">
      <div class="card-header ">
            <div class="pull-left">
                    <h2> Show user</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('usersManagement.index') }}"> Back</a>
                </div>
      </div>
      <div class="card-body ">
            <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $user->name }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>email:</strong>
                            {{ $user->email }}
                        </div>
                    </div>
                </div>
      </div>
      <div class="card-footer ">
        <hr>
        <div class="stats">
          <i class="now-ui-icons loader_refresh spin"></i> Updated 3 minutes ago
        </div>
      </div>
    </div>
  </div>





@endSection
@endauth