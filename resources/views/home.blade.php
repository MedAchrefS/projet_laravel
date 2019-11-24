@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div id="map" style="height: 500px;"> achref</div>

                    <script>
                        // initialize the map
                        var map = L.map('map').setView([42.35, -71.08], 13);
                      
                        // load a tile layer
                        L.tileLayer('http://tiles.mapc.org/basemap/{z}/{x}/{y}.png',
                          {
                            attribution: 'Tiles by <a href="http://mapc.org">MAPC</a>, Data by <a href="http://mass.gov/mgis">MassGIS</a>',
                            maxZoom: 17,
                            minZoom: 9
                          }).addTo(map);
                          var marker = L.marker([36.812010, 10.180035]).addTo(map);
                      
                          
                        </script>
                    
                </div>
            </div>
        </div>
    </div>
</div>

<div>
    <h1> {{ Auth::user()->name }}</h1>
    <h1> {{ Auth::user()->email }}</h1>
    <h1> {{ Auth::user()->adresse }}</h1>
    <h1> {{ Auth::user()->hasRole('User') }}</h1>
    
</div>
<div>
        <table>
                <thead>
                <th style="min-width: 150px;">Name</th>
                <th style="min-width: 150px;">Email</th>
                <th style="min-width: 150px;">adresse</th>
                <th style="min-width: 50px;">User</th>
                <th style="min-width: 50px;">Admin</th>
                <th></th>
                </thead>
                <tbody>
                   
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->adresse }} <input type="hidden" name="email" value="{{ $user->email }}"></td>
                        <td><input type="checkbox" {{ $user->hasRole('User') ? 'checked' : '' }} name="role_user"></td>
                        <td><input type="checkbox" {{ $user->hasRole('Admin') ? 'checked' : '' }} name="role_admin"></td>
                    </tr>
                @endforeach 
               
                </tbody>
        </table>
</div>
@endsection
