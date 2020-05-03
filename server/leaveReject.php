<?php
    session_start();
    include('DBConnection.php');
?>

<?php
    $id=$_POST['id'];
    $rejected=2;

    try{
        $sql="update leave_details set isApproved=? where id=?";
        $res=$con->prepare($sql);
        $res->execute([$rejected,$id]);
        $tot=$res->rowCount();
        if($tot >0){
            echo "Updated";
        }else{
            echo "cannot update";
        }
    }catch(PDOException $e){
        echo "Error".$e->getMessage();
    }
?>