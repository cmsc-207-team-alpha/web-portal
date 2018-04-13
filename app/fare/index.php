<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include_once("layouts/dashboard.header.php"); ?>
	</head>
	<body class="login-page">
		<?php include_once("layouts/dashboard.navigation.php"); ?>
	    <div class="container-fluid">
	      <div class="row">
	      	<?php include_once("layouts/dashboard.sidebar.php"); ?>
	        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
	          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
	            <h1 class="h2"><span class="fa fa-fw fa-money-bill-alt"></span> Fare</h1>
	            <div class="btn-toolbar mb-3" role="toolbar" aria-label="Toolbar with button groups">
								  <div class="btn-group mr-2" role="group" aria-label="First group">
								    <a href="compute" type="button" class="btn btn-info"><span class="fas fa-calculator"></span> Compute </a>
								    <a href="add" type="button" class="btn btn-success"><span class="fas fa-plus-circle"></span> Add Fare </a>
								  </div>
									
								</div>
	          </div>
				<div class="table-responsive">
				<table class="table table-striped">
				<thead>
				<tr>
				<th><input class="form-control" type="checkbox" name=""></th>
				<th>id</th>
				<th>vehicle_type</th>
				<th>base_fare</th>
				<th>per_km</th>
				<th>per_minute</th>
				<th>surge_rush_threshold</th>
				<th>surge_rush_multiplier</th>
				<th>surge_time_multiplier</th>
				<th>actions</th>
				</tr>
				</thead>
				<tbody>
				</tbody>
				</table>
				</div>
	          </main>
	      </div>
	    </div>
	</body>
		<script src="/app/assets/js/fare/list.js"></script>
</html>