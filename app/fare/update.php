<?php
session_start();
?>
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
	            <h1 class="h2"><span class="fa fa-fw fa-money-bill-alt"></span> Update Fare</h1>
	            <a href="index" type="button" class="btn btn-info"><span class="fas fa-arrow-left"></span> Go Back to Fare List </a>
	          </div>
	          <div class="container-fluid">
		          <div class="form-group mx-auto">
		            <div class="form-row">
		              <div class="col-md font-weight-bold">
		              <input class="form-control" id="id" type="hidden" value="<?php echo htmlspecialchars($_GET["id"]); ?>">
		                <label for="vehicle_type">Vehicle Type</label>
		                <input class="form-control" id="vehicle_type" name id="vehicle_type" type="text" placeholder="Vehicle Type">
		              </div>
		              <div class="col-md-9">
		              </div>
		            </div>
		            <hr>
		            <div class="form-row mt-2">
		              <div class="col font-weight-bold">
		                <label>Regular Fare</label>
		               </div>
		            </div>
		            <div class="form-row">
		              <div class="col-md">
		                <label for="per_km">Per Kilometer</label>
		                <input class="form-control" id="per_km" name id="per_km" type="text" placeholder="Per Km">
		              </div>
		              <div class="col-md">
		                <label for="per_minute">Minute(s) Consumed</label>
		                <input class="form-control" id="per_minute" name="per_minute" type="text" placeholder="Per Minute">
		              </div>
		              <div class="col-md">
		                <label for="base_fare">Base Fare</label>
		                <input class="form-control" id="base_fare" name="base_fare" type="text" placeholder="Base Fare">
		              </div>
		            </div>
		            <hr>
		            <div class="form-row mt-2">
		              <div class="col font-weight-bold">
		                <label>Fare Adjustments</label>
		               </div>
		            </div>
		            <div class="form-row">
		              <div class="col-md">
		                <label for="surge_rush_threshold">Surge Rush Threshold</label>
		                 <input class="form-control" id="surge_rush_threshold" name="surge_rush_threshold" type="text" placeholder="Surge Rush Threshold">
											
		              </div>
		              <div class="col-md">
		                <label for="surge_rush_multiplier">Surge Rush Multiplier</label>
		                <input class="form-control" id="surge_rush_multiplier" name="surge_rush_multiplier" type="text" placeholder="Surge Rush Multiplier">
		              </div>
		              <div class="col-md">
		                <label for="surge_time_multiplier">Surge Time Multiplier</label>
		                <input class="form-control" name="surge_time_multiplier" id="surge_time_multiplier" type="text" placeholder="Surge Time Multiplier">
		              </div>
		            </div>
		            <hr>
		            <div class="form-row mt-2">
		              <div class="col font-weight-bold">
		                <label for="exampleInputName">Actions</label>
		               </div>
		            </div>
		            <div class="form-row">
		              <div class="col-md">
		              </div>
		              <div class="col-md">
		              </div>
		              <div class="col-md">
		                <button id="fare_update" name="fare_update" class="btn btn-lg btn-success mt-2"><span class="fas fa-plus"></span> Update Fare</button>
		              </div>
		            </div>
		          </div>
	          </div>
	        </main>
	      </div>
	    </div>
	</body>
		<script src=/app/assets/js/fare/update.js"></script>
</html>