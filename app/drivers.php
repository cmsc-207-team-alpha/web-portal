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
	</head>
	<body class="login-page">
		<?php include_once("layouts/dashboard.navigation.php") ?>
		<link rel="stylesheet" src="../app/assets/stylesheets/datatables.min.css">
		<script src="../app/assets/js/datatables.min.js"></script>
	    <div class="container-fluid">
	      <div class="row">
	      	<?php include_once("layouts/dashboard.sidebar.php") ?>
	        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
						<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2">
							<h1 class="h2"><span class="fa fa-fw fa-users"></span> Drivers</h1>
								<div class="btn-toolbar mb-3" role="toolbar" aria-label="Toolbar with button groups">
								  <div class="btn-group mr-2" role="group" aria-label="First group">
								    <button type="button" class="btn btn-success"><span class="fas fa-user-plus"></span></button>
								    <button type="button" class="btn btn-danger"><span class="fas fa-user-times"></span></button>
								  </div>
									<!-- <div class="input-group">
									  <input type="text" class="form-control" placeholder="Search" aria-label="Recipient's username" aria-describedby="basic-addon2">
									  <div class="input-group-append">
											<div class="input-group-text btn-success"><i class="fa fa-lg fa-search"></i></div>
										</div> 
									</div> -->
								</div>
						</div>
						<div class="table-responsive" id="driver_preview">
						</div>
						<div class="table-responsive" id="driver_list">
							<table class="table table-striped table-md" id="drivers_table">
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
						</div><!-- 
						<nav aria-label="Page navigation example">
						  <ul class="pagination justify-content-end">
						    <li class="page-item disabled">
						      <a class="page-link" href="#" tabindex="-1">&laquo;</a>
						    </li>
						    <li class="page-item active"><a class="page-link" href="#">1</a></li>
						    <li class="page-item"><a class="page-link" href="#">2</a></li>
						    <li class="page-item"><a class="page-link" href="#">3</a></li>
						    <li class="page-item">
						      <a class="page-link" href="#">&raquo;</a>
						    </li>
						  </ul>
						</nav> -->
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

		$('#drivers_table').dataTable();
    },
    error: function (response) {
	 alert(response.responseJSON["message"]);
    },
    contentType: "application/json; charset=UTF-8",
    dataType: "json"
  });
};

function edit_driver(id) {
  $.ajax({
    url: "/api/driver/get.php?id=" + id,
    success: function (response) {
        $('#driver_preview').html('<div class="col-md-12">'+
            '<div class="page-header">'+
                '<h5>Edit Driver Details</h5>'+
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
			                '<input type="text" class="form-control" name="firstname" id="firstname" value="'+response.firstname+'">'+ 
		                '</div>'+
		                '<div class="col-md-4">'+
			                '<label>Last Name</label><br>'+
			                '<input type="text" class="form-control" name="lastname" id="lastname" value="'+response.lastname+'">'+ 
		                '</div>'+
		                '<div class="col-md-4">'+
			                '<label>Mobile</label><br>'+
			                '<input type="text" class="form-control" name="mobile" id="mobile" value="'+response.mobile +'" maxlength="11">'+
		                '</div>'+
		                
		            '</div><br>'+
		            '<div class="row">'+
		                '<div class="col-md-8">'+
			                '<label>Address</label><br>'+
			                '<input type="text" class="form-control" name="address" id="address" value="'+response.address +'">'+
		                '</div>'+
		                '<div class="col-md-4">'+
			                '<label>Email</label><br>'+
			                '<input type="text" class="form-control" name="email" id="email" value="'+response.email +'">'+
		                '</div>'+
			            '<div class="col-md-12" style="margin-top:10px;">'+
			            	'<div style="float:right">'+
				            	'<button style="margin-right:10px;" onclick="go_update('+response.id+');" class="btn btn-sm btn-primary">Submit</button>'+
				                '<button onclick="$(\'#driver_preview\').empty();" class="btn btn-sm btn-default">Close</button>'+
				            '</div>'+
			            '</div>'+
		            '</div>'+
	            '</div>'+
            '</div>'+
            '<br>'+
        '</div>');
    },
    error: function (response) {
     alert(response.responseJSON["message"]);
    },
    contentType: "application/json; charset=UTF-8",
    dataType: "json"
  });
};

