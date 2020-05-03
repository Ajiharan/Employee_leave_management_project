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
  <div class="container-fluid" id="leave-top" >
  
    <div class="register-container" id="leave-container">
        <div class="container-box">
        <h5 class="text-center text-success" id="leave-success"></h5>
            <div>
                <h4 class="text-center text-dark">Leave Form</h4>
            </div>
            
            <form autocomplete="on" id="frm">
                <div class="form-group">
                    <label for="name" >Name</label>
                    <input type="text" name="name"  class="form-control"  placeholder="Enter your Name" id="name">
                </div>
                <div class="form-group">
                    <label for="dol">leave Date</label>
                    <input type="date" name="dol"  class="form-control"  placeholder="Enter Date" id="dol">
                </div>
                <div class="form-group">
                    <label for="email">Email address:</label>
                    <input type="email" name="email"  class="form-control"  placeholder="Enter email" id="email">
                </div>
                <div class="form-group">
                    <label for="days" >Number of Days</label>
                    <input type="number" name="days"  class="form-control"  placeholder="Enter Number of Days" id="days">
                </div>
                <div class="form-group">
                    <label for="pwd">Reason:</label>
                    <textarea name="res" id="res" class="form-control" placeholder="Enter reason"></textarea>
                </div>
                <div id="button-center">
                <div>
                    <button type="submit" name="submit" class="btn btn-dark" id="btn_submit">submit Form</button>
                </div>            
                </div>
              
            </form>
        </div>
        
    </div>
    <div class="leave-table table-responsive">
       <h4 class="text-dark text-center">Your Leave Details</h4>
       <script>
         $(document).ready(function(){
            setInterval(function(){
                $.ajax({
                     url:"./server/employeeViewLeave.php",
                     type:"GET",
                     dataType: "html",               
                     success:function(d){
                         $(".leave-table").html(d);
                                
                     }
                });

             },1000);
                  
        });

        </script>


    </div>
  </div>
  <script src="js/jquery.js"></script>
    <script src="js/jquery.validate.js"></script>
  <script>
      $(document).ready(function(){
            $.validator.setDefaults({
                submitHandler: function() {   
                   $.ajax({
                        url:"./server/leaveForm.php",
                        type:"post",
                        data:$("#frm").serialize(),
                        success:function(d){
                            if(d==200){
                                $("#leave-success").text("Form Submitted");
                               
                                $("#leave-success").fadeOut(4000,function(){
                                    $("#leave-success").text("");
                                })
                                document.querySelector("#frm").reset();
                            
                                // console.log(d);
                            }else if(d==400){
                        
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
                    email:{
                        required:true,
                        email:true
                    },
                    dol:{
                        required:true,
                        date:true
                    },
                    days:{
                        required:true
                    },
                    res:{
                        required:true
                    }
                
                
                },
                messages:{
                    name:{
                        required:"*Please Enter your Name*"
                    },
                    email:{
                        required:"*Please Enter your email address*",
                        email:"*Please Enter valid email address*"
                    },
                    dol:{
                        required:"*Date is Mandatory*"
                    },
                    days:{
                        required:"Date is Required"
                    },
                    res:{
                        required:"*Reason is Mandatory*"
                    }
                
                }
           });
      });
  </script>
     <script src="js/jquery.js"></script>
    <script src="js/jquery.validate.js"></script>
</body>
</html>