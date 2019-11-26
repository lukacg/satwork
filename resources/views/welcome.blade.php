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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="https://unpkg.com/leaflet@1.0.1/dist/leaflet.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>


    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <style>
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
            margin-bottom: 30px;
        }

        .content {
            padding-bottom: 60px;
        }
    </style>

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



    <div class="content">

        <div class="title m-b-md">
            <img src="img/LogoIndex.png" alt="Logo" class="responsive">
        </div>

        <div id="osm-map"></div>

        <br><br>

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
                    <th>Vehicles</th>
                    <th>Drivers</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($satwork as $row)
                <tr>
                    <td>{{ $row -> company_name}}</td>
                    <td>{{ $row -> device_type}}</td>
                    <td>{{ $row -> license_plate}}</td>
                    <td>{{ $row -> driver_name}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>

    <!-- pagination -->
    <script>
        $(document).ready(function() {
            $('#companies').DataTable({
               
            });
        });
    </script>

    <!-- OSM Map -->
    <script>
        // Where you want to render the map.
        var element = document.getElementById('osm-map');

        // Height has to be set. You can do this in CSS too.
        element.style = 'height:350px;', 'width:500px;';

        // Create Leaflet map on map element.
        var map = L.map(element);

        // Add OSM tile leayer to the Leaflet map.
        L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        // Target's GPS coordinates.
        var target = L.latLng('44.765611', '17.207313');

        // Set map's center to target with zoom 14.
        map.setView(target, 14);

        // Place a marker on the same location.
        L.marker(target).addTo(map);
    </script>

    <!-- Navi Dropdown -->
    <script>
        /* When the user clicks on the button, 
        toggle between hiding and showing the dropdown content */
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

</body>

<div class="footerFirst">
    <p>© 2019 Copyright: <a href="https://www.satwork.net/"> Satwork</a></p>
    <p>Contact information: <a href="mailto:info@satwork.net">info@satwork.net</a>.</p>
</div>

</html>