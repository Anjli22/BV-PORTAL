<?php
    include('connection.php');
    
    $aid=$_POST['aid'];

    $query = $db->prepare('DELETE FROM `Announcement` WHERE aid = ?');
    $data=array($aid);
    $execute=$query->execute($data);
    if($execute)
    {
        echo 0;

    }
    else{
        echo "Something went wrong";
    }
    
    
?>