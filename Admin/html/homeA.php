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
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href='./../css/homeA.css'>
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
            <div> 
                <div class="head">
                    <h2 class="heading">Spotlight</h2>
                    
                    
                </div>
                <div id="main" class="main"></div>
            </div>
        </div>
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

    var aid=document.getElementById('aid').innerText;

    $.ajax(
        {
            
        type:"POST",
        url:"../ajax/deleteAnnounc.php",
        data:{aid:aid},
        success:function(data)
        {
            if (data==0) 
            {
                alert("Deletion Successful");
                window.location.href="./homeA.php";
            }
                
            else{
                console.log(data);
            }
        }  
    });

}

</script>
<script src="../../common/home.js"></script>
   
      <script type="text/javascript">
         
          var body=document.getElementById('main').innerText;
          
          if(body=="") 
          $('#main').html("*****No current Information");

        getExperiences();
        function getExperiences()
        {
            
            $.ajax({
                type:"POST",
                url:"../ajax/gethomeA.php",
                data: {},
                success: function(data){
                    $('#main').html(data);

                }
            });

       }
  
</script>
</html>