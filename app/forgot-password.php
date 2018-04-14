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
              <h4 class="card-title">Forgot Password</h4>
              <div class="text-center">
              <p>Please enter your email address to reset your password</p>
              </div>
              <form method="POST">
                <div class="form-row form-group">
                  <label for="email">Email Address</label>
                  <input class="form-control" name="email" id="email" type="text"  placeholder="Email">
                </div>
                <div class="form-row no-margin">
                  <button type="submit" class="btn btn-success btn-block">
                    Reset Password
                  </button>
                </div>
                <div class="margin-top20 text-center">
                  <a href="login.php">Login now</a>
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
      
<?php
if(isset($_POST['submit']))
{
		$un=$_POST['email'];
		$query=mysqli_query($conn, "SELECT * FROM admin WHERE email LIKE '$un' LIMIT 1")or die("Error Query");
		if(mysqli_num_rows($query)>0)
		{
			$rv=mysqli_fetch_array($query);
			$emailtoken=md5($rv['email']);
			$email=$un;
			$body="Reset your password by using this code:$emailtoken";
				$emailsend=$email;
	

$subject="Password Reset";
$alertmsg="A message was sent to your email";
include('mailer.php');
			
		echo"<script>window.alert('An email has been sent, check the mail to change your password.');
		window.location='https://cmsc-207-team-alpha.000webhostapp.com/app/resetpass.php';</script>";
			
		}
		else
		{
			echo"<script>window.alert('Administrator account does not exist');</script>";
			
		}
		
		
		
}

?>
</body>
</html>
