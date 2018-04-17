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
		<?php include_once("layouts/dashboard.sidebar.php") ?>
	        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
						<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2">
							<h1 class="h2"><span class="fa fa-fw fa-chart-line"></span> Reports</h1>
								<div class="btn-toolbar mb-3" role="toolbar" aria-label="Toolbar with button groups">
								</div>
						</div>
						<div class="table-responsive" id="trip_preview">
						</div>
						<div class="table-responsive" id="payment_list">
							<table class="table table-striped table-sm" id="payment_table">
								<thead>
									<tr>
										<th>field_1</th>
										<th>field_2</th>
										<th>field_3</th>
										<th>field_4</th>
										<th>field_5</th>
										<th>field_6</th>
									</tr>
								</thead>
								<tbody id="payment_tbl">
								</tbody>
							</table>
						</div>
	        </main>
	      </div>
	    </div>
	</body>
</html>
