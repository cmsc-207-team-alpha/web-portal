<?php
<script src="vendor/components/jquery/jquery.min.js"></script>
	<script>
	$.ajax({
          type: "POST",
          url: "/api/admin/authenticate.php",
          }),
if{
          success: function (response) {
          $("#result").removeClass();
            $('#result').addClass('alert alert-success');
			window.location='https://cmsc-207-team-alpha.000webhostapp.com/app/dashboard.php';
          }
}else{
          error: function (response) {
          $("#result").removeClass();
            $('#result').addClass('alert alert-danger');
            window.location='https://cmsc-207-team-alpha.000webhostapp.com/app/login.php';
          },
          contentType: "application/json; charset=UTF-8",
          dataType: "json"
		  
}
        });


/*if(!isset($_SESSION['email']))
{
	
	echo"<script>window.location='https://cmsc-207-team-alpha.000webhostapp.com/app/login.php';</script>";
}*/
?>


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
	          </main>
	      </div>
	    </div>
	</body>
</html>
