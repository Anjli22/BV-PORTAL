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
    <link rel="stylesheet" href="../CSS/experienceSection.css">
    <link rel="stylesheet" href="../css/chatbot.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" href="https://tse2.mm.bing.net/th?id=OIP.TRLdZgnfAkaU15U8ICMdZAHaGG&pid=Api&P=0&w=194&h=161" type="image/x-icon">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title>Banasthali Portal</title>
    <title>Document</title>
</head>
<body>
    <?php include('../../common/navbar.php'); ?>
    <div>
        <?php include('../../common/sidebar.php'); ?>
        <div class="content-div">
            <div class="edit-icon">
                <a href="./AddBlog.php"><i class="bx bx-edit" type="solid"></i></a>
                <div class="edit-hover">Add Your's</div>
            </div>

            <div class="body">
                <div class="heading-exp">
                    <span>EXPERIENCE SECTION</span>
                </div>
            </div>
                    
                <div class="main" id="main"></div>                              
               
            
        </div>
    </div>

    <div class="chatbot">
        <a href="bot.php" target="_blank">
            <img src="https://cdn3.iconfinder.com/data/icons/chat-bot-emoji-blue-filled-color/300/35451553Untitled-3-256.png" alt="chatbot" />
        </a>
    </div>

   
    <script type="text/javascript">
        getExperiences();
        function getExperiences()
        {
            
            $.ajax({
                type:"POST",
                url:"../ajax/getExperience.php",
                data: {},
                success: function(data){
                    $('#main').html(data);

                }
            });

       }
    </script>
    
</body>



<script src="../../common/home.js"></script>
</html>