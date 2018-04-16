<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include_once "layouts/dashboard.header.php"?>    
        <meta name="viewport" content="initial-scale=1.0">
        <meta charset="utf-8">
        <style>
        body, html {
            height: 100%;
        }
        #map {
            height: 100%;
        }
        </style>
	</head>
	<body class="login-page" >
		<?php include_once "layouts/dashboard.navigation.php"?>
	    <div class="container-fluid" style="height: 88%">
	      <div class="row" style="height: 88%">
	      	<?php include_once "layouts/dashboard.sidebar.php"?>
	        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">

	          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
	            <h1 class="h2"><span class="fa fa-fw fa-map"></span> Map</h1>
						</div>
                        <input id="pac-input" class="form-control" type="text" placeholder="Search Place">
                        <div id="map"></div>
					</main>
				</div>
			</div>    
    <script>
      function initAutocomplete() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: { lat: 14.562239, lng: 121.03645 },
          zoom: 13,
          mapTypeId: 'roadmap'
        });

        // Create the search box and link it to the UI element.
        var input = document.getElementById('pac-input');
        var searchBox = new google.maps.places.SearchBox(input);

        // Bias the SearchBox results towards current map's viewport.
        map.addListener('bounds_changed', function() {
          searchBox.setBounds(map.getBounds());
        });

        var markers = [];
        // Listen for the event fired when the user selects a prediction and retrieve
        // more details for that place.
        searchBox.addListener('places_changed', function() {
          var places = searchBox.getPlaces();

          if (places.length == 0) {
            return;
          }

          // Clear out the old markers.
          markers.forEach(function(marker) {
            marker.setMap(null);
          });
          markers = [];

          // For each place, get the icon, name and location.
          var bounds = new google.maps.LatLngBounds();
          places.forEach(function(place) {
            if (!place.geometry) {
              console.log("Returned place contains no geometry");
              return;
            }
            var icon = {
              url: place.icon,
              size: new google.maps.Size(71, 71),
              origin: new google.maps.Point(0, 0),
              anchor: new google.maps.Point(17, 34),
              scaledSize: new google.maps.Size(25, 25)
            };

            if (place.geometry.viewport) {
              // Only geocodes have viewport.
              bounds.union(place.geometry.viewport);
            } else {
              bounds.extend(place.geometry.location);
            }
          });
          map.fitBounds(bounds);
        });

        var infowindow = new google.maps.InfoWindow();

        var vehicles = getVehicles();
        $.each(vehicles, function(k, vehicle) {
            var marker = new google.maps.Marker({
            position: {lat: vehicle.locationlat, lng: vehicle.locationlong},
            icon: getVehicleMarker(vehicle.active, vehicle.available),
            map: map,
            animation: google.maps.Animation.DROP,
            title: 'Vehicle ID: ' + vehicle.id
            });
            var driver = getDriver(vehicle.driverid);
            var info = 
                '<strong>Driver ID:</strong> ' + driver.id + '<br>' +
                '<strong>Driver:</strong> ' + driver.firstname + ' ' + driver.lastname + '<br>' +
                '<strong>Vehicle ID:</strong> ' + vehicle.id + '<br>' +
                '<strong>Plate No.:</strong> ' + vehicle.plateno + '<br>' +
                '<strong>Make:</strong> ' + vehicle.make + '<br>' +
                '<strong>Model:</strong> ' + vehicle.model + '<br>' +
                '<strong>Color:</strong> ' + vehicle.color + '<br>' +
                '<strong>Active:</strong> ' + (vehicle.active === 1 ? 'Yes' : 'No') + '<br>' +
                '<strong>Available:</strong> ' + (vehicle.available === 1 ? 'Yes' : 'No')
            makeInfoWindowEvent(map, infowindow, info, marker);
        });

        var tripsRequested = getTrips('Requested');
        $.each(tripsRequested, function(k, trip) {
            var marker = new google.maps.Marker({
            position: {lat: trip.sourcelat, lng: trip.sourcelong},
            icon: 'assets/images/map/passenger-orange.png',
            map: map,
            animation: google.maps.Animation.DROP,
            title: 'Trip ID: ' + trip.id
            });
            var passenger = getPassenger(trip.passengerid);
            var info = 
                '<strong>Trip ID:</strong> ' + trip.id + '<br>' +
                '<strong>Stage:</strong> Requested (No driver assigned yet)<br>' +
                '<strong>Passenger ID:</strong> ' + passenger.id + '<br>' +
                '<strong>Passenger:</strong> ' + passenger.firstname + ' ' + passenger.lastname + '<br>'
            makeInfoWindowEvent(map, infowindow, info, marker);
        });

        var tripsRejected = getTrips('Rejected');
        $.each(tripsRejected, function(k, trip) {
            var marker = new google.maps.Marker({
            position: {lat: trip.sourcelat, lng: trip.sourcelong},
            icon: 'assets/images/map/passenger-red.png',
            map: map,
            animation: google.maps.Animation.DROP,
            title: 'Trip ID: ' + trip.id
            });
            var passenger = getPassenger(trip.passengerid);
            var info = 
                '<strong>Trip ID:</strong> ' + trip.id + '<br>' +
                '<strong>Stage:</strong> Rejected (Driver refused. New driver not yet assigned)<br>' +
                '<strong>Passenger ID:</strong> ' + passenger.id + '<br>' +
                '<strong>Passenger:</strong> ' + passenger.firstname + ' ' + passenger.lastname + '<br>'
            makeInfoWindowEvent(map, infowindow, info, marker);
        });
      }

      function makeInfoWindowEvent(map, infowindow, contentString, marker) {
        google.maps.event.addListener(marker, 'click', function() {
            infowindow.setContent(contentString);
            infowindow.open(map, marker);
        });
        }

      function getVehicleMarker(active, available) {
          if (!active) {
              return 'assets/images/map/car-gray.png';
          }
          if (!available) {
              return 'assets/images/map/car-red.png';
          }
          return 'assets/images/map/car-green.png';
      }

      function getVehicles() {
            return JSON.parse($.ajax({
                type: 'GET',
                url: "/api/vehicle/get.php",
                contentType: "application/json; charset=UTF-8",
                dataType: 'html',
                global: false,
                async:false,
                success: function(response) {
                return response;}
            }).responseText);
        };

    function getDriver(id) {
            return JSON.parse($.ajax({
                type: 'GET',
                url: "/api/driver/get.php?id=" + id,
                contentType: "application/json; charset=UTF-8",
                dataType: 'html',
                global: false,
                async:false,
                success: function(response) {
                return response;}
            }).responseText);
        };

    function getTrips(stage) {
            return JSON.parse($.ajax({
                type: 'GET',
                url: "/api/trip/get.php?stage=" + stage,
                contentType: "application/json; charset=UTF-8",
                dataType: 'html',
                global: false,
                async:false,
                success: function(response) {
                return response;}
            }).responseText);
        };

    function getPassenger(id) {
            return JSON.parse($.ajax({
                type: 'GET',
                url: "/api/passenger/get.php?id=" + id,
                contentType: "application/json; charset=UTF-8",
                dataType: 'html',
                global: false,
                async:false,
                success: function(response) {
                return response;}
            }).responseText)[0];
        };
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAOnTzBRmXJM7XzmWAbE8jMWwRzAu9tEC8&libraries=places&callback=initAutocomplete"
    async defer></script>
	</body>
</html>
