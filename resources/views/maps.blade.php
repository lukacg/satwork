<script>














    
        var map;
        var marker;
        
        function callAjax() {
            $.ajax({
                //the route pointing to the post function
                url: '/device_new',
                type: 'GET',
                dataType: 'json',
                // remind that 'data' is the response of the AjaxController
                success: function(data) {
                    var markerGroup = L.featureGroup();
                    //  markerGroup.addTo(map)
                    var coordinates = data;
                    for (var i = 0; i < coordinates.length; i++) {
                        if (coordinates[i].x && coordinates[i].y) {
                            marker = L.marker([coordinates[i].x, coordinates[i].y])
                                .bindPopup("Device: " + coordinates[i].device_type + '<br>' + "Time: " + coordinates[i].datetime)
                                .addTo(map);

                            marker.addTo(markerGroup);
                        }

                    }

                    //bounds = new L.LatLngBounds(new L.LatLng(44.752352, 17.125420),new L.LatLng(44.813152, 17.247729));
                    // map.fitBounds(bounds);

                    map.fitBounds(markerGroup.getBounds());
                },

                error: function(data) {
                    console.log(data);
                }

            });
            //setInterval(callAjax,3000);
        }