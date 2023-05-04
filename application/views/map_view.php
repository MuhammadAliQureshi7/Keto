<!DOCTYPE html>
<html>
<head>
    <title>Map Integration in CodeIgniter</title>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyADwbHO4npy1NA-CWARlFal4I4A5WZ8Bao"></script>
    <script>
        function initMap() {
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 8,
                center: {lat: -34.397, lng: 150.644}
            });

            var marker = new google.maps.Marker({
                position: {lat: -34.397, lng: 150.644},
                map: map,
                draggable: true
            });

            google.maps.event.addListener(marker, 'dragend', function(event){
                document.getElementById('latitude').value = event.latLng.lat();
                document.getElementById('longitude').value = event.latLng.lng();
            });
            google.maps.event.addListener( marker, 'click', function ( event ) {
                document.getElementById( "latitude" ).value = this.getPosition().lat();
                document.getElementById( "longitude" ).value = this.getPosition().lng();
            } );
            google.maps.event.addListener(marker, 'dragend', function() {
                updateMarkerStatus('Drag ended');
                geocodePosition(marker.getPosition());
                document.getElementById( "address" ).value = this.getPosition();
            });
        }
        function geocodePosition(pos) {
            geocoder.geocode({
                latLng: pos
            }, function(responses) {
                if (responses && responses.length > 0) {
                updateMarkerAddress(responses[0].formatted_address);
                } else {
                updateMarkerAddress('Cannot determine address at this location.');
                }
            });
        }
    </script>
</head>
<body onload="initMap()">
    <div id="map" style="height: 500px;"></div>
    <form method="post" action="<?php echo base_url('welcome/save_location'); ?>">
        <input type="text" id="latitude" name="latitude" placeholder="Latitude">
        <input type="text" id="longitude" name="longitude" placeholder="Longitude">
        <input type="submit" value="Save">
    </form>
</body>
</html>
