@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">My Map</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div id="map" style="height: 500px;"> achref</div>
                   
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
        
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
  
              <h4 class="modal-title">Did You visit this place ??</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
             
            </div>
            <div class="modal-footer">
             <button type="button" class="btn btn-default" data-dismiss="modal">Yes</button>
              <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
            </div>
          </div>
          
        </div>
  </div>
 <script>

function myFunction() {
      
    console.log("achref");
    $("#myModal").modal();
    console.log("achref");
 
};

        var crd;

        function success(pos) {
                crd = pos.coords;
                console.log(pos);
                console.log('Votre position actuelle est :');


                var map = L.map('map').setView([crd.latitude, crd.longitude], 10);

                    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '&copy; <a href="https://osm.org/copyright">OpenStreetMap</a> contributors'
                    }).addTo(map);

                    var searchControl = L.esri.Geocoding.geosearch().addTo(map);


                    var results = L.layerGroup().addTo(map);

                    searchControl.on('results', function (data) {
                      
                        console.log(data.text);
                    results.clearLayers();
                    for (var i = data.results.length - 1; i >= 0; i--) {

                        sessionStorage.setItem('searchedPlaceText', data.text);
                        sessionStorage.setItem('searchedPlaceTextCoordinates',data.results[i].latlng );
                        
                        results.addLayer(L.marker(data.results[i].latlng)
                        .bindPopup("<input type='button' onClick='myFunction()'  id='myBtn' value='place Viseted' class='btn btn-info btn-lg' />"+data.text+"<br />.").openPopup()
                        );
                        results.addLayer(L.marker([crd.latitude, crd.longitude])
                        .bindPopup("<b>this is Your Place!</b><br />.").openPopup()
                        );
                        console.log(L.marker(data.results[i].latlng));
                    }
                    });

                    
              
        
        }
             function error(err) {
             console.warn(`ERREUR (${err.code}): ${err.message}`);
        }
        var options = {
            enableHighAccuracy: true,
            timeout: 5000,
            maximumAge: 0
            };

 navigator.geolocation.getCurrentPosition(success, error, options);

         



/*    
        var crd;

        function success(pos) {
                 crd = pos.coords;
                console.log(pos);
                console.log('Votre position actuelle est :');
                var mymap = L.map('map').setView([crd.latitude, crd.longitude], 13);

                    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
                        maxZoom: 18,
                        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
                            '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
                            'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
                        id: 'mapbox/streets-v11'
                    }).addTo(mymap);

                    L.marker([crd.latitude, crd.longitude]).addTo(mymap)
                        .bindPopup("<b>this is Your Place!</b><br />.").openPopup();
                        console.log(L);

                    var popup = L.popup(); 
           
        }
        function error(err) {
             console.warn(`ERREUR (${err.code}): ${err.message}`);
        }
        var options = {
            enableHighAccuracy: true,
            timeout: 5000,
            maximumAge: 0
            };

 navigator.geolocation.getCurrentPosition(success, error, options); */
  

                 

                         
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

