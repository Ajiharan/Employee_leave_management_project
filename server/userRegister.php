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
        $sql="insert into user(name,dob,email_id,password) values(?,?,?,?)";
        $res=$con->prepare($sql);
        $res->execute([$name,$dob,$email,$pass]);
        $_SESSION["register"]="Registered Sucessfully";
        echo "Sucessfully Registered";
    
    }catch(PDOException $e){
        echo "Error".$e->getMessage();
    }
  
?>