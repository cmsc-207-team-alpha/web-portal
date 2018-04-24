<?php
/*
session_start();
if (!isset($_SESSION["admin_id"]) || !isset($_SESSION["admin_name"]))
{
   header("location: logout.php");
}
*/
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <head>

    <?php include_once("layouts/dashboard.header.php") ?>

    <link rel="stylesheet" href="../app/assets/stylesheets/datatables.min.css">
  </head>
  <body class="login-page">
    <?php include_once("layouts/dashboard.navigation.php") ?>
    <script src="../app/assets/js/datatables.min.js"></script>
      <div class="container-fluid">
        <div class="row">
          <?php include_once("layouts/dashboard.sidebar.php") ?>

          <div class="card fat">
            <div class="card-body">
              <h4 class="card-title">Add Vehicle</h4>
			  
				<div class="form-group col-md-8">
					<div id="result">			
					</div>
				</div>
			  
                <div class="form-group">
                  <div class="form-row">
                    <div class="col-md-6 form-group">
                      <label for="plateno">Plate No</label>
                      <input class="form-control" name="plateno" id="plateno" type="text"  placeholder="Plate No">
                    </div>

                    <div class="col-md-6 form-group">
                      <label for="vtype">Type</label>
                      <input class="form-control" name="vtype" id="vtype" type="text"  placeholder="vtype">
                    </div>

                    <div class="col-md-6 form-group">
                      <label for="make">Make</label>
                      <input class="form-control" name="make" id="make" type="text"  placeholder="Make">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-row">
                    <label for="model">Model</label>
                      <input type="text" class="form-control" name="model" id="model" placeholder="Model"> 
                  </div>
                </div>
				
				<div class="form-group">
                  <div class="form-row">
                    <label for="color">Color</label>
                      <input type="text" class="form-control" name="color" id="color" placeholder="Color"> 
                  </div>
                </div>
				
                <div class="form-group no-margin">
                  <button type="submit" class="btn btn-success btn-block" onclick="register()">Submit</button>
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
      var register = function () {
        var firstname = $('#firstname').val();
        var lastname = $('#lastname').val();
      var email = $('#email').val();
      var password = $('#password').val();
      var conpassword = $('#conpassword').val();
      
      if(password != conpassword){
        $("#result").removeClass();
            $('#result').addClass('alert alert-danger');
            $('#result').html("Error Message: " + "Passwords do not match.");
          }
      else{
        

        $.ajax({
          type: "POST",
          url: "/api/admin/register.php",
          data: JSON.stringify({
            firstname: firstname,
            lastname: lastname,
            email: email,
            password: password
          }),
          success: function (response) {
          $("#result").removeClass();
            $('#result').addClass('alert alert-success');
            $('#result').html("Successful Message:" + response["message"] + ". ID: " + response["id"]);
          },
          error: function (response) {
          $("#result").removeClass();
            $('#result').addClass('alert alert-danger');
            $('#result').html("Error Message: " + response.responseJSON["message"]);
          },
          contentType: "application/json; charset=UTF-8",
          dataType: "json"
        });
      }
    }
    
      </script>
</body>
</html>
