<?php
    
    include('connection.php');

    $content=$_POST['content'];
    
    $query = $db->prepare('INSERT INTO Announcement(content) VALUES (?)');
    $data=array($content);
    
    $execute=$query->execute($data);
     if($execute)
        echo 0;
     else
        echo "data not inserted";




?>