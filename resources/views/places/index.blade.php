
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
                <h5 class="card-category">Places</h5>
                <div class="pull-right">
                        <a class="btn btn-success" href="{{ route('places.create') }}"> Create New Place</a>
                    </div>
              </div>
              <div class="card-body ">
                <div class="table-full-width table-responsive">
                  <table class="table">
                      
                    <tbody>
                         <tr>
                         <th>No</th>
                         <th>Name</th>
                        

                         <th>Details</th>
                         <th>image</th>
                         <th width="280px">Action</th>
                        </tr>
                            @foreach ($places as $place)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $place->name }}</td>
                                <td>{{ $place->Description }}</td>
                                <td> <img style="max-width: 50px;max-height: 50px;" src= "<?php echo asset("storage/app/public/images/turkey/$place->filename")?>" alt="Card image cap"> </td>
                                <td>
                                 <form action="{{ route('places.destroy',$place->id) }}" method="POST">
                       
                                  <a class="btn btn-info" href="{{ route('places.show',$place->id) }}">Show</a>
                                  <a class="btn btn-primary" href="{{ route('places.edit',$place->id) }}">Edit</a>
                                     @csrf
                                        @method('DELETE')
                                     <button type="submit" class="btn btn-danger">Delete</button>
                                  </form>
                                </td>
                            </tr>
                            @endforeach
                     
                      
                    </tbody>
                  </table>
                  {!! $places->links() !!}
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

@endsection
@endauth