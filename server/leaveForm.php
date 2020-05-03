<?php
    session_start();
    include('DBConnection.php');

?>


<?php

    $name=$_POST['name'];
    $dol=$_POST['dol'];
    $email=$_POST['email'];
    $days=$_POST['days'];
    $reason=$_POST['res'];
    $uid=$_SESSION['uid'];
    try{
       
            $sql="insert into leave_details(name,email_id,details,uid,days,fro) values(?,?,?,?,?,?)";
            $res=$con->prepare($sql);
            $res->execute([$name,$email,$reason,$uid,$days,$reason]);
            $_SESSION["register"]="Registered Sucessfully";
            echo 200;    
    }catch(PDOException $e){
        
        echo "Error".$e->getMessage();
    }

?>
