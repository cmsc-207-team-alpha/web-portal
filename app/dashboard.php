<?php
session_start(); //Start the session
define(email,$_SESSION['email']); //Get the user name from the previously registered super global variable
if(!session_is_registered("email")){ //If session not registered
header("location:https://cmsc-207-team-alpha.000webhostapp.com/app/login.php"); // Redirect to login.php page
}
else //Continue to current page
header( 'Content-Type: text/html; charset=utf-8' );
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
