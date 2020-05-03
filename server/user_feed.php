<?php
    session_start();
    include('DBConnection.php');

?>


<?php

    $name=$_POST['name'];
    $email=$_POST['email'];  
    $comment=$_POST['comment'];
    $uid=$_SESSION['uid'];
    try{     
            $sql="insert into userfeedback(name,email,uid,comment) values(?,?,?,?)";
            $res=$con->prepare($sql);
            $res->execute([$name,$email,$uid,$comment]);        
            echo 200;    
    }catch(PDOException $e){
        
        echo "Error".$e->getMessage();
    }

?>
