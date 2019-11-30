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
                        navigator.geolocation.getCurrentPosition(function(location) {
                        var latlng = new L.LatLng(location.coords.latitude, location.coords.longitude);

                        var mymap = L.map('map').setView(latlng, 14)
                        L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
                            attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://mapbox.com">Mapbox</a>',
                            maxZoom: 18,
                            id: 'mapbox.streets',
                            accessToken: 'pk.eyJ1IjoiYmJyb29rMTU0IiwiYSI6ImNpcXN3dnJrdDAwMGNmd250bjhvZXpnbWsifQ.Nf9Zkfchos577IanoKMoYQ'
                        }).addTo(mymap);

                        var marker = L.marker(latlng).addTo(mymap);
                        });
                      
                          
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

