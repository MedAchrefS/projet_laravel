
@guest
// The user is not authenticated...
@endguest

@auth

@if(Auth::user()->hasRole('Admin'))
 @extends('Admin.layout')

@endif

@section('content')

 <div class="col-md-11">
         <div class="card  card-tasks">
           <div class="card-header ">
             <h5 class="card-category">Users</h5>
             <div class="pull-right">
                     <a class="btn btn-success" href=""> Create New User</a>
                 </div>
           </div>
           <div class="card-body ">
             <div class="table-full-width table-responsive">
               <table class="table">
                   
                 <tbody>
                      <tr>
                      <th>No</th>
                      <th>Name</th>
                      <th>adresse</th>
                      <th>email</th>
                      <th>Created at</th>
                      <th>Updated at</th>
                      <th width="280px">Action</th>
                     </tr>
                         @foreach ($users as $user)
                         <tr>
                           
                            <td>{{ $user->id }}</td>
                             <td>{{ $user->name }}</td>
                             <td>{{ $user->adresse }}</td>
                             <td>{{ $user->email }}</td>
                             <td>{{ $user->created_at }}</td>
                             <td>{{ $user->updated_at }}</td>


                             
                             <td>
                              <form action="" method="POST">
                    
                               <a class="btn btn-info" href="">Show</a>
                               <a class="btn btn-primary" href="">Edit</a>
                                  @csrf
                                     @method('DELETE')
                                  <button type="submit" class="btn btn-danger">Delete</button>
                               </form>
                             </td>
                         </tr>
                         @endforeach
                  
                   
                 </tbody>
               </table>
               {!! $users->links() !!}
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