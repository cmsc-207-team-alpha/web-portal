<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include_once("layouts/dashboard.header.php") ?>
	</head>
	<body class="login-page">
		<?php include_once("layouts/dashboard.navigation.php") ?>
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
									<div class="input-group">
									  <input type="text" class="form-control" placeholder="Search" aria-label="Recipient's username" aria-describedby="basic-addon2">
									  <div class="input-group-append">
											<div class="input-group-text btn-success"><i class="fa fa-lg fa-search"></i></div>
										</div> 
									</div>
								</div>
						</div>
						<div class="table-responsive">
							<table class="table table-striped table-md">
								<thead>
									<tr>
										<th><input class="form-control" type="checkbox" name=""></th>
										<th>ID</th>
										<th>Picture</th>
										<th>Driver's First Name</th>
										<th>Driver's Last Name</th>
										<th>Email</th>
										<th>Mobile</th>
										<th>Account Status</th>
										<th>Rating</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td><input class="form-control" type="checkbox" name=""></td>
										<td>DRV-0001</td>
										<td><a><img src="assets/images/upoulogo.png" alt="..." class="img-profile-sm img-thumbnail rounded-circle"></a></td>
										<td>Juan</td>
										<td>Dela Cruz</td>
										<td>jdelacruz@gmail.com</td>
										<td>09168765561</td>
										<td><span class="btn-success btn-sm" href="#" role="button">Active</span></td>
										<td>3.5</td>
									</tr>
									<tr>
										<td><input class="form-control" type="checkbox" name=""></td>
										<td>DRV-0002</td>
										<td><a><img src="assets/images/upoulogo.png" alt="..." class="img-profile-sm img-thumbnail rounded-circle"></a></td>
										<td>John</td>
										<td>Doe</td>
										<td>jdoe@gmail.com</td>
										<td>09197760987</td>
										<td><span class="btn-success btn-sm" href="#" role="button">Active</span></td>
										<td>3.75</td>
									</tr>
									<tr>
										<td><input class="form-control" type="checkbox" name=""></td>
										<td>DRV-0003</td>
										<td><a><img src="assets/images/upoulogo.png" alt="..." class="img-profile-sm img-thumbnail rounded-circle"></a></td>
										<td>Kelvin</td>
										<td>Reyes</td>
										<td>kreyes@gmail.com</td>
										<td>09167878671</td>
										<td><span class="btn-success btn-sm" href="#" role="button">Active</span></td>
										<td>4</td>
									</tr>
									<tr>
										<td><input class="form-control" type="checkbox" name=""></td>
										<td>DRV-0004</td>
										<td><a><img src="assets/images/upoulogo.png" alt="..." class="img-profile-sm img-thumbnail rounded-circle"></a></td>
										<td>Ronald</td>
										<td>Ramos</td>
										<td>rramos@yahoo.com</td>
										<td>09068767661</td>
										<td><span class="btn-success btn-sm" href="#" role="button">Active</span></td>
										<td>3.25</td>
									</tr>
									<tr>
										<td><input class="form-control" type="checkbox" name=""></td>
										<td>DRV-0005</td>
										<td><a><img src="assets/images/upoulogo.png" alt="..." class="img-profile-sm img-thumbnail rounded-circle"></a></td>
										<td>Ben</td>
										<td>Smith</td>
										<td>smithb@gmail.com</td>
										<td>0998766787</td>
										<td><span class="btn-success btn-sm" href="#" role="button">Active</span></td>
										<td>4</td>
									</tr>
									<tr>
										<td><input class="form-control" type="checkbox" name=""></td>
										<td>DRV-0006</td>
										<td><a><img src="assets/images/upoulogo.png" alt="..." class="img-profile-sm img-thumbnail rounded-circle"></a></td>
										<td>Will</td>
										<td>Long</td>
										<td>longwill@gmail.com</td>
										<td>09988766761</td>
										<td><span class="btn-success btn-sm" href="#" role="button">Active</span></td>
										<td>3.75</td>
									</tr>
									<tr>
										<td><input class="form-control" type="checkbox" name=""></td>
										<td>DRV-0007</td>
										<td><a><img src="assets/images/upoulogo.png" alt="..." class="img-profile-sm img-thumbnail rounded-circle"></a></td>
										<td>Nikka</td>
										<td>Garcia</td>
										<td>nikgar@gmail.com</td>
										<td>09988456789</td>
										<td><span class="btn-danger btn-sm" href="#" role="button">Blocked</span></td>
										<td>3</td>
									</tr>
									<tr>
										<td><input class="form-control" type="checkbox" name=""></td>
										<td>DRV-0008</td>
										<td><a><img src="assets/images/upoulogo.png" alt="..." class="img-profile-sm img-thumbnail rounded-circle"></a></td>
										<td>Mel</td>
										<td>Cruz</td>
										<td>melpcruz@gmail.com</td>
										<td>09876578829</td>
										<td><span class="btn-success btn-sm" href="#" role="button">Active</span></td>
										<td>4.25</td>
									</tr>
									<tr>
										<td><input class="form-control" type="checkbox" name=""></td>
										<td>DRV-0009</td>
										<td><a><img src="assets/images/upoulogo.png" alt="..." class="img-profile-sm img-thumbnail rounded-circle"></a></td>
										<td>Cocoy</td>
										<td>Pineda</td>
										<td>cpineda@yahoo.com</td>
										<td>09978678901</td>
										<td><span class="btn-success btn-sm" href="#" role="button">Active</span></td>
										<td>4.5</td>
									</tr>
									<tr>
										<td><input class="form-control" type="checkbox" name=""></td>
										<td>DRV-0010</td>
										<td><a><img src="assets/images/upoulogo.png" alt="..." class="img-profile-sm img-thumbnail rounded-circle"></a></td>
										<td>Vito</td>
										<td>Santos</td>
										<td>santosv@gmail.com</td>
										<td>09986790909</td>
										<td><span class="btn-warning btn-sm" href="#" role="button">Verified</span></td>
										<td></td>
									</tr>
								</tbody>
							</table>
						</div>
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
							</nav>
	        </main>
	      </div>
	    </div>
	</body>
</html>