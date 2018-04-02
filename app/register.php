<!DOCTYPE html>
<html lang="en">
<head>
<?php include_once("layouts/header.php") ?>
</head>
<body class="login-page">
    <div class="container">
	<header align="right">
               <a href="register_driver.php"> <button type="button" class="btn btn-primary">Be a Driver</button></a>
			   <a href="register.php"> <button type="button" class="btn btn-primary">Get a Ride</button></a>      
	</header>
	<div class="col-md-2 col-md-offset-2">
	<div style="float:left; width:40%;">
	   <img src="../app/assets/images/upoulogo.png" width="200" height="200"/>
           <h1>Greetings, Earthlings!</h1>
	</div>
	</div>
           <div class="col-md-4 col-md-offset-4">	
      <div class="row  h-100">
          <div class="brand-lg">
           
              <img src="assets/images/logoteam-alpha.png" width="150" height="100">
          
          </div>
            <div class="card-body">
              <h4 class="card-title">Register Passenger</h4>
              <form method="POST">
                <div class="form-group">
                  <div class="form-row">
                    <div class="col-md-6 form-group">
                      <label for="email">Email</label>
                      <input class="form-control" name="email" id="email" type="text"  placeholder="Email">
                    </div>
                    <div class="col-md-6 form-group">
                      <label for="password">Password</label>
                      <input class="form-control" name="password" id="password" type="text"  placeholder="Password">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-row">
                    <label for="password">Password</label>
                      <input type="text" class="form-control" name="username" id="username" placeholder="Username"> 
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-row">
                  <label for="password">Password</label>
                    <input type="text" class="form-control" name="password" id="password" placeholder="Password">
                  </div>
                </div>


                <div class="form-group no-margin">
                  <button type="submit" class="btn btn-success btn-block">
                    Register
                  </button>
                </div>
                <div class="form-group no-margin">
                  Already have an account? <a href="login.php">Login now</a>
                </div>
              </form>
            </div>
          </div>
          <div class="footer">
            Copyright &copy; 2018 &mdash; UPOU-CMSC-207-Team-Alpha 
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
</html>
