
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
</body>
</html>