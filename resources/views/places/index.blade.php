
@guest
   // The user is not authenticated...
@endguest

@auth
   
@if(Auth::user()->hasRole('Admin'))
    @extends('Admin.layout')
@elseif (Auth::user()->hasRole('User'))
    @extends('layouts.app')
@endif

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Places</h2>

            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('places.create') }}"> Create New Place</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Details</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($places as $place)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $place->name }}</td>
            <td>{{ $place->Description }}</td>
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
    </table>
  
    {!! $places->links() !!}
      
@endsection
@endauth