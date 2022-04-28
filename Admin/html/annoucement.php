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
    <script src="https://cdn.ckeditor.com/4.18.0/standard/ckeditor.js"></script>
    <link rel="stylesheet" href="../css/annoucement.css">
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
            <div> <h2><span >**</span>Add Announcement<span>**</span></h2></div>
           <div class="main">
                <div class="form" id="form1">
                    <form id="form">
                            <textarea name="content" class="content" id="content" required></textarea>
                            <div class="submit-btn">                
                            <input type="submit" id="submit" name="submit" class="submit" required onclick="input();">
                        </div> 
                    </form>
                </div>
           </div>       
        </div>
        
    </div>

</body>
<script>
        CKEDITOR.replace('content');      
</script>
<script type="text/javascript">

        
        function input(){
            var form=document.getElementById('form');
            var data=new FormData(form); //object
            var content = document.getElementById('content').value;
            console.log(content);
            if(content != "")
            {
                $.ajax(
                {
                    type:"POST",
                    url:"../ajax/insertannounce.php",
                    contentType:false,
                    processData:false,
                    data:data,
                    success:function(data)
                    {     
                        if(data == 0)     
                        {
                            alert("Data Inserted Successfully");
                            location.reload();
                        }      
                        else 
                        {
                            alert(data);
                        }    
                        
                    }
                });
            }
            else 
            {
                alert("Please click the submit button again");
            }
            

        }
      

    </script>
    <script type="text/javascript">
        $('form').submit(function(e) {
        e.preventDefault();
        }); 
    </script>

</html>