function update_stats(id) {
  $.ajax({
    url: "/api/driver/get.php?id=" + id,
    success: function (response) {
        $('#driver_preview').html('<div class="col-md-12">'+
            '<div class="page-header">'+
                '<h5>Update Driver Status</h5>'+
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
			                '<h6>'+response.firstname+' ' +response.lastname+'</h6>'+ 
		                '</div>'+
		                '<div class="col-md-4">'+
			                '<label>Mobile</label><br>'+
			                '<h6>'+response.mobile +'</h6>'+
		                '</div>'+
		            '</div><br>'+
		            '<div class="row">'+
		                '<div class="col-md-4">'+
			                '<label>Verified</label><br>'+
			                '<select class="form-control" id="verified">'+
			                 	'<option value="0">Not Verified</option>'+
			                 	'<option value="1">Verified</option>'+
			                '</select>'+
		                '</div>'+
		                 '<div class="col-md-4">'+
			                '<label>Is Blocked</label><br>'+
			                '<select class="form-control" id="blocked">'+
			                 	'<option value="0">Not Blocked</option>'+
			                 	'<option value="1">Blocked</option>'+
			                '</select>'+
		                '</div>'+

		                '<div class="col-md-4">'+
			                '<label>Active</label><br>'+
			                '<select class="form-control" id="active">'+
			                 	'<option value="0">Inactive</option>'+
			                 	'<option value="1">Active</option>'+
			                '</select>'+
		                '</div>'+
			            '<div class="col-md-12" style="margin-top:10px;">'+
			            	'<div style="float:right">'+
				            '<button style="margin-right:10px;" onclick="go_update_stats('+response.id+');" class="btn btn-sm btn-primary">Submit</button>'+
				            '<button onclick="$(\'#driver_preview\').empty();" class="btn btn-sm btn-default">Close</button>'+
				            '</div>'+
			            '</div>'+
		            '</div>'+
	            '</div>'+
            '</div>'+
            '<br>'+
        '</div>');
        $('#active').val(response.active);
		$('#verified').val(response.verified);
		$('#blocked').val(response.blocked);
    },
    error: function (response) {
     alert(response.responseJSON["message"]);
    },
    contentType: "application/json; charset=UTF-8",
    dataType: "json"
  });
};

