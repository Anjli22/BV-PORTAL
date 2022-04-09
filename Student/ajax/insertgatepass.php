<?php
session_start();
 include('connection.php');
 $sid = $_SESSION['id'];
 $sname = $_SESSION['user'];
 $class = $_POST['class'];
 $pname = $_POST['pname'];
 $reason = $_POST['reason'];
 $leavedate = $_POST['leaveDate'];
 $returndate = $_POST['returnDate'];
 $status = "initiated";
 if(isset($_POST['alone']))
{
    $mode =  $_POST['alone'];
    $query = $db->prepare('INSERT INTO gatepassinfo (ssid,sname,class,pname,reason,dateOfGoingOnLeave,returningDate,sstatus,goingAlone) VALUES (?,?,?,?,?,?,?,?,?)');
    $data = array($sid,$sname,$class,$pname,$reason,$leavedate,$returndate,$status, $mode);

    $execute =$query -> execute($data);
    if($execute) 
    echo 0;
    else
    echo 'something went wrong';
}
 else {
     echo "Please Fill all the Fields";
 }
 
?>

