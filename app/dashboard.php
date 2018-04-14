<?php
    session_start();
    $now = time(); // Time when home page starts.
    
    if (isset($_SESSION['email'])) 
    {
        session_destroy();
        session_write_close();
        header('Location: https://cmsc-207-team-alpha.000webhostapp.com/app/dashboard.php');
    }
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

 <?php
    } 
?>