function add_document(id) {
  $.ajax({
    url: "/api/driver/get.php?id=" + id,
    success: function (response) {
        $('#driver_preview').html('<div class="col-md-12">'+
            '<div class="page-header">'+
                '<h5>Add Document</h5>'+
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
			                '<h6>'+response.firstname+' ' +response.lastname+'</h6>'+ 
		                '</div>'+
		                '<div class="col-md-4">'+
			                '<label>Mobile</label><br>'+
			                '<h6>'+response.mobile +'</h6>'+
		                '</div>'+
		            '</div><br>'+
		            '<div class="row">'+
		            	 '<div class="col-md-4">'+
			                '<label>Description</label><br>'+
			                '<input type="text" class="form-control" id="description">'+
		                '</div>'+
		                '<div class="col-md-4">'+
			                '<label>Type</label><br>'+
			                '<select class="form-control" id="type">'+
			                 	'<option value="Image">Image</option>'+
			                 	'<option value="Word">Word</option>'+
			                '</select>'+
		                '</div>'+
		                '<div class="col-md-4">'+
		              	    '<label>Document</label><br>'+
		              	     '<input type="hidden" id="doc_holder">'+
		              	    '<input type="file" id="doc">'+
		              	  '</div>'+
		              	'</div>'+
		              	'<div class="col-md-12" style="margin-top:10px;">'+
			            	'<div style="float:right">'+
				            '<button style="margin-right:10px;" onclick="go_upload('+response.id+');" class="btn btn-sm btn-primary">Submit</button>'+
				            '<button onclick="$(\'#driver_preview\').empty();" class="btn btn-sm btn-default">Close</button>'+
				            '</div>'+
			            '</div>'+
	            '</div>'+
            '</div>'+
            '<br>'+
        '</div>');
        $('#active').val(response.active);
		$('#verified').val(response.verified);
		$('#blocked').val(response.blocked);
		document.getElementById("doc").onchange = function () {
	        var reader = new FileReader();
	        reader.onload = function (e) {
	            document.getElementById("doc_holder").value = e.target.result;
	        };
	        reader.readAsDataURL(this.files[0]);
    	};
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
    success: function (response) {
        $('#driver_preview').html('<div class="col-md-12">'+
            '<div class="page-header">'+
                '<h5>View Driver</h5>'+
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
		            '</div>');
        $.ajax({
		    url: "/api/driver/getdocument.php?driverid=" + id,
		    success: function (response) {
		    	tbody ='';
		    	if(response != '')
		    	$.each(response, function(k, data) {
		        tbody += '<tr>'+
			            	'<td>'+data.description +'</td>'+
			            	'<td>'+data.type +'</td>'+
			            	'<td><button class="btn btn-block btn-default" onclick="get_document('+data.id+')" title="View Document" data-toggle="tooltip">'+
							'<span class="fa fa-eye"></span> '+
							'</button></td>'+
			            '</tr>';
			     });
		    	else tbody='<tr><td colspan="3" style="text-align:center"> Nothing to see. </td></tr>';
		    	$('#driver_preview').append('<div class="row" style="margin:0">'+
         				'<div class="col-md-3"></div><div class="col-md-6">'+
			            '<table border="1" cellpadding="5" style="width: 100%;">'+
			            	'<thead>'+
				            	'<th>Description</th>'+
				                '<th>Type</th>'+
				                '<th>View</th>'+
				            '</thead>'+
				            '<body>'+ tbody+
				            '</body>'+
			            '</table></div>'+
			            '<div class="col-md-12">'+
					    '<button style="float:right;" onclick="$(\'#driver_preview\').empty();" class="btn btn-sm btn-default">Close</button>'+
						            '</div>'+
					            '</div>'+
				            '</div>'+
			            '</div>'+
			            '<br>'+
			        '</div>');
		    },
		    error: function (response) {
		     alert(response.responseJSON["message"]);
		    },
		    contentType: "application/json; charset=UTF-8",
		    dataType: "json"
		  });

         
    },
    error: function (response) {
     alert(response.responseJSON["message"]);
    },
    contentType: "application/json; charset=UTF-8",
    dataType: "json"
  });
};
function go_upload(id) {
	description = $('#description').val();
	type = $('#type').val();
	docs = $('#doc_holder').val();
	$.ajax({
     type: "POST",
     url: "/api/driver/adddocument.php",
     data:JSON.stringify({
        driverid: id,
        document: docs,
        description: description,
        type: type
    }),
    success: function (response) {

    },
    error: function (response) {
     alert(response.responseJSON["message"]);
    },
    contentType: "application/json; charset=UTF-8",
    dataType: "json"
  });
}


function go_update(id) {
	var firstname = $('#firstname').val();
     var lastname = $('#lastname').val();
     var email = $('#email').val();
     var address = $('#address').val();
     var mobile = $('#mobile').val();
     var photo = document.getElementById("driver_img").src;
	$.ajax({
     type: "POST",
     url: "/api/driver/update.php",
     data:JSON.stringify({
        id: id,
        firstname: firstname,
        lastname: lastname,
        email: email,
        address: address,
        mobile : mobile,
        photo: photo
    }),
    success: function (response) {

    },
    error: function (response) {
     alert(response.responseJSON["message"]);
    },
    contentType: "application/json; charset=UTF-8",
    dataType: "json"
  });
}
function go_update_stats(id){
	var active = $('#active').val();
    var verified = $('#verified').val();
    var blocked = $('#blocked').val();
	$.ajax({
     type: "POST",
     url: "/api/driver/updatestatus.php",
     data:JSON.stringify({
        id: id,
        active: active,
		verified: verified,
		blocked: blocked
    }),
    success: function (response) {
        location.reload();
    },
    error: function (response) {
     alert(response.responseJSON["message"]);
    },
    contentType: "application/json; charset=UTF-8",
    dataType: "json"
  });
}

function godelete(id) {
	$.ajax({
     type: "POST",
     url: "/api/driver/delete.php",
     data:JSON.stringify({
        id: id,
    }),
    success: function (response) {
        location.reload();
    },
    error: function (response) {
     alert(response.responseJSON["message"]);
    },
    contentType: "application/json; charset=UTF-8",
    dataType: "json"
  });
}
function delete_driver(id) {
  $.ajax({
    url: "/api/driver/get.php?id=" + id,
    success: function (response) {
        $('#driver_preview').html('<div class="col-md-12">'+
            '<div class="page-header">'+
                '<h5>Delete Driver</h5>'+
            '</div>'+
            '<div class="row">'+
            	'<div class="col-md-3">'+
	            	'<div class="col-md-12">'+
	            		'<img src="'+response.photo+'" id="driver_img" alt="" style="width: 200px; height: 200px; border:1px solid;">'+
	            	'</div>'+
	            '</div>'+
	            '<div class="col-md-9">'+
		            '<div class="row">'+
		                '<div class="col-md-12">'+
			                '<h4>Are you sure you want do delete '+response.firstname+' '+ response.lastname +' ?</h4><br>'+
		                '</div>'+
		                '<div class="col-md-4">'+
		                	'<div style="float:right">'+
			                	'<button onclick="godelete('+response.id+');" style="margin-right:10px" class="btn btn-md btn-danger">Yes</button>'+
			                	'<button onclick="$(\'#driver_preview\').empty();" class="btn btn-md btn-default">No</button>'+
			                '</div>'+
			            '</div>'+
		            '</div>'+
	            '</div>'+
            '</div>'+
            '<br>'+
        '</div>');
    },
    error: function (response) {
     alert(response.responseJSON["message"]);
    },
    contentType: "application/json; charset=UTF-8",
    dataType: "json"
  });
};
</script>
