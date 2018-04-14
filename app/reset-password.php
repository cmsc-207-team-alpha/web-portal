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
                  <button type="submit" class="btn btn-success btn-block">
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
      
<?php

if(isset($_POST['submit']))
{
	
		$code=$_POST['code'];
		$password=$_POST['password'];
		$conpassword=$_POST['conpassword'];
		
		if($password!=$conpassword)
		{
			echo"<script>window.alert('Password do not match');</script>";
			
		}
		else{
			
		$query=mysqli_query($conn, "SELECT * FROM admin WHERE type=1")or die("Error Query");
	    if(mysqli_num_rows($query)==0)
	    {
	        	echo"<script>window.alert('No available users');window.location='https://cmsc-207-team-alpha.000webhostapp.com/app/login.php';</script>";
	    }
	    $rcd=0;
		while($rvs=mysqli_fetch_array($query))
		{
			$rvtoken=md5($rvs['email']);
			//echo"<script>window.alert($rvtoken vs $email);</script>";
			if($rvtoken==$email)
			{   $rcd=1;
				$npass=md5($password);
				$sps=mysqli_query($conn,"UPDATE admin SET password='$npass' WHERE email LIKE '$rvs[email]' LIMIT 1")or die("qs error");
				if($sps)
				{
					echo"<script>window.alert('Successfully Updated your password, Try logging in again');window.location='https://cmsc-207-team-alpha.000webhostapp.com/app/login.php';</script>";
				}
				else
				{
					echo"<script>window.alert('Successfully Updated your password, Try logging in again');</script>";
					
				}
			}
			
		}
		if($rcd==0)
		{
		    
		    	echo"<script>window.alert('Invalid reset code');</script>";
		}
		
		}
		
		
		
}


?>
</body>
</html>
