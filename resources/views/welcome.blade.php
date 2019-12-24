<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Satwork</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/leaflet@1.0.1/dist/leaflet.js"></script>
    <link href="https://unpkg.com/leaflet@1.0.1/dist/leaflet.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/@geoman-io/leaflet-geoman-free@latest/dist/leaflet-geoman.css" />
    <script src="https://unpkg.com/@geoman-io/leaflet-geoman-free@latest/dist/leaflet-geoman.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />

    <style link rel="stylesheet">
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 60px;
        }

        .content {
            padding-bottom: 60px;
        }
    </style>
    
    <script>
        var map;
        var marker;
        var markerLayer;
        var updateDeviceNew = 1;

        $(document).ready(function() {

            console.log('refresh');
            $('#companies').DataTable({
                "lengthMenu": [
                    [5, 10, 20, -1],
                    [5, 10, 20, "All"]
                ]
            });

            $('#updatedevice').click(function() {
                updatedev();
            });

            loadMap();
            callAjax();

        });


        function callAjax() {
            console.log('ajax');
            $.ajax({
                //the route pointing to the post function
                url: '/device_new',
                type: 'GET',
                dataType: 'json',
                // remind that 'data' is the response of the AjaxController
                success: function(data) {
                    var coordinates = data;

                    markerLayer.clearLayers();

                    for (var i = 0; i < coordinates.length; i++) {
                        var icon = getMarkerType(coordinates[i].event);
                        if (coordinates[i].x && coordinates[i].y) {

                            marker = L.marker([coordinates[i].x, coordinates[i].y], {
                                    icon: icon
                                })

                                //kod za ikonu markera icon:nesto  

                                .bindPopup("Device ID: " + coordinates[i].deviceId + '<br>' + "Time: " + coordinates[i].datetime);

                            marker.addTo(markerLayer);
                        }
                    }
                    
                    //bounds = new L.LatLngBounds(new L.LatLng(44.752352, 17.125420),new L.LatLng(44.813152, 17.247729));
                    // map.fitBounds(bounds);

                    map.fitBounds(markerLayer.getBounds(), {
                        padding: [50, 50]
                    });
                },
            });
            setTimeout(callAjax, 10000);
        }

        //DeviceNew Update
        function updatedev() {
            $.ajax({
                //the route pointing to the post function
                url: '/device/update/',
                data: {
                    id: updateDeviceNew
                },
                type: 'GET',
                // remind that 'data' is the response of the AjaxController
                success: function(data) {
                    updateDeviceNew++;
                },
            });
        }

        //Custom markers
        function getMarkerType(value) {
            //console.log(vrijednost)
            switch (value) {
                case 1:
                    var icon = L.icon({
                        iconUrl: 'icons/letter_a.png'
                    });
                    break;
                case 2:
                    var icon = L.icon({
                        iconUrl: 'icons/letter_b.png'
                    });
                    break;
                case 3:
                    var icon = L.icon({
                        iconUrl: 'icons/letter_c.png'
                    });
                    break;
                case 4:
                    var icon = L.icon({
                        iconUrl: 'icons/letter_d.png'
                    });
                    break;
            }
            return icon;
        }

        //MAP
        function loadMap() {
            // Where you want to render the map.
            var element = document.getElementById('osm-map');

            // Height has to be set. You can do this in CSS too.
            element.style = 'height:405px;', 'width:500px;';

            // Create Leaflet map on map element.
            map = L.map(element);

            // Add OSM tile leayer to the Leaflet map.
            L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);

            map.pm.addControls({
                position: 'topleft',
            });

            markerLayer = L.featureGroup().addTo(map);

        }

        //Dropdown
        function myFunction() {
            document.getElementById("myDropdown").classList.toggle("show");
        }

        // Close the dropdown if the user clicks outside of it
        window.onclick = function(event) {
            if (!event.target.matches('.dropbtn')) {
                var dropdowns = document.getElementsByClassName("dropdown-content");
                var i;
                for (i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                    }
                }
            }
        }
    </script>

</head>

<body>

    <nav class="navbar navbar-inverse">

        <div class="container-fluid">

            <div class="navbar-header">
                <a class="navbar-brand" href="/">SATWORK</a>
            </div>

            <div class="dropdown">
                <button onclick="myFunction()" class="dropbtn">Menu</button>
                <div id="myDropdown" class="dropdown-content">
                    <a href="/companies">Companies</a>
                    <a href="/devices">Devices</a>
                    <a href="/vehicles">Vehicles</a>
                    <a href="/drivers">Drivers</a>
                </div>
            </div>

            <ul class="nav navbar-nav navbar-right">
                @if (Auth::check())
                <li><a href="/logout"><span class="glyphicon glyphicon-log-out"></span> Log Out</a>
                <li>
                    @else
                <li><a href="/register"><span class="glyphicon glyphicon-user"></span> Register</a></li>
                <li><a href="/login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                @endif
            </ul>

        </div>
    </nav>

    <br><br>

    <!--CONTENT-->
    <div class="content">
        <div class="title m-b-md">
            <img src="img/LogoIndex.png" alt="Logo" class="responsive">
        </div>

        <div>
            <button type="submit" id="updatedevice">UPDATE MAP</button>
        </div>
        <br>

        <div id="osm-map"></div>

        <br>

        <div class="links">
            <a href="/companies">Companies</a>
            <a href="/devices">Devices</a>
            <a href="/vehicles">Vehicles</a>
            <a href="/drivers">Drivers</a>
        </div>
        <br><br>

        <table id="companies" class="table table-bordered">
            <thead>
                <tr>
                    <th>Companies</th>
                    <th>Devices</th>
                    <th>X</th>
                    <th>Y</th>
                    <th>Time</th>
                    <th>Vehicles</th>
                    <th>Drivers</th>
                </tr>
            </thead>
            </p>
            <tbody>
                @foreach ($satwork as $row)
                <tr>
                    <td>{{ $row -> company_name}}</td>
                    <td>{{ $row -> device_type}}</td>
                    <td>{{ $row -> x}}</td>
                    <td>{{ $row -> y}}</td>
                    <td>{{ $row -> datetime}}</td>
                    <td>{{ $row -> license_plate}}</td>
                    <td>{{ $row -> driver_name}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</body>
<div class="footerFirst">
    <p>© 2019 Copyright: <a href="https://www.satwork.net/"> Satwork</a></p>
    <p>Contact information: <a href="mailto:info@satwork.net">info@satwork.net</a>.</p>
</div>

</html>