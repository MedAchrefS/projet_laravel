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
@endsection
