<?php
    session_start();
    
    include('connection.php');
    $status=$_POST['status'];
    $gid=$_POST['gid'];
    //to get gate pass request card

    $query= $db->prepare('UPDATE `gatepassinfo` SET `sstatus`=? WHERE gid =?'); 
    $data=array($status, $gid); 
    $execute=$query->execute($data);

    if($execute)
    {
        echo 0;
    }
    
    else
    {
        echo "Something went Wrong, Please Try Again";            
    }
    



?>