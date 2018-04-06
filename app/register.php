<!DOCTYPE html>
<html lang="en">
<head>
<?php include_once("layouts/login_header.php") ?>
</head>
<body>
<?php include_once("layouts/login_nav.php")?>
<div class="container-fluid">
 <div class="row content">
    <div class="col-sm-4 sidenav" align="center"> 	
	      	<?php include_once("layouts/login_sidebar.php")?>
     </div>
 
	 <div class="col-sm-8">
 
      	  <div class="brand-lg">
           
              <img src="assets/images/logoteam-alpha.png" width="150" height="100">
          
          </div>
		 
              <h4 class="card-title">Register Passenger</h4>
             <form method="POST">
                <div class="form-group">
                  <div class="form-row">
                   
                      <label for="email">Email</label>
                      <input class="form-control" name="email" id="email" type="text"  placeholder="Email">
                    </div>
                    
                </div>
				
                <div class="form-group">
                  <div class="form-row">
                    <label for="password">Password</label>
                      <input type="text" class="form-control" name="username" id="username" placeholder="Password"> 
                  </div>
                </div>
				
                <div class="form-group">
                  <div class="form-row">
                  <label for="password">Confirm Password</label>
                    <input type="text" class="form-control" name="password" id="password" placeholder="Confirm Password">
                  </div>
                </div>


                <div class="form-group">
                  <button type="submit" class="btn btn-success btn-block">
                    Register
                  </button>
                </div>
                <div class="form-group ">
                  Already have an account? <a href="login.php">Login Passenger</a> | <a href="login_driver.php">Login Driver</a>
                </div>
              </form>
     </div>
  </div>
</div>

<footer class="container-fluid">
           <p align="center"> Copyright &copy; 2018 &mdash; UPOU-CMSC-207-Team-Alpha </p>
</footer>
       
</body>
</html>
