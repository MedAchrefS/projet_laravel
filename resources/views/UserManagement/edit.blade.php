
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
                        <h2>Edit user</h2>
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-primary" href="{{ route('usersManagement.index') }}"> Back</a>
                    </div>
              </div>
              <div class="card-body ">

                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
              
                <form action="{{ route('usersManagement.update',$user->id) }}" method="POST">
                    @csrf
                    @method('PUT')
               
                     <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Name:</strong>
                                <input type="text" name="name" value="{{ $user->name }}" class="form-control" placeholder="Name">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>email:</strong>
                                <textarea class="form-control" style="height:150px" name="email" placeholder="email">{{ $usersManagement->email }}</textarea>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
               
                </form>
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