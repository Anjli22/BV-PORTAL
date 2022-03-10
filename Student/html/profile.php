<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../common/side_nav.css">
    <link rel="stylesheet" href="../CSS/profile.css">
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

            <div>
                <div class="info-option">
                    <div class="option option1 " id="option1" onClick="getprofile();">Personal</div>
                    <div class="option option2" id="option2"  onClick="getEducation();" >Educational</div>
                    <div class="option option3" id="option3"  onClick="getHostel_info();">Hostel</div>
                </div>
                <div id="personal_info" > 
                    <!-- from backend -->
                </div> 
            </div>
    
        </div>
       
    

</body>

<script type="text/javascript">
        
    
    var id= <?php echo json_encode($_SESSION['id']); ?>;
    var option1=document.getElementById('option1');
    var option2=document.getElementById('option2');
    var option3= document.getElementById('option3');
        

    function getprofile()
    {
        option1.classList.add("option-select"); 
        option2.classList.remove("option-select");     
        option3.classList.remove("option-select");  

        console.log(id);
        $.ajax({
            type:"POST",
            url:"../ajax/getProfile.php",
            data: {id:id},
            success: function(data){
                    $('#personal_info').html(data);
                console.log(data);
                    

            }
        });
        
    }  
    getprofile();
    function getEducation(){
        option2.classList.add("option-select"); 
        option1.classList.remove("option-select");     
        option3.classList.remove("option-select");  


        $.ajax({
            type:"POST",
            url:"../ajax/getEducationInfo.php",
            data: {id:id},
            success: function(data){
                    $('#personal_info').html(data);
                console.log(data);
                    

            }
        });
        
    } 

    function getHostel_info(){

        option3.classList.add("option-select"); 
        option2.classList.remove("option-select");     
        option1.classList.remove("option-select");  

        $.ajax({
            type:"POST",
            url:"../ajax/getHostel_info.php",
            data: {id:id},
            success: function(data){
                    $('#personal_info').html(data);
                console.log(data);
                    

            }
        });
    }
    getprofile();   
</script>


<script src="../../common/home.js"></script>
</html>