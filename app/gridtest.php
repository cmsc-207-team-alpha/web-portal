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
							<h1 class="h2"><span class="fa fa-fw fa-users"></span> bubu</h1>
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



function get_driver(id) {  
  $.ajax({
    url: "/api/driver/get.php?id=" + id,
    async:false,
    success: function (response) {
    	tbody = '';
        $.ajax({
		    url: "/api/driver/getdocument.php?driverid=" + id,
		    async: false,
		    success: function (response) {
		    	if(response != '')
		    	$.each(response, function(k, data) {
		    		detailed = '';
		    		a = '';
				 	$.ajax({
					    url: "/api/driver/getdocument.php?id=" + data.id,
					    async: false,
					    success: function (r) {
					    	detailed = '<td>'+r.datecreated +'</td>' +'<td>'+r.datemodified +'</td>';
					    	a = /*'<a class="btn btn-sm btn-default" title="Download Document" data-toggle="tooltip">'+
									'<i class="fa fa-download"></i>'+
								'</a>' +*/
								'<button class="btn btn-sm btn-default" onclick="edit_doc('+r.id+');" title="Edit Document" data-toggle="tooltip">'+
									'<i class="fa fa-edit"></i>'+
								'</button>';
					    },
					    contentType: "application/json; charset=UTF-8",
					    dataType: "json"
					});
		        tbody += '<tr>'+
			            	'<td>'+data.description +'</td>'+
			            	'<td>'+data.type +'</td>'+ detailed +
			            	'<td>'+ a +
								'<button class="btn btn-sm btn-default" onclick="dlt_doc('+data.id+', '+data.driverid+');" title="Delete Document" data-toggle="tooltip">'+
									'<i class="fa fa-trash"></i>'+
								'</button>'+
							'</td>'+
			            '</tr>';
			     });
		    	else tbody='<tr><td colspan="5" style="text-align:center"> Nothing to see. </td></tr>';
		    },
		    error: function (response) {
		     alert(response.responseJSON["message"]);
		    },
		    contentType: "application/json; charset=UTF-8",
		    dataType: "json"
		  });
        view = '<div class="col-md-12">'+
            '<div class="page-header">'+
                '<h4 style="text-align:center">View Driver</h4>'+
                '<hr>'+
            '</div>'+
            '<div class="row">'+
            	'<div class="col-md-3">'+
	            	'<div class="col-md-12">'+
	            		'<img src="'+response.photo+'" id="driver_img" alt="" style="width: 200px; height: 200px; border:1px solid;">'+
	            	'</div>'+
	            '</div>'+
	            '<div class="col-md-9">'+
	            	'<div class="row">'+
		            	'<div class="col-md-4">'+
			                '<label>Name</label><br>'+
			                '<h6>'+response.firstname+' '+ response.lastname +'</h6>'+
		                '</div>'+
		                '<div class="col-md-4">'+
			                '<label>Mobile</label><br>'+
			                '<h6>'+response.mobile +'</h6>'+
		                '</div>'+
		                '<div class="col-md-4">'+
			                '<label>Email</label><br>'+
			                '<h6>'+response.email +'</h6>'+
		                '</div>'+
		            '</div><br>'+
		            '<div class="row">'+
		                '<div class="col-md-4">'+
			                '<label>Address</label><br>'+
			                '<h6>'+response.address +'</h6>'+
		                '</div>'+
		                '<div class="col-md-4">'+
			                '<label>Date Created</label><br>'+
			                '<h6>'+response.datecreated +'</h6>'+
		                '</div>'+
		                '<div class="col-md-4">'+
			                '<label>Last Modified</label><br>'+
			                '<h6>'+response.datemodified +'</h6>'+
		                '</div>'+
		            '</div><br>'+
		            '<div class="row" style="margin:0">'+
         				'<div class="col-md-12" style="padding:0">'+
         				'<h6 style="text-align:center">Driver Documents</h6>'+
			            '<table border="1" cellpadding="5" style="width: 100%;">'+
			            	'<thead>'+
				            	'<th>Description</th>'+
				                '<th>Type</th>'+
				                '<th>Date Created</th>'+
				                '<th>Last Modified</th>'+
				                '<th>Action</th>'+
				            '</thead>'+
				            '<thead id="edit_doc_row">'+
				            '</thead>'+
				            '<body>'+ tbody+
				            '</body>'+
			            '</table></div>'+
			            '<div class="col-md-12" style="margin-top:4px">'+
					    	'<button style="float:right;" onclick="$(\'#driver_preview\').empty();" class="btn btn-sm btn-default">Close</button>'+
						 '</div>'+
					'</div>'+
				'</div>'+
			'</div>'+
			'<hr>'+
		'</div>';
        $('#driver_preview').html(view);
         
    },
    error: function (response) {
     alert(response.responseJSON["message"]);
    },
    contentType: "application/json; charset=UTF-8",
    dataType: "json"
  });
};

</script>
