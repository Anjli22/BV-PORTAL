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

            <div>Select Subject</div>

            <div style="margin:20px; !important"></div>
                <form id="excel_form">
                    <div id="getCourseCode"> 
                        
                    </div>
                    <div>
                    <input type="file" name="excel_file" id="excel_file">
                    </div>
                    
                    <div>
                    <input type="submit" name="submit" onclick="send();" > 
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

<script type="text/javascript">
        getCourse();
        function getCourse(){
        
            
            $.ajax(
                {
                type:"POST",
                url:"../ajax/getcourses.php",
                contentType:false,
                processData:false,
                data:{},
                success:function(data)
                {
                    $('#getCourseCode').html(data);
                }
            });

        }
      

    </script>
    
    <script type="text/javascript">
        function send(){
            var excel_form=document.getElementById('excel_form');
            var data=new FormData(excel_form); 
            
            $.ajax(
                {
                type:"POST",
                url:"../ajax/result_excel.php",
                contentType:false,
                processData:false,
                data:data,
                success:function(data)
                {
                    alert(data);
                    // console.log(data);
                    window.location.reload(1);
                }
            });

        }
      

        </script>
    <script type="text/javascript">
        $('form').submit(function(e) {
        e.preventDefault();
    }); 
    </script>
 
<script src="../../common/home.js"></script>
</html>