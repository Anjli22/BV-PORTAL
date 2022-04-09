<?php
    session_start();
    
    include('connection.php');
    $status=$_POST['status'];
    $pid = $_SESSION['id'];
    
    //to get sid 

    $query = $db->prepare('SELECT * FROM guardian WHERE pid = ?');
    $data=array($pid);
    $execute=$query->execute($data);
    while($datarow=$query->fetch()){ 
        
        $sid = $datarow['sid'];
    }

    
    //to get gate pass request card

    $query = $db->prepare('UPDATE `gatepassinfo` SET `sstatus`=? WHERE ssid =?'); 
    $data=array($status, $sid); 
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