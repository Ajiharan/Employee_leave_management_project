<?php
    session_start();
    include('DBConnection.php');

?>

<?php 
   
    $result="  <table class='table'>
    <thead class='thead-dark'>
        <tr>
        
        <th scope='col'>Name</th>
        <th scope='col'>Email</th>
        <th scope='col'>Date</th>
        <th scope='col'>days</th>
        <th scope='col'>Reason</th>
        <th scope='col'>Accept</th>
        <th scope='col'>Reject</th>
        </tr>
    </thead>
    
    <tbody>";
 try{
    $sql="select * from leave_details";
    $res=$con->prepare($sql);
    $res->execute();
    $tot=$res->rowCount();
    if($tot > 0){
        $login_users=$res->fetchAll();
       foreach( $login_users as $row){
        $result.= "<tr>
            <td>".$row->name."</td>
            <td>".$row->email_id."</td>
            <td>".$row->fro."</td>
            <td>".$row->days."</td>
            <td>".$row->details."</td>";
            if($row->isApproved==1){
                $result.="<td><i class='fa fa-check text-success' aria-hidden='true'></i></td>
                <td></td>
            </tr>";
            }else if($row->isApproved==2){
                $result.="<td></td>
                <td><i class='fa fa-ban text-danger' aria-hidden='true'></i></td>
            </tr>";
            }else{
                $result.="<td><button class='btn btn-success' onclick='updateDetails($row->id)'>Accept</button></td>
                <td><button class='btn btn-danger' onclick='updateRejectDetails($row->id)'>Reject</button></td>
            </tr>";
            }
            
       }
      $result.="
       </tbody></table>";
       echo  $result;
    }else{
       echo "<h4 class='text-center'>Records are not available</h4>";
    }

    
}catch(PDOException $e){
    echo "Error".$e->getMessage();
}

?>