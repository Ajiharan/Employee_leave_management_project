
<?php 
session_start();
if(!isset($_SESSION['aid'])){
    
    header("Location:./admin_login.php"); 
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

    include('./header/admin_header.php')
?>
    <div class="container">
        <div class="row">
          
            <div class="emp-table table-responsive">
                <h4 class="text-dark text-center">Employee leave Details</h4>
              <script>
                  $(document).ready(function(){
                    setInterval(function(){
                        $.ajax({
                            url:"./server/view_employee_details.php",
                            type:"GET",
                            dataType: "html",               
                            success:function(d){
                                $(".emp-table").html(d);
                                
                            }
                        });

                     },1000);
                  
                  });

            </script>
            </div>
        </di>
    </div>
    <script src="js/jquery.js"></script>
    <script src="js/jquery.validate.js"></script>
</body>
</html>