<!DOCTYPE html>
<html lang="en">
<head>
<?php include_once("layouts/header.php") ?>
</head>
<body class="login-page">
  <section class="h-100">
    <div class="container h-100">
      <div class="row  h-100">
          <div class="brand-lg">
            <a href="index.php">
              <img src="assets/images/logoteam-alpha.png">
            <a href="index.php">
          </div>
          <div class="card-wrapper">
          <div class="brand">
            <a href="index.php">
              <img src="assets/images/logoteam-alpha.png">
            </a>
          </div>
          <div class="card fat">
            <div class="card-body">
              <h4 class="card-title">Reset Password</h4>
              <div class="text-center">
              <p>Please enter the reset code and your new password.</p>
              </div>
              <form method="POST">
                <div class="form-row form-group">
                  <label for="email">Reset Code</label>
                  <input class="form-control" name="code" id="code" type="text"  placeholder="Reset Code">
                </div>
		      
		      <div class="form-row form-group">
                  <label for="email">Password</label>
                  <input class="form-control" name="password" id="password" type="password"  placeholder="Enter new password">
                </div>
		      
		      <div class="form-row form-group">
                  <label for="email">Confirm Password</label>
                  <input class="form-control" name="conpassword" id="conpassword" type="password"  placeholder="Confirm new password">
                </div>
		      
		      
                <div class="form-row no-margin">
                  <button type="submit" class="btn btn-success btn-block" onclick="set()">
                    Set New Password
                  </button>
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
	    
<script src="vendor/components/jquery/jquery.min.js"></script>
      <script>
      var set = function () {
      var code = $('#code').val();
      var password = $('#password').val();
      var conpassword = $('#conpassword').val();
	      
	if($password!=$conpassword)
		{
			echo"<script>window.alert('Password do not match');</script>";
			
		}
		else{
	    if ($token=$code)
	    {
        $.ajax({
          type: "POST",
          url: "/api/admin/update.php",
          data: JSON.stringify({
            password: password
          }),
          success: function (response) {
          $("#result").removeClass();
	    $('#result').addClass('alert alert-success');
		  $('#result').html("Password had been updated");
			window.location='https://cmsc-207-team-alpha.000webhostapp.com/app/login.php';
          }
          contentType: "application/json; charset=UTF-8",
          dataType: "json"
        });
	    else{
	    echo"<script>window.alert('Invalid reset code');</script>";
	    }
    }
    
      </script>
</body>
</html>
