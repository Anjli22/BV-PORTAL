<?php
    session_start();
    
    include('connection.php');
    $email=$_POST['emailS'];
    $password=$_POST['passwordS'];
    $query = $db->prepare('SELECT * FROM student WHERE email=? '); //all the row where col = email will be selected
    $data=array($email); 
    $query->execute($data);
    if($query->rowcount()>0)
    {
       while($datarow=$query->fetch()) //convert the table into array ----->fetch()
        {
            // if(password_verify('1234', $datarow['pass']))
            // {
            if($password== $datarow['pass']){
                $_SESSION['user'] = $datarow['student_name'];
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