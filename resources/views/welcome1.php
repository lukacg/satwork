<script>
    var map;
    var markers = [];
    var live_data = [];
    var markersLayer = new L.LayerGroup(); // NOTE: Layer is created here!
    var updateMap = function(data) {
        console.log('Refreshing Map...');
        markersLayer.clearLayers();
        for (var i = 0; i < live_data.length; i++) {
            var heading = live_data[i][3];
            var latitude = live_data[i][1];
            var longtitude = live_data[i][2];
            var aircraft_id = live_data[i][0];
            var popup = L.popup()
                .setLatLng([latitude, longtitude])
                .setContent(aircraft_id);
            marker = L.marker([latitude, longtitude], {
                clickable: true
            }).bindPopup(popup, {
                showOnMouseOver: true
            });
            markersLayer.addLayer(marker);
        }
    }

    function GetData() {
        $.ajax({
                type: 'GET',
                url: 'www.filesource.com/file.txt'
            })
            .done(function(data) {
                var lines = data.split('\n'); //Split the file into lines
                $.each(lines, function(index, value) { //for each line
                    if (value.indexOf(':') > 0) { //Go if the line has data in it.
                        var line_data = value.split(':');
                        var data_marker = [line_data[0], line_data[5], line_data[6], line_data[45]];
                        live_data.push(data_marker);
                    }
                });
                updateMap();
            });
    }

    $(document).ready(function() {
        map = L.map('LiveMap', {
            'center': [39.50157442645549, 35.190536499023445],
            'zoom': 6,
            'layers': [
                L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/Canvas/World_Light_Gray_Base/MapServer/tile/{z}/{y}/{x}', {
                    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                })
            ]
        });
        markersLayer.addTo(map);
        GetData();
        setInterval(GetData, 60000); //every minute
    });
</script>













<script>
    //CUSTOM PINS ON MAP
    var letter_a = L.icon({
        iconUrl: "icons/letter_a.png",
        iconSize: [30, 30],
    });
    L.marker([44.772142, 17.208980], {
        icon: letter_a
    }).addTo(map);

    var letter_b = L.icon({
        iconUrl: "icons/letter_b.png",
        iconSize: [30, 30],
    });
    L.marker([44.774753, 17.207644], {
        icon: letter_b
    }).addTo(map);

    var letter_c = L.icon({
        iconUrl: "icons/letter_c.png",
        iconSize: [30, 30],
    });
    L.marker([44.773964, 17.199587], {
        icon: letter_c
    }).addTo(map);

    var letter_d = L.icon({
        iconUrl: "icons/letter_d.png",
        iconSize: [30, 30],
    });
    L.marker([44.770823, 17.199207], {
        icon: letter_d
    }).addTo(map);

    var letter_e = L.icon({
        iconUrl: "icons/letter_e.png",
        iconSize: [30, 30],
    });
    L.marker([44.771399, 17.195699], {
        icon: letter_e
    }).addTo(map);


    //Path 
    var polyline1 = [
        [44.772142, 17.208980],
        [44.774753, 17.207644],
        [44.773964, 17.199587],
        [44.770823, 17.199207],
        [44.771399, 17.195699],
    ];
    // Add a marker at each point

    polyline1.forEach(function(LatLng) {
        L.marker(LatLng).addTo(map);

    });

    // Add a polyline

    L.polyline(polyline1, {
        color: 'red'
    }).addTo(map);

    // Add a marker at each point
    polyline1.forEach(function(LatLng, i) {
        L.marker(LatLng, {
                icon: icons[i]
            })
            .addTo(map);

    });
</script>