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
    <link rel="stylesheet" href="../css/gatepassform.css">
    <link rel="stylesheet" href="../css/chatbot.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" href="https://tse2.mm.bing.net/th?id=OIP.TRLdZgnfAkaU15U8ICMdZAHaGG&pid=Api&P=0&w=194&h=161" type="image/x-icon">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <title>Banasthali Portal</title>
    <title>Document</title>
</head>
<body></body>
    <?php include('../../common/navbar.php'); ?>
    <div>
        <?php include('../../common/sidebar.php'); ?>

        <div class="content-div">
            <div class="head"> Gate Pass Form </div>

            <form id="form" >

                <!-- <div>
                    <label>ID NO<span>*</span>:</label> <br/>
                    <input type="text" name="sid" id="sid" placeholder="e.g. BTBTE1" required>
                </div>
                <div>
                    <label>STUDENT NAME<span>*</span>:</label> <br/>
                    <input type="text" name="sname" id="sname"  required>
                </div> -->
                <div>
                    <label>CLASS<span>*</span>:</label><br/>
                    <input  type="text" name="class" id="class" required placeholder="e.g. ELECTRONICS AND COMMUNICATION" required>
                </div>
                <div>
                    <label>GUARDIAN NAME<span>*</span>:</label><br/>
                    <input type="text" name="pname"  id ="pname" required>
                </div>
                <div>
                    <label>REASON OF APPLYING FOR LEAVE<span>*</span>:</label><br/>
                    <textarea rows="4" type="text" name="reason" id="reason" ></textarea>
                </div>
                <div>
                    <label>DATE OF GOING ON LEAVE<span>*</span>: </label><br/>
                    <div>
                        <label>TO:</label><br/>  
                        <input type="date" name="leaveDate" id="leaveDate" required>
                    </div>
                    <div>
                        <label>FROM:</label><br/>  
                        <input type="date" name="returnDate" id="returnDate"  required>
                    </div>
                    
                </div>
                <div>  
                    <label>WHETHER THE STUDENT IS ALLOWED TO GO ALONE <span>*</span>:</label> <br/>
                    <label style="margin-right:2%;">Yes</label> 
                    <label>No</label> <br/>
                    <input type="radio" value="yes" name="alone"  style="margin-right:3%;" >
                    <input  type="radio" value="no" name="alone"> <br/>
          
                </div>
                <div class="submit-btn">
                    <input type="submit" name ="submit" id="submit" class='submit' onclick="input();">
                </div>

            </form>
        </div>
    </div>

    <div class="chatbot">
        <a href="bot.php" target="_blank">
            <img src="https://cdn3.iconfinder.com/data/icons/chat-bot-emoji-blue-filled-color/300/35451553Untitled-3-256.png" alt="chatbot" />
        </a>
    </div>

</body>
<script type="text/javascript">
    
    function input(){
            var form=document.getElementById('form');
            var data=new FormData(form); //object
                         
            $.ajax(
                {
                    
                type:"POST",
                url:"../ajax/insertgatepass.php",
                contentType:false,
                processData:false,
                data:data,
                success:function(data)
                {
                    if(data == 0)
                    {
                        alert("Request Successfully Submitted");
                        window.location.href="./gatepassMain.php";

                    }
                    else{
                        alert(data);   
                    }
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