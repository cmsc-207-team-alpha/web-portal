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
              <h4 class="card-title">Forgot Password</h4>
              <div class="text-center">
              <p>Enter your email address and we will send you instructions on how to reset your password.</p>
              </div>
              <form method="POST">
                <div class="form-row form-group">
                  <label for="email">Email</label>
                  <input class="form-control" name="email" id="email" type="text"  placeholder="Email">
                </div>
                <div class="form-row no-margin">
                  <button type="submit" class="btn btn-success btn-block">
                    Register
                  </button>
                </div>
                <div class="margin-top20 text-center">
                  <a href="register.php"> Register an account</a> | <a href="login.php">Login now</a>
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
