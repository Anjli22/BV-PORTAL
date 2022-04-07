<?php
    
    include('connection.php');

    $author =$_POST['author'];
    $title =$_POST['title'];
    $content=$_POST['content'];
    
    $query = $db->prepare('INSERT INTO blog(sname,title,content) VALUES (?,?,?)');
    $data=array($author,$title,$content);
    
    $execute=$query->execute($data);
     if($execute)
        echo 0;
     else
        echo "data not inserted";




?>