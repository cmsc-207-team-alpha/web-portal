<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include_once("layouts/dashboard.header.php")?>
	</head>
	<body class="login-page">
		<?php include_once("layouts/dashboard.navigation.php")?>
	    <div class="container-fluid">
	      <div class="row">
	      	<?php include_once("layouts/dashboard.sidebar.php")?>
	        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
	          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
	            <h1 class="h2"><span class="fa fa-fw fa-tachometer-alt"></span> Dashboard</h1>
	          </div>

	          <div id="map"></div>







	          </main>
	      </div>
	    </div>


	</body>
</html>


//Script for maps
<script>
    function initMap(){
      // Map options
      var options = {
        zoom:12,
        center:{lat:14.5995,lng:120.9842}
      }

      // New map
      var map = new google.maps.Map(document.getElementById('map'), options);

      
      var markers = [
        {
          coords:{lat:14.648282,lng:121.049850},
        },
        {
          coords:{lat:14.599512,lng:120.984222}
        },
        {
          coords:{lat:14.5643,lng:120.984222}
        }
      ];

      // Loop through markers
      for(var i = 0;i < markers.length;i++){
        // Add marker
        addMarker(markers[i]);
      }

      // Add Marker Function
      function addMarker(props){
        var marker = new google.maps.Marker({
          position:props.coords,
          map:map,
          //icon:props.iconImage
        });


         var image = {
          url: 'http://cdn7.bigcommerce.com/s-hfhomm5/images/stencil/1280x1280/products/180/451/Solid_Red_Sized__25214.1507754519.jpg',
          // This marker is 20 pixels wide by 32 pixels high.
          size: new google.maps.Size(20, 12),
          // The origin for this image is (0, 0).
          origin: new google.maps.Point(0, 0),
          // The anchor for this image is the base of the flagpole at (0, 32).
          anchor: new google.maps.Point(0, 0)
        };
          marker.setIcon(image);

              
      }
    }
  </script>
  <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBpNhgIHxl580a988cAbi9rg3as6QaEzq4&callback=initMap">
    </script>


/* Still for update
// Get drivers coordinates
 <script>
$(document).ready(function(){
	load_vehicle();
});
function load_vehicle() {
	$('#vehicle_tbl').empty();
  $.ajax({
    url: "/api/driver/get.php",
    success: function (response) {
    	ct=0;
    	$.each(response, function(k, data) {
    		ct++;
    		$('#vehicle_tbl').append('<tr>'+
				'<td>'+ct+'</td>'+
				'<td>'+data.locationlong+'</td>'+
				'<td>'+data.locationlat+'</td>'+
			'</tr>');
    		
		});

		$('#vehicle_table').DataTable({
          "paging": true,
          "bFilter": true
        });
    },
    error: function (response) {
	 alert(response.responseJSON["message"]);
    },
    contentType: "application/json; charset=UTF-8",
    dataType: "json"
  });
};
