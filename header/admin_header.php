
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  
    <meta name="theme-color" content="#000000" />
    <link href="./css/index.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css"/>
    <link href="./css/leave.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body>
        <div class="navbar navbar-expand-lg navbar-info bg-light" id="top-nav">
            <div class="nav-logo">
                <div>
                 <a class="navbar-brand" href="#"><h2>Lancer</h2></a>
                </div>
            </div>
                 
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <div class="navbar-nav" id="div1">
                <div class="nav-item active">
                    <a href="../Employee_project/adminHome.php" class="nav-link">Home <span class="sr-only">(current)</span></a>
                </div>             
            
            </div>
            <div class="protect navbar-nav">

                <div class="nav-item" id="profile">
                    <a class="nav-link" href="#">Hi <?php echo $_SESSION['uname']?></a>
                </div>
                <div class="nav-item">
                    <a class="btn btn-dark text-light" href="../Employee_project/server/logout.php">Logout</a>
                </div>

            </div>
        </div>
          

         </div>
         <script src="https://kit.fontawesome.com/939ff5c0e6.js" crossorigin="anonymous"></script>
         <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>