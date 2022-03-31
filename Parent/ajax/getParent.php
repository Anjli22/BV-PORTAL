<?php
    session_start();
    
    include('connection.php');
    $email=$_POST['emailP'];
    $password=$_POST['passwordP'];
    $query = $db->prepare('SELECT * FROM guardian WHERE email=? '); //all the row where col = email will be selected
    $data=array($email); 
    $query->execute($data);
    if($query->rowcount()>0)
    {
       while($datarow=$query->fetch()) //convert the table into array ----->fetch()
        {
            if($password== $datarow['passwd']){
                $_SESSION['user'] = $datarow['pName'];
                $_SESSION['id'] = $datarow['pid'];
                echo 0;
            }
            else 
                echo 1;
             
        }
        
    }

    else
        echo "Try Again";



?>