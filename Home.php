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
  
   <div class="container-fluid mt-4">
                <div class="row" id="home-container">
                    <div>
                        <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
                            <div class="card-header">Employee Leave</div>
                            <div class="card-body">
                                <h5 class="card-title">Leave Materials</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="./userLeave.php"> <input type="button" value=" Take a leave" class='btn btn-dark'></a>
                            </div>
                        </div>
                    </div>
                    
                    <div>
                        <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                            <div class="card-header">Employee Feedback</div>
                            <div class="card-body">
                                <h5 class="card-title">Change The Future</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="./userFeedback.php"><input type="button" value=" Take to Form" class='btn btn-dark'></a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
                            <div class="card-header">Report issues</div>
                            <div class="card-body">
                                <h5 class="card-title">Maintain the Details</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <input type="button" value="Take to Report" class='btn btn-dark'>
                            </div>
                        </div>
                    </div>
                </div>
              
         
    </div>  
</body>
</html>