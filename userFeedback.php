<?php 
session_start();
if(!isset($_SESSION['uid'])){
    
    header("Location:./index.php"); 
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
        <div class="container container-feedback col-md-8 col-sm-12 col-lg-6" id="login-container">
            <div class="container-box">
                <div>
                    <h4 class="text-center text-dark">Employee Feedback</h4>
                </div>
                <h6 class="text-center text-danger" id="reglog_error"></h6>
                <form autocomplete="on" id="frm">
                <div class="form-group">
                    <label for="email">Name</label>
                    <input type="text" name="name"  class="form-control"  placeholder="Enter your Name" id="name" required>
                </div>
               
                <div class="form-group">
                    <label for="email">Email address:</label>
                    <input type="email" name="email"  class="form-control"  placeholder="Enter email" id="email" required>
                </div>
                <div class="form-group">
                    <label for="comment">Comments</label>
                    <textarea name="comment" rows="6"  class="form-control"  placeholder="Write Your Feedback" id="comment" required></textarea>
                </div>
               
              
                <div id="button-center">
                    <div>
                    <button type="submit" name="submit" class="btn btn-dark" id="btn_submit">Submit Feedback</button>
                    </div>            
                </div>
                
            </form>
            </div>
        </div>       
    </div> 
    <script>
     $(document).ready(function(){
            $.validator.setDefaults({
                submitHandler: function() {
                    $.ajax({
                        url:"./server/user_feed.php",
                        type:"post",
                        data:$("#frm").serialize(),            
                        success:function(d){
                        alert("Feedback Submitted");
                            if(d==200){
                                document.querySelector("#frm").reset();
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
        
          email:{
            required:true,
            email:true
          },
          comment:{
            required:true
            
          }
        
         
        },
        messages:{
          name:{
            required:"Please Enter Your Name"
          },
         
          email:{
            required:"Please Enter your email address",
            email:"Please Enter valid email address"
          },
          comment:{
              required:"*Please Enter your Feedback*"
          }
        
        }
      });                
         
                  
    });

    </script>
    <script src="js/jquery.js"></script>
    <script src="js/jquery.validate.js"></script> 
    
</body>
</html>