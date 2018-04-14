<!DOCTYPE html>
<html lang="en">
<head>
<?php include_once("layouts/header.php") ?>
<script src="assets/js/common.js"></script>
<script src="assets/js/login.js"></script>
  <link rel="stylesheet" href="../vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
<script src="assets/lib/jquery/js/jquery.min.js"></script>
</head>
<body class="login-page">
  <section class="h-100">
    <div class="container h-100">
      <div class="row  h-100">
          <div class="brand-lg">
            <a href="index.php">
              <img src="assets/images/logoteam-alpha.png">
            </a>
          </div>
          <div class="card fat">
            <div class="card-body">
              <h4 class="card-title">Administrator Login</h4>
			  
			  	<div class="form-group col-md-8">
					<div id="result">			
					</div>
				</div>
              
                <div class="form-group">
			<p></p>
			<p></p>
                  <label for="email">Email Address</label>
                  <div class="input-group mb-2 mr-sm-2">
                  <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fa fa-lg fa-user"></i></div>
                  </div>
                  <input type="text" class="form-control" name="email" id="email" placeholder="Email Address">
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

<?php
if(isset($_POST["submit"])){   
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
        echo "Successful response:<br/>";
        echo "Message: " . $response->message . '<br/>';
        echo "Id: " . $response->id;
    } else {
        echo "Error response:<br/>";
        echo "Message: " . $response->message;
    }
}
?>

                <div class="form-group no-margin">
                  <button type="submit" class="btn btn-success btn-block" onclick="login()">
                    Login
                  </button>
                </div>
            </div>
          </div>
          <div class="footer">
            Copyright &copy; 2018 &mdash; UPOU-CMSC-207-Team-Alpha
 
          </div>
        </div>
      </div>
    </div>
  </section>
  <script src="vendor/components/jquery/jquery.min.js"></script>
      <script>
      var login = function () {
      var email = $('#email').val();
      var password = $('#password').val();
      
     

        $.ajax({
          type: "POST",
          url: "/api/admin/authenticate.php",
          data: JSON.stringify({
            email: email,
            password: password
          }),
          success: function (response) {
          $("#result").removeClass();
			window.location='https://cmsc-207-team-alpha.000webhostapp.com/app/dashboard.php';
          },
          error: function (response) {
          $("#result").removeClass();
            $('#result').addClass('alert alert-danger');
            $('#result').html("Invalid email or password");
          },
          contentType: "application/json; charset=UTF-8",
          dataType: "json"
        });

    }
    
      </script>
</body>
</html>
