<?php
    session_start();
    include('DBConnection.php');

?>

<?php
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    try{
        $sql="select * from admin where email_id=? and password=?";
        $res=$con->prepare($sql);
        $res->execute([$email,$pass]);
        $tot=$res->rowCount();
        if($tot > 0){
            $login_user=$res->fetch();
            $_SESSION['aid']=$login_user->id;
            $_SESSION['uname']=$login_user->name;
            echo 200;
           
        }else{
           echo 400;
        }
   
        
    }catch(PDOException $e){
        echo "Error".$e->getMessage();
    }

?>
