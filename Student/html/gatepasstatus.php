<?php 
    session_start();
    if($_SESSION['id'] == "") 
    {
        header("Location:./index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../common/side_nav.css">
    <link rel="stylesheet" href="../../Parent/css/gatepass.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" href="https://tse2.mm.bing.net/th?id=OIP.TRLdZgnfAkaU15U8ICMdZAHaGG&pid=Api&P=0&w=194&h=161" type="image/x-icon">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title>Banasthali Portal</title>
    <title>Document</title>
    <link rel="stylesheet" href="../css/gatepassMain.css">
   
</head>
<body>
    <?php include('../../common/navbar.php'); ?>
    <div>
        <?php include('../../common/sidebar.php'); ?>

        <div class="content-div">
        <div class="heading"><h2>Gate Pass Requests</h2></div>
           
                
          <div class="main" id="main"></div>

           
    </div>

</body>
<script type="text/javascript">

function getdelete() {
    var result = confirm("Want to delete?");
    if (result) {
        getdelete1();
    }
}
 
function getdelete1(){

    var gp=document.getElementById('gp').innerText;
    console.log(gp);

    $.ajax(
        {
            
        type:"POST",
        url:"../ajax/deleteGatePass.php",
        data:{gp:gp},
        success:function(data)
        {
            if (data==0) 
            {
                alert("Gate pass deleted");
                window.location.href="./gatepassMain.php";
            }
                
            else{
                alert(data);
            }
        }  
    });

}

</script>
<script>
     var id= <?php echo json_encode($_SESSION['id']); ?>;
    getGatePass();
    function getGatePass(){
        $.ajax({
            type:"POST",
            url:"../ajax/gpRequest.php",
            data: {id:id},
            success: function(data){
                    $('#main').html(data);
                

            }
        });
        
    }
</script>

<script src="../../common/home.js"></script>
</html>