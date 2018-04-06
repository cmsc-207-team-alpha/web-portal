<!DOCTYPE html>
<html lang="en">
<head>
<?php include_once("layouts/header.php") ?>
</head>
<body>

		<?php include_once("layouts/login_nav.php")?>
		<table width="100%">
		<tr>
		<td width="50%" align="center">  	
	      	<?php include_once("layouts/login_sidebar.php")?>
		
		</td>
		
		<td width="50%">

	
           <div class="col-md-4 col-md-offset-4">	
      <div class="row  h-100">
          <div class="brand-lg">
           
              <img src="assets/images/logoteam-alpha.png" width="150" height="100">
          
          </div>

            <div class="card-body">
              <h4 class="card-title">Login Driver</h4>
              <form method="POST">
                <div class="form-group">
                  <label for="username">Username</label>
                  <div class="input-group mb-2 mr-sm-2">
                  <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fa fa-lg fa-user"></i></div>
                  </div>
                  <input type="text" class="form-control" name="username" id="username" placeholder="Username">
                  </div>
                </div>
                <div class="form-group">
                  <label for="password">Password
                    <a href="forgot-password.php" class="float-right">
                      Forgot Password?
                    </a>
                  </label>
                  <div class="input-group mb-2 mr-sm-2">
                    <div class="input-group-prepend">
                      <div class="input-group-text"><i class="fa fa-lg fa-lock"></i></div>
                    </div>
                    <input type="text" class="form-control" name="password" id="password" placeholder="Password">
                  </div>
                </div>

                <div class="form-group">
                  <label>
                    <input type="checkbox" name="remember"> Remember Me
                  </label>
                </div>

                <div class="form-group no-margin">
                  <button type="submit" class="btn btn-success btn-block">
                    Login
                  </button>
                </div>
                <div class="margin-top20 text-center">
                  Don't have an account? <a href="register_driver.php">Create One</a>
                </div>
              </form>
            </div>
          </div>
          <div class="footer">
            Copyright &copy; 2018 &mdash; UPOU-CMSC-207-Team-Alpha 
          </div>
        </div>

</body>
</html>
