<!DOCTYPE html>
<html lang="en">
<head>
<?php include_once("layouts/login_header.php") ?>
</head> 

<body>

		<?php include_once("layouts/login_nav.php")?>
<div class="container-fluid">
 <div class="row content">
    <div class="col-sm-4 sidenav"  align="center"> 	
	      	<?php include_once("layouts/login_sidebar.php")?>
     </div>
 
	 <div class="col-sm-8">
 
      	  <div class="brand-lg">
           
              <img src="assets/images/logoteam-alpha.png" width="150" height="100">
          
          </div>
          
              <h4 class="card-title">Login</h4>
              <form method="POST">
                <div class="form-group">
                  <label for="username">Username</label>
                  <div class="input-group mb-2 mr-sm-2">
                  <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fa fa-lg fa-user"></i></div>
                  </div>
                  <input type="text" class="form-control" name="email" id="email" placeholder="Username">
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
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                  </div>
                </div>

                <div class="form-group">
                  <label>
                    <input type="checkbox" name="remember"> Remember Me
                  </label>
                </div>

                <div class="form-group">
                  <button type="submit" >
                    Login
                  </button>
                </div>
                <div class="form-group">
                  Don't have an account? <a href="register.php">Create One</a>
                </div>
              </form>
<?php
if (isset($_POST['email']) && isset($_POST['password'])) {
    $data = array(
        'email' => $_POST['email'],
        'password' => $_POST['password'],
    );
    $data_string = json_encode($data);
    # Create a connection
    $url = 'https://cmsc-207-team-alpha.000webhostapp.com/api/admin/authenticate.php';
    $ch = curl_init($url);
    # Setting our options
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',
        'Content-Length: ' . strlen($data_string)));
    # Get the response
    $response = json_decode(curl_exec($ch));
    curl_close($ch);
    if (property_exists($response, 'id')) {
	$url = 'https://cmsc-207-team-alpha.000webhostapp.com/app/dashboard.php';
        //echo "Successful response:<br/>";
        //echo "Message: " . $response->message . '<br/>';
        //echo "Id: " . $response->id;
    } else {
        echo "Error response:<br/>";
        echo "Message: " . $response->message;
    }
}
?>
      
       
     </div>
 </div>
</div>

<footer class="container-fluid">
           <p align="center"> Copyright &copy; 2018 &mdash; UPOU-CMSC-207-Team-Alpha </p>
</footer>
       
</body>
</html>
