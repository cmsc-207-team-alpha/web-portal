<!DOCTYPE html>
<html lang="en">
<head>
<?php include_once("layouts/header.php") ?>
</head>
<style>
  fieldset{border: 1px solid #eee; padding:5px;}
</style>
<body class="login-page" style="height:auto">
          <div class="row" style="margin-top:50px">
              <div class="col-md-4">
                <a href="index.php" style="float:right;">
                  <img src="assets/images/logoteam-alpha.png">
                </a>
              </div>


              <div class="col-md-6">
                  <div class="card fat" id="register_form" style="margin-top:0px; border: 1px solid #cecbcb">
                      <div class="card-body">
                        <h4 class="card-title" style="text-align:center;">Driver Registration</h4>
                        <div class="row">
                          <div class="col-md-12">
                              <span id="result" style="font-size: 11px"></span>
                           </div>
                        </div>
                        <br>
                        <input type="hidden" id="current" value="1">
                        <fieldset id="fieldset1">
                            <h6> Driver Information</h6>
                            <div class="row">
                              <div class="col-md-6">
                                  <label class="form-control-label">Firstname <span class="text-danger">*</span></label>
                                  <input type="text" class="form-control" name="firstname" id="firstname" placeholder="Juan">
                               </div>
                             <div class="col-md-6">
                                  <label class="form-control-label">Lastname <span class="text-danger">*</span></label>
                                  <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Cruz">
                              </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-6">
                                  <label class="form-control-label">Email <span class="text-danger">*</span></label>
                                  <input type="email" class="form-control" id="email" placeholder="juancruz@gmail.com">
                                </div>

                                <div class="col-md-6">
                                  <label class="6-control-label">Password <span class="text-danger">*</span></label>
                                  <input type="password" class="form-control" name="password" id="password" placeholder="@juander12">
                                </div>
                            </div>
                            <br>
                            <br>
                            <div class="row">
                                <div class="col-md-6">
                                  <label class="form-control-label">Address</label>
                                  <input type="text" class="form-control" name="address" id="address" placeholder="Quezon City">
                                </div>
                                 <div class="col-md-6">
                                  <label class="form-control-label">Mobile <span class="text-danger">*</span></label>
                                  <input type="text" class="form-control" name="mobile" id="mobile" placeholder="09123456789" maxlength="11">
                                </div>
                            </div>
                            <br>
                            <br>
                            <div class="row">
                              <div class="col-md-12">
                                <label>Driver Photo <span class="text-danger">*</span></label><br>
                                 <img src="#" id="driver_img" alt="" style="width: 200px; height: 200px; border:1px solid;"><br>
                                <input type="file" id="photo">
                              </div>
                            </div>
                        </fieldset>

                        <fieldset id="fieldset2" style="display: none;">
                            <h6> Vehicle Information</h6>
                            <div class="row">
                              <div class="col-md-6">
                                  <label class="form-control-label">plate no <span class="text-danger">*</span></label>
                                  <input type="text" class="form-control" id="plateno" placeholder="ABC123">
                               </div>
                             <div class="col-md-6">
                                  <label class="form-control-label">type <span class="text-danger">*</span></label>
                                  <input type="text" class="form-control" id="vtype" placeholder="Sedan">
                              </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-12">
                                  <label class="form-control-label">make <span class="text-danger">*</span></label>
                                  <input type="text" class="form-control" id="make" placeholder="Toyota">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-6">
                                  <label class="form-control-label">Model <span class="text-danger">*</span></label>
                                  <input type="text" class="form-control"id="model" placeholder="Vios">
                                </div>

                                <div class="col-md-6">
                                  <label class="form-control-label">Color <span class="text-danger">*</span></label>
                                  <input type="text" class="form-control" id="color" placeholder="Space Grey">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                              <div class="col-md-12">
                                <label>Vehicle Picture</label><br>
                                 <img src="#" id="vehicle_img" alt="" style="width: 200px; height: 200px; border:1px solid;"><br>
                                <input type="file" id="vphoto">
                              </div>
                            </div>
                          </fieldset>

                          <fieldset id="fieldset3" style="display: none;">
                          <h6> Driver Documents</h6>
                            <div class="row">
                                <div class="col-md-6">
                                  <label>Description</label><br>
                                  <input type="text" class="form-control" id="description">
                                </div>
                                <div class="col-md-6">
                                  <label>Type</label><br>
                                  <input type="text" class="form-control" id="type">
                                </div>
                                <div class="col-md-12">
                                    <label>File</label><br>
                                    <input type="hidden" id="doc_holder">
                                    <input type="file" id="doc">
                                </div>
                            </div>
                            <br>
                          </fieldset>
                    </div>
                    <br>
                    <div class="text-danger text-center" id="rwarning"></div>
                    <div class="form-group no-margin" style="margin-left:auto">
                      <button class="btn btn-default" onclick="prev()">
                        Previous
                      </button>
                      <button type="submit" name="submit" class="btn btn-success" onclick="next()" id="sbtn">
                        Next
                      </button>
                    </div>
                  </div>
              </div>
          </div>


<script>
    document.getElementById("photo").onchange = function () {
        var reader = new FileReader();
        reader.onload = function (e) {
            document.getElementById("driver_img").src = e.target.result;
        };
        reader.readAsDataURL(this.files[0]);
    };

    document.getElementById("doc").onchange = function () {
          var reader = new FileReader();
          reader.onload = function (e) {
              document.getElementById("doc_holder").value = e.target.result;
          };
          reader.readAsDataURL(this.files[0]);
      };
      document.getElementById("vphoto").onchange = function () {
          var reader = new FileReader();
          reader.onload = function (e) {
              document.getElementById("vehicle_img").src = e.target.result;
          };
          reader.readAsDataURL(this.files[0]);
      };
    function prev(){
      current = $('#current').val();
      switch(current){
        case '2':
           $('#current').val(1);
            wizard(1);
            $('#sbtn').text('Next');
           break;
        case '3':
           $('#current').val(2);
           wizard(2);
           $('#sbtn').text('Next');
           break;
      }
    }

    function next(){
      current = $('#current').val();
      err =0;
      switch(current){
        case '1':
          firstname = $('#firstname').val();
          lastname = $('#lastname').val();
          email = $('#email').val();
          password = $('#password').val();
          mobile = $('#mobile').val();
          photo = $('#photo').val();
          if(firstname == '' || lastname == '' || email == '' || password == '' || mobile == '' || photo == '' || !(mailvalidate(email))){
            err = 1;
          }
          else {
            err = 0;
          }
          if(err == 0){
            $('#current').val(2);
            wizard(2);
            $('#sbtn').text('Next');
           }
          else 
          $('#rwarning').text('Please fill up required fields and check your input if correct');
          break;
        case '2':
            plateno = $('#plateno').val();
            type = $('#vtype').val();
            make = $('#make').val();
            model = $('#model').val();
            color = $('#color').val();
            vehicle_img = $('#vphoto').val();

            if(plateno =='' || type == '' ||  make == '' || model == '' || color == '' || vehicle_img == ''){
               err = 1;
              }
            else err =0;
            if(err == 0){
               $('#current').val(3);
               wizard(3);
             }
            else 
            $('#rwarning').text('Please fill up required fields and check your input if correct');
          
           $('#sbtn').text('Submit');
           break;
        case '3':
            alert('wal');
            description = $('#description').val();
            type = $('#type').val();
            docs = $('#doc').val();
            if(description == '' || type == '' || docs == '')
               err = 1;
            else err =0;
            if(err == 0)
              registerdriver();
            else $('#rwarning').text('Please fill up required fields and check your input if correct');
           break;
      }
    }
    function wizard(val){
      $('#rwarning').text('');
      $('fieldset').hide();
      $('#fieldset' + val).show();
    }
    function registerdriver() {
       firstname = $('#firstname').val();
       lastname = $('#lastname').val();
       email = $('#email').val();
       password = $('#password').val();
       address = $('#address').val();
       mobile = $('#mobile').val();
       photo = document.getElementById("driver_img").src;
        $.ajax({
          type: "POST",
          url: "/api/driver/register.php",
          data: JSON.stringify({
          firstname: firstname,
          lastname: lastname,
          email: email,
          password: password,
          address: address,
          mobile : mobile,
          photo: photo
          }),
          success: function (response) {
            $("#result").removeClass();
            $('#result').addClass('alert alert-success');
            $('#result').html("Successful Message:" + response["message"] + ". ID: " + response["id"]);
            $('#register_form input').val('');
            add_vehicle(response["id"]);
            go_upload(response["id"]);
          },
          error: function (response) {
            $("#result").removeClass();
            $('#result').addClass('alert alert-danger');
            $('#result').html("Error Message: " + response.responseJSON["message"]);
          },
          contentType: "application/json; charset=UTF-8",
          dataType: "json"
        });
    };

    function add_vehicle(id){
      plateno = $('#plateno').val();
      type = $('#type').val();
      make = $('#make').val();
      model = $('#model').val();
      color = $('#color').val();
      vehicle_img = $('#vehicle_img').val();

      $.ajax({
       type: "POST",
       url: "/api/driver/adddocument.php",
       data:JSON.stringify({
          driverid: id,
          plateno: plateno,
          type: type,
          make: make,
          model: model,
          color: color,
          vehicle_img: vehicle_img
      }),
      contentType: "application/json; charset=UTF-8",
      dataType: "json"
    });
    }
    function mailvalidate(email) {
    var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
    if (filter.test(email)) {
        return true;
    }
    else {
        return false;
    }
  }
  function go_upload(id){
    description = $('#description').val();
    type = $('#type').val();
    docs = $('#doc_holder').val();
    $.ajax({
       type: "POST",
       url: "/api/driver/adddocument.php",
       data:JSON.stringify({
          driverid: id,
          document: docs,
          description: description,
          type: type
      }),
      contentType: "application/json; charset=UTF-8",
      dataType: "json"
    });
  }

  
  </script>
</body>
</html>
