<?php
    
    session_start();
    include('connection.php');
     
    if(isset($_POST['content']))
    {

      $ssid = $_SESSION['id'];
      $sname =$_SESSION['user'];
      $title =$_POST['title'];
      $content=$_POST['content'];
      
      if($title == "" ) 
      {
         echo "Please Fill all the Fields";
      }
      else{
         $query = $db->prepare('INSERT INTO blog(ssid,sname,title,content) VALUES (?,?,?,?)');
         $data=array($ssid,$sname,$title,$content);
         
         $execute=$query->execute($data);
   
         if($execute)
         {
            echo 0;
            
         }
            
         else
            echo "data not inserted";
      }
   }



?>