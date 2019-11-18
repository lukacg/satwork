<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/leaflet@1.0.1/dist/leaflet.js"></script>
    <link href="https://unpkg.com/leaflet@1.0.1/dist/leaflet.css" rel="stylesheet" />
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
    </style>
</head>

<body>
    <header id="header">
        <div class="container">


            <div class="dropdown" style="float:left;">
                <button class="dropbtn">For users</button>
                <div class="dropdown-content" style="left:0;">
                    @if (Auth::check())
                    <li class="nav-item" style="padding:3px"><a class="btn btn-primary float-left" href="/logout" role="button">Logout</a></li>
                    @else
                    <li class="nav-item" style="padding:3px"><a class="btn btn-primary float-left" href="/register" role="button"> Register</a></li>
                    <li class="nav-item" style="padding:3px"><a class="btn btn-primary float-left" href="/login" role="button">Login</a></li>
                    @endif
                </div>
            </div>

            <div class="dropdown" style="float:right;">
                <button class="dropbtn">Menu</button>
                <div class="dropdown-content">
                    <a href="/companies">Companies</a>
                    <a href="/devices">Devices</a>
                    <a href="/vehicles">Vehicles</a>
                    <a href="/drivers">Drivers</a>

                </div>
            </div>


        </div>
    </header>






    <div class="content">
        <div class="title m-b-md">
            <img src="img/LogoIndex.png" alt="Logo" style="width:500px;">
        </div>

        <div id="osm-map"></div>
        <br>
        <div class="links">
            <a href="/companies">Companies</a>
            <a href="/devices">Devices</a>
            <a href="/vehicles">Vehicles</a>
            <a href="/drivers">Drivers</a>
        </div>
        <br><br>

        <div class="container">
            <table id="myTable" class="table table-bordered">
                <thead>
                    <tr>
                        <th onclick="sortTable(0)">Companies</th>
                        <th onclick="sortTable(1)">Devices</th>
                        <th onclick="sortTable(2)">Vehicles</th>
                        <th onclick="sortTable(3)">Drivers</th>
                    </tr>
                </thead>

                <tbody>
                    
                    @foreach($items as $company)
                    <tr>
                        <td>{{isset($company['company'])?$company['company']->name:''}}</td>
                        <td>{{isset($company['device'])?$company['device']->type:''}}</td>
                        <td>{{isset($company['vehicle'])?$company['vehicle']->type:''}}</td>
                        <td>{{isset($company['driver'])?$company['driver']->name:''}}</td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </div>

    <div class="footerMain text-center py-3">© 2019 Copyright:
        <a href="https://www.satwork.net/"> Satwork</a>
        <p>Contact information: <a href="mailto:info@satwork.net">info@satwork.net</a>.</p>
    </div>

    <script>
        // Where you want to render the map.
        var element = document.getElementById('osm-map');

        // Height has to be set. You can do this in CSS too.
        element.style = 'height:300px;', 'width:500px;';

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

    <script>
        function sortTable(n) {
            var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
            table = document.getElementById("myTable");
            switching = true;
            //Set the sorting direction to ascending:
            dir = "asc";
            /*Make a loop that will continue until
            no switching has been done:*/
            while (switching) {
                //start by saying: no switching is done:
                switching = false;
                rows = table.rows;
                /*Loop through all table rows (except the
                first, which contains table headers):*/
                for (i = 1; i < (rows.length - 1); i++) {
                    //start by saying there should be no switching:
                    shouldSwitch = false;
                    /*Get the two elements you want to compare,
                    one from current row and one from the next:*/
                    x = rows[i].getElementsByTagName("TD")[n];
                    y = rows[i + 1].getElementsByTagName("TD")[n];
                    /*check if the two rows should switch place,
                    based on the direction, asc or desc:*/
                    if (dir == "asc") {
                        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                            //if so, mark as a switch and break the loop:
                            shouldSwitch = true;
                            break;
                        }
                    } else if (dir == "desc") {
                        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
                            //if so, mark as a switch and break the loop:
                            shouldSwitch = true;
                            break;
                        }
                    }
                }
                if (shouldSwitch) {
                    /*If a switch has been marked, make the switch
                    and mark that a switch has been done:*/
                    rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                    switching = true;
                    //Each time a switch is done, increase this count by 1:
                    switchcount++;
                } else {
                    /*If no switching has been done AND the direction is "asc",
                    set the direction to "desc" and run the while loop again.*/
                    if (switchcount == 0 && dir == "asc") {
                        dir = "desc";
                        switching = true;
                    }
                }
            }
        }
    </script>

</body>

</html>