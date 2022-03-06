<?php
    session_start();
    
    include('connection.php');
    $email=$_POST['emailA'];
    $password=$_POST['passwordA'];
    $query = $db->prepare('SELECT * FROM admin WHERE email=? '); //all the row where col = email will be selected
    $data=array($email); 
    $query->execute($data);
    if($query->rowcount()>0)
    {
       while($datarow=$query->fetch()) //convert the table into array ----->fetch()
        {
            if($password== $datarow['password']){
                $_SESSION['user'] = $datarow['uname'];
                $_SESSION['id'] = $datarow['id'];
                echo 0;
            }
            else 
                echo 1;
             
        }
        
    }

    else
        echo "Try Again";



?>