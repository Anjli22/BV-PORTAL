<?php
    include('connection.php');
    
    $gp=$_POST['gp'];

    $query = $db->prepare('DELETE FROM `gatepassinfo` WHERE gid = ?');
    $data=array($gp);
    $execute=$query->execute($data);
    if($execute)
    {
        echo 0;

    }
    else{
        echo "Something went wrong";
    }
    
    
?>