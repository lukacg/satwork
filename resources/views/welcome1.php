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



</script>