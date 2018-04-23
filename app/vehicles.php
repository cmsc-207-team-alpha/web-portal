<?php
/*
session_start();
if (!isset($_SESSION["admin_id"]) || !isset($_SESSION["admin_name"]))
{
   header("location: logout.php");
}
*/
?>


<!DOCTYPE html>
<style>
	.btn-default{
		color: #333;
	    background-color: #fff;
	    border-color: #ccc !important;
	}
</style>
<html lang="en">
	<head>

		<?php include_once("layouts/dashboard.header.php") ?>

		<link rel="stylesheet" href="../app/assets/stylesheets/datatables.min.css">
	</head>
	<body class="login-page">
		<?php include_once("layouts/dashboard.navigation.php") ?>
		<script src="../app/assets/js/datatables.min.js"></script>
	    <div class="container-fluid">
	      <div class="row">
	      	<?php include_once("layouts/dashboard.sidebar.php") ?>
	        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
						<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2">
							<h1 class="h2"><span class="fa fa-fw fa-car"></span> Vehicles</h1>
								<div class="btn-toolbar mb-3" role="toolbar" aria-label="Toolbar with button groups">
								</div>
						</div>
						<div class="table-responsive" id="vehicle_preview">
						</div>
						<div class="table-responsive" id="vehicle_list">
							<table class="table table-striped table-sm" id="vehicles_table">
								<thead>
									<tr>
										<th>#</th>
										<th>Driver</th>
										<th>Plate No</th>
										<th>Type</th>
										<th>Make</th>
										<th>Model</th>
										<th>Color</th>
										<th>Active</th>
										<th>Available</th>
										<th>Actions</th>
									</tr>
								</thead>
								<tbody id="vehicles_tbl">
								</tbody>
							</table>
						</div>
			<a href="vehicle_add.php" class="float-left">
                      Add Vehicle
                    </a>
	        </main>
	      </div>
	    </div>
	</body>
</html>

<script>
$(document).ready(function(){
	load_vehicles();
});
function load_vehicles() {
	$('#vehicles_tbl').empty();
  $.ajax({
    url: "/api/vehicle/get.php",
    success: function (response) {
    	ct=0;
    	$.each(response, function(k, data) {
    		ct++;
    		stat = '<span class="btn-success btn-sm" href="#" role="button">Active</span>';
    		available = '<span class="btn-success btn-sm" href="#" role="button">Available</span>';
    		
    		if(data.active == 0) stat = '<span class="btn-danger btn-sm" href="#" role="button">Inactive</span>';
    		if(data.available == 0) available = '<span class="btn-danger btn-sm" href="#" role="button">Not Available</span>';
    		
    		$('#vehicles_tbl').append('<tr>'+
				'<td>'+ct+'</td>'+
				// '<td>'+data.firstname+' ' +data.lastname+'</td>'+
				'<td>'+data.driverid+'</td>'+
				'<td>'+data.plateno+'</td>'+
				'<td>'+data.vtype+'</td>'+
				'<td>'+data.make+'</td>'+
				'<td>'+data.model+'</td>'+
				'<td>'+data.vcolor+'</td>'+
				'<td>'+stat+'</td>'+
				'<td>'+available+'</td>'+
				'<td>'+
					'<button class="btn btn-sm btn-default" onclick="get_driver('+data.id+')" title="View" data-toggle="tooltip">'+
						'<span class="fa fa-eye"></span> '+
					'</button>'+
					'<button class="btn btn-sm btn-default" onclick="edit_driver('+data.id+')"  title="Update" data-toggle="tooltip">'+
						'<span class="fa fa-edit"></span>'+
					'</button>'+
								
					'<button class="btn btn-sm btn-default" onclick="delete_driver('+data.id+')" title="Delete Record" data-toggle="tooltip">'+
						'<span class="fa fa-trash"></span>'+
					'</button>'+

				'</td>'+
				
			'</tr>');
    		
		});

		$('#vehicles_table').DataTable({
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


</script>
