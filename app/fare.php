<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include_once("layouts/dashboard.header.php") ?>
		<script src="assets/js/fare.js"></script>
	</head>
	<body class="login-page">
		<?php include_once("layouts/dashboard.navigation.php") ?>
	    <div class="container-fluid">
	      <div class="row">
	      	<?php include_once("layouts/dashboard.sidebar.php") ?>
	        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
	          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
	            <h1 class="h2"><span class="fa fa-fw fa-money-bill-alt"></span> Fares</h1>
							<div class="btn-toolbar mb-3" role="toolbar" aria-label="Toolbar with button groups">
							  
							</div>
	          </div>
	          <div class="container-fluid">
			        <form>
			          <div class="form-group mx-auto">
			            <div class="form-row">
			              <div class="col-md font-weight-bold">
			                <label for="exampleInputName">Vehicle Type</label>
										    <select class="form-control" id="exampleFormControlSelect1">
										      <option>Baic: A113, M20*</option>
													<option>BYD: E6, F0, F3, F5, L3</option>
													<option>Chang’an: Honor*</option>
													<option>Chery: Fullwin*</option>
													<option>Chevrolet: Aveo*, Captiva, Cruze, Optra, Sonic, Spin, Trax*</option>
													<option>Ford: Ecosport, Escape*</option>
													<option>Foton: View Traveller* (accepting of vans are subject to Uber’s discretion)</option>
													<option>Geely: LC</option>
													<option>Haima: M3</option>
													<option>Honda:  City, Civic, Mobilio</option>
													<option>Hyundai: Accent (Sedan), Elantra, Sonata, Tucson*</option>
													<option>Isuzu: Crosswind</option>
													<option>Kia: Carenz, Carnival, Rio (Sedan), Soul, Forte (Sedan), Optima*, Sportage</option>
													<option>MG: 350, GT</option>
													<option>Mahindra: Xylo</option>
													<option>Mazda: Mazda 2 (Sedan), Mazada 3 (Sedan)</option>
													<option>Mitsubishi: Adventure, Lancer, Mirage, ASX, Fuzion*</option>
													<option>Nissan: Altima, Juke*, Almera, Cefiro, Grand Livina, Sentra</option>
													<option>Peugeot: 3008, 301*</option>
													<option>Renault Samsung: SM3*</option>
													<option>Ssangyong: Stavic</option>
													<option>Subaru: Impreza (Sedan)</option>
													<option>Suzuki: APV, Ertiga, Kizashi, Kizash*</option>
													<option>Tata: Manza, Indigo</option>
													<option>Toyota: Altis, Avanza, Innova, Vios, BB, Corolla*</option>
													<option>Volkswagen: Polo (Sedan), Jetta*, Passat*</option>
										    </select>
			              </div>
			              <div class="col-md-9">
			              </div>
			            </div>
			            <hr>
			            <div class="form-row mt-2">
			              <div class="col font-weight-bold">
			                <label for="exampleInputName">Regular Fare Rate</label>
			               </div>
			            </div>
			            <div class="form-row">
			              <div class="col-md">
			                <label for="origin">Origin</label>
			                <input class="form-control" id="origin" type="text" placeholder="Origin">
			              </div>
			              <div class="col-md">
			                <label for="destination">Destination</label>
			                <input class="form-control" id="destination" type="text" placeholder="Destination">
			              </div>
			              <div class="col-md-1">
			              </div>
			              <div class="col-md">
			                <label for="exampleInputLastName">Regular Fare</label>
			                <input class="form-control" id="regular_fare" type="text" placeholder="Regular Fare">
			              </div>
			            </div>
			            <hr>
			            <div class="form-row mt-2">
			              <div class="col font-weight-bold">
			                <label for="exampleInputName">Fare Adjustments</label>
			               </div>
			            </div>
			            <div class="form-row">
			              <div class="col-md">
			                <label for="exampleInputName">Minute(s) Consumed</label>
			                 <input class="form-control" id="origin" type="text" placeholder="Minute(s)">
												
			              </div>
			              <div class="col-md">
			                <label for="exampleInputName">Per Minute</label>
			                <select class="form-control">
												<option value="5:00">5.00</option>
												<option value="10.00">10.00</option>
												<option value="10.00">15.00</option>
												<option value="10.00">20.00</option>
												<option value="10.00">25.00</option>
												<option value="10.00">30.00</option>
												<option value="10.00">35.00</option>
												<option value="10.00">40.00</option>
												<option value="10.00">45.00</option>
												<option value="10.00">50.00</option>
											</select>
			              </div>
			              <div class="col-md">
			                <label for="exampleInputLastName">Additional per Kilometers</label>
			                <select class="form-control">
												<option value="10">10.00</option>
												<option value="15">15.00</option>
												<option value="30">30.00</option>
												<option value="45">45.00</option>
												<option value="90">90.00</option>
												<option value="180">180.00</option>
											</select>
			              </div>
			              <div class="col-md-1">
			              </div>
			              <div class="col-md">
			                <label for="total_fare_adjustment">Total Fare Adjustments</label>
			                <input class="form-control" id="total_fare_adjustment" type="text" placeholder="Total Fare Adjustments">
			              </div>
			            </div>
			            <hr>
			            <div class="form-row mt-2">
			              <div class="col font-weight-bold">
			                <label for="exampleInputName">Total Payment</label>
			               </div>
			            </div>
			            <div class="form-row">
			              <div class="col-md">
			              </div>
			              <div class="col-md">
			              </div>
			              <div class="col-md-1">
			              </div>
			              <div class="col-md">
			                <label for="total_payment">Total Payment</label>
			                <input class="form-control" id="total_payment" type="text" placeholder="Total Payment">
			                <button type="submit" class="btn btn-success mt-2"><span class="fas fa-check"></span> Submit</button>
			              </div>
			            </div>
			          </div>
			        </form>
	          </div>
	         </main>
	      </div>
	    </div>
	</body>
</html>