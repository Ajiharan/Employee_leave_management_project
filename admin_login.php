

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

  <div class="container myLoginContainer col-md-6 col-sm-12 col-lg-4" id="login-container">
      <div class="container-box">
          <div>
            <h4 class="text-center text-dark">Admin-Login</h4>
          </div>
          <h6 class="text-center text-danger" id="log_error"></h6>
          <form autocomplete="off" id="frm">
            <div class="form-group">
              <label for="email">Email address:</label>
              <input type="email" name="email"  class="form-control"  placeholder="Enter email" id="email">
            </div>
            <div class="form-group">
              <label for="pwd">Password:</label>
              <input type="password" name="pass" id="pass" class="form-control" placeholder="Enter password" id="pwd">
            </div>
            <div id="button-center">
              <div>
                <button type="submit" name="submit" class="btn btn-dark" id="btn_submit">Login</button>
              </div>            
            </div>
            <p class="text-dark">By continuing, you agree to Lancer's <a href="#">Conditions of Use and Privacy Notice</a> . </p>
            
        </form>
      </div>
  </div>
  <script src="js/jquery.js"></script>
    <script src="js/jquery.validate.js"></script>
  <script>
    $(document).ready(function(){
     
      $.validator.setDefaults({
	      	submitHandler: function() {
            $.ajax({
                url:"./server/adminLogin.php",
                type:"post",
                data:$("#frm").serialize(),
                success:function(d){
                  if(d==200){
                    $("#log_error").text("");
                    document.querySelector("#frm").reset();
                     window.location.replace("./adminHome.php");
                  }else{
                  $("#log_error").text("!!Invalid email_id or password");
                    // alert("Invalid");
                  }
                 
                }
              });
            
            }
      });
      $("#frm").validate({
        rules:{ 
          email:{
            required:true,
            email:true
          },
          pass:{
            required:true

          }
         
        },
        messages:{
          email:{
            required:"Please Enter your email address",
            email:"Please Enter valid email address"
          },
          pass:{
            required:"Password is Required"
          }
        }
      });
    });
  </script>
   
</body>
</html>