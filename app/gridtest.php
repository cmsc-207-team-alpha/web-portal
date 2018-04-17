<!DOCTYPE html>

<html lang="en">
	<head>

		<?php include_once("layouts/dashboard.header.php") ?>

		<link rel="stylesheet" href="../app/assets/stylesheets/datatables.min.css">
	</head>
	<body class="login-page">

		<script src="../app/assets/js/datatables.min.js"></script>
	    <div class="container-fluid">
	      <div class="row">

	        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
						<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2">
							<h1 class="h2"><span class="fa fa-fw fa-users"></span> my humps</h1>
								<div class="btn-toolbar mb-3" role="toolbar" aria-label="Toolbar with button groups">

								</div>
						</div>
						<div class="table-responsive" id="driver_preview">
						</div>
						<div class="table-responsive" id="driver_list">
							<table class="table table-striped table-sm" id="drivers_table">
								<thead>
									<tr>
										<th>#</th>
										<th>Driver</th>
										<th>Email</th>
										<th>Mobile</th>
										<th>Verified</th>
										<th>Blocked</th>
										<th>Active</th>
										<th>Rating</th>
										<th>Actions</th>
									</tr>
								</thead>
								<tbody id="drivers_tbl">
								</tbody>
							</table>
						</div>
	        </main>
	      </div>
	    </div>
	</body>
</html>

<script>
$(document).ready(function(){
	load_drivers();
});
function load_drivers() {
	$('#drivers_tbl').empty();
  $.ajax({
    url: "/api/driver/get.php",
    success: function (response) {
    	ct=0;
    	$.each(response, function(k, data) {
    		ct++;
    		stat = '<span class="btn-success btn-sm" href="#" role="button">Active</span>';
    		blocked = '<span class="btn-danger btn-sm" href="#" role="button">Blocked</span>';
    		verified = '<span class="btn-success btn-sm" href="#" role="button">Verified</span>';
    		if(data.active == 0) stat = '<span class="btn-danger btn-sm" href="#" role="button">Inactive</span>';
    		if(data.blocked == 0) blocked = '<span class="btn-success btn-sm" href="#" role="button">Not Blocked</span>';
    		if(data.verified == 0) verified = '<span class="btn-danger btn-sm" href="#" role="button">Not Verified</span>';
    		$('#drivers_tbl').append('<tr>'+
				'<td>'+ct+'</td>'+
				'<td>'+data.firstname+' ' +data.lastname+'</td>'+
				'<td>'+data.email+'</td>'+
				'<td>'+data.mobile+'</td>'+
				'<td>'+verified+'</td>'+
				'<td>'+blocked+'</td>'+
				'<td>'+stat+'</td>'+
				'<td>3.5</td>'+
				'<td>'+
					'<button class="btn btn-sm btn-default" onclick="get_driver('+data.id+')" title="View Record" data-toggle="tooltip">'+
						'<span class="fa fa-eye"></span> '+
					'</button>'+
					'<button class="btn btn-sm btn-default" onclick="edit_driver('+data.id+')"  title="Update Record" data-toggle="tooltip">'+
						'<span class="fa fa-edit"></span>'+
					'</button>'+
					'<button class="btn btn-sm btn-default" onclick="update_stats('+data.id+')" title="Update Status" data-toggle="tooltip">'+
						'<span class="fa fa-user"></span> '+
					'</button>'+
					'<button class="btn btn-sm btn-default" onclick="add_document('+data.id+')" title="Add Document" data-toggle="tooltip">'+
						'<span class="fa fa-upload"></span>'+
					'</button>'+
					'<button class="btn btn-sm btn-default" onclick="delete_driver('+data.id+')" title="Delete Record" data-toggle="tooltip">'+
						'<span class="fa fa-trash"></span>'+
					'</button>'+
				'</td>'+
			'</tr>');
    		
		});
		$('#drivers_table').DataTable({
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
