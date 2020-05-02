<?php
    session_start();
    include('DBConnection.php');

?>

<?php
    $name=$_POST['name'];
    $dob=$_POST['dob'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    try{
        $sql_fetch="select * from user where email_id=?";
        $res_fetch=$con->prepare($sql_fetch);
        $res_fetch->execute([$email]);
        $tot=$res_fetch->rowCount();
        if($tot > 0){
            echo 400;
        }else{
            $sql="insert into user(name,dob,email_id,password) values(?,?,?,?)";
            $res=$con->prepare($sql);
            $res->execute([$name,$dob,$email,$pass]);
            $_SESSION["register"]="Registered Sucessfully";
            echo 200;
        
        }
       
    }catch(PDOException $e){
        
        echo "Error".$e->getMessage();
    }
  
?>