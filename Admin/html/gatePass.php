<?php 
    session_start();
    if($_SESSION['id'] == "") 
    {
        header("Location:../../Student/html/index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../common/side_nav.css">
    <link rel="stylesheet" href="../css/gatepass.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" href="https://tse2.mm.bing.net/th?id=OIP.TRLdZgnfAkaU15U8ICMdZAHaGG&pid=Api&P=0&w=194&h=161" type="image/x-icon">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title>Banasthali Portal</title>
    <title>Document</title>
</head>
<body>
    <?php include('../../common/navbar.php'); ?>
    <div>
        <?php include('../../common/sidebarA.php'); ?>

        <div class="content-div">
            <div class="heading"><h2>Gate Pass Requests</h2></div>
            <div id="main" class="main"></div>
                
        </div>
        
    </div>

</body>
<script>

$.ajax({
            type:"POST",
            url:"../ajax/getgatepass.php",          
            success: function(data){
                $('#main').html(data);
                // location.reload();
                }
            });
        
        
</script>
<script type="text/javascript">

    function accept(){
        var accept = document.getElementById ('accept').value;
        var gid= document.getElementById ('gid').innerText; 

        console.log(gid);
        $.ajax(
            { 
            type:"POST",
            url:"../ajax/statusGatePassA.php",
            data:{status:accept,gid:gid},
            success:function(data)
            {    
                if(data == 0)
                {
                    alert("Response have been recorded");   
                    location.reload();

                }
                else 
                {
                    alert(data);
                }

                
            }
        });

    }

     function decline(){
        var decline = document.getElementById ('decline').value;    
        var gid= document.getElementById ('gid').innerText; 
        console.log(decline);
         $.ajax(
             { 
             type:"POST",
             url:"../ajax/statusGatePassA.php",
             data:{status:decline,gid:gid},
             success:function(data)
             {    
                if(data == 0)
                {
                    alert("Response have been recorded");   
                    location.reload();

                }
                else 
                {
                    alert(data);
                }

                
             }
         });
     } 
    

</script>
<script src="../../common/home.js"></script>
</html>