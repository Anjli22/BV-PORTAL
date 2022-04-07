<?php
    
    include('connection.php');

    if(isset($_POST['content']))
    {


      $content=$_POST['content'];
      $ssid = $_POST['sid'];
      $sname =$_POST['sname'];
      $title =$_POST['title'];
      
      if($ssid == "" || $sname == "" || $title == "" ) 
      {
         echo "Please Fill all the Fields";
      }
      else{
         $query = $db->prepare('INSERT INTO blog(ssid,sname,title,content) VALUES (?,?,?,?)');
         $data=array($ssid,$sname,$title,$content);
         
         $execute=$query->execute($data);
   
         if($execute)
         {
            echo "Data Inserted Successfully";
         }
            
         else
            echo "data not inserted";
      }
   }



?>