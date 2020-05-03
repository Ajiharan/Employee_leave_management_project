<?php

  session_start();
  if(isset($_SESSION['uid'])){
    header("Location:./Home.php"); 
    exit();
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <title>Document</title>
</head>
<body>
  <?php 
    include('./header/header.php')
  ?>  
  <div class="container">
 
    <div class="container register-container col-md-6 col-sm-12 col-lg-6" id="login-container">
        <div class="container-box">
            <div>
              <h4 class="text-center text-dark">Employee-Register</h4>
            </div>
            <h6 class="text-center text-danger" id="reglog_error"></h6>
            <form autocomplete="on" id="frm">
              <div class="form-group">
                <label for="email">Name</label>
                <input type="text" name="name"  class="form-control"  placeholder="Enter your Name" id="name">
              </div>
              <div class="form-group">
                <label for="dob">Date of Birth</label>
                <input type="date" name="dob"  class="form-control"  placeholder="Enter Your Date of Birth" id="dob">
              </div>
              <div class="form-group">
                <label for="email">Email address:</label>
                <input type="email" name="email"  class="form-control"  placeholder="Enter email" id="email">
              </div>
              <div class="form-group">
                <label for="pass">Password:</label>
                <input type="password" name="pass" id="pass" class="form-control" placeholder="Enter password" >
              </div>
              <div class="form-group">
                <label for="cpass">Conform Password:</label>
                <input type="password" name="cpass" id="cpass" class="form-control" placeholder="Enter conform password" >
              </div>
              <div id="button-center">
                <div>
                  <button type="submit" name="submit" class="btn btn-dark" id="btn_submit">Register</button>
                </div>            
              </div>
              <p class="text-dark text-center">By continuing, you agree to Lancer's <a href="#">Conditions of Use and Privacy Notice</a> . </p>
              <p class="text-dark text-center">If you alredy have any account <a href="../Employee_project/index.php">Sign in</a> . </p>
          </form>
        </div>
    </div>
</div>
  <script src="js/jquery.js"></script>
    <script src="js/jquery.validate.js"></script>
  <script>
    $(document).ready(function(){
     
      $.validator.setDefaults({
	      	submitHandler: function() {
              $.ajax({
                url:"./server/userRegister.php",
                type:"post",
                data:$("#frm").serialize(),
                success:function(d){
                  if(d==200){
                    $("#reglog_error").text("");
                    document.querySelector("#frm").reset();
                   window.location.replace("./index.php");
                    // console.log(d);
                  }else if(d==400){
                   $("#reglog_error").text("!!Email address already exists");
                    $("#email").val("");
                    $("#pass").val("");
                    $("#cpass").val("");
                  }else{
                    alert(d);
                  }
                  
                }
              });
            }
      });
      $("#frm").validate({
        rules:{
          name:{
            required:true
          },
          dob:{
            required:true,
            date:true
          },
          email:{
            required:true,
            email:true
          },
          pass:{
            required:true,
            minlength:6
          },
          cpass:{
            required:true,
            minlength:6,
            equalTo:"#pass"
          }
         
        },
        messages:{
          name:{
            required:"Please Enter Your Name"
          },
          dob:{
            required:"Please Enter your Date of Birth",
            date:"Please Enter valid Date of birth"
          },
          email:{
            required:"Please Enter your email address",
            email:"Please Enter valid email address"
          },
          pass:{
            required:"Password is Required",
            pass:"Password must contain atleast 6 characters"
          },
          cpass:{
            required:"Password is Required",
            pass:"Password must contain atleast 6 characters",
            equalTo:"password didn't match"
          }
        }
      });
    });
  </script>
   
</body>
</html>